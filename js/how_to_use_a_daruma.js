
var i = 0;
var imgArray = [
    "images/step_1.jpg",
    "images/step_2.jpg",
    "images/step_3.jpg",
    "images/step_4.jpg"
];

var stepArray = [
    "Step 1:",
    "Step 2:",
    "Step 3:",
    "Step 4:"
]

var textArray = [
    "Buy your Daruma doll in the beginning of a new year. At this stage the doll has eyes without pupils.",
    "Fill in the left eye of the Daruma, while concentrating on your wish.",
    "Place your Daruma in your house altar. If unavailable, give it another prominent place.",
    "Add the right eye when and if the wish comes true."
]
var images = document.getElementsByClassName('photo');
var steps = document.getElementsByClassName('step_1');
var text = document.getElementsByClassName('text');


function howToUse() {
    if (i < imgArray.length) {
        images[0].src = imgArray[i];
        steps[0].innerHTML = stepArray[i];
        text[0].innerHTML = textArray[i];
        i++;
        
    } else {
        i = 0;
    }
}
setInterval("howToUse()", 6000);
window.onload = howToUse;