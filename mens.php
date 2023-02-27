<?php include 'template-header.php';

require 'includes/db.con.php';

// $query = 'SELECT * FROM products';

// $result = mysqli_query($conn, $query);

// $row = mysqli_fetch_assoc($result);
// // var_dump($row);
// mysqli_free_result($result);

// mysqli_close($conn);

// try {
  $query = ("SELECT * FROM PRODUCTS WHERE id ?");
  $stmt = $conn->prepare($query);
  $stmt->execute(['id' => $id]);
  $data = $query->fetch();
// } catch(PDOException $e){
//   echo $e->getMessage();
// }
?>
<html>
  <head lang="en-GB" dir="ltr">
    <meta charset="utf-8">
    <title>Men's Shoes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
  </head>
<body>
<!---section content-->
  <section>
    <h2>men's shoes</h2>
  </section>
  <!--- Shoes -->
  <main id="maincontent">

    <figure>
      <a href="shoes.php?shoes_ID=<?php echo $data['id']?>"><img src="img/men_shoes/brown_suede_shoes.jpg" alt="brown suede shoes"></a>
      <blockquote><b>&pound;40.00</b></blockquote>
      <figcaption>Brown Suede Shoes</figcaption>
    </figure>

    <figure>
      <img src="img/men_shoes/navy_derby_shoes.jpg" alt="navy derby shoes"></a>
      <blockquote><b>&pound;40.00</b></blockquote>
      <figcaption>Navy Suede Shoes</figcaption>
    </figure>

    <figure>
      <img src="img/men_shoes/black_suede_shoes.jpg" alt="black suede shoes"></a>
      <blockquote><b>&pound;50.00</b></blockquote>
      <figcaption>David Beckham Black Suede Shoes</figcaption>
    </figure>


    <figure>
      <img src="img/men_shoes/black_leather_shoes.jpg" alt="black leather shoes"></a>
      <blockquote><b>&pound;30.00</b></blockquote>
      <figcaption>Black Leather derby shoes</figcaption>
    </figure>

    <figure>
      <img src="img/men_shoes/tan_leather_shoes.jpg" alt="tan leather shoes"></a>
      <blockquote><b>&pound;25.00</b></blockquote>
      <figcaption>Tan leather shoes</figcaption>
    </figure>

    <figure>
      <img src="img/men_shoes/black_stich_leather_shoes.jpg" alt="black stich look shoes"></a>
      <blockquote><b>&pound;32.00</b></blockquote>
      <figcaption>Black Stitch Look Shoes</figcaption>
    </figure>

    <figure>
      <img src="img/men_shoes/burgundy_shoes.jpg" alt="burgundy shoes"></a>
      <blockquote><b>£45.00</b></blockquote>
      <figcaption>Burgundy Shoes</figcaption>
    </figure>


    <figure>
      <img src="img/men_shoes/black_strap_shoes.jpg" alt="black strap leather shoes"></a>
      <blockquote><b>£50.00</b></blockquote>
      <figcaption>Black strap leather shoes</figcaption>
    </figure>

    <figure>
      <img src="img/men_shoes/brown_stitch_shoes.jpg" alt="brown stich shoes"></a>
      <blockquote><b>£50.00</b></blockquote>
      <figcaption>Brown stitch shoes</figcaption>
    </figure>



  </main>



</body>
<html>
<?php include 'template-footer.php' ?>
