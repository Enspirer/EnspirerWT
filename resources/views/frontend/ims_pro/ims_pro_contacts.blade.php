@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">


<section class="ims__section">
        @include('frontend.ims_pro.ims_pro_sidebar')
            <div class="ims__main-col">
                @include('frontend.ims_pro.ims_pro_navbar')
                
                <div class="row g-0">
                    <div class="col">
                        <!-- Content goes here -->
                        <div class="ims__body-container" id="ims__main-panel">
                            <div class="ims__inner-container">
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <ul class="breadcrumb">
                                            
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link">IMS Pro</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="ims__control-panel">
                                        <div class="row g-0">
                                            <div class="col">

                                                <form action="{{ route('frontend.user_widget.ims_pro_contacts', $project_id) }}" method="get" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                    <div class="input-group" style="width:260px">

                                                        <input type="text" class="form-control" name="search_name" id="search_name" placeholder="Search Name Here" required>
                                                        <button type="submit" class="search-btn p-1 px-3" style="border: none; background-color: #A5A5A5; color: #fff; ">
                                                            <i class="bi bi-search" style="color: #fff;"></i>
                                                        </button>
                                                   
                                                    </div>
                                                </form>
                                                <div class="control-block">
                                                    <a href="#" class="btn-status-report" type="button" data-bs-toggle="modal" data-bs-target="#createModal">                                                       
                                                        <div class="text">Create</div>
                                                    </a>
                                                </div>

                                                @if(count($all_ims_pro_contacts) == 0)
                                                    @include('frontend.includes.not_found',[
                                                        'not_found_title' => 'No Any Chats Found',
                                                        'not_found_description' => null,
                                                        'not_found_button_caption' => null
                                                    ])
                                                @else
                                                    <div class="ims__data-table">
                                                        <table class="table table-borderless">
                                                            <thead>
                                                                <tr class="data-row">
                                                                    <th class="data-title"></th>
                                                                    <th class="data-title"></th>
                                                                    <th class="data-title"></th>
                                                                    <th class="data-title">Name</th>
                                                                    <th class="data-title">Phone Number</th>
                                                                    <th class="data-title">Email</th>                                                                              
                                                                    <th class="data-title">Added</th>
                                                                    <th class="data-title"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                                    @foreach($all_ims_pro_contacts as $all_ims_pro_contact)
                                                                        <tr class="data-row" data-href="#">
                                                                            <td class="data--select data-cell">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="">
                                                                            </td>
                                                                            <td class="data--fav data-cell">
                                                                                <label class="fav-btn">
                                                                                    <input type="checkbox">
                                                                                    <i class="bi bi-star-fill"></i>
                                                                                    <i class="bi bi-star"></i>
                                                                                </label>
                                                                            </td>
                                                                            <td class="data--pic data-cell">
                                                                                <img src="{{url('img/profile_avatar.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="info-block">
                                                                                    <div class="header">
                                                                                        <div class="name">{{$all_ims_pro_contact->name}}</div>
                                                                                    </div>
                                                                                    <div class="message">{{$all_ims_pro_contact->address}}</div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">{{ $all_ims_pro_contact->phone_number }}</div>
                                                                            </td>  
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">{{ $all_ims_pro_contact->email }}</div>
                                                                            </td> 
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">{{ $all_ims_pro_contact->created_at->format('d M Y') }}</div>
                                                                            </td>      
                                                                           
                                                                            <td class="data--chat data-cell">
                                                                                <a href="#" class="chat-btn" data-bs-toggle="modal" data-bs-target="#editModal{{$all_ims_pro_contact->id}}">
                                                                                    <i class="bi bi-pencil-square"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td class="data--chat data-cell">
                                                                                <a href="{{ route('frontend.user_widget.ims_pro_contacts_delete', $all_ims_pro_contact->id) }}" class="chat-btn delete" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                                                    <i style="color:red" class="bi bi-trash"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>                                                                
                                                                    @endforeach   
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @endif                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>                             

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    


    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('frontend.user_widget.ims_pro_contacts_store')}}" method="post" enctype="multipart/form-data">                
                {{csrf_field()}}

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add New</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>                    
                        <div class="form-group mt-3">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" class="form-control" id="hidden_project_id" name="hidden_project_id" value="{{$project_id}}">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if(count($all_ims_pro_contacts) != 0)
        @foreach($all_ims_pro_contacts as $all_ims_pro_contact)

            <div class="modal fade" id="editModal{{$all_ims_pro_contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{route('frontend.user_widget.ims_pro_contacts_update')}}" method="post" enctype="multipart/form-data">                
                        {{csrf_field()}}

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <!-- <span aria-hidden="true">&times;</span> -->
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{ $all_ims_pro_contact->name }}" id="name" name="name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{ $all_ims_pro_contact->address }}" id="address" name="address" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{ $all_ims_pro_contact->phone_number }}" id="phone_number" name="phone_number" required>
                                </div>                    
                                <div class="form-group mt-3">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" value="{{ $all_ims_pro_contact->email }}" id="email" name="email" required>
                                </div>
                                                
                            </div>
                            <div class="modal-footer">                    
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="hidden" class="form-control" id="hidden_project_id" name="hidden_project_id" value="{{$project_id}}">
                                <input type="hidden" class="form-control" id="hidden_id" name="hidden_id" value="{{$all_ims_pro_contact->id}}">
                                <input type="submit" class="btn btn-success" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach            
    @endif 

  
    

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you want to delete this?
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                    <a href="" class="btn btn-delete btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endsection



@push('after-scripts')


<script>
    $('.delete').on('click', function () {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })
</script>


@endpush