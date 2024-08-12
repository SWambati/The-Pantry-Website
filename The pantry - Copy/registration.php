<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta name="description" content="registration">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration</title>
    </head>
    <body class="login">
        <header>
            <nav class="navigation">
                <div class="logo"><a href="index.html" target="_blank"></a>

                    <img src="images/logo.png"><h2 id="pantry">The Pantry</h2>
                        
                </div>
            </nav>
        </header>
        <div class="login1">
        <form action="registration1.php" method="POST">
                    <h1> Registration</h1>
                    <div class="input-box">
                    <label for="userID"></label>
                    <input type="text" name="userID" placeholder="Enter user ID: ">
                    <i class="fa fa-user"></i>
                    <div class="input-box">
                    <label for="username"></label>
                    <input type="text" name="username" placeholder="Enter your username: ">
                    <i class="fa fa-user"></i>
                     </div>
                     <div class="input-box">
                    <label for="email"></label>
                    <input type="email" name="email" placeholder="Enter your email address: ">
                    <i class="fa fa-envelope"></i>
                    </div>
                    <div class="input-box">
                    <label for="pass"></label>
                    <input type="password" name="pass" placeholder="Enter your password: ">
                    <i class="fa fa-lock"></i>
                    </div>
                    <div class="input-box">
                    <label for="userType"></label>
                    <input type="text" name="userType" placeholder="Enter your user category: ">
                    <i class="fa fa-user"></i>
                     </div>
                    <input class="submit" type="submit" value="Submit" name="submit">

            </form>
</div>
    </body>
</html>