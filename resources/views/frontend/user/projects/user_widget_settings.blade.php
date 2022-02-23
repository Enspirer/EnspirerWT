@extends('frontend.layouts.widget_settings_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<section class="main-window">

    <div class="side-nav-section">
        <div id="sideNav" class="side-nav">
            <div class="side-nav-brands">
                <img class="brand-image" src="{{url('images/resources/whatsapp.svg')}}" alt="brand-image">
                <span class="title">Whatsapp Chat</span>
                <span class="sub-title">Widget Customize</span>
            </div>
            <div class="side-navs">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" id="templateNav" onclick="innerSection('template-block')"
                            href="#">
                            <span class="text">Template</span>
                            <span class="tool-tip">Template</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contentNav" onclick="innerSection('content-block')" href="#">
                            <span class="text">Content</span>
                            <span class="tool-tip">Content</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settingsNav" onclick="innerSection('settings-block')" href="#">
                            <span class="text">Settings</span>
                            <span class="tool-tip">Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="appearanceNav" onclick="innerSection('appearance-block')" href="#">
                            <span class="text">Appearance</span>
                            <span class="tool-tip">Appearance</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="side-nav-footer">
                <div class="devices">
                    <a href="#"><img src="{{url('images/resources/baseline-desktop_mac-24px.svg')}}" alt="devices"></a>
                    <a href="#"><img src="{{url('images/resources/Group 125.svg')}}" alt="devices"></a>
                    <a href="#"><img src="{{url('images/resources/baseline-smartphone-24px.svg')}}" alt="devices"></a>
                </div>
            </div>
        </div>
        <div id="sideNavInner">
            <div class="row g-0">

                <div id="template-block" class="inner-section">
                    <div class="inner-wrapper">
                        <span class="nav-toggle" onclick="innerSliderToggle()">
                            <a class="toggle-icon" href="#">&lt;</a>
                        </span>
                        <div class="header">
                            <div class="title">Select a template to start</div>
                        </div>
                        <div class="body">
                            <div class="templates">
                                <div class="row g-4 row-cols-2">
                                    <div class="col">
                                        <div class="temps active">
                                            <div class="checked-sign">
                                                <i class="bi bi-check2"></i>
                                            </div>
                                            <a href="#">
                                                <img src="{{url('images/Group 135.png')}}" alt="temp-image" class="temp-image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="temps">
                                            <div class="checked-sign">
                                                <i class="bi bi-check2"></i>
                                            </div>
                                            <a href="#">
                                                <img src="{{url('images/Group 139.png')}}" alt="temp-image" class="temp-image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="temps">
                                            <div class="checked-sign">
                                                <i class="bi bi-check2"></i>
                                            </div>
                                            <a href="#">
                                                <img src="{{url('images/Group -1.png')}}" alt="temp-image" class="temp-image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="temps">
                                            <div class="checked-sign">
                                                <i class="bi bi-check2"></i>
                                            </div>
                                            <a href="#">
                                                <img src="{{url('images/Group -1.png')}}" alt="temp-image" class="temp-image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="temps">
                                            <div class="checked-sign">
                                                <i class="bi bi-check2"></i>
                                            </div>
                                            <a href="#">
                                                <img src="{{url('images/Group 141.png')}}" alt="temp-image" class="temp-image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="temps">
                                            <div class="checked-sign">
                                                <i class="bi bi-check2"></i>
                                            </div>
                                            <a href="#">
                                                <img src="{{url('images/Group 140.png')}}" alt="temp-image" class="temp-image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn-whatsapp"
                                onclick="innerSection('content-block');navSwitcher('contentNav')">Continue</button>
                        </div>
                    </div>
                </div>

                <div id="content-block" class="inner-section">
                    <div class="inner-wrapper">
                        <span class="nav-toggle" onclick="innerSliderToggle()">
                            <a class="toggle-icon" href="#">&lt;</a>
                        </span>
                        <div class="header">
                            <div class="title">Content</div>
                            <div class="whatsapp-no-input">
                                <input type="text" class="form-control" id="whatsapp_number" placeholder="Type Your WhatsApp Number..." name="whatsapp_number" value="{{ json_decode($widget->settings)[0]->whatsapp_number }}" onchange="myFunction()" required>
                                <label for="whatsapp_number" class="form-label">Make sure to remove [+] or [00]
                                    before your phone number and add your conuntry code</label>
                            </div>
                        </div>
                        <div class="body">
                            <div class="accordion accordion-flush" id="whatsappContentAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="chatBubble">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#chatBubbleCollapse"
                                            aria-expanded="false" aria-controls="chatBubbleCollapse">
                                            Chat Bubble
                                        </button>
                                    </h2>
                                    <div id="chatBubbleCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="chatBubble" data-bs-parent="#whatsappContentAccordion">
                                        <div class="accordion-body">
                                            <div class="title">Bubble Icone</div>
                                            <div class="row gx-0 gy-4 row-cols-3">
                                                <div class="col">
                                                    <a href="#" class="bubble-icone active">
                                                        <img src="{{url('images/resources/baseline-chat-24px.svg')}}"
                                                            alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/baseline-email-24px.svg')}}"
                                                            alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/baseline-forum-24px.svg')}}"
                                                            alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/chat (4).svg')}}" alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/whatsapp-1.svg')}}"
                                                            alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/chat (3).svg')}}" alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/baseline-near_me-24px.svg')}}"
                                                            alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/paper-plane.svg')}}"
                                                            alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/send-message.svg')}}"
                                                            alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/dm.svg')}}" alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/comment.svg')}}" alt="bubble-icone">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="bubble-icone">
                                                        <img src="{{url('images/resources/baseline-date_range-24px.svg')}}"
                                                            alt="bubble-icone">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="chatHeader">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#chatHeaderCollapse"
                                            aria-expanded="false" aria-controls="chatHeaderCollapse">
                                            Chat Header
                                        </button>
                                    </h2>
                                    <div id="chatHeaderCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="chatHeader" data-bs-parent="#whatsappContentAccordion">
                                        <div class="accordion-body">
                                            <div class="picture-block">
                                                <div class="header">
                                                    <div class="title">Picture</div>
                                                    <div class="edit-icons">
                                                        <a href="#">
                                                            <img src="{{url('images/resources/baseline-create-24px.svg')}}"
                                                                alt="">
                                                        </a>
                                                        <a href="#">
                                                            <img src="{{url('images/resources/baseline-delete_outline-24px.svg')}}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <div class="file-uploader">
                                                        <img src="{{url('images/image (68).png')}}" alt="">
                                                        <div class="title">Drop your image here, or
                                                            <span>brows</span>
                                                        </div>
                                                        <div class="sub-title">Supports: JPG, JPEG, PNG
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <input type="text" class="form-control" id="pictureInput"
                                                        placeholder="Type you name here...">
                                                </div>
                                            </div>

                                            <div class="caption-block">
                                                <div class="header">
                                                    <div class="title">Caption</div>
                                                    <div class="edit-icons">
                                                        <a href="#">
                                                            <img src="{{url('images/resources/baseline-create-24px.svg')}}"
                                                                alt="">
                                                        </a>
                                                        <a href="#">
                                                            <img src="{{url('images/resources/baseline-delete_outline-24px.svg')}}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <fieldset id="captionOptions" class="row g-0">
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="caption" id="caption_1" checked>
                                                                <label class="form-check-label" for="caption_1">
                                                                    Typically replies instantly
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="caption" id="caption_2">
                                                                <label class="form-check-label" for="caption_2">
                                                                    Typically replies in minutes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="caption" id="caption_3">
                                                                <label class="form-check-label" for="caption_3">
                                                                    Typically replies within an hour
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="caption" id="caption_4">
                                                                <label class="form-check-label" for="caption_4">
                                                                    Typically replies in a few hours
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="caption" id="caption_5" value="custom">
                                                                <label class="form-check-label" for="caption_5">
                                                                    Custom caption
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="custom-caption-block">
                                                        <textarea class="form-control" id="customCaption"
                                                            placeholder="Type your custom caption"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="welcomeMessage">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#welcomeMessageCollapse"
                                            aria-expanded="false" aria-controls="welcomeMessageCollapse">
                                            Welcome Message
                                        </button>
                                    </h2>
                                    <div id="welcomeMessageCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="welcomeMessage" data-bs-parent="#whatsappContentAccordion">
                                        <div class="accordion-body">
                                            <textarea class="form-control" id="welcomeMsg"
                                                placeholder="Type your welcome message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="chatButton">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#chatButtonCollapse"
                                            aria-expanded="false" aria-controls="chatButtonCollapse">
                                            Start Chat Button
                                        </button>
                                    </h2>
                                    <div id="chatButtonCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="chatButton" data-bs-parent="#whatsappContentAccordion">
                                        <div class="accordion-body">
                                            <div class="chat-button-block">
                                                <form class="form-floating">
                                                    <input type="text" class="form-control" id="chatBtnTxt"
                                                        placeholder="Start Chat" value="Start Chat">
                                                    <label for="chatBtnTxt">Button Text</label>
                                                </form>
                                                <div class="form-check form-switch">
                                                    <label class="form-check-label" for="chatButtonVisibility">Show
                                                        Icone</label>
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="chatButtonVisibility" checked>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn-whatsapp"
                                onclick="innerSection('settings-block');navSwitcher('settingsNav')">Continue</button>
                        </div>
                    </div>
                </div>

                <div id="settings-block" class="inner-section">
                    <div class="inner-wrapper">
                        <span class="nav-toggle" onclick="innerSliderToggle()">
                            <a class="toggle-icon" href="#">&lt;</a>
                        </span>
                        <div class="header">
                            <div class="title">Settings</div>
                        </div>
                        <div class="body">
                            <div class="accordion accordion-flush" id="whatsappSettingsAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="position">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#positionCollapse"
                                            aria-expanded="false" aria-controls="positionCollapse">
                                            Position
                                        </button>
                                    </h2>
                                    <div id="positionCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="position" data-bs-parent="#whatsappSettingsAccordion">
                                        <div class="accordion-body">
                                            <fieldset id="positionOptions" class="row g-0">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="position"
                                                            id="position_1" checked>
                                                        <label class="form-check-label" for="position_1">
                                                            Floating Bubble
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="position"
                                                            id="position_2">
                                                        <label class="form-check-label" for="position_2">
                                                            Embed Bubble
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="position"
                                                            id="position_3">
                                                        <label class="form-check-label" for="position_3">
                                                            Embed Chat Window
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="displaySettings">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#displaySettingsCollapse"
                                            aria-expanded="false" aria-controls="displaySettingsCollapse">
                                            Chat Display Settings
                                        </button>
                                    </h2>
                                    <div id="displaySettingsCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="displaySettings"
                                        data-bs-parent="#whatsappSettingsAccordion">
                                        <div class="accordion-body">
                                            <div class="accordion accordion-flush" id="displaySettingsAccordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="pageSettings">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#pageSettingsCollapse"
                                                            aria-expanded="false"
                                                            aria-controls="pageSettingsCollapse">
                                                            Page
                                                        </button>
                                                    </h2>
                                                    <div id="pageSettingsCollapse"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="pageSettings"
                                                        data-bs-parent="#displaySettingsAccordion">
                                                        <div class="accordion-body">
                                                            <div class="title">Where to Display Chat</div>
                                                            <fieldset id="pageSettingsOptions" class="row g-0">
                                                                <div class="col">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="setting" id="setting_1" checked>
                                                                        <label class="form-check-label"
                                                                            for="setting_1">
                                                                            All Pages
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="setting" id="setting_2">
                                                                        <label class="form-check-label"
                                                                            for="setting_2">
                                                                            <span>Excluded Pages</span>
                                                                            <a href="#">+ Add Page</a>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="setting" id="setting_3">
                                                                        <label class="form-check-label"
                                                                            for="setting_3">
                                                                            <span>Specific Pages</span>
                                                                            <a href="#">+ Add Page</a>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <p class="tips">This setting is used in case you've
                                                                installed the chat to your website template, and
                                                                it's available on each page of your website.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="devicesSettings">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#devicesSettingsCollapse"
                                                            aria-expanded="false"
                                                            aria-controls="devicesSettingsCollapse">
                                                            Devices
                                                        </button>
                                                    </h2>
                                                    <div id="devicesSettingsCollapse"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="devicesSettings"
                                                        data-bs-parent="#displaySettingsAccordion">
                                                        <div class="accordion-body">
                                                            <div class="title">Where to Display Chat</div>
                                                            <fieldset id="devicesSettingsOptions">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="device_1" checked>
                                                                    <label class="form-check-label" for="device_1">
                                                                        Mobile Devices
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="device_2" checked>
                                                                    <label class="form-check-label" for="device_2">
                                                                        Desktop
                                                                    </label>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="visitorsSettings">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#visitorsStettingsCollapse"
                                                            aria-expanded="false"
                                                            aria-controls="visitorsStettingsCollapse">
                                                            Visitors
                                                        </button>
                                                    </h2>
                                                    <div id="visitorsStettingsCollapse"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="visitorsSettings"
                                                        data-bs-parent="#displaySettingsAccordion">
                                                        <div class="accordion-body">
                                                            <div class="title">Where to Display Chat</div>
                                                            <fieldset id="visitorsSettingsOptions" class="row g-0">
                                                                <div class="col">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="visitor" id="visitor_1" checked>
                                                                        <label class="form-check-label"
                                                                            for="visitor_1">
                                                                            All Visitors
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="visitor" id="visitor_2">
                                                                        <label class="form-check-label"
                                                                            for="visitor_2">
                                                                            New Visitors
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="visitor" id="visitor_3">
                                                                        <label class="form-check-label"
                                                                            for="visitor_3">
                                                                            Returning Visitors
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <p class="tips">Select the category of visitors you want
                                                                to display the chat for: all visitors, visitors who
                                                                have come to your website for the first time,
                                                                visitors who had been on your website before.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="timeSettings">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#timeSettingsCollapse"
                                                            aria-expanded="false"
                                                            aria-controls="timeSettingsCollapse">
                                                            Date & Time
                                                        </button>
                                                    </h2>
                                                    <div id="timeSettingsCollapse"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="timeSettings"
                                                        data-bs-parent="#displaySettingsAccordion">
                                                        <div class="accordion-body">
                                                            <div class="title">Where to Display Chat</div>
                                                            <fieldset id="timeSettingsOptions">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="day_1" checked>
                                                                    <label class="form-check-label" for="day_1">
                                                                        Monday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="day_2" checked>
                                                                    <label class="form-check-label" for="day_2">
                                                                        Tuesday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="day_3" checked>
                                                                    <label class="form-check-label" for="day_3">
                                                                        Wednessday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="day_4" checked>
                                                                    <label class="form-check-label" for="day_4">
                                                                        Thursday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="day_5" checked>
                                                                    <label class="form-check-label" for="day_5">
                                                                        Friday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="day_6" checked>
                                                                    <label class="form-check-label" for="day_6">
                                                                        Saturday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="day_7" checked>
                                                                    <label class="form-check-label" for="day_7">
                                                                        Sunday
                                                                    </label>
                                                                </div>
                                                            </fieldset>
                                                            <div class="form-check form-switch">
                                                                <label class="form-check-label"
                                                                    for="specificTimeSelector">Where to Display
                                                                    Chat</label>
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="specificTimeSelector" checked>
                                                            </div>
                                                            <div class="specific-time-block">
                                                                <div class="time-blocks">
                                                                    <label for="startTime" class="form-label">Start
                                                                        Time</label>
                                                                    <input type="text" class="form-control"
                                                                        id="startTime" value="09:00 AM">
                                                                </div>
                                                                <div class="time-blocks">
                                                                    <label for="endTime" class="form-label">End
                                                                        Time</label>
                                                                    <input type="text" class="form-control"
                                                                        id="endTime" value="09:00 PM">
                                                                </div>
                                                                <div class="time-blocks">
                                                                    <label for="timeZoneSelect"
                                                                        class="form-label">Time Zone</label>
                                                                    <select id="timeZoneSelect" name="timezone"
                                                                        class="form-select">
                                                                        <option value="-12">(UTC-12:00)
                                                                            International Date Line West
                                                                        </option>
                                                                        <option value="-11">(UTC-11:00)
                                                                            Coordinated Universal Time-11
                                                                        </option>
                                                                        <option value="-10">(UTC-10:00) Hawaii
                                                                        </option>
                                                                        <option value="-9">(UTC-09:00) Alaska
                                                                        </option>
                                                                        <option value="-7">(UTC-08:00) Baja
                                                                            California</option>
                                                                        <option value="-7">(UTC-07:00) Pacific
                                                                            Time (US &amp; Canada)</option>
                                                                        <option value="-8">(UTC-08:00) Pacific
                                                                            Time (US &amp; Canada)</option>
                                                                        <option value="-7">(UTC-07:00) Arizona
                                                                        </option>
                                                                        <option value="-6">(UTC-07:00)
                                                                            Chihuahua, La Paz, Mazatlan</option>
                                                                        <option value="-6">(UTC-07:00) Mountain
                                                                            Time (US &amp; Canada)</option>
                                                                        <option value="-6">(UTC-06:00) Central
                                                                            America</option>
                                                                        <option value="-5">(UTC-06:00) Central
                                                                            Time (US &amp; Canada)</option>
                                                                        <option value="-5">(UTC-06:00)
                                                                            Guadalajara, Mexico City, Monterrey
                                                                        </option>
                                                                        <option value="-6">(UTC-06:00)
                                                                            Saskatchewan</option>
                                                                        <option value="-5">(UTC-05:00) Bogota,
                                                                            Lima, Quito</option>
                                                                        <option value="-4">(UTC-05:00) Eastern
                                                                            Time (US &amp; Canada)</option>
                                                                        <option value="-4">(UTC-05:00) Indiana
                                                                            (East)</option>
                                                                        <option value="-4.5">(UTC-04:30) Caracas
                                                                        </option>
                                                                        <option value="-4">(UTC-04:00) Asuncion
                                                                        </option>
                                                                        <option value="-3">(UTC-04:00) Atlantic
                                                                            Time (Canada)</option>
                                                                        <option value="-4">(UTC-04:00) Cuiaba
                                                                        </option>
                                                                        <option value="-4">(UTC-04:00)
                                                                            Georgetown, La Paz, Manaus, San Juan
                                                                        </option>
                                                                        <option value="-4">(UTC-04:00) Santiago
                                                                        </option>
                                                                        <option value="-2.5">(UTC-03:30)
                                                                            Newfoundland</option>
                                                                        <option value="-3">(UTC-03:00) Brasilia
                                                                        </option>
                                                                        <option value="-3">(UTC-03:00) Buenos
                                                                            Aires</option>
                                                                        <option value="-3">(UTC-03:00) Cayenne,
                                                                            Fortaleza</option>
                                                                        <option value="-3">(UTC-03:00) Greenland
                                                                        </option>
                                                                        <option value="-3">(UTC-03:00)
                                                                            Montevideo</option>
                                                                        <option value="-3">(UTC-03:00) Salvador
                                                                        </option>
                                                                        <option value="-2">(UTC-02:00)
                                                                            Coordinated Universal Time-02
                                                                        </option>
                                                                        <option value="-1">(UTC-02:00)
                                                                            Mid-Atlantic - Old</option>
                                                                        <option value="0">(UTC-01:00) Azores
                                                                        </option>
                                                                        <option value="-1">(UTC-01:00) Cape
                                                                            Verde Is.</option>
                                                                        <option value="1">(UTC) Casablanca
                                                                        </option>
                                                                        <option value="0">(UTC) Coordinated
                                                                            Universal Time</option>
                                                                        <option value="0">(UTC) Edinburgh,
                                                                            London</option>
                                                                        <option value="1">(UTC+01:00) Edinburgh,
                                                                            London</option>
                                                                        <option value="1">(UTC) Dublin, Lisbon
                                                                        </option>
                                                                        <option value="0">(UTC) Monrovia,
                                                                            Reykjavik</option>
                                                                        <option value="2">(UTC+01:00) Amsterdam,
                                                                            Berlin, Bern, Rome, Stockholm,
                                                                            Vienna</option>
                                                                        <option value="2">(UTC+01:00) Belgrade,
                                                                            Bratislava, Budapest, Ljubljana,
                                                                            Prague</option>
                                                                        <option value="2">(UTC+01:00) Brussels,
                                                                            Copenhagen, Madrid, Paris</option>
                                                                        <option value="2">(UTC+01:00) Sarajevo,
                                                                            Skopje, Warsaw, Zagreb</option>
                                                                        <option value="1">(UTC+01:00) West
                                                                            Central Africa</option>
                                                                        <option value="1">(UTC+01:00) Windhoek
                                                                        </option>
                                                                        <option value="3">(UTC+02:00) Athens,
                                                                            Bucharest</option>
                                                                        <option value="3">(UTC+02:00) Beirut
                                                                        </option>
                                                                        <option value="2">(UTC+02:00) Cairo
                                                                        </option>
                                                                        <option value="3">(UTC+02:00) Damascus
                                                                        </option>
                                                                        <option value="3">(UTC+02:00) E. Europe
                                                                        </option>
                                                                        <option value="2">(UTC+02:00) Harare,
                                                                            Pretoria</option>
                                                                        <option value="3">(UTC+02:00) Helsinki,
                                                                            Kyiv, Riga, Sofia, Tallinn, Vilnius
                                                                        </option>
                                                                        <option value="3">(UTC+03:00) Istanbul
                                                                        </option>
                                                                        <option value="3">(UTC+02:00) Jerusalem
                                                                        </option>
                                                                        <option value="2">(UTC+02:00) Tripoli
                                                                        </option>
                                                                        <option value="3">(UTC+03:00) Amman
                                                                        </option>
                                                                        <option value="3">(UTC+03:00) Baghdad
                                                                        </option>
                                                                        <option value="3">(UTC+02:00)
                                                                            Kaliningrad</option>
                                                                        <option value="3">(UTC+03:00) Kuwait,
                                                                            Riyadh</option>
                                                                        <option value="3">(UTC+03:00) Nairobi
                                                                        </option>
                                                                        <option value="3">(UTC+03:00) Moscow,
                                                                            St. Petersburg, Volgograd, Minsk
                                                                        </option>
                                                                        <option value="4">(UTC+04:00) Samara,
                                                                            Ulyanovsk, Saratov</option>
                                                                        <option value="4.5">(UTC+03:30) Tehran
                                                                        </option>
                                                                        <option value="4">(UTC+04:00) Abu Dhabi,
                                                                            Muscat</option>
                                                                        <option value="5">(UTC+04:00) Baku
                                                                        </option>
                                                                        <option value="4">(UTC+04:00) Port Louis
                                                                        </option>
                                                                        <option value="4">(UTC+04:00) Tbilisi
                                                                        </option>
                                                                        <option value="4">(UTC+04:00) Yerevan
                                                                        </option>
                                                                        <option value="4.5">(UTC+04:30) Kabul
                                                                        </option>
                                                                        <option value="5">(UTC+05:00) Ashgabat,
                                                                            Tashkent</option>
                                                                        <option value="5">(UTC+05:00)
                                                                            Yekaterinburg</option>
                                                                        <option value="5">(UTC+05:00) Islamabad,
                                                                            Karachi</option>
                                                                        <option value="5.5">(UTC+05:30) Chennai,
                                                                            Kolkata, Mumbai, New Delhi</option>
                                                                        <option value="5.5">(UTC+05:30) Sri
                                                                            Jayawardenepura</option>
                                                                        <option value="5.75">(UTC+05:45)
                                                                            Kathmandu</option>
                                                                        <option value="6">(UTC+06:00) Nur-Sultan
                                                                            (Astana)</option>
                                                                        <option value="6">(UTC+06:00) Dhaka
                                                                        </option>
                                                                        <option value="6.5">(UTC+06:30) Yangon
                                                                            (Rangoon)</option>
                                                                        <option value="7">(UTC+07:00) Bangkok,
                                                                            Hanoi, Jakarta</option>
                                                                        <option value="7">(UTC+07:00)
                                                                            Novosibirsk</option>
                                                                        <option value="8">(UTC+08:00) Beijing,
                                                                            Chongqing, Hong Kong, Urumqi
                                                                        </option>
                                                                        <option value="8">(UTC+08:00)
                                                                            Krasnoyarsk</option>
                                                                        <option value="8">(UTC+08:00) Kuala
                                                                            Lumpur, Singapore</option>
                                                                        <option value="8">(UTC+08:00) Perth
                                                                        </option>
                                                                        <option value="8">(UTC+08:00) Taipei
                                                                        </option>
                                                                        <option value="8">(UTC+08:00)
                                                                            Ulaanbaatar</option>
                                                                        <option value="8">(UTC+08:00) Irkutsk
                                                                        </option>
                                                                        <option value="9">(UTC+09:00) Osaka,
                                                                            Sapporo, Tokyo</option>
                                                                        <option value="9">(UTC+09:00) Seoul
                                                                        </option>
                                                                        <option value="9.5">(UTC+09:30) Adelaide
                                                                        </option>
                                                                        <option value="9.5">(UTC+09:30) Darwin
                                                                        </option>
                                                                        <option value="10">(UTC+10:00) Brisbane
                                                                        </option>
                                                                        <option value="10">(UTC+10:00) Canberra,
                                                                            Melbourne, Sydney</option>
                                                                        <option value="10">(UTC+10:00) Guam,
                                                                            Port Moresby</option>
                                                                        <option value="10">(UTC+10:00) Hobart
                                                                        </option>
                                                                        <option value="9">(UTC+09:00) Yakutsk
                                                                        </option>
                                                                        <option value="11">(UTC+11:00) Solomon
                                                                            Is., New Caledonia</option>
                                                                        <option value="11">(UTC+11:00)
                                                                            Vladivostok</option>
                                                                        <option value="12">(UTC+12:00) Auckland,
                                                                            Wellington</option>
                                                                        <option value="12">(UTC+12:00)
                                                                            Coordinated Universal Time+12
                                                                        </option>
                                                                        <option value="12">(UTC+12:00) Fiji
                                                                        </option>
                                                                        <option value="12">(UTC+12:00) Magadan
                                                                        </option>
                                                                        <option value="13">(UTC+12:00)
                                                                            Petropavlovsk-Kamchatsky - Old
                                                                        </option>
                                                                        <option value="13">(UTC+13:00)
                                                                            Nuku'alofa</option>
                                                                        <option value="13">(UTC+13:00) Samoa
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="chatTriggers">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#chatTriggersCollapse"
                                            aria-expanded="false" aria-controls="chatTriggersCollapse">
                                            Open Chat Triggers
                                        </button>
                                    </h2>
                                    <div id="chatTriggersCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="chatTriggers" data-bs-parent="#whatsappSettingsAccordion">
                                        <div class="accordion-body">
                                            <div class="specific-time-block">
                                                <div class="time-blocks">
                                                    <label for="timeOnPage" class="form-label">Time on page</label>
                                                    <input type="text" class="form-control" id="timeOnPage"
                                                        value="0s">
                                                </div>
                                                <div class="time-blocks">
                                                    <label for="timeOnSite" class="form-label">Time on site</label>
                                                    <input type="text" class="form-control" id="timeOnSite"
                                                        value="0s">
                                                </div>
                                                <div class="time-blocks">
                                                    <label for="scrollPosition" class="form-label">Scroll
                                                        Position</label>
                                                    <input type="text" class="form-control" id="scrollPosition"
                                                        value="0%">
                                                </div>
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label" for="specificTimeSelector">Exit
                                                    Internet</label>
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="specificTimeSelector" checked>
                                            </div>
                                            <p class="tips">Here you can set the type of user behavior that will
                                                open the chat window automatically.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="notifications">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#notificationsCollapse"
                                            aria-expanded="false" aria-controls="notificationsCollapse">
                                            Notifications
                                        </button>
                                    </h2>
                                    <div id="notificationsCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="notifications" data-bs-parent="#whatsappSettingsAccordion">
                                        <div class="accordion-body">
                                            <div class="title">Notifications</div>
                                            <fieldset id="notificationSettingsOptions">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="bubbleBadge"
                                                        checked>
                                                    <label class="form-check-label" for="bubbleBadge">
                                                        Bubble notification badge
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="tabNotification" checked>
                                                    <label class="form-check-label" for="tabNotification">
                                                        Show notification in browser tab tille
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn-whatsapp"
                                onclick="innerSection('appearance-block');navSwitcher('appearanceNav')">Continue</button>
                        </div>
                    </div>
                </div>

                <div id="appearance-block" class="inner-section">
                    <div class="inner-wrapper">
                        <span class="nav-toggle" onclick="innerSliderToggle()">
                            <a class="toggle-icon" href="#">&lt;</a>
                        </span>
                        <div class="header">
                            <div class="title">Appearance</div>
                        </div>
                        <div class="body">
                            <div class="accordion accordion-flush" id="whatsappAppearanceAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="colors">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#colorsCollapse"
                                            aria-expanded="false" aria-controls="colorsCollapse">
                                            Colors
                                        </button>
                                    </h2>
                                    <div id="colorsCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="colors" data-bs-parent="#whatsappAppearanceAccordion">
                                        <div class="accordion-body">
                                            <fieldset id="colorPickers">
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="bubbleBackgroundColor">Bubble Background Color</label>
                                                    <input class="form-check-input" type="color" value="#00FF9D"
                                                        id="bubbleBackgroundColor">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="bubbleIconColor">Bubble
                                                        Icon Color</label>
                                                    <input class="form-check-input" type="color" value="#FF0000"
                                                        id="bubbleIconColor">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="buttonColor">Button
                                                        Color</label>
                                                    <input class="form-check-input" type="color" value="#AFFF00"
                                                        id="buttonColor">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="headerBackgroundColor">Header Background Color</label>
                                                    <input class="form-check-input" type="color" value="#AFFF00"
                                                        id="headerBackgroundColor">
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bubbleAnimation">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#bubbleAnimationCollapse"
                                            aria-expanded="false" aria-controls="bubbleAnimationCollapse">
                                            Bubble Animation
                                        </button>
                                    </h2>
                                    <div id="bubbleAnimationCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="bubbleAnimation"
                                        data-bs-parent="#whatsappAppearanceAccordion">
                                        <div class="accordion-body">
                                            <div class="form-check form-switch">
                                                <label class="form-check-label" for="enableAnimation">Enable
                                                    Animation</label>
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="enableAnimation" checked>
                                            </div>
                                            <div class="sroll-position">
                                                <label for="bubblePosition" class="form-label">Scroll
                                                    Position</label>
                                                <input type="text" class="form-control" id="bubblePosition"
                                                    value="0%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="startChatButton">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#startChatButtonCollapse"
                                            aria-expanded="false" aria-controls="startChatButtonCollapse">
                                            Start Chat Button
                                        </button>
                                    </h2>
                                    <div id="startChatButtonCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="startChatButton"
                                        data-bs-parent="#whatsappAppearanceAccordion">
                                        <div class="accordion-body">
                                            <div class="title">Button Corner Radius</div>
                                            <div class="chat-button-radius">
                                                <label for="chatBtnRadius">
                                                    <span class="name">Radius</span>
                                                    <span class="value">43</span>
                                                </label>
                                                <input type="range" min="0" max="48" value="43" id="chatBtnRadius">
                                                <div class="range">
                                                    <span>0</span>
                                                    <span>48</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="customCss">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#customCssCollapse"
                                            aria-expanded="false" aria-controls="customCssCollapse">
                                            Custom CSS
                                        </button>
                                    </h2>
                                    <div id="customCssCollapse" class="accordion-collapse collapse"
                                        aria-labelledby="customCss" data-bs-parent="#whatsappAppearanceAccordion">
                                        <div class="accordion-body">
                                            <textarea class="form-control" id="customStyles"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <span class="footer-text">Like the Results? Try on your website!</span>
                            <button class="btn-whatsapp">Add to Website</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="body-section">
        <div class="row g-0">
            <div class="nav-bar px-4" id="navBar">
                <div class="row g-0 align-items-center justify-content-lg-between flex-lg-row flex-column-reverse">
                    <div class="col-auto ms-lg-0 ms-auto">
                        <div class="property-block">
                            <ul class="navbar-nav">
                                <li class="nav-item border-right dropdown">
                                    <a class="nav-link" href="#" id="propertyDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="property">
                                            <div class="image">
                                                <img src="{{url('images/Tallentor.png')}}" alt="propery-image">
                                            </div>
                                            <div class="content">
                                                <h6 class="site-name">Website Name</h6>
                                                <span class="site-url">https://tallentor.com/</span>
                                            </div>
                                            <div class="dropdown-icon">
                                                <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="propertyDropdown">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="property">
                                                    <div class="image">
                                                        <img src="{{url('images/Tallentor.png')}}" alt="propery-image">
                                                    </div>
                                                    <div class="content">
                                                        <h6 class="site-name">Website Name</h6>
                                                        <span class="site-url">https://tallentor.com/</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="property">
                                                    <div class="image">
                                                        <img src="{{url('images/Tallentor.png')}}" alt="propery-image">
                                                    </div>
                                                    <div class="content">
                                                        <h6 class="site-name">Website Name</h6>
                                                        <span class="site-url">https://tallentor.com/</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link add-btn bi bi-plus-square-fill" href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto ms-lg-0 ms-auto">
                        <div class="profile-block">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link notification-bell bi bi-bell" href="#"></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="profileDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="profile">
                                            <div class="image">
                                                <img src="{{url('images/profile.png')}}" alt="profile-picture">
                                            </div>
                                            <div class="name">John</div>
                                            <div class="dropdown-icon">
                                                <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                        <li><a class="dropdown-item" href="#">Preference</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-0">
            <div class="section-content">
                <div class="section-container">
                    <!-- Content goes here -->

                    <div class="row">
                        <div class="col-5">

                        </div>
                        <div class="col-7">                        
                        
                            <div class="mt-4">
                                <iframe id="incorme" src="{{route('frontend.user.user_whatsapp_chat_preview',$widget->id)}}" frameborder="0" style="width: 100%;height: 610px;"></iframe>
                            </div>
      

                        </div>
                    </div>

                   

                    <div class="button-block">
                        <div class="btn cancel"><a href="{{route('frontend.user.project.chat',$project->id)}}" style="text-decoration:none; color:#212529; font-size:14px;">Cancel</a></div>
                        <!-- <div class="btn apply">Apply</div> -->
                        <input type="hidden" id="hidden_id" name="hidden_id" value="{{ $widget->id }}"/>
                        <div class="btn save">Save</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection



@push('after-scripts')

<script src="{{url('js/widget_settings.js')}}"></script>

    <script>
        $(document).ready(function() {

            let bubble_icon = <?php echo json_encode (json_decode($widget->settings)[0]->bubble_icon ) ?>

            $('#bubble_icon option').each(function(i){
                if($(this).val() == bubble_icon) {
                    $(this).attr('selected', 'selected');
                }
            });

            let timezone = <?php echo json_encode (json_decode($widget->settings)[0]->timezone ) ?>

            $('#timezone option').each(function(i){
                if($(this).val() == timezone) {
                    $(this).attr('selected', 'selected');
                }
            });


        });       
    </script>
   
   <script>

       function template_layout_chage() {
           template_layout = $('#template_layout').val();
           hidden_id = $('#hidden_id').val();
           $.post("{{url('/')}}/api/theme_changers",
               {
                   'template_layout': template_layout,
                   'widget_id' : hidden_id

               },function(data, status){
                //    console.log(data);
                   decoded_json = JSON.parse(data);
                //    console.log(decoded_json[0]);

                    $('#bubble_background_color').val(decoded_json[0].bubble_background_color);
                    $('#bubble_icon_color').val(decoded_json[0].bubble_icon_color);
                    $('#button_color').val(decoded_json[0].button_color);
                    $('#header_background_color').val(decoded_json[0].header_background_color);
                    $('#button_corner_radius').val(decoded_json[0].button_corner_radius);
                    $('#custom_css').val(decoded_json[0].custom_css);
                    $('#template_layout').val(decoded_json[0].template_layout);
                    
                   document.getElementById('incorme').contentWindow.location.reload();

               }
           );

       }

        function myFunction(){

            template_layout = $('#template_layout').val();
            whatsapp_number = $('#whatsapp_number').val();
            bubble_icon = $('#bubble_icon').val();
            chat_header = $('#chat_header').val();
            caption = $('#caption').val();
            image = $('#image').val();
            welcome_message = $('#welcome_message').val();
            // console.log(welcome_message);

            start_chat = $('#start_chat').val();
            show_icon = $('#show_icon').val();
            position = $('#position').val();
            alignment = $('#alignment').val();            
            where_display_chat = $('#where_display_chat').val();
          
            if($('#desktop').is(':checked')) {
                desktop = $("#desktop").val();
            }
            else{
                desktop = null;               
            }
            if($('#mobile_device').is(':checked')) {
                mobile_device = $("#mobile_device").val();
            }
            else{
                mobile_device = null;                
            }

           
            if($('#all_visitors').is(':checked')) {
                visitors = $("#all_visitors").val();
            }
            if($('#new_visitors').is(':checked')) {
                visitors = $("#new_visitors").val();
            }
            if($('#refurm_visitors').is(':checked')) {
                visitors = $("#refurm_visitors").val();
            }



            if($('#monday').is(':checked')) {
                monday = $("#monday").val();
            }
            else{
                monday = null;               
            }
            if($('#tuesday').is(':checked')) {
                tuesday = $("#tuesday").val();
            }
            else{
                tuesday = null;                
            }
            if($('#wednesday').is(':checked')) {
                wednesday = $("#wednesday").val();
            }
            else{
                wednesday = null;                
            }
            if($('#thursday').is(':checked')) {
                thursday = $("#thursday").val();
            }
            else{
                thursday = null;                
            }
            if($('#friday').is(':checked')) {
                friday = $("#friday").val();
            }
            else{
                friday = null;                
            }
            if($('#saturday').is(':checked')) {
                saturday = $("#saturday").val();
            }
            else{
                saturday = null;                
            }
            if($('#sunday').is(':checked')) {
                sunday = $("#sunday").val();
            }
            else{
                sunday = null;                
            }

            start_time = $('#start_time').val();
            end_time = $('#end_time').val();
            timezone = $('#timezone').val();
            time_on_page = $('#time_on_page').val();
            time_on_site = $('#time_on_site').val();
            scroll_position = $('#scroll_position').val();
            
            if($('#exit_internet').is(':checked')) {
                exit_internet = $("#exit_internet").val();
            }
            else{
                exit_internet = null;
            }

            if($('#bubble_notification_bage').is(':checked')) {
                bubble_notification_bage = $("#bubble_notification_bage").val();
            }
            else{
                bubble_notification_bage = null;                
            }
            if($('#show_notification_in_tab_tile').is(':checked')) {
                show_notification_in_tab_tile = $("#show_notification_in_tab_tile").val();
            }
            else{
                show_notification_in_tab_tile = null;                
            }
            

            bubble_background_color = $('#bubble_background_color').val();
            bubble_icon_color = $('#bubble_icon_color').val();
            button_color = $('#button_color').val();
            header_background_color = $('#header_background_color').val();
            

            if($('#enabled_animation').is(':checked')) {
                enabled_animation = $("#enabled_animation").val();
            }
            else{
                enabled_animation = null;
            }

            scroll_position_appearance = $('#scroll_position_appearance').val();
            button_corner_radius = $('#button_corner_radius').val();
            custom_css = $('#custom_css').val();
            hidden_id = $('#hidden_id').val();
            

            $.post("{{url('/')}}/api/api_chat",
                {
                    template_layout: template_layout,
                    whatsapp_number: whatsapp_number,
                    bubble_icon: bubble_icon,
                    chat_header: chat_header,
                    caption: caption,
                    image: image,
                    welcome_message: welcome_message,
                    start_chat: start_chat,
                    show_icon: show_icon,
                    position: position,
                    alignment: alignment,                    
                    where_display_chat: where_display_chat,
                    desktop: desktop,
                    mobile_device: mobile_device,
                    visitors: visitors,
                    monday: monday,
                    tuesday: tuesday,
                    wednesday: wednesday,
                    thursday: thursday,
                    friday: friday,
                    saturday: saturday,
                    sunday: sunday,
                    start_time: start_time,
                    end_time: end_time,
                    timezone: timezone,
                    time_on_page: time_on_page,
                    time_on_site: time_on_site,
                    scroll_position: scroll_position,
                    exit_internet: exit_internet,
                    bubble_notification_bage: bubble_notification_bage,
                    show_notification_in_tab_tile: show_notification_in_tab_tile,
                    bubble_background_color: bubble_background_color,
                    bubble_icon_color: bubble_icon_color,
                    button_color: button_color,
                    header_background_color: header_background_color,
                    enabled_animation: enabled_animation,
                    scroll_position_appearance: scroll_position_appearance,
                    button_corner_radius: button_corner_radius,
                    custom_css: custom_css,
                    hidden_id: hidden_id,
                },
            );

            document.getElementById('incorme').contentWindow.location.reload();

        }
    </script>

@endpush