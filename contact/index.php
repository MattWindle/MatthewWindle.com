<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Got an idea for a website then get in contact and lets make it a reality. ">
  <meta name="keywords" content="Web Developer, Matthew Windle, Contact, Get it touch, Website, chat, web tech, MMU">
  <meta name="author" content="Matthew Windle">  <title>Contact | Matthew Windle</title>
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
    <section role="main" class="container">
        <div>
          <h1 class="dark-title-block" >Matthew Windle</h1><br>
          <h2 class="dark-title-block">Lets have a chat about web tech</h2>
        </div>
    </section>
  </header>
  <main id="skipnav" role="main" class="container two-col">

    <section class="dark-section col-50">
      <h2 class="light-title-block">Contact Me</h2>

      <?php
    require_once('class.phpmailer.php');
    if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $user_email = $_POST['email'];
    $query = $_POST['query'];

    $message = file_get_contents('email.html');
    $message = str_replace('{{name}}', $name, $message);
    $message = str_replace('{{user_email}}', $user_email, $message);
    $message = str_replace('{{query}}', $query, $message);

    $email = new PHPMailer();
    $email->CharSet = 'UTF-8';
    $email->IsHTML(true);
    $email->From      = $user_email;
    $email->FromName  = $name;
    $email->Subject   = 'Contact Form - '. $name;
    $email->Body      = $message;
    $email->AddAddress( 'info@matthewwindle.com' );
    if($email->send()){ ?>
    <script>
    window.location.replace("http://www.matthewwindle.com/thank-you.php");
    </script>
    <?php
    }
    else{
    }
    };
    ?>

        <form class="main-form" action="index.php" method="post" enctype="multipart/form-data">
          <p>Want to work with me ? Then start the talk today by filling in the form below and your ideas can be a reality</p>
          <label for="fullname" >Full Name</label>
          <input id="fullname" name='fullname' type="text" >
          <label for="email" >E-Mail</label>
          <input id="email" name='email' type="email" >
          <label for="query" >Your Message</label>
          <textarea id="query" name="query" ></textarea>
          <input type="submit" name="submit" value="send" >
        </form>
    </section>
    <section class="dark-section col-50">
      <?php include_once $path.'/includes/instagram.php'; ?>

      <h2 class="light-title-block">Lastest Blog Post</h2>
      <?php $xml = simplexml_load_file('../blog.xml'); //loads the xml file

      for ($x = count($xml)-1; $x < count($xml); $x++) {
        echo"<a href='" . $xml->post[$x]->link . "' title='Read my blog post - " . $xml->post[$x]->title . "' ><div class='blog-post-min'>";
        echo"<p>". $xml->post[$x]->title ."</p>";
        echo"</div></a>";

    }
      ?>
      <h2 class="light-title-block">Lastest project</h2>
      <?php $xml = simplexml_load_file('../portfolio.xml'); //loads the xml file

      for ($x = count($xml)-1; $x < count($xml); $x++) {
        echo"<a href='" . $xml->post[$x]->link . "' title='Check out my work -  " . $xml->post[$x]->title  . "'><div class='blog-post-min'>";
        echo"<p>". $xml->post[$x]->title ."</p>";
        echo"</div></a>";

    }
      ?>

    </section>

  </main>


  <?php include_once $path.'/includes/footer.php'; ?>

</body>
</html>
