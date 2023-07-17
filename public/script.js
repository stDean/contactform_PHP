const container = document.querySelector(".container");
const showHidePwd = Array.from(document.querySelectorAll(".showHide"));
const allPasswordFields = Array.from(document.querySelectorAll(".password"));
const form = document.querySelector(".signUp");
const userInput = document.querySelector("#user-input");
const emailInput = document.querySelector("#email-input");
const passInput = document.querySelector("#pass-input");
const confirmInput = document.querySelector("#confirm-input");

// toggling password icon
showHidePwd.forEach((ele) => {
  ele.addEventListener("click", () => {
    allPasswordFields.forEach((field) => {
      if (field.type === "password") {
        field.type = "text";

        showHidePwd.forEach((item) => {
          item.classList.replace("fa-eye-slash", "fa-eye");
        });
      } else {
        field.type = "password";
        showHidePwd.forEach((item) => {
          item.classList.replace("fa-eye", "fa-eye-slash");
        });
      }
    });
  });
});