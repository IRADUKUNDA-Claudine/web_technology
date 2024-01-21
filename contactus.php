<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-image: url('images/bgphot.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
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

        input {
            height: 25px;
            width: 65%;
            border: 1.5px solid;
            border-radius: 10px;
            padding-left: 20px;
            font-size: medium;
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
            color: rgb(4, 247, 20);
        }

        a:visited {
            color: rgb(108, 1, 209);
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
    <h1 style="text-align: center;">Contact us</h1>
    <p style="text-align: center;color: beige;"><b> Need to get in touch with us?
            fill the form with your inquiry or
            find the <a href="departmentemail.php">department email</a> you'd like to contact</b></p>
    <form action="" method="POST" style="">

        <br><label for="fname" style="color: rgb(1, 1, 0);"> firstname:</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname" style="color: rgb(14, 14, 14);"> lastname:</label><br>
        <input type="text" name="lname" id="lname"><br>
        <label for="email" style="color: rgb(6, 6, 5);">Email:</label><br>
        <input type="mail" name="email" id="email"><br>
        comment: <br>
        <textarea name="message" rows="10" cols="30">
        </textarea>
        <input type="submit" name="submit" value="submit" class="btn" style="background-color: rgb(139, 27, 27);" ><br><br>
        </form>
    <?php
       include('Connection.php');

   

    if($_SERVER['REQUEST_METHOD']=="POST")
    {  
        $FirstName=$_POST['fname'];
        $lastName=$_POST['lname'];
        $Email=$_POST['email'];
        $Comments=$_POST['message'];

   
        $sql = "INSERT INTO contact_us (fname, lname, email, comment) 
        VALUES ('$FirstName', '$lastName', '$Email', '$Comments')";

                    $connect=mysqli_query($conn,$sql);
        if($connect)
        {
            echo "your request is well sent.";
            	
        }
        else {
        echo "Error:".$sql."<br>".$conn->error;
        
    }}
    $conn->close();
    ?> 

</body>

</html>