<?php
session_start();
$error="";
include('Connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Reemail = $_POST['username'];
    $Repassword = $_POST['password'];

    $sql = "SELECT * FROM students WHERE email='$Reemail' AND password='$Repassword'";
    $connect = mysqli_query($conn, $sql);

    if (mysqli_num_rows($connect) > 0) {
        $row = mysqli_fetch_assoc($connect);
        $FirstName = $row['fname'];
        $secondName = $row['lname'];
        $userRole = $row['ROLES'];  // Assuming you have a 'role' column in the HOUSE table

        // Redirect based on the user's role
        if ($userRole == 'Admin') {
            //$_SESSION['login_user']=$Reemail;
            header("Location: admins.php");
            exit();
        } elseif ($userRole == 'user') {
           // $_SESSION['login_user']=$Reemail;
            header("Location: membership.php");
            exit();
        } else {
            // Handle other roles or unexpected cases
            $error='Unknown role. Please register.';
            exit();
        }
    } else {
        $error="Invalid email or password. Please register.";

    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            justify-content: space-between;
            padding: 15px;
            margin-top: 5%;

        }

        form {
            border: 1px solid;
            height: 40%;
            width: 40%;
            border-radius: 10px;
            align-items: center;
            margin-left: 30%;
            margin-top: 5%;
            padding-left: 30px;
            padding-top: 20px;
            padding-bottom: 20px;
            box-shadow: 10px 10px 5px lightblue;
        }

        p{
            padding-left: 30px;
        }

        .txt {
            height: 40px;
            width: 80%;
            border: 1.5px solid;
            border-radius: 10px;
            padding-left: 20px;
            font-size: medium;
        }

        .btn {
            height: 40px;
            width: 40%;
            border: 1.5px solid;
            border-radius: 10px;
            background-color: azure;
        }

        .btn :hover {
            background-color: aquamarine;
        }

        label {
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
        }

        a:link {
            color: blue;
        }

        a:visited {
            color: blueviolet;
        }

        a:hover {
            color: brown;
        }

        button:hover {
            color: brown
        }

        button:visited {
            color: blueviolet;
        }

        button:link {
            color: blue;
        }

        a:active {
            color: rgb(34, 1, 64);
        }

        button:active {
            color: rgb(29, 2, 54);
        }
    </style>
</head>

<body>
    <table border="0" style="height: 100%; width: 100%; background-color: antiquewhite;">
        <tr>
            <td><img src="images\LOGO_edited.jpg" style="height:3%; width:3%;"><b>&nbsp;&nbsp;SCAC</b></td>
            <td style=" text-align: right;">
                <a href="index.php" style="text-decoration: none; color: rgba(19, 19, 197);">Home &nbsp;&nbsp;</a>
                <a href="membership.php" style="text-decoration: none; color: rgb(19, 19, 197) 43;">clubs
                    &nbsp;&nbsp;</a>
                <a href="contactus.php" style="text-decoration: none; color: rgb(19, 19, 197);">contact-us</a>
            </td>
        </tr>
    </table>
    <form method="post" style=" background-color: bisque;" action="Login.php">
    <p><?php echo $error;?></p>
        <label for="name">USER NAME:</label><br>
        <input type="email" name="username" class="txt" placeholder="Username..."><br><br>
        <label for="name">PASSWORD:</label><br>
        <input type="password" name="password" class="txt" placeholder="Password..."><br><br>
        <input type="submit" class="btn" value="LOGIN" style="background-color: aquamarine;"><br><br>
        <a href="">forget password?</a><br>
           <p>Don't have account?</p> 
        <a href="register.php">register here</a>

    </form>
</body>

</html>