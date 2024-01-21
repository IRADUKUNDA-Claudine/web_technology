<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    $connect = new mysqli("localhost","root","","scsc");
    if($connect->connect_error) {
        die("Connection Failed : " . $connect->connect_error);
      } else {
         //echo "Successfully connected";
      }}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
    
        a{
                    text-decoration: none;
                    font-family: Arial, Helvetica, sans-serif;
                    justify-content: space-between;
                    padding: 15px;
                    margin-top: 5%;
        
        }
        a:link{
          color: blue;
        }
        a:visited{
            color:blueviolet;
        }
        a:hover{
            color:brown;
        }
        a:active{
            color: rgb(34, 1, 64);
        }
        td{
            padding: 10px;
        }
       
    </style>
</head>
<body>
    <table border="0" style="height: 100%; width: 100%; background-color: antiquewhite;">
        <tr>
            <td><img src="images\LOGO_edited.jpg" style="height:3%; width:3%;"><b>&nbsp;&nbsp;SCAC</b></td>
            <td style=" text-align: right;">
                <a href="index.php" style="text-decoration: none; color: rgba(19, 19, 197);">Home &nbsp;&nbsp;</a>
                <a href="membership.php" style="text-decoration: none; color: rgb(19, 19, 197) ;">clubs &nbsp;&nbsp;</a>
                <a href="contactus.php" style="text-decoration: none; color: rgb(19, 19, 197);">contact-us</a>
            </td>
        </tr>
    </table> 
    <h1 style="text-align: center;">WELCOME TO SPORT CLUB:</h1>
    <h2>Do you need to be fitted? you are not wrong this the right place you are mostly welcome in
        this club. More practice makes perfect </h2>
    <div>
        <img src="images\SPRT1.jpeg" style="width: 33%;height: 35%;">
        <img src="images\SPRT2.jpeg" style="width: 33%;height: 35%;">
        <img src="images\SPRT3.jpeg" style="width: 33%;height: 35%;">
    </div>
    <h2>we have a wide team, we have different activities and sports in this club such as 
        gymnastic, basketball, volleyball, cricket and many others.
        and also we take time to have a mass sport together as a team.
    </h2>
    <div class="img1">
        <img src="images\sport5.jpeg" style="height: 280px;width: 300px;">
        <img src="images\sport2.jpeg" style="height: 280px;width: 300px;">
        <img src="images\sport3.jpeg" style="height: 280px;width: 300px;">
        <img src="images\sport4.jpeg" style="height: 280px;width: 300px;"><br>
        <h2>in this club we have many games as mentioned and you can see we have volleyball,
            cricket, karate, basketball and also ofcourse we have football.
        </h2>
    </div>
       
    <a href="register.php"><button onclick="alert(start)" style="background-color: brown;font-size: 200%;width: 10%; height: 200%; position: relative; left: 40%;">Register</button></a><br>
</body>
</html>