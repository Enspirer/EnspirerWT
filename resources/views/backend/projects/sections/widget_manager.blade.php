@extends('backend.layouts.app')

@section('title', __('Widgets Manager'))

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class = "row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-9">
                            <h4>{{App\Models\Projects::where('id',$project->id)->first()->name}} - Created at {{App\Models\Projects::where('id',$project->id)->first()->created_at}}</h4>
                            <p>{{App\Models\Projects::where('id',$project->id)->first()->url}}</p>
                        </div>
                    </div>
                </div>                

            </div>
        </div><br>

    </div>

<div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <strong>Widgets Manager&nbsp;</strong>

                    <a href="{{route('admin.projects.widget_manager.create',$project->id)}}" class="btn btn-primary pull-right ml-4">Create New</a>
                   
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Widget Type</th>
                                <th scope="col">Status</th>
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
    

     <!-- Modal delete -->
     <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form name="importform" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h3 class="modal-title" id="ModalDeleteLabel">Delete</h3>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h5>Are you sure you want to remove this?</h5>
                        </div>                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" name="ok_button" id="ok_button">Delete</button>
                       
                    </div>
                </form>

            </div>
        </div>
    </div>
   

    <script type="text/javascript">
        $(function () {
            var table = $('#villadatatable').DataTable({
                processing: true,
                ajax: "{{route('admin.projects.widget_manager.getdetails',$project->id)}}",
                serverSide: true,
                order: [[0, "desc"]],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'widget_type', name: 'widget_type'},
                    {data: 'status', name: 'status'},                    
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
 

            var user_id;

            $(document).on('click', '.delete', function(){
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
            $.ajax({
            url:"delete/"+user_id,
            
            success:function(data)
            {
                setTimeout(function(){
                $('#confirmModal').modal('hide');
                $('#villadatatable').DataTable().ajax.reload();
                });
            }
            })
            });

          
        });
    </script>



@endsection
