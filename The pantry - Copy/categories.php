<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta name="description" content="categories">
    <link rel="stylesheet" href="style.css">
    <title>Recipe Categories</title>
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
        <form action="category1.php" method="POST">
                    <h1>Recipe Categories</h1>
                    <div class="input-box">
                    <label for="recipeName"></label>
                    <input type="text" name="recipeName" placeholder="Enter the recipe name: ">
                     <div class="input-box">
                    <label for="recipeCategory"></label>
                    <input type="text" name="recipeCategory" placeholder="Enter the recipe category: ">
                    </div>
                    <div class="input-box">
                    <label for="recipeID"></label>
                    <input type="number" name="recipeID" placeholder="Enter the recipe ID: ">
                    </div>

                    <input class="submit" type="submit" value="Submit" name="submit">

            </form>
</div>
    </body>
</html>