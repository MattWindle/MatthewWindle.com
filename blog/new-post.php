<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="A simple blog written by Matthew Windle about life in the web development industry and surround areas.">
  <meta name="keywords" content="blog,">
  <meta name="author" content="Matthew Windle">
  <title>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $xml = simplexml_load_file($path.'/blog.xml');
    echo $xml->post[0]->title;  ?> | Matthew Windle - Web Developer
              </title>
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
  <section class="grey-section top-of-page ">
    <div role="main" class="container">
      <div>
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
      <div>
        <div>
        </div>
      </div>
    </div>
  </section>
  <main  role="main" class="container ">
    <section class="dark-section">
      <h2 class="blog-sub">Sub Title</h2>
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $xml = simplexml_load_file($path.'/blog.xml');
      echo '<p class="blog-text">' . $xml->post[0]->content . "</p>";
      ?>
    </section>
  </main>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
