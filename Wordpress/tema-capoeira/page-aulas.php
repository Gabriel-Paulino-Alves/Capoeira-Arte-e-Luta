<?php
/**
 * Template para a página aulas
 *
 * @package Capoeira_Theme
 */

get_header(); ?>

<main id="main">


  <section class="section phero">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal">
          <p class="phero__index"><b>03</b> / Aulas</p>
          <h1 class="display" style="font-size:clamp(2.4rem,1.6rem + 4vw,4.8rem);">Encontre sua roda. Comece hoje.</h1>
          <p class="phero__lead lead" style="max-width:46ch;">Aulas para todas as idades, em 6 unidades de Cascavel.</p>
          <div class="mt-cta"><a class="btn btn--gold btn--lg" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Agende uma aula experimental <span class="arw" aria-hidden="true">→</span></a></div>
        </div>
        <div class="c4 reveal" data-d="1" style="align-self:stretch;">
          <div class="figure" style="height:100%;min-height:280px;"><img class="treat" src="<?php echo esc_url( get_option('cap_img_samba_png', get_template_directory_uri() . '/assets/img/samba.png') ); ?>" alt="Roda de capoeira em apresentação cultural" /></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROPOSTA -->
  <section class="section bg-ink">
    <div class="container container--wide">
      <div class="grid cols-12">
        <div class="c4 reveal"><p class="eyebrow">Nossa proposta</p><h2 class="h-lg" style="color:var(--paper);">Angola e Regional, lado a lado.</h2></div>
        <div class="c7 start6 reveal" data-d="1">
          <div class="stack maxr">
            <p class="lead" style="color:var(--paper);">A Capoeira Arte Luta une duas escolas de respeitada tradição — Angola e Regional — para preservar a raiz enquanto aperfeiçoa o ensino.</p>
            <p>Aqui, sua evolução depende muito mais da sua vontade e dedicação do que de qualquer teste físico. Mantemos organização, disciplina, união e solidariedade entre todos os integrantes.</p>
            <p>Anualmente realizamos avaliações técnicas que promovem o aluno ao próximo nível de graduação. <a class="tlink" href="<?php echo esc_url( home_url( '/graduacao' ) ); ?>">Veja o sistema de cordas <span aria-hidden="true">→</span></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PARA QUEM É -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12" style="margin-bottom:1rem;">
        <div class="c5 reveal"><p class="eyebrow">Para quem é</p><h2 class="h-xl">Da primeira ginga à roda da vida.</h2></div>
      </div>
      <div class="elist reveal" data-d="1" style="margin-top:1.5rem;">
        <div class="elrow"><span class="elrow__n">Crianças</span><h3 class="elrow__t">Coordenação, disciplina e respeito desde cedo</h3><p class="elrow__d">A Capoeira como base de formação: o corpo aprende junto com os valores, no ritmo do canto e da roda.</p></div>
        <div class="elrow"><span class="elrow__n">Jovens</span><h3 class="elrow__t">Energia, cultura e pertencimento</h3><p class="elrow__d">Um espaço de identidade e convivência — onde a tradição encontra a vontade de crescer.</p></div>
        <div class="elrow"><span class="elrow__n">Adultos</span><h3 class="elrow__t">Condicionamento, expressão e comunidade</h3><p class="elrow__d">Movimento completo para corpo e mente, no encontro de gente de todas as histórias.</p></div>
      </div>
    </div>
  </section>

  <!-- ONDE TREINAR -->
  <section class="section bg-paper-2">
    <div class="container container--wide">
      <div class="grid cols-12" style="margin-bottom:2.5rem;align-items:end;">
        <div class="c6 reveal"><p class="eyebrow">Onde treinar</p><h2 class="h-xl">Seis unidades<br />espalhadas por Cascavel.</h2></div>
        <div class="c5 start8 reveal" data-d="1"><p class="maxr">Cada unidade tem dias, horários e ministrantes próprios. Fale com a gente e descubra a melhor para sua rotina.</p><div class="mt-cta" style="display:flex;gap:.8rem;flex-wrap:wrap;"><a class="btn btn--ghost" href="https://www.google.com/maps/search/?api=1&query=Major+Oscar+Ramos+Pereira+500+Neva+Cascavel+PR" target="_blank" rel="noopener">Ver no mapa</a><a class="btn btn--ink" href="https://wa.me/5545999998844" target="_blank" rel="noopener">Falar no WhatsApp</a></div></div>
      </div>
      <div class="reveal" data-d="1" style="overflow-x:auto;">
        <table class="utable">
          <thead><tr><th>Unidade</th><th>Endereço</th><th>Ministrante</th><th>Contato</th></tr></thead>
          <tbody>
            <tr><td class="cell-name"><span class="uname">Academia Arte Luta</span><br /><span class="utag">Sede</span></td><td class="uaddr">Maj. Oscar Ramos Pereira, 500 — Neva</td><td class="umin">Mestre Mestrinho, Mestra Fátima, Mestre Sirso e Prof. Muzamba</td><td class="ucontact">45 99923-1394<br />45 99999-8844</td></tr>
            <tr><td class="cell-name"><span class="uname">Jardim Veneza</span></td><td class="uaddr">Rua Antônio Massaro, 481</td><td class="umin">Mestre Soninho</td><td class="ucontact">45 99822-2755</td></tr>
            <tr><td class="cell-name"><span class="uname">It's Time Fight</span></td><td class="uaddr">Rua General Osório, 1289 — Pq. São Paulo</td><td class="umin">Professor Xuxu</td><td class="ucontact">45 98825-6613</td></tr>
            <tr><td class="cell-name"><span class="uname">Colégio FAG</span></td><td class="uaddr">Av. das Torres, 500 — Bairro FAG</td><td class="umin">Graduada Léo</td><td class="ucontact">45 99980-1800</td></tr>
            <tr><td class="cell-name"><span class="uname">Escola Porto + Seguro</span></td><td class="uaddr">Rua Agostinho dos Santos, 1425 — Jd. Brasília</td><td class="umin">Graduada Léo</td><td class="ucontact">45 99980-1800</td></tr>
            <tr><td class="cell-name"><span class="uname">Educação em Tempo Integral</span></td><td class="uaddr">Rede municipal de Cascavel</td><td class="umin">Coord. Mestre Mestrinho e equipe</td><td class="ucontact">45 99999-8844</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section bg-ink">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal">
          <p class="eyebrow">Um projeto social, de portas abertas</p>
          <h2 class="display" style="color:var(--paper);font-size:clamp(2.2rem,1.5rem + 3.5vw,4rem);">As aulas são gratuitas. Basta querer aprender.</h2>
        </div>
        <div class="c4 reveal" data-d="1" style="display:flex;align-items:end;padding-bottom:.6rem;"><a class="btn btn--gold btn--lg" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Agende sua aula <span class="arw" aria-hidden="true">→</span></a></div>
      </div>
      <p class="reveal" data-d="1" style="margin-top:1.6rem;max-width:62ch;">Há mais de 40 anos abrimos a roda para crianças, jovens e adultos — usando a Capoeira como ferramenta de educação e cidadania, sem cobrar pela vontade de aprender.</p>

      <div style="margin-top:clamp(2.6rem,5vw,4.2rem);">
        <p class="eyebrow reveal">Conheça mais o projeto</p>
        <div class="grid cols-12 reveal" data-d="1" style="margin-top:1.3rem;">
          <a class="c4 eblock explore-card" href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">
            <span class="ec-label">01 · Nossa história</span>
            <h3 class="h-md">40 anos transformando vidas pela Capoeira em Cascavel.</h3>
            <span class="ec-go">Conhecer <span aria-hidden="true">→</span></span>
          </a>
          <a class="c4 eblock explore-card" href="<?php echo esc_url( home_url( '/apoie' ) ); ?>">
            <span class="ec-label">02 · Projetos sociais</span>
            <h3 class="h-md">Aulas gratuitas que mudam infâncias inteiras.</h3>
            <span class="ec-go">Conhecer <span aria-hidden="true">→</span></span>
          </a>
          <a class="c4 eblock explore-card" href="<?php echo esc_url( home_url( '/mestres' ) ); ?>">
            <span class="ec-label">03 · Mestres &amp; equipe</span>
            <h3 class="h-md">As pessoas por trás de cada roda.</h3>
            <span class="ec-go">Conhecer <span aria-hidden="true">→</span></span>
          </a>
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