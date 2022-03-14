function addWidget() {
const div = document.createElement('div');
div.className = 'whatsapp-widget';

div.innerHTML = `<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    #wappwidgetblock {
        position: relative;
    }
    #wappwidgetblock #wappwidget {
        position: fixed;
        bottom: 50px;
        {{$widget_meta->alignment}}: 30px;
        z-index: 99999;
        display: none;
    }
    #wappwidgetblock #wappwidget.wappview {
        display: block !important;
    }
    #wappwidgetblock #wappwidget .wappcontainer {
        width: 300px;
        height: 400px;
        background-image: url(https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png);
        background-size: cover;
        border-radius: 15px;
        position: relative;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader {
        background-color: {{ $widget_meta->header_background_color}};
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 20px;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader #wappclose {
        position: absolute;
        color: #fff;
        top: 11px;
        right: 23px;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader #wappclose:hover {
        cursor: pointer;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader .wappprofile {
        display: flex;
        gap: 15px;
        align-items: center;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader .wappprofile .wappimg {
        width: 60px;
        height: 60px;
        position: relative;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader .wappprofile .wappimg::after {
        content: "";
        width: 7px;
        height: 7px;
        background-color: #4AD504;
        border-radius: 50%;
        position: absolute;
        bottom: 5px;
        right: 5px;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader .wappprofile .wappimg img {
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader .wappprofile .wappinfo .wappname {
        font-size: 16px;
        font-weight: 500;
        color: #fff;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader .wappprofile .wappinfo .wappstatus {
        font-size: 12px;
        font-weight: 300;
        color: #fff;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappbody .wappwelcomemsg {
        position: relative;
        width: 165px;
        height: auto;
        border-top-left-radius: 0;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: #fff;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
        padding: 15px;
        margin-top: 35px;
        margin-left: 35px;
        z-index: 0;
        display: none;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappbody .wappwelcomemsg.wappview {
        display: block;
    }

    #wappwidgetblock #wappwidget .wappcontainer .wappbody .wappwelcomemsg .wapptriangle {
        border-top: 5px solid transparent;
        border-right: 15px solid #fff;
        border-bottom: 7.5px solid transparent;
        position: absolute;
        transform: rotate(25deg);
        top: -4px;
        left: -11px;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappbody .wappwelcomemsg .wappsendersname {
        font-size: 10px;
        color: #000;
        margin-bottom: 5px;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappbody .wappwelcomemsg .wappmsg {
        font-size: 11px;
        color: #000;
        line-height: 2.3;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappbody .wappwelcomemsg .wappmsgtime {
        font-size: 11px;
        color: #000;
        position: absolute;
        right: 10px;
        bottom: 5px;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter {
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform {
        position: relative;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-content: center;
        align-items: center;
        width: 90%;
        margin: 0 auto;
        padding: 15px;
        background-color: #00796a;
        border-radius: 15px;
        position: absolute;
        left: 50%;
        transform: translate(-50%, 0);
        bottom: 15px;
        z-index: 1;
        display: none;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent .form-title {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 15px;
        color: #fff;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent .form-title img {
        width: 35px;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform.wappview .wappformcontent {
        display: flex;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent input,
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent textarea {
        width: 100%;
        padding: 5px 15px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: none;
        font-size: 12px;
        color: #000;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent input:focus-visible,
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent textarea:focus-visible {
        outline: none;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent input {
        height: 35px;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent textarea {
        height: 100px;
        resize: none;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent button {
        width: 100px;
        height: 30px;
        border: none;
        border-radius: 5px;
        color: #fff;
        background-color: #14c656;
    }
    
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent .bi {
    position: absolute;
    right: 10px;
    top: 10px;
    color: #fff;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent .bi:hover {
    cursor: pointer;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappbtn {
        width: 250px;
        height: 45px;
        background-color: #14C656;
        border-radius: 30px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translate(-50%, 0);
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappbtn.wappview {
        display: none;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappbtn:hover {
        cursor: pointer;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappbtn i {
        color: #fff;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappbtn .wappbtntxt {
        color: #fff;
        font-size: 15px;
        font-weight: 500;
    }
    #wappwidgetblock #wappwidtoggler {
        width: 60px;
        height: 60px;
        background-color: #fff;
        border-radius: 50%;
        position: fixed;
        bottom: 70px;
        right: 50px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.2);
        z-index: 99999;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    #wappwidgetblock #wappwidtoggler.wappview {
        display: none;
    }

    #wappwidgetblock #wappwidtoggler:hover {
        cursor: pointer;
    }

    #wappwidgetblock #wappwidtoggler .wapptooltip {
        position: absolute;
        background-color: #fff;
        width: 175px;
        padding: 10px 20px;
        font-size: 13px;
        border-radius: 10px;
        box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
        bottom: -50px;
        right: 25px;
        display: block;
    }

    #wappwidgetblock #wappwidtoggler .wapptooltip.wappview {
        display:none;
    }

    @if(count($widget_meta->notification) != 0)
        @foreach($widget_meta->notification as $key => $notify)
            @if($notify == 'bubble_notification_bage')
                #wappwidgetblock #wappwidtoggler::after {
                    content: "";
                    width: 2px;
                    height: 2px;
                    background-color: #f00;
                    position: absolute;
                    border-radius: 50%;
                    top: 7px;
                    right: 7px;
                    animation: pulse 1s infinite;
                }
            @endif
        @endforeach
    @endif

    #wappwidgetblock #wappwidtoggler i {
        font-size: 30px;
        color: #14C656;
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
        #wappwidgetblock #wappwidget.wappview {
            bottom: unset;
            right: unset;
            top: 0;
            left: 0;
        }

        #wappwidgetblock #wappwidget.wappview .wappcontainer{
            width: 100vw;
            height: 100vh;
            border-radius: 0;
        }

        #wappwidgetblock #wappwidget.wappview .wappcontainer .wappheader{
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform {
            position: absolute;
            width: 100vw;
            height: 100vh;
            top: 0;
            z-index: -1;
        }

        #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform.wappview {
            z-index: 1;
        }

        #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent {
            width: 100%;
            height: 100%;
            bottom: -110px;
            border-radius: 0;
        }
    }

    /*# sourceMappingURL=main.css.map */

</style>

<style>
    {{$widget_meta->custom_css}}
</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<div id="wappwidgetblock">
    @if($widget_meta->show_icon == 'on')
        @if($widget_meta->scroll_position_appearance == "Top")
            <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;top: 1px;margin-top: 30px;">
            <div class="wapptooltip">How may I help you?</div>   
            @elseif($widget_meta->scroll_position_appearance == "Bottom")
                    <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;bottom: 1px;margin-bottom: 30px;">
                    <div class="wapptooltip">How may I help you?</div>     
                    @elseif($widget_meta->scroll_position_appearance == "Left")
                            <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;left: 1px;margin-left: 30px;">
                            <div class="wapptooltip">How may I help you?</div>      
                            @elseif($widget_meta->scroll_position_appearance == "Right")
                                    <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}}!important;{{$widget_meta->alignment}}: 10px;margin-right: 30px;">
                                    <div class="wapptooltip">How may I help you?</div>      
                                    @endif
                                        <i style="color:{{$widget_meta->bubble_icon_color}};" class="bi bi-{{$widget_meta->bubble_icon}}"></i>
                                    </div>

                                @endif

    <div id="wappwidget">
        <div class="wappcontainer">
            <div class="wappheader">
                <div id="wappclose" onclick="wappclose()">&#10006;</div>
                <div class="wappprofile">
                    <div class="wappimg">
                        <img src="{{uploaded_asset($widget_meta->image)}}" style="width:60px; height:60px;" alt="">
                    </div>
                    <div class="wappinfo">
                        <div class="wappname">{{$widget_meta->chat_header}}</div>
                        <div class="wappstatus">{{$widget_meta->caption}}</div>
                    </div>
                </div>

            </div>

            <div class="wappbody">
                @if($widget_meta->start_chat == 'on')
                <div class="wappwelcomemsg">
                    <div class="wapptriangle"></div>
                    <!-- <div class="wappsendersname">Rayan Perera</div> -->
                    <div class="wappmsg">{{$widget_meta->welcome_message}}</div>
                    <!-- <div class="wappmsgtime">19:12</div> -->
                </div>
                @else

                @endif
            </div>
            <div class="wappfooter">
                <div id="wappstartupform">
                    <div class="wappformcontent">
                        <form action="{{route('save_client')}}" method="post">
                            {{csrf_field()}}
                            <i class="bi bi-x-circle-fill" onclick="wappformclose()"></i>
                            <div class="form-title">Start chat with: <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt=""></div>
                            <input type="text" id="username" name="username" placeholder="Your name" required>
                            <input type="hidden" id="username" name="widget_id" value="{{$widget_id}}" required>
                            <input type="email" id="useremail" name="useremail" placeholder="Your email" required>
                            <input type="text" id="phone_number" name="phone_number" placeholder="Your phone number" required>
                            <textarea name="usermessage" id="usermessage" placeholder="Your message" required></textarea>
                            <button type="submit" onclick="resetForm()" name="button" formtarget="_blank">Send</button>
                        </form>
                    </div>
                </div>
                <div id="wappbtn" onclick="startupform()" style="border-radius:{{$widget_meta->button_corner_radius}}px; background-color: {{$widget_meta->button_color}}">
                    <i class="bi bi-whatsapp"></i>
                    <div class="wappbtntxt">{{ $widget_meta->btn_text}}</div>
                </div>
            </div>
        </div>
    </div>
</div>`

document.getElementById('{{$widget_key}}').appendChild(div);
}


window.onload = addWidget;

window.addEventListener("load", function () {
    window.addEventListener("scroll", function () {
        const toggler = document.getElementById("wappwidtoggler");
        const tooltip = toggler.querySelector(".wapptooltip");

        if (window.scrollY == 0) {
            tooltip.classList.remove("wappview");
        } else {
            tooltip.classList.add("wappview");
        }
    });
});

window.addEventListener("load", function () {
    localStorage.pageTitle = parent.document.title;

    setTimeout(function () {
        parent.document.title = "1 new Message";

        setInterval(function () {
            if (parent.document.title == '1 new Message') {
                parent.document.title = localStorage.pageTitle;
            } else {
                parent.document.title = "1 new Message";
            }
        }, 1000);
    }, 5000);
});

const screenSize = window.matchMedia("(max-width: 768px)");
mobileChat(screenSize);
screenSize.addListener(mobileChat);

@if($widget_meta->auto_trigger != null)

    function wappmsgPopTimeout() {
        setTimeout(function(){
            document.querySelector('.wappwelcomemsg').classList.add("wappview");
        },{{$widget_meta->message_auto_reply_time}});
    }

    function mobileChat(screenSize) {
        if(screenSize.matches) {
            return;
        } else {
            setTimeout(
                function wappchatPopTimeout() {
                    document.querySelector('#wappwidget').classList.add("wappview");
                    document.getElementById("wappwidtoggler").classList.add("wappview");
                    wappmsgPopTimeout();
                    var audio = new Audio('{{url('blackberrychat.mp3')}}');
                    audio.play();
                }, {{$widget_meta->pop_up_opening_time}}
            );
        }
    }

@else

    function wappmsgPopTimeout() {
        setTimeout(function(){
            document.querySelector('.wappwelcomemsg').classList.add("wappview");
        },2000);
    }

    function wapptoggle() {
        document.querySelector('#wappwidget').classList.add("wappview");
        document.getElementById("wappwidtoggler").classList.add("wappview");
        wappmsgPopTimeout();
    }

    function mobileChat(screenSize) {
        if(screenSize.matches) {
            return;
        } else {
            setTimeout(
                function wappchatPopTimeout() {
                    document.querySelector('#wappwidget').classList.add("wappview");
                    document.getElementById("wappwidtoggler").classList.add("wappview");
                    wappmsgPopTimeout();
                    var audio = new Audio('{{url('blackberrychat.mp3')}}');
                    audio.play();
                }, 2000
            );
        }
    }

@endif

function wappclose() {
    document.querySelector('#wappwidget').classList.remove("wappview");
    document.querySelector('#wappstartupform').classList.remove("wappview");
    document.querySelector('.wappwelcomemsg').classList.remove("wappview");
    document.getElementById("wappwidtoggler").classList.remove("wappview");

}

function wappformclose() {
    document.querySelector('#wappstartupform').classList.remove("wappview");
    document.querySelector('#wappbtn').classList.remove("wappview");
    document.querySelector("#wappstartupform form").reset();
}

function resetForm() {
    setTimeout(function () {
        document.querySelector("#wappstartupform form").reset();
        wappformclose();
    }, 1000);
}

function startupform() {
    document.querySelector('#wappstartupform').classList.toggle("wappview");
    document.querySelector('#wappbtn').classList.add("wappview");
}
