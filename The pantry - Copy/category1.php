<?php 
include("connection.php");

if(isset($_POST['submit'])){
    $recipeName = $_POST['recipeName'];
    $recipeCategory= $_POST['recipeCategory'];
    $recipeID= $_POST['recipeID'];
}
$mysql = "INSERT INTO categories VALUES('$recipeName', '$recipeCategory', '$recipeID')";
if(mysqli_query($conn, $mysql)){
    echo "Record has been created";
    echo nl2br ("\n $recipeName, \n $recipeCategory, \n $recipeID");
}
else{
    echo "Error".mysqli_error($conn);
}
mysqli_close($conn);
?>