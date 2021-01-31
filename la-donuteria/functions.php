<?php 

if ( ! function_exists ( 'donuteria_setup') ) :
        function donuteria_setup() {
            // let wordpress make the title tags
            add_theme_support( 'title-tag' );
        }
    endif;
    add_action('after_setup_theme', 'donuteria_setup');

    // menus //

    function register_donuteria_menu() {
        register_nav_menus(
            array(
                'primary' => __('Primary Menu')
            )
        );
    }
    add_action('init', 'register_donuteria_menu');

    // add stylesheet //

    function donuteria_scripts() {
        // enqueue main style.css 
        wp_enqueue_style('donuteria_styles', get_stylesheet_uri() );
        // enqueue google fonts
        wp_enqueue_style('donuteria_google_fonts', 'https://fonts.googleapis.com/css2?family=Pacifico&display=swap' );
    }
    add_action('wp_enqueue_scripts', 'donuteria_scripts');

    
    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
    
// add async and defer attributes to enqueued scripts
// function shapeSpace_script_loader_tag($tag, $handle, $src) {
	
// 	if ($handle === 'donuteria_scripts') {
		
// 		if (false === stripos($tag, 'async')) {
			
// 			$tag = str_replace(' src', ' async="async" src', $tag);
			
// 		}
		
// 		if (false === stripos($tag, 'defer')) {
			
// 			$tag = str_replace('<script ', '<script defer ', $tag);
			
// 		}
		
// 	}
	
// 	return $tag;
	
// }
// add_filter('script_loader_tag', 'shapeSpace_script_loader_tag', 10, 3);