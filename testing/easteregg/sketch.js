var bird;
var pipe = [];

var pipeFrequency = 80

// Setup the canvas and make the bird and first pipe
function setup() {
  var easteregg = createCanvas(1000, 300);
  easteregg.parent('easteregg');

  bird = new Bird();
  pipe.push(new Pipe());
}

// Draw the background, pipes and bird
function draw() {
  noStroke();
  background(48);

  // ???
  for (var i = pipe.length - 1; i >= 0; i--) {
    pipe[i].show();
    pipe[i].update();

    // Check if the bird hits the pipe
    if (pipe[i].hits(bird)) {
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

// Check is the set key is pressed
function keyPressed() {
  if (key == 'J') {
    // Make the bird go up
    bird.up();
    // console.log("Key pressed");
  } else if (key == 'E') {
    window.scrollTo(0,document.body.scrollHeight);
  }
}

function mousePressed() {
  bird.up();
}
