<?php
// $serverName = "sql302.epizy.com";
// $dbUserame = "epiz_24779122";
// $dbPassword = "";
// $dbName = "epiz_24779122_SA_FootwearDB";

$serverName = "localhost";
$dbUserame = "root";
$dbPassword = "";
$dbName = "SAFootwear_Db";
// db test conn 
$conn = mysqli_connect($serverName, $dbUserame, $dbPassword, $dbName);
if (mysqli_connect_errno($conn)) {
  echo "Failed to connect";
}
 ?>
