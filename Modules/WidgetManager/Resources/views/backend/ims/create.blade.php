@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')

    <form action="{{route('admin.ims.store')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Client Name <span style="color:red">*</span></label>
                            <input type="text" id="client_name" class="form-control" name="client_name" required>
                        </div>
                        <div class="form-group">
                            <label>Client Email <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="client_email" id="client_email" required>
                        </div>
                        <div class="form-group">
                            <label>IP Address <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="ip_address" id="ip_address" required>
                        </div>
                        <div class="form-group">
                            <label>Assign By <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="assign_by" id="assign_by" required>
                        </div>
                        <div class="form-group">
                            <label>Message <span style="color:red">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <input type="hidden" name="hidden_project_id" value="{{$project->id}}">
                    <input type="hidden" name="hidden_widget_id" value="{{$widget->id}}">
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Create New</button>
                </div>
            </div><br>       
            
        </div>

    </form>


<br><br>


@endsection
