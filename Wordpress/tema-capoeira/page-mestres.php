<?php
/**
 * Template para a página mestres
 *
 * @package Capoeira_Theme
 */

get_header(); ?>

<main id="main">


  <section class="section phero">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal">
          <p class="phero__index"><b>02</b> / Mestres &amp; Equipe</p>
          <h1 class="display" style="font-size:clamp(2.4rem,1.6rem + 4vw,4.6rem);">As pessoas por trás de cada roda.</h1>
        </div>
        <div class="c4 reveal" data-d="1">
          <p class="phero__lead lead">Quatro gerações no cumprimento de uma mesma missão: ensinar a Capoeira como caminho de cidadania.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="reveal">
    <div class="container container--wide">
      <div class="figure figure--static" style="aspect-ratio:21/9;"><img class="treat" src="<?php echo esc_url( get_option('cap_img_team_png', get_template_directory_uri() . '/assets/img/team.png') ); ?>" alt="Mestres e instrutores da Capoeira Arte Luta com seus berimbaus" /></div>
    </div>
  </section>

  <!-- MESTRE MESTRINHO -->
  <section class="section">
    <div class="container container--wide">
      <div class="mestre reveal">
        <div>
          <div class="figure figure--static" style="aspect-ratio:1/1;background:#171009;"><img class="treat" src="<?php echo esc_url( get_option('cap_img_selo_50anos_png', get_template_directory_uri() . '/assets/img/selo-50anos.png') ); ?>" alt="Selo comemorativo dos 50 anos de Capoeira do Mestre Mestrinho" style="object-fit:contain;filter:none;" /></div>
          <ul class="awardlist">
            <li><span class="yr">2008</span><span>Prêmio Andersen Festival (Itália) — trabalho social com crianças em risco</span></li>
            <li><span class="yr">2019</span><span>Mérito Cultural da Academia de Medalhística Cívico Militar do Brasil</span></li>
            <li><span class="yr">2019</span><span>5º melhor do Sul do Brasil — Prêmio Culturas Populares</span></li>
            <li><span class="yr">2022</span><span>Berimbau de Ouro / “Oscar da Capoeira” (Salvador) — Conselheiro pelo Paraná</span></li>
            <li><span class="yr">H.C.</span><span>Dr. Honoris Causa — Org. Mundial dos Defensores dos Direitos Humanos</span></li>
            <li><span class="yr">RJ</span><span>Reconhecido Baluarte da Capoeira (Rio de Janeiro)</span></li>
          </ul>
        </div>
        <div>
          <p class="eyebrow">Presidente de Honra · Formado Mestre em 1987</p>
          <h2 class="h-xl">Mestre Mestrinho</h2>
          <p class="mestre__role">Aristeu Oliveira dos Santos</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Iniciou na Capoeira em 1974 e nunca mais parou.</p>
            <p>Educador físico pós-graduado em Educação Especial, é autor dos livros <em>Capoeira Arte-Luta Brasileira</em> (4 edições desde 1994) e da autobiografia <em>Mestrinho — Maior é Deus, pequeno sou eu</em>.</p>
            <p>Da primeira aula em Cascavel (1981) ao trabalho com meninos de rua (1988), das escolas municipais à coordenação da Educação em Tempo Integral — uma vida inteira dedicada a ensinar.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MESTRA FÁTIMA -->
  <section class="section bg-paper-2">
    <div class="container container--wide">
      <div class="mestre mestre--flip reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_option('cap_img_hino_jpg', get_template_directory_uri() . '/assets/img/hino.jpg') ); ?>" alt="Apresentação musical em homenagem ao Mestre Mestrinho" /></div>
        </div>
        <div>
          <p class="eyebrow">Formada Mestra em 2022</p>
          <h2 class="h-xl">Mestra Fátima</h2>
          <p class="mestre__role">Maria de Fátima Neri</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Na Capoeira desde 1983 e instrutora desde 1987.</p>
            <p>Graduada em Educação Física e especialista em educação física infantil, especial e recreação. Dá aulas nas escolas municipais de Cascavel desde 1996 e coordena a modalidade de Jogos na Educação em Tempo Integral.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EQUIPE -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12" style="margin-bottom:1rem;">
        <div class="c4 reveal"><p class="eyebrow">Nossa equipe</p><h2 class="h-lg">Instrutores e educadores.</h2></div>
        <div class="c6 start6 reveal" data-d="1"><p class="maxr">Uma equipe que mantém viva a tradição em cada unidade — dos mestres formados aos educadores da Educação em Tempo Integral.</p></div>
      </div>
      <div class="grid cols-12 reveal" data-d="1" style="margin-top:1.5rem;">
        <div class="c4"><div class="eblock"><p class="uname">Mestre Soninho</p><p class="cord-level" style="margin-top:.4rem;">Jardim Veneza</p></div></div>
        <div class="c4"><div class="eblock"><p class="uname">Mestre Sirso</p><p class="cord-level" style="margin-top:.4rem;">Sede · Arte Luta</p></div></div>
        <div class="c4"><div class="eblock"><p class="uname">Professor Muzamba</p><p class="cord-level" style="margin-top:.4rem;">Sede · Arte Luta</p></div></div>
        <div class="c4"><div class="eblock"><p class="uname">Professor Xuxu</p><p class="cord-level" style="margin-top:.4rem;">It's Time Fight</p></div></div>
        <div class="c4"><div class="eblock"><p class="uname">Graduada Léo</p><p class="cord-level" style="margin-top:.4rem;">Colégio FAG · Porto + Seguro</p></div></div>
        <div class="c4"><div class="eblock"><p class="uname">Educação em Tempo Integral</p><p class="cord-level" style="margin-top:.4rem;">Francielle, Gabrielli, Letícia, Douglas, Luiz Fernando, Bebê, Raimundo e Vera</p></div></div>
      </div>
    </div>
  </section>

  <section class="section bg-ink">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal"><p class="eyebrow">Treine com a nossa equipe</p><h2 class="h-lg" style="color:var(--paper);">Encontre a unidade mais perto de você.</h2></div>
        <div class="c4 reveal" data-d="1" style="display:flex;gap:.8rem;flex-wrap:wrap;"><a class="btn btn--ghost" href="<?php echo esc_url( home_url( '/aulas' ) ); ?>">Ver as aulas</a><a class="btn btn--gold" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Aula experimental <span class="arw" aria-hidden="true">→</span></a></div>
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