@extends('backend.layouts.app')

@section('title', __('Edit Widgets Manager'))

@section('content')
    
<form action="{{route('admin.projects.widget_manager.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">    
                        <div class="form-group">
                            <label>Widget Type <span class="text-danger">*</span></label>
                            <select class="form-control" id="widget_type" name="widget_type" required>
                                <option value="Whatsapp Chat" {{ $widget->widget_type == 'Whatsapp' ? "selected" : "" }}>Whatsapp Chat</option>
                                <option value="All-in-One Chat" {{ $widget->widget_type == 'All-in-One Chat' ? "selected" : "" }}>All-in-One Chat</option>                                
                                <option value="Clock" {{ $widget->widget_type == 'Clock' ? "selected" : "" }}>Clock</option>
                                <option value="Wallpapers" {{ $widget->widget_type == 'Wallpapers' ? "selected" : "" }}>Wallpapers</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label>Settings</label>
                            <input type="text" id="settings" value="{{ $widget->settings }}" class="form-control" name="settings">
                        </div>
                        <div class="form-group">
                            <label>Load Count</label>
                            <input type="text" id="load_count" value="{{ $widget->load_count }}" class="form-control" name="load_count">
                        </div> -->
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control custom-select" name="status" required>
                                <option value="Enabled" {{ $widget->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $widget->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $widget->id }}"/>
                    <input type="hidden" name="project_hidden_id" value="{{ $project->id }}"/>
                    <a href="{{route('admin.projects.widget_manager',$project->id)}}" class="btn btn-info rounded-pill text-light px-4 py-2">Back</a>&nbsp;&nbsp;
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Update</button>
                </div>
            </div><br>  
            
        </div>

    </form>

 
<br><br>


@endsection
