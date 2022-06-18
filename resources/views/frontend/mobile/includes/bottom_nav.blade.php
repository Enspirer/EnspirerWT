<div class="bottom-nav">
    <div class="navbar-nav">
        <div class="nav-item">
            <a href="{{url('/mobile_view')}}" class="nav-link">
                <i class="bi bi-house-door"></i>
            </a>
        </div>
        <div class="nav-item">
            <a href="{{url('/mobile_view/mobile-analytics')}}" class="nav-link">
                <i class="bi bi-bar-chart"></i>
            </a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#addProperty">
                <i class="bi bi-plus-lg"></i>
            </a>
        </div>
        <div class="nav-item">
            <a href="{{url('/mobile_view/mobile-notification')}}" class="nav-link">
                <i class="bi bi-bell"></i>
            </a>
        </div>
        <div class="nav-item">
            <a href="{{url('/mobile_view/mobile-settings')}}" class="nav-link">
                <i class="bi bi-gear"></i>
            </a>
        </div>
    </div>
</div>


<!-- Modal: Add Button -->
<div class="modal fade addProperty-model mobile-model" id="addProperty" tabindex="-1" aria-labelledby="addPropertyLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add to</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
            
            @if(count($projects) != 0)
                @foreach($projects as $project)
                    @if(isset($project_id))
                        @if($project->id == $project_id)
                            <li class="list-group-item pull_delete active">
                                <a href="{{route('frontend.mobile_view',$project->id)}}" class="list-link">
                                    <div class="property">
                                        @if(get_seo_result($project->id)->favicon->value == null)
                                            <img src="{{url('images/mobile/home/property-image.png')}}"  class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                        @else
                                            <img src="{{get_seo_result($project->id)->favicon->value}}"  class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                        @endif
                                        <div class="content">
                                            <div class="title">{{$project->name}}</div>
                                            <div class="address">{{$project->url}}</div>
                                        </div>
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                </a>
                            </li>
                        @else
                            <li class="list-group-item pull_delete">
                                <a href="{{route('frontend.mobile_view',$project->id)}}" class="list-link">
                                    <div class="property">
                                        @if(get_seo_result($project->id)->favicon->value == null)
                                            <img src="{{url('images/mobile/home/property-image.png')}}"  class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                        @else
                                            <img src="{{get_seo_result($project->id)->favicon->value}}"  class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                        @endif
                                        <div class="content">
                                            <div class="title">{{$project->name}}</div>
                                            <div class="address">{{$project->url}}</div>
                                        </div>
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="list-group-item pull_delete">
                            <a href="{{route('frontend.mobile_view',$project->id)}}" class="list-link">
                                <div class="property">
                                @if(get_seo_result($project->id)->favicon->value == null)
                                    <img src="{{url('images/mobile/home/property-image.png')}}"  class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                @else
                                    <img src="{{get_seo_result($project->id)->favicon->value}}"  class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                @endif
                                   
                                    <div class="content">
                                        <div class="title">{{$project->name}}</div>
                                        <div class="address">{{$project->url}}</div>
                                    </div>
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
            
        </ul>
      </div>
      <div class="modal-footer">
        <a href="#" type="button" class="btn-mobile btn-new-project" data-bs-toggle="modal" data-bs-target="#addPropertyInput">Add new Project</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Add Property -->
<div class="modal fade addPropertyInput-model mobile-model" id="addPropertyInput" tabindex="-1" aria-labelledby="addPropertyInputLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add to</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="list-label">Project Name</div>
                <input type="text" name="property-input" class="list-input">
            </li>
            <li class="list-group-item">
                <div class="list-label">Project Type</div>
                <input type="text" name="property-input" class="list-input">
            </li>
            <li class="list-group-item">
                <div class="list-label">URL</div>
                <input type="text" name="property-input" class="list-input">
            </li>
        </ul>
      </div>
      <div class="modal-footer">
        <a href="#" type="button" class="btn-mobile btn-project-submit">Submit</a>
        <a href="#" type="button" class="btn-mobile btn-cancel" data-bs-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>