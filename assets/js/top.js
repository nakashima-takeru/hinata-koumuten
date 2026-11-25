//
// ヘッダーロゴアニメーション
//
document.addEventListener("DOMContentLoaded", () => {
    const logo = document.querySelector(".js-headerLogo");
    const transitionArea = document.querySelector(".js-logoTransitionArea");

    if (logo && transitionArea) {
        const observerOptions = {
            root: null,
            rootMargin: "-24px",
            threshold: 0,
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    logo.classList.add("is-active");
                } else {
                    logo.classList.remove("is-active");
                }
            });
        }, observerOptions);

        observer.observe(transitionArea);
    }
});

//
// カルーセル
//
const swiper = new Swiper(".js-carousel", {
    loop: true,
    slidesPerView: 1.3,
    spaceBetween: 16,
    centeredSlides: true,
    breakpoints: {
        575: {
            slidesPerView: 1.8,
        },
        768: {
            spaceBetween: 20,
            slidesPerView: 3,
        },
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
