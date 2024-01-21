<?php
error_reporting(E_ALL);
ini_set('Display_errors',1);
session_start();
session_destroy(); 
header("Location:index.php");
?>
