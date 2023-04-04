// function initSlideshow(){
    // console.log("initSlideshow");
// }
// (async function() {
// })();
let mainContainer, slider, slidesList, slides, totalWidth;
let currentSlide = 0;
let size;
let intrv;
const tempo = 5000;

let menu, menuOpen, menuClose, body;
let menuState = false;

window.onload = function(e){
    initMenu();
    initSlideshow();
}
window.onresize = function(e){
    totalWidth = mainContainer.offsetWidth;
    slides.forEach(s => {
        s.style.cssText = 'width:'+totalWidth+'px; float: left;';
    });
    slidesList.style.left = 0-(currentSlide*totalWidth)+'px';
}
// menu
function initMenu(){
    body = document.body;
    menuOpen = document.getElementById('menu-open');
    menuClose = document.getElementById('menu-close');
    menu = document.getElementById('menu-main-menu-1');
    
    menuOpen.addEventListener('click', e => {
            // on ouvre le menu, on cache le hamMenu et on affiche la croix
        menuOpen.classList.remove('visible');
        menuOpen.classList.add('hidden');
        menuClose.classList.remove('hidden');
        menuClose.classList.add('visible');
        menu.classList.add('visible');
        menu.classList.remove('hidden');
        menu.classList.add('opacity-100');
        menu.classList.remove('opacity-0');
        body.classList.add('overflow-hidden');
    });
    menuClose.addEventListener('click', e => {
        menuOpen.classList.add('visible');
        menuOpen.classList.remove('hidden');
        menuClose.classList.add('hidden');
        menuClose.classList.remove('visible');
        menu.classList.remove('visible');
        menu.classList.add('hidden');
        menu.classList.remove('opacity-100');
        menu.classList.add('opacity-0');
        body.classList.remove('overflow-hidden');
    });
}
// slideshow
function launchInterval(){
    intrv = setInterval(changeSlide, tempo);
}
function initSlideshow(){
    console.log("slideshow");
    mainContainer = document.getElementById('page');
    slider = document.getElementById('slider');
    slidesList = document.getElementById('slides-list');

    slides = slider.querySelectorAll('.slide');

    totalWidth = mainContainer.offsetWidth;

    slidesList.style.cssText = 'left:0px;width:1400%; position:relative;';

    slides.forEach(s => {
        s.style.cssText = 'width:'+totalWidth+'px; float: left;';
    });
    size = slides.length;

    // internal navigation
    const navList = document.createElement('ul');
    navList.classList.add('slider-nav');
    slider.append(navList);
    for(let i = 0; i<size; i++){
        let navItem = document.createElement('li');
        navItem.classList.add('slider-nav-item');
        navItem.classList.add('inactive');
        navItem.innerHTML = i+1;
        navList.append(navItem);
        console.log(navList);
        navItem.addEventListener('click', e => {
            currentSlide = i;
            changeSlide();
            clearInterval(intrv);
            launchInterval();
        });
    }
    launchInterval();
    setActiveItem();
    // sliderNavigation();
}
// function sliderNavigation(){
    // slider.innerHTML += '<div class="navigation"></div>';
// }
function changeSlide(){
    slidesList.style.left = 0-(currentSlide*totalWidth)+'px';
    setActiveItem();

    if(currentSlide<size-1){
        currentSlide++;
    } else {
        currentSlide = 0;
    }
}
function setActiveItem(){
    const navItem = document.querySelectorAll('.slider-nav-item');
    navItem.forEach((e,i) => {
        if(i == currentSlide){
            e.classList.remove('inactive');
            e.classList.add('active');
        } else {
            e.classList.add('inactive');
            e.classList.remove('active');
}
    });
}
