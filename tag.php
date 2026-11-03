<?php
// =====================================================================
// tag.php  (les 4, slide "Filteren van content")
//
// Specifieke pagina voor het filteren op TAG, bv. /tag/wordpress/
// Volgorde:  tag-{slug}.php -> tag-{ID}.php -> tag.php -> archive.php
// =====================================================================

get_header();
?>

<main class="site-main">

    <?php // single_tag_title() = alleen de naam van de tag ?>
    <h1>Berichten met de tag: <?php single_tag_title(); ?></h1>

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

        <p>Er zijn nog geen berichten met deze tag.</p>

    <?php endif; ?>
</main>

<?php
get_footer();
