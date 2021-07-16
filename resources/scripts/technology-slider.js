
// top slider start
setTimeout(firstClone, 10);
const speed = 6; // slider speed in seconds
const timeout = speed * 1000;
elem = document.querySelectorAll('.services-technologies-slider > .services-flex');
width_of_element = elem[0].offsetWidth;
transition_width = width_of_element * 2;
end1 = elem.length - 1;
end = elem.length;

function firstClone() {
    document.getElementById("technologies-slider").style.transition = " 0s";
    document.getElementById("technologies-slider").style.transform = `translateX(-${width_of_element}px)`;
    start_clone1 = elem[end1].cloneNode(true);
    elem[0].before(start_clone1);
    start_clone1 = elem[0].cloneNode(true);
    elem[end1].after(start_clone1);
    sliderTechnology();
}

function sliderTechnology() {
    document.getElementById("technologies-slider").style.transition = ` ${speed}s linear`;
    document.getElementById("technologies-slider").style.transform = `translateX(-${transition_width}px)`;
    setTimeout(secondClone, timeout);

}

function secondClone() {
    elem = document.querySelectorAll('.services-technologies-slider > .services-flex');

    document.getElementById("technologies-slider").style.transition = " 0s";
    document.getElementById("technologies-slider").style.transform = `translateX(-${width_of_element}px)`;

    start_clone2 = elem[2].cloneNode(true);
    end2 = end1 + 2;
    elem[end2].after(start_clone2);
    elem[0].remove();
    tech_timeout = setTimeout(sliderTechnology, 25);
}
