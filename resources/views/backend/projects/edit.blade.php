@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.projects.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">                        
                        <div class="form-group">
                            <label>Project Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" value="{{ $projects->name }}" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Project Type <span class="text-danger">*</span></label>
                            <select class="form-control" id="project_type" name="project_type" required>
                                <option value="" selected disabled>Select...</option>
                                @foreach($project_type as $type)
                                    <option value="{{ $type->id }}" {{ $type->id == $projects->project_type ? "selected" : "" }}>{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>URL <span class="text-danger">*</span></label>
                            <input type="text" id="url" value="{{ $projects->url }}" class="form-control" name="url" required>
                        </div>
                        <div class="form-group">
                            <label>SEO Result</label>
                            <input type="text" id="seo_result" value="{{ $projects->seo_result }}" class="form-control" name="seo_result">
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $projects->id }}"/>
                    <a href="{{route('admin.projects.index')}}" class="btn btn-info rounded-pill text-light px-4 py-2">Back</a>&nbsp;&nbsp;
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Update</button>
                </div>
            </div><br> 

        </div>

    </form>


<br><br>
@endsection
