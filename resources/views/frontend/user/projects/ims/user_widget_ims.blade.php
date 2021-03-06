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
                                            
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link">Conversations</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <section class="coversation-section ims__panel" id="ims__conversation">
                                            <div class="admin--section ims__panel" id="ims__admin">
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
                                                                            <label class="form-check-label"
                                                                                for="imsSelectAll">
                                                                                <i class="bi bi-chevron-down"></i>
                                                                            </label>
                                                                        </div>
                                                                        <a href="#"
                                                                            class="ims__refresh control-link active">
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
                                                                                <th class="data-title">Client Email</th>                                                                              
                                                                                <th class="data-title">Status</th>
                                                                                <th class="data-title">Action Taken</th>
                                                                                <th class="data-title">Via</th>
                                                                                <th class="data-title">Assign</th>
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
                                                                                    <td class="data--date data-cell">
                                                                                        <div class="text">{{$client->assign_by}}</div>
                                                                                    </td>     
                                                                                    <td class="data--date data-cell">
                                                                                        <div class="text">{{$client->status}}</div>
                                                                                    </td>
                                                                                    <td class="data--date data-cell">
                                                                                        @if($client->action_taken == null)
                                                                                            <div class="text">(Not Taken Action)</div>
                                                                                        @else
                                                                                            <div class="text">{{$client->action_taken}}</div>
                                                                                        @endif
                                                                                    </td>
                                                                                    <td class="data--title data-cell">
                                                                                        <div class="text">
                                                                                            @if($client->contact_via == 'Whatsapp')
                                                                                                <button style="border: none; color: #4AD504; background-color: #fff;"><i class="bi bi-whatsapp"></i></button>
                                                                                            @elseif($client->contact_via == 'Messenger')
                                                                                                <button style="border: none; color: #0084ff; background-color: #fff;"><i class="bi bi-messenger"></i></button>
                                                                                            @elseif($client->contact_via == 'Telegram')
                                                                                                <button style="border: none; color: #0088cc; background-color: #fff;"><i class="bi bi-telegram"></i></button>
                                                                                            @elseif($client->contact_via == 'Line')
                                                                                                <button style="border: none; color: #07b53b; background-color: #fff;"><i class="bi bi-line"></i></button>
                                                                                            @elseif($client->contact_via == 'Viber')
                                                                                                <button style="border: none; color: #665cac; background-color: #fff;"><i class="bi bi-instagram"></i></button>
                                                                                            @elseif($client->contact_via == 'Tawkto')
                                                                                                <button style="border: none; color: #665cac; background-color: #fff;"><i class="bi bi-snapchat"></i></button>
                                                                                            @endif
                                                                                        </div>
                                                                                    </td>
                                                                                    
                                                                                    <td class="data--assign data-cell">
                                                                                        <select class="form-select" id="{{$client->id}}" name="assigned_by" onchange="assignedBy(this)">
                                                                                            <option selected disabled>Choose...</option>
                                                                                            <option value="Admin" {{ $client->assign_by == 'Admin' ? "selected" : "" }}>To Admin</option>
                                                                                            <option value="Manager" {{ $client->assign_by == 'Manager' ? "selected" : "" }}>To Manager</option>
                                                                                            <option value="Agent" {{ $client->assign_by == 'Agent' ? "selected" : "" }}>To Agent</option>
                                                                                        </select>
                                                                                    </td>
                                                                                    <td class="data--chat data-cell">
                                                                                        <a href="{{route('frontend.user.user_widget.ims_individual_inbox',$client->id)}}" class="chat-btn">
                                                                                            <i class="bi bi-chat-dots"></i>
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
                                            
                                        </section>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    

@endsection



@push('after-scripts')

<script>

    function assignedBy(color) {
        
        if (color.value == 'Admin') {
            color.classList.remove("select-admin", "select-manager", "select-agent");
            color.classList.add("select-admin");
        } else if (color.value == 'Manager') {
            color.classList.remove("select-admin", "select-manager", "select-agent");
            color.classList.add("select-manager");
        } else if (color.value == 'Agent') {
            color.classList.remove("select-admin", "select-manager", "select-agent");
            color.classList.add("select-agent");
        } else {
            color.classList.remove("select-admin", "select-manager", "select-agent");
        }

        id = color.id;
        value = color.value;

        // console.log(id);
        // console.log(value);

        $.post("{{url('/')}}/api/assigned_by",
            {
                id: id,
                value: value,
            },
        );
              
    }

</script>

<script>
        $(document).ready(function() { 

           
            

        });       
    </script>


@endpush