<div class="ims__side-col">
                <!-- <div class="ims__sideNav--toggler">
                    <i onclick="sideNavToggle()" class="bi bi-list"></i>
                </div> -->
                <div class="ims__side-nav">
                    <div class="side-nav__header">
                        <div class="logo-block">
                            <img src="{{url('images/full-logo.png')}}"  class="logo">
                            <div class="logo-text">- IMS</div>
                        </div>
                        <div class="caption">Inquiry Management Systems</div>
                        <a href="{{ route('frontend.user.project.optimizer', $project_id ?? '') }}" style="text-decoration:none;" rel="noopener noreferrer" target="_blank">
                            <div class="live-status-block">
                                <i class="bi bi-broadcast"></i>
                                <div class="caption">Live Visitors</div>
                                <div class="count">{{\App\Models\VisitorCount::where('project_id',$project_id ?? '')->count()}}</div>
                            </div>
                        </a>
                    </div>
                    <div class="side-nav__navs" id="sideNavs">
                        <ul class="navbar-nav">
                            
                            <li class="nav-item">
                                <a href="{{ route('frontend.user_widget.ims_pro_media_scan', $project_id ?? '') }}" class="nav-link {{Request::segment(2)=='ims_pro_media_scan' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-speedometer2"></i>
                                            @if(whatsapp_server_status($project_id ?? '')['connection_status'] != 'Authenticated')
                                                <div class="text">Media Scan</div>
                                            @else
                                                <div class="text">Dashboard</div>
                                            @endif
                                        <!-- <div class="count ims__hidden">2400</div> -->
                                    </div>
                                </a>
                            </li>

                     
                            <li class="nav-item">
                                <a href="{{route('frontend.user_widget.ims_pro_index',[$project_id ?? '','phone_number','type'])}}" class="nav-link {{Request::segment(2)=='ims_pro_index' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-person-lines-fill"></i>
                                        <div class="text">Conversation</div>
                                    </div>
                                </a>
                            </li>
                                   
                            
                            <li class="nav-item">
                                <a href="{{ route('frontend.user_widget.ims_pro_chat_summary', $project_id ?? '') }}" class="nav-link {{Request::segment(2)=='ims_pro_chat_summary' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-person-x"></i>
                                        <div class="text">Inquiry Summary</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('frontend.user_widget.ims_pro_contacts', $project_id ?? '') }}" class="nav-link {{Request::segment(2)=='ims_pro_contacts' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-person-x"></i>
                                        <div class="text">Contacts</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <div class="accordion" id="bcAcc">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="bcHead">
                                            <button class="bc-btn {{Request::segment(2)=='ims_pro_broadcast' ? 'active' :null }} collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bcCol" aria-expanded="true" aria-controls="bcCol">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-x"></i>
                                                <div class="text">Broadcast</div>
                                                <i class="bi bi-chevron-down"></i>
                                            </div>
                                            </button>
                                        </h2>
                                        <div id="bcCol" class="accordion-collapse collapse" aria-labelledby="bcHead" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item">
                                                        <a href="{{ route('frontend.user_widget.ims_pro_broadcast', $project_id ?? '') }}" class="nav-link {{Request::segment(4)=='history' ? 'active' :null }}">
                                                            <div class="nav-link__block">
                                                                <i class="bi bi-clock-history"></i>
                                                                <div class="text">History</div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('frontend.user_widget.ims_pro_broadcast_schedule', $project_id ?? '') }}" class="nav-link">
                                                            <div class="nav-link__block">
                                                                <i class="bi bi-calendar2-plus"></i>
                                                                <div class="text">Schedule</div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('frontend.user_widget.ims_pro_broadcast_template', $project_id ?? '') }}" class="nav-link {{Request::segment(4)=='template' ? 'active' :null }}">
                                                            <div class="nav-link__block">
                                                                <i class="bi bi-layout-text-window-reverse"></i>
                                                                <div class="text">Template</div>                                                              
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                         
                            @if(count($ims_pro_user_details) != 0)
                                @foreach($ims_pro_user_details as $ims_pro_user_detail)
                                    @if(is_ims_pro_agent($ims_pro_user_detail->id))
                                        <li class="nav-item">
                                            <a href="{{ route('frontend.user_widget.ims_pro_my_inquiry', $project_id ?? '') }}" class="nav-link {{Request::segment(2)=='ims_pro_my_inquiry' ? 'active' :null }}">
                                                <div class="nav-link__block">
                                                    <i class="bi bi-chevron-down ims__hidden"></i>
                                                    <i class="bi bi-person-check"></i>
                                                    <div class="text">My Inquiries</div>
                                                    <!-- <div class="count ims__hidden">2400</div> -->
                                                </div>
                                            </a>
                                        </li>
                                    @endif
                                    @break;
                                @endforeach
                            @endif
                           
                                                  
                            

                        </ul>
                    </div>
                </div>
            </div>