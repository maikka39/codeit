<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/head.php'; ?>
    <title>CodeIt - Start coding today!</title>

    <link rel="stylesheet" href="/css/about/main.css">
    <link rel="stylesheet" href="/css/about/contact-form.css">
  </head>
  <body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/include.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/nav.php'; ?>
    <div class="site-content">
      <div class="location">
        <div id="map"></div>
        <script>
          function initMap() {
            var location = {lat: 51.8826111, lng: 5.4273056}; // 51.8826111°, 005.4273056°
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 9.5,
              center: location
            });
            var marker = new google.maps.Marker({
              position: location,
              map: map
            });
          }
        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmsaVgYkLGfldPvB7lVqyMianF9MQ_8F4&callback=initMap">
        </script>
      </div>
      <h1>Get in touch with us</h1>
      <div class="table-container">
        <div class="about table-cell" id="about">
          Made by: Maik de Kruif;
        </div>
        <div class="contact table-cell" id="contact">
          <h2>Contactform</h2>
          <p>Feel free to contact us about a question.</p>
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/php/contactform.php'; ?>
          <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
            <span class="result-good"><?= $resultGood ?></span>
            <span class="result-bad"><?= $resultBad ?></span>
            <label>Name*</label>
            <input name="name" type="text" placeholder="Your name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
            <span class="error"><?= $errName ?></span>
            <label>Email*</label>
            <input name="email" type="email" placeholder="Your email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
            <span class="error"><?= $errEmail ?></span>
            <label>Subject*</label>
            <input name="subject" type="text" placeholder="Where is this message about?" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>">
            <span class="error"><?= $errSubject ?></span>
		        <label>Refferencenumber</label>
            <input name="ref_num" type="text" placeholder="Only fill in if you contacted us earlier" value="<?php if(isset($_POST['ref_num'])) echo $_POST['ref_num'];?>">
            <label>Message*</label>
            <textarea name="message" type="text" placeholder="Your message"><?php if(isset($_POST['message'])) echo $_POST['message'];?></textarea>
            <span class="error"><?= $errMessage ?></span>
            <input class="submitcontactform" id="submitcontactform" name="submitcontactform" type="submit" value="Submit">
      </form>
        </div>
      </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
  </body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/importJS.php'; ?>
</html>
