<?php
function emptyInputSignup($fname, $sname, $email, $password, $passwordRepeat){
  $result;
  if (empty($fname) || empty($sname)  || empty($email) || empty($password) || empty($passwordRepeat)) {
    $result = true;
  } else{
    $result = false;
  }
  return $result;
}
  function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
    } else {
      $result =  false;
    }
    return $result;
  }

  function pwdMatch($password, $passwordRepeat){
    $result;
    if($password !== $passwordRepeat){
      $result = true;
    }
    else{
      $result = false;
    }
    return $result;
  }

  function emailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../sign-up.php?error=stmtfailed");
      exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

  }

  function createUser($conn, $fname,$sname, $email, $password){
    $sql = "INSERT INTO users(forename, surname, email, password) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../sign-up.php?error=stmtfailed");
      exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $fname, $sname, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../sign-up.php?error=none");
    exit();
  }

  function emptyInputLogin($email, $password){
    $result;
    if (empty($email) || empty($password)) {
      $result = true;
    } else{
      $result = false;
    }
    return $result;
  }

  function loginUser($conn, $email, $password) {
    $emailExists = emailExists($conn, $email);

    if ($emailExists ===  false){
      header("location: ../login.php?error=wrongLogin");
      exit();
    }
    $hashedPwd = $emailExists["usersPwd"];
    $CheckPassword = password_verify($password, $hashedPwd);

    if ($CheckPassword === false){
      header("location: ../login.php?error=wrongLogin");
      exit();
    }
    else if ($CheckPassword === true) {
      session_start();
      $_SESSION["usersID"] = $emailExists["usersID"];
      $_SESSION["fname"] = $emailExists["fname"];
      header("location: ../index.php");
      exit();
    }
  }


 ?>
