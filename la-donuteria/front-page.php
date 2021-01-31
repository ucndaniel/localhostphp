<?php
/* Template Name: Landing Page Template */
get_header(); 
?>
<main class="main">
        <div id="overlay">
            <p class="overlayText">Kære kunde <i class="fas fa-heart"></i><br> <br>
            
            Vi er desværre lukket i øjeblikket, grundet COVID-19. <br> <br>
            
            <a href="#" target="_blank" rel="noopener noreferrer" class="underline"> Læs mere her </a>
            
            <i onclick="off()" class="fas fa-times"></i>
        </div>
        <!-- mobile -->
        <section class="homeMobileLandingGrid mobileLanding">
            <div class="board">
                <h1 class="boardText">Café i hjertet af Aalborg med<br>
                    donuts bagt fra bunden
                    med kærlighed <i class="fas fa-heart"></i> </h1>
            </div>
            <img class="donutLady" src="<?php bloginfo('template_url') ?>/assets/images/donutlady.png" alt="lady donuteria">
            <img class="flyingDonut1" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut2.png" alt="donut">
            <img class="flyingDonut2" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut3.png" alt="donut">
            <img class="flyingDonut3" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut4.png" alt="donut">
         <div class="button1"> <a href="menu"> <button class="button ">MENU</button></a></div> 
         <div class="button2"> <a href="kontakt">  <button class="button ">Kontakt</button></a></div>
          <div class="button3"> <a href="to-go"> <button class="button ">TO GO</button></a></div>
        </section>

        <!-- desktop -->
        <section class="desktopLanding">
            <div class="video"> <video autoplay muted loop src="<?php bloginfo('template_url') ?>/assets/video/ladonuteria.mp4"></video> </div> 
            <!-- VIDEO SKAL GØRES MINDRE STØRRELSE !!!!!!!!!!!!!!!!!!!!! -->
            <div class="buttonDesktopWrapper"> <a href="menu"> <button class="buttonDesktop"> Menu</button></a>
            </div>

            <article class="udvalgLandingWrapper">
                <div class="udvalgLanding">
               <div>         <h1>Velkommen til La Donuteria</h1>
                <p>Café i hjertet af Aalborg med
                    donuts bagt fra bunden
                    med kærlighed <i class="fas fa-heart"></i> <br>
                    Tjek vores lækre udvalg af donuts her og kom
                        forbi os på Nørregade 14. <br>
                        Vi bager dem fra bunden hver morgen,
                        og modtager gerne ønsker til nye varianter.
                    </p></div>
                    <img class="udvalgLandingDonut" src="<?php bloginfo('template_url') ?>/assets/images/donuts.png" alt="donuts">
                </div>
            </article>
        </section>

        
        <section class="campaign">
        <img src="<?php the_field('campaign_image'); ?>" >
        <h1 class="campaign_title"><?php the_field('campagin_title'); ?></h1>
        <p class="campaign_text"><?php the_field('campaign_text'); ?> <a href="menu"> <br> <button class="buttonDesktop3">Se tilbud</button></a></p>
        </section>

        <section class="reviews">
            <h1 class="reviewHeader">Brugeranmeldelser <i class="fas fa-heart"></i> </h1>
            <img class="reviewDonut1" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut2.png" alt="donut">
            <img class="reviewDonut2" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut2.png" alt="donut">
            <img class="reviewDonut3" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut2.png" alt="donut">
            <img class="reviewDonut4" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut2.png" alt="donut">
            <img class="reviewDonut5" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonuthalf.png" alt="donut">
            <!-- replace m. photoshop halv donut -->
            <p class="rating"><?php the_field('overskrift'); ?> </p>
        </section>

        <article class="woltLandingWrapper desktopLanding">
            <div class="woltLanding">
                <img src="<?php bloginfo('template_url') ?>/assets/images/oreodonut.PNG" alt="oreo donut">
                <div class="woltTextAreaLanding">
                    <h1 class="landingWoltHeader">Bestil med <span class="wolt"> Wolt</span></h1>
                    <p>
                    Klik på ‘bestil’ for at komme direkte videre til vores side på Wolt, hvor du kan bestille nogle lækre donuts og få dem bragt direkte hjem, ud til arbejdet, eller hvor du befinder dig!


                    </p><a href="https://wolt.com/da/dnk/aalborg/restaurant/la-donuteria-aalborg" target="_blank"
                        rel="noopener noreferrer"> <button class="buttonDesktop2">Bestil</button></a>
                </div>
            </div><img class="flyingDonut1" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut2.png" alt="donut">
            <img class="flyingDonut2" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut3.png" alt="donut">
            <img class="flyingDonut3" src="<?php bloginfo('template_url') ?>/assets/images/flyingdonut4.png" alt="donut">
            <img class="donutLadyDesk" src="<?php bloginfo('template_url') ?>/assets/images/donutlady1.png" alt="donutlady">
        </article>
            <h1 class="instaHeader">Følg os på Instagram <i class="fas fa-heart"></i> </h1>   
            <?php the_content();  ?>
           <div class="instaWrapper"> <a href="https://www.instagram.com/la_donuteria_dk/" target="_blank" rel="noopener noreferrer"> <button class="buttonDesktop4">Instagram</button></a></div>
            
    </main>

    <?php get_footer(); ?>
