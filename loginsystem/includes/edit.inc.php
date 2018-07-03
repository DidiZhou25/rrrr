<?php
include_once "dbh.inc.php";
include('session.php');


$user_id = $_REQUEST['user_id']; 
$query = "SELECT * FROM reserve WHERE user_id = '$user_id'";
$resultaten = mysqli_query($conn,$query);

 
if(isset($_POST['submit'])) {
	$kind = mysqli_escape_string($conn, $_POST['newkind']);
	$datepicker = mysqli_escape_string($conn, $_POST['newdatepicker']);
	$first_name = mysqli_escape_string($conn, $_POST['newfirst_name']);
	$last_name = mysqli_escape_string($conn, $_POST['newlast_name']);
	$birth_date = mysqli_escape_string($conn, $_POST['newbirth_date']);
	$bsn_number = mysqli_escape_string($conn, $_POST['newbsn_number']);
	$email = mysqli_escape_string($conn, $_POST['newemail']);
	$phone_number = mysqli_escape_string($conn, $_POST['newphone_number']);
	$address = mysqli_escape_string($conn, $_POST['newaddress']);
	$postal_code = mysqli_escape_string($conn, $_POST['newpostal_code']);
	$residence = mysqli_escape_string($conn, $_POST['residence']);
	$notes = mysqli_escape_string($conn, $_POST['newnotes']);
 
    $newsqli = "UPDATE reserve SET 
    kind = '$kind', 
    datepicker = '$datepicker', 
    first_name ='$first_name', 
    last_name = '$last_name', 
    birth_date = '$birth_date', 
    bsn_number = '$bsn_number', 
    email = '$email', 
    phone_number = '$phone_number', 
    address = '$address', 
    postal_code = '$postal_code', 
    residence = '$residence', 
    notes = '$notes'
    
    WHERE ID = $id";
    mysqli_query($conn, $newsqli);
   header("Location: bookings.php?=succesful");
}
?>
 
