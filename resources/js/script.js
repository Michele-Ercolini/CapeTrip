/* Swiper Header*/

let swiper = new Swiper(".mySwiper", {
    grabCursor: true,
    effect: "creative",
    loop: true,
    speed: 300,
    mousewheel:{
        invert: false,
    },
    /* autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    }, */
    pagination:{
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    creativeEffect: {
        prev: {
            shadow: true,
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
});