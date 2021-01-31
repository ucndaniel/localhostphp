<?php 
/* Template Name: om os Page Template */

get_header();
?>

 <main class="main mainMargin">
        <div class="pageHeader">
            <h1>Om os</h1>
            <img src="<?php bloginfo('template_url') ?>/assets/images/understreg.png" alt="understreg" class="header-underline">
        </div>
        <section class="omos-grid">
            <article class="voresHistorie">
                <h2><?php the_field('overskrift'); ?> </h2>
                <p>Selvom rygter vil at donut’en ikke har oprindelse i USA, men Holland, er det alligevel fra en rejse
                    til USA, Peter, ejeren af La Donuteria, blev inspireret til at starte sin første donut-shop i
                    Bratislava, stålsat på at servere byens bedste donuts.
                    <br> <br>
                    Nu er vi den andenstørste kæde, der serverer hjemmelavede donuts, i Europa. En kæde grundlagt i
                    2016, der i 2017 vandt prisen for top ti bedste hjemmelavede donuts, og har udvidelser til flere
                    lande i kikkerten. I 2020 åbnede vi La Donuteria i Aalborg.
                </p>
            </article>
            <article class="donutHistorie">
                <h2>La Donuteria</h2>
                <p>Vi lægger vægt på at servicen er i top, når du kommer forbi hos os. Her mødes du af de kendetegnende
                    bløde farvede vægge, friske blomster og vores smilende servitricer. Vi bager vores donuts fra bunden
                    hver dag efter egen opskrift - det betyder dog at når vi har udsolgt er der udsolgt, så det er altid
                    en fordel at være i god tid!
                    <br> <br>
                    Kan du ikke nå at lægge vejen forbi, laver vi også take away donuts. Dem kan du få serveret i en af
                    vores lyserøde eller blå æsker, der egner sig både til værtindegave, fejring af en særlig begivenhed
                    eller til at kaste glans på en rolig eftermiddag derhjemme.” </p>
                  
                  <?php the_content(); ?>
            </article>

        </section>
    </main>



<?php get_footer(); ?>