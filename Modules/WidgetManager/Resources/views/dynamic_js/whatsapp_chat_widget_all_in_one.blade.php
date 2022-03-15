function addWidget() {
    const div = document.createElement('div');
    div.className = 'all-in-one-widget';

    div.innerHTML = `
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

    * {
        padding: 0;
        margin: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    #allin1widgetblock {
        position: relative;
    }

    #allin1widgetblock #allin1widget {
        position: fixed;
        bottom: 50px;
        {{$widget_meta->alignment}}: 30px;
        z-index: 99999;
        display: none;
    }

    #allin1widgetblock #allin1widget.allin1view {
        display: block !important;
    }

    #allin1widgetblock #allin1widget .allin1container {
        width: 300px;
        height: 400px;
        background-color: #EFEFEF;
        border-radius: 15px;
        position: relative;
        -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header {
        background-color: {{ $widget_meta->header_background_color}};
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 20px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header #allin1close {
        position: absolute;
        color: #fff;
        top: 11px;
        right: 23px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header #allin1close:hover {
        cursor: pointer;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header .allin1profile {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        gap: 15px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header .allin1profile .allin1img {
        width: 60px;
        height: 60px;
        position: relative;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header .allin1profile .allin1img::after {
        content: '';
        width: 7px;
        height: 7px;
        background-color: #4AD504;
        border-radius: 50%;
        position: absolute;
        bottom: 5px;
        right: 5px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header .allin1profile .allin1img img {
        width: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header .allin1profile .allin1info .allin1name {
        font-size: 16px;
        font-weight: 500;
        color: #fff;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header .allin1profile .allin1info .allin1status {
        font-size: 12px;
        font-weight: 300;
        color: #fff;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1body .allin1welcomemsg {
        position: relative;
        width: 165px;
        height: auto;
        border-top-left-radius: 0;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: #fff;
        -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
        padding: 15px;
        margin-top: 35px;
        margin-left: 35px;
        display: none;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1body .allin1welcomemsg.allin1view {
        display: block;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1body .allin1welcomemsg .allin1triangle {
        border-top: 5px solid transparent;
        border-right: 15px solid #fff;
        border-bottom: 7.5px solid transparent;
        position: absolute;
        -webkit-transform: rotate(25deg);
        transform: rotate(25deg);
        top: -4px;
        left: -11px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1body .allin1welcomemsg .allin1sendersname {
        font-size: 10px;
        color: #000;
        margin-bottom: 5px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1body .allin1welcomemsg .allin1msg {
        font-size: 11px;
        color: #000;
        line-height: 2.3;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1body .allin1welcomemsg .allin1msgtime {
        font-size: 11px;
        color: #000;
        position: absolute;
        right: 10px;
        bottom: 5px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer {
        text-align: center;
        position: absolute;
        bottom: 20px;
        left: 50%;
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
        width: 200px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1footertitle {
        font-size: 13px;
        font-weight: 500;
        margin-bottom: 5px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        gap: 10px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock.allin1view {
        visibility: hidden;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock .allin1btn {
        border: none;
        border-radius: 5px;
        padding: 10px;
        background-color: #fff;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock .allin1btn:hover {
        cursor: pointer;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock .allin1btn .bi {
        font-size: 25px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock .allin1btn.allin1btn1 .bi {
        color: #4AD504;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock .allin1btn.allin1btn2 .bi {
        color: #0084ff;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock .allin1btn.allin1btn3 .bi {
        color: #0088cc;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock .allin1btn.allin1btn4 .bi {
        color: #07b53b;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer .allin1buttonblock .allin1btn.allin1btn5 .bi {
        color: #665cac;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform {
        position: relative;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent {
        background-color: #1B3D6B;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding: 15px;
        border-radius: 6px;
        gap: 8px;
        position: absolute;
        width: 265px;
        left: 50%;
        transform: translate(-50%, 0);
        bottom: 0;
        visibility: hidden;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent .inner-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        gap: 8px;
        position: relative;
        width: 100%;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent .inner-wrapper .form-title {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 10px;
        font-size: 14px;
        color: #fff;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent .inner-wrapper .form-title img {
        width: 35px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent.allin1view {
        visibility: visible;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent .bi {
        position: absolute;
        right: 10px;
        top: 10px;
        color: #fff;
        z-index: 1;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent .bi:hover {
        cursor: pointer;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent input,
    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent textarea {
        width: 100%;
        padding: 5px 15px;
        border-radius: 5px;
        border: none;
        font-size: 12px;
        color: #000;
        background-color: #fff;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent input:focus-visible,
    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent textarea:focus-visible {
        outline: none;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent input {
        height: 35px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent textarea {
        height: 100px;
        resize: none;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent button, 
    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent a {
        padding: 0.25rem 0;
        border-radius: 5px;
        text-decoration: none;
        color: #000;
        border: none;
        background-color: #EFEFEF;
        font-size: 13px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent button:hover {
        cursor: pointer;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1iframeblock {
        position: absolute;
        width: 301px;
        left: 50%;
        transform: translate(-50%, 0);
        bottom: -20px;
        display: none;
    }
    #allin1widgetblock #allin1widget .allin1container .allin1iframeblock .allin1iframe{
        width: 100%;
        height: 400px;
        border-radius: 15px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1iframeblock .allin1iframe .tawk-max-container{
        border: none !important;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1iframeblock.allin1view {
        display: block;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1iframeblock .bi {
        position: absolute;
        color: #fff;
        right: 10px;
        top: 8px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1iframeblock .bi:hover {
        cursor: pointer;
    }

    .tawk-max-container {
        border: none !important;
    }

    #allin1widgetblock #allin1widtoggler {
        width: 60px;
        height: 60px;
        background-color: #fff;
        border-radius: 50%;
        position: fixed;
        bottom: 70px;
        right: 50px;
        -webkit-box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.2);
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.2);
        z-index: 99999;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    #allin1widgetblock #allin1widtoggler.allin1view {
        display: none;
    }

    #allin1widgetblock #allin1widtoggler:hover {
        cursor: pointer;
    }

    #allin1widgetblock #allin1widtoggler.default-icon {
        box-shadow: none;
        background-color: transparent !important;
    }

    #allin1widgetblock #allin1widtoggler .allin1tooltip {
        position: absolute;
        background-color: #fff;
        width: 175px;
        padding: 10px 20px;
        font-size: 13px;
        border-radius: 10px;
        box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
        bottom: 8px;
        right: 75px;
        display:block;
    }

    #allin1widgetblock #allin1widtoggler .allin1tooltip.allin1view {
        display:none;
    }

    @if(count($widget_meta->notification) != 0)
        @foreach($widget_meta->notification as $key => $notify)
            @if($notify == 'bubble_notification_bage')
                #allin1widgetblock #allin1widtoggler::after {
                    content: '';
                    width: 2px;
                    height: 2px;
                    background-color: #f00;
                    position: absolute;
                    border-radius: 50%;
                    top: 7px;
                    right: 7px;
                    animation: pulse 1s infinite;
                }

                #allin1widgetblock #allin1widtoggler.default-icon::after {
                    content: '';
                    width: 12px;
                    height: 12px;
                    background-color: transparent;
                    border: 2px solid #FF0404;
                    position: absolute;
                    border-radius: 50%;
                    top: 1px;
                    right: 10px;
                    animation: border-pulse 1s infinite;
                }
            @endif
        @endforeach
    @endif

    #allin1widgetblock #allin1widtoggler i {
        font-size: 35px;
        color: #06557E;
    }

    @keyframes border-pulse
        {
        0% {
           transform: scale(0.1);
        }
        100% {
            transform: scale(1);
        }
    }

    @-webkit-keyframes border-pulse
        {
        0% {
            transform: scale(0.1);
        }
        100% {
            transform: scale(1);
        }
    }

    @keyframes pulse
        {
        0% {
            box-shadow: 0 0 0 0px rgba(255, 0, 0, 1);
        }
        100% {
            box-shadow: 0 0 0 5px rgba(255, 0, 0, 1);
        }
    }

    @-webkit-keyframes pulse
        {
        0% {
            box-shadow: 0 0 0 0px rgba(255, 0, 0, 0.5);
        }
        100% {
            box-shadow: 0 0 0 5px rgba(255, 0, 0, 0.1);
        }
    }

    @media screen and (max-width: 574px) {
        #allin1widgetblock #allin1widget.allin1view {
            bottom: unset;
            right: unset;
            top: 0;
            left: 0;
        }

        #allin1widgetblock #allin1widget.allin1view .allin1container{
            width: 100vw;
            height: 100vh;
            border-radius: 0;
        }

        #allin1widgetblock #allin1widget.allin1view .allin1container .allin1header{
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent {
            width: 100vw;
            height: 100vh;
            border-radius: 0;
            bottom: -130px
        }

        #allin1widgetblock #allin1widget .allin1container .allin1iframeblock {
            width: 100vw;
            height: 100vh;
            bottom: -130px;
        }

        #allin1widgetblock #allin1widget .allin1container .allin1iframeblock .allin1iframe {
            height: 100%;
            border-radius: 0;
        }
    }

    /*# sourceMappingURL=main.css.map */
    </style>

    <style>
        {{$widget_meta->custom_css}}
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">



    <div id="allin1widgetblock">
        @if($widget_meta->show_icon == 'on')
            @if($widget_meta->scroll_position_appearance == "Top")
                <div id="allin1widtoggler" onclick="allin1toggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;top: 1px;margin-top: 30px;">
                <div class="allin1tooltip">How can we help?</div>
                    @elseif($widget_meta->scroll_position_appearance == "Bottom")
                        <div id="allin1widtoggler" onclick="allin1toggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;bottom: 1px;margin-bottom: 30px;">
                        <div class="allin1tooltip">How can we help?</div>    
                        @elseif($widget_meta->scroll_position_appearance == "Left")
                                <div id="allin1widtoggler" onclick="allin1toggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;left: 1px;margin-left: 30px;">
                                <div class="allin1tooltip">How can we help?</div>  
                                @elseif($widget_meta->scroll_position_appearance == "Right")


                                        @if($widget_meta->default_icon != 'on')
                                            <div id="allin1widtoggler" onclick="allin1toggle()" style="background-color: {{ $widget_meta->bubble_background_color}}!important;{{$widget_meta->alignment}}: 10px;margin-right: 30px;">
                                            <div class="allin1tooltip">How can we help?</div>

                                        @else
                                            <div id="allin1widtoggler" onclick="allin1toggle()" class="default-icon"  style="background-color: {{ $widget_meta->bubble_background_color}};{{$widget_meta->alignment}}: 10px;margin-right: 30px;">
                                            <div class="allin1tooltip">How can we help?</div>
                                        @endif

                                                @endif
                                                    @if($widget_meta->default_icon == 'on')
                                                        <img src="{{url('images/social_media_icons/all-in-one-chat.svg')}}" width="60" alt="">
                                                    @else
                                                        <i style="color:{{$widget_meta->bubble_icon_color}};" class="bi bi-{{$widget_meta->bubble_icon}}"></i>
                                                    @endif
                                            </div>
                                            

                                    @endif
                                
                  

        <div id="allin1widget">
            <div class="allin1container">
                <div class="allin1header">
                    <div id="allin1close" onclick="allin1close()">&#10006;</div>
                    <div class="allin1profile">
                        <div class="allin1img">
                            <img src="{{uploaded_asset($widget_meta->image)}}" style="width:60px; height:60px;" alt="">
                        </div>
                        <div class="allin1info">
                            <div class="allin1name">{{$widget_meta->chat_header}}</div>
                            <div class="allin1status">{{$widget_meta->caption}}</div>
                        </div>
                    </div>
                </div>
                <div class="allin1body">
                    @if($widget_meta->start_chat == 'on')
                        <div class="allin1welcomemsg">
                            <div class="allin1triangle"></div>
                            <div class="allin1msg">{{$widget_meta->welcome_message}}</div>
                        </div>
                    @else

                    @endif
                </div>
                <div class="allin1footer">
                    <div class="allin1footertitle">{{ $widget_meta->btn_text}}</div>
                    <div class="allin1buttonblock">
                    
                        @if(count($widget_meta->whatsapp_details) != 1)
                            @foreach($widget_meta->whatsapp_details as $key => $whats)
                                @if($whats == 'whatsapp')  
                                    <button onclick="allin1formpopup(1)" class="allin1btn allin1btn1"><img width="25" src="{{url('images/social_media_icons/whatsapp.png')}}"></button>
                                @endif
                            @endforeach
                        @endif


                        @if(count($widget_meta->fb_details) != 1)
                            @foreach($widget_meta->fb_details as $key => $fb)
                                @if($fb == 'fb')  
                                    <button onclick="allin1formpopup(2)" class="allin1btn allin1btn2"><img width="25" src="{{url('images/social_media_icons/messenger.png')}}"></button>
                                @endif
                            @endforeach
                        @endif

                        @if(count($widget_meta->telegram_details) != 1)
                            @foreach($widget_meta->telegram_details as $key => $telegram)
                                @if($telegram == 'telegram')  
                                    <button onclick="allin1formpopup(3)" class="allin1btn allin1btn3"><img width="25" src="{{url('images/social_media_icons/telegram.png')}}"></button>
                                @endif
                            @endforeach
                        @endif

                        @if(count($widget_meta->line_details) != 1)
                            @foreach($widget_meta->line_details as $key => $line)
                                @if($line == 'line')  
                                    <button onclick="allin1formpopup(4)" class="allin1btn allin1btn4"><img width="25" src="{{url('images/social_media_icons/line.png')}}"></button>
                                @endif
                            @endforeach
                        @endif

                        @if(count($widget_meta->viber_details) != 1)
                            @foreach($widget_meta->viber_details as $key => $viber)
                                @if($viber == 'viber')  
                                    <button onclick="allin1formpopup(5)" class="allin1btn allin1btn5"><img width="25" src="{{url('images/social_media_icons/viber.png')}}"></button>
                                @endif
                            @endforeach
                        @endif

                        @if(count($widget_meta->tawk_details) != 1)
                            @foreach($widget_meta->tawk_details as $key => $tawk)
                                @if($tawk == 'tawkto')  
                                    <button onclick="allin1formpopup(6)" class="allin1btn allin1btn6"><img width="25" src="{{url('images/social_media_icons/tawkto.png')}}"></button>
                                @endif
                            @endforeach
                        @endif                        
                        
                    </div>

                    <form action="{{route('all_in_one_save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form1">
                        <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <div class="inner-wrapper">
                            <div class="form-title">Start chat with: <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt=""></div>
                            <input type="text" id="username1" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail1" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone1" name="phone_number" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage1" placeholder="Your message" required></textarea>
                            <input type="hidden" id="username" name="widget_id" value="{{$widget_id}}" required>
                            <input type="hidden" id="username" name="contact_via" value="Whatsapp">
                            <button type="submit" onclick="resetForm()" name="button" formtarget="_blank">Send</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{route('all_in_one_save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form2">
                        <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <div class="inner-wrapper">
                            <div class="form-title">Start chat with: <img src="{{url('images/social_media_icons/messenger.png')}}" alt=""></div>
                            <input type="text" id="username2" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail2" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone2" name="phone_number" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage2" placeholder="Your message" required></textarea>
                            <input type="hidden" id="username" name="widget_id" value="{{$widget_id}}" required>
                            <input type="hidden" id="username" name="contact_via" value="Messenger">
                            <button type="submit" onclick="resetForm()" name="button" formtarget="_blank">Send</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{route('all_in_one_save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form3">
                        <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <div class="inner-wrapper">
                            <div class="form-title">Start chat with: <img src="{{url('images/social_media_icons/telegram.png')}}" alt=""></div>
                            <input type="text" id="username3" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail3" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone3" name="phone_number" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage3" placeholder="Your message" required></textarea>
                            <input type="hidden" id="username" name="widget_id" value="{{$widget_id}}" required>
                            <input type="hidden" id="username" name="contact_via" value="Telegram">
                            <button type="submit" onclick="resetForm()" name="button" formtarget="_blank">Send</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{route('all_in_one_save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form4">
                        <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <div class="inner-wrapper">
                            <div class="form-title">Start chat with: <img src="{{url('images/social_media_icons/line.png')}}" alt=""></div>
                            <input type="text" id="username4" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail4" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone4" name="phone_number" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage4" placeholder="Your message" required></textarea>
                            <input type="hidden" id="username" name="widget_id" value="{{$widget_id}}" required>
                            <input type="hidden" id="username" name="contact_via" value="Line">
                            <button type="submit" onclick="resetForm()" name="button" formtarget="_blank">Send</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{route('all_in_one_save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form5">
                        <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <div class="inner-wrapper">
                            <div class="form-title">Start chat with: <img src="{{url('images/social_media_icons/viber.png')}}" alt=""></div>
                            <input type="text" id="username5" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail5" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone5" name="phone_number" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage" placeholder="Your message" required></textarea>
                            <input type="hidden" id="username" name="widget_id" value="{{$widget_id}}" required>
                            <input type="hidden" id="username" name="contact_via" value="Viber">
                            <button type="submit" onclick="resetForm()" name="button" formtarget="_blank">Send</button>
                            </div>
                        </div>
                    </form>
                    <form id="allin1startupform">
                        <div class="allin1formcontent allin1form6">
                        <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <div class="inner-wrapper">
                            <div class="form-title">Start chat with: <img src="{{url('images/social_media_icons/tawkto.png')}}" alt=""></div>
                            <input type="text" id="username6" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail6" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone6" name="phone_number" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage6" placeholder="Your message" required></textarea>
                            <input type="hidden" id="widget_id6" name="widget_id6" value="{{$widget_id}}" required>
                            <input type="hidden" id="contact_via6" name="contact_via" value="Tawkto">
                            <a href="#" name="button" onclick="allin1tawktoiframe();resetForm()">Send</a>
                        </div>
                    </form>
                </div>
                <div class="allin1iframeblock">
                    <i class="bi bi-x-lg" onclick="allin1formclose();allin1closetawktoiframe()"></i>
                    <iframe class="allin1iframe" src="https://tawk.to/chat/613b9d3bd326717cb680d215/1ff8dsd8m" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    `;

    document.getElementById('{{$widget_key}}').appendChild(div);
}

window.onload = addWidget;

window.addEventListener("load", function () {
    window.addEventListener("scroll", function () {
        const toggler = document.getElementById("allin1widtoggler");
        const tooltip = toggler.querySelector(".allin1tooltip");

        if (window.scrollY == 0) {
            tooltip.classList.remove("allin1view");
        } else {
            tooltip.classList.add("allin1view");
        }
    });
});

window.addEventListener("load", function () {
    localStorage.pageTitle = parent.document.title;

    setTimeout(function () {
        parent.document.title = "1 New Message";        
        
        setInterval(function(){
            if (parent.document.title == '1 New Message') {
                parent.document.title = localStorage.pageTitle;
            } else {
                parent.document.title = "1 New Message";
            }
        },1000);
    }, 5000);
});

const screenSize = window.matchMedia("(max-width: 768px)");
mobileChat(screenSize);
screenSize.addListener(mobileChat);

@if($widget_meta->auto_trigger != null)
    function allin1msgPopTimeout() {
        setTimeout(function(){
            document.querySelector('.allin1welcomemsg').classList.add("allin1view");
        },{{$widget_meta->message_auto_reply_time}});
    }

    function mobileChat(screenSize) {
        if(screenSize.matches) {
            return;
        } else {
            setTimeout(
                function allin1chatPopTimeout() {
                    document.querySelector('#allin1widget').classList.add("allin1view");
                    document.getElementById("allin1widtoggler").classList.add("allin1view");
                    allin1msgPopTimeout();
                    var audio = new Audio('{{url('blackberrychat.mp3')}}');
                    audio.play();
                }, {{$widget_meta->pop_up_opening_time}}
            );
        }
    }

@else

    function allin1msgPopTimeout() {
        setTimeout(function(){
            document.querySelector('.allin1welcomemsg').classList.add("allin1view");
        },2000);
    }

    function mobileChat(screenSize) {
        if(screenSize.matches) {
            return;
        } else {
            setTimeout(
                function allin1chatPopTimeout() {
                    document.querySelector('#allin1widget').classList.add("allin1view");
                    document.getElementById("allin1widtoggler").classList.add("allin1view");
                    allin1msgPopTimeout();
                    var audio = new Audio('{{url('blackberrychat.mp3')}}');
                    audio.play();
                }, 2000
            );
        }
    }
@endif

function allin1toggle() {
    document.querySelector('#allin1widget').classList.add("allin1view");
    document.getElementById("allin1widtoggler").classList.add("allin1view");
    allin1msgPopTimeout();
}


function allin1close() {
    document.querySelector('#allin1widget').classList.remove("allin1view");
    document.getElementById("allin1widtoggler").classList.remove("allin1view");
    document.querySelector('.allin1welcomemsg').classList.remove("allin1view");
    const forms = document.querySelectorAll('.allin1formcontent');
    [].forEach.call(forms, function (el) {
        el.classList.remove("allin1view");
    });
    document.querySelector('.allin1buttonblock').classList.remove("allin1view");
}

function allin1formpopup(id) {
    document.querySelector('.allin1form' + id).classList.add("allin1view");
    document.querySelector('.allin1buttonblock').classList.add("allin1view");
}

function allin1formclose() {
    const formcontent = document.querySelectorAll('.allin1formcontent');
    [].forEach.call(formcontent, function (el) {
        el.classList.remove("allin1view");
    });
    document.querySelector('.allin1buttonblock').classList.remove("allin1view");

    const forms = document.querySelectorAll("#allin1startupform");

    forms.forEach(function (form) {
        form.reset();
    });
}

function resetForm() {
    setTimeout(function () {
        const forms = document.querySelectorAll("#allin1startupform");

        forms.forEach(function (form) {
            form.reset();
        });

        const formcontent = document.querySelectorAll('.allin1formcontent');
        [].forEach.call(formcontent, function (el) {
            el.classList.remove("allin1view");
        });
        document.querySelector('.allin1buttonblock').classList.remove("allin1view");
    }, 1000);
}

function allin1tawktoiframe() {

    const name = document.getElementById("username6");
    const email = document.getElementById("useremail6");
    const tel = document.getElementById("telephone6");
    const message = document.getElementById("usermessage6");
    const widget_id = document.getElementById("widget_id6");

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "{{url('api/tawk_details_store')}}", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username=" + name.value + "&useremail=" + email.value + "&phone_number=" + tel.value + "&usermessage=" + message.value + "&widget_id=" + widget_id.value);
   

  
    document.querySelector('.allin1iframeblock').classList.add("allin1view");
    
}

function allin1closetawktoiframe() {
    document.querySelector('.allin1iframeblock').classList.remove("allin1view");
}

document.cookie = "tallentor_widget=982SHEKKSMLA";

setInterval(myTimer, 10000);

function myTimer() {
 const widget_id = '{{$widget_id}}';
 const current_url = window.location.href;
 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
       document.getElementById("demo").innerHTML = this.responseText;
   }
 };
 xhttp.open("POST", "{{url('api/log_checker')}}", true);
 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xhttp.send("widget_id=" + widget_id + "&current_url=" + current_url);
}


function printMousePos(event) {
    const X = event.pageX;
    const Y = event.pageY;
    const current_url = window.location.href;
    const widget_id = '{{$widget_id}}';

    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML = this.responseText;
    }
   };
   xhttp.open("POST", "{{url('api/heatmapdata')}}", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhttp.send("position_x=" + X + "&position_y=" + Y + "&current_url=" + current_url + "&widget_id=" + widget_id + "&url=" + current_url)  ;


    console.log('x=' + X);
    console.log('y=' + Y);
}

document.addEventListener("click", printMousePos);