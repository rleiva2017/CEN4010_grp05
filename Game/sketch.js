var ship;
var invader = [];
var lasers = [];
var background;
var invaderImage;
var shipImage;
var laserImage;

 function preload() { 
    background = loadImage("jungle.jpg");
    invaderImage = loadImage("invaderimage.png");
    shipImage = loadImage("ship.png");
    laserImage = loadImage("laserImage.png");
 }

function setup() {
    createCanvas(600, 400);
    ship = new Ship ();
    // laser= new Laser (width/2, height/2);
    for (var i = 0; i < 7; i++){
        invader[i] = new Invader(i*80+80, 20);
    }
}

function draw() {
   // background (51);
    image(background,0,0,600,400);
    ship.show();
    ship.move();
   for (var i = 0; i < lasers.length; i++){
    lasers[i].show();
    lasers[i].move();
           for (var j = 0; j < invader.length; j++){
            if (lasers[i].hits(invader[j])) {
                invader[j].evaporate();
                lasers[i].evaporate();
            }
        }
   }

    var edge = false;
    for (var i = 0; i < invader.length; i++){
     invader[i].show();
     invader[i].move();
     if (invader[i].x > width || invader[i].x < 0) {
        edge = true;
        }
    }

    if (edge) {
        for (var i = 0; i < invader.length; i++){
        invader[i].shiftDown();
        }
    }

    for (var i = lasers.length-1; i>=0; i--){
        if(lasers[i].toDelete) {
            lasers.splice(i,1);
        }
    }

    for (var i = invader.length-1; i>=0; i--){
        if(invader[i].toDelete) {
            invader.splice(i,1);
        }

    }
    }

function keyReleased () {
    if(key != ' '){
        ship.setDir(0);
    }
}

function keyPressed() {
    if(key === ' '){
        var laser = new Laser(ship.x,height);
        lasers.push(laser);
    }

    if(keyCode === RIGHT_ARROW) {
        ship.setDir(1);
    }else if (keyCode === LEFT_ARROW) {
        ship.setDir(-1);
    }
}

