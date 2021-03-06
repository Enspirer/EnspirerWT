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
    if (color.value == 'Admin') {
        color.classList.remove("select-admin", "select-manager", "select-agent");
        color.classList.add("select-admin");
    } else if (color.value == 'Manager') {
        color.classList.remove("select-admin", "select-manager", "select-agent");
        color.classList.add("select-manager");
    } else if (color.value == 'Agent') {
        color.classList.remove("select-admin", "select-manager", "select-agent");
        color.classList.add("select-agent");
    } else {
        color.classList.remove("select-admin", "select-manager", "select-agent");
    }
}

// take action
$('#data_action-select').change(function () {
    const selectVal = $(this).val();

    if (selectVal == 'Call') {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .call').show();
    } else if (selectVal == 'Mail') {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .mail').show();
    } else if (selectVal == 'Not responding') {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .not-responding').show();
    } else if (selectVal == 'Meeting') {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .meeting').show();
    } else if (selectVal == 'Message') {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .message').show();
    } else if (selectVal == 'Other') {
        $('#ims__icon-block .bi').hide();
        $('#ims__icon-block .other').show();
    } else {
        $('#ims__icon-block .bi').hide();
    }
});

// Status select
$('#data_status-select').change(function () {
    const selectVal = $(this).val();

    if (selectVal == 'Deal close successfully') {
        $('.data--Status .indicator').removeClass("green-background yellow-background red-background");
        $('.data--Status .indicator').addClass("green-background");
    } else if (selectVal == 'Pending') {
        $('.data--Status .indicator').removeClass("green-background yellow-background red-background");
        $('.data--Status .indicator').addClass("yellow-background");
    } else if (selectVal == 'Not responding') {
        $('.data--Status .indicator').removeClass("green-background yellow-background red-background");
        $('.data--Status .indicator').addClass("red-background");
    } else {
        $('.data--Status .indicator').removeClass("green-background yellow-background red-background");
    }
});