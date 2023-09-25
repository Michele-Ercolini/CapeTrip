/* Swiper Header*/

let swiper = new Swiper(".mySwiper", {
    effect: "creative",
    loop: true,
    speed: 500,
    simulateTouch:false,
    /* autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    }, */
    creativeEffect: {
        prev: {
            shadow: false,
            origin: "left center",
            translate: ["-5%", 0, -200],
            rotate: [0, 100, 0],
        },
        next: {
            origin: "right center",
            translate: ["5%", 0, -200],
            rotate: [0, -100, 0],
        },
    },
    pagination:{
        el: '.swiper-pagination',
        clickable: false,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

let imgHeader = document.querySelector('.imgHeader');
let swiperButtonPrev = document.querySelector('.swiper-button-prev');
let swiperButtonNext = document.querySelector('.swiper-button-next');

let css_of_before = window.getComputedStyle(imgHeader, '::before');
let count = 3;

swiperButtonPrev.addEventListener("click", changeImg);
swiperButtonNext.addEventListener("click", changeImg);

function changeImg(){
    count++;
    if(count%3==1){
        imgHeader.style.setProperty('--beforeImg', 'url(/public/media/liberta.png)');
    }else if(count%3==2){
        imgHeader.style.setProperty('--beforeImg', 'url(/public/media/bigben2.png)');
    }else{
        imgHeader.style.setProperty('--beforeImg', 'url(/public/media/eiffel.png)');
    }
    console.log(count);
}

