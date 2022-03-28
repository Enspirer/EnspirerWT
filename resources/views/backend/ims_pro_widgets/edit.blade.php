@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<form action="{{route('admin.ims_pro_widgets.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="row">
                            @if($widget->settings == null)
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Whatsapp Number: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="whatsapp_number" id="whatsapp_number" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">  
                                        <label>Logo: <span class="text-danger">*</span></label>                                                  
                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                            </div>
                                            <div class="form-control file-amount">Choose File</div>
                                            <input type="hidden" id="logo" name="logo" class="selected-files" >
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                    </div> 
                                </div> 
                            @else
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Whatsapp Number: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="{{ json_decode($widget->settings)[0]->whatsapp_number }}" name="whatsapp_number" id="whatsapp_number" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">  
                                        <label>Logo: <span class="text-danger">*</span></label>                                                  
                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                            </div>
                                            <div class="form-control file-amount">Choose File</div>
                                            <input type="hidden" id="logo" value="{{ json_decode($widget->settings)[0]->logo }}" name="logo" class="selected-files" >
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                    </div> 
                                </div> 
                                                                                 
                            @endif  
                        </div>   
                        
                        <div class="row mt-3">                                                                                   
                            @if($widget->settings == null)                                                            
                                <div class="col-6">
                                    <label for="address" class="form-label">Address: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" id="address" required>
                                </div>
                                <div class="col-6">
                                    <label for="company_email" class="form-label">Company Email: <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="company_email" id="company_email" required>
                                </div>
                            @else                                                        
                                <div class="col-6">
                                    <label for="address" class="form-label">Address: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" value="{{ json_decode($widget->settings)[0]->address }}" id="address" required>
                                </div>
                                <div class="col-6">
                                    <label for="company_email" class="form-label">Company Email: <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="company_email" value="{{ json_decode($widget->settings)[0]->company_email }}" id="company_email" required>
                                </div>
                            @endif              
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
