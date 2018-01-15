function Bird() {
  this.y = height/2;
  this.x = width/4;

  this.width = 16;
  this.height = 16;

  this.gravity = 0.6;
  this.upforce = -10;
  this.velocity = 0;

  // Show the bird
  this.show = function() {
    fill(255);
    ellipse(this.x, this.y, this.width, this.height);
  }

  // Make the bird go up
  this.up = function() {
    this.velocity = this.upforce;
  }

  this.update = function() {
    this.velocity += this.gravity
    this.y += this.velocity;

    // Make sure the bird isn't going underneath the screen
    if (this.y > height - this.height/2) {
      this.y = height - this.height/2;
      this.velocity = 0;
    }

    // Make sure the bird doesn't go above the screen
    if (this.y < 0 + this.height/2) {
      this.y = 0 + this.height/2;
      this.velocity = 0;
    }
  }
}
