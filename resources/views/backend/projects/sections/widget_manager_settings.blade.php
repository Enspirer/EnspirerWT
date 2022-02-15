@extends('backend.layouts.app')

@section('title', __('Create Widgets Manager'))

@section('content')
    
@include('backend.projects.includes.project_header')
<style>
    select {
        font-family: 'Lato', 'Font Awesome 5 Free';
        font-weight: 900;
    }
</style>


<div class="row">
    <div class="col-6">       
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="template-tab" data-toggle="tab" href="#template" role="tab" aria-controls="template" aria-selected="true">Template</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="content-tab" data-toggle="tab" href="#content" role="tab" aria-controls="content" aria-selected="false">Content</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="appearance-tab" data-toggle="tab" href="#appearance" role="tab" aria-controls="appearance" aria-selected="false">Appearance</a>
                    </li>
                </ul>
                <form action="{{route('admin.projects.widget_manager.settings_update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="template" role="tabpanel" aria-labelledby="template-tab">
                        
                        <div class="form-group mt-3">
                                <label>Template Layout <span class="text-danger">*</span></label>
                                <select class="form-control" id="template_layout" name="template_layout" required>
                                    <option value="" selected disabled>Select...</option>
                                    @foreach($whatsapp_chat as $whatsapp)
                                        <option value="{{ $whatsapp->id }}">{{ $whatsapp->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>                       

                        <div class="tab-pane fade" id="content" role="tabpanel" aria-labelledby="content-tab">
                            <div class="form-group mt-3">
                                <label>Whatsapp Number <span class="text-danger">*</span></label>
                                <input type="text" id="whatsapp_number" class="form-control" name="whatsapp_number" required>
                            </div>
                            
                             
                            <div class="card px-3 mt-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Chat Bubble</h6>
                                <div class="form-group mt-3">
                                    <label>Bubble Icon <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" name="bubble_icon" required>
                                        <option value="address-book">&#xf2b9; address-book</option>
                                        <option value="address-card">&#xf2bb; address-card</option>
                                        <option value="angry">&#xf556; angry</option>
                                        <option value="arrow-alt-circle-down">&#xf358; arrow-alt-circle-down</option>
                                        <option value="arrow-alt-circle-left">&#xf359; arrow-alt-circle-left</option>
                                        <option value="arrow-alt-circle-right">&#xf35a; arrow-alt-circle-right</option>
                                        <option value="arrow-alt-circle-up">&#xf35b; arrow-alt-circle-up</option>
                                        <option value="bell">&#xf0f3; bell</option>
                                        <option value="bell-slash">&#xf1f6; bell-slash</option>
                                        <option value="bookmark">&#xf02e; bookmark</option>
                                        <option value="building">&#xf1ad; building</option>
                                        <option value="calendar">&#xf133; calendar</option>
                                        <option value="calendar-alt">&#xf073; calendar-alt</option>
                                        <option value="calendar-check">&#xf274; calendar-check</option>
                                        <option value="calendar-minus">&#xf272; calendar-minus</option>
                                        <option value="calendar-plus">&#xf271; calendar-plus</option>
                                        <option value="calendar-times">&#xf273; calendar-times</option>
                                        <option value="caret-square-down">&#xf150; caret-square-down</option>
                                        <option value="caret-square-left">&#xf191; caret-square-left</option>
                                        <option value="caret-square-right">&#xf152; caret-square-right</option>
                                        <option value="caret-square-up">&#xf151; caret-square-up</option>
                                        <option value="chart-bar">&#xf080; chart-bar</option>
                                        <option value="check-circle">&#xf058; check-circle</option>
                                        <option value="check-square">&#xf14a; check-square</option>
                                        <option value="circle">&#xf111; circle</option>
                                        <option value="clipboard">&#xf328; clipboard</option>
                                        <option value="clock">&#xf017; clock</option>
                                        <option value="clone">&#xf24d; clone</option>
                                        <option value="closed-captioning">&#xf20a; closed-captioning</option>
                                        <option value="comment">&#xf075; comment</option>
                                        <option value="comment-alt">&#xf27a; comment-alt</option>
                                        <option value="comment-dots">&#xf4ad; comment-dots</option>
                                        <option value="comments">&#xf086; comments</option>
                                        <option value="compass">&#xf14e; compass</option>
                                        <option value="copy">&#xf0c5; copy</option>
                                        <option value="copyright">&#xf1f9; copyright</option>
                                        <option value="credit-card">&#xf09d; credit-card</option>
                                        <option value="dizzy">&#xf567; dizzy</option>
                                        <option value="dot-circle">&#xf192; dot-circle</option>
                                        <option value="edit">&#xf044; edit</option>
                                        <option value="envelope">&#xf40e0 envelope </option>
                                        <option value="envelope-open">&#xf2b6; envelope-open</option>
                                        <option value="eye">&#xf06e; eye</option>
                                        <option value="eye-slash">&#xf070; eye-slash</option>
                                        <option value="file">&#xf15b; file</option>
                                        <option value="file-alt">&#xf15c; file-alt</option>
                                        <option value="file-archive">&#xf1c6; file-archive</option>
                                        <option value="file-audio">&#xf1c7; file-audio</option>
                                        <option value="file-code">&#xf1c9; file-code</option>
                                        <option value="file-excel">&#xf1c3; file-excel </option>
                                        <option value="file-image">&#xf1c5; file-image</option>
                                        <option value="file-pdf">&#xf1c1; file-pdf</option>
                                        <option value="file-powerpoint">&#xf1c4; file-powerpoint</option>
                                        <option value="file-video">&#xf1c8; file-video</option>
                                        <option value="file-word">&#xf1c2; file-word</option>
                                        <option value="flag">&#xf024; flag</option>
                                        <option value="flushed">&#xf579; flushed</option>
                                        <option value="folder">&#xf07b; folder</option>
                                        <option value="folder-open">&#xf07c; folder-open </option>
                                        <option value="frown">&#xf119; frown</option>
                                        <option value="frown-open">&#xf57a; frown-open</option>
                                        <option value="futbol">&#xf1e3; futbol</option>
                                        <option value="gem">&#xf3a5; gem</option>
                                        <option value="grimace">&#xf57f; grimace</option>
                                        <option value="grin">&#xf580; grin</option>
                                        <option value="grin-alt">&#xf581; grin-alt</option>
                                        <option value="grin-beam">&#xf582; grin-beam</option>
                                        <option value="grin-beam-sweet">&#xf583; grin-beam-sweet </option>
                                        <option value="grin-hearts">&#xf584; grin-hearts</option>
                                        <option value="grin-squint">&#xf585; grin-squint</option>
                                        <option value="grin-squint-tears">&#xf586; grin-squint-tears</option>
                                        <option value="grin-stars">&#xf587; grin-stars</option>
                                        <option value="grin-tears">&#xf588; grin-tears</option>
                                        <option value="grin-tongue">&#xf589; grin-tongue</option>
                                        <option value="grin-tongue-squint">&#xf58a; grin-tongue-squint</option>
                                        <option value="grin-tongue-wink">&#xf58b; grin-tongue-wink</option>
                                        <option value="grin-wink">&#xf58c; grin-wink </option>
                                        <option value="hand-lizard">&#xf258; hand-lizard</option>
                                        <option value="hand-paper">&#xf256; hand-paper</option>
                                        <option value="hand-peace">&#xf25b; hand-peace</option>
                                        <option value="hand-point-down">&#xf0a7; hand-point-down</option>
                                        <option value="hand-point-left">&#xf0a5; hand-point-left</option>
                                        <option value="hand-point-right">&#xf0a4; hand-point-right</option>
                                        <option value="hand-point-up">&#xf0a6; hand-point-up</option>
                                        <option value="hand-pointer">&#xf25a; hand-pointer</option>
                                        <option value="hand-rock">&#xf255; hand-rock </option>
                                        <option value="hand-scissors">&#xf257; hand-scissors</option>
                                        <option value="hand-spock">&#xf259; hand-spock</option>
                                        <option value="handshake">&#xf2b5; handshake</option>
                                        <option value="hdd">&#xf0a0; hdd</option>
                                        <option value="heart">&#xf004; heart</option>
                                        <option value="home">&#xf015; home</option>
                                        <option value="hospital">&#xf0f8; hospital</option>
                                        <option value="hourglass">&#xf254; hourglass</option>
                                        <option value="id-badge">&#xf2c1; id-badge</option>
                                        <option value="id-card">&#xf2c2; id-card </option>
                                        <option value="image">&#xf03e; image</option>
                                        <option value="images">&#xf302; images</option>
                                        <option value="keyboard">&#xf11c; keyboard</option>
                                        <option value="kiss">&#xf596; kiss</option>
                                        <option value="kiss-beam">&#xf597; kiss-beam</option>
                                        <option value="kiss-wink-heart">&#xf598; kiss-wink-heart</option>
                                        <option value="laugh">&#xf599; laugh</option>
                                        <option value="laugh-beam">&#xf59a; laugh-beam</option>
                                        <option value="laugh-squint">&#xf59b; laugh-squint </option>
                                        <option value="laugh-wink">&#xf59c; laugh-wink</option>
                                        <option value="lemon">&#xf094; lemon</option>
                                        <option value="life-ring">&#xf1cd; life-ring</option>
                                        <option value="lightbulb">&#xf0eb; lightbulb</option>
                                        <option value="list-alt">&#xf022; list-alt</option>
                                        <option value="map">&#xf279; map</option>
                                        <option value="meh">&#xf11a; meh</option>
                                        <option value="meh-blank">&#xf5a4; meh-blank</option>
                                        <option value="meh-rolling-eyes">&#xf5a5; meh-rolling-eyes </option>
                                        <option value="minus-square">&#xf146; minus-square</option>
                                        <option value="money-bill-alt">&#xf3d1; money-bill-alt</option>
                                        <option value="moon">&#xf186; moon</option>
                                        <option value="newspaper">&#xf1ea; newspaper</option>
                                        <option value="object-group">&#xf247; object-group</option>
                                        <option value="object-upgroup">&#xf248; object-upgroup</option>
                                        <option value="paper-plane">&#xf1d8; paper-plane</option>
                                        <option value="pause-circle">&#xf28b; pause-circle</option>
                                        <option value="play-circle">&#xf144; play-circle </option>
                                        <option value="plus-square">&#xf0fe; plus-square</option>
                                        <option value="question-circle">&#xf059; question-circle</option>
                                        <option value="registered">&#xf25d; registered</option>
                                        <option value="sad-cry">&#xf5b3; sad-cry</option>
                                        <option value="sad-tear">&#xf5b4; sad-tear</option>
                                        <option value="save">&#xf0c7; save</option>
                                        <option value="share-square">&#xf14d; share-square</option>
                                        <option value="smile">&#xf118; smile</option>
                                        <option value="smile-beam">&#xf5b8; smile-beam </option>
                                        <option value="smile-wink">&#xf4da; smile-wink</option>
                                        <option value="snowflake">&#xf2dc; snowflake</option>
                                        <option value="square">&#xf0c8; square</option>
                                        <option value="star">&#xf005; star</option>
                                        <option value="star-half">&#xf089; star-half</option>
                                        <option value="sticky-note">&#xf249; sticky-note</option>
                                        <option value="stop-circle">&#xf28d; stop-circle</option>
                                        <option value="sun">&#xf185; sun</option>
                                        <option value="surprise">&#xf5c2; surprise </option>
                                        <option value="thumbs-down">&#xf165; thumbs-down</option>
                                        <option value="thumbs-up">&#xf1164; thumbs-up</option>
                                        <option value="times-circle">&#xf057; times-circle</option>
                                        <option value="tired">&#xf5c8; tired</option>
                                        <option value="trash-alt">&#xf2ed; trash-alt</option>
                                        <option value="user">&#xf007; user</option>
                                        <option value="user-circle">&#xf2bd; user-circle</option>
                                        <option value="window-close">&#xf410; window-close</option>
                                        <option value="window-maximize">&#xf2d0; window-maximize </option>
                                        <option value="window-minimize">&#xf2d1; window-minimize</option>
                                        <option value="window-restore">&#xf2d2; window-restore</option>
                                    </select>
                                </div>
                            </div>

                            

                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Chat Header</h6>
                                <div class="form-group mt-3">
                                    <label>Chat Header <span class="text-danger">*</span></label>
                                    <input type="text" id="chat_header" class="form-control" name="chat_header" required>
                                </div>
                                <div class="form-group mt-1">
                                    <label>Caption <span class="text-danger">*</span></label>
                                    <input type="text" id="caption" class="form-control" name="caption" required>
                                </div>
                            </div>

                            
                            
                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Welcome Message</h6>
                                <div class="form-group mt-3">
                                    <textarea type="text" id="editor" class="form-control" name="welcome_message"></textarea>
                                </div>
                            </div>

                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Start Chat Button</h6>
                                <div class="form-group mt-3">
                                    <label>Start Chat <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" name="start_chat" required>
                                        <option value="Enabled">Enabled</option>                                 
                                        <option value="Disabled">Disabled</option>                                 
                                    </select>
                                </div>
                                <div class="form-group mt-1">
                                    <label>Show Icon <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" name="show_icon" required>
                                        <option value="Enabled">Enabled</option>                                 
                                        <option value="Disabled">Disabled</option>                                 
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            
                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Position</h6>
                                <div class="form-group mt-1">
                                    <select class="form-control custom-select" name="position" required>
                                        <option value="Floating Bubble">Floating Bubble</option>                                 
                                        <option value="Embed Bubble">Embed Bubble</option>                                 
                                        <option value="Embed Chat Window">Embed Chat Window</option>                                 
                                    </select>
                                </div>                            
                            </div>

                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Chat Display Settings</h6>
                                <div class="form-group mt-1">
                                    <label>Where to display chat <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" name="where_display_chat" required>
                                        <option value="All">All</option>                                 
                                        <option value="Excluded Pages">Excluded Pages</option>                                 
                                        <option value="Specific Pages">Specific Pages</option>                                 
                                    </select>
                                </div>  
                                
                                <label class="mt-3">Device <span class="text-danger">*</span></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="device[]" id="desktop" value="desktop" checked>
                                    <label class="form-check-label" for="desktop">Desktop</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="device[]" id="mobile_device" value="mobile_device">
                                    <label class="form-check-label" for="mobile_device">Mobile Devices</label>
                                </div>
                                                 
                                        
                                <label class="mt-4">Visitors <span class="text-danger">*</span></label>                        
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="visitors" id="all_visitors" value="all_visitors" checked>
                                    <label class="form-check-label" for="all_visitors">All Visitors</label>
                                </div>
                            
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="visitors" id="new_visitors" value="new_visitors">
                                    <label class="form-check-label" for="new_visitors">New Visitors</label>
                                </div>
                                
                                <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" type="radio" name="visitors" id="refurm_visitors" value="refurm_visitors">
                                    <label class="form-check-label" for="refurm_visitors">Refurming Visitors</label>
                                </div>                            
                            
                            </div>

                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                
                                <h6 class="card-header p-0 mt-0">Date and Time</h6>

                                <label class="mt-3">When to Display Chat <span class="text-danger">*</span></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="monday" value="monday">
                                    <label class="form-check-label" for="monday">Monday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="tuesday" value="tuesday">
                                    <label class="form-check-label" for="tuesday">Tuesday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="wednesday" value="wednesday">
                                    <label class="form-check-label" for="wednesday">Wednesday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="thursday" value="thursday">
                                    <label class="form-check-label" for="thursday">Thursday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="friday" value="friday">
                                    <label class="form-check-label" for="friday">Friday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="saturday" value="saturday">
                                    <label class="form-check-label" for="saturday">Saturday</label>
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" type="checkbox" name="date_time[]" id="sunday" value="sunday">
                                    <label class="form-check-label" for="sunday">Sunday</label>
                                </div>
                            

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group mt-1">
                                            <label>Start Time <span class="text-danger">*</span></label>
                                            <input type="date" id="start_time" class="form-control" name="start_time" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mt-1">
                                            <label>End Time <span class="text-danger">*</span></label>
                                            <input type="date" id="end_time" class="form-control" name="end_time" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-1 mb-3">
                                    <label>TimeZone <span class="text-danger">*</span></label>

                                    <select class="form-control custom-select" name="timezone" required>
                                        <option value="Etc/GMT+12">(GMT-12:00) International Date Line West</option>
                                        <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                        <option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option>
                                        <option value="US/Alaska">(GMT-09:00) Alaska</option>
                                        <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                                        <option value="America/Tijuana">(GMT-08:00) Tijuana, Baja California</option>
                                        <option value="US/Arizona">(GMT-07:00) Arizona</option>
                                        <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                        <option value="US/Mountain">(GMT-07:00) Mountain Time (US & Canada)</option>
                                        <option value="America/Managua">(GMT-06:00) Central America</option>
                                        <option value="US/Central">(GMT-06:00) Central Time (US & Canada)</option>
                                        <option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                        <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                        <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                        <option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)</option>
                                        <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
                                        <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
                                        <option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
                                        <option value="America/Manaus">(GMT-04:00) Manaus</option>
                                        <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                        <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
                                        <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                        <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires, Georgetown</option>
                                        <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                        <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                        <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                        <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                        <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                        <option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                                        <option value="Etc/Greenwich">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                        <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                        <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                        <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                        <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                        <option value="Africa/Lagos">(GMT+01:00) West Central Africa</option>
                                        <option value="Asia/Amman">(GMT+02:00) Amman</option>
                                        <option value="Europe/Athens">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                                        <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                        <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                        <option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
                                        <option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                        <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                        <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                        <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
                                        <option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                                        <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                        <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                                        <option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
                                        <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                        <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
                                        <option value="Asia/Baku">(GMT+04:00) Baku</option>
                                        <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                        <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                        <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
                                        <option value="Asia/Karachi">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                        <option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                        <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura</option>
                                        <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                        <option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
                                        <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                        <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                        <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                        <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                        <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                        <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur, Singapore</option>
                                        <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                        <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                        <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
                                        <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                        <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                        <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                        <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                        <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                        <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                        <option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                                        <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                        <option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
                                        <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                        <option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                        <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                                        <option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                        <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Open Chat Triggers</h6>
                                <div class="form-group mt-3">
                                    <label>Time on Page <span class="text-danger">*</span></label>
                                    <input type="text" id="time_on_page" class="form-control" name="time_on_page" required>
                                </div>  
                                
                                <div class="form-group mt-1">
                                    <label>Time on Site <span class="text-danger">*</span></label>
                                    <input type="text" id="time_on_site" class="form-control" name="time_on_site" required>
                                </div> 

                                <div class="form-group mt-1">
                                    <label>Scroll Position <span class="text-danger">*</span></label>
                                    <input type="text" id="scroll_position" class="form-control" name="scroll_position" required>
                                </div> 

                                <div class="custom-control custom-switch mb-1">
                                    <input type="checkbox" class="custom-control-input" name="exit_internet" id="exit_internet">
                                    <label class="custom-control-label" for="exit_internet">Exit Internet</label>
                                </div>

                                <label class="mt-3">Notification <span class="text-danger">*</span></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="notification[]" id="bubble_notification_bage" value="bubble_notification_bage">
                                    <label class="form-check-label" for="bubble_notification_bage">Bubble Notification Badge</label>
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" type="checkbox" name="notification[]" id="show_notification_in_tab_tile" value="show_notification_in_tab_tile">
                                    <label class="form-check-label" for="show_notification_in_tab_tile">Show Notification in Tab Title</label>
                                </div>

                            </div>

                        </div>
                        

                        <div class="tab-pane fade" id="appearance" role="tabpanel" aria-labelledby="appearance-tab">
                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Colors</h6>
                                <div class="form-group mt-3">
                                    <label>Bubble background Color <span class="text-danger">*</span></label>
                                    <input type="color" id="bubble_background_color" class="form-control" name="bubble_background_color" required>
                                </div> 
                                <div class="form-group mt-1">
                                    <label>Bubble Icon Color <span class="text-danger">*</span></label>
                                    <input type="color" id="bubble_icon_color" class="form-control" name="bubble_icon_color" required>
                                </div> 
                                <div class="form-group mt-1">
                                    <label>Button Color <span class="text-danger">*</span></label>
                                    <input type="color" id="button_color" class="form-control" name="button_color" required>
                                </div> 
                                <div class="form-group mt-1">
                                    <label>Header Background Color <span class="text-danger">*</span></label>
                                    <input type="color" id="header_background_color" class="form-control" name="header_background_color" required>
                                </div> 
                                                        
                            </div>

                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Bubble Animation</h6>
                                
                                <div class="custom-control custom-switch mt-2">
                                    <input type="checkbox" class="custom-control-input" name="enabled_animation" id="enabled_animation">
                                    <label class="custom-control-label" for="enabled_animation">Enabled Animation</label>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Scroll Position <span class="text-danger">*</span></label>
                                    <input type="text" id="scroll_position_appearance" class="form-control" name="scroll_position_appearance" required>
                                </div> 

                            </div>

                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Start Chat Button</h6>
                                
                                <div class="form-group">
                                    <label for="button_corner_radius">Button Corner Radius</label>
                                    <input type="range" class="form-control-range" name="button_corner_radius" id="button_corner_radius">
                                </div>

                            </div>

                            <div class="card px-3 custom-shadow border-0" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <h6 class="card-header p-0 mt-0">Custom CSS</h6>
                                                            
                                <div class="form-group mt-1">
                                    <textarea type="text" class="form-control" name="custom_css" rows="4" required></textarea>
                                </div> 

                            </div>

                        </div>                   
                    
                    
                    </div>

                    <div class="mt-3 text-right">
                        <input type="hidden" name="hidden_id" value="{{ $widget->id }}"/>
                        <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-primary">Preview</a>

                <iframe src="{{route('admin.whatsapp_chat_preview')}}" frameborder="0" style="width: 100%;height: 610px;"></iframe>
            </div>
        </div>
    </div>
</div>
    
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>

@endsection
