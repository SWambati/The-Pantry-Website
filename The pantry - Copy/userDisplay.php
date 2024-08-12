<?php

global $conn;
include ("connection.php");
$sql = "select * from users ORDER BY  userID";
$result = $conn -> query($sql);
$conn -> close();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta name="description" content="User Detaiks">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Details</title>
</head>
<body class="display">
 <header>
        <nav class="navigation">
            <div class="logo"><a href="index.html" target="_blank"></a>
                <img src="images/logo.png"><h2 id="pantry">The Pantry</h2>      
                </div>
            </nav>
        </header>
<section>
  <h2>User Details</h2>
  <table class="userTable">
  <tr>
    <th>User ID </th>
    <th>Username </th>
    <th>Email</th>
    <th>User Type </th>
  </tr>
  <?php
  while ($row = $result-> fetch_assoc())
  {
    ?>
  <tr>
    <td><?php echo $row['userID'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['userType'];?></td>
    
  <?php
  }
  ?>

  </table>

</section>



</body>

</html>