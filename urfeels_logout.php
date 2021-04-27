<?php 

session_start();
session_destroy();

header("Location: urfeels_login.php");

?>