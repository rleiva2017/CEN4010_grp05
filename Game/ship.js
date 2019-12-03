function Ship () {
    this.x=width/2; 
    this.xdir = 0;
    this.score=0;
    
    this.show = function () {
//        fill(255);
//        rectMode(CENTER);
//        rect(this.x, height-20, 20, 60);
//        imageMode(CENTER);
        image(shipImage, this.x-25, height-50, 50, 50);
        fill(255);
        text("Score = "+this.score,0, 10, 100, 100);
    }
    
    this.setDir = function(dir) {
        this.xdir = dir; 
    }
    
    this.move = function(dir) {
        this.x += this.xdir*5;
    }
}