<div class="row g-0">
    <div class="ims__control-panel">
        <div class="row g-0">
            <div class="col">
                <div class="control-block">
                    <div class="controls">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                value="" id="imsSelectAll">
                            <label class="form-check-label"
                                for="imsSelectAll">
                                <i class="bi bi-chevron-down"></i>
                            </label>
                        </div>
                    </div>
                    <div class="actions">                        
                        <a href="#" class="control-link" data-delete-modal data-bs-toggle="modal" data-bs-target="#deleteInquiry">
                            <i class="bi bi-trash-fill"></i>
                            <div class="text">Delete</div>
                        </a>
                    </div>
                    <a href="#" class="btn-status-report" type="button" data-bs-toggle="modal" data-bs-target="#reportDownload">
                        <i class="bi bi-download"></i>
                        <div class="text">Status Report</div>
                    </a>
                </div>
                @if(count($all_ims_pro_client_messages) == 0)
                    @include('frontend.includes.not_found',[
                        'not_found_title' => 'No Any Chats Found',
                        'not_found_description' => null,
                        'not_found_button_caption' => null
                    ])
                @else
                    <div class="ims__data-table">
                        <table class="table table-borderless" id="inquirySummery">
                            <thead>
                                <tr class="data-row">
                                    <th class="data-title"></th>
                                    <th class="data-title"></th>
                                    <th class="data-title">Name</th>
                                    <th class="data-title">Date</th>
                                    <th class="data-title">Messenger Channel</th>                                                                              
                                    <th class="data-title">Responsible</th>
                                    <th class="data-title">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    @foreach($all_ims_pro_client_messages as $all_ims_pro_client_message)
                                        <tr class="data-row" data-href="#">
                                            <td class="data--select data-cell">
                                                <input class="form-check-input inquiry-check"
                                                id="{{$all_ims_pro_client_message->phone_number}}" type="checkbox" value="">
                                            </td>
                                            <td class="data--fav data-cell">
                                                <label class="fav-btn">
                                                    <input type="checkbox">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                </label>
                                            </td>
                                           
                                            <td class="data--name data-cell">
                                                <a href="{{route('frontend.user_widget.ims_pro_index',[$all_ims_pro_client_message->project_id,$all_ims_pro_client_message->phone_number,$all_ims_pro_client_message->type])}}" style="text-decoration:none; color:#212529;">
                                                    <div class="info-block">
                                                        <div class="header">
                                                            <div class="name">{{$all_ims_pro_client_message->name}}</div>
                                                            <div class="count">{{\App\Models\ImsProClientMessages::where('project_id',$all_ims_pro_client_message->project_id)->where('phone_number',$all_ims_pro_client_message->phone_number)->count()}}</div>
                                                        </div>
                                                        <div class="message"><span></span>{{\App\Models\ImsProClientMessages::where('project_id',$all_ims_pro_client_message->project_id)->where('phone_number',$all_ims_pro_client_message->phone_number)->latest()->first()->message}} . . .</div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="data--date data-cell">
                                                <div class="text">{{ $all_ims_pro_client_message->created_at->format('d M Y') }}</div>
                                            </td>  
                                            <td class="data--chnnel data-cell">                                                
                                                <div class="channel-block">
                                                    <div class="icon">
                                                    @if($all_ims_pro_client_message->type == 'WhatsApp')
                                                        <img src="{{url('images/social_media_icons/whatsapp.png')}}" >
                                                    @elseif($all_ims_pro_client_message->type == 'Messenger')
                                                        <img src="{{url('images/social_media_icons/messenger.png')}}"  class="chat-client">
                                                    @elseif($all_ims_pro_client_message->type == 'Telegram')
                                                        <img src="{{url('images/social_media_icons/telegram.png')}}"  class="chat-client">
                                                    @elseif($all_ims_pro_client_message->type == 'Viber')
                                                        <img src="{{url('images/social_media_icons/viber.png')}}"  class="chat-client">
                                                    @elseif($all_ims_pro_client_message->type == 'Line')
                                                        <img src="{{url('images/social_media_icons/line.png')}}"  class="chat-client">
                                                    @endif
                                                    </div>
                                                    <div class="name">{{$all_ims_pro_client_message->type}}</div>
                                                </div>
                                            </td>
                                            <td class="data--date data-cell">
                                                <div class="channel-block">
                                                    @if(App\Models\Inquiries_Status::where('project_id',$all_ims_pro_client_message->project_id)->where('phone_number',$all_ims_pro_client_message->phone_number)->latest()->first() == null)
                                                        <div class="name">Not Assigned</div>
                                                    @else
                                                        <div class="name">{{\App\Models\Inquiries_Status::where('project_id',$all_ims_pro_client_message->project_id)->where('phone_number',$all_ims_pro_client_message->phone_number)->latest()->first()->assign_user}}</div>
                                                    @endif
                                                </div>
                                            </td>      
                                            <td class="data--status data-cell">
                                                <div class="status-block">
                                                    <!-- <div class="indicator orange"></div> -->
                                                    @if(App\Models\Inquiries_Status::where('project_id',$all_ims_pro_client_message->project_id)->where('phone_number',$all_ims_pro_client_message->phone_number)->latest()->first() == null)
                                                        <div class="status">Not Assigned</div>
                                                    @else
                                                        <div class="status">{{\App\Models\Inquiries_Status::where('project_id',$all_ims_pro_client_message->project_id)->where('phone_number',$all_ims_pro_client_message->phone_number)->latest()->first()->status}}</div>
                                                    @endif
                                                </div>
                                            </td>
                                            
                                        </tr>                                                                
                                    @endforeach   
                            </tbody>
                        </table>
                    </div>
                @endif                                                        
            </div>
        </div>
    </div>
</div>

<!--Report Download Modal -->
<div class="modal get_widget_Modal fade" id="reportDownload" tabindex="-1" aria-labelledby="reportDownloadLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                <i class="bi bi-x-lg"></i>
            </button>
            <i class="bi bi-download"></i>
            <div class="text">Download Report File</div>
        </div>
        <form action="{{ route('frontend.generate_pdf_inquiry', $project->id) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="modal-body">               
                <div class="form-title mb-3">Select Fields</div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input class="form-control" type="text" onfocus="(this.type='date')" name="start_date" id="start_date" placeholder="Start Date" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input class="form-control" type="text" onfocus="(this.type='date')" name="end_date" id="end_date" placeholder="End Date" required>
                        </div>
                    </div>                                                                        
                </div>            
            </div>
            <div class="modal-footer">
                <div class="button-block">
                    <!-- <a href="#" class="btn-save-filter">
                        <i class="bi bi-sliders2-vertical"></i>
                        <div class="text">Save Filter</div>
                    </a> -->
                </div>
                <div class="button-block">
                    <a href="#" class="btn-cancel" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn-download" style="border:none">
                        <i class="bi bi-download"></i>
                        <div class="text">Download Report File</div>
                    </button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Delete Inquery Modal -->
<div class="modal fade" id="deleteInquiry" tabindex="-1" aria-labelledby="deleteInquiryLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteInquiryLabel">Delete Inquiry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you want to delete selected inquiries?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"data-cancel-btn data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" data-delete-btn>Delete</button>
      </div>
    </div>
  </div>
</div>

<script>
    const dataTable = document.getElementById("inquirySummery")
    const dataCheck = dataTable.querySelectorAll(".inquiry-check")
    const dataDeleteModal = document.querySelector('[data-delete-modal]')
    const dataDeleteBtn = document.querySelector('[data-delete-btn]')
    const dataCancelBtn = document.querySelector('[data-cancel-btn]')
    const dataChecked = []

    dataCheck.forEach(function (i) {
        i.addEventListener('change', function () {
            const data = i.getAttribute("id");
            const dataIndex = dataChecked.indexOf(data);

            if (i.checked) {

                if (dataChecked.includes(data) === false) {
                    dataChecked.push(data);
                } else {
                    return;
                }

                dataDeleteModal.classList.add("active");

            } else {

                if (dataIndex > -1) {
                    dataChecked.splice(dataIndex, 1);
                } else {
                    return;
                }
            }

            console.log(dataChecked.length);

            if (dataChecked.length == 0) {
                dataDeleteModal.classList.remove("active");
            }
        })
    })

    dataDeleteBtn.addEventListener('click', function () {
        fetch("{{url('/')}}/api/selected_conversation", {
        // fetch("https://jsonplaceholder.typicode.com/posts", {
                method: "POST",
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    'phone_numbers': dataChecked,
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });

            setTimeout(function(){
                dataCancelBtn.click()
                location.reload()
            },1000)
    })
</script>