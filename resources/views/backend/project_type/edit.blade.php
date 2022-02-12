@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.project_type.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">                        
                        <div class="form-group">
                            <label>Project Type <span class="text-danger">*</span></label>
                            <input type="text" id="name" value="{{ $project_type->name }}" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Keyword <span class="text-danger">*</span></label>
                            <input type="text" id="keyword" value="{{ $project_type->keyword }}" class="form-control" name="keyword" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4">{{ $project_type->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $project_type->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $project_type->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="mt-3 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $project_type->id }}"/>
                    <a href="{{route('admin.project_type.index')}}" class="btn btn-info rounded-pill text-light px-4 py-2">Back</a>&nbsp;&nbsp;
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Update</button>
                </div>
            </div><br> 

        </div>

    </form>


<br><br>
@endsection
