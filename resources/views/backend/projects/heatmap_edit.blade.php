@extends('backend.layouts.app')

@section('title', __('Show'))

@section('content')
    <form action="{{route('admin.projects.bots_update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">

            <h4>Heatmap&nbsp; ({{$project->name}})</h4>

                <div class="card mt-5">
                    <div class="card-body"> 

                     
                            @foreach($heatmap as $heat)

                            <h5 class="mb-3 border-bottom p-3">X Position : {{$heat->x_position}} | Y Position : {{$heat->y_position}} | IP Address : {{$heat->ip_address}}</h5>
                          
                            @endforeach

                   
                    </div>
                </div>

                <div class="mt-3 text-right">             
                    <a href="{{route('admin.projects.heatmap',$heat->project_id)}}" class="btn btn-info rounded-pill text-light px-4 py-2">Back</a>&nbsp;&nbsp;
                </div>
            </div><br> 

        </div>

    </form>


<br><br>
@endsection
