<?php
/**
 * Plugin Name: Capoeira Assets
 * Plugin URI: https://example.com
 * Description: Plugin para configuração de assets (todas as imagens).
 * Version: 2.0.0
 * Author: Rafael Isaac
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Map de opções e caminhos
function capoeira_get_images_map() {
    return array(
        'cap_img_berimbau_ouro_jpg' => 'berimbau-ouro.jpg',
        'cap_img_cascavel_png' => 'cascavel.png',
        'cap_img_cover_png' => 'cover.png',
        'cap_img_hero_jpg' => 'hero.jpg',
        'cap_img_hino_jpg' => 'hino.jpg',
        'cap_img_samba_png' => 'samba.png',
        'cap_img_selo_50anos_png' => 'selo-50anos.png',
        'cap_img_team_png' => 'team.png',
        'cap_img_tietagem_png' => 'tietagem.png',
        'cap_img_sponsors_sponsor_01_png' => 'sponsors/sponsor-01.png',
        'cap_img_sponsors_sponsor_02_png' => 'sponsors/sponsor-02.png',
        'cap_img_sponsors_sponsor_03_png' => 'sponsors/sponsor-03.png',
        'cap_img_sponsors_sponsor_04_png' => 'sponsors/sponsor-04.png',
        'cap_img_sponsors_sponsor_05_png' => 'sponsors/sponsor-05.png',
        'cap_img_sponsors_sponsor_06_png' => 'sponsors/sponsor-06.png',
        'cap_img_sponsors_sponsor_07_png' => 'sponsors/sponsor-07.png',
        'cap_img_sponsors_sponsor_08_png' => 'sponsors/sponsor-08.png',
        'cap_img_sponsors_sponsor_09_png' => 'sponsors/sponsor-09.png',
        'cap_img_sponsors_sponsor_10_png' => 'sponsors/sponsor-10.png',
        'cap_img_sponsors_sponsor_11_png' => 'sponsors/sponsor-11.png',
        'cap_img_sponsors_sponsor_12_png' => 'sponsors/sponsor-12.png',
        'cap_img_sponsors_sponsor_13_png' => 'sponsors/sponsor-13.png',
        'cap_img_sponsors_sponsor_14_png' => 'sponsors/sponsor-14.png',
        'cap_img_sponsors_sponsor_15_png' => 'sponsors/sponsor-15.png',
        'cap_img_sponsors_sponsor_16_png' => 'sponsors/sponsor-16.png',
        'cap_img_sponsors_sponsor_17_png' => 'sponsors/sponsor-17.png',
    );
}

// 1. Menu
add_action('admin_menu', 'capoeira_assets_menu');
function capoeira_assets_menu() {
    add_menu_page(
        'Capoeira Assets',
        'Capoeira Assets',
        'manage_options',
        'capoeira-assets',
        'capoeira_assets_page_html',
        'dashicons-format-image',
        100
    );
}

// 2. Settings Init
add_action('admin_init', 'capoeira_assets_init');
function capoeira_assets_init() {
    register_setting('capoeira_assets_options', 'capoeira_assets_options');

    // Section Global
    add_settings_section('capoeira_assets_section_main', 'Imagens Principais (Páginas)', 'capoeira_assets_section_main_cb', 'capoeira-assets');
    
    // Section Patrocinadores
    add_settings_section('capoeira_assets_section_sponsors', 'Patrocinadores (Exibidos no rodapé de algumas páginas)', 'capoeira_assets_section_sponsors_cb', 'capoeira-assets');

     = capoeira_get_images_map();
    foreach( as  => ) {
         = (strpos(, 'sponsor') !== false) ? 'capoeira_assets_section_sponsors' : 'capoeira_assets_section_main';
        add_settings_field(, 'Imagem: ' . , 'capoeira_assets_field_img_cb', 'capoeira-assets', , ['id' => , 'label_for' => ]);
        register_setting('capoeira-assets', );
    }
}

function capoeira_assets_section_main_cb() {
    echo '<p>Configure as imagens exclusivas de cada página abaixo.</p>';
}
function capoeira_assets_section_sponsors_cb() {
    echo '<p>Configure os logotipos dos patrocinadores abaixo.</p>';
}

function capoeira_assets_field_img_cb() {
    \ = get_option(\['id'], '');
    echo '<div class="image-upload-wrapper">';
    echo '<input type="text" id="' . esc_attr(\['id']) . '" name="' . esc_attr(\['id']) . '" value="' . esc_attr(\) . '" class="regular-text cap-img-url" />';
    echo '<input type="button" class="button capoeira-upload-button" value="Escolher Imagem" />';
    if(\) {
        echo '<div style="margin-top:10px;"><img src="'.esc_url(\).'" style="max-width:150px;max-height:100px;" /></div>';
    }
    echo '</div>';
}

// 3. Scripts
add_action('admin_enqueue_scripts', 'capoeira_assets_admin_scripts');
function capoeira_assets_admin_scripts(\) {
    if ('toplevel_page_capoeira-assets' !== \) return;
    wp_enqueue_media();
    wp_enqueue_script('capoeira-assets-admin', plugin_dir_url(__FILE__) . 'admin-script.js', array('jquery'), '1.0', true);
}

// 4. Import Handler
add_action('admin_init', 'capoeira_assets_handle_import');
function capoeira_assets_handle_import() {
    if (isset(\['capoeira_import_media']) && check_admin_referer('capoeira_import_media_action', 'capoeira_import_media_nonce')) {
        if (!current_user_can('manage_options')) return;

        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/media.php');
        require_once(ABSPATH . 'wp-admin/includes/image.php');

        \ = capoeira_get_images_map();
        \ = get_template_directory() . '/assets/img/';
        
        \ = 0;

        foreach(\ as \ => \) {
            \ = \ . \;
            if (file_exists(\)) {
                // Upload para media library programaticamente
                \ = basename(\);
                \ = wp_upload_bits(\, null, file_get_contents(\));
                
                if (!\['error']) {
                    \ = wp_check_filetype(\, null);
                    \ = array(
                        'post_mime_type' => \['type'],
                        'post_title'     => preg_replace('/\.[^.]+$/', '', \),
                        'post_content'   => '',
                        'post_status'    => 'inherit'
                    );
                    \ = wp_insert_attachment(\, \['file']);
                    
                    if (!is_wp_error(\)) {
                        require_once(ABSPATH . 'wp-admin/includes/image.php');
                        \ = wp_generate_attachment_metadata(\, \['file']);
                        wp_update_attachment_metadata(\, \);
                        
                        // Atualiza a opção do plugin com a nova URL
                        \ = wp_get_attachment_url(\);
                        update_option(\, \);
                        \++;
                    }
                }
            }
        }
        
        add_settings_error('capoeira_messages', 'capoeira_message', \ . ' imagens importadas com sucesso para a Biblioteca de Mídia!', 'updated');
    }
}

// 5. Page HTML
function capoeira_assets_page_html() {
    if (!current_user_can('manage_options')) return;
    ?>
    <div class="wrap">
        <h1>Configuração de Assets - Tema Capoeira</h1>
        <?php settings_errors('capoeira_messages'); ?>
        
        <div style="background:#fff; padding:20px; border:1px solid #ccc; margin: 20px 0;">
            <h2>Importar Imagens do Tema para Mídia</h2>
            <p>Clique no botão abaixo para puxar as imagens originais que vieram na pasta do tema e salvá-las na Biblioteca de Mídia do WordPress. Os campos abaixo serão preenchidos automaticamente.</p>
            <form method="post" action="">
                <?php wp_nonce_field('capoeira_import_media_action', 'capoeira_import_media_nonce'); ?>
                <input type="submit" name="capoeira_import_media" class="button button-primary" value="Importar Imagens Padrão Agora" />
            </form>
        </div>

        <form action="options.php" method="post">
            <?php
            settings_fields('capoeira-assets');
            do_settings_sections('capoeira-assets');
            submit_button('Salvar Todas as Configurações');
            ?>
        </form>
    </div>
    <?php
}
