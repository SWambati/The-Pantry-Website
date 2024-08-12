<?php
   include("Connection.php");
   
   
    $recipeName = $_POST['recipeName'];
    $recipeCategory = $_POST['recipeCategory'];
    $Ingredients = $_POST['Ingredients'];
    $Steps = $_POST['Steps'];
    
        
        $sql = "UPDATE recipeentries SET recipeCategory = '$recipeCategory', Ingredients = '$Ingredients', Steps = '$Steps' WHERE recipeName = '$recipeName'";
        $result =$conn->query($sql);
        if($result){
            echo "Record was succeffully modified";
            echo nl2br (" \n $recipeName,\n $recipeCategory, \n $Ingredients, \n $Steps");
            
        }
        else{
            echo "Error".mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
        

    

    

?>
