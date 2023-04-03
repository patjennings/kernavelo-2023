// function initSlideshow(){
    // console.log("initSlideshow");
// }
// (async function() {
// })();
let mainContainer, slider, slidesList, slides, totalWidth;
let i = 1;
let size;
const tempo = 5000;

window.onload = function(e){
    initSlideshow();
    let t = 0;
    let intrv = setInterval(changeSlide, tempo);
}

function initSlideshow(){
    mainContainer = document.getElementById('content');
    slider = document.getElementById('slider');
    slidesList = document.getElementById('slides-list');

    slides = slider.querySelectorAll('.slide');

    totalWidth = mainContainer.offsetWidth;

    slidesList.style.cssText = 'width:1400%; position:relative;';

    slides.forEach(s => {
        s.style.cssText = 'width:'+totalWidth+'px; float: left;';
    });
    size = slides.length;


    // sliderNavigation();
}
function sliderNavigation(){
    slider.innerHTML += '<div class="navigation"></div>';
}
function changeSlide(){
    slidesList.style.left = 0-(i*totalWidth)+'px';
    if(i<size-1){
        i++;
    } else {
        i = 0;
}
}
