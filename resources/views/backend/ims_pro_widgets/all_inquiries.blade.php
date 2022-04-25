@extends('backend.layouts.app')

@section('title', __('All Inquiries'))

@section('content')


    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <strong>All Inquiries in {{$project->name}}&nbsp;</strong>
                   
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>                                
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
                ajax: "{{route('admin.ims_pro_widgets.all_inquiries_getdetails',$widget->id)}}",
                serverSide: true,
                order: [[0, "desc"]],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'phone_number', name: 'phone_number'},               
                    {data: 'bookmarked_messages', name: 'bookmarked_messages'},         
                    {data: 'status', name: 'status'},                          
                ]
            }); 
          
        });
    </script>

@endsection
