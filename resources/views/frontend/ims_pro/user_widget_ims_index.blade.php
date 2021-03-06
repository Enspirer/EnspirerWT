@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">
<link rel="stylesheet" href="{{url('css/ims_pro-media_scan.css')}}">

@include('frontend.ims_pro.includes.ims_pro_mobile_nav')

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
                                                <a class="breadcrumb-link breadcrumb-current">Conversations</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                @if(whatsapp_server_status( $project_id )['server_type'] == 'default_server' )
                                    @include('frontend.ims_pro.includes.ims_default_server')
                                @else
                                    @include('frontend.ims_pro.includes.ims_index')
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>


    @if($solo_ims_pro_client != null)
        
        <div class="modal fade" id="delete_conversation" tabindex="-1" aria-labelledby="delete_conversation_Label" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('frontend.conversation.delete')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="delete_conversation_Label">Delete Conversation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Do you want to delete this conversation?</h5>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="hid_chat_phone_number" value="{{ $solo_ims_pro_client->phone_number }}"/>
                            <input type="hidden" name="hid_chat_project_id" value="{{ $solo_ims_pro_client->project_id }}"/>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @endif


    @if($solo_ims_pro_client != null)
    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('frontend.user_widget.ims_pro_contacts_store')}}" method="post" enctype="multipart/form-data">                
                {{csrf_field()}}

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add to Contacts</h5>
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
                            <input type="text" class="form-control" id="phone_number" value="{{$solo_ims_pro_client->phone_number}}" name="phone_number" required>
                        </div>                    
                        <div class="form-group mt-3">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" class="form-control" id="hidden_project_id" name="hidden_project_id" value="{{$project_id}}">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif



    @if(\Session::has('success') )
   
    <div class="modal fade" id="overlay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Added Successfully</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                This Number Added To The Contacts Successfully. <a href="{{ route('frontend.user_widget.ims_pro_contacts', $project_id) }}" style="text-decoration:none">Click Here</a> ro go to Contacts Page.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
    </div>

    @endif

@endsection



@push('after-scripts')

<script>
    $(window).on('load', function () {
        $('#overlay').modal('show');
    });
    $("#close-btn").click(function () {
        $('#overlay').modal('hide');
    });
</script>

<script>
    $('.delete').on('click', function() {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })
</script>


<script>

    function chat_message() {

        incoming_mobile_number = $('#incoming_mobile_number').val();
        incoming_project_id = $('#incoming_project_id').val();
        incoming_widget_id = $('#incoming_widget_id').val();
        incoming_type = $('#incoming_type').val();


        $.post("{{url('/')}}/api/ims_chat", {
                incoming_mobile_number:incoming_mobile_number,
                incoming_project_id:incoming_project_id,
                incoming_widget_id:incoming_widget_id,
                incoming_type:incoming_type
            },

            function(content, status){
                // console.log(content);
                var obj = JSON.parse(content);
                // console.log(obj);
                $('#incoming_outgoing_chat_messages').html(obj);

            }
        );



    }


    setInterval(function(){chat_message();
        // console.log('refresh_data');
    }, 3000);




    function submit_chat()
    {       
        phone_number = $('#phone_number').val();
        project_id = $('#project_id').val();
        widget_id = $('#widget_id').val();
        message = $('#message').val();   
        hidden_user_email = $('#hidden_user_email').val();   
        hidden_user_id = $('#hidden_user_id').val();
        core_type = $('#core_type').val();
        hidden_user_type = $('#hidden_user_type').val();           

        $.post("{{url('/')}}/api/submit_chat",
            {                
                phone_number: phone_number,
                project_id: project_id,
                widget_id: widget_id,
                message: message,
                hidden_user_email: hidden_user_email,
                hidden_user_id: hidden_user_id,
                core_type: core_type,             
                hidden_user_type: hidden_user_type             
            },
        );

    }

    $('.btn-send').click(function(){
        $('#message').val('');
    });



    const assignDrop = document.getElementById('assignDrop')
    const dropdownItem = assignDrop.querySelectorAll('.dropdown-item')
    const responsible = assignDrop.querySelector('.responsible')
    let ims_pro_user;
    let ims_pro_phone_number;
    let ims_pro_project_id;
    let ims_pro_widget_id;

    dropdownItem.forEach(function(drop) {
        drop.addEventListener('click', function(){
            const role = drop.textContent;
            ims_pro_user = drop.getAttribute('id');
            responsible.innerHTML = role;
            const get_ims_pro_phone_number = document.getElementById('ims_pro_phone_number')
            const get_ims_pro_project_id = document.getElementById('ims_pro_project_id')
            const get_ims_pro_widget_id = document.getElementById('ims_pro_widget_id')

            ims_pro_phone_number = get_ims_pro_phone_number.value;
            ims_pro_project_id = get_ims_pro_project_id.value;
            ims_pro_widget_id = get_ims_pro_widget_id.value;

            responsible_ims_pro();
        })
    })

    function responsible_ims_pro()
    {       
        // console.log(ims_pro_phone_number);
        // console.log(ims_pro_project_id);
        // console.log(ims_pro_widget_id);
        // console.log(ims_pro_user);               

        $.post("{{url('/')}}/api/responsible_ims_pro",
            {                
                ims_pro_user: ims_pro_user,
                ims_pro_phone_number: ims_pro_phone_number,
                ims_pro_project_id: ims_pro_project_id,
                ims_pro_widget_id: ims_pro_widget_id                        
            },
        );

    }


    function chat_user_details()
    {    
        company = $('#company').val();     
        tags = $('#tags').val();   
        phone_number = $('#phone_number').val();
        project_id = $('#project_id').val();
        widget_id = $('#widget_id').val();   
        // alert(user_role);  

        $.post("{{url('/')}}/api/chat_user_details",
            {                
                company:company,               
                tags:tags,            
                phone_number:phone_number,            
                project_id:project_id,            
                widget_id:widget_id            
            },
        );

    }


</script>


@endpush