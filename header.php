<?php
// =====================================================================
// header.php  (les 3, slides "Header")
//
// De bovenkant van ELKE pagina. Geen onderdeel van de template-
// hiërarchie, maar een herbruikbaar stukje (partial). Elke template
// laadt dit bestand in met get_header().
// =====================================================================
?>
<!DOCTYPE html>
<!-- language_attributes() zet de taal van de site op de <html>-tag, bv. lang="nl-NL" -->
<html <?php language_attributes(); ?>>
<head>
    <!-- bloginfo( 'charset' ) haalt de tekenset op uit WordPress (meestal UTF-8) -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    // wp_head() is VERPLICHT. Hier laadt WordPress (en elke plugin)
    // zijn CSS, scripts en meta-tags in de <head>.
    // Zonder wp_head() werkt je CSS straks niet en werken plugins niet.
    wp_head();
    ?>
</head>

<!-- body_class() geeft de <body> automatisch CSS-classes, bv. "home" of "page" -->
<body <?php body_class(); ?>>

<?php
// wp_body_open() is nodig voor o.a. Google Tag Manager en andere
// plugins die code direct na de <body>-tag willen plaatsen.
wp_body_open();
?>

<header class="site-header">
    <?php // De sitenaam uit Instellingen > Algemeen, met een link naar de homepage ?>
    <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
    </a>
    <nav class="main-nav">
        <?php
        // Navigatie (les 5). wp_nav_menu() toont het menu dat je bij
        // Weergave > Menu's aan de locatie "Hoofdmenu" koppelt.
        // 'hoofdmenu' is de naam die we in functions.php hebben geregistreerd.
        // Is er nog geen menu gekoppeld? Dan toont WordPress een lijst met je pagina's.
        wp_nav_menu( array(
            'theme_location' => 'hoofdmenu',
        ) );
        ?>
    </nav>
</header>
