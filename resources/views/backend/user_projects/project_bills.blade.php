@extends('backend.layouts.app')

@section('title', __('Projects'))

@section('content')


<div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <strong>{{$user->first_name}} {{$user->last_name}}</strong>
                   
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Package Starting Date</th>
                                <th scope="col">Selected Package</th>
                                <th scope="col">Expire Date</th>
                                <th scope="col">Remaining Days</th>
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

    <br><br>


<script type="text/javascript">
    $(function () {
        var table = $('#villadatatable').DataTable({
            processing: true,
            ajax: "{{route('admin.project_bills_getdetails',$user->id)}}",
            serverSide: true,
            order: [[0, "desc"]],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'package_starting_date', name: 'package_starting_date'},
                {data: 'selected_package', name: 'selected_package'},
                {data: 'expire_date', name: 'expire_date'},
                {data: 'remaining_days', name: 'remaining_days'},
                {data: 'action', name: 'action', orderable: false, searchable: false},       
            ]
        }); 
      
    });
</script>

@endsection
