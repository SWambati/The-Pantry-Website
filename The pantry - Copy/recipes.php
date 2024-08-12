<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta name="description" content="Recipe registration">
    <link rel="stylesheet" href="style.css">
    <title>Recipe Registration</title>
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
            <form action="recipe1.php" method="POST">
                        <h1>Recipe Registration</h1>
                        <div class="input-box">
                        <label for="recipeName"></label>
                        <input type="text" name="recipeName" placeholder="Enter the recipe name: ">
                         </div>
                         <div class="input-box">
                        <label for="recipeCategory"></label>
                        <input type="text" name="recipeCategory" placeholder="Enter recipe category: ">
                        </div>
                        <div class="input-box">
                        <label for="ingredients"></label>
                        <input type="text" name="Ingredients" placeholder="Enter the ingredients: ">
                        </div>
                        <div class="input-box">
                        <label for="ingredients"></label>
                        <input type="text" name="Steps" placeholder="Enter the steps for preparation: ">
                        </div>

                        <input class="submit" type="submit" value="Submit" name="submit">
    
                </form>
    </div>
        </body>
    </html>