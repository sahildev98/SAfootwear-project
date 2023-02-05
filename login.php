<?php include 'template-header.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login or Sign Up</title>
    <link rel="stylesheet" href="login.css">
    <script src="sign-up.js"></script>
  </head>
  <body>
    <main id="maincontent">
      <h1>Login in </h1>
      <h2>Returning Customer</h2>
      <form action="includes/login.inc.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" autocomplete="current-password">
        <button type="submit" name="submit">Log in</button>
      </form>
      <?php
      if (isset($_GET["error"])){
        if($_GET["error"] == "emptyInput"){
          echo "<p>Fill in all fields</p>";
        }
        else if ($_GET["error"] == "wrongLogin"){
          echo "<p>Incorrect login information!</p>";
        }
      }
       ?>
    </main>
      <section>
        <h1>Register your account</h1>
        <h2>Create account to keep track of orders</h2>
        <button type="button" name="Register" title="Register page" onclick="registerBtn()">Register</button>
      </section>
  </body>
</html>
<?php include 'template-footer.php' ?>
