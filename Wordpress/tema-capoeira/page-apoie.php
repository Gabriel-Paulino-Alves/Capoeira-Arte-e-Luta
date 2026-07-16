<?php
/**
 * Template para a página apoie
 *
 * @package Capoeira_Theme
 */

get_header(); ?>

<main id="main">


  <section class="section phero">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c2 reveal" aria-hidden="true"><span style="font-family:var(--serif);font-size:clamp(4.5rem,11vw,10rem);color:var(--gold);line-height:.8;font-weight:600;">4%</span></div>
        <div class="c7 start3 reveal" data-d="1">
          <p class="phero__index"><b>07</b> / Projetos Sociais</p>
          <h1 class="display" style="font-size:clamp(2.1rem,1.5rem + 3.2vw,4rem);">Do Imposto de Renda da sua empresa podem mudar uma infância.</h1>
        </div>
      </div>
      <div class="grid cols-12" style="margin-top:2rem;">
        <div class="c7 start3 reveal" data-d="2">
          <p class="lead maxr">Sua empresa destina parte do imposto que já pagaria. Nós transformamos isso em aulas, cultura e futuro para crianças e jovens de Cascavel. Simples assim.</p>
          <div class="mt-cta"><a class="btn btn--gold btn--lg" href="#apoiar">Quero apoiar agora <span class="arw" aria-hidden="true">→</span></a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- COMO FUNCIONA -->
  <section class="section bg-ink">
    <div class="container container--wide">
      <div class="grid cols-12" style="margin-bottom:1rem;">
        <div class="c5 reveal"><p class="eyebrow">Como funciona</p><h2 class="h-xl" style="color:var(--paper);">Três passos. Custo zero a mais.</h2></div>
        <div class="c5 start7 reveal" data-d="1" style="align-self:center;"><p>O incentivo fiscal permite que parte do imposto devido seja direcionada a projetos culturais aprovados — em vez de ir integralmente para o caixa geral.</p></div>
      </div>
      <div class="steps reveal" data-d="1" style="margin-top:1rem;">
        <div class="step"><span class="step__n">1</span><div><h3 class="h-md">Sua empresa destina 4% do IR devido</h3><p>Sobre o lucro real, parte do imposto devido é direcionada aos nossos projetos aprovados.</p></div></div>
        <div class="step"><span class="step__n">2</span><div><h3 class="h-md">O valor é abatido do imposto</h3><p>Não é custo adicional: é o mesmo imposto, agora com destino certo e transparente.</p></div></div>
        <div class="step"><span class="step__n">3</span><div><h3 class="h-md">Mais crianças entram para a roda</h3><p>Novos alunos passam a frequentar gratuitamente nossos cursos de Capoeira e cultura.</p></div></div>
      </div>
    </div>
  </section>

  <!-- PROJETOS -->
  <section class="section">
    <div class="container container--wide">
      <p class="eyebrow reveal">Nossos projetos</p>
      <div class="grid cols-12 reveal" data-d="1" style="margin-top:1rem;">
        <div class="c6">
          <div class="eblock" style="height:100%;">
            <h3 class="h-md">Capoeira e Cidadania na Roda da Vida</h3>
            <p style="margin-top:1rem;">Aulas gratuitas de Capoeira para 50 crianças e adolescentes de baixa renda no Salão Comunitário do Bairro Neva, desde 2005. Projeto aprovado pelo Ministério da Cidadania e incentivado pela Lei Rouanet.</p>
            <p style="margin-top:1.2rem;"><a class="tlink" href="#apoiar">Conhecer o projeto <span aria-hidden="true">→</span></a></p>
          </div>
        </div>
        <div class="c6">
          <div class="eblock" style="height:100%;">
            <h3 class="h-md">Mestrinho — Uma Vida Dedicada à Capoeira</h3>
            <p style="margin-top:1rem;">Projeto do livro biográfico que registra e preserva a memória do mestre e da Arte Luta — patrimônio vivo da cultura de Cascavel e do Paraná.</p>
            <p style="margin-top:1.2rem;"><a class="tlink" href="<?php echo esc_url( home_url( '/midia' ) ); ?>">Conhecer o projeto <span aria-hidden="true">→</span></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DADOS PARA APOIO -->
  <section class="section bg-paper-2" id="apoiar">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:start;">
        <div class="c5 reveal">
          <p class="eyebrow">Apoio direto</p>
          <h2 class="h-lg">Prefere contribuir diretamente?</h2>
          <p style="margin-top:1.2rem;" class="maxr">Pessoas físicas e empresas também podem apoiar com doações diretas. Toda contribuição vira aula, cultura e oportunidade.</p>
          <div class="mt-cta" style="display:flex;gap:.8rem;flex-wrap:wrap;"><a class="btn btn--gold" href="https://wa.me/5545999998844" target="_blank" rel="noopener">Falar sobre incentivo fiscal</a><a class="btn btn--ghost" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Enviar mensagem</a></div>
        </div>
        <div class="c5 start8 reveal" data-d="1">
          <div class="eblock" style="border-color:var(--ink);">
            <p class="eyebrow eyebrow--plain" style="margin-bottom:1.2rem;">Dados bancários</p>
            <div class="meta-row" style="margin:0;padding:0;border:0;gap:1.6rem 2.4rem;">
              <div class="mi"><b>Banco do Brasil</b><span>Banco 001</span></div>
              <div class="mi"><b>3508-4</b><span>Agência</span></div>
              <div class="mi"><b>51.282-6</b><span>Conta</span></div>
            </div>
            <hr class="rule" style="margin:1.6rem 0;" />
            <p style="font-size:.95rem;">Titular: Associação de Capoeira Arte Luta · Cascavel-PR</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-ink">
    <div class="container">
      <div class="pquote reveal">
        <span class="pquote__mark" aria-hidden="true">“</span>
        <blockquote>A Capoeira Arte Luta agradece a todos os amigos e colaboradores que tornam nosso trabalho possível.</blockquote>
        <p class="pquote__by"><b>Obrigado por caminhar com a gente.</b></p>
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