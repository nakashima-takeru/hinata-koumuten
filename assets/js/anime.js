// /* toggle Menu
// -------------------------------------------------- */
// const isMenuToggle = document.querySelector(".js-headerToggle");
// const commonHeaderLogo = document.querySelector(".js-header");
// let menuOpen = false;
// const menuTl = toggleMenu();

// function toggleMenu() {
//     const tl = gsap.timeline({ paused: true });

//     tl.fromTo(
//         ".js-headerToggleMenu",
//         { autoAlpha: 0 },
//         { autoAlpha: 1, duration: 0.2, left: 0, ease: Power2.easeInOut }
//     ).fromTo(
//         ".js-headerToggleMenuText",
//         { autoAlpha: 0, y: 20 },
//         { autoAlpha: 1, y: 0, stagger: 0.1 }
//     );

//     return tl;
// }

// function closeMenu(tl) {
//     tl.timeScale(1);
//     tl.reverse();
//     commonHeaderLogo.classList.remove("is-active");
// }

// isMenuToggle?.addEventListener("click", () => {
//     if (menuOpen) {
//         closeMenu(menuTl);
//     } else {
//         menuTl.play().timeScale(0.5);
//         commonHeaderLogo.classList.add("is-active");
//     }
//     menuOpen = !menuOpen;
// });

// function handleResize() {
//     closeMenu(menuTl);
//     menuOpen = false;
// }
// window.addEventListener("resize", handleResize);

// document.querySelectorAll(".js-headerToggleMenu a").forEach(function (anchor) {
//     anchor.addEventListener("click", function () {
//         closeMenu(menuTl);
//         menuOpen = false;
//     });
// });
