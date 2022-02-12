@extends('backend.layouts.app')

@section('title', __('Show'))

@section('content')


    <form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    
                
                </div>
               
                
            </div><br>  
            
        </div>

    </form>

 
<br><br>
@endsection
