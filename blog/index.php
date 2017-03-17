<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Blog posts written by Matthew Windle from his life working in the digital industry">
  <meta name="keywords" content="Web Developer, Blog, Matthew Windle, Digital Agency, portfolio, performance">
  <meta name="author" content="Matthew Windle">  <title>Blog | Matthew Windle - Web Developer</title>
  <link rel="stylesheet" type="text/css" href="/dist/css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/dist/images/favicon.png" />
</head>
<body>
  <div class="skip-links-wrapper">
    <p>
      <a class="skip-link" href="#skipnav" title="skip to content">Skip to content</a>
      <a class="skip-link" href="#skiptonav" title="skip to navigation">Skip to navigation</a>
    </p>
  </div>

  <?php $path = $_SERVER['DOCUMENT_ROOT']; ?>
  <?php include_once $path.'/includes/nav.php'; ?>
  <header role="banner" class="grey-section top-of-page ">
    <div class="container">
        <div>
          <h1 class="dark-title-block" >Matthew Windle</h1><br>
          <h2 class="dark-title-block">A simple blog about my life in the web industry</h2>
        </div>
    </div>
  </header>
  <main id="skipnav" role="main" class="container">
   <section class="dark-section">
    <h2 class="light-title-block">Latest blog posts</h2>
      <div class="article-wrapper" >


        <?php $xml = simplexml_load_file('../blog.xml'); //loads the xml file

        for ($x = count($xml)-1; $x >=0; $x--) {
          echo'<article class="content-square" >';
          echo "<a href='" . $xml->post[$x]->link . "' title='Read my blog post - " . $xml->post[$x]->title . "' ><img src='". $xml->post[$x]->image ."' width='100%' ></a>";
          echo"<a href='" . $xml->post[$x]->link . "' title='Read my blog post - " . $xml->post[$x]->title . "' ><h2>". $xml->post[$x]->title ."</h2></a>";
          echo $xml->post[$x]->caption;
          echo"<a href='" . $xml->post[$x]->link . "' title='Read my blog post - " . $xml->post[$x]->title . "' ><div class='btn'>". $xml->post[$x]->title ."</div></a>";
          echo"</article>";

      }
        ?>
      </div>
    </section>

  </main>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
