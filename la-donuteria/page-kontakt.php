<?php 
/* Template Name: kontakt Page Template */

get_header();
?>
    <main class="main mainMargin">
        <div class="pageHeader">
            <h1>Kontakt</h1>
            <img src="<?php bloginfo('template_url') ?>/assets/images/understreg.png" alt="understreg" class="header-underline">
        </div>

        <section class="kontakt_main-grid">
        <div class="kontakt-img">
        <img src="<?php the_field('imagefield'); ?>" alt="La Donuteria medarbejdere">  
                  <?php the_content(); ?> </div>

            <div class="kontakt-grid"> <!-- mobile -->
                <div class="footerTwo contactInfo">
                    <a href="tel:+45 52 90 80 11"> <svg class="footerIcons" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 28.198 28.198">
                            <path id="Icon_awesome-phone-alt" data-name="Icon awesome-phone-alt"
                                d="M21.373,15.546,16.56,13.484a1.031,1.031,0,0,0-1.2.3l-2.131,2.6A15.927,15.927,0,0,1,5.612,8.771l2.6-2.131a1.029,1.029,0,0,0,.3-1.2L6.45.624a1.038,1.038,0,0,0-1.182-.6L.8,1.058A1.031,1.031,0,0,0,0,2.063,19.936,19.936,0,0,0,19.938,22a1.031,1.031,0,0,0,1.005-.8l1.031-4.469a1.044,1.044,0,0,0-.6-1.186Z"
                                transform="translate(7.525 0) rotate(20)" />
                        </svg> 52 90 80 11</a>
                    <a href="mailto:aalborg@ladonuteria.eu"> <svg class="footerIcons" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 21 30">
                            <path id="Icon_material-location-on" data-name="Icon material-location-on"
                                d="M18,3A10.492,10.492,0,0,0,7.5,13.5C7.5,21.375,18,33,18,33S28.5,21.375,28.5,13.5A10.492,10.492,0,0,0,18,3Zm0,14.25a3.75,3.75,0,1,1,3.75-3.75A3.751,3.751,0,0,1,18,17.25Z"
                                transform="translate(-7.5 -3)" />
                        </svg>
                        aalborg@ladonuteria.eu</a>
                    <address> <svg class="footerIcons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 24">
                            <path id="Icon_material-email" data-name="Icon material-email"
                                d="M30,6H6A3,3,0,0,0,3.015,9L3,27a3.009,3.009,0,0,0,3,3H30a3.009,3.009,0,0,0,3-3V9A3.009,3.009,0,0,0,30,6Zm0,6L18,19.5,6,12V9l12,7.5L30,9Z"
                                transform="translate(-3 -6)" />
                        </svg>
                        Nørregade 14, 9000 Aalborg</address>
                </div>
            </div>

             <div class="kontakt-grid-desktop"> <!-- desktop -->
                <div class="footerTwo contactInfo">
                    <h2 class="kontaktHeader">Kontakt</h2>
                    <a href="tel:+45 52 90 80 11"> <svg class="footerIcons" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 28.198 28.198">
                            <path id="Icon_awesome-phone-alt" data-name="Icon awesome-phone-alt"
                                d="M21.373,15.546,16.56,13.484a1.031,1.031,0,0,0-1.2.3l-2.131,2.6A15.927,15.927,0,0,1,5.612,8.771l2.6-2.131a1.029,1.029,0,0,0,.3-1.2L6.45.624a1.038,1.038,0,0,0-1.182-.6L.8,1.058A1.031,1.031,0,0,0,0,2.063,19.936,19.936,0,0,0,19.938,22a1.031,1.031,0,0,0,1.005-.8l1.031-4.469a1.044,1.044,0,0,0-.6-1.186Z"
                                transform="translate(7.525 0) rotate(20)" />
                        </svg> 52 90 80 11</a>
                    <a href="mailto:aalborg@ladonuteria.eu"> <svg class="footerIcons" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 21 30">
                            <path id="Icon_material-location-on" data-name="Icon material-location-on"
                                d="M18,3A10.492,10.492,0,0,0,7.5,13.5C7.5,21.375,18,33,18,33S28.5,21.375,28.5,13.5A10.492,10.492,0,0,0,18,3Zm0,14.25a3.75,3.75,0,1,1,3.75-3.75A3.751,3.751,0,0,1,18,17.25Z"
                                transform="translate(-7.5 -3)" />
                        </svg>
                        aalborg@ladonuteria.eu</a>
                    <address class="address"> <svg class="footerIcons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 24">
                            <path id="Icon_material-email" data-name="Icon material-email"
                                d="M30,6H6A3,3,0,0,0,3.015,9L3,27a3.009,3.009,0,0,0,3,3H30a3.009,3.009,0,0,0,3-3V9A3.009,3.009,0,0,0,30,6Zm0,6L18,19.5,6,12V9l12,7.5L30,9Z"
                                transform="translate(-3 -6)" />
                        </svg>
                        Nørregade 14, 9000 Aalborg</address>
                </div><section class="socialsContactDesktop">
                    <a class="socials" href="https://www.facebook.com/ladonuteriaaalborg" target="_blank"
                        rel="noopener noreferrer"> <i class="fab fa-facebook"> </i></a>
                    <a class="socials" href="https://www.instagram.com/la_donuteria_dk/" target="_blank" rel="noopener noreferrer"> <i
                            class="fab fa-instagram fa-instagramContact"></i></a>
                            <p>Facebook</p>
                            <p>Instagram</p>
                </section>
            </div>
        </section>
        <section class="socialsContact">
            <a class="socials" href="https://www.facebook.com/ladonuteriaaalborg" target="_blank"
                rel="noopener noreferrer"> <i class="fab fa-facebook"> </i></a>
            <a class="socials" href="https://www.instagram.com/la_donuteria_dk/" target="_blank" rel="noopener noreferrer"> <i
                    class="fab fa-instagram fa-instagramContact"></i></a>
                    <p>Facebook</p>
                    <p>Instagram</p>
        </section>

    <!-- desktop -->
    <div class="openingMapGrid"> 
        <section class="mapDesktop">
        <iframe class="mapDesktop" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.2893396805844!2d9.924317915882462!3d57.046587080919046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464932ed53ca40ed%3A0x80c854451c246115!2sN%C3%B8rregade%2014%2C%209000%20Aalborg!5e0!3m2!1sen!2sdk!4v1610202367001!5m2!1sen!2sdk" 
             frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
        <div class="contactNotFooterDesktop">
         <h2 class="contactOpeningHoursDesktop"><?php the_field('overskrift'); ?></h2>    <div>
                <p> Søndag-mandag: <br>
                <?php the_field('opening_hours_sunday_to_monday'); ?></p>
            </div>

            <div>
                <p> Tirsdag: <br>
                <?php the_field('opening_hours_tuesday'); ?></p>
            </div>

            <div>
                <p> Onsdag-torsdag: <br>
                <?php the_field('opening_hours_wednessday_to_thursday'); ?></p>
            </div>

            <div>
                <p> Fredag-lørdag: <br>
                <?php the_field('opening_hours_friday_to_saturday'); ?></p>
            </div>
</div>
</div>  

<!-- mobile -->
    <h2 class="openingHoursFooter contactOpeningHours hideOnDesktop">Åbningstider:</h2>
    <div class="footerOne contactNotFooter">
        <div>
            <p> Søndag-mandag: <br>
                LUKKET</p>
        </div>

        <div>
            <p> Tirsdag: <br>
                10-18</p>
        </div>

        <div>
            <p> Onsdag-torsdag: <br>
                LUKKET</p>
        </div>

        <div>
            <p> Fredag-lørdag: <br>
                10-18</p>
        </div>
</div>

    <section id="map">
    <iframe class="mapMobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.2893396805844!2d9.924317915882462!3d57.046587080919046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464932ed53ca40ed%3A0x80c854451c246115!2sN%C3%B8rregade%2014%2C%209000%20Aalborg!5e0!3m2!1sen!2sdk!4v1610202367001!5m2!1sen!2sdk" 
             frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
    <?php the_content();  ?>
    </main>



<?php get_footer(); ?>