<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="mt-4">
        <h2 class="text-center mb-5">Invoice</h2>

            <div class="container">
                <div class="col-md-12">
                    <div class="invoice">
                        <!-- begin invoice-company -->
                        <div class="invoice-company text-inverse f-w-600">
                            
                            <table width="100%">
                            <tr>
                                <td width="50%"><h5 class="invoice-inverse">Invoice ID: {{$invoice_id}}</h5></td>
                                
                            </tr>            
                            </table> 
                                
                        </div>

                        <hr>

                        <div class="invoice-company text-inverse f-w-600">
                            <table width="100%">
                            <tr>
                                <td width="70%">
                                    <table>
                                        <tr>
                                        <td class=""><small class="invoice-from">From:</small></td>
                                        <td><small class="invoice-from"><strong class="text-inverse">Tallentor</strong> sales@tallentor.com</small></td>
                                        </tr>
                                        <tr>
                                        <td class=""><small class="invoice-from">Date:</small></td>
                                        <td><small class="invoice-from"><strong class="text-inverse">{{ $created_at }}</strong></small></td>
                                        </tr>
                                        <tr>
                                        <td class=""><small class="invoice-from">To:</small></td>
                                        <td><small class="invoice-from"><strong class="text-inverse">{{ $name }}</strong> {{ $email }}</small></td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="text-right" width="30%"><img src="{{public_path('images/logo/tallentor-logo.png')}}" style="width: 65%;"></td>
                            </tr>            
                            </table>
                            
                        </div>

                        <hr>

                        <div class="invoice-header mb-5">
                            <div class="invoice-from">
                            <address class="mt-2 mb-2">
                                <strong class="text-inverse" style="border-bottom:1px solid #23282c;">Payment Information</strong><br>
                                    <table class="mt-3" width="380px">
                                        <tr>
                                        <td><h6 class="text-inverse">Project Name:</h6></td>
                                        <td><h6 class="text-inverse">{{$project_name}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Purchased Package:</td>
                                        <td><h6 class="text-inverse">{{$purchased_package}}</h6></td>
                                        </tr>  
                                        <tr>
                                        <td><h6 class="text-inverse">Discount Type:</td>
                                        <td><h6 class="text-inverse">{{$discount_type}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Purchased Service List:</td>
                                        <td><h6 class="text-inverse">{{$purchased_service_list}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Invoice No:</td>
                                        <td><h6 class="text-inverse">{{$invoice_no}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Price:</td>
                                        <td><h6 class="text-inverse">{{$price}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Discount:</td>
                                        <td><h6 class="text-inverse">{{$discount}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Status:</td>
                                        <td><h6 class="text-inverse">{{$status}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Payment Status:</td>
                                        <td><h6 class="text-inverse">{{$payment_status}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Payment Plan:</td>
                                        <td><h6 class="text-inverse">{{$payment_plan}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Payment Method:</td>
                                        <td><h6 class="text-inverse">{{$payment_method}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Date:</td>
                                        <td><h6 class="text-inverse">{{$date}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Due Date:</td>
                                        <td><h6 class="text-inverse">{{$due_date}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Expire Date:</td>
                                        <td><h6 class="text-inverse">{{$expire_date}}</h6></td>
                                        </tr>
                                    </table>
                            </address>
                            
                            </div>
                            <div class="invoice-to">
                            <address class="mt-2 mb-2">
                                <strong class="text-inverse" style="border-bottom:1px solid #23282c;">Customer Details</strong><br>
                                    <table class="mt-3" width="380px">
                                        <tr>
                                        <td><h6 class="text-inverse">Name:</td>
                                        <td><h6 class="text-inverse">{{$name}}</h6></td>
                                        </tr>                                       
                                        <tr>
                                        <td><h6 class="text-inverse">Country:</td>
                                        <td><h6 class="text-inverse">{{$country}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">State:</td>
                                        <td><h6 class="text-inverse">{{$state}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">City:</td>
                                        <td><h6 class="text-inverse">{{$city}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Phone Number:</td>
                                        <td><h6 class="text-inverse">{{$phone_number}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Address:</td>
                                        <td><h6 class="text-inverse">{{$address}}</h6></td>
                                        </tr>
                                        <tr>
                                        <td><h6 class="text-inverse">Email:</td>
                                        <td><h6 class="text-inverse">{{$email}}</h6></td>
                                        </tr>                                        
                                    </table>
                            </address>
                            </div>      
                            
                            <hr>
                            
                        </div>


                                 
                                                    
                        <!-- begin invoice-footer -->
                        <div class="invoice-footer mt-5 p-3" style="margin:20px 0 20px 0; border-top: 2px solid #A9A9A9; border-bottom: 2px solid #A9A9A9" align="center">
                            <h6 class="text-center m-b-5 f-w-600">Thank you! <br>
                            Please check your details are correct and reconfirm, Our Contact number 0033652300255</h6>

                            <h6 class="text-center m-b-5 f-w-600 mt-3">Orders are subject to our terms & conditions. We welcome all comments on the service we provide.<br></h6>
                        </div>
                        <!-- end invoice-footer -->
                        
                    </div>
                </div>
            </div>







                                                                    
    </div>
</body>
</html>