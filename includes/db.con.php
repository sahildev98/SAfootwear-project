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
$conn = new PDO("mysql:host=$serverName; dbname= $dbName", "$dbUserame", "$dbPassword");
if ($$conn == true) {
  echo "database is working fine";
} else{
  echo"Failed to connect";
}
 ?>
