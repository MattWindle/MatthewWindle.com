<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="404 Page not found - Matthew Windle.com">
  <meta name="keywords" content="web developer, 404, matthew windle">
  <meta name="author" content="Matthew Windle">
  <title>404 Page not found | MatthewWindle.com</title>
  <link rel="stylesheet" type="text/css" href="/dist/css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/dist/images/favicon.png" />
</head>
<body>


  <?php $path = $_SERVER['DOCUMENT_ROOT']; ?>
  <?php include_once $path.'/includes/nav.php'; ?>
  <section class="grey-section top-of-page ">
    <div class="container">
      <div>
        <div>
          <h1 class="dark-title-block" >404</h1><br>
          <h2 class="dark-title-block">Page not found.</h2>
        </div>
      </div>
      <div>
        <div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="dark-section">
      <p>Looks like our code monkeys have pressed the wrong buttons again as the page you are looking for can not be found.</p>
      <p>You can look for the link in the <a href="/sitemap.php" title="websites sitemap" >Sitemap</a> or return <a href="/index.php" >home</a></p>
      <p>
    </div>

  </div>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
