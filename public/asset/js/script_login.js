"use strict";

const myusername = document.getElementById("username");
const mypass = document.querySelector("#password");
const enterbtn = document.querySelector(".button");

function check() {
  if (myusername.value == "" && mypass.value == "")
    alert("من فضلك ادخل اسمك وكلمه السر السابق ادخلهم عند انشاء حسابك");
  else if (myusername.value == null || myusername.value == "")
    alert("من فضلك ادخل اسمك الذى ادخلته من قبل عند انشاء حسابك");
  else if (mypass.value == null || mypass.value == "")
    alert("من فضلك ادخل كلمه السر الذى ادخلته من قبل عند انشاء حسابك");
}

enterbtn.addEventListener("click", check);

// when click on button have class show must show the password 
const show = document.querySelector(".show");
const pass = document.querySelector("#password");
show.addEventListener("click", function () {
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
});
