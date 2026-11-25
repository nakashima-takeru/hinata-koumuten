/*================================
  Manage dropdown toggle
=================================*/

const allDropDownContainers = document.querySelectorAll(".js-dropInput");

if (allDropDownContainers.length > 0) {
    allDropDownContainers.forEach((element) => {
        const dropdownDisplay = element.querySelector(".js-dropDisplay");
        const dropdownGroup = element.querySelector(".js-dropGroup");
        const dropdownItems = element.querySelectorAll(".js-formDropdownItem");
        const hiddenField = document.getElementById(element.getAttribute("data-hidden-item"));

        // Add event listener to trigger open and close
        element.addEventListener("click", () => {
            if (element.classList.contains("open")) {
                dropdownGroup.style.maxHeight = "0px";
                element.classList.remove("open");
            } else {
                const groupList = dropdownGroup.querySelector("ul");
                const heightToSet = groupList.offsetHeight;
                dropdownGroup.style.maxHeight = `${heightToSet}px`;
                element.classList.add("open");
            }
        });

        dropdownItems.forEach((dropItem) => {
            dropItem.addEventListener("click", () => {
                const value = dropItem.innerText;
                const textToUpdate = dropItem.innerText;
                if (hiddenField.id === "js-storeSelect") {
                    hiddenField.setAttribute("data-store-slug", dropItem.getAttribute("value"));
                    const hiddenStoreSlugInput = document.getElementById("js-storeSlug");
                    if (hiddenStoreSlugInput) {
                        hiddenStoreSlugInput.value = dropItem.getAttribute("value");
                    }
                }
                dropdownDisplay.innerText = textToUpdate;
                hiddenField.value = value;
                if (element.getAttribute("data-hidden-item") === "js-storeSelect") {
                    hiddenField.dispatchEvent(new Event("change"));
                }
            });
        });
    });
}

/*=======================================
  Manage Custom Validation Error Display
========================================*/

document.addEventListener("wpcf7invalid", (event) => {
    // Check for inputs
    const allErrorFlags = event.detail.inputs;
    const invalidFields = event?.detail?.apiResponse["invalid_fields"] || [];
    if (invalidFields.length > 0) {
        const field = invalidFields.find((item) => item.field === "your-reservation-date");
        if (field) {
            document.getElementById("js-dateSelectError").innerHTML = field.message;
        }
    }
    if (allErrorFlags.length > 0) {
        // Loop inputs, search for errorMessage, show if found
        allErrorFlags.forEach((flag) => {
            const inputElement = document.querySelector(`input[name='${flag.name}']`);
            const parentElement = inputElement?.parentElement;
            if (parentElement) {
                const errorElement = parentElement.querySelector(".errorMessage");
                if (errorElement) {
                    errorElement.style.display = "block";
                }
            }
        });
    }
    const firstErrorMessage = document.querySelector(".wpcf7-not-valid-tip");
    if (firstErrorMessage) {
        const elementPosition = firstErrorMessage.getBoundingClientRect().top + window.scrollY;

        window.scrollTo({
            top: elementPosition,
            behavior: "smooth",
        });
    }
});

/*=======================================
  Anket Accordion
========================================*/
const accordionBlocks = document.querySelectorAll(".js-accordMain");

if (accordionBlocks.length > 0) {
    window.addEventListener("DOMContentLoaded", () => {
        accordionBlocks.forEach((accord) => {
            const accordHead = accord.querySelector(".js-accordHead");
            const accordBody = accord.querySelector(".js-accordBody");
            const accordContents = accord.querySelector(".js-accordContents");
            const accordInnerHeight = accordContents.offsetHeight;

            accordHead.addEventListener("click", () => {
                if (accord.classList.contains("open")) {
                    accordBody.style.maxHeight = "0px";
                    accord.classList.remove("open");
                } else {
                    accordBody.style.maxHeight = `${accordInnerHeight + 1500}px`;
                    accord.classList.add("open");
                }
            });
        });
    });
}

/*=======================================
  Confirmation Modal
========================================*/

const confirmModal = document.getElementById("js-formModal");
const confirmModalButton = document.getElementById("js-formModalButton");
const confirmModalTrigger = document.querySelector("input[name='your-gift-acceptance'");

if (confirmModal && confirmModalButton && confirmModalTrigger) {
    confirmModalTrigger.addEventListener("click", (e) => {
        if (confirmModalTrigger.checked) {
            confirmModal.classList.add("showModal");
            document.body.style.overflow = "hidden";
        } else {
            confirmModalTrigger.value = "";
        }
    });

    confirmModalButton.addEventListener("click", () => {
        confirmModal.classList.remove("showModal");
        document.body.style.overflow = "unset";
        confirmModalTrigger.checked = true;
        confirmModalTrigger.value = "確認しました。";
    });
}

/*=======================================
  Remove negative from number inputs
========================================*/

window.addEventListener("DOMContentLoaded", () => {
    const allNumberInputs = document.querySelectorAll("input[type='number']");
    if (allNumberInputs.length > 0) {
        allNumberInputs.forEach((input) => {
            input.addEventListener("change", () => {
                if (input.value.includes("-")) {
                    input.value = input.value.replace("-", "");
                }
            });
            input.addEventListener("input", () => {
                if (input.value.startsWith("0") && input.value.length > 1) {
                    input.value = input.value.substr(1);
                }
            });
        });
    }
});

window.addEventListener("DOMContentLoaded", () => {
    const ownToggleContainer = document.getElementById("js-ownOnlyToggle");
    const allOwnToggleCheckboxes = ownToggleContainer?.querySelectorAll("input[type='checkbox']");
    const ownToggleCheckbox = ownToggleContainer?.querySelector("input[value='自分のみ']");

    allOwnToggleCheckboxes?.forEach((box) => {
        if (box.value !== "自分のみ") {
            box.addEventListener("click", () => {
                ownToggleCheckbox.checked = false;
            });
        }
    });

    ownToggleCheckbox?.addEventListener("click", () => {
        allOwnToggleCheckboxes.forEach((box) => {
            if (box.value !== "自分のみ") {
                box.checked = false;
            }
        });
        const childNumberBox = document.querySelector("input[name='your-number-children']");
        const otherPeopleBox = document.querySelector("input[name='your-number-other-people']");

        childNumberBox.value = 0;
        otherPeopleBox.value = 0;
    });
});

const allConfirmRows = document.querySelectorAll(".comfirmData");

window.addEventListener("DOMContentLoaded", () => {
    if (allConfirmRows.length > 0) {
        allConfirmRows.forEach((row) => {
            const labelCheck = row.querySelector(".labelDisplayCheck");
            const noLabelMessage = row.querySelector(".noLabelMessage");
            const labelUnits = row.querySelector(".labelUnits");
            if (labelCheck && noLabelMessage) {
                console.log(row);
                if (labelCheck.innerText == "") {
                    noLabelMessage.style.display = "block";
                    labelCheck.style.display = "none";
                    if (labelUnits) {
                        labelUnits.style.display = "none";
                    }
                }
            }
        });
    }
});

window.addEventListener("DOMContentLoaded", () => {
    const submitButton = document.querySelector("input[type='submit']");
    const formEl = document.querySelector("form");
    if (submitButton && formEl) {
        formEl.addEventListener("submit", () => {
            submitButton.disabled = true;
            submitButton.classList.add("submitted");
        });
    }

    document.addEventListener("wpcf7mailsent", (e) => {
        window.location.href = `${window.location.protocol}//${window.location.host}/form-complete`;
    });
});
