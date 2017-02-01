<a href="#navigation"><div class="back-to-top" >
  <img src="/dist/images/icons/up-arrow.svg" alt="back to top up arrow" title="back to top up arrow" >
</div></a>

<footer role="contentinfo" >
  <div class="container" >
    <section>
      <div class="footer-flex-container" >
        <div class="footer-content-wrapper" >
          <h3>Lastest Blog Posts</h3>
          <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $xml = simplexml_load_file($path.'/blog.xml');
            for($x = count($xml)-3; $x < count($xml); $x++) {
              echo '<div class="individual-post" >';
              echo "<div class='blog-post-date'><p>" . substr($xml->post[$x]->date, 0, 4) . "<br>" . substr($xml->post[$x]->date, 5, 3) ."</p></div>";
              echo"<a href='" . $xml->post[$x]->link . "' >". $xml->post[$x]->title ."</a>";
              echo "</div>";
            }
            ?>
        </div>
        <div class="footer-content-wrapper" >
          <h3>Lastest Tweet<img src="/dist/images/twitter-light.png" width="30" height="30" alt="Twitter logo" title="Twitter Logo" >
</h3>
          <div id="twitter-widget"></div>
        </div>
        <div class="footer-content-wrapper" >
          <h3>Quick Links</h3>
          <a href="/sitemap.php" title="Find all the websites main links">Site Map</a>
          <a href="/contact" title="Contact me!">Contact</a>
          <a href="/blog" title="Read one of my blog posts" >Blog</a>
          <a href="http://validator.w3.org/check?uri=referer" title="Run a test for HTML Validation">Validation</a>
          <a href="/docs/unminified-css.css" title="View my SCSS in vanilla CSS" >Beautified CSS</a>

        </div>
      </div>

    </section>
  </div>
</footer>

<!-- scripts -->

<script src="/dist/js/main.js" ></script>
<!-- <script src="/dist/js/twitterFetcher_min.js" ></script>
<script src="/dist/js/twitter-feed.js" ></script> -->


<!-- GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86327044-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- GOOGLE ANALYTICS -->

<!-- Instagram Feed -->

<script type="text/javascript">

var instacount = 8;

if($(window).width() < 767)
{
   instacount = 4;
}


var feed = new Instafeed({
  get: 'user',
  userId:4563403,
  clientId:'8482c91b00d645e18ad4ba4677c574e4',
  accessToken:'4563403.1677ed0.4a5b99b6d8794499bc2487fc319d6839',
  template: '<a href="{{link}}" target="_blank"><div class="insta-img"><img src="{{image}}" alt="{{caption}}" title="{{caption}}"/><div class="insta-overlay" ><img src="/dist/images/icons/likes.svg" alt="heart icon" ><p>{{likes}}</p></div></div></a> ',
  target:'instafeed',
  limit: instacount,
  resolution:'standard_resolution',
  sortBy:'most-recent',
});
feed.run();
</script>
<!-- Instagram Feed -->
