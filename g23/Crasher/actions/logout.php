<?php 

session_start();
$_SESSION["email"] = null;
header("Location: ../index.php");
exit();

?>