<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analytics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="p-4 mt-2">
        <h2 class="text-center mb-5">Inquiries</h2>
      
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col"><p style="font-size:11px;">Assign User</p></th>
                    <th scope="col"><p style="font-size:11px;">Phone Number</p></th>
                    <th scope="col"><p style="font-size:11px;">Assign User Type</p></th>
                    <th scope="col"><p style="font-size:11px;">Message</p></th>
                    <th scope="col"><p style="font-size:11px;">Company</p></th>
                    <th scope="col"><p style="font-size:11px;">Role</p></th>
                    <th scope="col"><p style="font-size:11px;">Email</p></th>
                    <th scope="col"><p style="font-size:11px;">Tags</p></th>
                    <th scope="col"><p style="font-size:11px;">Status</p></th>
                    <th scope="col" width="40px"><p style="font-size:11px;">Date</p></th>
                </tr>
            </thead>
            <tbody>
                @foreach($inquiry_status ?? '' as $data)
                <tr>
                    <th scope="row"><p style="font-size:11px;">{{ $data->assign_user }}</p></th>
                    <td><p style="font-size:11px;">{{ $data->phone_number }}</p></td>
                    <td><p style="font-size:11px;">{{ $data->assign_user_type }}</p></td>
                    <td><p style="font-size:11px;">{{ $data->bookmarked_messages }}</p></td>
                    <td><p style="font-size:11px;">{{ $data->company }}</p></td>
                    <td><p style="font-size:11px;">{{ $data->role }}</p></td>
                    <td><p style="font-size:11px;">{{ $data->email }}</p></td>                    
                    <td><p style="font-size:11px;">{{ $data->tags }}</p></td>                    
                    <td><p style="font-size:11px;">{{ $data->status }}</p></td>                    
                    <td><p style="font-size:11px;">{{ $data->created_at->format('d M Y') }}</p></td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>