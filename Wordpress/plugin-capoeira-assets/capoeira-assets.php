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

    $images = capoeira_get_images_map();
    foreach($images as $id => $path) {
        $section = (strpos($path, 'sponsor') !== false) ? 'capoeira_assets_section_sponsors' : 'capoeira_assets_section_main';
        add_settings_field($id, 'Imagem: ' . $path, 'capoeira_assets_field_img_cb', 'capoeira-assets', $section, ['id' => $id, 'label_for' => $id]);
        register_setting('capoeira-assets', $id);
    }
}

function capoeira_assets_section_main_cb() {
    echo '<p>Configure as imagens exclusivas de cada página abaixo.</p>';
}
function capoeira_assets_section_sponsors_cb() {
    echo '<p>Configure os logotipos dos patrocinadores abaixo.</p>';
}

function capoeira_assets_field_img_cb($args) {
    $val = get_option($args['id'], '');
    echo '<div class="image-upload-wrapper">';
    echo '<input type="text" id="' . esc_attr($args['id']) . '" name="' . esc_attr($args['id']) . '" value="' . esc_attr($val) . '" class="regular-text cap-img-url" />';
    echo '<input type="button" class="button capoeira-upload-button" value="Escolher Imagem" />';
    if($val) {
        echo '<div style="margin-top:10px;"><img src="'.esc_url($val).'" style="max-width:150px;max-height:100px;" /></div>';
    }
    echo '</div>';
}

// 3. Scripts
add_action('admin_enqueue_scripts', 'capoeira_assets_admin_scripts');
function capoeira_assets_admin_scripts($hook) {
    if ('toplevel_page_capoeira-assets' !== $hook) return;
    wp_enqueue_media();
    wp_enqueue_script('capoeira-assets-admin', plugin_dir_url(__FILE__) . 'admin-script.js', array('jquery'), '1.0', true);
}

// 4. Import Handler
add_action('admin_init', 'capoeira_assets_handle_import');
function capoeira_assets_handle_import() {
    if (isset($_POST['capoeira_import_media']) && check_admin_referer('capoeira_import_media_action', 'capoeira_import_media_nonce')) {
        if (!current_user_can('manage_options')) return;

        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/media.php');
        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $images_map = capoeira_get_images_map();
        $source_dir = get_template_directory() . '/assets/img/';
        
        $imported_count = 0;

        foreach($images_map as $option_id => $relative_path) {
            $file_path = $source_dir . $relative_path;
            if (file_exists($file_path)) {
                // Upload para media library programaticamente
                $filename = basename($file_path);
                $upload_file = wp_upload_bits($filename, null, file_get_contents($file_path));
                
                if (!$upload_file['error']) {
                    $wp_filetype = wp_check_filetype($filename, null);
                    $attachment = array(
                        'post_mime_type' => $wp_filetype['type'],
                        'post_title'     => preg_replace('/\.[^.]+$/', '', $filename),
                        'post_content'   => '',
                        'post_status'    => 'inherit'
                    );
                    $attach_id = wp_insert_attachment($attachment, $upload_file['file']);
                    
                    if (!is_wp_error($attach_id)) {
                        require_once(ABSPATH . 'wp-admin/includes/image.php');
                        $attach_data = wp_generate_attachment_metadata($attach_id, $upload_file['file']);
                        wp_update_attachment_metadata($attach_id, $attach_data);
                        
                        // Atualiza a opção do plugin com a nova URL
                        $attachment_url = wp_get_attachment_url($attach_id);
                        update_option($option_id, $attachment_url);
                        $imported_count++;
                    }
                }
            }
        }
        
        add_settings_error('capoeira_messages', 'capoeira_message', $imported_count . ' imagens importadas com sucesso para a Biblioteca de Mídia!', 'updated');
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
