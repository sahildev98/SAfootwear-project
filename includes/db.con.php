<?php
// $serverName = "sql302.epizy.com";
// $dbUserame = "epiz_24779122";
// $dbPassword = "";
// $dbName = "epiz_24779122_SA_FootwearDB";

class Dbh{
private $serverName = "localhost";
private $dbUserame = "root";
private $dbPassword = "";
private $dbName = "SAFootwear_Db";

// db test conn 
protected function connect(){
  $conn = new PDO("mysql:host=$serverName; dbName= $dbName", "$dbUserame", "$dbPassword");
}

// catch errors in PHP
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($conn == true) {
  return null;
} else{
  echo"Failed to connect";
}

}
 ?>
