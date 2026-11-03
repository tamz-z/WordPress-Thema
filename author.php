<?php
// =====================================================================
// category.php  (les 4, slide "Filteren van content")
//
// Specifieke pagina voor het filteren op CATEGORIE, bv. /category/nieuws/
// Omdat dit bestand bestaat, kiest WordPress dit in plaats van archive.php:
//   category-{slug}.php -> category-{ID}.php -> category.php -> archive.php
// =====================================================================

get_header();
?>

<main class="site-main">

    <?php // single_cat_title() = alleen de naam van de categorie, zonder "Categorie:" ervoor ?>
    <h1>Categorie: <?php single_cat_title(); ?></h1>

    <?php
    // category_description() = de beschrijving die je bij
    // Berichten > Categorieën hebt ingevuld (mag ook leeg zijn)
    echo category_description();
    ?>

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post-card">
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <?php the_excerpt(); ?>
            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <p>Er zijn nog geen berichten in deze categorie.</p>

    <?php endif; ?>
</main>

<?php
get_footer();
