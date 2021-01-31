<?php
/* header template */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>La Donuteria</title> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <script src="<?php bloginfo('template_url') ?>/assets/javascript/script.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header headerMargin">
        <div class="spacing hideSpacing"></div>
        <div class="logoA"> <a href="http://localhost:81/wordpress/"> <img class="logo" src="<?php bloginfo('template_url')?>/assets/images/logo.png" alt="donut-logo"></a>
        </div>
        <div class="hide"> 
        <a href="javascript:void(0);" onclick="myFunction()">    
        <i class="fas fa-bars"></i></a></div>
        
            <?php 
                wp_nav_menu ( $arg = array (
                    'menu_class' => 'navbar', 
                    'theme_location' => 'primary'
                ));
            ?>
        </nav>
    </header>