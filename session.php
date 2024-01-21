<?php
include('Connection.php');
session_start();
$user_check=$_SESSION['login_user'];
$q = mysqli_query($conn,"SELECT email FROM students WHERE email = '$user_check'");
   
   $row = mysqli_fetch_array($q,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>