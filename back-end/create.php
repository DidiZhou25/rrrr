<?php

require_once('database.php');
require_once('userInput.php');

$query =  "INSERT INTO booking(
`kind`,
`datepicker`,
`first_name`,
`last_name`,
`birthdate`,
`bsn_number`,
`email`,
`phone_number`,
`address`,
`postal_code`,
`residence`,
`notes`

)
    VALUES (
    '".$kind."',
    '".$datepicker."',
    '".$first_name."',
    '".$last_name."',
    '".$birthdate."',
    '".$bsn_number."',
    '".$email."' ,
    '".$phone_number."',
    '".$address."',
    '".$postal_code."',
    '".$residence."',
    '".$notes."')";

mysqli_query($db, $query) or die('Error: '. $query);

mysqli_close($db);
?>
