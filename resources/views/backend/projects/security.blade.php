@extends('backend.layouts.app')

@section('title', __('security'))

@section('content')
<link rel="stylesheet" href="{{url('css/security.css')}}">
   
<style>
    bullet:before {
    content: "•";
    padding-right: 8px;
    color: blue;}
</style>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body"> 
                     
                        <div class="security-block">
                            <div class="feature-block">
                                <div class="title">Email Black list</div>
                                <table class="security-table">
                                    <tbody>                                       
                                        @if($project->email_blacklist != null)
                                            @foreach(json_decode($project->email_blacklist) as $key => $blacklist)
                                                @if($key == 'blacklists')
                                                    @if(count($blacklist) != 0)
                                                        @foreach($blacklist as $key => $back)
                                                            <tr>
                                                                <td class="icon-col">
                                                                    @if($back->blacklisted == 0)
                                                                        <img src="{{url('images/dashboard/main/icons/sheild-success.png')}}" alt="">
                                                                    @else
                                                                        <img src="{{url('images/dashboard/main/icons/sheild-danger.png')}}" alt="">
                                                                    @endif
                                                                </td>
                                                                <td class="text-col">
                                                                    <div class="text">{{$back->tracker }} : 
                                                                        @if($back->blacklisted == 0)
                                                                            <span style="color:green">Ok</span>
                                                                        @else
                                                                            <span style="color:red">Listed</span>                                                                            
                                                                        @endif
                                                                    </div>
                                                                    <!-- <div class="sub-text"></div> -->
                                                                </td>
                                                                <!-- <td class="info-col">
                                                                    <i class="bi bi-exclamation-circle"></i>
                                                                </td> -->
                                                            </tr>
                                                        @endforeach    
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="mt-3 text-left">
                    <input type="hidden" name="hidden_project_id" value="{{ $project->id }}"/>                    
                    <a href="{{route('admin.projects.index')}}" class="btn btn-info rounded-pill text-light px-4 py-2">Back</a>&nbsp;&nbsp;
                </div>
            </div><br> 

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body"> 
                     
                        <div class="security-block">
                            <div class="feature-block">
                                <div class="title">Project Details</div>
                                <table class="security-table">
                                    <tbody>
                                        <tr>                                          
                                            <td class="text-col">
                                                <div class="text"><bullet>Name</bullet> : {{$project->name}}</div>
                                            </td>
                                        </tr>
                                        <tr>                                          
                                            <td class="text-col">
                                                <div class="text"><bullet>Project Type</bullet> : {{$project_type->name}}</div>
                                            </td>
                                        </tr>
                                        <tr>                                          
                                            <td class="text-col">
                                                <div class="text"><bullet>URL</bullet> : {{$project->url}}</div>
                                            </td>
                                        </tr>
                                        <tr>                                          
                                            <td class="text-col">
                                                <div class="text"><bullet>Host Ip</bullet> : {{$project->host_ip}}</div>
                                            </td>
                                        </tr>
                                        <tr>                                          
                                            <td class="text-col">
                                                <div class="text"><bullet>Selected Package</bullet> : {{$project->selected_package}}</div>
                                            </td>
                                        </tr>
                                        <tr>                                          
                                            <td class="text-col">
                                                <div class="text"><bullet>Start Date</bullet> : {{$project->package_starting_date}}</div>
                                            </td>
                                        </tr>
                                        <tr>                                          
                                            <td class="text-col">
                                                <div class="text"><bullet>Expire Date</bullet> : {{$project->expire_date}}</div>
                                            </td>
                                        </tr>
                                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div><br> 

        </div>

<br><br>
@endsection
