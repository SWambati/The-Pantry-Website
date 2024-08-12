<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
    $userID=$_POST['userID'];
    $username =$_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];

    $sql = "SELECT * from users where userID ='$userID' AND username = '$username' AND password = '$password' AND userType = '$userType'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count >0){
        if($row['userType'] == 'Administrator'){
            $_SESSION['admin_name'] =$row['username'];
            header("location:admin.php");

        }elseif($row['userType'] == 'Recipe Owner'){
            $_SESSION['recipe_owner'] =$row['username'];
            header("location:recipeOwner.php");

        }
        elseif($row['userType']== 'Subscriber'){
            $_SESSION['user'] = $row['username'];
            header("location: index.php");
        }

    }
    else{
        echo '<script>
              window.location.href = "login.php";
              alert("Invalid login. Try again")
              </script>';
             }
}


?>