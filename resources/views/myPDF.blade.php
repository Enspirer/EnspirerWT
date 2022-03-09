<!DOCTYPE html>
<html>
<head>
	<title>Inquiry</title>
</head>
<style>
    #invoice{
    padding: 20px;
    margin-top:-40px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right;
    margin-bottom: 10px;
}

.invoice .company-details .name {
    margin-top: -95px;
    margin-bottom: 10px;
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 10px;
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0px;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -400px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<div id="invoice">
        <h1 class="invoice-id" align="center" style="color: #3989c6">Inquiry</h1>
   
    <hr>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col-6">
                        
                        <div class="col invoice-to">
                            <h2 class="to">{{$client_name}}</h2>
                            <div class="address">{{$phone_number}}</div>
                            <div class="address">{{$ip_address}}</div>
                            <div class="email">{{$client_email}}</div>
                        </div>
                        
                    </div>
                    <div class="col-6 company-details">
                        <h2 class="name">
                            <a style="text-decoration:none;">{{$project_name}}</a>
                        </h2>
                        <div>455 Foggy Heights, AZ 85004, US</div>
                        <div>(123) 456-789</div>
                        <div>hello@tallentor.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                   
                    <div class="col invoice-details">                        
                        <div class="date">Date: {{$date}}</div>
                    </div>
                </div>

                <div class="date" style="margin-top:17px;  list-style-type: square;">&bull; Client Name: {{ $client_name }}</div>
                <div class="date" style="margin-top:17px;">&bull; Phone Number: {{ $phone_number }}</div>
                <div class="date" style="margin-top:17px;">&bull; Client Email: {{ $client_email }}</div>
                <div class="date" style="margin-top:17px;">&bull; Contact Via: {{ $contact_via }}</div>
                <div class="date" style="margin-top:17px;">&bull; Message: {{ $message }}</div>
                <div class="date" style="margin-top:17px;">&bull; IP Address: {{ $ip_address }}</div>
                <div class="date" style="margin-top:17px;">&bull; Date: {{$date}}</div>

                @if($assign_by != null)
                    <div class="date" style="margin-top:17px;">&bull; Assigned By: {{ $assign_by }}</div>
                @endif
                @if($manager_comment != null)
                    <div class="date" style="margin-top:17px;">&bull; Manager Comment: {{ $manager_comment }}</div>
                @endif
                @if($comment != null)
                    <div class="date" style="margin-top:17px;">&bull; Comment: {{ $comment }}</div>
                @endif
                @if($action_taken != null)
                    <div class="date" style="margin-top:17px;">&bull; Action Taken: {{ $action_taken }}</div>
                @endif
                @if($status != null)
                    @if($status == 'Deal close successfully')
                        <div class="date" style="margin-top:17px; color:green">&bull; Status: {{ $status }}</div>
                    @elseif($status == 'Not responding')
                        <div class="date" style="margin-top:17px; color:red">&bull; Status: {{ $status }}</div>
                    @else
                        <div class="date" style="margin-top:17px; color:#DE970B">&bull; Status: {{ $status }}</div>
                    @endif
                @endif


              
                <!-- <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div> -->
            </main>
            <div class="thanks" align="center"><p style="font-size: 25px;">Thank you!</p></div>

            <!-- <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer> -->
        </div>
        
        <div></div>
    </div>
</div>



</body>
</html>