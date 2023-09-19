/* Swiper Header*/

let swiper = new Swiper(".mySwiper6", {
    grabCursor: true,
    effect: "creative",
    /* autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    }, */
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