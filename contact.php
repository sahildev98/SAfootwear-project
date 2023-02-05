<?php
include 'template-header.php';
 ?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css">
    <script src="contact.js"></script>
</head>
<body>
    <main id="maincontent">
        <h2>Contact Information</h2>
        <blockquote> Email: SAFootwear&commat;limited.com</blockquote>
        <blockquote> Email:SAFootwearCustomerService&commat;limited.com</blockquote>
        <blockquote> Phone: &phone;44 161 348 0128</blockquote>
    </main>

  <section id="section-form">
    <h3>Customer Service Form</h3>
    <form method="post" id="contactForm">
      <label for="fname">First name:</label>
      <input type="text" id="fname" name="firstname">
      <label for="lname">Last name:</label>
      <input type="text" id="lname" name="firstname">
      <label for="Email">Email:</label>
      <input type="email" id="Email" name="email">
      <label>Message:
      <textarea name="Message"></textarea>
      </label>
      <input class="submit-link" type="submit" value="Submit" onclick="pushForm()">
    </form>
  </section>
</body>
</html>
<?php
include 'template-footer.php'; ?>
