<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Matthew Windle is a junior front-end web development who uses a mixture of HTML5, CSS3, JQuery and some PHP to create unique websites.">
  <meta name="keywords" content="">
  <meta name="author" content="Matthew Windle">  <title>Sitemap | Matthew Windle - Web Developer</title>
  <link rel="stylesheet" type="text/css" href="/dist/css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/dist/images/favicon.png" />

</head>
<body>
  <div class="skip-links-wrapper">
    <p>
      <a class="skip-link" href="#skipnav">Skip to content</a>
      <a class="skip-link" href="#skiptonav">Skip to navigation</a>
    </p>
  </div>


  <?php $path = $_SERVER['DOCUMENT_ROOT']; ?>
  <?php include_once $path.'/includes/nav.php'; ?>
  <header role="banner" class="grey-section top-of-page ">
    <section class="container">
        <div>
          <h1 class="dark-title-block" >Matthew Windle</h1><br>
          <h2 class="dark-title-block">A place for all the cool links.</h2>
        </div>
    </section>
  </header>
  <main id="skipnav" role="main" class="container">
    <section class="dark-section sitemap">
     <h2 class="light-title-block">Sitemap</h2>
     <p>You have reached the sitemap - these are all the main links throughout the website, so what are you waiting for? Get clicking!</p>
     <ul>
       <li><a href="/index.php">Home</a></li>
       <li><a href="/about">About</a></li>
       <li><a href="/my-work">Work</a>
          <ul>
            <?php $xml = simplexml_load_file($path . '/portfolio.xml'); //loads the xml file

            for ($x = count($xml)-1; $x >=0; $x--) {
              echo "<li>";
              echo'<a href="' . $xml->post[$x]->link . ' ">';
              echo $xml->post[$x]->title;
              echo "</a></li>";

            }
            ?>
          </ul>
       </li>
       <li><a href="/blog">Blog</a>
         <ul>
           <?php $xml = simplexml_load_file($path . '/blog.xml'); //loads the xml file


           for ($x = count($xml)-1; $x >=0; $x--) {
             echo "<li>";
             echo'<a href="' . $xml->post[$x]->link . ' ">';
             echo $xml->post[$x]->title;
             echo "</a></li>";

           }
           ?>
         </ul>
      </li>
       <li><a href="">Contact</a></li>
     </ul>

  </section>
</main>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
