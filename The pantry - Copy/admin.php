<?php
include("connection.php");
session_start();
if(!isset( $_SESSION['admin_name'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta name="description" content="Admin">
    <link rel="stylesheet" href="style.css">
    <title>Admin Page</title>
    </head>
    <body class="page1" style=" min-height: 100vh;width: 100%;background-image: url(images/background1.jpeg);background-image: linear-gradient(rgb(244, 226, 203));background-color: rgb(244, 226, 203);background-position: center;background-size: cover;position: relative;">
        <header style=" position: top;top: 0;margin: auto;padding: 10px;cursor: pointer;">
            <nav class="navigation">
                <div class="logo"><a href="index.html" target="_blank"></a>

                    <img src="images/logo.png"><h2 id="pantry">The Pantry</h2>
                        
                </div>
            </nav>
        </header>
        <main class="admin" style=" position: top;top: 0;margin: auto;padding: 10px;cursor: pointer;">
        <h2 style=" color: brown;text-align: center;font-size: 50px;">Welcome <span><?php echo  $_SESSION['admin_name']?></span></h2>
        <a href="userDisplay.php" class="displaybtn" target="_blank" style="text-align: right;display:inline-block;text-decoration: none;color: rgb(153, 96, 25);border: 2px solid rgb(239, 221, 198);padding: 20px 30px;font-size: 25px;background: transparent;position: relative;border-radius: 20px;cursor: pointer;top: 80%;margin-right: 450px;background-color: rgb(239, 221, 198);margin-top: 50px;margin: 20px 10px;font-weight: bolder; align-items: centre;">View User Details</a>
        <a href="logout.php" class="logout" target="_blank" style="text-align: left;display:inline-block;text-decoration: none;color: rgb(153, 96, 26);border: 2px solid rgb(239, 221, 198);padding: 20px 30px;font-size: 25px;background: transparent;position: relative;border-radius: 20px;cursor: pointer;top: 70%;bottom: 30;margin-left: 300px;background-color: rgb(239, 221, 198);margin-top: -60px;margin: 20px 10px;font-weight: bolder; align-items:centre">Logout</a>
        </main>

    </body>
    

</html>