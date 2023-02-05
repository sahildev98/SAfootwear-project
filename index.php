<?php
// header navigation added with the use of include function
include 'template-header.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<!-- Meta charset added to enable all chacters and symbols used in HTML-5 -->
  <meta charset="utf-8">
  <title> SA Footwear Homepage</title>
  <!-- meta viewport implemented to control layout on mobile browsers  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link JavaScript and CSS to this page -->
  <link rel="stylesheet" href="index.css">
  <script src="index.js"></script>
</head>
<body>
<!-- Section showing buttons to navigate to eitheir men, woman or kids secction  -->
<section>
  <h2>Browse our selection for SmartWear Footwear.
    Discover your new season arrivals.</h2>
      <button type="button" name="For Him"  title="men shoes" onclick="menButton()">For Him</button>
      <button type="button" name="For Her" title="women shoes" onclick="womanButton()">For Her</button>
      <button type="button" name="For Junior" title="junior shoes" onclick="boyButton()">For Junior Boys</button>
      <button type="button" name="For Junior" title="junior shoes" onclick="girlButton()">For Junior Girls</button>
</section>
<!-- main tag showing a shoe that is being advertised -->
<main id="maincontent">
  <figure>
    <a href="mens.php"><img src="img/db7_black_suede.jpg" alt="david beckham collection footwear" ></a>
    <button type="button" name="DB7" title="Click for DB7 Shoes" onclick="davidBeckButton()">DB7 Collection</button>
    <h2 class="banner-text">David Beckham black suede collection only £50.00</h2>
  </figure>
</main>

<!--- aside tag with external links -->
  <aside>
    <figure>
    <a href="mens.php"><img src="img/men_shoes/navy_derby_shoes.jpg" alt="navy suede shoes"></a>
    <figcaption>Navy suede only &pound;40</figcaption>
  </figure>

  <figure>
    <a href="women_shoes.php"><img src="img/woman_shoes/black_heels.jpg" alt="black heels"></a>
    <figcaption>Ladies love heels only &pound;40 </figcaption>
  </figure>

  <figure>
  <a href="boys.php"><img src="img/boys_shoes/boys_leather_shoes.jpg" alt="boys junior shoes"></a>
  <figcaption>Boys junior shoes &pound;15</figcaption>
  </figure>
</aside>

</body>
</html>

<?php
// footer added with the use of include function
include 'template-footer.php' ?>
