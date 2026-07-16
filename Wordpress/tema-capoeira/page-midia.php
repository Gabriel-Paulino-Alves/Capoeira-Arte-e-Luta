<?php
/**
 * Template para a página midia
 *
 * @package Capoeira_Theme
 */

get_header(); ?>

<main id="main">


  <section class="section phero">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal">
          <p class="phero__index"><b>06</b> / Livros &amp; Mídia</p>
          <h1 class="display" style="font-size:clamp(2.3rem,1.6rem + 3.6vw,4.4rem);">A história da Arte Luta também está nos livros.</h1>
        </div>
        <div class="c4 reveal" data-d="1">
          <p class="phero__lead lead">Obras que registram a trajetória do Mestre Mestrinho, a filosofia da Arte Luta e a música de raiz da Capoeira.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- LIVRO 1 -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:center;">
        <div class="c4 reveal">
          <div class="bookcover">
            <span class="bc-kicker">Mestre Mestrinho</span>
            <span class="bc-title">Capoeira<br />Arte Luta<br />Brasileira</span>
            <span class="bc-foot">4 edições · 1994 — 2022</span>
          </div>
        </div>
        <div class="c6 start6 reveal" data-d="1">
          <p class="eyebrow">Livro · Referência</p>
          <h2 class="h-lg">Capoeira — Arte Luta Brasileira</h2>
          <div class="stack maxr" style="margin-top:1.2rem;">
            <p>A obra de referência do Mestre Mestrinho, da 1ª edição (1994) à 4ª, lançada em novembro de 2022. Um estudo da Capoeira como arte, esporte e instrumento de educação.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- LIVRO 2 -->
  <section class="section bg-paper-2">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:center;">
        <div class="c6 reveal">
          <p class="eyebrow">Autobiografia</p>
          <h2 class="h-lg">Mestrinho — Maior é Deus, pequeno sou eu</h2>
          <div class="stack maxr" style="margin-top:1.2rem;">
            <p>A autobiografia do mestre, em primeira pessoa: a infância, a chegada a Cascavel, o trabalho social e uma vida inteira dedicada à Capoeira. 1ª edição em novembro de 2022; 2ª edição em junho de 2023.</p>
          </div>
        </div>
        <div class="c4 start9 reveal" data-d="1">
          <div class="bookcover bookcover--paper">
            <span class="bc-kicker">Autobiografia</span>
            <span class="bc-title">Mestrinho<br /><em style="font-weight:400;">Maior é Deus,<br />pequeno sou eu</em></span>
            <span class="bc-foot">1ª ed. 2022 · 2ª ed. 2023</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CD/DVD -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:center;">
        <div class="c4 reveal">
          <div class="bookcover" style="aspect-ratio:1/1;">
            <div class="bc-disc"></div>
            <span class="bc-title" style="font-style:italic;">Coração<br />Caipira</span>
            <span class="bc-foot">Mestrinho &amp; Amigos · CD e DVD</span>
          </div>
        </div>
        <div class="c6 start6 reveal" data-d="1">
          <p class="eyebrow">Música · CD e DVD</p>
          <h2 class="h-lg">Coração Caipira — Mestrinho &amp; Amigos</h2>
          <div class="stack maxr" style="margin-top:1.2rem;">
            <p>Música de raiz tocada com os instrumentos da Capoeira. Berimbau, viola e voz num registro que celebra a cultura caipira e o espírito de brasilidade.</p>
          </div>
          <div class="mt-cta"><a class="btn btn--ink" href="https://wa.me/5545999998844" target="_blank" rel="noopener">Como adquirir <span class="arw" aria-hidden="true">→</span></a></div>
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