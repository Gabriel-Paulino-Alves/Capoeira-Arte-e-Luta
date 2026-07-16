<?php
/**
 * O cabeçalho principal do tema.
 *
 * @package Capoeira_Theme
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.svg" type="image/svg+xml" />
    <?php wp_head(); ?>
</head>
<body>
<a class="skip" href="#main">Pular para o conteúdo</a>

<!-- ============ HEADER ============ -->
<header class="site-header">
  <div class="container container--wide">
    <div class="site-header__bar">
      <a class="brand" href="<?php echo esc_url( home_url( '/index' ) ); ?>" aria-label="Capoeira Arte Luta — início">
        <svg class="brand__mark" viewBox="0 0 22 38" fill="none" stroke-width="1.7" stroke-linecap="round" aria-hidden="true">
          <path d="M6 3 C 16 12, 16 26, 6 35" /><line x1="6" y1="3" x2="6" y2="35" /><circle cx="6" cy="26" r="4" />
        </svg>
        <span class="brand__txt">
          <span class="brand__name">Capoeira Arte Luta</span>
          <span class="brand__sub">Desde 1981 · Cascavel-PR</span>
        </span>
      </a>
      <nav class="nav" aria-label="Principal">
        <a href="<?php echo esc_url( home_url( '/index' ) ); ?>" aria-current="page">Início</a>
        <a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">Sobre</a>
        <a href="<?php echo esc_url( home_url( '/mestres' ) ); ?>">Mestres</a>
        <a href="<?php echo esc_url( home_url( '/aulas' ) ); ?>">Aulas</a>
        <a href="<?php echo esc_url( home_url( '/graduacao' ) ); ?>">Graduação</a>
        <a href="<?php echo esc_url( home_url( '/eventos' ) ); ?>">Eventos</a>
        <a href="<?php echo esc_url( home_url( '/midia' ) ); ?>">Mídia</a>
        <a href="<?php echo esc_url( home_url( '/apoie' ) ); ?>">Apoie</a>
        <a href="<?php echo esc_url( home_url( '/galeria' ) ); ?>">Galeria</a>
        <a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Contato</a>
      </nav>
      <div class="header-cta">
        <a class="btn btn--gold" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Entre em contato</a>
        <button class="icon-btn nav-toggle" data-menu-toggle aria-label="Abrir menu">
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="currentColor" stroke-width="1.6"><line x1="2" y1="6" x2="20" y2="6"/><line x1="2" y1="11" x2="20" y2="11"/><line x1="2" y1="16" x2="20" y2="16"/></svg>
        </button>
      </div>
    </div>
  </div>
</header>

<!-- ============ MOBILE MENU ============ -->
<div class="menu-overlay" data-menu aria-hidden="true">
  <div class="container">
    <div class="menu-overlay__top">
      <span class="brand">
        <svg class="brand__mark" viewBox="0 0 22 38" fill="none" stroke-width="1.7" stroke-linecap="round" aria-hidden="true">
          <path d="M6 3 C 16 12, 16 26, 6 35" /><line x1="6" y1="3" x2="6" y2="35" /><circle cx="6" cy="26" r="4" />
        </svg>
        <span class="brand__txt"><span class="brand__name">Arte Luta</span><span class="brand__sub">Cascavel-PR</span></span>
      </span>
      <button class="icon-btn" data-menu-close aria-label="Fechar menu">
        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="currentColor" stroke-width="1.6"><line x1="4" y1="4" x2="18" y2="18"/><line x1="18" y1="4" x2="4" y2="18"/></svg>
      </button>
    </div>
    <nav class="menu-list" aria-label="Menu">
      <a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>"><span class="mi">01</span> Sobre</a>
      <a href="<?php echo esc_url( home_url( '/mestres' ) ); ?>"><span class="mi">02</span> Mestres &amp; Equipe</a>
      <a href="<?php echo esc_url( home_url( '/aulas' ) ); ?>"><span class="mi">03</span> Aulas</a>
      <a href="<?php echo esc_url( home_url( '/graduacao' ) ); ?>"><span class="mi">04</span> Graduação</a>
      <a href="<?php echo esc_url( home_url( '/eventos' ) ); ?>"><span class="mi">05</span> Eventos</a>
      <a href="<?php echo esc_url( home_url( '/midia' ) ); ?>"><span class="mi">06</span> Livros &amp; Mídia</a>
      <a href="<?php echo esc_url( home_url( '/apoie' ) ); ?>"><span class="mi">07</span> Projetos Sociais</a>
      <a href="<?php echo esc_url( home_url( '/galeria' ) ); ?>"><span class="mi">08</span> Galeria</a>
      <a href="<?php echo esc_url( home_url( '/contato' ) ); ?>"><span class="mi">09</span> Contato</a>
    </nav>
    <div class="menu-overlay__foot">
      <a href="https://wa.me/5545999998844">WhatsApp · 45 99999-8844</a>
      <a href="mailto:aristeumestrinho@gmail.com">aristeumestrinho@gmail.com</a>
    </div>
  </div>
</div>

