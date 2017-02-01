<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="The digital industry is on the rise, come and see why Matthew Windle wants to be part of it.">
  <meta name="keywords" content="web development, Matthew Windle, digital industry, developer, skills summit, tech nation, PHP, JavaScript">
  <meta name="author" content="Matthew Windle">
  <title>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $xml = simplexml_load_file($path.'/blog.xml');
    echo $xml->post[0]->title;  ?> | Matthew Windle
              </title>
  <link rel="stylesheet" type="text/css" href="/dist/css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/dist/images/favicon.png" />
</head>
<body class="blog-bg">
  <div class="skip-links-wrapper">
    <p>
      <a class="skip-link" href="#skipnav" title="skip to content">Skip to content</a>
      <a class="skip-link" href="#skiptonav" title="skip to navigation">Skip to navigation</a>
    </p>
  </div>

  <?php $path = $_SERVER['DOCUMENT_ROOT']; ?>
  <?php include_once $path.'/includes/nav.php'; ?>
  <header role="banner" class="grey-section top-of-page ">
    <div  class="container">
        <div>
          <h1 class="dark-title-block" >
            <?php
              $path = $_SERVER['DOCUMENT_ROOT'];
              $xml = simplexml_load_file($path.'/blog.xml');
              echo $xml->post[0]->title;
              ?>
          </h1><br>
        </div>
    </div>
  </header>
  <main id="skipnav" role="main" class="container">
    <section class="dark-section blog-post">
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $xml = simplexml_load_file($path.'/blog.xml');
      echo "<p class='blog-date'> Post Date: " . $xml->post[0]->date . "</p>";
      echo $xml->post[0]->content ;
      ?>
      <h4>Related links</h4>
      <div class="blog-footer">
        <div class="blog-button"><a href="/blog/building-my-portfolio.php">Building my portfolio</a></div>
      </div>
    </section>
  </main>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
