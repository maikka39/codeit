<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include 'include/head.php'; ?>
    <title>CodeIt - Start coding today!</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52819721-7"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-52819721-7');
		</script>

    <link rel="stylesheet" href="css/home/home.css">
  </head>
  <body>
    <?php include 'include/include.php'; ?>
    <?php include 'include/nav.php'; ?>
    <div id="top"></div>
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
      <ul>
        <li>
          <div class="pros realcode">
            <div class="img"></div>
            <!-- <img src="img/home/pros/realcode2.png" alt="Foto" width="150px" height="150px"><br> -->
            <strong>Real Code</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, libero repellendus repellat a magni possimus, neque quod.</p>
          </div>
        </li>
        <li>
          <div class="pros ownspeed">
            <div class="img"></div>
            <!-- <img src="img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
            <strong>Own Speed</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque alias laborum corrupti laudantium explicabo modi labore autem.</p>
        </div>
        </li>
        <li>
          <div class="pros educating">
            <div class="img"></div>
            <!-- <img src="img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
            <strong>Educating</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet cum vero necessitatibus tempore obcaecati reiciendis est.</p>
          </div>
        </li>
        <li>
          <div class="pros yourwebsite">
            <div class="img"></div>
            <!-- <img src="img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
            <strong>Your Website</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, fugiat ratione quod maxime nisi, id delectus modi.</p>
          </div>
        </li>
        <li>
          <div class="pros noexperience">
            <div class="img"></div>
            <!-- <img src="img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
            <strong>No Experience</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa repellendus odit excepturi aliquid quo esse eos, nisi!</p>
          </div>
        </li>
        <li>
          <div class="pros">
            <div class="img"></div>
            <!-- <img src="img/home/pros/placeholder.png" alt="Foto" width="150px" height="150px"><br> -->
            <strong>TEXT</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem et rem pariatur veritatis at. Adipisci, aut, necessitatibus.</p>
          </div>
        </li>
      </ul>
    </div>
    <div id="languages" class="languages">
      <h1 class="title">Languages</h1>
      <div class="lang-container">
          <div class="lang">
            <strong>Java</strong>
            <p>Java is among the most popular programming languages out there, thanks to its versatility and compatibility. Java is used for software development, mobile applications, and large systems development.</p>
            <a href="languages/html/">
              <div class="languages-button">
                Learn More >
              </div>
            </a>
          </div>
          <div class="lang">
            <strong>Ruby</strong>
            <p>Ruby is a general-purpose language that is still popular and in high demand in the marketplace, and is used commonly in Rails applications. Concise and readable, it is easy to pick up but also plenty powerful. Companies like Twitter, Soundcloud, Goodreads, and Kickstarter got their products off the ground with Ruby.</p>
            <a href="languages/css/">
              <div class="languages-button">
                Learn More >
              </div>
            </a>
          </div>
          <div class="lang">
            <strong>Python</strong>
            <p>Python is a general-purpose, versatile and modern programming language. It's great as a first language because it is concise and easy to read. Use it for everything from web development to software development and scientific applications.</p>
            <a href="languages/js/">
              <div class="languages-button">
                Learn More >
              </div>
            </a>
          </div>
          <div class="lang">
            <strong>JavaScript</strong>
            <p>JavaScript is the programming language of the web. You can use it to add dynamic behavior, store information, and handle requests and responses on a website. This course sequence covers data types and structures, functions, and object-oriented programming with classical inheritance in ES6 syntax.</p>
            <a href="languages/scratch/">
              <div class="languages-button">
                Learn More >
              </div>
            </a>
          </div>
      </div>
    </div>
    <?php include 'include/footer.php'; ?>
  </body>
  <?php include 'include/importJS.php'; ?>
</html>
