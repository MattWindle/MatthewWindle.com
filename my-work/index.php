<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Web projects completed by Matthew Windle through out his time at Manchester Metropolitan University.">
  <meta name="keywords" content="web developer, javascript, HTML5, web portfolio, web projects, matthew windle, manchester metropolitan university, MMU, Infomation Communications">
  <meta name="author" content="Matthew Windle">
  <title>My Work | Matthew Windle</title>
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
    <div class="container">
      <div>
        <div>
          <h1 class="dark-title-block" >Matthew Windle</h1><br>
          <h2 class="dark-title-block">Web projects that I have been involved in </h2>
        </div>
      </div>
      <div>
        <div>
        </div>
      </div>
    </div>
  </header>
  <main id="#skipnav" role="main" class="container">
   <section class="dark-section">
    <h2 class="light-title-block">My web projects</h2>
      <div class="article-wrapper" >

        <?php $xml = simplexml_load_file($path.'/portfolio.xml'); //loads the xml file
        for ($x = count($xml)-1; $x >=0; $x--) {
          echo'<article class="content-square" >';
          echo "<a href='" . $xml->post[$x]->link . "' title='Read my blog post - " . $xml->post[$x]->title . "' ><img src='". $xml->post[$x]->image ."' width='100%' ></a>";
          echo"<a href='" . $xml->post[$x]->link . "' ><h2>". $xml->post[$x]->title ."</h2></a>";
          echo substr($xml->post[$x]->desc, 0, 200);
          echo'<a href="' . $xml->post[$x]->link . ' "><div class="btn"> ' . $xml->post[$x]->title . '</div></a>';
          echo"</article>";
      }
        ?>
      </div>
    </section>

  </main>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
