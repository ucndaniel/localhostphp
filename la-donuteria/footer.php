<?php 
// main footer file
?>

<div class="footerBG">
        <footer class="footer">

            <h2 class="openingHoursFooter">Åbningstider:</h2>
            <div class="footerOne">
                <div>
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
                <div class="mobileOnly"> 
                    <div> <a href="https://www.facebook.com/ladonuteriaaalborg/" target="_blank" rel="noopener noreferrer"> <i class="fab fa-facebook"> </i></a></div>
                    <div> <a href="https://www.instagram.com/la_donuteria_dk/" target="_blank" rel="noopener noreferrer"> <i class="fab fa-instagram"></i></a></div>
                </div>
            </div>

            <div class="footerTwo">
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
            <div class="desktopOnly">
              <div> <a href="https://www.facebook.com/ladonuteriaaalborg/" target="_blank" rel="noopener noreferrer"> <i class="fab fa-facebook"> </i></a></div>
              <div> <a href="https://www.instagram.com/la_donuteria_dk/" target="_blank" rel="noopener noreferrer"> <i class="fab fa-instagram"></i></a></div>
            </div>
        </footer>
    </div>

 <?php wp_footer(); ?>   
</body>

</html>