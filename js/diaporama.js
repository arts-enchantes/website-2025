<!--
var timeDelay = 5;

var Pix = new Array
("images/diapo/1.jpg"
,"images/diapo/2.jpg"
,"images/diapo/3.jpg"
,"images/diapo/4.jpg"
);
var howMany = Pix.length;

timeDelay *= 100;
var PicCurrentNum = 0;

var PicCurrent = new Image();

PicCurrent.src = Pix[PicCurrentNum];

function diaporama() {
setInterval("slideshow()", timeDelay);
}

function slideshow() {
PicCurrentNum++;

if (PicCurrentNum == howMany) {
PicCurrentNum = 0;
}

PicCurrent.src = Pix[PicCurrentNum];

document["changePhoto"].src = PicCurrent.src;

}

// End -->

