<nav>
  <script language="javascript" type="text/javascript" src="/js/nav.js"></script>
  <div class="logo">
    <a href="/"><img src="/img/logo+text.png" alt="logo" width="125" height="50"></a>
  </div>
  <div class="nav-bar">
    <div class="nav-list">
      <div class="nav-list-item"><a class="nav-item" href="/">Home</a></div>
      <div class="nav-list-item">
        <a class="nav-item" href="/catalog/">Catalog</a>
        <div class="nav-list drop-menu">
          <div class="nav-list-item"><a class="drop-menu-item" href="/catalog/#java">Java</a></div>
          <div class="nav-list-item"><a class="drop-menu-item" href="/catalog/#ruby">Ruby</a></div>
          <div class="nav-list-item"><a class="drop-menu-item" href="/catalog/#python">Python</a></div>
          <div class="nav-list-item"><a class="drop-menu-item" href="/catalog/#js">JavaScript</a></div>
        </div>
      </div>
      <div class="nav-list-item">
        <a class="nav-item" href="/about/">About Us</a>
        <div class="nav-list drop-menu">
          <div class="nav-list-item"><a class="drop-menu-item" href="/about/#about">About</a></div>
          <div class="nav-list-item"><a class="drop-menu-item" href="/about/#contact">Contact</a></div>
        </div>
      </div>
      <div class="nav-list-item">
        <button style="background: url('../usraccdata/profiles/placeholder/photo.png'); background-position: center; background-repeat: no-repeat; background-size: 100% 100%;" class="nav-item account-button" onclick="openLogin()"></button>
      </div>
    </div>
  </div>
  <div class="login-form" id="loginform">
    <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/php/login.php'; ?>
      <h1>Sign In</h1>
      <span class="loginError"><?= $errLgn ?></span>
      <input class="loginInput" type="username" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>" placeholder="E-mail or Username">
      <span class="loginError"><?= $errPwd ?></span>
      <input class="loginInput" type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>" placeholder="Password">
      <input class="loginButton" type="submit" name="submit" value="Log In">
    </form>
  </div>
  <?php
  if (isset($_POST["submit"])) {
    echo '<script>document.getElementById("loginform").style.display = "block"; openLogin();</script>';
  }
  ?>
</nav>
