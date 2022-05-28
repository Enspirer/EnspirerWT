<div class="mobile-nav">
    <button type="button" class="nav-toggler" data-bs-toggle="modal" data-bs-target="#navToggleModal">
        <i class="bi bi-list"></i>
    </button>
    <a href="{{url('dashboard')}}" class="brand">Tallentor</a>
    <div class="profile-block">
        @auth()
          @if(count(App\Models\Notification::where('user_id',auth()->user()->id)->where('status','Pending')->get()) != 0)
            <button type="button" class="mob-notification notify" data-bs-toggle="modal" data-bs-target="#mobNotifyModal">
                <i class="bi bi-bell"></i>
            </button>
          @else
            <button type="button" class="mob-notification" data-bs-toggle="modal" data-bs-target="#mobNotifyModal">
                <i class="bi bi-bell"></i>
            </button>
          @endif
        @endauth
        <button type="button" class="mob-property" data-bs-toggle="modal" data-bs-target="#mobPropertyModal">
            <i class="bi bi-gear"></i>
        </button>
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
        <a href="{{url('dashboard')}}" class="brand">Tallentor</a>
        <i class="bi bi-x-lg" data-bs-dismiss="modal" aria-label="Close"></i>
        <div class="navs">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{Request::segment(1)=='dashboard' ? 'active' :null }}" href="{{route('frontend.user.dashboard')}}">
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::segment(1)=='reports' ? 'active' :null }}" href="{{route('frontend.user.reports')}}">
                        <span class="text">Reports</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="billingAcc">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="billingHead">
                                <button class="nav-link {{Request::segment(1)=='billing' ? 'active' :null }} collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bililngCollapse" aria-expanded="true" aria-controls="bililngCollapse">
                                    <span class="text">Billing</span>
                                    <span class="alerts">05</span>
                                </button>
                            </h2>
                            <div id="bililngCollapse" class="accordion-collapse collapse" aria-labelledby="billingHead" data-bs-parent="#billingAcc">
                                <div class="accordion-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="{{route('frontend.user.billing')}}" class="nav-link {{Request::segment(2)=='project-invoice' ? 'active' :null }}">
                                                <span class="text">Project Invoice</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('frontend.user.custom_invoice')}}" class="nav-link {{Request::segment(2)=='custom-invoice' ? 'active' :null }}">
                                                <span class="text">Custom Invoice</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::segment(1)=='projects' ? 'active' :null }}" href="{{route('frontend.user.project.index')}}">
                        <span class="text">Projects</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="text">Tools</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::segment(1)=='settings' ? 'active' :null }}" href="{{route('frontend.user.settings.index')}}">
                        <span class="text">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
  </div>
</div>

<!-- Notification Modal -->
<div class="modal fade mob-notify-modal" id="mobNotifyModal" tabindex="-1" aria-labelledby="mobNotifyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <div class="title">Notifications</div>
        <i class="bi bi-x-lg" data-bs-dismiss="modal" aria-label="Close"></i>
      </div>
      @auth()
      <div class="modal-body">
        @if(count(App\Models\Notification::where('user_id',auth()->user()->id)->get()) != 0)
          <ul class="list-group list-group-flush">
            @foreach(App\Models\Notification::where('user_id',auth()->user()->id)->orderBy('id','desc')->take(15)->get() as $notification)
              @if($notification->status == 'Pending') 
              <li class="list-group-item">
                <a href="{{route('frontend.user.user_notifications_status',$notification->id)}}" class="list-link">
                  <i class="bi bi-chat-dots"></i>
                  <div class="text-block">
                    <div class="title">{{$notification->title}}</div>
                    <div class="text">{{$notification->description}}</div>
                  </div>
                  <div class="duration">{{$notification->created_at->diffForHumans()}}</div>
                </a>
              </li>
              @else
              <li class="list-group-item visited">
                <a href="{{route('frontend.user.user_notifications_status',$notification->id)}}" class="list-link">
                  <i class="bi bi-chat-dots"></i>
                  <div class="text-block">
                    <div class="title">{{$notification->title}}</div>
                    <div class="text">{{$notification->description}}</div>
                  </div>
                  <div class="duration">{{$notification->created_at->diffForHumans()}}</div>
                </a>
              </li>
              @endif
            @endforeach
          </ul>
        @endif

        @if(count(App\Models\Notification::where('user_id',auth()->user()->id)->get()) == 0)
          <div class="empty">We don't have any notifications for you right now.</div>
        @endif
      </div>
        @if(count(App\Models\Notification::where('user_id',auth()->user()->id)->get()) != 0)
          <div class="modal-footer">
            <a href="#" class="view-more">View More</a>
          </div>
        @endif
      @endauth
    </div>
  </div>
</div>

<!-- Property Modal -->
<div class="modal fade mob-property-modal" id="mobPropertyModal" tabindex="-1" aria-labelledby="mobPropertyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <div class="title">Tallentor</div>
        <i class="bi bi-x-lg" data-bs-dismiss="modal" aria-label="Close"></i>
      </div>
      <div class="modal-body">
          <a href="#" class="create-project" data-bs-toggle="modal" data-bs-target="#project_modal">Create New Project</a>
          <div class="text">Or</div>
          <div class="dropdown mob-property-drop">
          @if(count(\App\Models\Projects::where('user_id',auth()->user()->id)->get()) == 0)
            <button class="mob-property-drop-btn" type="button" data-bs-toggle="modal" data-bs-target="#project_modal"> Create New Project </button>
          @else
              @if(isset($project_id))
                <button class="mob-property-drop-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="property">
                      @if(get_seo_result($project_id)->favicon->value == null)
                        <img src="{{url('img\frontend\globeicon.png')}}" alt="" onerror="this.src='{{url('globeicon.png')}}';">
                      @else
                        <img src="{{get_seo_result($project_id)->favicon->value}}" alt="" onerror="this.src='{{url('globeicon.png')}}';">
                      @endif
                      <div class="text-block">
                        <div class="name">{{\App\Models\Projects::where('id',$project_id)->first()->name}}</div>
                        <div class="url">{{\App\Models\Projects::where('id',$project_id)->first()->url}}</div>
                      </div>
                      <i class="bi bi-chevron-down"></i>
                  </div>
                </button>
              @else
                <button class="mob-property-drop-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select Your Project
                </button>
              @endif
          @endif

          @if(count(\App\Models\Projects::where('user_id',auth()->user()->id)->get()) != 0)
            <ul class="dropdown-menu mob-property-drop-menu">
            @foreach(\App\Models\Projects::where('user_id',auth()->user()->id)->get() as $project)
              <li>
                <a class="dropdown-item" href="{{route('frontend.user.project.chat',$project->id)}}">
                  <div class="property">

                    @if(get_seo_result($project->id) != null)
                      @if(get_seo_result($project->id)->favicon->value == null)
                        <img src="{{url('img\frontend\globeicon.png')}}" alt="" onerror="this.src='{{url('globeicon.png')}}';">
                      @else
                        <img src="{{get_seo_result($project->id)->favicon->value}}" alt="" onerror="this.src='{{url('globeicon.png')}}';">
                      @endif
                    @endif
                    
                    <div class="text-block">
                      <div class="name">{{$project->name}}</div>
                      <div class="url">{{$project->url}}</div>
                    </div>
                  </div>
                </a>
              </li>
            @endforeach
            </ul>
          @endif
          </div>
      </div>
    </div>
  </div>
</div>