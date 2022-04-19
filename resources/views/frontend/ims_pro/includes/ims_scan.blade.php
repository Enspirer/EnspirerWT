<link rel="stylesheet" href="{{url('css/ims_pro-media_scan.css')}}">

@if(whatsapp_server_status($project_id)['connection_status'] != 'Authenticated')
    <div class="row g-0">
        <div class="qr-section">
            <div class="content-block">
                <div class="title">Scan the QR-code to connect your Whatsapp number</div>
                <ul class="steps">
                    <li><span class="no">01.</span><div class="text">Open WhatsApp on your phone</div></li>
                    <li><span class="no">02.</span><div class="text">Tap <span>Menu</span> or <span>Settings</span> and select <span>Linked Devices</span></div></li>
                     <li><span class="no">03.</span><div class="text">Point your phone to this screen to capture the code</div></li>
                </ul>
                <div class="text">If you have Whatsapp MultiDevice enabled, please generate <a href="#" class="qr-section-link">Whatsapp Multidevice QR code here</a> instead.</div>
                <a href="#" class="qr-section-link">Need help to get started ?</a>
            </div>
            <div class="qr-code">
                   <iframe src="https://{{whatsapp_server_status( $project_id )['server_endpoint']}}" height="300px">

                   </iframe>
            </div>
        </div>
    </div>
@else
<div class="row g-0">
        <div class="section-chatStats">
            <div class="header">
                <div class="text-block">
                    <h2 class="title">Good Morning, 
                        @auth
                            {{auth()->user()->first_name}} {{auth()->user()->last_name}}
                        @else
                            @if(count($ims_pro_user_details) != 0)
                                @foreach($ims_pro_user_details as $ims_pro_user_detail)  
                                    {{$ims_pro_user_detail->name}}
                                    @break;
                                @endforeach
                            @endif
                        @endauth
                    </h2>
                    <div class="text">Here's your websites situation for today</div>
                </div>
                <div class="button-block">
                    <input type="date" class="form-control" value="2022-04-18">
                    <a href="#" class="chat-btn">Unread Chat</a>
                </div>
            </div>
            <div class="body">
                <div class="card-section">
                    <div class="card card-whatsapp">
                        <div class="image-block">
                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                        </div>
                        <div class="content-block">
                            <div class="label">Unread Chat</div>
                            @if(!empty( auth()->user()->id) === true )
                                <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','WhatsApp')->where('user_id',auth()->user()->id)->get()) }}</div>
                            @else
                                @if(count($ims_pro_user_details) != 0)
                                    @foreach($ims_pro_user_details as $ims_pro_user_detail) 
                                        <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','WhatsApp')->where('user_id',$ims_pro_user_detail->id)->get()) }}</div>
                                        @break;
                                    @endforeach
                                @endif
                            @endif
                            <div class="media">WhatsApp</div>
                        </div>
                    </div>
                    <div class="card card-messenger">
                        <div class="image-block">
                            <img src="{{url('images/social_media_icons/messenger.png')}}" alt="">
                        </div>
                        <div class="content-block">
                            <div class="label">Unread Chat</div>
                            @if(!empty( auth()->user()->id) === true )
                                <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Messenger')->where('user_id',auth()->user()->id)->get()) }}</div>
                            @else
                                @if(count($ims_pro_user_details) != 0)
                                    @foreach($ims_pro_user_details as $ims_pro_user_detail) 
                                        <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Messenger')->where('user_id',$ims_pro_user_detail->id)->get()) }}</div>
                                        @break;
                                    @endforeach
                                @endif
                            @endif
                            <div class="media">Messenger</div>
                        </div>
                    </div>
                    <div class="card card-line">
                        <div class="image-block">
                            <img src="{{url('images/social_media_icons/line.png')}}" alt="">
                        </div>
                        <div class="content-block">
                            <div class="label">Unread Chat</div>
                            @if(!empty( auth()->user()->id) === true )
                                <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Line')->where('user_id',auth()->user()->id)->get()) }}</div>
                            @else
                                @if(count($ims_pro_user_details) != 0)
                                    @foreach($ims_pro_user_details as $ims_pro_user_detail) 
                                        <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Line')->where('user_id',$ims_pro_user_detail->id)->get()) }}</div>
                                        @break;
                                    @endforeach
                                @endif
                            @endif
                            <div class="media">Line</div>
                        </div>
                    </div>
                    <div class="card card-telegram">
                        <div class="image-block">
                            <img src="{{url('images/social_media_icons/telegram.png')}}" alt="">
                        </div>
                        <div class="content-block">
                            <div class="label">Unread Chat</div>
                            @if(!empty( auth()->user()->id) === true )
                                <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Tawk.To')->where('user_id',auth()->user()->id)->get()) }}</div>
                            @else
                                @if(count($ims_pro_user_details) != 0)
                                    @foreach($ims_pro_user_details as $ims_pro_user_detail) 
                                        <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Tawk.To')->where('user_id',$ims_pro_user_detail->id)->get()) }}</div>
                                        @break;
                                    @endforeach
                                @endif
                            @endif
                            <div class="media">Telegram</div>
                        </div>
                    </div>
                    <div class="card card-tawkto">
                        <div class="image-block">
                            <img src="{{url('images/social_media_icons/tawkto.png')}}" alt="">
                        </div>
                        <div class="content-block">
                            <div class="label">Unread Chat</div>
                            @if(!empty( auth()->user()->id) === true )
                                <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Messenger')->where('user_id',auth()->user()->id)->get()) }}</div>
                            @else
                                @if(count($ims_pro_user_details) != 0)
                                    @foreach($ims_pro_user_details as $ims_pro_user_detail) 
                                        <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Messenger')->where('user_id',$ims_pro_user_detail->id)->get()) }}</div>
                                        @break;
                                    @endforeach
                                @endif
                            @endif
                            <div class="media">Tawk.To</div>
                        </div>
                    </div>
                    <div class="card card-viber">
                        <div class="image-block">
                            <img src="{{url('images/social_media_icons/viber.png')}}" alt="">
                        </div>
                        <div class="content-block">
                            <div class="label">Unread Chat</div>
                            @if(!empty( auth()->user()->id) === true )
                                <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Viber')->where('user_id',auth()->user()->id)->get()) }}</div>
                            @else
                                @if(count($ims_pro_user_details) != 0)
                                    @foreach($ims_pro_user_details as $ims_pro_user_detail) 
                                        <div class="count">{{ count(App\Models\ImsProClientMessages::where('project_id',$project_id)->where('type','Viber')->where('user_id',$ims_pro_user_detail->id)->get()) }}</div>
                                        @break;
                                    @endforeach
                                @endif
                            @endif
                            <div class="media">Viber</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif