@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')


<link rel="stylesheet" href="{{url('css/project_settings.css')}}">

<section id="sectionMainWindow">
    @include('frontend.includes.sidebar')

    <div id="sectionBody">
        @include('frontend.includes.nav')

        <!-- Content goes here -->
        <div class="row g-0">
            <section class="section-settings">
                <div class="tab-block">
                    <div class="nav nav-pills " id="settingsTab" role="tablist" aria-orientation="vertical">
                        
                    
                        <button class="nav-link active" id="general-tab" data-bs-toggle="pill"
                            data-bs-target="#general" type="button" role="tab" aria-controls="general"
                            aria-selected="false">
                            <div class="inner-wrapper">
                                <i class="bi bi-pencil"></i>
                                <div class="text">General</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="nav-link" id="role-tab" data-bs-toggle="pill"
                            data-bs-target="#role" type="button" role="tab" aria-controls="role"
                            aria-selected="false">
                            <div class="inner-wrapper">
                                <i class="bi bi-shield-check"></i>
                                <div class="text">Role Mangement</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                       
                        
                    </div>
                </div>
                <div class="content-block">
                    <div class="tab-content" id="settingsTabContent">
                            
                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if(session()->has('success_stored'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_stored') }}
                                </div>
                            @endif
                            @if(session()->has('success_update'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_update') }}
                                </div>
                            @endif
                            
                        
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title" style="font-weight: 600;font-size: 26px; margin-bottom: 2rem;">General</div>
                                </div>
                            </div>
                           
                            <div class="row g-0">
                                <form action="{{route('frontend.user.user_widget_ims_pro_settings.update')}}" class="row" method="post" enctype="multipart/form-data" >
                                {{csrf_field()}}

                                    <div class="col-6">
                                        <div class="card p-5" style="border-radius:20px;">
                                            <div class="content">
                                                
                                                    @if($widget->settings == null)
                                                        <div class="col-12">
                                                            <label for="whatsapp_number" class="form-label" style="font-size:14px;">Whatsapp Number</label>
                                                            <input type="text" class="form-control" style="font-size:14px;" name="whatsapp_number" id="whatsapp_number" required>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">  
                                                                <label style="font-size:14px;" class="mb-2" style="font-size:14px;">Logo</label>                                                  
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
                                                        <div class="col-12">
                                                            <label for="whatsapp_number" class="form-label" style="font-size:14px;">Whatsapp Number</label>
                                                            <input type="text" class="form-control" style="font-size:14px;" name="whatsapp_number" value="{{ json_decode($widget->settings)[0]->whatsapp_number }}" id="whatsapp_number" required>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">  
                                                                <label style="font-size:14px;" class="mb-2" style="font-size:14px;">Logo</label>                                                  
                                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                                                    </div>
                                                                    <div class="form-control file-amount">Choose File</div>
                                                                    <input type="hidden" id="logo" name="logo" value="{{ json_decode($widget->settings)[0]->logo }}" class="selected-files" >
                                                                </div>
                                                                <div class="file-preview box sm">
                                                                </div>
                                                            </div> 
                                                        </div>                                                     
                                                    @endif    
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="col-6">
                                        <div class="card p-5" style="border-radius:20px;">
                                            <div class="content">
                                                                                    

                                                    @if($widget->settings == null)
                                                        
                                                        <div class="col-12">
                                                            <label for="address" class="form-label" style="font-size:14px;">Address</label>
                                                            <input type="text" class="form-control" style="font-size:14px;" name="address" id="address" required>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <label for="company_email" class="form-label" style="font-size:14px;">Company Email</label>
                                                            <input type="email" class="form-control" style="font-size:14px;" name="company_email" id="company_email" required>
                                                        </div>
                                                    @else
                                                    
                                                        <div class="col-12">
                                                            <label for="address" class="form-label" style="font-size:14px;">Address</label>
                                                            <input type="text" class="form-control" style="font-size:14px;" name="address" value="{{ json_decode($widget->settings)[0]->address }}" id="address" required>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <label for="company_email" class="form-label" style="font-size:14px;">Company Email</label>
                                                            <input type="email" class="form-control" style="font-size:14px;" name="company_email" value="{{ json_decode($widget->settings)[0]->company_email }}" id="company_email" required>
                                                        </div>
                                                    @endif                                               
                                                                                                              
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="col-12 mt-1">
                                        <input type="hidden" class="form-control" name="hidden_id" value="{{ $widget->id}}">                                                    
                                        <button type="submit" class="btn btn-success" style="font-size:14px;">Update</button>
                                    </div>

                                </form>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="role" role="tabpanel"
                            aria-labelledby="role-tab">
                            
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title" style="font-weight: 600;font-size: 26px; margin-bottom: 2rem;">Role Mangement</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <form action="{{route('frontend.user.user_widget_ims_pro_role_management.store')}}" class="row g-4" method="post" enctype="multipart/form-data" >
                                {{csrf_field()}}

                                    <div class="col-6">
                                        <div class="card p-5" style="border-radius:20px;">
                                            <div class="content"> 

                                                <div class="col-12">
                                                    <label for="name" class="form-label"  style="font-size:14px;">Name</label>
                                                    <input type="text" class="form-control" name="name" style="font-size:14px;" id="name" required>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <label for="email" class="form-label" style="font-size:14px;">Email</label>
                                                    <input type="email" class="form-control" name="email" style="font-size:14px;" id="email" required>
                                                </div>                                                                                    

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card p-5" style="border-radius:20px;">
                                            <div class="content"> 
                                                                                                 
                                                <div class="col-12">
                                                    <label for="phone_number" class="form-label" style="font-size:14px;">Phone Number</label>
                                                    <input type="text" class="form-control" style="font-size:14px;" name="phone_number" id="phone_number" required>
                                                </div>
                                                        
                                                <div class="col-12 mt-4">
                                                    <label for="role" class="form-label" style="font-size:14px;">Role</label>
                                                    <select id="role" class="form-select" name="role" required>
                                                        <option style="font-size:14px;" value="" selected disabled>Select Here...</option>
                                                        <option style="font-size:14px;" value="Admin">Admin</option>
                                                        <option style="font-size:14px;" value="Agent">Agent</option>
                                                        <option style="font-size:14px;" value="Manager">Manager</option>                                                       
                                                    </select>                                                
                                                </div>                                                                                                

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <input type="hidden" class="form-control" name="project_id" value="{{ $project->id}}">      
                                        <input type="hidden" class="form-control" name="widget_id" value="{{ $widget->id}}">          
                                        <button type="submit" class="btn btn-primary" style="font-size:14px;">Submit</button>
                                    </div> 
                                </form> 

                            </div>

                            <div class="row">
                                <div class="col">

                                    <div class="card">
                                        <div class="card-header">
                                            <strong>IMS Pro Users&nbsp;</strong>
                                            
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone Number</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!--card-->
                                </div><!--col-->
                            </div><!--row-->



                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
    </div>


    @if(count($ims_pro_users) != 0)          
        @foreach($ims_pro_users as $key => $ims_pro_user)
   
            <div class="modal fade" id="exampleModaledit{{$ims_pro_user->id}}" tabindex="-1" aria-labelledby="exampleModalLabeledit" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                    <form action="{{route('frontend.user.user_widget_ims_pro_role_management.update',$ims_pro_user->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabeledit">Edit IMS Pro User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="p-3">
                            <div class="col-12">
                                <label for="name" class="form-label"  style="font-size:14px;">Name</label>
                                <input type="text" class="form-control" name="name" style="font-size:14px;" value="{{$ims_pro_user->name}}" id="name" required>
                            </div>
                            <div class="col-12 mt-4">
                                <label for="email" class="form-label" style="font-size:14px;">Email</label>
                                <input type="email" class="form-control" value="{{$ims_pro_user->email}}" name="email" style="font-size:14px;" id="email" required>
                            </div>
                            <div class="col-12 mt-4">
                                <label for="phone_number" class="form-label" style="font-size:14px;">Phone Number</label>
                                <input type="text" class="form-control" value="{{$ims_pro_user->phone_number}}" style="font-size:14px;" name="phone_number" id="phone_number" required>
                            </div>                                                    
                            <div class="col-12 mt-4">
                                <label for="role" class="form-label" style="font-size:14px;">Role</label>
                                <select id="role" class="form-select" name="role" required>
                                    <option style="font-size:14px;" value="" selected disabled>Select Here...</option>
                                    <option style="font-size:14px;" value="Admin" {{  $ims_pro_user->role == 'Admin' ? "selected" : "" }}>Admin</option>
                                     <option style="font-size:14px;" value="Agent" {{  $ims_pro_user->role == 'Agent' ? "selected" : "" }}>Agent</option>
                                    <option style="font-size:14px;" value="Manager" {{  $ims_pro_user->role == 'Manager' ? "selected" : "" }}>Manager</option>                                                       
                                </select>                                                
                            </div>                         

                        </div>                        

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="hidden" class="form-control" name="hidden_id" value="{{ $ims_pro_user->id}}">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>     
                    </div>
                </div>
            </div>

        @endforeach  
    @endif

    <!-- Modal delete -->
    <div class="modal fade" id="exampleModaldelete" tabindex="-1" aria-labelledby="exampleModalLabeldelete" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabeldelete">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you want to delete this?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('after-scripts')


    <script>
        // Edit profile tab trigger 
        function editProf() {
            document.getElementById("edit-profile-tab").click();
        }
    </script>
    
    <script>
        function uploaderClose() {
            document.getElementById("aizUploaderModal").click();
        }
    </script>

<script>
    function loadTable() {
        var table = $('#villadatatable').DataTable({
            processing: true,
            ajax: "{{route('frontend.user.user_widget_ims_pro_role_management.getdetails',$widget->id)}}",
            serverSide: true,
            responsive: true,
            autoWidth: true,
            order: [[0, "desc"]],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone_number', name: 'phone_number'},
                {data: 'role', name: 'role'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            "fnDrawCallback": function( oSettings ) {
                dispprove();
            }
        });
    };


    $(document).ready(function() {
        loadTable();
    });



    function dispprove() {
        $('.disapprove').on('click', function() {
        let value = $(this).attr('href');

        // console.log(value);

        $('.modal-footer a').attr('href', value);
    })
    }
</script>

@endpush



