<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Find out more about the web developer Matthew Windle">
  <meta name="keywords" content="Web Developer, Matthew Windle, About Me, Burnley, HTML5, CSS3, Digital Agency, MMU, Manchester">
  <meta name="author" content="Matthew Windle">
  <title>About | Matthew Windle - Web Developer</title>
  <link rel="stylesheet" type="text/css" href="/dist/css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/dist/images/favicon.png" />

</head>
<body>
  <div class="skip-links-wrapper">
    <p>
      <a class="skip-link" href="#skipnav" title="skip to content" >Skip to content</a>
      <a class="skip-link" href="#skiptonav" title="skip to navigation" >Skip to navigation</a>
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
  <main id="#skipnav" role="main" class="container two-col">

    <section class="dark-section col-50">
      <h2 class="light-title-block">All about me</h2>
      <p>First things first, who am I? you might ask. I am Matthew Windle a 27 year old front-end web developer with a passion for all things techie. </p>
      <p> It all started around 4 years ago when I started to get a real interest for the web and how it worked. So I took to YouTube to see what learning materials I could find. After a few weeks I was hooked on watching people design and code websites and it soon became aparent this is something I wanted to do.</p>

      <p> The first thing I did was sign up for some free web hosting and installed a copy of wordpress with a template. It was from here I started to tinker with the code and make changes in the CSS and HTML to make things look how I wanted them.  </p>
      <p>From this I signed up to a 12 week college course to teach me the fundamentals of building a basic website from scratch. For me, this is where my journey began as I could start to structure websites in the way I wanted them not the way a template had set out for me.</p>

      <p>Nearing the end of the course I had many sessions with career officers who put me on the path to applying for an access course which would lead on to university. With all that said it pretty much brings us to now, where I am in my third year at Manchester Metropolitan University and working as a part-time front-end web developer for a digital agency in Manchester.</p>

      <p>View my Curriculum Vitae below</p>
      <div class="cv-wrapper" >
        <div class="cv-btn" ><a href="/docs/Matthew-Windle-CV.pdf" title="View Matthew Windles' CV (pdf 56kb)">View CV (pdf 56kb)</a></div>
        <div class="cv-btn" ><a href="/docs/Matthew-Windle-CV.docx" title="Download Matthew Windles' CV (docx 21kb)" >Download CV (docx 21kb)</a></div>
      </div>
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
