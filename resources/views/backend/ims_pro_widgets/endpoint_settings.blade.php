@extends('backend.layouts.app')

@section('title', __('End Point Settings'))

@section('content')

<form action="{{route('admin.ims_pro_widgets.endpoint_settings_update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label>URL: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $widget->end_point_settings }}" name="url" id="url" required>
                            </div>
                        </div>
                                          
                    </div>
                </div>

                <input type="hidden" name="hidden_id" value="{{ $widget->id }}" />
                <button type="submit" class="btn btn-success pull-right">Update</button><br>

            </div><br>            
                        
        </div>

    </form>
    
<br><br>

@endsection
