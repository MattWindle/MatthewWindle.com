<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Matthew Windle is a junior front-end web development from Burnley who uses a mixture of HTML5, CSS3, JQuery and some PHP to create unique websites.">
  <meta name="keywords" content="Matthew Windle, web developer, Burnley, HTML5, CSS3, PHP, JavaScript">
  <meta name="author" content="Matthew Windle">  <title>Home | Matthew Windle</title>
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
          <h1 class="dark-title-block" >Matthew Windle</h1><br>
          <h2 class="dark-title-block">A junior front-end web developer living in Burnley who loves to code</h2>
        </div>
      </div>
  </header>
  <main id="skipnav" role="main" class="container">
    <section class="dark-section">
      <h2 class="light-title-block">My latest work</h2>
      <div class="article-wrapper" >

        <?php $port_xml = simplexml_load_file('portfolio.xml'); //loads the xml file
        for($x = count($port_xml)-3; $x < count($port_xml); $x++) {
          //counts the amount of posts
          echo'<article class="content-square" >';
          echo "<a href='" . $port_xml->post[$x]->link . "' title='Read my blog post - " . $port_xml->post[$x]->title . "' ><img src='". $port_xml->post[$x]->image ."' width='100%' ></a>";

          echo"<a href='" . $port_xml->post[$x]->link . "'>
              <h2>". $port_xml->post[$x]->title ."</h2></a>";
          echo substr($port_xml->post[$x]->desc, 0, 120);
          echo'<a href="' . $port_xml->post[$x]->link . ' ">
              <div class="btn"> ' . $port_xml->post[$x]->title . '</div></a>';
          echo"</article>";
        }
        ?>

      </div>
    </section>

  </main>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
