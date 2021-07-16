/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/scripts/topslider.js ***!
  \****************************************/
counter = 0;
var speed = 60; // slider speed in seconds

var timeout = speed * 1000;
var elem = document.querySelectorAll('.services-technologies-slider > .services-flex');
var clientScreen = document.documentElement.clientWidth;
window.addEventListener('resize', function (event) {
  clientScreen = document.documentElement.clientWidth;
}, true);
width_of_element = elem[0].offsetWidth;
var transition_width = width_of_element;
var maxCount = (Math.round(clientScreen / width_of_element) - elem.length) * -1 - 1;
console.log(maxCount);
full_width = width_of_element * elem.length - clientScreen;

function moveSlider(transition_width55) {
  document.getElementById("technologies-slider").style.transition = " ".concat(speed, "s linear");
  document.getElementById("technologies-slider").style.transform = "translateX(-".concat(transition_width55, "px)");
}

while (counter < maxCount) {
  setTimeout(function () {
    moveSlider(transition_width);
  }, 1);
  transition_width = transition_width + width_of_element;
  counter++;
}
/******/ })()
;