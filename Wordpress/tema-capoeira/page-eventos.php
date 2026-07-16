<?php
/**
 * Template para a página eventos
 *
 * @package Capoeira_Theme
 */

get_header(); ?>

<main id="main">


  <section class="section phero">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal">
          <p class="phero__index"><b>05</b> / Eventos</p>
          <h1 class="display" style="font-size:clamp(2.3rem,1.6rem + 3.6vw,4.4rem);">A Arte Luta o ano inteiro em movimento.</h1>
        </div>
        <div class="c4 reveal" data-d="1">
          <p class="phero__lead lead">Batizados, troca de cordas, competições e encontros culturais. Acompanhe o que já aconteceu e o que vem por aí.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURED -->
  <section class="section bg-ink">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:center;">
        <div class="c6 reveal">
          <div class="figure figure--static" style="aspect-ratio:4/3;"><img class="treat" src="<?php echo esc_url( get_option('cap_img_cover_png', get_template_directory_uri() . '/assets/img/cover.png') ); ?>" alt="Cerimônia da Capoeira Arte Luta com todo o grupo reunido" /></div>
        </div>
        <div class="c6 start7 reveal" data-d="1">
          <p class="award__year">Rio de Janeiro · 8 de dezembro de 2024</p>
          <h2 class="h-xl" style="color:var(--paper);">Melhor Escola de Capoeira do Brasil.</h2>
          <p style="margin-top:1.4rem;max-width:46ch;">No 6º Encontro de Baluartes da Capoeira, nosso grupo conquistou o 1º lugar na categoria Melhor Escola de Capoeira do ano — um reconhecimento de décadas de trabalho.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- DESTAQUE 2 -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:center;">
        <div class="c6 reveal">
          <p class="eyebrow">Encontro do ano</p>
          <h2 class="h-xl">Batizado 2025</h2>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Nosso maior encontro do ano — graduações, rodas, samba e muita festa.</p>
            <p>Um dia em que toda a família Arte Luta se reúne: alunos recebem suas cordas, mestres comandam a roda e a cultura ganha as ruas de Cascavel.</p>
          </div>
          <div class="mt-cta"><a class="btn btn--gold" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Quero participar do próximo evento <span class="arw" aria-hidden="true">→</span></a></div>
        </div>
        <div class="c5 start8 reveal" data-d="1">
          <div class="figure" style="aspect-ratio:3/4;"><img class="treat" src="<?php echo esc_url( get_option('cap_img_berimbau_ouro_jpg', get_template_directory_uri() . '/assets/img/berimbau-ouro.jpg') ); ?>" alt="Material comemorativo do festival Berimbau de Ouro" /></div>
        </div>
      </div>
    </div>
  </section>

  <!-- AGENDA -->
  <section class="section bg-paper-2">
    <div class="container container--wide">
      <div class="grid cols-12" style="margin-bottom:1.5rem;">
        <div class="c5 reveal"><p class="eyebrow">Agenda</p><h2 class="h-lg">Próximos eventos.</h2></div>
        <div class="c6 start6 reveal" data-d="1"><p class="maxr">A agenda completa de batizados, encontros e competições é atualizada ao longo do ano. Quer ser avisado? Fale com a gente e entre para a nossa lista.</p></div>
      </div>
      <div class="elist reveal" data-d="1">
        <div class="elrow"><span class="elrow__n">Anual</span><h3 class="elrow__t">Batizado &amp; Troca de Cordas</h3><p class="elrow__d">Cascavel-PR · A maior celebração do calendário Arte Luta. Datas divulgadas nas redes e nas unidades.</p></div>
        <div class="elrow"><span class="elrow__n">Anual</span><h3 class="elrow__t">Encontros culturais e apresentações</h3><p class="elrow__d">Rodas abertas, samba de raiz e mostras nas escolas e praças da cidade.</p></div>
        <div class="elrow"><span class="elrow__n">Nacional</span><h3 class="elrow__t">Competições e Encontros de Baluartes</h3><p class="elrow__d">Representando Cascavel e o Paraná em eventos por todo o Brasil.</p></div>
      </div>
      <p class="figcap" style="margin-top:1.6rem;"><span class="figcap__n">—</span> Calendário detalhado com datas e inscrições disponível em breve.</p>
    </div>
  </section>

  <section class="section bg-ink">
    <div class="container">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal"><p class="eyebrow">Faça parte</p><h2 class="display" style="color:var(--paper);font-size:clamp(2.2rem,1.5rem + 3.5vw,4rem);">A próxima roda espera por você.</h2></div>
        <div class="c4 reveal" data-d="1" style="display:flex;align-items:end;padding-bottom:.6rem;"><a class="btn btn--gold btn--lg" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Quero participar <span class="arw" aria-hidden="true">→</span></a></div>
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