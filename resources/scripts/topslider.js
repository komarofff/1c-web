// top slider start
let speed=5; // slider speed in seconds
let timeout=speed*1000;
elem = document.querySelectorAll('.services-technologies-slider > .services-flex');
width_of_element=elem[0].offsetWidth;
transition_width = width_of_element*2;
end1 = elem.length - 1;
end = elem.length;
let s = 0
firstClone()
function firstClone(){
    document.getElementById("technologies-slider").style.cssText = `transition: ${speed}s linear;transform: translateX(-${width_of_element}px) `
    start_clone1=elem[s].cloneNode(true);
    elem[end1].after(start_clone1);
    width_of_element = width_of_element + elem[0].offsetWidth
    s++
    if(s=== end1){
        s=0
        width_of_element=elem[0].offsetWidth
    }
    elem = document.querySelectorAll('.services-technologies-slider > .services-flex');
    end1 = elem.length - 1;
    setTimeout( ()=>{firstClone()}, 5000)
}



// counter = 0
// const speed = 60 // slider speed in seconds
// const timeout = speed * 1000
// let elem = document.querySelectorAll('.services-technologies-slider > .services-flex')
// let clientScreen = document.documentElement.clientWidth
// window.addEventListener('resize', function (event) {
//     clientScreen = document.documentElement.clientWidth
// }, true)
// width_of_element = elem[0].offsetWidth;
// let transition_width = width_of_element;
// const maxCount = ((Math.round(clientScreen / width_of_element) - elem.length) * (-1)) - 1;
// console.log(maxCount)
// full_width = (width_of_element * elem.length) - clientScreen;
//
//
// function moveSlider(transition_width55) {
//     document.getElementById("technologies-slider").style.transition = ` ${speed}s linear`
//     document.getElementById("technologies-slider").style.transform = `translateX(-${transition_width55}px)`
// }
//
// while (counter < maxCount) {
//     setTimeout(()=>{
//         moveSlider(transition_width)
//     }, 1)
//     transition_width = transition_width + width_of_element
//     counter++
//
// }
