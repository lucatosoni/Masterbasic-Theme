<?php
// Setup base del tema
function masterbasic_wptheme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'masterbasic_wptheme_setup' );

// Carica fogli di stile e script
// Carica fogli di stile e script
// Carica fogli di stile e script
function masterbasic_wptheme_scripts() {
    // Basscss
    wp_enqueue_style('basscss', get_template_directory_uri() . '/assets/basscss/basscss.min.css', array(), '8.0.2' );

    // Stile principale
    wp_enqueue_style( 'masterbasic-style', get_stylesheet_uri() );

    // Barba js
    wp_enqueue_script( 'barba', get_template_directory_uri() . '/assets/barba/barba.umd.js', array(), '2.9.7', true );
    wp_enqueue_script( 'barba-int', get_template_directory_uri() . '/assets/js/barba-init.js', array('barba'), '1.0.0', true );

     // Swiper
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.css', array(), '11.0.5' );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array(), '11.0.5', true );
    wp_enqueue_script( 'swiper-init', get_template_directory_uri() . '/assets/js/swiper-init.js', array('swiper-js'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'masterbasic_wptheme_scripts' );

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/assets/js/animations.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );



/* DISABILITAZIONE COMMENTI */
/* DISABILITAZIONE COMMENTI */
/* DISABILITAZIONE COMMENTI */
function masterbasic_remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
    foreach ( get_post_types() as $post_type ) {
        if ( post_type_supports( $post_type, 'comments' ) ) {
            remove_post_type_support( $post_type, 'comments' );
        }
    }
}
add_action( 'init', 'masterbasic_remove_comment_support', 100 );

add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );
add_filter( 'comments_array', '__return_empty_array', 10, 2 );

function masterbasic_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'masterbasic_remove_admin_menus' );

function masterbasic_disable_comments_admin_redirect() {
    global $pagenow;
    if ( $pagenow === 'edit-comments.php' ) {
        wp_redirect( admin_url() );
        exit;
    }
}
add_action( 'admin_init', 'masterbasic_disable_comments_admin_redirect' );

function masterbasic_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'masterbasic_remove_dashboard_widgets' );

function masterbasic_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'comments' );
}
add_action( 'wp_before_admin_bar_render', 'masterbasic_admin_bar_render' );


/* DISABILITAZIONE GUTENBERG */
/* DISABILITAZIONE GUTENBERG */
/* DISABILITAZIONE GUTENBERG */
add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
add_filter( 'use_widgets_block_editor', '__return_false' );


/* SMTP CUSTOM PER WP_MAIL */
/* SMTP CUSTOM PER WP_MAIL */
/* SMTP CUSTOM PER WP_MAIL */
function masterbasic_theme_phpmailer( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'smtp.example.com';   // Sostituire con il proprio host SMTP
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 587;                  // Tipicamente 587 (TLS) o 465 (SSL)
    $phpmailer->Username   = 'user@example.com';   // Inserire username SMTP
    $phpmailer->Password   = 'password';           // Inserire password SMTP
    $phpmailer->SMTPSecure = 'tls';                // 'tls' o 'ssl'
    $phpmailer->From       = 'no-reply@example.com';
    $phpmailer->FromName   = 'Master Basic WP Theme';
}
add_action( 'phpmailer_init', 'masterbasic_theme_phpmailer' );
