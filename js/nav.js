var loginFaded = 0;

openLogin = function () {
  if (loginFaded == 0) {
    loginFaded = 1;
    fadeElement(".login-form", "in", 1, "block");
  } else if (loginFaded ==1) {
    loginFaded = 0;
    fadeElement(".login-form", "out", 1, "block");
  }
}
