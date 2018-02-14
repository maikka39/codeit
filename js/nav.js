var loginFaded = 0;

function openLogin() {
  if (loginFaded == 0) {
    loginFaded = 1;
    fadeElement(".login-form", "in", 1, "block");
  } else if (loginFaded ==1) {
    loginFaded = 0;
    fadeElement(".login-form", "out", 1, "block");
  }
}

// Create function for fading in/out elements
function fadeElement(element, state, fadeSpeed, display) {
  element = $(element);
  if (element && state && fadeSpeed) {
    if (!display) {
      display = "block";
    }
    if (state == "in") {
      element.css("display", display);
      element.animate({'opacity':'1'}, fadeSpeed);
    } else if (state == "out") {
      element.animate({'opacity':'0'}, fadeSpeed);
      element.css("display", "none");
    }
  } else {
    console.log("Provide all args for fadeElement");
  }
}
