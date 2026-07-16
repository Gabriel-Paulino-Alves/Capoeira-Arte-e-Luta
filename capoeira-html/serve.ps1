param([int]$Port = 5188, [string]$Root = (Get-Location).Path)

$listener = [System.Net.Sockets.TcpListener]::new([System.Net.IPAddress]::Loopback, $Port)
$listener.Start()
Write-Host "Serving $Root on http://localhost:$Port"

$handler = {
  param($client, $Root)
  $mime = @{
    '.html' = 'text/html; charset=utf-8'; '.css' = 'text/css; charset=utf-8'
    '.js' = 'application/javascript; charset=utf-8'; '.svg' = 'image/svg+xml'
    '.png' = 'image/png'; '.jpg' = 'image/jpeg'; '.jpeg' = 'image/jpeg'
    '.json' = 'application/json'; '.ico' = 'image/x-icon'; '.webp' = 'image/webp'
  }
  try {
    $client.ReceiveTimeout = 5000
    $client.SendTimeout = 8000
    $stream = $client.GetStream()
    $stream.ReadTimeout = 5000
    $reader = [System.IO.StreamReader]::new($stream)
    $requestLine = $reader.ReadLine()
    if (-not $requestLine) { return }
    while ($reader.Peek() -ge 0) { $l = $reader.ReadLine(); if ($l -eq '') { break } }

    $parts = $requestLine -split ' '
    $rawPath = if ($parts.Length -ge 2) { $parts[1] } else { '/' }
    $path = ($rawPath -split '\?')[0]
    $path = [System.Uri]::UnescapeDataString($path)
    if ($path -eq '/' -or $path -eq '') { $path = '/index.html' }
    $full = Join-Path $Root ($path.TrimStart('/').Replace('/', [System.IO.Path]::DirectorySeparatorChar))

    if (Test-Path $full -PathType Leaf) {
      $bytes = [System.IO.File]::ReadAllBytes($full)
      $ext = [System.IO.Path]::GetExtension($full).ToLower()
      $ct = $mime[$ext]; if (-not $ct) { $ct = 'application/octet-stream' }
      $header = "HTTP/1.0 200 OK`r`nContent-Type: $ct`r`nContent-Length: $($bytes.Length)`r`nCache-Control: no-cache`r`nConnection: close`r`n`r`n"
      $hb = [System.Text.Encoding]::ASCII.GetBytes($header)
      $stream.Write($hb, 0, $hb.Length); $stream.Write($bytes, 0, $bytes.Length)
    } else {
      $body = [System.Text.Encoding]::UTF8.GetBytes("404 Not Found: $path")
      $header = "HTTP/1.0 404 Not Found`r`nContent-Type: text/plain; charset=utf-8`r`nContent-Length: $($body.Length)`r`nConnection: close`r`n`r`n"
      $hb = [System.Text.Encoding]::ASCII.GetBytes($header)
      $stream.Write($hb, 0, $hb.Length); $stream.Write($body, 0, $body.Length)
    }
    $stream.Flush()
  } catch {
  } finally {
    try { $client.Close() } catch {}
  }
}

$pool = [RunspaceFactory]::CreateRunspacePool(2, 24)
$pool.Open()

while ($true) {
  try {
    $client = $listener.AcceptTcpClient()
    $ps = [PowerShell]::Create()
    $ps.RunspacePool = $pool
    [void]$ps.AddScript($handler).AddArgument($client).AddArgument($Root)
    [void]$ps.BeginInvoke()
  } catch {
  }
}
