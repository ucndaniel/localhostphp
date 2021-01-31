<?php 
/* Template Name: Menu Page Template */

get_header();
?>

<main class="main main-background mainMargin">



<section class="menuGrid">
            <div class="menu-header pageHeader">
                <h1>Menu</h1>
                <img src="<?php bloginfo('template_url') ?>/assets/images/understreg.png" alt="understreg" class="header-underline">
            </div>
             <img src="<?php bloginfo('template_url') ?>/assets/images/text_handmade_fresh.png" alt="text_handmade_fresh" class="menu-text-img menu-text-img-menu">
           <div class="tab">
            
            <button class="button menu-btn menu_grid-btn-1 tablinks" onclick="menuItems(event, 'donuts')" id="instaClick">Donuts</button>
            <button onclick="menuItems(event, 'veganDonuts')" class="button menu-btn menu_grid-btn-2 tablinks">vegan donuts</button>
            <button onclick="menuItems(event, 'drinks')" class="button menu-btn menu_grid-btn-3 tablinks">drinks</button> </div>
        </section> 
     
       <section id="donuts" class="menuDonutMobileGrid tabcontent">
            <div class="menu_donut menu_grid-donut-1">
            <img src="<?php the_field('image_of_menu_item_1'); ?>" alt="donut Weekly Special" class="donut-img">
                <h3><?php the_field('title_of_menu_item_1'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_1'); ?></h3>
            </div>
            <div class="menu_donut menu_grid-donut-2">
            <img src="<?php the_field('image_of_menu_item_2'); ?>" alt="donut Chocolate glazed" class="donut-img">
                <h3><?php the_field('title_of_menu_item_2'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_2'); ?></h3>
            </div>
            <div class="menu_donut menu_grid-donut-3">
            <img src="<?php the_field('image_of_menu_item_3'); ?>" alt="donut Hindbærdrøm<" class="donut-img">
                <h3><?php the_field('title_of_menu_item_3'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_3'); ?></h3>
            </div>
            <div class="menu_donut menu_grid-donut-4">
            <img src="<?php the_field('image_of_menu_item_4'); ?>" alt="donut Karamel" class="donut-img">
                <h3><?php the_field('title_of_menu_item_4'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_4'); ?></h3>
                </div>
        </section> 
        
        
        
        <section id="veganDonuts" class="menuDonutMobileGrid tabcontent tabcontentHide">
        <div class="menu_donut menu_grid-donut-1">
            <img src="<?php the_field('image_of_menu_item_vegan_1'); ?>" alt="donut Weekly Special" class="donut-img">
                <h3><?php the_field('title_of_menu_item_vegan_1'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_vegan_1'); ?></h3>
            </div>
            <div class="menu_donut menu_grid-donut-2">
            <img src="<?php the_field('image_of_menu_item_vegan_2'); ?>" alt="donut Chocolate glazed" class="donut-img">
                <h3><?php the_field('title_of_menu_item_vegan_2'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_vegan_2'); ?></h3>
            </div>
            <div class="menu_donut menu_grid-donut-3">
            <img src="<?php the_field('image_of_menu_item_vegan_3'); ?>" alt="donut Hindbærdrøm<" class="donut-img">
                <h3><?php the_field('title_of_menu_item_vegan_3'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_vegan_3'); ?></h3>
            </div>
            <div class="menu_donut menu_grid-donut-4">
            <img src="<?php the_field('image_of_menu_item_vegan_4'); ?>" alt="donut Karamel" class="donut-img">
                <h3><?php the_field('title_of_menu_item_vegan_4'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_vegan_4'); ?></h3>
                </div>
        </section>
        
        
        
        <section id="drinks" class="menuDonutMobileGrid tabcontent tabcontentHide">
        <div class="menu_donut menu_grid-donut-1">
            <img src="<?php the_field('image_of_menu_item_drink_1'); ?>" alt="donut Weekly Special" class="donut-img">
                <h3><?php the_field('title_of_menu_item_drink_1'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_drink_1'); ?></h3>
            </div>
            <div class="menu_donut menu_grid-donut-2">
            <img src="<?php the_field('image_of_menu_item_drink_2'); ?>" alt="donut Chocolate glazed" class="donut-img">
                <h3><?php the_field('title_of_menu_item_drink_2'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_drink_2'); ?></h3>
            </div>
            <div class="menu_donut menu_grid-donut-3">
            <img src="<?php the_field('image_of_menu_item_drink_3'); ?>" alt="donut Hindbærdrøm<" class="donut-img">
                <h3><?php the_field('title_of_menu_item_drink_3'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_drink_3'); ?></h3>
            </div>
            <div class="menu_donut menu_grid-donut-4">
            <img src="<?php the_field('image_of_menu_item_drink_4'); ?>" alt="donut Karamel" class="donut-img">
                <h3><?php the_field('title_of_menu_item_drink_4'); ?></h3> <br>
                <h3><?php the_field('price_of_menu_item_drink_4'); ?></h3>
                </div>
            </section>
        <?php the_content();  ?>
    </main>

<?php get_footer(); ?>

