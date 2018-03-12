<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/head.php'; ?>
    <title>CodeIt - Start coding today!</title>

    <link rel="stylesheet" href="/css/catalog/main.css">
  </head>
  <body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/include.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/nav.php'; ?>
    <div class="site-content">
      <div class="header">
        <h1>Catalog</h1>
        <p>Whether you're trying to level up your career, build your side project, or simply play around with programming, you've found the right place to start. Explore our programs and courses, try an exercise or two, and join our community.</p>
      </div>
      <div id="programs" class="programs">
        <h1>Programs</h1>
        <p>Each CodeIt program is designed to upgrade your skills through a rigorous curriculum with personalized support. Level up today!</p>
        <div class="programs-container">
          <a href="/programs/website">
            <div id="websie" class="program">
              <h2>Build a website from scratch</h2>
              <p>Learn to build and design professional websites using HTML & CSS</p>
            </div>
          </a>
          <a href="/programs/web-applications">
            <div id="web-applications" class="program">
            <h2>Build Front-End web applications from scratch</h2>
            <p>Learn JavaScript and ReactJS, a new technology that powers apps like Netflix and Airbnb</p>
          </div>
          </a>
          <a href="/programs/web-apis">
            <div id="web-apis" class="program">
            <h2>Build web APIs from scratch</h2>
            <p>Learn the fundamentals of JavaScript and Express.js</p>
          </div>
          </a>
          <a href="/programs/test-driven">
            <div id="test-driven" class="program">
            <h2>Test-Driven development</h2>
            <p>Learn the programming best-practice, Test Driven Development, while building fullstack JavaScript web applications.</p>
          </div>
          </a>
          <a href="/programs/data-analysis">
            <div id="data-analysis" class="program">
            <h2>Introduction to data analysis</h2>
            <p>Learn the data skills you need to make more informed decisions.</p>
          </div>
          </a>
        </div>
      </div>
      <hr/>
      <div id="courses" class="courses">
        <h1>Courses</h1>
        <p>CodeIt courses teach you a technical skill through interactive lessons. Practice projects and quizzes are only available for our Premium members.</p>
        <div class="courses-container">
          <a href="/languages/java">
            <div id="java" class="course">
              <h2>Java</h2>
              <p>Java is among the most popular programming languages out there, thanks to its versatility and compatibility. Java is used for software development, mobile applications, and large systems development.</p>
            </div>
          </a>
          <a href="/languages/ruby">
            <div id="ruby" class="course">
            <h2>Ruby</h2>
            <p>Ruby is a general-purpose language that is still popular and in high demand in the marketplace, and is used commonly in Rails applications. Concise and readable, it is easy to pick up but also plenty powerful. Companies like Twitter, Soundcloud, Goodreads, and Kickstarter got their products off the ground with Ruby.</p>
          </div>
          </a>
          <a href="/languages/python">
            <div id="python" class="course">
            <h2>Python</h2>
            <p>Python is a general-purpose, versatile and modern programming language. It's great as a first language because it is concise and easy to read. Use it for everything from web development to software development and scientific applications.</p>
          </div>
          </a>
          <a href="/languages/js">
            <div id="js" class="course">
            <h2>JavaScript</h2>
            <p>JavaScript is the programming language of the web. You can use it to add dynamic behavior, store information, and handle requests and responses on a website. This course sequence covers data types and structures, functions, and object-oriented programming with classical inheritance in ES6 syntax.</p>
          </div>
          </a>
          <a href="/languages/html">
            <div id="html" class="course">
            <h2>HTML</h2>
            <p>Learn the basics of HTML, the essential language of the web. This course covers version 5 of HTML.</p>
          </div>
          </a>
          <a href="/languages/css">
            <div id="css" class="course">
            <h2>CSS</h2>
            <p>Learn how to style and visually organize HTML with CSS. This course covers version 3 of CSS.</p>
          </div>
          </a>
          <a href="/languages/sass">
            <div id="sass" class="course">
            <h2>Sass</h2>
            <p>Sass is an extension of CSS that helps you to keep things organized through nested rules, variables, and more, allowing you to create stylesheets faster.</p>
          </div>
          </a>
          <a href="/languages/angularjs">
            <div id="angularjs" class="course">
            <h2>AngularJS</h2>
            <p>AngularJS is a JavaScript-based, open-source, front-end web application framework that is incredibly popular among developers.</p>
          </div>
          </a>
          <a href="/languages/reactjs">
            <div id="reactjs" class="course">
            <h2>ReactJS</h2>
            <p>React.js is an efficient, and flexible JavaScript library for building user interfaces.</p>
          </div>
          </a>
          <a href="/languages/rails">
            <div id="rails" class="course">
            <h2>Rails</h2>
            <p>Ruby on Rails is a web application framework working with the language Ruby, enabling developers to quickly and easily develop web applications.</p>
          </div>
          </a>
          <a href="/languages/jquery">
            <div id="jquery" class="course">
            <h2>jQuery</h2>
            <p>jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML - it is the fastest and easiest way to add interactivity and animation to your website.</p>
          </div>
          </a>
        </div>
      </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
  </body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/importJS.php'; ?>
</html>
