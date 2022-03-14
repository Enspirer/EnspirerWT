@extends('frontend.layouts.widget_settings_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/widget_settings.css')}}">


<form action="{{route('frontend.user.user_widget.update')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

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
                    <a onclick="device('desktop')" href="#"><img src="{{url('images/resources/baseline-desktop_mac-24px.svg')}}" alt="devices"></a>
                    <a onclick="device('tablet')" href="#"><img src="{{url('images/resources/Group 125.svg')}}" alt="devices"></a>
                    <a onclick="device('mobile')" href="#"><img src="{{url('images/resources/baseline-smartphone-24px.svg')}}" alt="devices"></a>
                </div>
            </div>
        </div>
        <div id="sideNavInner">
            <div class="row g-0">

                <div id="template-block" class="inner-section">
                    <div class="inner-wrapper">
                        <div class="header">
                            <div class="title">Select a template to start</div>
                        </div>
                        <div class="body">
                            <div class="templates">
                                <div class="row g-4 row-cols-2">

                                    @if(count($whatsapp_chat) != 0)
                                        @foreach($whatsapp_chat as $key =>$themes)
                                            @if($themes->id == json_decode($widget->settings)[0]->template_layout)
                                                <div class="col">
                                                    <div class="temps active" name="{{$themes->id}}">
                                                        <div class="checked-sign">
                                                            <i class="bi bi-check2"></i>
                                                        </div>
                                                        <a href="#">
                                                            <img src="{{uploaded_asset($themes->image)}}" alt="temp-image" class="temp-image">
                                                        </a>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col">
                                                    <div class="temps" name="{{$themes->id}}">
                                                        <div class="checked-sign">
                                                            <i class="bi bi-check2"></i>
                                                        </div>
                                                        <a href="#">
                                                            <img src="{{uploaded_asset($themes->image)}}" alt="temp-image" class="temp-image">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif                                            
                                        @endforeach
                                    @endif


                                    
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <a href="#" class="btn-whatsapp"
                                onclick="innerSection('content-block');navSwitcher('contentNav')">Continue</a>
                                <div class="button-block">
                        <div class="btn cancel"><a href="{{route('frontend.user.project.chat',$widget->project_id)}}" style="text-decoration:none; color:#212529; font-size:14px;">Cancel</a></div>
                        <!-- <div class="btn apply">Apply</div> -->
                        <input type="hidden" id="hidden_id" name="hidden_id" value="{{ $widget->id }}"/>
                        <input type="hidden" id="hidden_template_id" name="hidden_template_id" value="{{ json_decode($widget->settings)[0]->template_layout }}"/>
                        
                        <!-- <button type="submit" class="btn save">Save</button> -->
                    </div>
                        </div>
                    </div>
                </div>

                <div id="content-block" class="inner-section">
                    <div class="inner-wrapper">
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
                                            <div class="row gx-1 gy-4 row-cols-3">
                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'chat-left-text-fill')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('chat-left-text-fill')" name="chat-left-text-fill" class="bubble-icone active">
                                                            <img onchange="myFunction('chat-left-text-fill')" id="chat-left-text-fill" src="{{url('images/resources/baseline-chat-24px.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('chat-left-text-fill')" name="chat-left-text-fill" class="bubble-icone">
                                                            <img onchange="myFunction('chat-left-text-fill')" id="chat-left-text-fill" src="{{url('images/resources/baseline-chat-24px.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'envelope-fill')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('envelope-fill')" name="envelope-fill" class="bubble-icone active">
                                                            <img onchange="myFunction('envelope-fill')" id="envelope-fill" src="{{url('images/resources/baseline-email-24px.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('envelope-fill')" name="envelope-fill" class="bubble-icone">
                                                            <img onchange="myFunction('envelope-fill')" id="envelope-fill" src="{{url('images/resources/baseline-email-24px.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'baseline_forum')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('baseline_forum')" name="baseline_forum" class="bubble-icone active">
                                                            <img onchange="myFunction('baseline_forum')" id="baseline_forum" src="{{url('images/resources/baseline-forum-24px.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                   <div class="col">
                                                        <a href="#" onClick="myFunction('baseline_forum')" name="baseline_forum" class="bubble-icone">
                                                            <img onchange="myFunction('baseline_forum')" id="baseline_forum" src="{{url('images/resources/baseline-forum-24px.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'chat-dots-fill')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('chat-dots-fill')" name="chat-dots-fill" class="bubble-icone active">
                                                            <img onchange="myFunction('chat-dots-fill')" id="chat-dots-fill" src="{{url('images/resources/chat (4).svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                  <div class="col">
                                                        <a href="#" onClick="myFunction('chat-dots-fill')" name="chat-dots-fill" class="bubble-icone">
                                                            <img onchange="myFunction('chat-dots-fill')" id="chat-dots-fill" src="{{url('images/resources/chat (4).svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'whatsapp')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('whatsapp')" name="whatsapp" class="bubble-icone active">
                                                            <img onchange="myFunction('whatsapp')" id="whatsapp" src="{{url('images/resources/whatsapp-1.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('whatsapp')" name="whatsapp" class="bubble-icone">
                                                            <img onchange="myFunction('whatsapp')" id="whatsapp" src="{{url('images/resources/whatsapp-1.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'two_chat')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('two_chat')" name="two_chat" class="bubble-icone active">
                                                            <img onchange="myFunction('two_chat')" id="two_chat" src="{{url('images/resources/chat (3).svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('two_chat')" name="two_chat" class="bubble-icone">
                                                            <img onchange="myFunction('two_chat')" id="two_chat" src="{{url('images/resources/chat (3).svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'cursor-fill')
                                                     <div class="col">
                                                        <a href="#" onClick="myFunction('cursor-fill')" name="cursor-fill" class="bubble-icone active">
                                                            <img onchange="myFunction('cursor-fill')" id="cursor-fill" src="{{url('images/resources/baseline-near_me-24px.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                     <div class="col">
                                                        <a href="#" onClick="myFunction('cursor-fill')" name="cursor-fill" class="bubble-icone">
                                                            <img onchange="myFunction('cursor-fill')" id="cursor-fill" src="{{url('images/resources/baseline-near_me-24px.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'send-fill')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('send-fill')" name="send-fill" class="bubble-icone active">
                                                            <img onchange="myFunction('send-fill')" id="send-fill" src="{{url('images/resources/paper-plane.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('send-fill')" name="send-fill" class="bubble-icone">
                                                            <img onchange="myFunction('send-fill')" id="send-fill" src="{{url('images/resources/paper-plane.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'caret-right-fill')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('caret-right-fill')" name="caret-right-fill" class="bubble-icone active">
                                                            <img onchange="myFunction('caret-right-fill')" id="caret-right-fill" src="{{url('images/resources/send-message.svg')}}"
                                                                alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('caret-right-fill')" name="caret-right-fill" class="bubble-icone">
                                                            <img onchange="myFunction('caret-right-fill')" id="caret-right-fill" src="{{url('images/resources/send-message.svg')}}"
                                                                alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif
                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'send')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('send')" name="send" class="bubble-icone active">
                                                            <img onchange="myFunction('send')" id="send" src="{{url('images/resources/dm.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                     <div class="col">
                                                        <a href="#" onClick="myFunction('send')" name="send" class="bubble-icone">
                                                            <img onchange="myFunction('send')" id="send" src="{{url('images/resources/dm.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'chat-square-text-fill')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('chat-square-text-fill')" name="chat-square-text-fill" class="bubble-icone active">
                                                            <img onchange="myFunction('chat-square-text-fill')" id="chat-square-text-fill" src="{{url('images/resources/comment.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('chat-square-text-fill')" name="chat-square-text-fill" class="bubble-icone">
                                                            <img onchange="myFunction('chat-square-text-fill')" id="chat-square-text-fill" src="{{url('images/resources/comment.svg')}}" alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif

                                                @if(json_decode($widget->settings)[0]->bubble_icon == 'calendar2')
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('calendar2')" name="calendar2" class="bubble-icone active">
                                                            <img onchange="myFunction('calendar2')" id="calendar2" src="{{url('images/resources/baseline-date_range-24px.svg')}}"
                                                                alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="col">
                                                        <a href="#" onClick="myFunction('calendar2')" name="calendar2" class="bubble-icone">
                                                            <img onchange="myFunction('calendar2')" id="calendar2" src="{{url('images/resources/baseline-date_range-24px.svg')}}"
                                                                alt="bubble-icone">
                                                        </a>
                                                    </div>
                                                @endif
                                                
                                                
                                                
                                                
                                                
                                               
                                                
                                                
                                               
                                               
                                                
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
                                                <!-- <div class="body">
                                                    <div class="file-uploader">
                                                        <img src="{{url('images/image (68).png')}}" alt="">
                                                        <div class="title">Drop your image here, or
                                                            <span>brows</span>
                                                        </div>
                                                        <div class="sub-title">Supports: JPG, JPEG, PNG
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <div class="form-group mt-3">                                                    
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                                        </div>
                                                        <div class="form-control file-amount">Choose File</div>
                                                        <input type="hidden" onchange="myFunction()" id="image" name="image" value="{{ json_decode($widget->settings)[0]->image }}" class="selected-files" >
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div> 
                                                <div onClick="myFunction()" class="col-12 btn rounded-pill text-light px-4 mt-3 mb-4 btn-success">Upload Image</div>


                                                <div class="footer">
                                                    <input type="text" id="agent_name" class="form-control" name="agent_name" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->agent_name }}" required placeholder="Type you name here...">
                                                </div>

                                                <div class="footer">
                                                    <label for="chat_header" class="mb-2">Chat Header</label>
                                                    <input type="text" id="chat_header" class="form-control" name="chat_header" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->chat_header }}" required placeholder="Type Chat Header here...">
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
                                                                <input class="form-check-input" type="radio" name="caption" id="caption_1" onchange="myFunction()" value="Typically replies instantly" {{ json_decode($widget->settings)[0]->caption == 'Typically replies instantly' ? "checked" : "" }}>
                                                                <label class="form-check-label" for="caption_1">Typically replies instantly</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="caption" id="caption_2" onchange="myFunction()" value="Typically replies in minutes" {{ json_decode($widget->settings)[0]->caption == 'Typically replies in minutes' ? "checked" : "" }}>
                                                                <label class="form-check-label" for="caption_2">Typically replies in minutes</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="caption" id="caption_3" onchange="myFunction()" value="Typically replies within an hour" {{ json_decode($widget->settings)[0]->caption == 'Typically replies within an hour' ? "checked" : "" }}>
                                                                <label class="form-check-label" for="caption_3">Typically replies within an hour</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="caption" id="caption_4" onchange="myFunction()" value="Typically replies in a few hours" {{ json_decode($widget->settings)[0]->caption == 'Typically replies in a few hours' ? "checked" : "" }}>
                                                                <label class="form-check-label" for="caption_4">Typically replies in a few hours</label>
                                                            </div>
                                                            @if(json_decode($widget->settings)[0]->caption != 'Typically replies instantly')
                                                                @if(json_decode($widget->settings)[0]->caption != 'Typically replies in minutes')
                                                                    @if(json_decode($widget->settings)[0]->caption != 'Typically replies within an hour')
                                                                        @if(json_decode($widget->settings)[0]->caption != 'Typically replies in a few hours')

                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="caption" id="caption_5" onchange="myFunction()" value="custom" checked>
                                                                                <label class="form-check-label" for="caption_5">Custom caption</label>
                                                                            </div>
                                                                        @else
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="caption" id="caption_5" onchange="myFunction()" value="custom" >
                                                                                <label class="form-check-label" for="caption_5">Custom caption</label>
                                                                            </div>
                                                                            
                                                                        @endif
                                                                    @else
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="caption" id="caption_5" onchange="myFunction()" value="custom" >
                                                                            <label class="form-check-label" for="caption_5">Custom caption</label>
                                                                        </div>
                                                                    @endif
                                                                @else
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="caption" id="caption_5" onchange="myFunction()" value="custom" >
                                                                        <label class="form-check-label" for="caption_5">Custom caption</label>
                                                                    </div>
                                                                @endif
                                                            @else
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="caption" id="caption_5" onchange="myFunction()" value="custom" >
                                                                    <label class="form-check-label" for="caption_5">Custom caption</label>
                                                                </div>
                                                            @endif
                                                            
                                                        </div>
                                                    </fieldset>
                                                    <div class="custom-caption-block">
                                                        <textarea class="form-control" id="customCaption" onchange="myFunction()" placeholder="Type your welcome message">{{ json_decode($widget->settings)[0]->caption }}</textarea>
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
                                            <textarea id="welcome_message" class="form-control" name="welcome_message" rows="4" onchange="myFunction()" placeholder="Type your welcome message">{{ json_decode($widget->settings)[0]->welcome_message }}</textarea>
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
                                                <div class="form-floating">
                                                    <input type="text" id="btn_text" class="form-control" name="btn_text" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->btn_text }}" required>
                                                    <label for="btn_text">Button Text</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <label class="form-check-label" for="start_chat">Start Icon</label>
                                                    @if(json_decode($widget->settings)[0]->start_chat == 'on')
                                                        <input type="checkbox" class="form-check-input" name="start_chat" id="start_chat" onchange="myFunction()" checked>
                                                    @else
                                                        <input type="checkbox" class="form-check-input" name="start_chat" id="start_chat" onchange="myFunction()">
                                                    @endif
                                                </div>
                                                <div class="form-check form-switch">
                                                    <label class="form-check-label" for="chatButtonVisibility">Show Icon</label>
                                                    @if(json_decode($widget->settings)[0]->show_icon == 'on')
                                                        <input type="checkbox" class="form-check-input" name="show_icon" id="show_icon" onchange="myFunction()" checked>
                                                    @else
                                                        <input type="checkbox" class="form-check-input" name="show_icon" id="show_icon" onchange="myFunction()">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <a href="#" class="btn-whatsapp"
                                onclick="innerSection('settings-block');navSwitcher('settingsNav')">Continue</a>
                                <div class="button-block">
                        <div class="btn cancel"><a href="{{route('frontend.user.project.chat',$widget->project_id)}}" style="text-decoration:none; color:#212529; font-size:14px;">Cancel</a></div>
                        <!-- <div class="btn apply">Apply</div> -->
                        <input type="hidden" id="hidden_id" name="hidden_id" value="{{ $widget->id }}"/>
                        <input type="hidden" id="hidden_template_id" name="hidden_template_id" value="{{ json_decode($widget->settings)[0]->template_layout }}"/>
                        
                        <!-- <button type="submit" class="btn save">Save</button> -->
                    </div>
                        </div>
                    </div>
                </div>

                <div id="settings-block" class="inner-section">
                    <div class="inner-wrapper">
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
                                                        <input class="form-check-input" type="radio" name="position" id="floating_bubble" onchange="myFunction()" value="Floating Bubble" {{ json_decode($widget->settings)[0]->position == 'Floating Bubble' ? "checked" : "" }}>
                                                        <label class="form-check-label" for="floating_bubble">Floating Bubble</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="position" id="embed_bubble" onchange="myFunction()" value="Embed Bubble" {{ json_decode($widget->settings)[0]->position == 'Embed Bubble' ? "checked" : "" }}>
                                                        <label class="form-check-label" for="embed_bubble">Embed Bubble</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="position" id="embed_chat_window" onchange="myFunction()" value="Embed Chat Window" {{ json_decode($widget->settings)[0]->position == 'Embed Chat Window' ? "checked" : "" }}>
                                                        <label class="form-check-label" for="embed_chat_window">Embed Chat Window</label>
                                                    </div>
                                                    <div class="specific-time-block mt-4">
                                                        <div class="time-blocks">
                                                            <label for="time_on_page" class="form-label">Alignment</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="alignment" id="left" onchange="myFunction()" value="left" {{ json_decode($widget->settings)[0]->alignment == 'left' ? "checked" : "" }}>
                                                                <label class="form-check-label" for="left">Left</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="alignment" id="right" onchange="myFunction()" value="right" {{ json_decode($widget->settings)[0]->alignment == 'right' ? "checked" : "" }}>
                                                                <label class="form-check-label" for="right">Right</label>
                                                            </div>
                                                        </div>
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
                                                                        <input class="form-check-input" type="radio" name="where_display_chat" id="all_pages" onchange="myFunction()" value="All" {{ json_decode($widget->settings)[0]->where_display_chat == 'All' ? "checked" : "" }}>
                                                                        <label class="form-check-label" for="all_pages">All Pages</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="where_display_chat" id="excluded_pages" onchange="myFunction()" value="Excluded Pages" {{ json_decode($widget->settings)[0]->where_display_chat == 'Excluded Pages' ? "checked" : "" }}>
                                                                        <label class="form-check-label" for="excluded_pages"><span>Excluded Pages</span><a href="#">+ Add Page</a></label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="where_display_chat" id="specific_pages" onchange="myFunction()" value="Specific Pages" {{ json_decode($widget->settings)[0]->where_display_chat == 'Specific Pages' ? "checked" : "" }}>
                                                                        <label class="form-check-label" for="specific_pages"><span>Specific Pages</span><a href="#">+ Add Page</a></label>
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
                                                                    <input class="form-check-input" type="checkbox" name="device[]" id="desktop" onchange="myFunction()" value="desktop" @foreach (json_decode($widget->settings)[0]->device as $dev) @if($dev == 'desktop') checked @endif @endforeach>
                                                                    <label class="form-check-label" for="desktop">Desktop</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="device[]" id="mobile_device" onchange="myFunction()" value="mobile_device" @foreach (json_decode($widget->settings)[0]->device as $dev) @if($dev == 'mobile_device') checked @endif @endforeach>
                                                                    <label class="form-check-label" for="mobile_device">Mobile Devices</label>
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
                                                                        <input class="form-check-input" type="radio" name="visitors" id="all_visitors" onchange="myFunction()" value="all_visitors" {{ json_decode($widget->settings)[0]->visitors == 'all_visitors' ? "checked" : "" }}>
                                                                        <label class="form-check-label" for="all_visitors">All Visitors</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="visitors" id="new_visitors" onchange="myFunction()" value="new_visitors" {{ json_decode($widget->settings)[0]->visitors == 'new_visitors' ? "checked" : "" }}>
                                                                        <label class="form-check-label" for="new_visitors">New Visitors</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="visitors" id="refurm_visitors" onchange="myFunction()" value="refurm_visitors" {{ json_decode($widget->settings)[0]->visitors == 'refurm_visitors' ? "checked" : "" }}>
                                                                        <label class="form-check-label" for="refurm_visitors">Returning Visitors</label>
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
                                                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="monday" onchange="myFunction()" value="monday" @foreach (json_decode($widget->settings)[0]->date_time as $date) @if($date == 'monday') checked @endif @endforeach>
                                                                    <label class="form-check-label" for="monday">
                                                                        Monday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="tuesday" onchange="myFunction()" value="tuesday" @foreach (json_decode($widget->settings)[0]->date_time as $date) @if($date == 'tuesday') checked @endif @endforeach>
                                                                    <label class="form-check-label" for="tuesday">
                                                                        Tuesday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="wednesday" onchange="myFunction()" value="wednesday" @foreach (json_decode($widget->settings)[0]->date_time as $date) @if($date == 'wednesday') checked @endif @endforeach>
                                                                    <label class="form-check-label" for="wednesday">
                                                                        Wednessday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="thursday" onchange="myFunction()" value="thursday" @foreach (json_decode($widget->settings)[0]->date_time as $date) @if($date == 'thursday') checked @endif @endforeach>
                                                                    <label class="form-check-label" for="thursday">
                                                                        Thursday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="friday" onchange="myFunction()" value="friday" @foreach (json_decode($widget->settings)[0]->date_time as $date) @if($date == 'friday') checked @endif @endforeach>
                                                                    <label class="form-check-label" for="friday">
                                                                        Friday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="saturday" onchange="myFunction()" value="saturday" @foreach (json_decode($widget->settings)[0]->date_time as $date) @if($date == 'saturday') checked @endif @endforeach>
                                                                    <label class="form-check-label" for="saturday">
                                                                        Saturday
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="sunday" onchange="myFunction()" value="sunday" @foreach (json_decode($widget->settings)[0]->date_time as $date) @if($date == 'sunday') checked @endif @endforeach>
                                                                    <label class="form-check-label" for="sunday">
                                                                        Sunday
                                                                    </label>
                                                                </div>
                                                            </fieldset>
                                                            <div class="form-check form-switch">
                                                                <label class="form-check-label" for="specific_time_selector">Set the Time Schedule</label>

                                                                @if(json_decode($widget->settings)[0]->specific_time_selector == 'on')
                                                                    <input type="checkbox" class="form-check-input" name="specific_time_selector" id="specific_time_selector" onchange="myFunction()" checked>
                                                                @else
                                                                    <input type="checkbox" class="form-check-input" name="specific_time_selector" id="specific_time_selector" onchange="myFunction()">
                                                                @endif


                                                            </div>
                                                            <div class="specific-time-block">
                                                                <div class="time-blocks">
                                                                    <label for="start_time" class="form-label">Start Time</label>
                                                                    <input type="text" id="start_time" class="form-control" name="start_time" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->start_time }}" required>
                                                                </div>
                                                                <div class="time-blocks">
                                                                    <label for="end_time" class="form-label">End Time</label>
                                                                    <input type="text" id="end_time" class="form-control" name="end_time" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->end_time }}" required>
                                                                </div>
                                                                <div class="time-blocks">
                                                                    <label for="timezone" class="form-label">Time Zone</label>
                                                                    <select id="timezone" name="timezone" onchange="myFunction()" required class="form-select">
                                                                        <option value="Etc/GMT+12">(GMT-12:00) International Date Line West</option>
                                                                        <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                                                        <option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option>
                                                                        <option value="US/Alaska">(GMT-09:00) Alaska</option>
                                                                        <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                                        <option value="America/Tijuana">(GMT-08:00) Tijuana, Baja California</option>
                                                                        <option value="US/Arizona">(GMT-07:00) Arizona</option>
                                                                        <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                                        <option value="US/Mountain">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                                        <option value="America/Managua">(GMT-06:00) Central America</option>
                                                                        <option value="US/Central">(GMT-06:00) Central Time (US & Canada)</option>
                                                                        <option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                                        <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                                        <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                                        <option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)</option>
                                                                        <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
                                                                        <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
                                                                        <option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
                                                                        <option value="America/Manaus">(GMT-04:00) Manaus</option>
                                                                        <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                                                        <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
                                                                        <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                                                        <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires, Georgetown</option>
                                                                        <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                                                        <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                                                        <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                                                        <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                                        <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                                        <option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                                                                        <option value="Etc/Greenwich">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                                                        <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                                        <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                                        <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                                        <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                                                        <option value="Africa/Lagos">(GMT+01:00) West Central Africa</option>
                                                                        <option value="Asia/Amman">(GMT+02:00) Amman</option>
                                                                        <option value="Europe/Athens">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                                                                        <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                                                        <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                                        <option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
                                                                        <option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                                                        <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                                        <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                                        <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
                                                                        <option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                                                                        <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                                                        <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                                                                        <option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
                                                                        <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                                        <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                                        <option value="Asia/Baku">(GMT+04:00) Baku</option>
                                                                        <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                                        <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                                        <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
                                                                        <option value="Asia/Karachi">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                                                        <option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                                        <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura</option>
                                                                        <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                                                        <option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
                                                                        <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                                                        <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                                                        <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                                        <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                                        <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                                        <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur, Singapore</option>
                                                                        <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                                        <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                                                        <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
                                                                        <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                                        <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                                        <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                                                        <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                                        <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                                        <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                                        <option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                                                                        <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                                        <option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
                                                                        <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                                                        <option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                                                        <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                                                                        <option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                                        <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
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
                                                <div class="form-check form-switch mt-4">
                                                    <label class="form-check-label" for="auto_trigger">Auto Trigger</label>
                                                    @if(json_decode($widget->settings)[0]->auto_trigger == 'on')
                                                        <input type="checkbox" class="form-check-input" name="auto_trigger" id="auto_trigger" onchange="myFunction()" checked>
                                                    @else
                                                        <input type="checkbox" class="form-check-input" name="auto_trigger" id="auto_trigger" onchange="myFunction()">
                                                    @endif
                                                </div>
                                                <div class="specific-time-block" id="auto_trigger_details">
                                                    <div class="time-blocks">
                                                        <label for="pop_up_opening_time" class="form-label">Pop up Opening Time</label>
                                                        <input type="text" id="pop_up_opening_time" class="form-control" name="pop_up_opening_time" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->pop_up_opening_time }}" required>
                                                    </div>
                                                    <div class="time-blocks">
                                                        <label for="message_auto_reply_time" class="form-label">Message Auto Reply Time</label>
                                                        <input type="text" id="message_auto_reply_time" class="form-control" name="message_auto_reply_time" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->message_auto_reply_time }}" required>
                                                    </div>
                                                </div>
                                                <div class="time-blocks">
                                                    <label for="scroll_position" class="form-label">Scroll Position</label>
                                                    <input type="text" id="scroll_position" class="form-control" name="scroll_position" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->scroll_position }}" required>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label" for="exit_internet">Exit Internet</label>
                                                @if(json_decode($widget->settings)[0]->exit_internet == 'on')
                                                    <input type="checkbox" class="form-check-input" name="exit_internet" id="exit_internet" onchange="myFunction()" checked>
                                                @else
                                                    <input type="checkbox" class="form-check-input" name="exit_internet" id="exit_internet" onchange="myFunction()">
                                                @endif
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
                                                    <input class="form-check-input" type="checkbox" name="notification[]" id="bubble_notification_bage" onchange="myFunction()" value="bubble_notification_bage" @foreach (json_decode($widget->settings)[0]->notification as $notify) @if($notify == 'bubble_notification_bage') checked @endif @endforeach>
                                                    <label class="form-check-label" for="bubble_notification_bage">
                                                        Bubble notification badge
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="notification[]" id="show_notification_in_tab_tile" onchange="myFunction()" value="show_notification_in_tab_tile" @foreach (json_decode($widget->settings)[0]->notification as $notify) @if($notify == 'show_notification_in_tab_tile') checked @endif @endforeach>
                                                    <label class="form-check-label" for="show_notification_in_tab_tile">
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
                            <a href="#" class="btn-whatsapp"
                                onclick="innerSection('appearance-block');navSwitcher('appearanceNav')">Continue</a>
                                <div class="button-block">
                        <div class="btn cancel"><a href="{{route('frontend.user.project.chat',$widget->project_id)}}" style="text-decoration:none; color:#212529; font-size:14px;">Cancel</a></div>
                        <!-- <div class="btn apply">Apply</div> -->
                        <input type="hidden" id="hidden_id" name="hidden_id" value="{{ $widget->id }}"/>
                        <input type="hidden" id="hidden_template_id" name="hidden_template_id" value="{{ json_decode($widget->settings)[0]->template_layout }}"/>
                        
                        <!-- <button type="submit" class="btn save">Save</button> -->
                    </div>
                        </div>
                    </div>
                </div>

                <div id="appearance-block" class="inner-section">
                    <div class="inner-wrapper">
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
                                                    <label class="form-check-label" for="bubble_background_color">Bubble Background Color</label>
                                                    <input class="form-check-input" type="color" id="bubble_background_color" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->bubble_background_color }}" name="bubble_background_color" value="#055147" required>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="bubble_icon_color">Bubble Icon Color</label>
                                                    <input class="form-check-input" type="color" id="bubble_icon_color" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->bubble_icon_color }}" name="bubble_icon_color" value="#487662" required>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="button_color">Button Color</label>
                                                    <input class="form-check-input" type="color" id="button_color" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->button_color }}" name="button_color" value="#79a37d" required>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="header_background_color">Header Background Color</label>
                                                    <input class="form-check-input" type="color" id="header_background_color" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->header_background_color }}" name="header_background_color" value="#92967d" required>
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
                                                <label class="form-check-label" for="enabled_animation">Enable Animation</label>
                                                @if(json_decode($widget->settings)[0]->enabled_animation == 'on')
                                                    <input type="checkbox" class="form-check-input" name="enabled_animation" id="enabled_animation" onchange="myFunction()" checked>
                                                @else
                                                    <input type="checkbox" class="form-check-input" name="enabled_animation" id="enabled_animation" onchange="myFunction()">
                                                @endif
                                            </div>
                                            <div class="sroll-position">
                                                <label for="scroll_position_appearance" class="form-label">Scroll Position</label>
                                                <input type="text" id="scroll_position_appearance" class="form-control" name="scroll_position_appearance" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->scroll_position_appearance }}" value="0%" required>
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
                                                <label for="button_corner_radius">
                                                    <span class="name">Radius</span>
                                                    <span class="value">100</span>
                                                </label>
                                                <input type="range" min="0" max="100" class="form-control-range" name="button_corner_radius" onchange="myFunction()" value="{{ json_decode($widget->settings)[0]->button_corner_radius }}" id="button_corner_radius">
             
                                                <div class="range">
                                                    <span>0</span>
                                                    <span>100</span>
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
                                            <textarea class="form-control" id="custom_css" name="custom_css" rows="4" onchange="myFunction()" required>{{ json_decode($widget->settings)[0]->custom_css }}</textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <span class="footer-text">Like the Results? Try on your website!</span>
                            <a href="#" class="btn-whatsapp" data-toggle="modal" data-target="#get_widget_Modal">Add to Website</a>
                            <div class="button-block">
                        <div class="btn cancel"><a href="{{route('frontend.user.project.chat',$widget->project_id)}}" style="text-decoration:none; color:#212529; font-size:14px;">Cancel</a></div>
                        <!-- <div class="btn apply">Apply</div> -->
                        <input type="hidden" id="hidden_id" name="hidden_id" value="{{ $widget->id }}"/>
                        <input type="hidden" id="hidden_template_id" name="hidden_template_id" value="{{ json_decode($widget->settings)[0]->template_layout }}"/>
                        
                        <!-- <button type="submit" class="btn save">Save</button> -->
                    </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="body-section">
        <div class="row g-0">
            <div class="nav-bar px-4" id="navBar">
                <div class="row g-0 align-items-center justify-content-end flex-lg-row flex-column-reverse">
                    <div class="col-auto ms-lg-0 ms-auto">
                        <div class="property-block">
                            <ul class="navbar-nav">
                                <li class="nav-item border-right dropdown">
                                    <a class="nav-link" href="#" id="propertyDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="property">
                                            @if($project->id != null)
                                                <div class="image">
                                                    @if(get_seo_result($project->id)->favicon->value == null)
                                                        <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image">

                                                    @else
                                                        <img src="{{get_seo_result($project->id)->favicon->value}}" alt="propery-image">
                                                    @endif
                                                </div>
                                                <div class="content">
                                                    <h6 class="site-name">{{\App\Models\Projects::where('id',$project->id)->first()->name}}</h6>
                                                    <span class="site-url">{{\App\Models\Projects::where('id',$project->id)->first()->url}}</span>
                                                </div>
                                                 <div class="dropdown-icon">
                                                    <i class="bi bi-chevron-down"></i>
                                                </div>
                                            @else
                                                <div class="image">

                                                </div>
                                                <div class="content">
                                                    <h6 class="site-name">Select Your Project</h6>
                                                </div>
                                                <div class="dropdown-icon">
                                                    <i class="bi bi-chevron-down"></i>
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="propertyDropdown">
                                        @foreach(\App\Models\Projects::where('user_id',auth()->user()->id)->get() as $project)
                                            <li>
                                                <a class="dropdown-item" href="{{route('frontend.user.project.chat',$project->id)}}">
                                                    <div class="property">
                                                        <div class="image">

                                                            @if(get_seo_result($project->id) != null)
                                                                @if(get_seo_result($project->id)->favicon->value == null)
                                                                    <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image">
                                                                @else
                                                                    <img src="{{get_seo_result($project->id)->favicon->value}}" alt="propery-image">
                                                                @endif
                                                            @endif
                                                                
                                                        </div>
                                                        <div class="content">
                                                            <h6 class="site-name">{{$project->name}}</h6>
                                                            <span class="site-url">{{$project->url}}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Create Your Project">
                                <a type="button" class="nav-link add-btn bi bi-plus-square-fill" data-bs-toggle="modal" data-bs-target="#project_modal"></a>
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
                                                <img src="{{auth()->user()->picture}}" alt="profile-picture">
                                            </div>
                                            <div class="name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                            <div class="dropdown-icon">
                                                <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu profile-dropdown-menu" aria-labelledby="profileDropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{url('dashboard')}}">
                                                <div class="icon-block">
                                                    <i class="bi bi-speedometer"></i>
                                                </div>
                                                <div class="text">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{url('reports')}}">
                                                <div class="icon-block">
                                                    <i class="bi bi-journal-text"></i>
                                                </div>
                                                <div class="text">Reports</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{url('projects')}}">
                                                <div class="icon-block">
                                                    <i class="bi bi-card-checklist"></i>
                                                </div>
                                                <div class="text">Projects</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                <div class="icon-block">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                                <div class="text">Your Details</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                <div class="icon-block">
                                                    <i class="bi bi-pencil"></i>
                                                </div>
                                                <div class="text">Edit Profile</div>
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                <div class="icon-block">
                                                    <i class="bi bi-shield-check"></i>
                                                </div>
                                                <div class="text">Password & Security</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                <div class="icon-block">
                                                    <i class="bi bi-box-seam"></i>
                                                </div>
                                                <div class="text">Choose Plan</div>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('frontend.auth.logout')}}">
                                                <div class="icon-block">
                                                    <i class="bi bi-box-arrow-right"></i>
                                                </div>
                                                <div class="text">Sign Out</div>
                                            </a>
                                        </li>
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
                        <div class="col">
                            <div id="device-view">
                                <iframe id="incorme" src="{{route('frontend.user.user_whatsapp_chat_preview',$widget->id)}}" frameborder="0" style="width: 100%;height: 610px;"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

</form>


<!-- Modal -->
<div class="modal fade" id="get_widget_Modal" tabindex="-1" role="dialog" aria-labelledby="get_widget_Lable" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{url('images/Group 389.png')}}" alt="">
                <h5 class="modal-title" id="get_widget_Lable">Add the widget to your website</h5>
                <button type="button" class="btn-close-modal" data-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <p class="text">Copy and paste this code into desired place of your website (HTML editor, website template, theme, etc)</p>
                <code>
                    &lt;div id="{{$widget->widget_key}}"&gt;&lt;/div&gt; <br>
                    &lt;script src="{{url('')}}/whatsapp_widget/{{$widget->id}}/tallentorw.js"&gt;&lt;/script&gt;
                </code>
            </div>
            <div class="modal-footer">
                <a href="{{route('frontend.user.project.chat',$project->id)}}" class="modal-btn">I have installed the code</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="project_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form action="{{route('frontend.user.user_projects.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"><img src="{{url('images/idea.png')}}" alt=""> Create
                        your project</h4>
                    <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="font-size:16px">Project Name<span class="text-danger">*</span></label>
                        <input type="text" style="font-size:15px;" id="name" class="form-control mt-2" name="name"
                            placeholder="Type your project name" required>
                    </div>
                    <div class="form-group mt-3">
                        <label style="font-size:16px">Project Type <span class="text-danger">*</span></label>
                        <select class="form-control mt-2" style="font-size:15px;" id="project_type" name="project_type"
                            required>
                            <option value="" selected disabled>Select...</option>
                            @foreach(App\Models\ProjectType::get() as $type)
                            <option style="font-size:15px;" value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="font-size:16px">URL <span class="text-danger">*</span></label>
                        <input type="text" style="font-size:15px;" id="url" class="form-control mt-2" name="url"
                            placeholder="Type your URL" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

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

        $('#captionOptions input[type=radio]').ready(function () {
            const radioVal = $('#captionOptions input[type=radio]:checked').val();
            // alert(radioVal);
            if (radioVal == 'custom') {
                $('.custom-caption-block').show();
            } else {
                $('.custom-caption-block').hide();
            }
        });

        $('#specific_time_selector').ready(function () {
            const schTime = $('#specific_time_selector:checked').val();
            if (schTime == 'on') {
                $('.specific-time-block').show();
            } else {
                $('.specific-time-block').hide();
            }
        });

        $('#auto_trigger').ready(function () {
            const auto_trigger_check = $('#auto_trigger:checked').val();
            if (auto_trigger_check == 'on') {
                $('#auto_trigger_details').show();
            } else {
                $('#auto_trigger_details').hide();
            }
        });
        
    </script>
   
   <script>

       function template_layout_chage() {
           template_layout = tempVal;
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

        
       let tempVal;

        $('#template-block .temps').on('click', function () {
            tempVal = $('#template-block .temps.active').attr('name');
            // console.log(tempVal);
            myFunction();
            template_layout_chage();
        });

        let icon;

        $('#content-block .bubble-icone').on('click', function () {
            icon = $('#content-block .bubble-icone.active').attr('name');
            // console.log(icon);
            myFunction();
        });

        function myFunction(bubble_icon = null){

            // alert(bubble_icon);

            if(tempVal != null){
                template_layout = tempVal;
            }else{
                template_layout = $('#hidden_template_id').val();
            }
            // console.log(template_layout);
            if(bubble_icon != null){
                bubble_icon = bubble_icon;
            }else{
                bubble_icon = icon;
            }

            // console.log(bubble_icon);

            
            auto_trigger_check = $('#auto_trigger:checked').val();
            if (auto_trigger_check == 'on') {
                $('#auto_trigger_details').show();
            } else {
                $('#auto_trigger_details').hide();
            }

            

            whatsapp_number = $('#whatsapp_number').val();
            // bubble_icon = $('#bubble_icon').val();
            chat_header = $('#chat_header').val();
            // caption = $('#caption').val();
            image = $('#image').val();
            agent_name = $('#agent_name').val();
            
            // console.log(image);
            welcome_message = $('#welcome_message').val();
            btn_text = $('#btn_text').val();

            
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

            

            if($('#caption_1').is(':checked')) {
                caption = $("#caption_1").val();
            }
            if($('#caption_2').is(':checked')) {
                caption = $("#caption_2").val();
            }
            if($('#caption_3').is(':checked')) {
                caption = $("#caption_3").val();
            }
            if($('#caption_4').is(':checked')) {
                caption = $("#caption_4").val();
            }
            if($('#caption_5').is(':checked')) {
                caption = $("#customCaption").val();
            }
            // if($('#caption_6').is(':checked')) {
            //     caption = $("#caption_6").val();
            // }

            

            if($('#all_pages').is(':checked')) {
                where_display_chat = $("#all_pages").val();
            }
            if($('#excluded_pages').is(':checked')) {
                where_display_chat = $("#excluded_pages").val();
            }
            if($('#specific_pages').is(':checked')) {
                where_display_chat = $("#specific_pages").val();
            }

                // console.log(where_display_chat);



            if($('#floating_bubble').is(':checked')) {
                position = $("#floating_bubble").val();
            }
            if($('#embed_bubble').is(':checked')) {
                position = $("#embed_bubble").val();
            }
            if($('#embed_chat_window').is(':checked')) {
                position = $("#embed_chat_window").val();
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

            if($('#left').is(':checked')) {
                alignment = $("#left").val();
            }
            if($('#right').is(':checked')) {
                alignment = $("#right").val();
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
            
            if($('#specific_time_selector').is(':checked')) {
                specific_time_selector = $("#specific_time_selector").val();
            }
            else{
                specific_time_selector = null;
            }
            
            start_time = $('#start_time').val();
            end_time = $('#end_time').val();
            timezone = $('#timezone').val();
            
            if ($('#auto_trigger').is(':checked')) {
                auto_trigger = $("#auto_trigger").val();
            } else {
                auto_trigger = null;
            }

            pop_up_opening_time = $('#pop_up_opening_time').val();
            message_auto_reply_time = $('#message_auto_reply_time').val();

            scroll_position = $('#scroll_position').val();
            
            if($('#exit_internet').is(':checked')) {
                exit_internet = $("#exit_internet").val();
            }
            else{
                exit_internet = null;
            }
            if($('#start_chat').is(':checked')) {
                start_chat = $("#start_chat").val();
            }
            else{
                start_chat = null;
            }
            if($('#show_icon').is(':checked')) {
                show_icon = $("#show_icon").val();
            }
            else{
                show_icon = null;
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
            // console.log(bubble_background_color);
            // console.log(bubble_icon_color);
            // console.log(button_color);
            // console.log(bubble_icon);

            

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
            

            $.post("{{url('/')}}/api/user_api_chat",
                {
                    template_layout: template_layout,
                    whatsapp_number: whatsapp_number,
                    bubble_icon: bubble_icon,
                    chat_header: chat_header,
                    caption: caption,
                    image: image,
                    agent_name: agent_name,                    
                    welcome_message: welcome_message,
                    btn_text: btn_text,                    
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
                    specific_time_selector: specific_time_selector,                    
                    start_time: start_time,
                    end_time: end_time,
                    timezone: timezone,
                    auto_trigger: auto_trigger,
                    pop_up_opening_time: pop_up_opening_time,
                    message_auto_reply_time: message_auto_reply_time,
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


    <script>
        // Range Slider
        const range = document.getElementById("startChatButtonCollapse");
        const output = range.querySelector(".value");
        const slider = document.getElementById("button_corner_radius")
        const min = slider.min
        const max = slider.max
        const value = slider.value
        output.innerHTML = value;

        slider.style.background = `linear-gradient(to right, #44BC8E 0%, #44BC8E ${(value-min)/(max-min)*100}%, #EDEDED ${(value-min)/(max-min)*100}%, #EDEDED 100%)`

        slider.oninput = function () {
            this.style.background = `linear-gradient(to right, #44BC8E 0%, #44BC8E ${(this.value-this.min)/(this.max-this.min)*100}%, #EDEDED ${(this.value-this.min)/(this.max-this.min)*100}%, #EDEDED 100%)`
            output.innerHTML = this.value;
        };
    </script>

@endpush