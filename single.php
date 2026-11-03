<?php
// =====================================================================
// single.php  (eis uit de casus: "een pagina waar een enkele post
// te bekijken is")
//
// Toont ÉÉN bericht (post). Anders dan een pagina (page.php) heeft een
// bericht WEL een datum, een auteur, categorieën en tags
// (zie de tabel page.php vs single.php in les 3).
//
// Template-hiërarchie voor een bericht:
//   single-{posttype}.php -> single.php -> singular.php -> index.php
// =====================================================================

get_header();
?>

<main class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>

        <article>
            <h1><?php the_title(); ?></h1>

            <p class="entry-meta">
                <?php
                // get_the_date() = de datum van het bericht.
                // esc_html() maakt tekst veilig voordat we hem tonen (echo).
                echo esc_html( get_the_date() );
                ?>
                |
                <?php
                // Naam van de auteur als link naar zijn/haar berichten
                // -> die link opent author.php / archive.php (filteren op auteur)
                the_author_posts_link();
                ?>
                |
                <?php
                // Categorieën van dit bericht als links, gescheiden door een komma
                // -> een link opent category.php (filteren op categorie)
                the_category( ', ' );
                ?>
            </p>

            <?php
            // Berichtafbeelding (les 5). Werkt alleen dankzij
            // add_theme_support( 'post-thumbnails' ) in functions.php.
            // has_post_thumbnail() = heeft dit bericht een afbeelding?
            if ( has_post_thumbnail() ) :
                the_post_thumbnail( 'large' );
            endif;
            ?>

            <?php the_content(); ?>

            <?php
            // Tags als links: the_tags( 'tekst ervoor', 'scheiding', 'tekst erna' )
            // -> een link opent tag.php (filteren op tag)
            the_tags( '<p class="entry-tags">Tags: ', ', ', '</p>' );
            ?>
        </article>

    <?php endwhile; ?>
</main>

<?php
get_footer();
