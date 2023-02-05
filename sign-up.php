<?php include 'template-header.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="sign-up.css">
  </head>
  <body>
    <main id="maincontent">
      <h1>sign up </h1>
        <h2>enter your details</h2>
          <form action="includes/sign-up-inc.php" method="post">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" autocomplete="on">
            <label for="sname">Second Name:</label>
            <input type="text" name="sname" autocomplete="on">
            <label for="email">Email:</label>
            <input type="email" name="email" autocomplete="on">
            <p>Example john100@Example.com</p>
            <label for="password">Password:</label>
            <input type="password" name="password">
            <label for="password">Confirm Password:</label>
            <input type="password" name="rptpassword">
            <button type="submit" name="submit">Sign Up</button>
          </form>
    </main>
    <?php
    if (isset($_GET["error"])){
      if($_GET["error"] == "emptyInput"){
        echo "<p>Fill in all fields</p>";
      }
      else if ($_GET["error"] == "invalidEmail"){
        echo "<p>Choose an appropriate email</p>";
      }
      elseif ($_GET["error"] == "passwordsdontmatch"){
        echo "<p>Passwords do not match!</p>";
      }
      elseif ($_GET["error"] == "emailalreadyexists"){
        echo "<p>Email already taken</p>";
      }
      else if($_GET["error"] == "none"){
        echo "<p>You have signed up</p>";
      }
    }
     ?>
  </body>
</html>
<?php include 'template-footer.php' ?>
