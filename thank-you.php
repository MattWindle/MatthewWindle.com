<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Thank you page for when you send a message at matthewwindle.com">
  <meta name="keywords" content="web developer, Matthew Windle, Thank you, Manchester Metropolitan University, HTML5, PHP, JavaScript">
  <meta name="author" content="Matthew Windle">  <title>Thank You | Matthew Windle - Web Developer</title>
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
          <h1 class="dark-title-block" >Thank You</h1><br>
          <h2 class="dark-title-block">For getting in touch</h2>
        </div>
      </div>
      <div>
        <div>
        </div>
      </div>
    </div>
  </header>
  <main id="skipnav" role="main" class="container">
    <div class="dark-section">
      <h3>Thank you for getting in touch with me, I will try and get back to you with 3 to 5 working days.</h3>
      <p>Have you connected with me on social media ? I have <a href="" >Facebook</a>, <a href="" >Twitter</a>  and <a href="" >Instagram</a> </p>

      <h2 class="light-title-block">My latest work</h2>
      <div class="article-wrapper" >

        <?php $port_xml = simplexml_load_file('portfolio.xml'); //loads the xml file

        for($x = count($port_xml)-3; $x < count($port_xml); $x++) {

          echo'<article class="content-square" >';
          echo"<a href='" . $port_xml->post[$x]->link . "'><h2>". $port_xml->post[$x]->title ."</h2></a>";
          echo substr($port_xml->post[$x]->desc, 0, 120);
          echo'<a href="' . $port_xml->post[$x]->link . ' "><div class="btn"> ' . $port_xml->post[$x]->title . '</div></a>';
          echo"</article>";

      }
        ?>
      </div>
    </div>

  </main>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
