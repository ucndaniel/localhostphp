<?php
/* Main Template File */ 
    get_header();
?>

<main class="main">
        <?php 
        // start the loop
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                    the_content();
            endwhile;
        endif;
        ?>
       
    </main>
<?php get_footer(); ?>

