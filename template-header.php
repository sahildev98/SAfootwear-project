<?php
session_start();
 ?>
<?php
$page =  array('index.php' => 'Home',
              'mens.php' => 'Men',
              'women_shoes.php' => 'Women',
              'boys.php' => 'Boys',
              'girls.php' => 'Girls',
              'login.php' => 'Login');

$currentPage = basename($_SERVER['REQUEST_URI']);


?>

 <html>
 <head>
   <link rel="stylesheet" href="template-header.css">
 </head>
   <header>
   <nav>
     <h1>SA Footwear</h1>
     <ul>
       <a href="#maincontent" class="skip-link">Skip to main content</a> 
         <?php foreach ($page as $filename => $pageTitle) {
           if ($filename == $currentPage) { ?>
             <?php echo $pageTitle ; ?>
            <?php } else { ?>
        <li><a href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a></li>
            <?php
            } //if
         } //foreach

            ?>
            <?php
            if(isset($_SESSION["usersID"])) {
            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
          } else{
            echo "<li><a href='login.php'>Login</a></li>";
          }
        ?>
     </ul>
   </nav>
 </header>
 </html>
