<?php
// =====================================================================
// 404.php  (les 4, slide "Niet gevonden pagina")
//
// Bestaat een URL niet? Dan zoekt WordPress naar 404.php.
// Volgorde:  404.php -> index.php
// Test: ga naar wordpres-les.local/bestaat-niet
// =====================================================================

get_header();
?>

<main class="site-main">
    <h1>404 – Pagina niet gevonden</h1>

    <p>Sorry, deze pagina bestaat niet (meer).</p>

    <?php // home_url( '/' ) = het adres van de homepage; esc_url() maakt de link veilig ?>
    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Terug naar de homepage</a></p>
</main>

<?php
get_footer();
