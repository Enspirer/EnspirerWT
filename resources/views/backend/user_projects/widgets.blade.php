@extends('backend.layouts.app')

@section('title', __('General Settings'))

@section('content')

<style>
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }
    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }
    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }
    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

</style>

<div class="row">
    <div class="col-12">
     
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">                            
                          
                            @if(count($widget_detail) == 0)
                                @include('frontend.includes.not_found',[
                                    'not_found_title' => 'Data not found',
                                    'not_found_description' => null,
                                    'not_found_button_caption' => null
                                ])
                            @else
                                <table class="styled-table" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Widget Type</th>
                                            <th>Category</th>
                                            <th>Widget Key</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($widget_detail as $widget)
                                        
                                            <tr>                                            
                                                <td>{{$widget->id}}</td>
                                                <td>{{$widget->widget_type}}</td>
                                                <td>{{$widget->category}}</td>
                                                <td>{{$widget->widget_key}}</td>                                                
                                            </tr>
                               
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif                        
                               
                        </div>
                    </div>
                </div>
                
                
            </div>
            
        

    </div>         

            
</div>



@endsection
