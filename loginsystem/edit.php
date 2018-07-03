<?php
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';
    include_once 'includes/edit.inc.php'

?>


 <section class="main-container">
        <div class="main-wrapper">
            <h2>Aanmelden</h2>
           <h3>Boeking wijzigen</h3>
            <form class="signup-form" action="includes/edit.inc.php">
            Soort: <input type="text" name="newkind" value="<?= htmlentities($reserve['kind'])?>">
            Datum: <input type="text" name="newdatepicker" value="<?= htmlentities($reserve['datepicker'])?>">
            Voornaam: <input type="text" name="newfirst_name" value="<?= htmlentities($reserve['first_name']) ?>">
            Achternaam: <input type="text" name="newlast_name" value="<?= htmlentities($reserve['last_name'])?>">
            Geboortedatum: <input type="text" name="newbirth_date" value="<?= htmlentities($reserve['birth_date'])?>">
            BSN-nummer: <input type="text" name="newbsn_number" value="<?= htmlentities($reserve['bsn_number'])?>">
            E-mail: <input type="text" name="newemail" value="<?= htmlentities($reserve['email']) ?>">
            Telefoonnummer: <input type="text" name="newphone_number" value="<?= htmlentities($reserve['phone_number'])?>">
            Adres: <input type="text" name="newaddress" value="<?= htmlentities($reserve['address'])?>">
            Postcode: <input type="text" name="newpostal_code" value="<?= htmlentities($reserve['postal_code'])?>">
            Woonplaats: <input type="text" name="newresidence" value="<?= htmlentities($reserve['residence'])?>">
            Opmerking: <input type="text" name="newnotes" value="<?= htmlentities($reserve['notes'])?>">
            
                <div class="input-field center">
                <button class="btn waves-effect waves-light center modal-trigger" href="#modal" type="submit    " value="Wijzig" name="submit">Wijzig</button>

         </form>
      </div>
   </body>
   <footer></footer>
</html>