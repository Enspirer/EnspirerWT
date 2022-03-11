@extends('backend.layouts.app')

@section('title', __('Widget Settings Update'))

@section('content')
    
    <form action="{{route('admin.widget_settings_update.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">    
                        <div class="form-group">
                            <label>Widget Type <span class="text-danger">*</span></label>
                            <select class="form-control custom-select" id="widget_type" name="widget_type" required>
                                <option value="" selected disabled>Select...</option>
                                <option value="Whatsapp Chat">Whatsapp Chat</option>
                                <option value="All-in-One Chat">All-in-One Chat</option>
                                <option value="Clock">Clock</option>
                                <option value="Wallpapers">Wallpapers</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Settings</label>
                            <textarea id="settings" class="form-control" name="settings" rows="10" required></textarea>
                        </div> 
                    </div>
                </div>

                <div class="mt-3 text-right">
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Update</button>
                </div>
            </div><br>  
            
        </div>

    </form>

 
<br><br>


@endsection
