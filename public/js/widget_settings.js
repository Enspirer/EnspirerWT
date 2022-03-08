'use strict'

// Side nav active class
const sideNav = document.getElementById("sideNav");
const items = sideNav.querySelectorAll('.nav-link');

items.forEach(function (item) {
    item.addEventListener("click", function () {
        items.forEach(function (tab) {
            tab.classList.remove("active");
        });
        item.classList.add("active");
    });
});

// Continue btn

function navSwitcher(link) {
    for (let i = 0; i < items.length; i++) {
        items[i].classList.remove('active');
    }
    document.getElementById(link).classList.add("active");
}

// Inner nav Sections
const sideNavInner = document.getElementById("sideNavInner");

function innerSection(sectionName) {
    var i, section;

    section = sideNavInner.getElementsByClassName("inner-section");
    for (i = 0; i < section.length; i++) {
        section[i].style.display = "none";
    }

    document.getElementById(sectionName).style.display = "block";
}

//  Templates
const temps = sideNavInner.querySelectorAll('.temps');

temps.forEach(function (item) {
    item.addEventListener("click", function () {
        temps.forEach(function (tab) {
            tab.classList.remove("active");
        });
        item.classList.add("active");
    });
});

// Contact Section Chat bubble

const chatBubble = document.getElementById("chatBubbleCollapse");
const bubbles = chatBubble.querySelectorAll('.bubble-icone');

bubbles.forEach(function (item) {
    item.addEventListener("click", function () {
        bubbles.forEach(function (tab) {
            tab.classList.remove("active");
        });
        item.classList.add("active");
    });
});


// Custom Captions
$('#captionOptions input[type=radio]').change(function () {
    const radioVal = $('#captionOptions input[type=radio]:checked').val();
    if (radioVal == 'custom') {
        $('.custom-caption-block').show();
    } else {
        $('.custom-caption-block').hide();
    }
});

// Chat visible pages

const chatDisplay = document.getElementById("pageSettingsOptions");
const displayOption = chatDisplay.querySelectorAll(".form-check-label");

displayOption.forEach(function (option) {
    option.addEventListener("click", function () {
        displayOption.forEach(function (label) {
            label.classList.remove("active");
        });
        option.classList.add("active");
    });
});

// Device sizes
function device(cls) {
    const window = document.getElementById("device-view");

    window.classList.remove("desktop", "tablet", "mobile");
    window.classList.add(cls);
}
