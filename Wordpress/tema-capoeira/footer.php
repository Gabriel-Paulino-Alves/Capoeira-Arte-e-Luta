<?php
/**
 * O rodapé principal do tema.
 *
 * @package Capoeira_Theme
 */
?>


<!-- ============ FOOTER ============ -->
<footer class="site-footer">
  <div class="container container--wide">
    <div class="footer-top">
      <div class="footer-brand">
        <span class="brand">
          <svg class="brand__mark" viewBox="0 0 22 38" fill="none" stroke-width="1.7" stroke-linecap="round" aria-hidden="true">
            <path d="M6 3 C 16 12, 16 26, 6 35" /><line x1="6" y1="3" x2="6" y2="35" /><circle cx="6" cy="26" r="4" />
          </svg>
          <span class="brand__txt"><span class="brand__name">Capoeira Arte Luta</span><span class="brand__sub">Desde 1981 · Cascavel-PR</span></span>
        </span>
        <p class="footer-mission">Valorizar o ser humano. Cuidar das pessoas de forma próxima e humana — educando para que cuidem de si, do próximo e do mundo.</p>
      </div>
      <div class="fcol">
        <h4>Navegação</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">Sobre</a></li>
          <li><a href="<?php echo esc_url( home_url( '/mestres' ) ); ?>">Mestres &amp; Equipe</a></li>
          <li><a href="<?php echo esc_url( home_url( '/aulas' ) ); ?>">Aulas</a></li>
          <li><a href="<?php echo esc_url( home_url( '/graduacao' ) ); ?>">Graduação</a></li>
          <li><a href="<?php echo esc_url( home_url( '/eventos' ) ); ?>">Eventos</a></li>
        </ul>
      </div>
      <div class="fcol">
        <h4>Mais</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/midia' ) ); ?>">Livros &amp; Mídia</a></li>
          <li><a href="<?php echo esc_url( home_url( '/apoie' ) ); ?>">Projetos Sociais</a></li>
          <li><a href="<?php echo esc_url( home_url( '/galeria' ) ); ?>">Galeria</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Contato</a></li>
        </ul>
      </div>
      <div class="fcol">
        <h4>Contato</h4>
        <ul>
          <li><a href="https://wa.me/5545999998844">+55 45 99999-8844</a></li>
          <li><a href="mailto:aristeumestrinho@gmail.com">aristeumestrinho@gmail.com</a></li>
          <li><p>Rua Maj. Oscar Ramos Pereira, 500<br />Neva · Cascavel-PR · 85802-300</p></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <span data-year>2026</span> Associação Capoeira Arte Luta. Todos os direitos reservados.</span>
      <div class="social">
        <a href="https://instagram.com" aria-label="Instagram" target="_blank" rel="noopener"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
        <a href="https://facebook.com" aria-label="Facebook" target="_blank" rel="noopener"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M13 22v-8h2.7l.4-3H13V9c0-.9.3-1.5 1.6-1.5H16V4.9C15.6 4.8 14.6 4.8 13.5 4.8 11.2 4.8 9.7 6.2 9.7 8.7V11H7v3h2.7v8z"/></svg></a>
        <a href="https://youtube.com" aria-label="YouTube" target="_blank" rel="noopener"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22 8.2a3 3 0 0 0-2.1-2.1C18 5.6 12 5.6 12 5.6s-6 0-7.9.5A3 3 0 0 0 2 8.2 31 31 0 0 0 1.7 12 31 31 0 0 0 2 15.8a3 3 0 0 0 2.1 2.1c1.9.5 7.9.5 7.9.5s6 0 7.9-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 22.3 12 31 31 0 0 0 22 8.2zM10 15V9l5.2 3z"/></svg></a>
      </div>
    </div>
  </div>
</footer>

<script src="js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
