<?php
/**
 * Template para a página sobre
 *
 * @package Capoeira_Theme
 */

get_header(); ?>

<main id="main">


  <!-- PAGE HERO -->
  <section class="section phero">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal">
          <p class="phero__index"><b>01</b> / Sobre</p>
          <h1 class="display" style="font-size:clamp(2.4rem,1.6rem + 4vw,4.6rem);">40 anos transformando vidas pela Capoeira.</h1>
        </div>
        <div class="c4 reveal" data-d="1">
          <p class="phero__lead lead">Conheça a história de um projeto que começou com um sonho — e virou referência nacional em educação pela cultura.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WIDE IMAGE -->
  <section class="reveal">
    <div class="container container--wide">
      <div class="figure figure--static" style="aspect-ratio:21/9;">
        <img class="treat" src="<?php echo esc_url( get_option('cap_img_cover_png', get_template_directory_uri() . '/assets/img/cover.png') ); ?>" alt="Grande grupo da Capoeira Arte Luta reunido em cerimônia no palco" />
      </div>
    </div>
  </section>

  <!-- NOSSA HISTÓRIA -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12">
        <div class="c4 reveal">
          <p class="eyebrow">Nossa história</p>
          <h2 class="h-lg">De um sonho vindo de Curitiba a uma referência nacional.</h2>
        </div>
        <div class="c7 start6 reveal" data-d="1">
          <div class="stack maxr">
            <p class="lead">Em 20 de agosto de 1981, nascia em Cascavel-PR a Associação de Capoeira Serpente do Oeste — hoje conhecida como Capoeira Arte Luta.</p>
            <p>À frente dela, um nome que se confunde com a própria trajetória do grupo: <strong>Aristeu Oliveira dos Santos, o Mestre Mestrinho</strong>.</p>
            <p>Vindo de Curitiba, Mestrinho chegou à cidade com uma missão clara: levar a Capoeira a quem nunca teve acesso a ela, usando a arte como ferramenta de formação moral, física e cidadã. Quatro décadas depois, essa missão continua viva em cada roda.</p>
            <p><a class="tlink" href="<?php echo esc_url( home_url( '/mestres' ) ); ?>">Conheça o Mestre Mestrinho <span aria-hidden="true">→</span></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MISSÃO (ink quote) -->
  <section class="section bg-ink">
    <div class="container">
      <div class="pquote reveal">
        <span class="pquote__mark" aria-hidden="true">“</span>
        <blockquote>Valorizar o ser humano. Cuidar das pessoas de forma próxima e humana, educando-as para que cuidem de si, do próximo e do mundo.</blockquote>
        <p class="pquote__by"><b>Nossa missão</b> — Associação Capoeira Arte Luta</p>
      </div>
    </div>
  </section>

  <!-- POR QUE CAPOEIRA EDUCA -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:start;">
        <div class="c5 reveal">
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_option('cap_img_tietagem_png', get_template_directory_uri() . '/assets/img/tietagem.png') ); ?>" alt="Integrantes da Capoeira Arte Luta em evento cultural" /></div>
        </div>
        <div class="c6 start7 reveal" data-d="1">
          <p class="eyebrow">Por que Capoeira educa</p>
          <h2 class="h-xl">Uma atividade completa — corpo, mente e emoção ao mesmo tempo.</h2>
          <div class="stack maxr" style="margin-top:1.6rem;">
            <p>Pela ginga e pelo canto, o aluno desenvolve equilíbrio, disciplina, noção de espaço e expressão. Sem perceber, ele também exercita Matemática, Português, História e Geografia, situando-se no tempo e na cultura do seu país.</p>
            <p>É por isso que, para nós, a Capoeira é o maior patrimônio cultural brasileiro — uma fonte inesgotável de aprendizado.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NÚMEROS -->
  <section class="section--tight section bg-ink">
    <div class="container container--wide">
      <p class="eyebrow reveal">Nossos números</p>
      <div class="statstrip reveal" data-d="1" style="margin-top:1.5rem;">
        <div><b>40+</b><span>Anos de atuação</span></div>
        <div><b>6</b><span>Unidades em Cascavel</span></div>
        <div><b>50+</b><span>Crianças atendidas gratuitamente</span></div>
        <div><b>1º</b><span>Melhor escola do Brasil · 2024</span></div>
      </div>
    </div>
  </section>

  <!-- CTA ROW -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal"><h2 class="h-lg">Continue conhecendo a Arte Luta.</h2></div>
        <div class="c4 reveal" data-d="1" style="display:flex;gap:.8rem;flex-wrap:wrap;">
          <a class="btn btn--ghost" href="<?php echo esc_url( home_url( '/mestres' ) ); ?>">Conheça os mestres</a>
          <a class="btn btn--ink" href="<?php echo esc_url( home_url( '/apoie' ) ); ?>">Projetos sociais <span class="arw" aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PATROCINADORES ============ -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;margin-bottom:clamp(1.8rem,3vw,2.6rem);">
        <div class="c6 reveal">
          <p class="eyebrow">Nossos patrocinadores</p>
          <h2 class="h-lg">Quem caminha com a gente.</h2>
        </div>
        <div class="c5 start8 reveal" data-d="1">
          <p class="maxr">A Associação Capoeira Arte Luta agradece a todos os amigos, empresas e instituições que tornam o nosso trabalho possível.</p>
        </div>
      </div>
      <div class="sponsors-grid reveal" data-d="1">
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_01_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-01.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_02_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-02.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_03_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-03.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_04_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-04.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_05_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-05.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_06_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-06.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_07_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-07.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_08_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-08.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_09_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-09.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_10_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-10.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_11_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-11.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_12_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-12.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_13_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-13.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_14_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-14.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_15_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-15.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_16_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-16.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
        <div class="sponsor"><img src="<?php echo esc_url( get_option('cap_img_sponsors_sponsor_17_png', get_template_directory_uri() . '/assets/img/sponsors/sponsor-17.png') ); ?>" alt="Patrocinador da Capoeira Arte Luta" loading="lazy" /></div>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>