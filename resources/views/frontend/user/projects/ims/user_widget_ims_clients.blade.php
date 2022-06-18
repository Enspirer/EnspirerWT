@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')


<section class="ims__section">
        @include('frontend.user.projects.includes.ims_sidebar')
            <div class="ims__main-col">
                @include('frontend.user.projects.includes.ims_navbar')
                
                <div class="row g-0">
                    <div class="col">
                        <!-- Content goes here -->
                        <div class="ims__body-container" id="ims__main-panel">
                            <div class="ims__inner-container">
                                <div class="row g-0">
                                    <div class="col">
                                        <ul class="breadcrumb">
                                            
                                            <!-- <li class="breadcrumb-item">
                                                <a class="breadcrumb-link">Conversations</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li> -->
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Clients</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        
                                    
                                        <section class="clients-section ims__panel" id="ims__clients">
                                            <div class="ims__control-panel">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        @if(count($ims_client) == 0)
                                                            @include('frontend.includes.not_found',[
                                                                'not_found_title' => 'Data not found',
                                                                'not_found_description' => null,
                                                                'not_found_button_caption' => null
                                                            ])
                                                        @else
                                                            <div class="control-block">
                                                                <div class="controls">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="" id="imsSelectAll">
                                                                        <label class="form-check-label" for="imsSelectAll">
                                                                            <i class="bi bi-chevron-down"></i>
                                                                        </label>
                                                                    </div>
                                                                    <a href="#" class="ims__refresh control-link active">
                                                                        <i class="bi bi-arrow-clockwise"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="actions">
                                                                    <a href="#" class="ims__warning control-link">
                                                                        <i class="bi bi-exclamation-octagon-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__download control-link">
                                                                        <i class="bi bi-download"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__delete control-link">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__option control-link">
                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="ims__data-table">
                                                                <table class="table table-borderless">
                                                                    <thead>
                                                                        <tr class="data-row">
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title">Name</th>
                                                                            <th class="data-title">Date</th>
                                                                            <th class="data-title">Comment</th>
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title">Conversation</th>
                                                                            <th class="data-title">Last Access Time</th>
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($ims_client as $key => $client)
                                                                            <tr class="data-row">
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
                                                                                    <img src="{{url('img/profile_avatar.jpg')}}" >
                                                                                </td>
                                                                                <td class="data--name data-cell">
                                                                                    <div class="text">{{$client->client_name}}</div>
                                                                                </td>
                                                                                <td class="data--date data-cell">
                                                                                    <div class="text">{{$client->created_at->format('d M Y')}}</div>
                                                                                </td>
                                                                                <td class="data--comment data-cell">
                                                                                    <input type="text" class="form-control"
                                                                                        placeholder="This is the sample comment ">
                                                                                </td>
                                                                                <td class="data--chat data-cell">
                                                                                    <a href="#" class="chat-btn">
                                                                                        <i
                                                                                            class="bi bi-chat-left-text-fill"></i>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="data--conversation data-cell">
                                                                                    <div class="text">01</div>
                                                                                </td>
                                                                                <td class="data--last-access data-cell">
                                                                                    <div class="text">19 hours ago</div>
                                                                                </td>
                                                                                <td class="data--delete data-cell">
                                                                                <input type="hidden" name="hid_id" value="{{$client->id}}">
                                                                                    <a href="{{ route('frontend.user.ims_clients.destroy', $client->id) }}" class="btn text-light delete delete-btn" data-bs-toggle="modal" data-bs-target="#deleteclient"><i class="bi bi-trash-fill"></i></a>
                                                                                </td>
                                                                                <td class="data--option data-cell">
                                                                                    <a href="#" class="option-btn">
                                                                                        <i class="bi bi-three-dots"></i>
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
                                        </section>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    

    <div class="modal fade" id="deleteclient" tabindex="-1" aria-labelledby="deleteclientLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteclientLabel">Delete Clients</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Do you want to delete this?</h6>
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
        $('.delete').on('click', function() {
            let link = $(this).attr('href');
            $('.modal-footer a').attr('href', link);
        })
    </script>

@endpush