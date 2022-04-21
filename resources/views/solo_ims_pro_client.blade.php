<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analytics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <div class="p-4 mt-2">
        <h2 class="text-center mb-5">Conversation</h2>
      
                                    
        <div class="chat-window">
                                                        <div class="header">
                                                            <div class="profile-block">
                                                                <div class="status-block">
                                                                                                                                
                                                                </div>
                                                            </div>
                                                            <div class="option-block">
                                                                <ul class="navbar-nav">
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link delete" data-bs-toggle="modal" data-bs-target="#delete_conversation"><i class="bi bi-trash"></i></a>
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
                                                                                <div class="message">
                                                                                    <div class="text" >{{$solo_ims_pro_client_message->message}}</div>
                                                                                </div>
                                                                                <input type="hidden" name="incoming_mobile_number" id="incoming_mobile_number" value="{{$solo_ims_pro_client_message->phone_number}}">
                                                                                <input type="hidden" name="incoming_type" id="incoming_type" value="{{$solo_ims_pro_client_message->type}}">
                                                                                <input type="hidden" name="incoming_project_id" id="incoming_project_id" value="{{$solo_ims_pro_client_message->project_id}}">
                                                                                <input type="hidden" name="incoming_widget_id" id="incoming_widget_id" value="{{$solo_ims_pro_client_message->wideget_id}}">
                                                                              
                                                                            </div>
                                                                        @else
                                                                            @if($solo_ims_pro_client_message->core_type != 'assign')
                                                                                <div class="message-block outgoing">
                                                                                    <div class="message">
                                                                                        <div class="text">{{$solo_ims_pro_client_message->message}}</div>
                                                                                    </div>
                                                                                </div>
                                                                            @else

                                                                                <div class="message-block incoming">                                                                             
                                                                                    <div class="label">
                                                                                        <span class="text">{{$solo_ims_pro_client_message->message}}</span>
                                                                                        <!-- <span class="time">12 days</span> -->
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

                                                              


                                                            </div>
                                                        @endif

                                                    </div>
                                                                    
    </div>
</body>
</html>