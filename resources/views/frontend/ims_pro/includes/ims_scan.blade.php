@if(whatsapp_server_status($project_id)['connection_status'] != 'Authenticated')
    <div class="row g-0">
        <div class="qr-section">
            <div class="content-block">
                <div class="title">Scan the QR-code to connect your Whatsapp number</div>
                <ul class="steps">
                    <li><span class="no">01.</span><div class="text">Open WhatsApp on your phone</div></li>
                    <li><span class="no">02.</span><div class="text">Tap <span>Menu</span> or <span>Settings</span> and select <span>Linked Devices</span></div></li>
                     <li><span class="no">03.</span><div class="text">Point your phone to this screen to capture the code</div></li>
                </ul>
                <div class="text">If you have Whatsapp MultiDevice enabled, please generate <a href="#" class="qr-section-link">Whatsapp Multidevice QR code here</a> instead.</div>
                <a href="#" class="qr-section-link">Need help to get started ?</a>
            </div>
            <div class="qr-code">
                   <iframe src="https://{{whatsapp_server_status( $project_id )['server_endpoint']}}" height="300px">

                   </iframe>
            </div>
        </div>
    </div>
@else
    <div class="row g-0">
        <div class="qr-section">
            <div class="content-block">
                <div class="title">WhatsApp Authenticated </div>
                <a href="#" class="qr-section-link">Need help to get started ?</a>
            </div>
        </div>
    </div>
@endif