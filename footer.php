<?php
// =====================================================================
// footer.php  (les 3, slides "Footer")
//
// De onderkant van ELKE pagina. Net als header.php een herbruikbaar
// stukje (partial). Elke template laadt dit in met get_footer().
// =====================================================================
?>
<footer class="site-footer">
    <?php
    // Widgetgebied "Footer" (geregistreerd in functions.php).
    // is_active_sidebar() = staan er widgets in dit gebied?
    // dynamic_sidebar()   = toon die widgets.
    if ( is_active_sidebar( 'footer' ) ) :
        dynamic_sidebar( 'footer' );
    endif;
    ?>

    <?php
    // &copy; is het ©-teken.
    // date( 'Y' ) is gewone PHP en geeft het huidige jaartal, bv. 2026.
    // bloginfo( 'name' ) geeft de naam van de site.
    ?>
    <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
</footer>

<?php
// wp_footer() is VERPLICHT. Hier laden plugins hun scripts onderaan de
// pagina. Ook de zwarte admin-balk bovenaan werkt alleen met wp_footer().
wp_footer();
?>
</body>
</html>
