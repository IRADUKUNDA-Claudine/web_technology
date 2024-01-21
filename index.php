<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            padding: 0;
            margin: 0;
            background-image: url('images/bgphoto.png');
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

        a:link {
            color: blue;
        }

        a:visited {
            color: blueviolet;
        }

        a:hover {
            color: brown;
        }

        a:active {
            color: rgb(34, 1, 64);
        }
    </style>
</head>

<body>
    <table border="0" style="height: 0%; width: 100%; padding:50px;">
        <tr>
            <td style="color: beige"><img src="images\LOGO_edited.jpg" style="height:5%; width:5%;"><b>&nbsp;&nbsp;SCAC</b>
            </td>
            <td style="text-align: right;">
                <a href="index.php" style="text-decoration: none; color: rgba(255, 254, 254, 0.847);">Home
                    &nbsp;&nbsp;</a>
                <a href="membership.php" style="text-decoration: none; color: bisque;">clubs &nbsp;&nbsp;</a>
                <a href="contactus.php" style="text-decoration: none; color: bisque;">contact-us</a>
                <a href="login.php" style="text-decoration: none; color: bisque;">login</a>
            </td>
        </tr>
    </table>

    <pre style="font-family: 'Times New Roman', Times, serif; font-size: x-large; color: antiquewhite;">
    <b>STUDENTS CLUBS AND ASSOCIATIONS CONNECTION</b>

    There several clubs and associations in
    different campuses of university of RWANDA.
    These are formal organized groups of students
    who wants to achieve a common goals.

 </pre><br>
    <a href="membership.php"><button onclick="alert(start)"
            style="background-color:skyblue;font-size: 100%;">Start Now</button></a><br>
</body>

</php>