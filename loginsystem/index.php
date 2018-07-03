<?php

include_once 'header.php';
?>
    <section class="main-container">

        <div class="main-wrapper">
            <h4>Welkom op de reserveringspagina van Verkeersschool Vrijenburg</h4>
            <h3> Bij het halen van het rijbewijs hoort natuurlijk ook het slagen voor het theorie-examen. Verkeersschool Vrijenburg in Barendrecht gaat je hierbij helpen. Professionele instructeurs nemen de theorie met je door en zorgen ervoor dat je alles goed begrijpt. Ons doel is je te laten slagen voor de theorie en genoeg aan te leren over de theorie, zodat je ook goed voorbereid bent op je praktijkexamen.
                

Onze theoriecursussen zijn ook goed geschikt voor cursisten met ADHD, faalangst en dyslexie. We hebben hier ruime ervaring in en al vele cursisten hiermee aan hun theorie geholpen. </h3>

            <?php
            if (isset($_SESSION['u_id'])){
                header("Location: reserve.php");
                
            }
            ?>
        </div>
    </section>
<?php
    include_once 'footer.php';
?>    

