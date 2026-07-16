<?php
/**
 * FunÃ§Ãµes e definiÃ§Ãµes do Tema Capoeira
 *
 * @package Capoeira_Theme
 */

if ( ! function_exists( 'capoeira_theme_setup' ) ) :
    function capoeira_theme_setup() {
        // Adiciona suporte a title tag do WordPress
        add_theme_support( 'title-tag' );

        // Adiciona suporte a Imagens Destacadas (Thumbnails)
        add_theme_support( 'post-thumbnails' );

        // Registra menus
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'capoeira-theme' ),
            )
        );

        // Suporte a HTML5
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'capoeira_theme_setup' );

/**
 * Enfileira os scripts e estilos.
 */
function capoeira_theme_scripts() {
    // Google Fonts
    wp_enqueue_style( 'capoeira-google-fonts', 'https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,560;0,9..144,600;0,9..144,700;1,9..144,400;1,9..144,500&display=swap', array(), null );

    // Tema original style.css (root - apenas metadados ou regras vazias)
    wp_enqueue_style( 'capoeira-theme-root-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Style real do Vanilla
    wp_enqueue_style( 'capoeira-main-style', get_template_directory_uri() . '/assets/css/style.css', array('capoeira-theme-root-style', 'capoeira-google-fonts'), wp_get_theme()->get( 'Version' ) );

    // Script do Vanilla
    wp_enqueue_script( 'capoeira-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'capoeira_theme_scripts' );
