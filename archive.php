<?php
// =====================================================================
// archive.php  (les 4, slides "Archief pagina")
//
// FALLBACK voor alle overzichtspagina's waar geen specifieker bestand
// voor is. Wij hebben category.php en tag.php, dus archive.php wordt
// hier gebruikt voor o.a.:
//   /author/tamzz/  -> berichten van een auteur
//   /2026/11/       -> berichten uit november 2026
//
// Volgorde (slide "Volgorde laden pagina's"):
//   category-nieuws.php -> category-{ID}.php -> category.php -> archive.php -> index.php
// =====================================================================

get_header();
?>

<main class="site-main">

    <?php
    // the_archive_title() maakt zelf een passende titel,
    // bv. "Auteur: tamzz" of "Maand: november 2026"
    ?>
    <h1><?php the_archive_title(); ?></h1>

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post-card">
                <h2>
                    <?php // the_permalink() = de link naar het losse bericht (single.php) ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <?php // the_excerpt() = een korte samenvatting in plaats van de hele tekst ?>
                <?php the_excerpt(); ?>
            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <p>Geen berichten gevonden.</p>

    <?php endif; ?>
</main>

<?php
get_footer();
