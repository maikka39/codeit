var bird;
var pipe = [];

var pipeFrequency = 0;
var showBird = 0;
var started = 0;
var freezed = 0;
var pipeFrequencyLast;
var pipeSpeedBackup;
var points = 0;

// Setup the canvas and make the bird and first pipe
function setup() {
  var easteregg = createCanvas(document.documentElement.clientWidth, document.documentElement.clientHeight/2.5);
  easteregg.parent('easteregg');

  bird = new Bird();
  // pipe.push(new Pipe());

  // Set frame rate for when not playing the game so the browser wont lagg as much
  frameRate(0.01);
}

// Draw the background, pipes and bird
function draw() {
  if (started === 1) {
    game();
  }
}

function game() {
  noStroke();
  background(48);

  // ???
  for (var i = pipe.length - 1; i >= 0; i--) {
    pipe[i].show();
    pipe[i].update();

    // Check if the bird hits the pipe
    if (pipe[i].hits(bird)) {
      points -= 1/8;
      // console.log("Hit")
    }

    // Delete the pipe if it is not on the screen
    if (pipe[i].offscreen()) {
      pipe.splice(i, 1);
    }
  }

  bird.update();
  bird.show();

  // Make a new pipe every set frames
  if (frameCount % pipeFrequency == 0) {
    pipe.push(new Pipe());
  }
}

function stop() {
  started = 0;
  pipe.splice(0);
  pipeFrequency = 0;
  showBird = 0;
  game();
  frameRate(1);
}

function start() {
  frameRate(60);
  started = 1;
  pipeFrequency = 60;
  showBird = 1;
}

// Freeze all
function freeze() {
  if (freezed == 0) {
    freezed = 1;
    points -= 10;
    pipeFrequencyLast = pipeFrequency;
    pipeFrequency = 0;
    for (var i = 0; i < pipe.length; i++) {
      pipeSpeedBackup = pipe[i].speed;
      pipe[i].speed = 0;
    }
  } else if (freezed == 1) {
    freezed = 0
    for (var i = 0; i < pipe.length; i++) {
      pipe[i].speed = pipeSpeedBackup;
    }
    pipeFrequency = pipeFrequencyLast;
  }
}

// Check is the set key is pressed
function keyPressed() {
  if (key == 'J') {
    // Make the bird go up
    bird.up();
    // console.log("Key pressed");
  } else if (key == ' ') {
    // Make the bird go up
    bird.up();
  } else if (key == 'S') {
    if (started == 0) {
      start();
    } else if (started == 1) {
      stop();
    }
  } else if (key == 'F' || key == 'P') {
    freeze();
  }
}

function mousePressed() {
  // Make the bird go up
  bird.up();
}
