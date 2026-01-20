const datepicker = document.querySelector(".datepicker");
const dateInput = document.querySelector(".date-input");
const cancelBtn = datepicker.querySelector(".cancel");
const selectBtn = datepicker.querySelector(".select");

// show datepicker
dateInput.addEventListener("click", () => {
  datepicker.hidden = false;
});


cancelBtn.addEventListener("click", () => {
  datepicker.hidden = true; // hide datepicker
});

selectBtn.addEventListener("click", () => {
  datepicker.hidden = true; // hide datepicker
});