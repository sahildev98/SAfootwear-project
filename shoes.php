<?php
include 'template-header.php';
require 'includes/db.con.php';

// if(isset($_GET['ID'])){
//   $id = mysqli_real_escape_string($conn, $_GET['ID']);


// $query = "SELECT * FROM products WHERE ID = ".$id;

// $result = mysqli_query($conn, $query);

// $row = mysqli_fetch_assoc($result);
// var_dump($row);
// mysqli_fetch_assoc($result);

// mysqli_close($conn);


// } else {
//   header("no result");
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shoes Page</title>
    <link rel="stylesheet" href="shoes.css">
  </head>
  <body>
    <h1>Shoes information</h1>
    <?php echo '<h1>'. $row['productName'].'</h1>'; ?>
    <?php echo'<h2>'. $row['price'].'</h2>'; ?>
    <?php echo '<img src="data:image/jpg;base64,'.base64_encode($row['image']).'"/>';?>
  </body>
</html>
