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
        bottom: 150px;
        right: 90px;
        z-index: 99999;
        display: none;
    }
    #wappwidgetblock #wappwidget.wappview {
        display: block !important;
    }
    #wappwidgetblock #wappwidget .wappcontainer {
        width: 350px;
        height: 450px;
        background-image: url(https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png);
        background-size: cover;
        border-radius: 15px;
        position: relative;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader {
        background-color: #00796A;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 25px 40px;
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
        font-size: 19px;
        font-weight: 500;
        color: #fff;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappheader .wappprofile .wappinfo .wappstatus {
        font-size: 13px;
        font-weight: 300;
        color: #fff;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappbody .wappwelcomemsg {
        position: relative;
        width: 166px;
        height: 118px;
        border-top-left-radius: 0;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: #fff;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
        padding: 15px;
        margin-top: 35px;
        margin-left: 35px;
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
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform {
        position: relative;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform .wappformcontent {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-content: center;
        align-items: center;
        width: 300px;
        margin: 0 auto;
        padding: 15px;
        background-color: #00796a;
        border-radius: 5px;
        position: relative;
        bottom: 75px;
        opacity: 0;
        transition: all 0.3s ease;
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
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappstartupform.wappview .wappformcontent {
        opacity: 1;
        bottom: 125px;
        transition: all 0.3s ease;
    }
    #wappwidgetblock #wappwidget .wappcontainer .wappfooter #wappbtn {
        width: 280px;
        height: 50px;
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
        width: 78px;
        height: 78px;
        background-color: #fff;
        border-radius: 50%;
        position: fixed;
        bottom: 50px;
        right: 50px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.2);
        z-index: 99999;
    }
    #wappwidgetblock #wappwidtoggler:hover {
        cursor: pointer;
    }
    #wappwidgetblock #wappwidtoggler::after {
        content: "";
        width: 12px;
        height: 12px;
        background-color: #f00;
        position: absolute;
        border-radius: 50%;
        top: 6px;
        right: 3px;
    }
    #wappwidgetblock #wappwidtoggler i {
        font-size: 45px;
        position: relative;
        top: 16px;
        left: 16px;
        color: #14C656;
    }

    /*# sourceMappingURL=main.css.map */

</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<div id="wappwidgetblock">
    @if($widget_meta->show_icon == 'Enabled')
        @if($widget_meta->scroll_position_appearance == "Top")
            <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;top: 1px;margin-top: 30px;">
                @elseif($widget_meta->scroll_position_appearance == "Bottom")
                    <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;bottom: 1px;margin-bottom: 30px;">
                        @elseif($widget_meta->scroll_position_appearance == "Left")
                            <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}} !important;left: 1px;margin-left: 30px;">
                                @elseif($widget_meta->scroll_position_appearance == "Right")
                                    <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}}!important;right: 1px;margin-right: 30px;">
                                        @endif
                                        <i style="color:{{$widget_meta->bubble_icon_color}}" class="bi bi-{{$widget_meta->bubble_icon}}"></i>
                                    </div>

                                @endif

    <div id="wappwidget">
        <div class="wappcontainer">
            <div class="wappheader">
                <div id="wappclose" onclick="wappclose()">&#10006;</div>
                <div class="wappprofile">
                    <div class="wappimg">
                        <img src="{{uploaded_asset($widget_meta->image)}}" alt="">
                    </div>
                    <div class="wappinfo">
                        <div class="wappname">{{$widget_meta->chat_header}}</div>
                        <div class="wappstatus">{{$widget_meta->caption}}</div>
                    </div>
                </div>

            </div>

            <div class="wappbody">
                @if($widget_meta->start_chat == 'Enabled')
                <div class="wappwelcomemsg">
                    <div class="wapptriangle"></div>
                    <div class="wappsendersname">Rayan Perera</div>
                    <div class="wappmsg">Hello, chamind... <br>How can I help you?</div>
                    <div class="wappmsgtime">19:12</div>
                </div>
                @else

                @endif
            </div>
            <div class="wappfooter">
                <div id="wappstartupform">
                    <div class="wappformcontent">
                        <form action="{{route('frontend.save_client')}}" method="post">
                            {{csrf_field()}}
                            <input type="text" id="username" name="username" placeholder="Your name" required>
                            <input type="hidden" id="username" name="widget_id" {{$widget_id}} required>
                            <input type="email" id="useremail" name="useremail" placeholder="Your email" required>
                            <textarea name="usermessage" id="usermessage" placeholder="Your message"></textarea>
                            <button type="submit" name="button" >Send</button>
                        </form>
                    </div>
                </div>
                <div id="wappbtn" onclick="startupform()" style="background-color: {{$widget_meta->button_color}}">
                    <i class="bi bi-whatsapp"></i>
                    <div class="wappbtntxt">Start Chat</div>
                </div>
            </div>
        </div>
    </div>
</div>`

document.getElementById('{{$widget_key}}').appendChild(div);
}


window.onload = addWidget;

function wapptoggle() {
document.querySelector('#wappwidget').classList.toggle("wappview");
document.querySelector('#wappstartupform').classList.remove("wappview");
}

function wappclose() {
document.querySelector('#wappwidget').classList.remove("wappview");
document.querySelector('#wappstartupform').classList.remove("wappview");

}

function startupform() {
document.querySelector('#wappstartupform').classList.toggle("wappview");
document.querySelector('#wappbtn').classList.toggle("wappview");
}
