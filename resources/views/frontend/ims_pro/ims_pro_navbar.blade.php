<div class="row g-0">
                    <div class="col">
                        <div class="ims__navbar">
                        <div class="property-block">
                                <ul class="navbar-nav">
                                    <li class="nav-item border-right dropdown">
                                        <a class="nav-link" href="#" id="propertyDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="property">

                                            <a href="{{ route('frontend.user.project.chat',$project_id) }}" style="text-decoration:none;"><p class="px-4 mt-3">Go back</p></a>

                                         
                                                <div class="image"></div>
                                                <div class="content">
                                                    <h6 class="site-name" data-bs-toggle="modal" data-bs-target="#project_modal"></h6>
                                                </div>
                                               
                                            
                                                
                                                        <div class="image">
                                                            

                                                      
                                                        </div>
                                                        <div class="content">
                                                            <h6 class="site-name"></h6>
                                                            <span class="site-url"></span>
                                                        </div>
                                                        
                                                        <div class="image">

                                                        </div>
                                                        <div class="content">
                                                            <h6 class="site-name"></h6>
                                                        </div>
                                                      

                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="propertyDropdown">
                                       
                                                <li>
                                                    <a class="dropdown-item" href="">
                                                        <div class="property">
                                                            <div class="image">

                                                                
                                                                        <img src="" alt="propery-image">
                                                                
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="site-name"></h6>
                                                                <span class="site-url"></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                          
                                        </ul>
                                    </li>
                                   
                                    <a href="" style="text-decoration:none"><p class="px-4 mt-3"></p></a>
                                </ul>
                            </div>
                            <div class="profile-block">
                            <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                      
                                      

                                        <ul class="dropdown-menu" aria-labelledby="notifyDrop">
                                            <div class="inner-wrapper">
                                                <div class="list-group">
                                                                                                          
                                                                <a href="" class="list-group-item list-group-item-action" aria-current="true">
                                                                    <div class="d-flex w-100 justify-content-between">

                                                                        <div class="row">
                                                                            <div class="col-1">
                                                                                <i class=" mt-3" style="font-size:24px;"></i>
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <h5 class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"></h5>
                                                                                <p class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                                                    
                                                                                </p>
                                                                                <!-- <small>And some small print.</small> -->
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <small></small>
                                                                            </div>
                                                                        </div>

                                                                    </div>                                                                   
                                                                </a>
                                                        
                                                          
                                                </div>
                                             
                                                    <a href="" class="view-more">View More</a>
                                              
                                            </div>
                                        </ul>
                                    </li>
                                    
                                    {{ get_settings('default_wa_server_auth_status') }}


                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="imsNavDrop" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <div class="profile">
                                                <div class="profile__pic">
                                                    @auth
                                                        <img src="{{auth()->user()->picture}}" alt="">
                                                    @else
                                                        <img src="{{url('img/profile_avatar.jpg')}}" alt="">
                                                    @endauth
                                                </div>
                                                <div class="name">
                                                    @auth
                                                        <div class="name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                                    @else
                                                        @if(count($ims_pro_user_details) != 0)
                                                            @foreach($ims_pro_user_details as $ims_pro_user_detail)  
                                                                {{$ims_pro_user_detail->name}}
                                                                @break;
                                                            @endforeach
                                                        @endif
                                                    @endauth
                                                </div>
                                                <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu profile-dropdown-menu" aria-labelledby="imsNavDrop">
                                            
                                                <li>
                                                    @auth
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('dashboard')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-speedometer"></i>
                                                                </div>
                                                                <div class="text">Dashboard</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('reports')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-journal-text"></i>
                                                                </div>
                                                                <div class="text">Reports</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('projects')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                </div>
                                                                <div class="text">Projects</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                                <div class="text">Your Details</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-pencil"></i>
                                                                </div>
                                                                <div class="text">Edit Profile</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-shield-check"></i>
                                                                </div>
                                                                <div class="text">Password & Security</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-box-seam"></i>
                                                                </div>
                                                                <div class="text">Choose Plan</div>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{route('frontend.auth.logout')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-box-arrow-right"></i>
                                                                </div>
                                                                <div class="text">Sign Out</div>
                                                            </a>
                                                        </li>
                                                        
                                                    @else
                                                        
                                                        @if(count($ims_pro_user_details) != 0)
                                                            @foreach($ims_pro_user_details as $ims_pro_user_detail)  
                                                                    <a class="dropdown-item" href="{{url('ims_pro_logout',$ims_pro_user_detail->id)}}">
                                                                        <div class="icon-block">
                                                                            <i class="bi bi-box-arrow-right"></i>
                                                                        </div>
                                                                        <div class="text">Sign Out</div>
                                                                    </a>
                                                                @break;
                                                            @endforeach
                                                        @endif

                                                    @endauth

                                                   
                                                   
                                                </li>

                                        </ul>
                                    </li>





                                    
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="modal fade" id="project_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    
                    <form action="{{route('frontend.user.user_projects.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel"><img src="{{url('images/idea.png')}}" alt=""> Create your project</h4>
                            <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label style="font-size:16px">Project Name<span class="text-danger">*</span></label>
                                <input type="text" style="font-size:15px;" id="name" class="form-control mt-2" name="name" placeholder="Type your project name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label style="font-size:16px">Project Type <span class="text-danger">*</span></label>
                                <select class="form-control mt-2" style="font-size:15px;" id="project_type" name="project_type" required>
                                    <option value="" selected disabled>Select...</option>
                                    
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label style="font-size:16px">URL (With https://) <span class="text-danger">*</span></label>
                                <input type="text" style="font-size:15px;" id="url" class="form-control mt-2" name="url" placeholder="Type your URL" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>