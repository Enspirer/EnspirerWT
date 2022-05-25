'use strict';

function mediaQuery(windowWidth) {
    if (windowWidth.matches) {
        console.log('red');
    } else {
        console.log('blue');
    }
}

var windowWidth = window.matchMedia("(max-width: 1399px)")
mediaQuery(windowWidth)
windowWidth.addListener(mediaQuery)
