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
  <section class="section">
    <div class="container container--wide">
      <div class="mestre mestre--flip reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Maria_de_Fátima_Neri_Mestra_Fátima-removebg-preview.png' ); ?>" alt="Retrato de Mestra Fátima, da Capoeira Arte Luta" /></div>
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

  <!-- NOSSA EQUIPE — intro -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="grid cols-12">
        <div class="c4 reveal"><p class="eyebrow">Nossa equipe</p><h2 class="h-lg">Instrutores, graduados e educadores.</h2></div>
        <div class="c6 start6 reveal" data-d="1"><p class="maxr">Uma equipe que mantém viva a tradição em cada unidade — dos mestres formados aos educadores da Educação em Tempo Integral. <em>Perfis abaixo com texto de exemplo (lorem ipsum) enquanto aguardamos as biografias definitivas de cada integrante.</em></p></div>
      </div>
    </div>
  </section>

  <!-- MESTRE SONINHO -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="mestre reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Irondi_Aires_Gonçalves_Mestre_Soninho-removebg-preview.png' ); ?>" alt="Retrato de Mestre Soninho, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Mestre · Unidade Jardim Veneza</p>
          <h2 class="h-lg">Mestre Soninho</h2>
          <p class="mestre__role">Irondi Aires Gonçalves</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, ut enim ad minim veniam quis nostrud exercitation ullamco laboris.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTRAMESTRA PITY -->
  <section class="section section--tight">
    <div class="container container--wide">
      <div class="mestre mestre--flip reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Justumara_Fernanda_dos_Santos_Serrano_Contramestra_Pity-removebg-preview.png' ); ?>" alt="Retrato de Contramestra Pity, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Contramestra · Equipe Arte Luta</p>
          <h2 class="h-lg">Contramestra Pity</h2>
          <p class="mestre__role">Justumara Fernanda dos Santos Serrano</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <p>Nisi ut aliquip ex ea commodo consequat, duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INSTRUTOR MUZAMBA -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="mestre reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Milton_dos_Santos_Brito_Instrutor_Muzamba-removebg-preview.png' ); ?>" alt="Retrato de Instrutor Muzamba, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Instrutor · Sede · Academia Arte Luta</p>
          <h2 class="h-lg">Instrutor Muzamba</h2>
          <p class="mestre__role">Milton dos Santos Brito</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INSTRUTOR XUXU -->
  <section class="section section--tight">
    <div class="container container--wide">
      <div class="mestre mestre--flip reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Alex_Sandro_Gonçalves_Instrutor_Xuxu__Vide_Presidente-removebg-preview.png' ); ?>" alt="Retrato de Instrutor Xuxu, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Instrutor · Unidade It's Time Fight</p>
          <h2 class="h-lg">Instrutor Xuxu</h2>
          <p class="mestre__role">Alex Sandro Gonçalves</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
            <p>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GRADUADA LÉO -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="mestre reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Leonice_Schreiber_Graduada_Léo-removebg-preview.png' ); ?>" alt="Retrato de Graduada Léo, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Graduada · Colégio FAG · Porto + Seguro</p>
          <h2 class="h-lg">Graduada Léo</h2>
          <p class="mestre__role">Leonice Schreiber</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</p>
            <p>Aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt, neque porro quisquam est qui dolorem ipsum quia dolor sit amet.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GRADUADO BRUNINHO -->
  <section class="section section--tight">
    <div class="container container--wide">
      <div class="mestre mestre--flip reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Bruno_Lirio_dos_Santos_Graduado_Bruninho-removebg-preview.png' ); ?>" alt="Retrato de Graduado Bruninho, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Graduado · Equipe Arte Luta</p>
          <h2 class="h-lg">Graduado Bruninho</h2>
          <p class="mestre__role">Bruno Lirio dos Santos</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
            <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GRADUADO DR. CARANGUEJO -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="mestre reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Dr_Thiago_Ribeiro_Pereira_Graduado_Dr_Caranguejo-removebg-preview.png' ); ?>" alt="Retrato de Graduado Dr. Caranguejo, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Graduado · Equipe Arte Luta</p>
          <h2 class="h-lg">Graduado Dr. Caranguejo</h2>
          <p class="mestre__role">Dr. Thiago Ribeiro Pereira</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Ut enim ad minima veniam, quis nostrum exercitationem ullam.</p>
            <p>Corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur, quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GRADUADA CACHOEIRA -->
  <section class="section section--tight">
    <div class="container container--wide">
      <div class="mestre mestre--flip reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Francielle_da_Silva_Flores_Franco_Graduada_Cachoeira-removebg-preview.png' ); ?>" alt="Retrato de Graduada Cachoeira, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Graduada · Educação em Tempo Integral</p>
          <h2 class="h-lg">Graduada Cachoeira</h2>
          <p class="mestre__role">Francielle da Silva Flores Franco</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
            <p>Qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GRADUADA COBRINHA -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="mestre reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Gabrielli_Araujo_dos_Santos_Graduada_Cobrinha-removebg-preview.png' ); ?>" alt="Retrato de Graduada Cobrinha, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Graduada · Educação em Tempo Integral</p>
          <h2 class="h-lg">Graduada Cobrinha</h2>
          <p class="mestre__role">Gabrielli Araujo dos Santos</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Similique sunt in culpa qui officia deserunt mollitia animi.</p>
            <p>Id est laborum et dolorum fuga, et harum quidem rerum facilis est et expedita distinctio, nam libero tempore soluta nobis est eligendi optio.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GRADUADA LETÍCIA -->
  <section class="section section--tight">
    <div class="container container--wide">
      <div class="mestre mestre--flip reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Letícia_de_Azevedo_Graduada_Letícia-removebg-preview.png' ); ?>" alt="Retrato de Graduada Letícia, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Graduada · Educação em Tempo Integral</p>
          <h2 class="h-lg">Graduada Letícia</h2>
          <p class="mestre__role">Letícia de Azevedo</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Temporibus autem quibusdam et aut officiis debitis aut rerum.</p>
            <p>Necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae, itaque earum rerum hic tenetur a sapiente delectus.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GRADUADO ZÉ -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="mestre reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Luiz_Fernando_Bueno_Graduado_Zé-removebg-preview.png' ); ?>" alt="Retrato de Graduado Zé, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Graduado · Educação em Tempo Integral</p>
          <h2 class="h-lg">Graduado Zé</h2>
          <p class="mestre__role">Luiz Fernando Bueno</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis.</p>
            <p>Voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat, quos dolores et quas molestias excepturi sint.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GRADUADO BEBÊ -->
  <section class="section section--tight">
    <div class="container container--wide">
      <div class="mestre mestre--flip reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Marcos_Antonio_Moraes_de_Oliveira_Graduado_Bebê-removebg-preview.png' ); ?>" alt="Retrato de Graduado Bebê, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Graduado · Educação em Tempo Integral</p>
          <h2 class="h-lg">Graduado Bebê</h2>
          <p class="mestre__role">Marcos Antonio Moraes de Oliveira</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Curabitur pretium tincidunt lacus, nulla gravida orci a odio.</p>
            <p>Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris integer in mauris eu nibh.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MONITORA VERA -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="mestre reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Vera_Lucia_Ribeiro_Marcelino_Monitora_Vera-removebg-preview.png' ); ?>" alt="Retrato de Monitora Vera, da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Monitora · Educação em Tempo Integral</p>
          <h2 class="h-lg">Monitora Vera</h2>
          <p class="mestre__role">Vera Lucia Ribeiro Marcelino</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Praesent libero, sed cursus ante dapibus diam sed nisi.</p>
            <p>Nulla quis sem at nibh elementum imperdiet, duis sagittis ipsum praesent mauris, fusce nec tellus sed augue semper porta.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONSELHEIRO JAIR VANI -->
  <section class="section section--tight">
    <div class="container container--wide">
      <div class="mestre mestre--flip reveal">
        <div>
          <div class="figure" style="aspect-ratio:4/5;"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Dr_Jair_Vani_de_Aragão_Conselheiro-removebg-preview.png' ); ?>" alt="Retrato de Dr. Jair Vani de Aragão, Conselheiro da Capoeira Arte Luta" /></div>
        </div>
        <div>
          <p class="eyebrow">Conselheiro</p>
          <h2 class="h-lg">Conselheiro Jair Vani</h2>
          <p class="mestre__role">Dr. Jair Vani de Aragão</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Class aptent taciti sociosqu ad litora torquent per conubia.</p>
            <p>Nostra, per inceptos himenaeos, curabitur sodales ligula in libero, sed dignissim lacinia nunc, curabitur tortor pellentesque nibh aenean quam.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MESTRE NIQUINHA -->
  <section class="section section--tight bg-paper-2">
    <div class="container container--wide">
      <div class="mestre reveal">
        <div>
          <div class="figure figure--static" style="aspect-ratio:1/1;background:var(--ink-2);"><img class="treat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/newimg/Mestre_Niquinha.png' ); ?>" alt="Cartão de apresentação de Mestre Niquinha, da Capoeira Arte Luta" style="object-fit:contain;filter:none;" /></div>
        </div>
        <div>
          <p class="eyebrow">Mestre · Equipe Arte Luta</p>
          <h2 class="h-lg">Mestre Niquinha</h2>
          <p class="mestre__role">Nicodemedes Antonio Martins</p>
          <div class="stack maxr" style="margin-top:1.4rem;">
            <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
            <p>Donec vel nunc dictum, sagittis nulla nec, tempor risus, aenean sit amet nunc vitae erat congue tempus, cras ornare tristique elit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUTROS COLABORADORES (sem foto ainda) -->
  <section class="section section--tight">
    <div class="container container--wide">
      <div class="grid cols-12" style="margin-bottom:1rem;">
        <div class="c4 reveal"><p class="eyebrow">Também fazem parte</p><h2 class="h-lg">Mais colaboradores da Arte Luta.</h2></div>
        <div class="c6 start6 reveal" data-d="1"><p class="maxr">Fotos a caminho — em breve com perfil completo, como os demais integrantes da equipe.</p></div>
      </div>
      <div class="grid cols-12 reveal" data-d="1" style="margin-top:1.5rem;">
        <div class="c4"><div class="eblock"><p class="uname">Mestre Sirso</p><p class="cord-level" style="margin-top:.4rem;">Sede · Academia Arte Luta</p></div></div>
        <div class="c4"><div class="eblock"><p class="uname">Douglas</p><p class="cord-level" style="margin-top:.4rem;">Educação em Tempo Integral</p></div></div>
        <div class="c4"><div class="eblock"><p class="uname">Raimundo</p><p class="cord-level" style="margin-top:.4rem;">Educação em Tempo Integral</p></div></div>
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