<nav>
  <script language="javascript" type="text/javascript" src="js/nav.js"></script>
  <div class="logo">
    <a href="./"><img src="img/logo+text.png" alt="logo" width="125" height="50"></a>
  </div>
  <div class="nav-bar">
    <ul>
      <li><a class="nav-item" href="./">Home</a></li>
      <li>
        <a class="nav-item" href="catalog/">Catalog</a>
        <ul class="drop-menu">
          <li><a class="drop-menu-item" href="catalog/java/">Java</a></li>
          <li><a class="drop-menu-item" href="catalog/ruby/">Ruby</a></li>
          <li><a class="drop-menu-item" href="catalog/python/">Python</a></li>
          <li><a class="drop-menu-item" href="catalog/js/">JavaScript</a></li>
        </ul>
      </li>
      <li>
        <a class="nav-item" href="about/">About Us</a>
        <ul class="drop-menu">
          <li><a class="drop-menu-item" href="about/#about">About</a></li>
          <li><a class="drop-menu-item" href="about/#contact">Contact</a></li>
        </ul>
      </li>
      <li>
        <button style="background: url('../usraccdata/profiles/placeholder/photo.png'); background-position: center; background-repeat: no-repeat; background-size: 100% 100%;" class="nav-item account-button" onclick="openLogin()"></button>
      </li>
    </ul>
  </div>
  <div class="login-form">
    <h1>Sign In</h1>
    <input class="loginInput" type="username" name="username" value="" placeholder="E-mail or Username">
    <input class="loginInput" type="password" name="password" value="" placeholder="Password">
    <input class="loginButton" type="submit" value="Log In" onclick="">
  </div>
</nav>
