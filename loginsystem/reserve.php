<?php
    include_once 'header.php';

?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Aanmelden</h2>
            <h3> Hier kun je je aanmelden voor de 1 daagse auto theoriecursus inclusief het CBR examen. Let er op dat je je BSN nummer bij de hand hebt. Dit is een 9 cijferig nummer en staat op je identiteitskaart of paspoort. Dit nummer hebben we nodig om je examen op naam te zetten bij het CBR.</h3>
            <form class="signup-form" action="includes/create.inc.php" method="POST">
            <input type="text" name="kind" placeholder="Motor / Auto" required>
            <input type="text" name="datepicker" placeholder="Datum van voorkeur" required>
            <input type="text" name="first_name" placeholder="Voornaam" required>
            <input type="text" name="last_name" placeholder="Achternaam" required>       
            <input type="text" name="birth_date" placeholder="Geboortedatum" required>
            <input type="text" name="bsn_number" placeholder="BSN-nummer" required>
            <input type="text" name="email" placeholder="E-Mail" required>
            <input type="text" name="phone_number" placeholder="Telefoon-nummer" required>
            <input type="text" name="address" placeholder="Adres" required>
            <input type="text" name="postal_code" placeholder="Postcode" required>
            <input type="text" name="residence" placeholder="Woonplaats" required>
            <input type="text" name="notes" placeholder="Eventuele notities" required>
                <button type="submit" name="submit"  value="Submit">Confirm</button>

<?php
    include_once 'footer.php';
?>    

