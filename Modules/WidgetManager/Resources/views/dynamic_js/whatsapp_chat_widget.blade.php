function addWidget() {
const div = document.createElement('div');
div.className = 'whatsapp-widget';

div.innerHTML = `{!! \Modules\WidgetManager\Entities\WhatsappChatWidgetTemplate::where('id',$widget_meta->template_layout)->first()->source !!}
<div id="wappwidgetblock" >
    @if($widget_meta->show_icon == 'Enabled')
        @if($widget_meta->scroll_position_appearance == "Top")
            <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}};top: 1px;margin-top: 30px;">
        @elseif($widget_meta->scroll_position_appearance == "Bottom")
            <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}};bottom: 1px;margin-bottom: 30px;">
        @elseif($widget_meta->scroll_position_appearance == "Left")
            <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}};left: 1px;margin-left: 30px;">
        @elseif($widget_meta->scroll_position_appearance == "Right")
            <div id="wappwidtoggler" onclick="wapptoggle()" style="background-color: {{ $widget_meta->bubble_background_color}};right: 1px;margin-right: 30px;">
        @endif
                <i style="color:{{$widget_meta->bubble_icon_color}}" class="bi bi-{{$widget_meta->bubble_icon}}"></i>

            </div>

    @else

    @endif
    <div id="wappwidget">
        <div class="wappcontainer">
            <div class="wappheader" style="background-color: {{$widget_meta->header_background_color}}">
                <div id="wappclose" onclick="wappclose()">&#10006;</div>
                <div class="wappprofile">
                    <div class="wappimg">
                        <img src="{{uploaded_asset($widget_meta->image)}}" alt="">
                    </div>
                    <div class="wappinfo">
                        <div class="wappname" id="wappname">{{$widget_meta->chat_header}}</div>
                        <div class="wappstatus" id="wappstatus">{{$widget_meta->caption}}</div>
                    </div>
                </div>
            </div>
            <div class="wappbody">
                @if($widget_meta->start_chat == 'Enabled')
                    <div class="wappwelcomemsg">
                        <div class="wapptriangle"></div>
                        <div class="wappsendersname">Rayan Perera</div>
                        <div class="wappmsg">{!! $widget_meta->welcome_message !!}</div>
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
</div>
`;

document.getElementById('apple').appendChild(div);
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

