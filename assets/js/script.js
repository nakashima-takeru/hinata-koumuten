//
// ヘッダーの背景色を変更
//
// document.addEventListener("DOMContentLoaded", function () {
//     const header = document.querySelector(".js-header");
//     const transitionArea = document.querySelector(".js-headerTransitionArea");

//     if (header && transitionArea) {
//         const observerOptions = {
//             root: null,
//             rootMargin: "32px",
//             threshold: 0,
//         };

//         const observer = new IntersectionObserver((entries) => {
//             entries.forEach((entry) => {
//                 if (entry.isIntersecting) {
//                     header.classList.add("is-active");
//                 } else {
//                     header.classList.remove("is-active");
//                 }
//             });
//         }, observerOptions);

//         observer.observe(transitionArea);
//     }
// });

document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".js-header");
    const transitionArea = document.querySelector(".js-headerTransitionArea");

    if (header && transitionArea) {
        const observerOptions = {
            root: null,
            rootMargin: "32px",
            threshold: 0,
        };

        const handleIntersection = (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    header.classList.add("is-active");
                } else {
                    header.classList.remove("is-active");
                }
            });
        };

        const observer = new IntersectionObserver(handleIntersection, observerOptions);

        observer.observe(transitionArea);

        function debounce(func, wait) {
            let timeout;
            return function () {
                const context = this,
                    args = arguments;
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(context, args), wait);
            };
        }

        const handleResize = debounce(() => {
            observer.disconnect();
            observer.observe(transitionArea);

            const rect = transitionArea.getBoundingClientRect();
            if (rect.top <= 32) {
                header.classList.add("is-active");
            } else {
                header.classList.remove("is-active");
            }
        }, 200);

        window.addEventListener("resize", handleResize);
    }
});

//
// スマホメニュー
//
document.addEventListener("DOMContentLoaded", function () {
    const menu = document.querySelector(".js-menuMobile");
    const button = document.querySelector(".js-menuMobileButton");
    let isMenuOpen = false;

    function preventScroll(event) {
        event.preventDefault();
    }

    function toggleMenu() {
        isMenuOpen = !isMenuOpen;

        if (isMenuOpen) {
            menu.classList.add("is-active");
            button.classList.add("is-active");
            button.setAttribute("aria-expanded", "true");
            button.setAttribute("aria-label", "メニューを閉じる");
            document.body.style.overflow = "hidden";
        } else {
            menu.classList.remove("is-active");
            button.classList.remove("is-active");
            button.setAttribute("aria-expanded", "false");
            button.setAttribute("aria-label", "メニューを開く");
            document.body.style.overflow = "auto";
        }
    }

    window.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && isMenuOpen) {
            toggleMenu();
        }
    });

    button.addEventListener("click", toggleMenu);
});

//
// トップへ戻るボタン
//
document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector(".js-backToTopButton");
    const focusableElements = document.querySelectorAll(
        'button, a, input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );

    const scrollOptions = {
        top: 0,
        left: 0,
        behavior: "smooth",
    };

    const supportsNativeSmoothScroll = "scrollBehavior" in document.documentElement.style;

    function moveToTop(event) {
        event.preventDefault();

        supportsNativeSmoothScroll
            ? window.scrollTo(scrollOptions)
            : window.scrollTo(scrollOptions.top, scrollOptions.left);

        focusableElements[0].focus({
            preventScroll: true,
        });
    }

    button.addEventListener("click", moveToTop);
});
