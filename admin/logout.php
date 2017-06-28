<?php
session_start();
ob_start();
?>

<?php


$_SESSION['email'] = null;
$_SESSION['role']  = null;

header("Location: index.php");


?>