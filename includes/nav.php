
<nav id="skiptonav" role="navigation">
<a href="/index.php" >
  <div class="logo_wrapper" >
      <div class="logo-light">M</div>
      <div class="logo-dark">W</div>
  </div>
</a>
<div id="navigation" class="nav-links">
  <a <?php $url = explode('/',$_SERVER['REQUEST_URI']); if ($url[1] === "index.php"){echo 'class="active"';}; ?> href="/index.php/" title="The homepage">Home</a>
  <a <?php $url = explode('/',$_SERVER['REQUEST_URI']); if ($url[1] === "about-me"){echo 'class="active"';}; ?> href="/about-me/" title="Find out more about me">About</a>
  <a <?php $url = explode('/',$_SERVER['REQUEST_URI']); if ($url[1] === "my-work"){echo 'class="active"';}; ?> href="/my-work/" title="See a collection of my work">Work</a>
  <a <?php $url = explode('/',$_SERVER['REQUEST_URI']); if ($url[1] === "blog"){echo 'class="active"';}; ?> href="/blog/" title="Read a blog post">Blog</a>
  <a <?php $url = explode('/',$_SERVER['REQUEST_URI']); if ($url[1] === "contact"){echo 'class="active"';}; ?> href="/contact/" title="Get in touch">Contact</a>
</div>
<div class="social-links">
  <a href="https://www.facebook.com/MattWindle89"><img src="/dist/images/facebook.png" width="30" height="30" alt="Facebook logo" title="Follow Matthew Windle on Facebook" ></a>
  <a href="https://twitter.com/matthewwindle26"><img src="/dist/images/twitter.png" width="30" height="30" alt="Twitter logo" title="Follow Matthew Windle on Twitter" ></a>
  <a href="https://www.instagram.com/mattwindle26/"><img src="/dist/images/instagram.png" width="30" height="30" alt="Instagram logo" title="Follow Matthew Windle on Instagram" ></a>
</div>
<div class="nav-trigger">
  <span></span>
  <span></span>
  <span></span>
</div>
</nav>
