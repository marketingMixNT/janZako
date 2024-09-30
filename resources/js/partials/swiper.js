
import Swiper from "swiper";
import {
    Autoplay,
    EffectFade,
    Navigation,
    Pagination,
} from "swiper/modules";
import "swiper/swiper-bundle.css";

//HERO CAROUSEL
new Swiper(".hero-carousel", {
    loop: false,
    effect: "fade",
    slidesPerView: 1,

    spaceBetween: 30,
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    modules: [Autoplay, EffectFade],
});

//TESTIMONIALS CAROUSEL
new Swiper(".testimonial-carousel", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    modules: [Autoplay, Navigation, Pagination],
});

new Swiper(".attraction-gallery-swiper", {
    loop: true,
    slidesPerView: 1,
    // centeredSlides: true,
    spaceBetween: 50,
    breakpoints: {
        650: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
        1500: {
            slidesPerView: 4,
        },
    },

    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },
   
   
    modules: [Autoplay, ]
});


new Swiper(".offer-carousel", {
    loop: true,
    effect: "fade",
    grabCursor: true,
    slidesPerView: 1,

    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
        1250: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },

    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },
   
    modules: [Autoplay,EffectFade],
});
