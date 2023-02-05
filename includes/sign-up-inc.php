<?php
if (isset($_POST["submit"])) {
  $fname = $_POST["fname"];
  $sname = $_POST["sname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $passwordRepeat = $_POST["rptpassword"];

  require_once 'db.con.php';
  require_once 'functions.inc.php';

  if(emptyInputSignup($fname, $sname, $email, $password, $passwordRepeat)!== false){
    header("location: ../sign-up.php?error=emptyInput");
    exit();
  }

  if(invalidEmail($email)!== false){
    header("location: ../sign-up.php?error=invalidEmail");
    exit();
  }

  if(pwdMatch($password, $passwordRepeat) !== false){
    header("location: ../sign-up.php?error=passwordsdontmatch");
    exit();
  }

  if(emailExists($conn, $email)!== false){
    header("location: ../sign-up.php?error=emailalreadyexists");
    exit();
  }
    createUser($conn, $fname,$sname, $email, $password);

  }
  else {
    header("location: ../sign-up.php");
  }



?>
