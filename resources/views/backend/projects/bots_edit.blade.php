@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.projects.bots_update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body"> 
                     
                        <div class="form-group">
                            <label>Bot Type <span class="text-danger">*</span></label>
                            <select class="form-control custom-select" id="bot_type" name="bot_type" required>                           
                                <option value="SEO" {{ $bots->bot_type == 'SEO' ? "selected" : "" }}>SEO</option>                          
                                <option value="Auto Promoting Bot" {{ $bots->bot_type == 'Auto Promoting Bot' ? "selected" : "" }}>Auto Promoting Bot</option>                          
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Activated Bot Count <span class="text-danger">*</span></label>
                            <input type="text" id="activated_bot_count" value="{{ $bots->activated_bot_count }}" class="form-control" name="activated_bot_count" required>
                        </div>
                        <div class="form-group">
                            <label>Total Score <span class="text-danger">*</span></label>
                            <input type="text" id="total_score" value="{{ $bots->total_score }}" class="form-control" name="total_score" required>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Starting Time <span class="text-danger">*</span></label>
                                    <input type="time" id="starting_time" value="{{ $bots->starting_time }}" class="form-control" name="starting_time" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Ending Time <span class="text-danger">*</span></label>
                                    <input type="time" id="ending_time" value="{{ $bots->ending_time }}" class="form-control" name="ending_time" required>
                                </div>
                            </div>
                        </div>
                                                
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control custom-select" id="status" name="status" required>                           
                                <option value="Activated" {{ $bots->status == 'Activated' ? "selected" : "" }}>Activated</option>                          
                                <option value="Deactivated" {{ $bots->status == 'Deactivated' ? "selected" : "" }}>Deactivated</option>                          
                                <option value="Failed" {{ $bots->status == 'Failed' ? "selected" : "" }}>Failed</option>                          
                            </select>
                        </div>
                        
                    </div>
                </div>

                <div class="mt-3 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $bots->id }}"/>
                    <input type="hidden" name="hidden_project_id" value="{{ $project->id }}"/>                    
                    <a href="{{route('admin.projects.bots',$bots->project_id)}}" class="btn btn-info rounded-pill text-light px-4 py-2">Back</a>&nbsp;&nbsp;
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Update</button>
                </div>
            </div><br> 

        </div>

    </form>


<br><br>
@endsection
