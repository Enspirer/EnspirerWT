@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')

    <form action="{{route('admin.whatsappchat_widget.store')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Name <span style="color:red">*</span></label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Description <span style="color:red">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Source</label>
                            <input type="text" class="form-control" name="source" id="source">
                        </div>
                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
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
