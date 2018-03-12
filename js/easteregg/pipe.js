function Pipe() {
  this.x = width;

  this.width = 20;
  this.gapSize = 100;

  this.top = random(height - this.gapSize);
  this.bottom = height - this.top - this.gapSize;

  this.speed = 2.5;

  this.highlight = false;

  // Check is the bird is hitting the pipe
  this.hits = function(bird) {
    // Evaluate if the bird is heigh enough
    if (bird.y + bird.r < this.top || bird.y + bird.r > height - this.bottom) {
      // Evaluate if the bird has the right x position
      if (bird.x + bird.r > this.x && bird.x + bird.r < this.x + this.width) {
        this.highlight = true;
        return true;
      }
    }
    // this.highlight = false;
    return false;
  }

  // Show the pipe
  this.show = function() {
    fill(255);
    // Make the pipe red if hit
    if (this.highlight == true) {
      fill(255, 0, 0);
    }
    rect(this.x, 0, this.width, this.top);
    rect(this.x, height - this.bottom, this.width, this.bottom);
  }

  this.update = function() {
    this.x -= this.speed;
  }

  // Check if the pipe is off the screen
  this.offscreen = function() {
    if (this.x < -this.width) {
      return true;
    } else {
      return false;
    }
  }
}
