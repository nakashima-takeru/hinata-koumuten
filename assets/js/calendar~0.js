const storeSelect = document.getElementById("js-storeSelect");
const dummyDisplay = document.getElementById("js-resCalDummy");
const allCalendarGroups = document.querySelectorAll(".js-resCalGroup");
let currentStore = "";

// Data passed from part-calendar.php file
const storeData = storeDataArray?.storeData ? storeDataArray.storeData : false;

if (storeData) {
    storeSelect.addEventListener("change", (e) => {
        // Get Selected Store from Data
        const filteredStores = storeData.filter((store) => store.slug === e.target.getAttribute("data-store-slug"));
        if (modalBody) {
            handleModalClose();
        }
        if (filteredStores.length > 0) {
            const [selectedStore] = filteredStores;
            const calGroupId = `store--${selectedStore.slug}`;
            allCalendarGroups.forEach((calendarGroup) => {
                const elementId = calendarGroup.getAttribute("id");
                if (calGroupId != elementId) {
                    calendarGroup.style.display = "none";
                } else {
                    calendarGroup.style.display = "grid";
                }
                dummyDisplay.style.display = "none";
            });
        }
    });
}

/*================================
  Set up Calendar Buttons
=================================*/

const allNextButtons = document.querySelectorAll(".js-resCal__next");
const allPrevButtons = document.querySelectorAll(".js-resCal__back");

if (allNextButtons.length > 0) {
    allNextButtons.forEach((button) => {
        const calendarForButton = button.getAttribute("data-calendar-group");
        if (calendarForButton) {
            button.addEventListener("click", () => {
                const currentCalendarGroup = document.getElementById(calendarForButton);
                const currentActive = currentCalendarGroup.querySelector(".active");
                const currentActiveIndex = currentCalendarGroup.getAttribute("data-active-item").split("--")[1];
                let nextActive;
                switch (currentActiveIndex) {
                    case "0":
                        nextActive = currentCalendarGroup.querySelector(".calNum--1");
                        currentCalendarGroup.setAttribute("data-active-item", "calNum--1");
                        break;
                    case "1":
                        nextActive = currentCalendarGroup.querySelector(".calNum--2");
                        currentCalendarGroup.setAttribute("data-active-item", "calNum--2");
                        break;
                    case "2":
                        nextActive = currentCalendarGroup.querySelector(".calNum--0");
                        currentCalendarGroup.setAttribute("data-active-item", "calNum--0");
                        break;
                }
                currentActive.classList.toggle("active");
                nextActive.classList.toggle("active");
            });
        }
    });
}

if (allPrevButtons.length > 0) {
    allPrevButtons.forEach((button) => {
        const calendarForButton = button.getAttribute("data-calendar-group");
        if (calendarForButton) {
            button.addEventListener("click", () => {
                const currentCalendarGroup = document.getElementById(calendarForButton);
                const currentActive = currentCalendarGroup.querySelector(".active");
                const currentActiveIndex = currentCalendarGroup.getAttribute("data-active-item").split("--")[1];
                let nextActive = false;
                switch (currentActiveIndex) {
                    case "0":
                        nextActive = currentCalendarGroup.querySelector(".calNum--2");
                        if (!nextActive) {
                            nextActive = currentCalendarGroup.querySelector(".calNum--1");
                            currentCalendarGroup.setAttribute("data-active-item", "calNum--1");
                        } else {
                            currentCalendarGroup.setAttribute("data-active-item", "calNum--2");
                        }
                        break;
                    case "1":
                        nextActive = currentCalendarGroup.querySelector(".calNum--0");
                        currentCalendarGroup.setAttribute("data-active-item", "calNum--0");
                        break;
                    case "2":
                        nextActive = currentCalendarGroup.querySelector(".calNum--1");
                        currentCalendarGroup.setAttribute("data-active-item", "calNum--1");
                        break;
                }
                currentActive.classList.toggle("active");
                nextActive.classList.toggle("active");
            });
        }
    });
}

/*================================
  Manage Calendar Modal
=================================*/

const modalBody = document.getElementById("js-resCalModal");
const modalHeadText = document.getElementById("js-modalHead");
const modalList = document.getElementById("js-modalList");
const allOpenDays = document.querySelectorAll(".js-openDay");
const allModalClose = document.querySelectorAll(".js-modalClose");
const reservationField = document.getElementById("js-reservation");
const reservationTimeslot = document.getElementById("js-reservationTimeslot");
const selectedDateDisplay = document.getElementById("resCalDateDisplay");
let isModalOpen = false;

function handleModalClose() {
    isModalOpen = false;
    return gsap.to(modalBody, { autoAlpha: 0, duration: 0.4, ease: "power2.inOut" });
}

function setupNewItemsSelect() {
    const currentItems = modalList.querySelectorAll("li");
    if (currentItems.length > 0) {
        currentItems.forEach((item) => {
            item.addEventListener("click", () => {
                const itemText = item.innerText;
                const requestTime = itemText.replace("(予約可)", "");
                // Later use this to update the form for creating the new request block and updating
                // the CFS fields for that timeslot.
                const dateValueFull = modalHeadText.innerText.replaceAll(/年|月|日/gi, ".");
                const dateParts = dateValueFull.split(".");
                const dateValueFiltered = `${dateParts[0]}.${dateParts[1]}.${dateParts[2]}/#/${requestTime}`;
                reservationField.value = `${dateParts[0]}.${dateParts[1]}.${dateParts[2]}`;
                reservationTimeslot.value = `${requestTime}`;
                if (selectedDateDisplay) {
                    selectedDateDisplay.innerText = `${dateParts[0]}.${dateParts[1]}.${dateParts[2]}　ー　${requestTime}`;
                }
                handleModalClose();
            });
        });
    }
}

window.addEventListener("DOMContentLoaded", () => {
    if (allOpenDays.length > 0) {
        allOpenDays.forEach((day) => {
            day.addEventListener("click", () => {
                // Get data from labels
                const newModalHeadText = day.getAttribute("data-modal-head");
                const newModalListParts = day.getAttribute("data-modal-list").split(",");

                // Update Modal Title
                modalHeadText.innerText = newModalHeadText;

                // Remove old <li> tags and replace
                modalList.innerHTML = "";
                newModalListParts.forEach((part) => {
                    if (part !== "") {
                        const newElement = document.createElement("li");
                        newElement.innerText = part;
                        modalList.appendChild(newElement);
                    }
                });

                // Open Modal
                gsap.to(modalBody, { autoAlpha: 1, duration: 0.4, ease: "power2.inOut" });
                isModalOpen = true;

                setupNewItemsSelect();
            });
        });
    }
});

window.addEventListener("DOMContentLoaded", () => {
    if (allModalClose.length > 0) {
        allModalClose.forEach((button) => {
            button.addEventListener("click", () => {
                if (isModalOpen) {
                    handleModalClose();
                }
            });
        });
    }
});
