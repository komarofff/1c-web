counter = 0
const speed = 60 // slider speed in seconds
const timeout = speed * 1000
let elem = document.querySelectorAll('.services-technologies-slider > .services-flex')
let clientScreen = document.documentElement.clientWidth
window.addEventListener('resize', function (event) {
    clientScreen = document.documentElement.clientWidth
}, true)
width_of_element = elem[0].offsetWidth;
let transition_width = width_of_element;
const maxCount =((Math.round(clientScreen / width_of_element) - elem.length) * (-1))-1;
console.log(maxCount)
full_width = (width_of_element * elem.length) - clientScreen;

while (counter < maxCount) {
    setTimeout('moveSlider(transition_width,counter,maxCount)', 1)
    transition_width = transition_width + width_of_element
    counter++

}
function moveSlider(transition_width) {
    document.getElementById("technologies-slider").style.transition = ` ${speed}s linear`
    document.getElementById("technologies-slider").style.transform = `translateX(-${transition_width}px)`
}
