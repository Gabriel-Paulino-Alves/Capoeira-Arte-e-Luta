<?php
/**
 * Template para a página contato
 *
 * @package Capoeira_Theme
 */

get_header(); ?>

<main id="main">


  <section class="section phero">
    <div class="container container--wide">
      <div class="grid cols-12" style="align-items:end;">
        <div class="c8 reveal">
          <p class="phero__index"><b>09</b> / Contato</p>
          <h1 class="display" style="font-size:clamp(2.6rem,1.6rem + 4.6vw,5rem);">Vamos conversar?</h1>
        </div>
        <div class="c4 reveal" data-d="1">
          <p class="phero__lead lead">Tire dúvidas, agende uma aula experimental ou descubra como apoiar nossos projetos.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:clamp(1.5rem,3vw,2.5rem);">
    <div class="container container--wide">
      <div class="grid cols-12">
        <!-- INFO -->
        <div class="c5 reveal">
          <p class="eyebrow">Fale com a gente</p>
          <div class="stack-lg" style="margin-top:1.6rem;">
            <div>
              <p class="cord-level" style="margin-bottom:.4rem;">Telefone &amp; WhatsApp</p>
              <a href="https://wa.me/5545999998844" class="h-md" style="font-family:var(--serif);color:var(--ink);">+55 45 99999-8844</a>
            </div>
            <div>
              <p class="cord-level" style="margin-bottom:.4rem;">E-mail</p>
              <a href="mailto:aristeumestrinho@gmail.com" class="h-md" style="font-family:var(--serif);color:var(--ink);">aristeumestrinho@gmail.com</a>
            </div>
            <div>
              <p class="cord-level" style="margin-bottom:.4rem;">Sede</p>
              <p class="lead" style="font-size:1.15rem;">Rua Major Oscar Ramos Pereira, 500<br />Neva · Cascavel-PR · CEP 85802-300</p>
            </div>
          </div>
          <div class="mt-cta" style="display:flex;gap:.8rem;flex-wrap:wrap;">
            <a class="btn btn--gold" href="https://wa.me/5545999998844" target="_blank" rel="noopener">Chamar no WhatsApp <span class="arw" aria-hidden="true">→</span></a>
            <a class="btn btn--ghost" href="https://www.google.com/maps/search/?api=1&query=Major+Oscar+Ramos+Pereira+500+Neva+Cascavel+PR" target="_blank" rel="noopener">Ver no mapa</a>
          </div>
          <hr class="rule" style="margin:2.2rem 0 1.4rem;" />
          <p class="cord-level" style="margin-bottom:1rem;">Redes sociais</p>
          <div class="social" style="--c:var(--ink);">
            <a href="https://www.instagram.com/capoeira.arteluta/" aria-label="Instagram" target="_blank" rel="noopener" style="border-color:var(--line);color:var(--ink);"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
            <a href="https://www.facebook.com/capoeirarteluta/" aria-label="Facebook" target="_blank" rel="noopener" style="border-color:var(--line);color:var(--ink);"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M13 22v-8h2.7l.4-3H13V9c0-.9.3-1.5 1.6-1.5H16V4.9C15.6 4.8 14.6 4.8 13.5 4.8 11.2 4.8 9.7 6.2 9.7 8.7V11H7v3h2.7v8z"/></svg></a>
            <a href="https://www.youtube.com/Capoeiraartelutacvel" aria-label="YouTube" target="_blank" rel="noopener" style="border-color:var(--line);color:var(--ink);"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22 8.2a3 3 0 0 0-2.1-2.1C18 5.6 12 5.6 12 5.6s-6 0-7.9.5A3 3 0 0 0 2 8.2 31 31 0 0 0 1.7 12 31 31 0 0 0 2 15.8a3 3 0 0 0 2.1 2.1c1.9.5 7.9.5 7.9.5s6 0 7.9-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 22.3 12 31 31 0 0 0 22 8.2zM10 15V9l5.2 3z"/></svg></a>
          </div>
        </div>

        <!-- FORM -->
        <div class="c6 start7 reveal" data-d="1">
          <div class="eblock" style="border-color:var(--ink);padding:clamp(1.8rem,3.5vw,3rem);">
            <h2 class="h-md" style="margin-bottom:1.8rem;">Envie uma mensagem</h2>
            <form data-contact-form novalidate>
              <div class="field"><label for="nome">Nome</label><input id="nome" name="nome" type="text" placeholder="Seu nome" required /></div>
              <div class="field"><label for="email">E-mail</label><input id="email" name="email" type="email" placeholder="voce@email.com" required /></div>
              <div class="field"><label for="origem">Como você nos encontrou?</label>
                <select id="origem" name="origem">
                  <option value="Google">Google</option>
                  <option value="Indicação">Indicação</option>
                  <option value="Instagram / Facebook">Instagram / Facebook</option>
                  <option value="Outro site">Outro site</option>
                </select>
              </div>
              <div class="field"><label for="mensagem">Mensagem</label><textarea id="mensagem" name="mensagem" placeholder="Quero agendar uma aula experimental…" required></textarea></div>
              <button class="btn btn--ink btn--lg" type="submit" style="width:100%;justify-content:center;">Enviar mensagem <span class="arw" aria-hidden="true">→</span></button>
              <p data-form-status style="display:none;margin-top:1.2rem;font-size:.9rem;color:var(--t-muted);"></p>
            </form>
          </div>
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