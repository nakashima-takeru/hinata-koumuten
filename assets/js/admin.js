window.addEventListener("DOMContentLoaded", () => {
    const daysContainer = document.querySelector(".field-calendar_days");
    if (daysContainer) {
        const allDays = daysContainer.querySelectorAll(".loop_wrapper");
        console.log(allDays);
        if (allDays.length > 0) {
            allDays.forEach((day) => {
                // Check if a day loop - Then change the label
                const dayLabel = day.querySelector(".cfs_loop_head .label");
                const dayNumber = day.querySelector(".field-date_number input");
                if (dayLabel && dayNumber) {
                    dayLabel.innerText = `${dayNumber.value}日`;
                } else {
                    // Check if table label exists. Update
                    const timeLabel = day.querySelector(".field-request_time input");
                    if (timeLabel) {
                        dayLabel.innerText = timeLabel.value;
                    }
                }
            });
        }
    }
});
