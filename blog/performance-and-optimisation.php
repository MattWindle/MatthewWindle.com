<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Performance and optimisation on websites is key, see what tools can be used to help your website.">
  <meta name="keywords" content="web development, Matthew Windle, Performance and optimisation, website optimisation, SEO, website performance, website speedtest">
  <meta name="author" content="Matthew Windle">
  <title>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $xml = simplexml_load_file($path.'/blog.xml');
    echo $xml->post[2]->title;  ?> | Matthew Windle - Web Developer
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
              echo $xml->post[2]->title;
              ?>
          </h1><br>
        </div>
    </div>
  </header>
  <main id="skipnav" role="main" class="container post-page">
    <section class="dark-section blog-post">
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $xml = simplexml_load_file($path.'/blog.xml');
      echo "<p class='blog-date'> Post Date: " . $xml->post[2]->date . "</p>";
      echo $xml->post[2]->content;
      ?>
      <h4>Related links</h4>
      <div class="blog-footer">
        <div class="blog-button"><a href="/blog/building-my-portfolio.php">Building my portfolio</a></div>
      </div>
    </section>
    <aside>
      <h3>Archive</h3>
      <h4>March 2016</h4>
      <ul>
      <a href="/blog/to-git-or-not-to-git.php" ><li>To Git or not to Git</li></a>
      <a href="/blog/the-futures-bright-the-futures-grids.php" ><li>The futures bright, the futures Grids</li></a>
      <h4>February 2016</h4>
      <ul>
      <a href="/blog/different-isnt-always-better.php" ><li>Different isn't always better</li></a>
      <h4>October 2016</h4>
      <ul>
      <a href="/blog/performance-and-optimisation.php" ><li>Performance and Optimisation</li></a>
      <a href="/blog/the-industry.php" ><li>The Industry</li></a>
      <a href="/blog/" ><li>Building my Portfolio</li></a>
    </aside>
  </main>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
