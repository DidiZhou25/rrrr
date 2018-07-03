<?php

include_once 'dbh.inc.php';

if (isset($_POST["user_id"]) && is_numeric($_POST['user_id'])){
    
    $query = "DELETE FROM users WHERE user_id = ".mysqli_real_escape_string($conn, $_POST['user_id']);
    $remove = $conn->query($query);
    
}

?>

<p> Delete a user</p>
<form method="POST">
<p>ID to delete: <input type="number" name="user_id"></p>
    <p><input type="submit" value="Delete"/></p>
</form>