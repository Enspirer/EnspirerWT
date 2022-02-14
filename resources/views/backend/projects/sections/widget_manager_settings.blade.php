@extends('backend.layouts.app')

@section('title', __('Create Widgets Manager'))

@section('content')
    
@include('backend.projects.includes.project_header')


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

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="template" role="tabpanel" aria-labelledby="template-tab">Template</div>
        <div class="tab-pane fade" id="content" role="tabpanel" aria-labelledby="content-tab">Content</div>
        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">Settings</div>
        <div class="tab-pane fade" id="appearance" role="tabpanel" aria-labelledby="appearance-tab">Appearance</div>
    </div>

@endsection
