<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/head.php'; ?>
    <title>CodeIt - Start coding today!</title>

    <link rel="stylesheet" href="/css/home/home.css">
  </head>
  <body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/include.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/nav.php'; ?>
    <div id="top"></div>
    <div class="site-content">
      <header>
          <div class="heading">Code it!</div>
          <div class="sub-heading">
            Start coding today!<br>
            <a href="languages/">Start Now ></a>
          </div>
      </header>
      <div id="programming-at-home" class="programming-at-home">
        <div class="banner"></div>
        <h1 class="title">Programming at home</h1>
        <div id="pam-container-container" class="pam-container-container">
          <div id="pam-container" class="pam-container">
            <div id="pam-items" class="pam-items">
              <div class="pam-item">
                <div class="pros realcode">
                  <div class="img"></div>
                  <!-- <img src="/img/home/pros/realcode2.png" alt="Foto" width="150px" height="150px"><br> -->
                  <strong>Real Code</strong>
                    <p>No blocks to drag and drop but real code. This way you can learn codeing in more depth and understand how it really works.</p>
                </div>
              </div>
              <div class="pam-item">
                <div class="pros ownspeed">
                  <div class="img"></div>
                  <!-- <img src="/img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
                  <strong>Own Speed</strong>
                    <p>Code at your own speed, no video tutorials that go way to fast. You choose how long you want to do someting and at what level!</p>
                </div>
              </div>
              <div class="pam-item">
                <div class="pros educating">
                  <div class="img"></div>
                  <!-- <img src="img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
                  <strong>Educating</strong>
                    <p>If you don't understand someting you can always contact our tutors. They are happy to help you whenever possible.</p>
                </div>
              </div>
              <div class="pam-item">
                <div class="pros free">
                  <div class="img"></div>
                  <!-- <img src="/img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
                  <strong>Free</strong>
                    <p>All basic tutorials are, and always will be, free for all of you! We strongly believe everyone should be able to code.</p>
                </div>
              </div>
              <div class="pam-item">
                <div class="pros yourwebsite">
                  <div class="img"></div>
                  <!-- <img src="img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
                  <strong>Your Program</strong>
                    <p>Learn how to make your very own calculator or basic game! No more day just ideas, make your dreams come true now!</p>
                </div>
              </div>
              <div class="pam-item">
                <div class="pros easy">
                  <div class="img"></div>
                  <!-- <img src="/img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
                  <strong>No experience</strong>
                  <p>You do not need any experience whatsoever! We will learn you al the basics to recreate most of the existing programs.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="languages" class="languages">
        <h1 class="title">Languages</h1>
        <div class="lang-container">
            <div class="lang-row">
              <div class="lang">
                <strong>Java</strong>
                <p>Java is among the most popular programming languages out there, thanks to its versatility and compatibility. Java is used for software development, mobile applications, and large systems development.</p>
                <div class="lang-button-container">
                  <a href="languages/java/">
                    <div class="languages-button">
                      Learn More >
                    </div>
                  </a>
                </div>
              </div>
              <div class="lang">
                <strong>Ruby</strong>
                <p>Ruby is a general-purpose language that is still popular and in high demand in the marketplace, and is used commonly in Rails applications. Concise and readable, it is easy to pick up but also plenty powerful. Companies like Twitter, Soundcloud, Goodreads, and Kickstarter got their products off the ground with Ruby.</p>
                <div class="lang-button-container">
                  <a href="languages/ruby/">
                    <div class="languages-button">
                      Learn More >
                    </div>
                  </a>
                </div>
              </div>
              <div class="lang">
                <strong>Python</strong>
                <p>Python is a general-purpose, versatile and modern programming language. It's great as a first language because it is concise and easy to read. Use it for everything from web development to software development and scientific applications.</p>
                <div class="lang-button-container">
                  <a href="languages/python/">
                    <div class="languages-button">
                      Learn More >
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="lang-row">
              <div class="lang">
                <strong>JavaScript</strong>
                <p>JavaScript is the programming language of the web. You can use it to add dynamic behavior, store information, and handle requests and responses on a website. This course sequence covers data types and structures, functions, and object-oriented programming with classical inheritance in ES6 syntax.</p>
                <div class="lang-button-container">
                  <a href="languages/javascript/">
                    <div class="languages-button">
                      Learn More >
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/footer.php'; ?>
  </body>
  <script src="/js/home.js"></script>
  <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/importJS.php'; ?>
</html>
