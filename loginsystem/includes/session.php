<php?

include_once 'dbh.inc.php';

session_start();
$user_check = $_SESSION['user_id'];
$ses_sql = mysqli_query($conn, "SELECT uid FROM users WHERE uid  = '$user_uid'");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_session = $row['user_uid'];
if(!isset($_SESSION['user_uid'])){
    header("location:login.inc.php");
}
      
?>
    
