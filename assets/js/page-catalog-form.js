function handleSetTodaysDate() {
  const el = document.querySelector("input[name='todays-date']");
  if (!el) return;
  const today = new Date();
  const year = today.getFullYear();
  const month = (today.getMonth() + 1).toString().padStart(2, "0");
  const day = today.getDate().toString().padStart(2, "0");
  el.value = `${year}/${month}/${day}`;
}
document.addEventListener("DOMContentLoaded", () => {handleSetTodaysDate();});