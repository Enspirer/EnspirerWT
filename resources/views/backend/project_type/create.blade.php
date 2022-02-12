@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')


    <form action="{{route('admin.project_type.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">                        
                        <div class="form-group">
                            <label>Project Type <span class="text-danger">*</span></label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Keyword <span class="text-danger">*</span></label>
                            <input type="text" id="keyword" class="form-control" name="keyword" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Create New</button>
                </div>
            </div><br>  
            
        </div>

    </form>

 
<br><br>
@endsection
