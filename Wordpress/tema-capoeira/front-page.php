<?php
/**
 * Template para a página index
 *
 * @package Capoeira_Theme
 */

get_header(); ?>

<main id="main">


  <!-- ============ HERO ============ -->
  <section class="hero">
    <div class="hero__media">
      <img src="<?php echo esc_url( get_option('cap_img_hero_jpg', get_template_directory_uri() . '/assets/img/hero.jpg') ); ?>" alt="Grupo da Capoeira Arte Luta reunido no palco durante apresentação" />
    </div>
    <span class="hero__side" aria-hidden="true">Patrimônio Cultural Brasileiro</span>
    <div class="container container--wide hero__inner">
      <p class="eyebrow hero__eyebrow">Associação Capoeira Arte Luta · Fundada em 1981</p>
      <h1 class="display">Capoeira é arte, é luta, é um jeito de viver.</h1>
      <p class="hero__sub">Há mais de 40 anos formando atletas, artistas e cidadãos em Cascavel-PR — guiados por disciplina, respeito e a ginga da nossa cultura.</p>
      <div class="hero__actions">
        <a class="btn btn--gold btn--lg" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Agende uma aula experimental <span class="arw" aria-hidden="true">→</span></a>
        <a class="btn btn--ghost btn--lg" href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">Conheça nossa história</a>
      </div>
      <div class="hero__stats">
        <div class="hero__stat"><b>40+</b><span>Anos de história</span></div>
        <div class="hero__stat"><b>6</b><span>Unidades na cidade</span></div>
        <div class="hero__stat"><b>50+</b><span>Crianças atendidas</span></div>
        <div class="hero__stat"><b>2024</b><span>Melhor escola do Brasil</span></div>
      </div>
    </div>
  </section>

  <!-- ============ AWARDS / PROVA SOCIAL ============ -->
  <section class="section section--tight bg-ink">
    <div class="container container--wide">
      <div class="awards">
        <div class="reveal">
          <p class="eyebrow">Reconhecimento</p>
          <p class="h-md" style="color:var(--paper);max-width:14ch;line-height:1.1;">Uma trajetória premiada dentro e fora do Brasil.</p>
        </div>
        <div class="vline" aria-hidden="true"></div>
        <div class="reveal" data-d="1">
          <p class="award__year">Rio de Janeiro · Dez 2024</p>
          <h3 class="award__title">Melhor Escola de Capoeira do Brasil</h3>
          <p class="award__desc">1º lugar no 6º Encontro de Baluartes da Capoeira.</p>
        </div>
        <div class="vline" aria-hidden="true"></div>
        <div class="reveal" data-d="2">
          <p class="award__year">Salvador-BA · 2022</p>
          <h3 class="award__title">Berimbau de Ouro</h3>
          <p class="award__desc">O “Oscar da Capoeira”, maior honraria da arte no país.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ BEM-VINDO (asymmetric, image overlap) ============ -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:center;">
        <div class="c5 reveal">
          <div class="figure" style="aspect-ratio:4/5;">
            <img class="treat" src="<?php echo esc_url( get_option('cap_img_samba_png', get_template_directory_uri() . '/assets/img/samba.png') ); ?>" alt="Roda de samba e capoeira em apresentação cultural" />
          </div>
          <p class="figcap"><span class="figcap__n">↳</span> Apresentação cultural · roda, canto e samba de raiz</p>
        </div>
        <div class="c6 start7 reveal" data-d="1">
          <p class="eyebrow">Bem-vindo</p>
          <h2 class="h-xl">Sejam bem-vindos à Associação Capoeira Arte Luta.</h2>
          <div class="stack maxr" style="margin-top:1.8rem;">
            <p class="lead">Nossas portas estão abertas para quem quer aprender e praticar a nobre arte da Capoeira — guiado por valores humanos, disciplina e respeito.</p>
            <p>Aqui, fortalecemos corpo e espírito para vencer, com leveza e ginga, os desafios da vida. Em mais de quatro décadas, muito já realizamos. E seguimos preparando cada novo capoeirista para a próxima roda.</p>
          </div>
          <div class="mt-cta">
            <a class="btn btn--ink" href="<?php echo esc_url( home_url( '/aulas' ) ); ?>">Comece a treinar <span class="arw" aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ O QUE OFERECEMOS (numbered editorial list) ============ -->
  <section class="section bg-paper-2">
    <div class="container container--wide">
      <div class="grid cols-12" style="margin-bottom:1rem;">
        <div class="c4 reveal"><p class="eyebrow">O que oferecemos</p></div>
        <div class="c7 start6 reveal" data-d="1">
          <h2 class="h-lg">Três pilares que sustentam cada roda — da primeira ginga à graduação de mestre.</h2>
        </div>
      </div>
      <div class="elist reveal" data-d="1" style="margin-top:2rem;">
        <div class="elrow">
          <span class="elrow__n">01</span>
          <h3 class="elrow__t">Aulas para todas as idades</h3>
          <p class="elrow__d">Crianças, jovens e adultos. Da primeira ginga à graduação de mestre, num método que respeita o ritmo de cada aluno.</p>
        </div>
        <div class="elrow">
          <span class="elrow__n">02</span>
          <h3 class="elrow__t">Tradição que vem da raiz</h3>
          <p class="elrow__d">Fundamentados na Capoeira Angola e na Capoeira Regional, preservamos a história enquanto aperfeiçoamos o ensino.</p>
        </div>
        <div class="elrow">
          <span class="elrow__n">03</span>
          <h3 class="elrow__t">Eventos que viram memória</h3>
          <p class="elrow__d">Batizados, troca de cordas, competições e encontros culturais ao longo de todo o ano.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FILOSOFIA (ink, image bleeds right) ============ -->
  <section class="section bg-ink" style="overflow:hidden;">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:center;">
        <div class="c6 reveal">
          <p class="eyebrow">Nossa filosofia</p>
          <h2 class="h-xl" style="color:var(--paper);">A Capoeira como instrumento de educação.</h2>
          <div class="stack maxr" style="margin-top:1.8rem;">
            <p>Mais que um esporte, a Capoeira é patrimônio cultural brasileiro. Pela roda, desenvolvemos o potencial de cada aluno com igualdade, liberdade e fraternidade — marcas registradas da Arte Luta.</p>
            <p>Ética, técnica e solidariedade caminham juntas, sempre tendo o Mestre como referência.</p>
          </div>
          <div class="mt-cta">
            <a class="tlink" href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">Entenda nosso método <span aria-hidden="true">→</span></a>
          </div>
        </div>
        <div class="c6 reveal" data-d="1">
          <div class="figure figure--static" style="aspect-ratio:5/4;">
            <img class="treat" src="<?php echo esc_url( get_option('cap_img_cover_png', get_template_directory_uri() . '/assets/img/cover.png') ); ?>" alt="Grupo da Capoeira Arte Luta reunido em evento de graduação" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PALAVRA DO MESTRE ============ -->
  <section class="section">
    <div class="container">
      <div class="pquote reveal" style="margin-left:clamp(0px,8vw,7rem);">
        <span class="pquote__mark" aria-hidden="true">“</span>
        <blockquote>A Capoeira tem por princípio a valorização do Ser Humano, como indivíduo consciente que se adapta e atua construtivamente no mundo em que vive.</blockquote>
        <p class="pquote__by"><b>Mestre Mestrinho</b> — Aristeu Oliveira dos Santos · Cascavel-PR</p>
      </div>
    </div>
  </section>

  <!-- ============ ONDE TREINAR (units) ============ -->
  <section class="section bg-paper-2">
    <div class="container container--wide">
      <div class="grid cols-12" style="margin-bottom:2.5rem;align-items:end;">
        <div class="c6 reveal">
          <p class="eyebrow">Onde treinar</p>
          <h2 class="h-xl">Seis unidades<br />espalhadas por Cascavel.</h2>
        </div>
        <div class="c5 start8 reveal" data-d="1">
          <p class="maxr">Encontre a roda mais perto de você. Cada unidade tem dias, horários e ministrantes próprios — fale com a gente e descubra a melhor para sua rotina.</p>
          <div class="mt-cta" style="display:flex;gap:.8rem;flex-wrap:wrap;">
            <a class="btn btn--ghost" href="https://www.google.com/maps/search/?api=1&query=Major+Oscar+Ramos+Pereira+500+Neva+Cascavel+PR" target="_blank" rel="noopener">Ver no mapa</a>
            <a class="btn btn--ink" href="https://wa.me/5545999998844" target="_blank" rel="noopener">Falar no WhatsApp</a>
          </div>
        </div>
      </div>
      <div class="reveal" data-d="1" style="overflow-x:auto;">
        <table class="utable">
          <thead>
            <tr><th>Unidade</th><th>Endereço</th><th>Ministrante</th><th>Contato</th></tr>
          </thead>
          <tbody>
            <tr>
              <td class="cell-name"><span class="uname">Academia Arte Luta</span><br /><span class="utag">Sede</span></td>
              <td class="uaddr"><a href="https://www.google.com/maps/search/?api=1&query=Major+Oscar+Ramos+Pereira+500+Neva+Cascavel+PR" target="_blank" rel="noopener"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 22s7-7.58 7-13a7 7 0 1 0-14 0c0 5.42 7 13 7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>Maj. Oscar Ramos Pereira, 500 — Neva</a></td>
              <td class="umin">Mestre Mestrinho, Mestra Fátima, Mestre Sirso e Prof. Muzamba</td>
              <td class="ucontact">45 99923-1394<br />45 99999-8844</td>
            </tr>
            <tr>
              <td class="cell-name"><span class="uname">Jardim Veneza</span></td>
              <td class="uaddr"><a href="https://www.google.com/maps/search/?api=1&query=Rua+Antonio+Massaro+481+Cascavel+PR" target="_blank" rel="noopener"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 22s7-7.58 7-13a7 7 0 1 0-14 0c0 5.42 7 13 7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>Rua Antônio Massaro, 481</a></td>
              <td class="umin">Mestre Soninho</td>
              <td class="ucontact">45 99822-2755</td>
            </tr>
            <tr>
              <td class="cell-name"><span class="uname">It's Time Fight</span></td>
              <td class="uaddr"><a href="https://www.google.com/maps/search/?api=1&query=Rua+General+Osorio+1289+Parque+Sao+Paulo+Cascavel+PR" target="_blank" rel="noopener"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 22s7-7.58 7-13a7 7 0 1 0-14 0c0 5.42 7 13 7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>Rua General Osório, 1289 — Pq. São Paulo</a></td>
              <td class="umin">Professor Xuxu</td>
              <td class="ucontact">45 98825-6613</td>
            </tr>
            <tr>
              <td class="cell-name"><span class="uname">Colégio FAG</span></td>
              <td class="uaddr"><a href="https://www.google.com/maps/search/?api=1&query=Colegio+FAG+Avenida+das+Torres+500+Cascavel+PR" target="_blank" rel="noopener"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 22s7-7.58 7-13a7 7 0 1 0-14 0c0 5.42 7 13 7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>Av. das Torres, 500 — Bairro FAG</a></td>
              <td class="umin">Graduada Léo</td>
              <td class="ucontact">45 99980-1800</td>
            </tr>
            <tr>
              <td class="cell-name"><span class="uname">Escola Porto + Seguro</span></td>
              <td class="uaddr"><a href="https://www.google.com/maps/search/?api=1&query=Rua+Agostinho+dos+Santos+1425+Jardim+Brasilia+Cascavel+PR" target="_blank" rel="noopener"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 22s7-7.58 7-13a7 7 0 1 0-14 0c0 5.42 7 13 7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>Rua Agostinho dos Santos, 1425 — Jd. Brasília</a></td>
              <td class="umin">Graduada Léo</td>
              <td class="ucontact">45 99980-1800</td>
            </tr>
            <tr>
              <td class="cell-name"><span class="uname">Educação em Tempo Integral</span></td>
              <td class="uaddr">Rede municipal de Cascavel</td>
              <td class="umin">Coord. Mestre Mestrinho e equipe</td>
              <td class="ucontact">45 99999-8844</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ============ IMPACTO SOCIAL / IR ============ -->
  <section class="section bg-ink">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:center;">
        <div class="c2 reveal" aria-hidden="true">
          <span style="font-family:var(--serif);font-size:clamp(4rem,9vw,8rem);color:var(--gold-2);line-height:.8;font-weight:600;">4%</span>
        </div>
        <div class="c7 start3 reveal" data-d="1">
          <p class="eyebrow">Incentivo fiscal · Lei Rouanet</p>
          <h2 class="h-lg" style="color:var(--paper);">Sua empresa pode transformar vidas — sem custo extra.</h2>
          <p style="margin-top:1.4rem;max-width:48ch;">Destine 4% do Imposto de Renda devido aos nossos projetos sociais e leve mais crianças e jovens para dentro da roda. O valor é abatido do imposto — não é uma despesa a mais.</p>
        </div>
        <div class="c3 reveal" data-d="2" style="display:flex;align-items:center;">
          <a class="btn btn--gold btn--lg" href="<?php echo esc_url( home_url( '/apoie' ) ); ?>">Quero apoiar <span class="arw" aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ HINO ============ -->
  <section class="section">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:center;">
        <div class="c5 reveal">
          <p class="eyebrow">Cultura · Hino</p>
          <h2 class="h-lg">Hino da Capoeira Arte Luta</h2>
          <p class="figcap" style="margin-top:.6rem;font-size:.8rem;letter-spacing:.08em;">Composição de Mestre Mestrinho e Miguel Neves</p>
          <p style="margin-top:1.4rem;max-width:42ch;">Canto, berimbau e memória: a identidade do nosso grupo também vive na música. Ouça o hino que abre as nossas rodas e cerimônias.</p>
          <div class="mt-cta">
            <a class="btn btn--ink" href="https://www.youtube.com/results?search_query=Hino+Capoeira+Arte+Luta+Mestrinho" target="_blank" rel="noopener">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M4 2.5v11l9-5.5z"/></svg>
              Ouça no YouTube
            </a>
          </div>
        </div>
        <div class="c6 start7 reveal" data-d="1">
          <!-- Letra completa do hino pode ser inserida aqui -->
          <div class="eblock" style="border-color:var(--line);">
            <p class="eyebrow eyebrow--plain" style="margin-bottom:1.2rem;">Trecho</p>
            <p class="lead" style="font-style:italic;">“Capoeira Arte Luta, tradição que não se cala — na ginga deste povo, a história brasileira fala.”</p>
            <p class="figcap" style="margin-top:1.4rem;"><span class="figcap__n">—</span> Letra completa disponível em breve nesta página.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PRE-FOOTER CTA ============ -->
  <section class="section bg-ink" style="text-align:left;">
    <div class="container">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal">
          <p class="eyebrow">Venha para a roda</p>
          <h2 class="display" style="color:var(--paper);font-size:clamp(2.2rem,1.5rem + 3.5vw,4rem);">Sua primeira ginga começa hoje.</h2>
        </div>
        <div class="c4 reveal" data-d="1" style="display:flex;gap:.8rem;flex-wrap:wrap;justify-content:flex-start;align-items:end;padding-bottom:.6rem;">
          <a class="btn btn--gold btn--lg" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Agende uma aula <span class="arw" aria-hidden="true">→</span></a>
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