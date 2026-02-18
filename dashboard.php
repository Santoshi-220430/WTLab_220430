<?php
/*session_start();
if (!isset($_SESSION['username'])) {
    header("Location: signin.html");
    exit();
}*/
?>
<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: signin.php");
    exit();
}
?>
