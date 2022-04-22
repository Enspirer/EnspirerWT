<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <div class="p-4 mt-2">
        <h2 class="text-center mb-5">Conversation</h2>      
                                    
        <table class="table table-bordered mb-5" style="margin-top:45px;">
            @foreach($solo_ims_pro_client_messages ?? '' as $solo_ims_pro_client_message)
                <tr>
                    <td><p style="font-size:13px;">{{$solo_ims_pro_client_message->message}}</p></td>                    
                </tr>
            @endforeach
        </tbody>

        
</body>
</html>