<?php

require_once('database.php');

if(isset(
  $_POST['kind'],
  $_POST['datepicker'],
  $_POST['first_name'],
  $_POST['last_name'],
  $_POST['birthdate'],
  $_POST['bsn_number'],
  $_POST['email'],
  $_POST['phone_number'],
  $_POST['address'],
  $_POST['postal_code'],
  $_POST['residence'],
  $_POST['notes']

)) {
    $kind = mysqli_real_escape_string($db,$_POST['kind']);
    $datepicker = mysqli_real_escape_string($db,$_POST['datepicker']);
    $first_name = mysqli_real_escape_string($db,$_POST['first_name']);
    $last_name = mysqli_real_escape_string($db,$_POST['last_name']);
    $birthdate = mysqli_real_escape_string($db,$_POST['birthdate']);
    $bsn_number = mysqli_real_escape_string($db,$_POST['bsn_number']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $phone_number = mysqli_real_escape_string($db,$_POST['phone_number']);
    $address = mysqli_real_escape_string($db,$_POST['address']);
    $postal_code = mysqli_real_escape_string($db,$_POST['postal_code']);
    $residence = mysqli_real_escape_string($db,$_POST['residence']);
    $notes = mysqli_real_escape_string($db,$_POST['notes']);
}

?>