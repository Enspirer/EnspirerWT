@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<form action="{{route('admin.whatsappchat_widget.update')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Name <span style="color:red">*</span></label>
                            <input type="text" id="name" value="{{ $whatsapp_chat->name }}" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Description <span style="color:red">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="4" required>{{$whatsapp_chat->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Source</label>
                            <input type="text" class="form-control" value="{{ $whatsapp_chat->source }}" name="source" id="source">
                        </div>
                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $whatsapp_chat->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $whatsapp_chat->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $whatsapp_chat->id }}"/>
                    <a href="{{route('admin.whatsappchat_widget.index')}}" class="btn btn-info rounded-pill text-light px-4 py-2">Back</a>&nbsp;&nbsp;
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Update</button>
                </div>
            </div><br>       
            
        </div>

    </form>


<br><br>
@endsection
