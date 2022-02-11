@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')


    <form action="{{route('admin.projects.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">                        
                        <div class="form-group">
                            <label>Project Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Project Type <span class="text-danger">*</span></label>
                            <input type="text" id="project_type" class="form-control" name="project_type" required>
                        </div>
                        <div class="form-group">
                            <label>URL <span class="text-danger">*</span></label>
                            <input type="text" id="url" class="form-control" name="url" required>
                        </div>
                        <div class="form-group">
                            <label>SEO Result <span class="text-danger">*</span></label>
                            <input type="text" id="seo_result" class="form-control" name="seo_result" required>
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
