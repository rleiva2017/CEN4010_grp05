
function Invader (x,y) {
    this.x = x;
    this.y = y;
    this.r = 30;
    this.toDelete = false;
   
    this.xdir = 1;
 
    
    this.shiftDown = function() {
        this.xdir *= -1;
        this.y += this.r;
    }
    
    this.move = function () {
        this.x = this.x + this.xdir;
    }
    
    this.show = function () {
//        noStroke();
//        fill(255, 0, 200);
//        ellipse(this.x, this.y, this.r*2, this.r*2); 
        image(invaderImage,this.x-28, this.y-25, this. r *2, this.r*2);
    }
    
    this.evaporate = function () {
    this.toDelete = true;
    } 
    
}