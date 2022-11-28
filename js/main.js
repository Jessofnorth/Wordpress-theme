"use strict";
//hamburger menu
const hamburger = document.querySelector(".hamburger");
const mobilenav = document.querySelector(".mobile-nav");
hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    mobilenav.classList.toggle("is-active");
});