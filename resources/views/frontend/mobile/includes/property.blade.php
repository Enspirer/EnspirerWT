<div class="header">
    <div class="content-block">
        <div class="properties">
            <div class="dropdown">

                @if(count(\App\Models\Projects::where('user_id',auth()->user()->id)->get()) == 0)
                    <div class="image"></div>
                    <div class="content">
                        <h4 href="#" type="button" class="btn-mobile btn-new-project" data-bs-toggle="modal" data-bs-target="#addPropertyInput">Create Project</h4>
                    </div>
                    <div class="dropdown-icon">
                        <i class="bi"></i>
                    </div>
                @else
                    @if(isset($project_id))
                        <a class="property-dropdown" href="#" role="button" id="propertyDrop"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="property">
                                @if(get_seo_result($project_id)->favicon->value == null)
                                    <img src="{{url('images/mobile/home/property-image.png')}}" alt="" class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                @else
                                    <img src="{{get_seo_result($project_id)->favicon->value}}" alt="" class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                @endif
                                <div class="content">
                                    <div class="title">{{\App\Models\Projects::where('id',$project_id)->first()->name}}</div>
                                    <div class="address">{{\App\Models\Projects::where('id',$project_id)->first()->url}}</div>
                                </div>
                            </div>
                            <img src="{{url('images/mobile/home/chevron-down.png')}}" alt="">
                        </a>
                    @else
                        <a class="property-dropdown" href="#" role="button" id="propertyDrop"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="property">
                                <div class="content">
                                    <div class="title">Select Your Project</div>
                                </div>
                            </div>
                            <img src="{{url('images/mobile/home/chevron-down.png')}}" alt="">
                        </a>                            
                    @endif

                @endif

                
                <ul class="dropdown-menu" aria-labelledby="propertyDrop">
                    @if(count(\App\Models\Projects::where('user_id',auth()->user()->id)->get()) != 0)
                        @foreach(\App\Models\Projects::where('user_id',auth()->user()->id)->get() as $project)
                            <li><a class="dropdown-item" href="{{route('frontend.mobile_view',$project->id)}}">
                                    <div class="property">
                                        @if(get_seo_result($project->id) != null)
                                            @if(get_seo_result($project->id)->favicon->value == null)
                                                <img src="{{url('images/mobile/home/property-image.png')}}" alt="" class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                            @else
                                                <img src="{{get_seo_result($project->id)->favicon->value}}" alt="" class="property-image" onerror="this.src='{{url('globeicon.png')}}';">
                                            @endif
                                        @endif
                                        <div class="content">
                                            <div class="title">{{$project->name}}</div>
                                            <div class="address">{{$project->url}}</div>
                                        </div>
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    @endif
                            
                </ul>
            </div>
        </div>
        <div class="filter">
            <a class="datepicker" href="#">
                <img src="{{url('images/mobile/home/calender.png')}}" alt="">
                <input type="text" name="date-filter" class="filter-date-input">
            </a>
        </div>
    </div>
</div>