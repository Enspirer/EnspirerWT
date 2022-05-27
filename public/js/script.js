'use strict'

// Side nav toggle

const btn = document.querySelector('.toggle-btn');
const sideNav = document.getElementById("sectionSideNav");
const body = document.getElementById("sectionBody");

btn.onclick = function () {
    sideNav.classList.toggle("active");
    body.classList.toggle("active");
}

// Side Nav Media Queries

function windowSize(x) {
    if (x.matches) { // If media query matches
        sideNav.classList.add("active");
        body.classList.add("active");
    } else {
        sideNav.classList.remove("active");
        body.classList.remove("active");
    }
}

var x = window.matchMedia("(max-width: 1399px)")
windowSize(x) // Call listener function at run time
x.addListener(windowSize) // Attach listener function on state changes
