<?php
include("connection.php");
session_start();
if(count($_POST)>0){
   
    $recipeName = $_GET['recipeName'];
    $recipeCategory = $_GET['recipeCategory'];
    $Ingredients = $_GET['Ingredients'];
    $Steps = $_GET['Steps'];
    mysqli_query($conn, "UPDATE recipeentries SET recipeCategory ='$recipeCategory', Ingredients ='$Ingredients', Steps ='$Steps' WHERE recipeName ='$recipeName'");
    $message = "<p> Recipe entry has been succefully edited </p>";
}
$result =  mysqli_query($conn, "SELECT * FROM recipeentries ORDER BY recipeName");
$row = mysqli_fetch_array($result);
   
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta name="description" content="Recipe edit">
    <link rel="stylesheet" href="style.css">
    <title>Recipe Entry Edits</title>
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
        
            <form name="edits.php" action="edits.php" method="POST">
                        <h1>Edit Recipe Details</h1>
                         <div class="input-box">
                        <label for="recipeName"></label>
                        <input type="text" name="recipeName" placeholder="Enter recipe name: " value="<?php $recipeName?>">
                        </div>
                         <div class="input-box">
                        <label for="recipeCategory"></label>
                        <input type="text" name="recipeCategory" placeholder="Enter recipe category:" value="<?php $recipeCategory?>">
                        </div>
                        <div class="input-box">
                        <label for="ingredients"></label>
                        <input type="text" name="Ingredients" placeholder="Enter the ingredients: " value="<?php $Ingredients?>">
                        </div>
                        <div class="input-box">
                        <label for="steps"></label>
                        <input type="text" name="Steps" placeholder="Enter the steps for preparation: " value="<?php $Steps?>">
                        </div>
                        <input class="submit" type="submit" value="Update" name="update">
    
                </form>
                
    </div>
        </body>
    </html>
