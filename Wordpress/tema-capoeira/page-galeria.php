<?php
/**
 * Template para a página galeria
 *
 * @package Capoeira_Theme
 */

get_header(); ?>

<main id="main">


  <section class="section phero">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal">
          <p class="phero__index"><b>08</b> / Galeria</p>
          <h1 class="display" style="font-size:clamp(2.6rem,1.6rem + 4.6vw,5rem);">A roda em imagens.</h1>
        </div>
        <div class="c4 reveal" data-d="1">
          <p class="phero__lead lead">Batizados, viagens, premiações e o dia a dia das aulas — a memória visual de mais de quatro décadas.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:clamp(1.5rem,3vw,2.5rem);">
    <div class="container container--wide">
      <div class="gal-filter reveal">
        <button class="active" data-filter="all">Todos</button>
        <button data-filter="apresentacoes">Apresentações</button>
        <button data-filter="eventos">Eventos &amp; Batizados</button>
        <button data-filter="premiacoes">Premiações</button>
      </div>
      <div class="gal-grid reveal" data-d="1" style="grid-auto-rows:clamp(150px,21vw,230px);">
        <figure class="gal-item gs-6" data-cat="eventos"><img class="treat" src="<?php echo esc_url( get_option('cap_img_hero_jpg', get_template_directory_uri() . '/assets/img/hero.jpg') ); ?>" alt="Grupo da Capoeira Arte Luta reunido no palco" /><figcaption class="gal-cap">Encontro do grupo · Cascavel</figcaption></figure>
        <figure class="gal-item gs-3 tall" data-cat="apresentacoes"><img class="treat" src="<?php echo esc_url( get_option('cap_img_samba_png', get_template_directory_uri() . '/assets/img/samba.png') ); ?>" alt="Apresentação de samba e capoeira" /><figcaption class="gal-cap">Samba de raiz</figcaption></figure>
        <figure class="gal-item gs-3" data-cat="apresentacoes"><img class="treat" src="<?php echo esc_url( get_option('cap_img_hino_jpg', get_template_directory_uri() . '/assets/img/hino.jpg') ); ?>" alt="Apresentação musical em homenagem ao Mestre Mestrinho" /><figcaption class="gal-cap">Homenagem · 50 anos Mestrinho</figcaption></figure>
        <figure class="gal-item gs-3" data-cat="eventos"><img class="treat" src="<?php echo esc_url( get_option('cap_img_tietagem_png', get_template_directory_uri() . '/assets/img/tietagem.png') ); ?>" alt="Integrantes em evento cultural" /><figcaption class="gal-cap">Cultura Cascavel</figcaption></figure>
        <figure class="gal-item gs-6" data-cat="eventos"><img class="treat" src="<?php echo esc_url( get_option('cap_img_cover_png', get_template_directory_uri() . '/assets/img/cover.png') ); ?>" alt="Cerimônia de graduação com todo o grupo" /><figcaption class="gal-cap">Cerimônia de graduação</figcaption></figure>
        <figure class="gal-item gs-3 tall" data-cat="premiacoes"><img class="treat" src="<?php echo esc_url( get_option('cap_img_berimbau_ouro_jpg', get_template_directory_uri() . '/assets/img/berimbau-ouro.jpg') ); ?>" alt="Material do festival Berimbau de Ouro" /><figcaption class="gal-cap">Berimbau de Ouro · Salvador</figcaption></figure>
        <figure class="gal-item gs-3" data-cat="apresentacoes"><img class="treat" src="<?php echo esc_url( get_option('cap_img_team_png', get_template_directory_uri() . '/assets/img/team.png') ); ?>" alt="Mestres e instrutores com berimbaus" /><figcaption class="gal-cap">Os mestres</figcaption></figure>
        <figure class="gal-item gs-3" data-cat="premiacoes"><img src="<?php echo esc_url( get_option('cap_img_selo_50anos_png', get_template_directory_uri() . '/assets/img/selo-50anos.png') ); ?>" alt="Selo dos 50 anos do Mestre Mestrinho" style="object-fit:contain;background:#15110b;padding:1.4rem;" /><figcaption class="gal-cap">50 anos de Capoeira</figcaption></figure>
        <figure class="gal-item gs-6" data-cat="eventos"><img class="treat" src="<?php echo esc_url( get_option('cap_img_cascavel_png', get_template_directory_uri() . '/assets/img/cascavel.png') ); ?>" alt="Vista de Cascavel ao entardecer" /><figcaption class="gal-cap">Cascavel-PR · nossa cidade</figcaption></figure>
      </div>
      <p class="figcap reveal" style="margin-top:2rem;"><span class="figcap__n">—</span> Novos álbuns de batizados, viagens e apresentações serão adicionados em breve.</p>
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