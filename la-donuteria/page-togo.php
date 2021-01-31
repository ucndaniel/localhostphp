<?php 
/* Template Name: togo Page Template */

get_header();
?>
<main class="main mainMargin">
        <section class="togoMobileGrid">
            <div class="togo-header pageHeader">
                <h1>To Go</h1>
                <img src="<?php bloginfo('template_url') ?>/assets/images/understreg.png" alt="understreg" class="header-underline">
            </div>
            <img src="<?php bloginfo('template_url') ?>/assets/images/text_handmade_fresh.png" alt="text_handmade_fresh" class="menu-text-img menu-text-img-togo">
            <h2 class="togo-wolt">Se vores udvalg to-go og bestil donuts til levering via <h2 class="togo-wolt-logo" > <a class="togo-wolt-logo"href="https://wolt.com/da/dnk/aalborg/restaurant/la-donuteria-aalborg" target="_blank" rel="noopener noreferrer"> Wolt</a></h2>
        </section>
        <section class="togoDonutMobileGrid">
            <div class="togo_donut togo_grid-donut-1">
            <img src="<?php the_field('to-go_box_image_1'); ?>" alt="donut weekly special" class="donut-img">
                <h3><?php the_field('to-go_box_title_1'); ?></h3> <br>
                <h3><?php the_field('to-go_box_price_1'); ?></h3>
            </div>
            <div class="togo_donut togo_grid-donut-2">
            <img src="<?php the_field('to-go_box_image_2'); ?>" alt="donut weekly special" class="donut-img">
                <h3><?php the_field('to-go_box_title_2'); ?></h3> <br>
                <h3><?php the_field('to-go_box_price_2'); ?></h3>
            </div>
            <div class="togo_donut togo_grid-donut-3">
            <img src="<?php the_field('to-go_box_image_3'); ?>" alt="donut weekly special" class="donut-img">
                <h3><?php the_field('to-go_box_title_3'); ?></h3> <br>
                <h3><?php the_field('to-go_box_price_3'); ?></h3>
            </div>
            <div class="togo_donut togo_grid-donut-4">
            <img src="<?php the_field('to-go_box_image_4'); ?>" alt="donut weekly special" class="donut-img">
                <h3><?php the_field('to-go_box_title_4'); ?></h3> <br>
                <h3><?php the_field('to-go_box_price_4'); ?></h3>
                
            </div>
      
        </section>
    </main>



<?php get_footer(); ?>