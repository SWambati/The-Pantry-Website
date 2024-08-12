<?php

global $conn;
include ("connection.php");
$sql = "SELECT * FROM recipeentries ORDER BY  recipeName";
$result = $conn -> query($sql);
$conn -> close();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta name="description" content="Recipe Details">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Recipe Details</title>
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
  <h2>Recipe Details</h2>
  <table class="userTable">
  <tr>

    <th>Recipe Name</th>
    <th>Recipe category </th>
    <th>Ingredients</th>
    <th>Preparation Steps</th>
    <th>Action</th>
  </tr>
  <?php
  $i = 0;
  while ($row = $result-> fetch_assoc())
  {
    ?>
  <tr>
    <td><?php echo $row['recipeName'];?></td>
    <td><?php echo $row['recipeCategory'];?></td>
    <td><?php echo $row['Ingredients'];?></td>
    <td><?php echo $row['Steps'];?></td>
    <td><a href="recipeEdit.php?id=<?php echo $row['recipeName'];?>">Edit</a></td>
  </tr>

  <?php
  $i++;
  }
  ?>

  </table>


</section>



</body>

</html>