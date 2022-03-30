@extends('backend.layouts.app')

@section('title', __('Default Whatsapp Server'))

@section('content')

    
<div class="row">
    <div class="col-12">
        <form action="{{route('admin.default_whatsapp_server_update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class="card">
                <div class="card-body">
                    
                    <div class="form-group">
                        <label>Default Whatsapp Server</label>
                        <input type="text" class="form-control mt-2" name="default_whatsapp_server" value="{{$default_whatsapp_server->value}}" required></textarea>
                    </div>                    
                        
                </div>
            </div>
        
            <div align="center">
                <button type="submit" class="btn rounded-pill text-light px-4 py-2 me-2 btn-success">Update</button><br><br><br>
            </div>

        </form>
    </div>         

            
</div>    

<br><br>

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