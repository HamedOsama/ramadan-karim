"use strict";

const menu = document.getElementById("menu");
const action = document.querySelector("ul");
const save = document.querySelector(".button-save");

menu.addEventListener("click", () => {
  action.classList.toggle("is-active");
});

function savedata() {
  // هنا هتكتب كود لما يدوس على زرار سايف يخزن الداتا
}

save.addEventListener("click", savedata);
