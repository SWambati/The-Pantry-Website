<?php
include("connection.php");
if(isset($_POST['submit'])){
    $recipeName = $_POST['recipeName'];
    $recipeCategory = $_POST['recipeCategory'];
    $Ingredients = $_POST['Ingredients'];
    $Steps = $_POST['Steps'];
   
}
$mysql = "INSERT INTO recipeentries VALUES('$recipeName', '$recipeCategory','$Ingredients','$Steps')";
if(mysqli_query($conn, $mysql)){
    echo "Record has been created";
    echo nl2br ("\n $recipeName, \n $recipeCategory,\n $Steps, \n $Ingredients");
}
else{
    echo "Error".mysqli_error($conn);
}
mysqli_close($conn);
?>