<div class="scrolltotop">
  <a href="#top"><img src="/img/scrolltop.png" width="63px" height="63px" alt="Scroll to top" title="Scroll to top"></a>
</div>

<?php
if(!isset($_COOKIE["acceptCookies"])) {
     echo('
     <div class="cookie-bar">
     <p>This website uses cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/">Learn more</a></p>
     <div class="cookie-button">
     <button type="button" name="cookiebarbutton" onclick="acceptCookies();">Got it!</button>
     </div>
     </div>
     ');
}
?>
