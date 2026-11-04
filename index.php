<?php
// =====================================================================
// index.php  (les 2, slide "Posts tonen" – The Loop)
//
// index.php is het belangrijkste bestand van een classic thema.
// In de template-hiërarchie is dit het VANGNET: vindt WordPress geen
// specifieker bestand (zoals page.php of single.php), dan gebruikt hij
// index.php. Daarom is dit bestand (samen met style.css) verplicht.
//
// Nu is dit ook onze voorpagina: een overzicht van alle berichten.
// =====================================================================

// Les 3: bovenkant van de pagina inladen (header.php)
get_header();
?>

<main class="site-main">

    <?php
    // -----------------------------------------------------------------
    // The Loop: zo haal je berichten (posts) uit WordPress en toon je ze.
    //
    // We gebruiken de "alternatieve schrijfwijze" van PHP:
    //   if ( ... ) :   ...   else :   ...   endif;
    //   while ( ... ) : ...   endwhile;
    // Dat is hetzelfde als accolades { }, maar beter leesbaar tussen HTML.
    // -----------------------------------------------------------------

    // have_posts() vraagt aan WordPress: "zijn er berichten om te tonen?"
    if ( have_posts() ) :

        // Zolang er nog berichten zijn: the_post() zet het VOLGENDE
        // bericht klaar, zodat the_title() en the_content() weten
        // over welk bericht het gaat.
        while ( have_posts() ) : the_post();
            ?>

            <article>
                <?php // the_title() = de titel van het bericht ?>
                <?php // the_permalink() = link naar het losse bericht (single.php) ?>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <h1><?php the_author(); ?></h1>

                </h2>

                <?php // the_content() = de inhoud van het bericht ?>
                <?php the_content(); ?>
            </article>

            <?php
        endwhile; // einde van de lus

    else :

        // Geen berichten gevonden? Dan tonen we deze melding.
        // _e() = tekst op het scherm zetten (echo) die vertaald kan worden.
        _e( 'Sorry, no posts matched your criteria.', 'mijn-thema' );

    endif; // einde van de if
    ?>

</main>

<?php
// Les 3: onderkant van de pagina inladen (footer.php)
get_footer();
