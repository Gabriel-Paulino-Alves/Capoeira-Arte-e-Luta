# Capoeira Arte Luta — site institucional

Site institucional estático (HTML/CSS/JS puro, sem build) para a Associação
Capoeira Arte Luta — Cascavel-PR. Direção visual editorial de alto contraste:
**tinta (quase-preto) · branco-osso · ouro de berimbau**, tipografia Fraunces
(serifada) + Archivo (grotesca), fotos tratadas em duotone para unificar a
identidade. Inspirado no tom de uma instituição cultural reconhecida.

## Estrutura

```
index.html        Início (home)
sobre.html        Sobre — história, missão, números
mestres.html      Mestres & Equipe
aulas.html        Aulas — proposta, públicos, unidades
graduacao.html    Graduação — sistema de cordas
eventos.html      Eventos — destaques e agenda
midia.html        Livros & Mídia
apoie.html        Projetos Sociais / incentivo fiscal (4% IR)
galeria.html      Galeria (com filtros)
contato.html      Contato — info + formulário
css/style.css     Design system completo
js/main.js        Menu mobile, reveal on scroll, filtro da galeria, form
assets/img/       Fotos (puxadas do site atual) e selos
assets/favicon.svg
serve.ps1         Servidor estático local (só para pré-visualizar no Windows)
```

## Como ver localmente

Como não há etapa de build, basta abrir `index.html` no navegador. Para um
preview servido (recomendado, evita restrições de `file://`):

```powershell
powershell -ExecutionPolicy Bypass -File serve.ps1 -Port 5188
# depois abra http://localhost:5188
```

Para publicar: suba a pasta inteira em qualquer hospedagem estática
(Netlify, GitHub Pages, Hostinger, Vercel). Não precisa de `serve.ps1` em produção.

## O que personalizar / completar

- **Fotos** — em `assets/img/` (puxadas de capoeiraarteluta.com.br). Troque por
  versões em alta quando tiver. O tratamento duotone é aplicado via CSS (classe
  `.treat`), então é só substituir os arquivos.
- **Hino** — `index.html` tem um trecho de exemplo e um botão "Ouça no YouTube"
  apontando para uma busca. Cole a letra completa e o link real do vídeo.
- **Redes sociais** — os links de Instagram/Facebook/YouTube no rodapé e no
  contato estão como `https://instagram.com` etc. Substitua pelas URLs reais.
- **Apoiadores** — a home tem a seção "Quem caminha com a gente" pronta para
  receber os logos dos parceiros.
- **Formulário** — `contato.html` envia via `mailto:` (sem back-end). Para
  receber direto numa caixa de entrada/planilha, integre um serviço como
  Formspree/Getform alterando o `action` do `<form>`.
- **Eventos** — a agenda usa itens recorrentes. Adicione datas concretas quando
  o calendário do ano estiver definido.

## Notas de design

- Sem mascotes/ilustrações fofas, sem gradientes coloridos de fundo, sem cards
  com sombra flutuante (usamos hairlines e contraste), sem emojis, sem stock.
- Layout variado seção a seção (assimetria, listas numeradas, tabelas
  editoriais, citações deslocadas).
- As cordas da Graduação usam swatches de duas cores com corte seco — representam
  a corda real, não são gradiente decorativo.
