const worksCarouselThumbnail = new Swiper(".worksCarouselThumbnail", {
    slidesPerView: 3,
    spaceBetween: 8,
    loop: true,
    breakpoints: {},
});

const worksCarouselMain = new Swiper(".js-worksCarousel", {
    loop: true,
    slidesPerView: 1.4,
    effect: "fade",
    centeredSlides: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: worksCarouselThumbnail,
    },
});
