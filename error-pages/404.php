<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/head.php'; ?>

    <title>CodeIt - Start coding today!</title>

    <link rel="stylesheet" href="/css/error-pages/404.css">
  </head>
  <body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/include.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/nav.php'; ?>
    <div class="site-content">
      <div class="error404">
        <img src="/img/error-pages/dog.svg" alt="">
        <h1>Oops, it's gone :[</h1>
        <p>Angry Dog has eaten the page you are looking<br> for, please try one of these instead</p>
      </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/footer.php'; ?>
  </body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . 'include/importJS.php'; ?>
</html>
