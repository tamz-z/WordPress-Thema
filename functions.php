<?php
/**
 * functions.php – het "brein" van het thema (les 5).
 *
 * WordPress laadt dit bestand automatisch op elke pagina.
 * Het toont zelf niets, het koppelt alleen eigen functies aan hooks.
 */


/**
 * 1. Theme support (les 5).
 * Hook: after_setup_theme = het moment waarop WordPress het thema instelt.
 */
function mijn_thema_setup() {
    add_theme_support( 'title-tag' );       // WordPress maakt zelf de <title> in de <head>
    add_theme_support( 'post-thumbnails' ); // berichtafbeeldingen (the_post_thumbnail)
    add_theme_support( 'html5', array(      // moderne HTML5-markup
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'automatic-feed-links' );

    // Menu-locatie registreren. Hierdoor verschijnt "Menu's" bij Weergave.
    register_nav_menus( array(
        'hoofdmenu' => 'Hoofdmenu',
    ) );
}
add_action( 'after_setup_theme', 'mijn_thema_setup' );


/**
 * 2. Widgetgebied registreren.
 * Hierdoor verschijnt "Widgets" bij Weergave. Het gebied wordt getoond in footer.php.
 * Hook: widgets_init = het moment waarop WordPress widgetgebieden aanmaakt.
 */
function mijn_thema_widgets() {
    register_sidebar( array(
        'name'          => 'Footer',
        'id'            => 'footer',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mijn_thema_widgets' );


/**
 * 3. CSS laden met wp_enqueue_style() (les 5).
 * Let op: de hook heet wp_enqueue_scripts, ook als je alleen CSS laadt.
 */
function mijn_thema_styles() {
    // style.css in de hoofdmap van het thema
    wp_enqueue_style( 'mijn-thema-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mijn_thema_styles' );
