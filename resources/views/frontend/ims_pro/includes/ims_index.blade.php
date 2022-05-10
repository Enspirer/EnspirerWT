            <div class="section-chatWindow">
                                    <div class="row g-4">
                                        <div class="col-3">
                                            <div class="chat-list-window">
                                                <div class="filter-section">

                                                    <form action="{{route('frontend.user_widget.ims_pro_index',[$project_id,'phone_number','type'])}}" method="get" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                        <div class="search-input">
                                                            <i class="bi bi-search"></i>
                                                            <input type="search" class="form-control" name="search_name" id="search_name" placeholder="Search Chat" required>
                                                        </div>
                                                    </form>

                                                    <div class="filter dropdown">
                                                        <a class="filter-dropdown imsPro-dropdown" href="#" role="button" id="filterDrop" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="bi bi-funnel"></i>
                                                        </a>

                                                        <ul class="dropdown-menu" aria-labelledby="filterDrop">
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">All Chat</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Active Chat</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item active" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Unassigned</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Last 24 Hours</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Assigned to me</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Favorite only</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">New</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Open</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Pending</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Closed</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Spam</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Blocked Chats</div>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="chat-list">
                                                    <div class="inner-wrapper">
                                                        <ul class="list-group list-group-flush">



                                                            @if($all_ims_pro_client_messages != null)
                                                            @if(count($all_ims_pro_client_messages) != 0)
                                                                @foreach($all_ims_pro_client_messages as $ims_pro_client_message)
                                                                    @if($solo_ims_pro_client == null)
                                                                        @if($ims_pro_client_message->phone_number == "")

                                                                        @else
                                                                                <li class="list-group-item">
                                                                                    <a href="{{route('frontend.user_widget.ims_pro_index',[$ims_pro_client_message->project_id,$ims_pro_client_message->phone_number,$ims_pro_client_message->type])}}" class="list-link">
                                                                                        <div class="header">
                                                                                            <div class="profile">
                                                                                                @if($ims_pro_client_message->is_read == 'Pending')
                                                                                                    <div class="indicator active"></div>
                                                                                                @endif
                                                                                                <div class="image-block">
                                                                                                    <img src="{{url('images/test.png')}}" alt="">
                                                                                                    @if($ims_pro_client_message->type == 'WhatsApp')
                                                                                                        <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="chat-client">
                                                                                                    @elseif($ims_pro_client_message->type == 'Messenger')
                                                                                                        <img src="{{url('images/social_media_icons/messenger.png')}}" alt="" class="chat-client">
                                                                                                    @elseif($ims_pro_client_message->type == 'Telegram')
                                                                                                        <img src="{{url('images/social_media_icons/telegram.png')}}" alt="" class="chat-client">
                                                                                                    @elseif($ims_pro_client_message->type == 'Viber')
                                                                                                        <img src="{{url('images/social_media_icons/viber.png')}}" alt="" class="chat-client">
                                                                                                    @elseif($ims_pro_client_message->type == 'Line')
                                                                                                        <img src="{{url('images/social_media_icons/line.png')}}" alt="" class="chat-client">
                                                                                                    @endif
                                                                                                </div>
                                                                                                <div class="status-block">
                                                                                                        @if(get_contact_info($ims_pro_client_message->phone_number))
                                                                                                            @if($ims_pro_client_message->notify_name)
                                                                                                            <div class="name">{{ get_contact_info($ims_pro_client_message->phone_number) }}</div>
                                                                                                            @else
                                                                                                            <div class="name">{{ get_contact_info($ims_pro_client_message->notify_name) }}</div>

                                                                                                            @endif

                                                                                                            <div class="contact">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @else
                                                                                                            <div class="name">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @endif

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="active-status">{{$ims_pro_client_message->created_at->diffForHumans(null,true)}}</div>
                                                                                        </div>
                                                                                        <div class="message">{{$ims_pro_client_message->message}}</div>
                                                                                    </a>
                                                                                </li>
                                                                        @endif


                                                                    @else
                                                                        @if($ims_pro_client_message->phone_number == $solo_ims_pro_client->phone_number)
                                                                            @if($ims_pro_client_message->phone_number == "")

                                                                            @else
                                                                                    <li class="list-group-item active">
                                                                                        <a href="{{route('frontend.user_widget.ims_pro_index',[$ims_pro_client_message->project_id,$ims_pro_client_message->phone_number,$ims_pro_client_message->type])}}" class="list-link">
                                                                                            <div class="header">
                                                                                                <div class="profile">
                                                                                                    @if($solo_ims_pro_client->is_read == 'Pending')
                                                                                                        <div class="indicator active"></div>
                                                                                                    @endif
                                                                                                    <div class="image-block">
                                                                                                        <img src="{{url('images/test.png')}}" alt="">
                                                                                                        @if($ims_pro_client_message->type == 'WhatsApp')
                                                                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="chat-client">
                                                                                                        @elseif($ims_pro_client_message->type == 'Messenger')
                                                                                                            <img src="{{url('images/social_media_icons/messenger.png')}}" alt="" class="chat-client">
                                                                                                        @elseif($ims_pro_client_message->type == 'Telegram')
                                                                                                            <img src="{{url('images/social_media_icons/telegram.png')}}" alt="" class="chat-client">
                                                                                                        @elseif($ims_pro_client_message->type == 'Viber')
                                                                                                            <img src="{{url('images/social_media_icons/viber.png')}}" alt="" class="chat-client">
                                                                                                        @elseif($ims_pro_client_message->type == 'Line')
                                                                                                            <img src="{{url('images/social_media_icons/line.png')}}" alt="" class="chat-client">
                                                                                                        @endif
                                                                                                    </div>
                                                                                                    <div class="status-block">
                                                                                                        @if(get_contact_info($ims_pro_client_message->phone_number))
                                                                                                            <div class="name">{{ get_contact_info($ims_pro_client_message->phone_number) }}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @else
                                                                                                            <div class="name">{{is_wa_group($ims_pro_client_message->phone_number)}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @endif
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="active-status">{{$ims_pro_client_message->created_at->diffForHumans(null,true)}}</div>
                                                                                            </div>
                                                                                            <div class="message">{{$ims_pro_client_message->message}}</div>
                                                                                        </a>
                                                                                    </li>
                                                                            @endif

                                                                        @else

                                                                            @if($ims_pro_client_message->phone_number == "")

                                                                            @else
                                                                                    <li class="list-group-item">
                                                                                        <a href="{{route('frontend.user_widget.ims_pro_index',[$ims_pro_client_message->project_id,$ims_pro_client_message->phone_number,$ims_pro_client_message->type])}}" class="list-link">
                                                                                            <div class="header">
                                                                                                <div class="profile">
                                                                                                    @if($solo_ims_pro_client->is_read == 'Pending')
                                                                                                        <div class="indicator active"></div>
                                                                                                    @endif
                                                                                                    <div class="image-block">
                                                                                                        <img src="{{url('images/test.png')}}" alt="">
                                                                                                        @if($ims_pro_client_message->type == 'WhatsApp')
                                                                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="chat-client">
                                                                                                        @elseif($ims_pro_client_message->type == 'Messenger')
                                                                                                            <img src="{{url('images/social_media_icons/messenger.png')}}" alt="" class="chat-client">
                                                                                                        @elseif($ims_pro_client_message->type == 'Telegram')
                                                                                                            <img src="{{url('images/social_media_icons/telegram.png')}}" alt="" class="chat-client">
                                                                                                        @elseif($ims_pro_client_message->type == 'Viber')
                                                                                                            <img src="{{url('images/social_media_icons/viber.png')}}" alt="" class="chat-client">
                                                                                                        @elseif($ims_pro_client_message->type == 'Line')
                                                                                                            <img src="{{url('images/social_media_icons/line.png')}}" alt="" class="chat-client">
                                                                                                        @endif
                                                                                                    </div>
                                                                                                    <div class="status-block">
                                                                                                        @if(get_contact_info($ims_pro_client_message->phone_number))
                                                                                                            <div class="name">{{ get_contact_info($ims_pro_client_message->phone_number) }}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @else
                                                                                                            <div class="name">{{is_wa_group($ims_pro_client_message->phone_number)}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @endif
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="active-status">{{$ims_pro_client_message->created_at->diffForHumans(null,true)}}</div>
                                                                                            </div>
                                                                                            <div class="message">{{$ims_pro_client_message->message}}</div>
                                                                                        </a>
                                                                                    </li>
                                                                            @endif

                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                            @else
                                                                @include('frontend.includes.not_found_chat',[
                                                                    'not_found_title' => 'Chats Not Found',
                                                                    'not_found_description' => null,
                                                                    'not_found_button_caption' => null
                                                                ])
                                                            @endif
                                                            @endif




                                                            <!-- <li class="list-group-item">
                                                                <a href="#" class="list-link">
                                                                    <div class="header">
                                                                        <div class="profile">
                                                                            <div class="indicator active"></div>
                                                                            <div class="image-block">
                                                                                <img src="{{url('images/test.png')}}" alt="">
                                                                                <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="chat-client">
                                                                            </div>
                                                                            <div class="status-block">
                                                                                <div class="name">Suranga Dinesh</div>
                                                                                <div class="contact">(+94) 77 755 4571</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="active-status">5m</div>
                                                                    </div>
                                                                    <div class="message">Hi, will this item be shipped today ?</div>
                                                                </a>
                                                            </li> -->

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            @if($solo_ims_pro_client != null)
                                                    <div class="chat-window">
                                                        <div class="header">
                                                            <div class="profile-block">
                                                                <div class="image-block">
                                                                    <img src="{{url('images/test.png')}}" alt="">
                                                                </div>
                                                                <div class="status-block">
                                                                    @if(get_contact_info($ims_pro_client_message->phone_number))
                                                                        <div class="name">{{ get_contact_info($ims_pro_client_message->phone_number) }}</div>
                                                                        <div class="contact">{{$solo_ims_pro_client->phone_number}}</div>
                                                                        <div class="contact">{{$solo_ims_pro_client->type}}</div>
                                                                    @else
                                                                        <div class="name">{{is_wa_group($solo_ims_pro_client->phone_number)}}</div>
                                                                        <div class="contact">{{$solo_ims_pro_client->type}}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="option-block">
                                                                <ul class="navbar-nav">
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link delete" data-bs-toggle="modal" data-bs-target="#delete_conversation"><i class="bi bi-trash"></i></a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <div href="#" class="nav-link dropdown">
                                                                            <a class="progress-dropdown imsPro-dropdown" href="#" role="button" id="progressDrop" data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i class="bi bi-journal-medical"></i>
                                                                            </a>

                                                                            <ul class="dropdown-menu" aria-labelledby="progressDrop">
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#">
                                                                                        <div class="indicator pending"></div>
                                                                                        <div class="text">Pending</div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#">
                                                                                        <div class="indicator inprogress"></div>
                                                                                        <div class="text">In Progress</div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#">
                                                                                        <div class="indicator closed"></div>
                                                                                        <div class="text">Closed</div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#">
                                                                                        <div class="indicator spam"></div>
                                                                                        <div class="text">Spam</div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    @if(App\Models\ImsProContacts::where('phone_number',$solo_ims_pro_client->phone_number)->first() == null)
                                                                        <li class="nav-item">
                                                                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#createModal"><i class="bi bi-journal-medical"></i></a>
                                                                        </li>
                                                                    @endif
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link"><i class="bi bi-three-dots-vertical"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="body">
                                                            <div class="date">August 21</div>
                                                            <div class="inner-wrapper" id="incoming_outgoing_chat_messages">

                                                                @if(count($solo_ims_pro_client_messages) != 0)
                                                                    @foreach($solo_ims_pro_client_messages as $solo_ims_pro_client_message)
                                                                        @if($solo_ims_pro_client_message->user_id == null)
                                                                            <div class="message-block incoming" >
                                                                                <div class="image-block">
                                                                                    <img src="{{url('images/test.png')}}" alt="">
                                                                                </div>
                                                                                <div class="message">
                                                                                    <div class="text" >{{$solo_ims_pro_client_message->message}}</div>
                                                                                </div>
                                                                                <input type="hidden" name="incoming_mobile_number" id="incoming_mobile_number" value="{{$solo_ims_pro_client_message->phone_number}}">
                                                                                <input type="hidden" name="incoming_type" id="incoming_type" value="{{$solo_ims_pro_client_message->type}}">
                                                                                <input type="hidden" name="incoming_project_id" id="incoming_project_id" value="{{$solo_ims_pro_client_message->project_id}}">
                                                                                <input type="hidden" name="incoming_widget_id" id="incoming_widget_id" value="{{$solo_ims_pro_client_message->wideget_id}}">
                                                                                {{--<div class="label">--}}
                                                                                    {{--<span class="text">Called from Suranga Dinesh to (+94) 77 755 4571</span>--}}
                                                                                    {{--<span class="time">12 days</span>--}}
                                                                                {{--</div>--}}
                                                                            </div>
                                                                        @else
                                                                            @if($solo_ims_pro_client_message->core_type != 'assign')
                                                                                <div class="message-block outgoing">
                                                                                    <div class="image-block">
                                                                                        <img src="{{url('images/test.png')}}" alt="">
                                                                                    </div>
                                                                                    <div class="message">
                                                                                        <div class="text">{{$solo_ims_pro_client_message->message}}</div>
                                                                                    </div>
                                                                                    {{--<div class="label">--}}
                                                                                        {{--<span class="text">Called from Suranga Dinesh to (+94) 77 755 4571</span>--}}
                                                                                        {{--<span class="time">12 days</span>--}}
                                                                                    {{--</div>--}}
                                                                                </div>
                                                                                <input type="hidden" name="incoming_mobile_number" id="incoming_mobile_number" value="{{$solo_ims_pro_client_message->phone_number}}">
                                                                                <input type="hidden" name="incoming_type" id="incoming_type" value="{{$solo_ims_pro_client_message->type}}">
                                                                                <input type="hidden" name="incoming_project_id" id="incoming_project_id" value="{{$solo_ims_pro_client_message->project_id}}">
                                                                                <input type="hidden" name="incoming_widget_id" id="incoming_widget_id" value="{{$solo_ims_pro_client_message->wideget_id}}">
                                                                            @else

                                                                                <div class="message-block incoming">
                                                                                    <div class="label">
                                                                                        <span class="text">{{$solo_ims_pro_client_message->message}}</span>
                                                                                        <!-- <span class="time">12 days</span> -->
                                                                                        <input type="hidden" name="incoming_mobile_number" id="incoming_mobile_number" value="{{$solo_ims_pro_client_message->phone_number}}">
                                                                                        <input type="hidden" name="incoming_type" id="incoming_type" value="{{$solo_ims_pro_client_message->type}}">
                                                                                        <input type="hidden" name="incoming_project_id" id="incoming_project_id" value="{{$solo_ims_pro_client_message->project_id}}">
                                                                                        <input type="hidden" name="incoming_widget_id" id="incoming_widget_id" value="{{$solo_ims_pro_client_message->wideget_id}}">
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                @endif

                                                            </div>
                                                        </div>

                                                        @if($solo_ims_pro_client->type == 'WhatsApp')
                                                            <div class="footer">

                                                                <input type="hidden" name="phone_number" id="phone_number" value="{{$solo_ims_pro_client->phone_number}}">
                                                                <input type="hidden" name="project_id" id="project_id" value="{{$solo_ims_pro_client->project_id}}">
                                                                <input type="hidden" name="widget_id" id="widget_id" value="{{$solo_ims_pro_client->wideget_id}}">
                                                                @auth
                                                                    <input type="hidden" name="hidden_user_email" id="hidden_user_email" value="{{auth()->user()->email}}">
                                                                    <input type="hidden" name="hidden_user_id" id="hidden_user_id" value="{{auth()->user()->id}}">
                                                                    <input type="hidden" name="hidden_user_type" id="hidden_user_type" value="admin_user">
                                                                @else
                                                                    @if(count($ims_pro_user_details) != 0)
                                                                        @foreach($ims_pro_user_details as $ims_pro_user_detail)
                                                                            <input type="hidden" name="hidden_user_email" id="hidden_user_email" value="{{App\Models\IMSProUsers::where('id',$ims_pro_user_detail->id)->first()->email}}">
                                                                            <input type="hidden" name="hidden_user_id" id="hidden_user_id" value="{{$ims_pro_user_detail->id}}">
                                                                            @if(App\Models\IMSProUsers::where('id',$ims_pro_user_detail->id)->first()->role == 'Admin')
                                                                                <input type="hidden" name="hidden_user_type" id="hidden_user_type" value="admin_user">
                                                                            @else
                                                                                <input type="hidden" name="hidden_user_type" id="hidden_user_type" value="sub_user">
                                                                            @endif

                                                                            @break;
                                                                        @endforeach
                                                                    @endif
                                                                @endauth

                                                                <input type="hidden" name="core_type" id="core_type" value="message">

                                                                {{--Chat Write   --}}

                                                                @if(whatsapp_server_status( $project_id )['connection_status'] == 'Authenticated' )
                                                                            <input type="text" name="message" id="message" class="msg-input" placeholder="Type your message here...">
                                                                            <button type="submit" onClick="submit_chat()" class="btn-send"><i class="bi bi-send-fill"></i></button>
                                                                @else
                                                                            <input type="text" name="message" id="message" class="msg-input" placeholder="Please Connect your WhatsApp Account">
                                                                @endif


                                                            </div>
                                                        @endif

                                                    </div>
                                            @else
                                                @include('frontend.includes.not_found_chat',[
                                                    'not_found_title' => 'Chats Details Not Found',
                                                    'not_found_description' => null,
                                                    'not_found_button_caption' => null
                                                ])
                                            @endif
                                        </div>
                                        <div class="col-4">
                                            @if($solo_ims_pro_client != null)
                                                    <div class="info-window">
                                                        <div class="header">
                                                            <div class="status">In Progress</div>
                                                            <div class="image-block">
                                                                <img src="{{url('images/test.png')}}" alt="">
                                                            </div>
                                                            <div class="name">{{$solo_ims_pro_client->name}}</div>
                                                            <div class="chat-client">
                                                                @if($solo_ims_pro_client->type == 'WhatsApp')
                                                                    <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                                @elseif($solo_ims_pro_client->type == 'Messenger')
                                                                    <img src="{{url('images/social_media_icons/messenger.png')}}" alt="">
                                                                @elseif($solo_ims_pro_client->type == 'Telegram')
                                                                    <img src="{{url('images/social_media_icons/telegram.png')}}" alt="">
                                                                @elseif($solo_ims_pro_client->type == 'Viber')
                                                                    <img src="{{url('images/social_media_icons/viber.png')}}" alt="">
                                                                @elseif($solo_ims_pro_client->type == 'Line')
                                                                    <img src="{{url('images/social_media_icons/line.png')}}" alt="">
                                                                @endif
                                                                <div class="text green">{{$solo_ims_pro_client->type}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="inner-wrapper">
                                                            <div class="info-block">
                                                                <table class="table table-borderless">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="icons"><i class="bi bi-briefcase-fill"></i></td>
                                                                            <td class="title">Company</td>
                                                                            <td class="inputs"><input class="table-input" id="company" name="company" onChange="chat_user_details()" type="text" placeholder="Set a company ..."></td>
                                                                        </tr>
                                                                        <!-- <tr>
                                                                            <td class="icons"><i class="bi bi-person-fill"></i></td>
                                                                            <td class="title">Role</td>
                                                                            <td class="inputs"><input class="table-input" id="user_role" name="user_role" onChange="chat_user_details()" type="text" placeholder="Set a role ..."></td>
                                                                        </tr> -->
                                                                        <tr>
                                                                            <td class="icons"><i class="bi bi-telephone-fill"></i></td>
                                                                            <td class="title">Phone</td>
                                                                            <td class="inputs"><input class="table-input" type="text" value="{{$solo_ims_pro_client->phone_number}}" disabled readonly></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="icons"><span class="bi">&commat;</span></td>
                                                                            <td class="title">Email</td>
                                                                            @if($solo_ims_pro_client->email != null)
                                                                                <td class="inputs"><input class="table-input" type="text" value="{{$solo_ims_pro_client->email}}" disabled readonly></td>
                                                                            @else
                                                                                <td class="inputs"><input class="table-input" type="text" value="-" disabled readonly></td>
                                                                            @endif
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="icons"><i class="bi bi-tags-fill"></i></td>
                                                                            <td class="title">Tags</td>
                                                                            <td class="inputs"><input class="table-input" id="tags" name="tags" onChange="chat_user_details()" type="text" placeholder="Set a tags ..."></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="optioin-block">
                                                                <table class="table table-borderless align-middle">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="icons"><i class="bi bi-people-fill"></i></td>
                                                                            <td class="title">Responsible</td>
                                                                            <td class="inputs">
                                                                                <div class="dropdown" id="assignDrop">
                                                                                    <a class="assign-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                        @if($solo_ims_pro_assigned != null)
                                                                                            <div class="text responsible">{{$solo_ims_pro_assigned->name}}</div>
                                                                                        @else
                                                                                            <div class="text responsible">Not assigned</div>
                                                                                        @endif

                                                                                        <i class="bi bi-chevron-down"></i>
                                                                                    </a>

                                                                                    <ul class="dropdown-menu" aria-labelledby="assignDrop">
                                                                                        <input type="hidden" name="ims_pro_phone_number" id="ims_pro_phone_number" value="{{$solo_ims_pro_client->phone_number}}">
                                                                                        <input type="hidden" name="ims_pro_project_id" id="ims_pro_project_id" value="{{$solo_ims_pro_client->project_id}}">
                                                                                        <input type="hidden" name="ims_pro_widget_id" id="ims_pro_widget_id" value="{{$solo_ims_pro_client->wideget_id}}">
                                                                                        @if(count($ims_pro_users) != 0)
                                                                                            @foreach($ims_pro_users as $ims_pro_user)
                                                                                                <li><a class="dropdown-item" id="{{$ims_pro_user->id}}" href="#"><div class="text">{{$ims_pro_user->name}}</div></a></li>
                                                                                            @endforeach
                                                                                        @endif
                                                                                    </ul>
                                                                                </div>
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="icons blue-icon"><i class="bi bi-bookmark-fill"></i></td>
                                                                            <td class="title" colspan="3">
                                                                                <a href="#" class="table-link">
                                                                                    <div class="text">Bookmarked Messages</div>
                                                                                    <i class="bi bi-chevron-right"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="icons blue-icon"><i class="bi bi-easel2-fill"></i></td>
                                                                            <td class="title" colspan="3">
                                                                                <a href="#" class="table-link">
                                                                                    <div class="text">Media, Links and Docs</div>
                                                                                    <i class="bi bi-chevron-right"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="icons blue-icon"><i class="bi bi-share-fill"></i></td>
                                                                            <td class="title" colspan="3">
                                                                                <a href="#" class="table-link">
                                                                                    <div class="text">Sharing Links</div>
                                                                                    <i class="bi bi-chevron-right"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <a href="{{ route('frontend.generate_report_file_pdf',[$solo_ims_pro_client->phone_number,$solo_ims_pro_client->project_id]) }}" class="btn-report-download">
                                                                    <i class="bi bi-download"></i>
                                                                    <div class="text">Download Report File</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @else
                                                @include('frontend.includes.not_found_chat',[
                                                    'not_found_title' => 'Chats Details Not Found',
                                                    'not_found_description' => null,
                                                    'not_found_button_caption' => null
                                                ])
                                            @endif
                                        </div>
                                    </div>
                                </div>
