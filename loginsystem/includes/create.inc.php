<?php

require_once('dbh.inc.php');


if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';
    
    $kind = mysqli_real_escape_string($conn,$_POST['kind']);
    $datepicker = mysqli_real_escape_string($conn,$_POST['datepicker']);
    $first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
    $birth_date = mysqli_real_escape_string($conn,$_POST['birth_date']);
    $bsn_number = mysqli_real_escape_string($conn,$_POST['bsn_number']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone_number = mysqli_real_escape_string($conn,$_POST['phone_number']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $postal_code = mysqli_real_escape_string($conn,$_POST['postal_code']);
    $residence = mysqli_real_escape_string($conn,$_POST['residence']);
    $notes = mysqli_real_escape_string($conn,$_POST['notes']);
    
}

$query =  "INSERT INTO reserve(
`kind`,
`datepicker`,
`first_name`,
`last_name`,
`birth_date`,
`bsn_number`,
`email`,
`phone_number`,
`address`,
`postal_code`,
`residence`,
`notes`)

    VALUES (
    '$kind',
    '$datepicker',
    '$first_name',
    '$last_name',
    '$birth_date',
    '$bsn_number',
    '$email' ,
    '$phone_number',
    '$address',
    '$postal_code',
    '$residence',
    '$notes')";

mysqli_query($conn, $query) or die('Error: '. $query);

mysqli_close($conn);
?>
