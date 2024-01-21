<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
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
        form{
            border: 1px solid;
            height: 40%;
            width: 40%;
            border-radius: 10px;
            align-items: center;
            margin-left: 30%;
            margin-top: 2%;
            padding-left: 20px;
            padding-top: 10px;
            padding-bottom: 20px;
            box-shadow: 10px 10px 5px lightblue;
        }
        input{
            height: 25px;
            width: 65%; 
            border: 1.5px solid;      
            border-radius: 10px;
            padding-left: 20px;
            font-size: medium;
        }
        .txt{
            height: 40px;
            width: 80%; 
            border: 1.5px solid;      
            border-radius: 20px;
            padding-left: 20px;
            font-size: medium;
        }
        .btn{
            height: 40px;
            width:40%; 
            border: 1.5px solid;      
            border-radius: 10px;
            background-color: azure;
        }
        .btn :hover{
            background-color: aquamarine;
        }
        label{
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
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
        button:hover{
            color:brown
        }
        button:visited{
            color:blueviolet; 
        }
        button:link{
            color: blue;
        }
        a:active{
            color: rgb(34, 1, 64);
        }
        button:active{
            color: rgb(29, 2, 54);
        }
            </style>

       
</head>
<body style="background-color: rgb(225, 232, 230);">
    <table border="0" style="height: 100%; width: 100%; background-color: antiquewhite;">
        <tr>
            <td><img src="images\LOGO_edited.jpg" style="height:3%; width:3%;"><b>&nbsp;&nbsp;SCAC</b></td>
            <td style=" text-align: right;">
                <a href="index.php" style="text-decoration: none; color: rgba(19, 19, 197);">Home &nbsp;&nbsp;</a>
                <a href="membership.php" style="text-decoration: none; color: rgb(19, 19, 197) 43);">clubs &nbsp;&nbsp;</a>
                <a href="contactus.php" style="text-decoration: none; color: rgb(19, 19, 197));">contact-us</a>
            </td>
        </tr>
        </table>
    <form action="" method="POST" style="background-color: azure;">
        <h1 style="text-align: center;">REGISTER HERE</h1>
        <h3 style="text-align: center;">PLEASE  provide the following information accuratly</h3>
        <br><label for="reg" > Reg number:</label><br>
        <input type="number" name="number" id="rnbr" placeholder="reg..." required><br>
        <label for="fname" > First Name:</label><br>
        <input type="text" name="fname" id="fname" placeholder="fname..."><br>
        <label for="lname" > Last Name:</label><br>
        <input type="text" name="lname" id="lname" placeholder="familyname..."><br>
        <label for="campus">Campus:</label><br>
        <input type="text" name="campus" id="campus" placeholder="UR..."><br>
        <label for="tel" >Telephone:</label><br>
        <input type="number" name="tel" id="tel" placeholder="tel..."><br>
        <label for="club" >Choosen club:</label><br>
        <input type="text" name="club" id="club" placeholder="club..."><br>
        <label for="mail">Email(username):</label><br>
        <input type="email" name="email" id="username" placeholder="XXXXXXXXX@gmail.com..."><br>
        <label for="name">Create password:</label><br>
        <input type="password" name="password" id="password" placeholder="Password..."><br>
        <label for="name">Confirm the password:</label><br>
        <input type="password" name="passwordconf" id="passwordconf" placeholder="Passwordconf..."><br>
        <input type="submit" name="submit" value="submit" class="btn" style="background-color: rgb(139, 27, 27);" ><br><br>
    </form> 
    <?php
       include('Connection.php');

   

    if($_SERVER['REQUEST_METHOD']=="POST")
    {  $Regnumber=$_POST['number'];
        $FirstName=$_POST['fname'];
        $SecondName=$_POST['lname'];
        $Email=$_POST['email'];
        $campus=$_POST['campus'];
        $Tel=$_POST['tel'];
        $Club=$_POST['club'];
        $Password=$_POST['password'];
        $Cpassword=$_POST['passwordconf'];

    
    if ($Password != $Cpassword) {
        echo "Error: Password and confirm password do not match.";
       
    } else {
        
       
            
        

    $sql = "INSERT INTO students (regnbr, fname, lname, campus,	tel	, club, email, password, password_confirm) 
            VALUES ('$Regnumber', '$FirstName', '$SecondName', '$campus','$Tel','$Club','$Email', '$Password', '$Cpassword')"; 
                    $connect=mysqli_query($conn,$sql);
        if($connect)
        {
            echo "<h1>your data is well kept.</h1>";
            	
        }
        else {
        echo "Error:".$sql."<br>".$conn->error;
        
    }}}
    $conn->close();
    ?> 
</body>
</html>