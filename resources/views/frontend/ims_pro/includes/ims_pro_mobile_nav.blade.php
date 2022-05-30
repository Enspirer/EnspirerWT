<div class="ims-pro-mobile-nav">
    <button type="button" class="nav-toggler" data-bs-toggle="modal" data-bs-target="#navToggleModal">
        <i class="bi bi-list"></i>
    </button>
    <a href="#" class="brand">Tallentor - IMS</a>
    <div class="profile-block">
        @auth()
        <div class="dropdown mob-profile-drop">
          <button class="profile-drop-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{auth()->user()->picture}}" alt="">
          </button>
          <ul class="dropdown-menu dropdown-menu-end profile-drop-menu">
            <li>
              <a class="dropdown-item" href="#">
                <div class="name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{url('dashboard')}}">
                <i class="bi bi-pc-display"></i>
                <div class="text">Dashboard</div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{url('reports')}}">
                <i class="bi bi-journal-text"></i>
                <div class="text">Reports</div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{url('projects')}}">
                <i class="bi bi-card-checklist"></i>
                <div class="text">Projects</div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{url('settings')}}">
                <i class="bi bi-person"></i>
                <div class="text">Your Details</div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{url('settings')}}">
                <i class="bi bi-pencil"></i>
                <div class="text">Edit Profile</div>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="{{url('settings')}}">
                <i class="bi bi-shield-check"></i>
                <div class="text">Password & Security</div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{url('settings')}}">
                <i class="bi bi-box-seam"></i>
                <div class="text">Choose Plan</div>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="{{route('frontend.auth.logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <div class="text">Sign Out</div>
              </a>
            </li>
          </ul>
        </div>
        @endauth
    </div>
</div>

<!-- Nav Modal -->
<div class="modal fade nav-toggle-modal" id="navToggleModal" tabindex="-1" aria-labelledby="navToggleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
        <div class="live-visitors">
          <i class="bi bi-broadcast"></i>
          <div class="text">Live Visitors</div>
          <div class="count">{{\App\Models\VisitorCount::where('project_id',$project_id ?? '')->count()}}</div>
        </div>
        <a href="{{url('dashboard')}}" class="main-dashboard">Main Dashboard</a>
        <i class="bi bi-x-lg" data-bs-dismiss="modal" aria-label="Close"></i>
        <div class="navs">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{Request::segment(2)=='ims_pro_media_scan' ? 'active' :null }}" href="{{ route('frontend.user_widget.ims_pro_media_scan', $project_id ?? '') }}">
                        @if(whatsapp_server_status($project_id ?? '')['connection_status'] != 'Authenticated')
                            <span class="text">Media Scan</span>
                        @else
                            <span class="text">Dashboard</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::segment(2)=='ims_pro_index' ? 'active' :null }}" href="{{route('frontend.user_widget.ims_pro_index',[$project_id ?? '','phone_number','type'])}}">
                        <span class="text">Conversation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::segment(2)=='ims_pro_chat_summary' ? 'active' :null }}" href="{{ route('frontend.user_widget.ims_pro_chat_summary', $project_id ?? '') }}">
                        <span class="text">Inquiry Summary</span>
                    </a>
                </li>
                <li class="nav-item {{Request::segment(2)=='ims_pro_contacts' ? 'active' :null }}">
                    <a class="nav-link" href="{{ route('frontend.user_widget.ims_pro_contacts', $project_id ?? '') }}">
                        <span class="text">Contacts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="billingAcc">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="billingHead">
                                <button class="nav-link {{Request::segment(2)=='ims_pro_broadcast' ? 'active' :null }} collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bililngCollapse" aria-expanded="true" aria-controls="bililngCollapse">
                                    <span class="text">Broadcast</span>
                                </button>
                            </h2>
                            <div id="bililngCollapse" class="accordion-collapse collapse" aria-labelledby="billingHead" data-bs-parent="#billingAcc">
                                <div class="accordion-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="{{ route('frontend.user_widget.ims_pro_broadcast', $project_id ?? '') }}" class="nav-link {{Request::segment(4)=='history' ? 'active' :null }}">
                                                <span class="text">History</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('frontend.user_widget.ims_pro_broadcast_schedule', $project_id ?? '') }}" class="nav-link {{Request::segment(4)=='schedule' ? 'active' :null }}">
                                                <span class="text">Schedule</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('frontend.user_widget.ims_pro_broadcast_template', $project_id ?? '') }}" class="nav-link {{Request::segment(4)=='template' ? 'active' :null }}">
                                                <span class="text">Template</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
  </div>
</div>