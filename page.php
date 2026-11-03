<?php
// =====================================================================
// page.php  (les 3, slides "Page")
//
// Toont een PAGINA (Pages in het dashboard), zoals "Over ons" of
// "Contact". Pagina's zijn statisch: geen datum, geen categorieën.
//
// Template-hiërarchie voor een pagina (slide "Page"):
//   eigen template -> page-{slug}.php -> page-{id}.php -> page.php -> index.php
// Er is geen specifieker bestand, dus WordPress kiest page.php.
// =====================================================================

// Bovenkant van de pagina inladen (header.php)
get_header();
?>

<main class="site-main">
    <?php // The Loop: ook een pagina wordt via The Loop opgehaald (1 resultaat) ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <?php // the_title() = de titel van de pagina ?>
        <h1><?php the_title(); ?></h1>

        <?php // the_content() = de inhoud die je in de editor hebt getypt ?>
        <?php the_content(); ?>

    <?php endwhile; ?>
</main>

<?php
// Onderkant van de pagina inladen (footer.php)
get_footer();
