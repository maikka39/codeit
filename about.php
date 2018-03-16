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
        <div class="table-cell">
          <div class="about aboutsection" id="about">
            <h2>About Codeit</h2>
            <p>Codeit is an education company. But not one in the way you might think. We're committed to building the best learning experience inside and out, making Codeit the best place for our team to learn, teach, and create the online learning experience of the future.</p>
            <p>Education is old. The current public school system in the US dates back to the 19th century and wasn't designed to scale the way it has. Lots of companies are working to "disrupt" education by changing the way things work in the classroom and by bringing the classroom online.</p>
            <br>
            <h2>Our Mission</h2>
            <p>We're not one of those companies. We are rethinking education from the bottom up. The web has rethought nearly everything - commerce, social networking, healthcare, and more. We are building the education the world needs - the first truly net native education. We take more cues from Facebook and Zynga in creating an engaging educational experience than we do from the classroom.</p>
            <p>Education is broken. Come help us build the education the world deserves.</p>
            <br>
            <h2>Founder</h2>
            <div class="founder">
              <div class="foundercell">
                <p>Made by: <br>Class: </p>
              </div>
              <div class="foundercell">
                <p>Maik de Kruif<br>H4IN2</p>
              </div>
            </div>
          </div>
        </div>
        <div class="table-cell">
          <div class="contact aboutsection" id="contact">
            <h2>Contactform</h2>
            <p>Feel free to contact us about a question. Please note: all fields with an asterisk are required.</p>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/php/contactform.php'; ?>
            <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
              <span class="result-good"><?= $resultGood ?></span>
              <span class="result-bad"><?= $resultBad ?></span>
              <label>Name*</label>
              <span class="error"><?= $errName ?></span>
              <input name="name" type="text" placeholder="Your name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
              <label>Email*</label>
              <span class="error"><?= $errEmail ?></span>
              <input name="email" type="email" placeholder="Your email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
              <label>Subject*</label>
              <span class="error"><?= $errSubject ?></span>
              <input name="subject" type="text" placeholder="Where is this message about?" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>">
  		        <label>Refferencenumber</label>
              <input name="ref_num" type="text" placeholder="Only fill in if you contacted us earlier" value="<?php if(isset($_POST['ref_num'])) echo $_POST['ref_num'];?>">
              <label>Message*</label>
              <span class="error"><?= $errMessage ?></span>
              <textarea name="message" type="text" placeholder="Your message"><?php if(isset($_POST['message'])) echo $_POST['message'];?></textarea>
              <input class="submitcontactform" id="submitcontactform" name="submitcontactform" type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
  </body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/importJS.php'; ?>
</html>
