<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquiry Summary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

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
</head>
<body>
    <div class="p-4 mt-2">
        <h2 class="text-center mb-5">Inquiry Summary</h2>
        
        <p style="display:inline; float:left;">Start Date: {{$start_date}}</p>
        <p style="display:inline; float:right;">End Date: {{$end_date}}</p>       
              
        <table class="styled-table" style="margin-top:45px;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($client_messages ?? '' as $data)
                    <tr>
                        <td><p style="font-size:11px;">{{ $data->name }}</p></td>
                        <td><p style="font-size:11px;">{{ $data->phone_number }}</p></td>
                        <td><p style="font-size:11px;">{{ $data->email }}</p></td>
                        <td><p style="font-size:11px;">{{ $data->type }}</p></td>
                        <td><p style="font-size:11px;">{{ $data->message }}</p></td>
                        <td><p style="font-size:11px;">{{ $data->status }}</p></td>                    
                        <td><p style="font-size:11px;">{{ $data->created_at->format('d M Y') }}</p></td>                    
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>