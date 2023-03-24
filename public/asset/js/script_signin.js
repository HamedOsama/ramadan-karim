"use strict";

const myusername = document.getElementById("username");
const mypass = document.querySelector("#password");
const confirmpass = document.querySelector("#confirm-password");
const enterbtn = document.querySelector(".button-signin");

function check() {
  if (myusername.value == "" && mypass.value == "" && confirmpass.value == "")
    alert("من فضلك ادخل اسمك وكلمه السر وتاكيد كلمه السر");
  else if (myusername.value == null || myusername.value == "")
    alert("من فضلك ادخل اسمك ");
  else if (mypass.value == null || mypass.value == "")
    alert("من فضلك ادخل كلمه السر ");
  else if (confirmpass.value == null || confirmpass.value == "")
    alert("من فضلك ادخل تاكيد كلمه السر ");
}
enterbtn.addEventListener("click", check);

const show = document.querySelector(".show");
const pass = document.querySelector("#password");
show.addEventListener("click", function () {
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
});

const showconfirm = document.querySelector(".show-confirm");
const password_confirmation = document.querySelector("#password_confirmation");
showconfirm.addEventListener("click", function () {
  if (password_confirmation.type === "password") {
    password_confirmation.type = "text";
  } else {
    password_confirmation.type = "password";
  }
});
