'use strict';
// Side nav

$('#sideNavs .nav-link').click(function () {
    $('.nav-link').removeClass("active");
    $(this).addClass("active");
});

// function controlPanel(panelName) {

//     $('#ims__main-panel .ims__panel').hide();

//     document.getElementById('ims__' + panelName).style.display = "block";
//     console.log('ims__' + panelName);
// }

// Assign Color
function assignColor(color) {
    if (color.value == 1) {
        color.classList.remove("select-admin", "select-manager", "select-agent");
        color.classList.add("select-admin");
    } else if (color.value == 2) {
        color.classList.remove("select-admin", "select-manager", "select-agent");
        color.classList.add("select-manager");
    } else if (color.value == 3) {
        color.classList.remove("select-admin", "select-manager", "select-agent");
        color.classList.add("select-agent");
    } else {
        color.classList.remove("select-admin", "select-manager", "select-agent");
    }
}

// take action
$('#data_action-select').change(function () {
    const selectVal = $(this).val();

    if (selectVal == 1) {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .call').show();
    } else if (selectVal == 2) {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .mail').show();
    } else if (selectVal == 3) {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .not-responding').show();
    } else if (selectVal == 4) {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .meeting').show();
    } else if (selectVal == 5) {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .message').show();
    } else if (selectVal == 6) {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .other').show();
    } else {
        $('#ims__icon-block .bi').hide();
    }
});

// Status select
$('#data_status-select').change(function () {
    const selectVal = $(this).val();

    if (selectVal == 1) {
        $('.data--Status .indicator').removeClass("green-background yellow-background red-background");
        $('.data--Status .indicator').addClass("green-background");
    } else if (selectVal == 2) {
        $('.data--Status .indicator').removeClass("green-background yellow-background red-background");
        $('.data--Status .indicator').addClass("yellow-background");
    } else if (selectVal == 3) {
        $('.data--Status .indicator').removeClass("green-background yellow-background red-background");
        $('.data--Status .indicator').addClass("red-background");
    } else {
        $('.data--Status .indicator').removeClass("green-background yellow-background red-background");
    }
});