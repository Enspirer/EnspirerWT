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
        bottom: 150px;
        {{$widget_meta->alignment}}: 90px;
        z-index: 99999;
        display: none;
    }

    #allin1widgetblock #allin1widget.allin1view {
        display: block !important;
    }

    #allin1widgetblock #allin1widget .allin1container {
        width: 350px;
        height: 450px;
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
        padding: 25px 40px;
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
        font-size: 19px;
        font-weight: 500;
        color: #fff;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1header .allin1profile .allin1info .allin1status {
        font-size: 13px;
        font-weight: 300;
        color: #fff;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1body .allin1welcomemsg {
        position: relative;
        width: 166px;
        height: 118px;
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
        visibility: hidden;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1body .allin1welcomemsg.allin1view {
        visibility: hidden;
        -webkit-animation: msgPop .3s ease;
        animation: msgPop .3s ease;
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
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
        bottom: 45px;
        left: 50%;
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
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
        background-color: #06557E;
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
        width: 100%;
        bottom: -22px;
        visibility: hidden;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent.allin1view {
        visibility: visible;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent .bi {
        position: absolute;
        right: -10px;
        top: -10px;
        color: #333;
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

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent button {
        padding: 0.25rem 0;
        border-radius: 5px;
        border: none;
        background-color: #EFEFEF;
        font-size: 13px;
    }

    #allin1widgetblock #allin1widget .allin1container .allin1footer #allin1startupform .allin1formcontent button:hover {
        cursor: pointer;
    }

    #allin1widgetblock #allin1widtoggler {
        width: 78px;
        height: 78px;
        background-color: #fff;
        border-radius: 50%;
        position: fixed;
        bottom: 50px;
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

    #allin1widgetblock #allin1widtoggler:hover {
        cursor: pointer;
    }

    @if(count($widget_meta->notification) != 0)
        @foreach($widget_meta->notification as $key => $notify)
            @if($notify == 'bubble_notification_bage')
                #allin1widgetblock #allin1widtoggler::after {
                    content: '';
                    width: 12px;
                    height: 12px;
                    background-color: #f00;
                    position: absolute;
                    border-radius: 50%;
                    top: 6px;
                    right: 3px;
                }
            @endif
        @endforeach
    @endif

    #allin1widgetblock #allin1widtoggler i {
        font-size: 35px;
        color: #06557E;
    }

    @-webkit-keyframes msgPop {
        from {
            visibility: hidden;
        }

        to {
            visibility: visible;
        }
    }

    @keyframes msgPop {
        from {
            visibility: hidden;
        }

        to {
            visibility: visible;
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
                    @elseif($widget_meta->scroll_position_appearance == "Bottom")
                        <div id="allin1widtoggler" onclick="allin1toggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;bottom: 1px;margin-bottom: 30px;">
                            @elseif($widget_meta->scroll_position_appearance == "Left")
                                <div id="allin1widtoggler" onclick="allin1toggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;left: 1px;margin-left: 30px;">
                                    @elseif($widget_meta->scroll_position_appearance == "Right")
                                        <div id="allin1widtoggler" onclick="allin1toggle()" style="background-color: {{ $widget_meta->bubble_background_color}}!important;{{$widget_meta->alignment}}: 10px;margin-right: 30px;">
                                            @endif
                                            <i style="color:{{$widget_meta->bubble_icon_color}};" class="bi bi-{{$widget_meta->bubble_icon}}"></i>
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
                    
                        @if(count($widget_meta->whatsapp_details) != 0)
                            @foreach($widget_meta->whatsapp_details as $key => $whats)
                                @if($whats == 'whatsapp')  
                                    <button onclick="allin1formpopup(1)" class="allin1btn allin1btn1"><i class="bi bi-whatsapp"></i></button>
                                @endif
                            @endforeach
                        @endif


                        @if(count($widget_meta->fb_details) != 0)
                            @foreach($widget_meta->fb_details as $key => $fb)
                                @if($fb == 'fb')  
                                    <button onclick="allin1formpopup(2)" class="allin1btn allin1btn2"><i class="bi bi-messenger"></i></button>
                                @endif
                            @endforeach
                        @endif

                        @if(count($widget_meta->telegram_details) != 0)
                            @foreach($widget_meta->telegram_details as $key => $telegram)
                                @if($telegram == 'telegram')  
                                    <button onclick="allin1formpopup(3)" class="allin1btn allin1btn3"><i class="bi bi-telegram"></i></button>
                                @endif
                            @endforeach
                        @endif

                        @if(count($widget_meta->line_details) != 0)
                            @foreach($widget_meta->line_details as $key => $line)
                                @if($line == 'line')  
                                    <button onclick="allin1formpopup(4)" class="allin1btn allin1btn4"><i class="bi bi-line"></i></button>
                                @endif
                            @endforeach
                        @endif

                        @if(count($widget_meta->viber_details) != 0)
                            @foreach($widget_meta->viber_details as $key => $viber)
                                @if($viber == 'viber')  
                                    <button onclick="allin1formpopup(5)" class="allin1btn allin1btn5"><i class="bi bi-instagram"></i></button>
                                @endif
                            @endforeach
                        @endif




                        
                        
                    </div>
                    <form action="{{route('save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form1">
                            <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <input type="text" id="username1" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail1" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone1" name="userphone" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage1" placeholder="Your message"></textarea>
                            <button type="submit" name="button">Send</button>
                        </div>
                    </form>
                    <form action="{{route('save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form2">
                            <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <input type="text" id="username2" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail2" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone2" name="userphone" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage2" placeholder="Your message"></textarea>
                            <button type="submit" name="button">Send</button>
                        </div>
                    </form>
                    <form action="{{route('save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form3">
                            <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <input type="text" id="username3" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail3" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone3" name="userphone" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage3" placeholder="Your message"></textarea>
                            <button type="submit" name="button">Send</button>
                        </div>
                    </form>
                    <form action="{{route('save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form4">
                            <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <input type="text" id="username4" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail4" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone4" name="userphone" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage4" placeholder="Your message"></textarea>
                            <button type="submit" name="button">Send</button>
                        </div>
                    </form>
                    <form action="{{route('save_client')}}" method="post" id="allin1startupform">
                    {{csrf_field()}}
                        <div class="allin1formcontent allin1form5">
                            <i class="bi bi-x-circle-fill" onclick="allin1formclose()"></i>
                            <input type="text" id="username5" name="username" placeholder="Your name" required>
                            <input type="email" id="useremail5" name="useremail" placeholder="Your email" required>
                            <input type="tel" id="telephone5" name="userphone5" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage" placeholder="Your message"></textarea>
                            <button type="submit" name="button">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    `;

    document.getElementById('{{$widget_key}}').appendChild(div);
}

window.onload = addWidget;

function allin1toggle() {
    document.querySelector('#allin1widget').classList.toggle("allin1view");
    document.querySelector('.allin1welcomemsg').classList.toggle("allin1view");
}

function allin1close() {
    document.querySelector('#allin1widget').classList.remove("allin1view");
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
    const forms = document.querySelectorAll('.allin1formcontent');
    [].forEach.call(forms, function (el) {
        el.classList.remove("allin1view");
    });
    document.querySelector('.allin1buttonblock').classList.remove("allin1view");
}