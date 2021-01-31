<?php
/* Template for udvalg section */

?>

<?php if ( is_active_udvalg( 'main-udvalg')) : ?>
    <aside class="udvalg widget_area">
    <?php dynamic_sidebar ( 'main-udvalg' ); ?>
</aside>
<?php endif; ?>