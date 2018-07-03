<?php

require_once('database.php');
require_once('userInput.php');

// TODO: 
// 1. make login system
// 2. get all the reservations for the logged in phpversion
// 3. load this file when user clicks on edit from one reservation

$query = 
"UPDATE booking
SET (
`kind = '".$kind."'`,
`datepicker = '".$datepicker."'`,
`first_name = '".$first_name."'`,
`last_name = '".$last_name."'`,
`birthdate ='".$birthdate."'`,
`bsn_number ='".$bsn_number."'`,
`residence ='".$residence."'`,
`postal_code ='".$postal_code."'`,
`birthplace ='".$birthplace."'`,
`phone_number ='".$phone_number."'`,
`notes ='".$notes."'`
)
WHERE id = 1";

mysqli_query($db, $query) or die('Error: '. $query);

?>