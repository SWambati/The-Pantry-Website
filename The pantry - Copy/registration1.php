<?php
include("connection.php");
if(isset($_POST['submit'])){
    $userID = $_POST['userID'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $userType = $_POST['userType'];
}
$mysql = "INSERT INTO users VALUES('$userID','$username', '$email','$password', '$userType')";
if(mysqli_query($conn, $mysql)){
    echo "Record has been created";
    echo nl2br ("\n$userID,\n $username, \n $email, \n $password, \n $userType");
}
else{
    echo "Error".mysqli_error($conn);
}
mysqli_close($conn);

?>