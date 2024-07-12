<?php

function esgi_enqueue_scripts() {
    wp_enqueue_script('menu-script', get_template_directory_uri() . '/assets/menu.js', array('jquery'), null, true);
    wp_enqueue_style('main', get_stylesheet_uri());

    // Passer les données PHP à JavaScript
    wp_localize_script('menu-script', 'esgiIcons', [
        'menuOpen' => esgi_get_icon('menu_open'),
        'menuClose' => esgi_get_icon('menu_close'),
        'logo' => esgi_get_icon('logo'),
        'originalLogo' => get_custom_logo(),
    ]);
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_scripts');

add_action('after_setup_theme', 'esgi_register_nav_menu');
function esgi_register_nav_menu()
{
    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'esgi-theme'),
        'footer_menu' => __('Footer Menu', 'esgi-theme')
    ]);
}

// Ajout de supports au thème
add_action('after_setup_theme', 'esgi_theme_setup');
function esgi_theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

function esgi_get_icon($name)
{

    $facebook = '<svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.99609 20V11.0547H0V7.5H2.99609V4.69922C2.99609 1.65625 4.85547 0 7.57031 0C8.87109 0 9.98828 0.0976562 10.3125 0.140625V3.32031H8.42969C6.95312 3.32031 6.66797 4.02344 6.66797 5.05078V7.5H10L9.54297 11.0547H6.66797V20" fill="white"/></svg>';

    $linkedin = '<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.40179 4.82589C1.07589 4.82589 0 3.72768 0 2.40179C0 1.07589 1.07589 0 2.40179 0C3.72768 0 4.80357 1.07589 4.80357 2.40179C4.80357 3.72768 3.72768 4.82589 2.40179 4.82589ZM4.47768 20H0.330357V6.64732H4.47768V20ZM15.8616 20H20H20.0045V12.6652C20.0045 9.07589 19.2321 6.3125 15.0357 6.3125C13.0179 6.3125 11.6652 7.41964 11.1116 8.46875H11.0536V6.64732H7.07589V20H11.2188V13.3884C11.2188 11.6473 11.5491 9.96429 13.7054 9.96429C15.8304 9.96429 15.8616 11.9509 15.8616 13.5V20Z" fill="white"/></svg>';

    $menu_open = ' <svg width="40" height="10" viewBox="0 0 40 10" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="40" height="3" fill="#050A3A"/><rect x="19" y="7" width="21" height="3" fill="#050A3A"/></svg>';

    $menu_close = '<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="2.13605" y="0.0147705" width="21" height="3" transform="rotate(45 2.13605 0.0147705)" fill="white"/><rect x="16.9706" y="2.12134" width="21" height="3" transform="rotate(135 16.9706 2.12134)" fill="white"/></svg>';

    $menu_open_white = ' <svg width="40" height="10" viewBox="0 0 40 10" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="40" height="3" fill="white"/><rect x="19" y="7" width="21" height="3" fill="white"/></svg>';

    $logo = '<svg width="140" height="42" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M129 29h11v9h-11v-9Z" fill="url(#a)"/><path d="M27.246 38H3.247V2.99h24v7.007H10.253v7.007h11.499v7.007h-11.5v6.982h16.993V38ZM35.712 13.488c0-1.448.277-2.807.83-4.077a10.682 10.682 0 0 1 2.246-3.32 10.77 10.77 0 0 1 3.345-2.27c1.27-.554 2.628-.83 4.077-.83h16.064v7.006H46.21a3.473 3.473 0 0 0-2.49 1.026 3.473 3.473 0 0 0-1 2.466c-.001.488.088.951.267 1.39.18.424.423.798.733 1.124.325.31.7.553 1.123.732.423.18.879.269 1.367.269h7.007c1.448 0 2.807.277 4.077.83 1.286.537 2.4 1.286 3.345 2.246.96.944 1.709 2.059 2.246 3.345.553 1.27.83 2.628.83 4.077a10.09 10.09 0 0 1-.83 4.077 10.43 10.43 0 0 1-2.246 3.345 10.604 10.604 0 0 1-3.345 2.246 10.09 10.09 0 0 1-4.077.83H37.665v-7.007h15.552a3.473 3.473 0 0 0 2.466-1 3.473 3.473 0 0 0 1.025-2.49c0-.49-.09-.945-.268-1.368a3.239 3.239 0 0 0-.757-1.099 3.236 3.236 0 0 0-1.099-.757 3.473 3.473 0 0 0-1.367-.268H46.21c-1.449 0-2.808-.277-4.077-.83a10.987 10.987 0 0 1-3.345-2.246 10.986 10.986 0 0 1-2.246-3.345 10.264 10.264 0 0 1-.83-4.102ZM102.186 34.46a18.18 18.18 0 0 1-5.445 3.198 18.05 18.05 0 0 1-6.25 1.099c-1.66 0-3.263-.22-4.81-.66a17.922 17.922 0 0 1-4.296-1.806 19.312 19.312 0 0 1-3.662-2.832 18.076 18.076 0 0 1-2.832-3.662 19.04 19.04 0 0 1-1.831-4.346 18.137 18.137 0 0 1-.635-4.81c0-1.66.211-3.255.635-4.785a18.67 18.67 0 0 1 1.83-4.296 17.219 17.219 0 0 1 2.833-3.663 18.07 18.07 0 0 1 3.662-2.832 17.923 17.923 0 0 1 4.297-1.806c1.546-.44 3.15-.66 4.81-.66 2.164 0 4.247.375 6.25 1.124a17.775 17.775 0 0 1 5.444 3.173L98.523 13a11.58 11.58 0 0 0-3.662-2.515 10.588 10.588 0 0 0-4.37-.927c-1.53 0-2.97.293-4.321.879a11.41 11.41 0 0 0-3.516 2.392 11.037 11.037 0 0 0-2.392 3.516c-.586 1.334-.88 2.767-.88 4.297 0 1.546.294 2.994.88 4.345a11.33 11.33 0 0 0 2.392 3.54 11.407 11.407 0 0 0 3.516 2.393c1.35.586 2.791.879 4.321.879.88 0 1.734-.106 2.564-.318.83-.211 1.62-.504 2.368-.879v-9.96h6.763V34.46ZM120.588 38h-7.007V2.99h7.007V38Z" fill="#FFFFFF"/><defs><linearGradient id="a" x1="130.875" y1="25.898" x2="139.959" y2="26.87" gradientUnits="userSpaceOnUse"><stop stop-color="#FFFFFF"/><stop offset="1" stop-color="#FFFFFF"/></linearGradient></defs></svg>';


    return isset($$name) ? $$name : '';

}

add_action('customize_register', 'esgi_customize_register');
function esgi_customize_register($wp_customize)
{

    // Ajout d'une nouvelle section
    $wp_customize->add_section('esgi_section', [
        'title' => __('Paramètres ESGI'),
        'description' => __('Personnalisez votre thème ESGI'),
        'panel' => '', // Not typically needed.
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ]);

    // Ajout d'un nouveau parametre (main-color)
    $wp_customize->add_setting('main_color', [
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_hex_color',
        'sanitize_js_callback' => '', // Basically to_json.
    ]);

    // Ajout d'un controle
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_color', [
        'label' => __('Couleur principale', 'ESGI'),
        'section' => 'esgi_section',
    ]));

    // Ajout d'un controle
    $wp_customize->add_control('is_dark', [
        'type' => 'checkbox',
        'priority' => 0, // Within the section.
        'section' => 'esgi_section', // Required, core or custom.
        'label' => __('Dark mode'),
        'description' => __('Black is beautiful.'),
    ]);

    // Ajout d'un nouveau parametre (has_sidebar)
    $wp_customize->add_setting('has_sidebar', [
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esgi_sanitize_bool',
        'sanitize_js_callback' => '', // Basically to_json.
    ]);

    // Ajout d'un controle
    $wp_customize->add_control('has_sidebar', [
        'type' => 'checkbox',
        'priority' => 20, // Within the section.
        'section' => 'esgi_section', // Required, core or custom.
        'label' => __('Afficher la sidebar'),
        'description' => __(''),
    ]);

    // Ajout d'un nouveau parametre (is_dark)
    $wp_customize->add_setting('is_dark', [
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esgi_sanitize_bool',
        'sanitize_js_callback' => '', // Basically to_json.
    ]);
    // Ajout d'un controle
    $wp_customize->add_control('is_dark', [
        'type' => 'checkbox',
        'priority' => 0, // Within the section.
        'section' => 'esgi_section', // Required, core or custom.
        'label' => __('Dark mode'),
        'description' => __('Black is beautiful.'),
    ]);
}

// Ajout de la section partners
add_action('customize_register', 'esgi_customize_register_partners');
function esgi_customize_register_partners($wp_customize)
{
    // section partners
    $wp_customize->add_section('esgi_partners', array(
        'title' => __('Partenaires', 'esgi'),
        'description' => __('Personnaliser les partenaires', 'esgi'),
        'priority' => 1,
    ));

    $num_partners = 6; // nombre de partenaires

    for ($i = 1; $i <= $num_partners; $i++) {
        // Ajout du parametre logo partner
        $wp_customize->add_setting('esgi_partners_logo_' . $i, array(
            'default' => get_template_directory_uri() . '/assets/images/svg/partner-' . $i . '.png',
            'description' => __('Logo du partenaire ' . $i, 'esgi'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
        // Ajour d'un controle logo partner
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'esgi_partners_logo_' . $i, array(
            'label' => __('Logo du partenaire ' . $i, 'esgi'),
            'section' => 'esgi_partners',
            'settings' => 'esgi_partners_logo_' . $i,
        )));
    }
}

// Récupère les urls des logos des partenaires depuis les réglages du Customizer.
function esgi_get_partners()
{
    $partners = array();
    $num_partners = 6;
    for ($i = 1; $i <= $num_partners; $i++) {
        $partners['logo_' . $i] = get_theme_mod('esgi_partners_logo_' . $i);
    }
    return $partners;
}

if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Heading_Control extends WP_Customize_Control {
        public $type = 'heading';

        public function render_content() {
            if (isset($this->label)) {
                echo '<h2 style="margin: 15px 0; border-bottom: 1px solid #ccc;">' . esc_html($this->label) . '</h2>';
            }
            if (isset($this->description)) {
                echo '<p>' . esc_html($this->description) . '</p>';
            }
        }
    }
}

add_action('customize_register', 'esgi_customize_register_team');
function esgi_customize_register_team($wp_customize)
{
    // section team members
    $wp_customize->add_section('esgi_team', array(
        'title' => __('Membres de L\'équipe', 'esgi'),
        'description' => __('Ajouter les membres de l\'équipe', 'esgi'),
        'priority' => 2,
    ));

    $members = 4;

    for ($i = 1; $i <= $members; $i++) {

        // Add a heading for each team member
        $wp_customize->add_control(new WP_Customize_Heading_Control($wp_customize, 'esgi_member_heading_' . $i, array(
            'label' => __('Membre ' . $i, 'esgi'),
            'section' => 'esgi_team',
            'settings' => array(),
        )));

        // Name
        $wp_customize->add_setting('esgi_member_name_' . $i, array(
            'description' => __('Name du membre ' . $i, 'esgi'),
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('esgi_member_name_' . $i, array(
            'label' => __('Name du membre ' . $i, 'esgi'),
            'section' => 'esgi_team',
            'settings' => 'esgi_member_name_' . $i,
            'type' => 'text',
        ));

        // Photo
        $wp_customize->add_setting('esgi_member_photo_' . $i, array(
            'description' => __('Photo du membre ' . $i, 'esgi'),
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'esgi_member_photo_' . $i, array(
            'label' => __('Photo du membre ' . $i, 'esgi'),
            'section' => 'esgi_team',
            'settings' => 'esgi_member_photo_' . $i,
        )));

        // Email
        $wp_customize->add_setting('esgi_member_email_' . $i, array(
            'description' => __('Email du membre ' . $i, 'esgi'),
            'sanitize_callback' => 'sanitize_email',
        ));

        $wp_customize->add_control('esgi_member_email_' . $i, array(
            'label' => __('Email du membre ' . $i, 'esgi'),
            'section' => 'esgi_team',
            'settings' => 'esgi_member_email_' . $i,
            'type' => 'email',
        ));

        // Phone
        $wp_customize->add_setting('esgi_member_number_' . $i, array(
            'description' => __('Numéro du membre ' . $i, 'esgi'),
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('esgi_member_number_' . $i, array(
            'label' => __('Numéro du membre ' . $i, 'esgi'),
            'section' => 'esgi_team',
            'settings' => 'esgi_member_number_' . $i,
            'type' => 'text',
        ));

        // Position
        $wp_customize->add_setting('esgi_member_position_' . $i, array(
            'description' => __('Position du membre ' . $i, 'esgi'),
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('esgi_member_position_' . $i, array(
            'label' => __('Position du membre ' . $i, 'esgi'),
            'section' => 'esgi_team',
            'settings' => 'esgi_member_position_' . $i,
            'type' => 'text',
        ));
    }
}

function esgi_get_team()
{
    $team = array();
    $members = 4;
    for ($i = 1; $i <= $members; $i++) {
        $team[] = array(
            'name' => get_theme_mod('esgi_member_name_' . $i),
            'photo' => get_theme_mod('esgi_member_photo_' . $i),
            'email' => get_theme_mod('esgi_member_email_' . $i),
            'number' => get_theme_mod('esgi_member_number_' . $i),
            'position' => get_theme_mod('esgi_member_position_' . $i),
        );
    }
    return $team;
}
