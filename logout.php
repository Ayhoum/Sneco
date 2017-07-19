<?php
session_start();
ob_start();
?>

<?php

$_SESSION['username'] = null;
$_SESSION['role']  = null;
$_SESSION['ID'] =null;
$_SESSION['logged']=null;
header("Location: index.php");


?>