<?php

session_start(); 
$connect = new mysqli("localhost","root","","scsc");
if($connect->connect_error) {
    die("Connection Failed : " . $connect->connect_error);
  } else {
     //echo "Successfully connected";
  }

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $password = validate($_POST['password']);

    if (empty($username)) {

        header("Location: login.php?error=UserName is required");

        exit();

    }
    else if(empty($password)){

        header("Location: login.php?error=Password is required");

        exit();

    }
    else{

        $sql = "select * from users where username='$username' AND password='$password'";

        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['id'] = $row['id'];

                header("Location: admins.php");

                exit();

            }else{

                header("Location: login.php?error=Incorect Username or password");

                exit();

            }

        }else{

            header("Location: login.php?error=Incorect Username or password");

            exit();

        }

    }

}else{

    header("Location: login.php");

    exit();

}

 ?>