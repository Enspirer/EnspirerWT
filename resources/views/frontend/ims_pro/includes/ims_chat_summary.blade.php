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
                        <a href="#"
                            class="ims__refresh control-link active">
                            <i class="bi bi-arrow-clockwise"></i>
                        </a>
                    </div>
                    <div class="actions">
                        <a href="#" class="control-link">
                            <i class="bi bi-send-fill"></i>
                            <div class="text">Bulk Reply</div>
                        </a>
                        <a href="#" class="control-link">
                            <i class="bi bi-record-circle"></i>
                            <div class="text">Assign</div>
                        </a>
                        <a href="#" class="control-link">
                            <i class="bi bi-eye-fill"></i>
                            <div class="text">Mark as read</div>
                        </a>
                        <a href="#" class="control-link">
                            <i class="bi bi-tags-fill"></i>
                            <div class="text">Labels</div>
                        </a>
                        <a href="#" class="control-link">
                            <i class="bi bi-volume-mute-fill"></i>
                            <div class="text">Mute</div>
                        </a>
                        <a href="#" class="control-link">
                            <i class="bi bi-archive-fill"></i>
                            <div class="text">Archive</div>
                        </a>
                        <a href="#" class="control-link" data-delete-modal data-bs-toggle="modal" data-bs-target="#deleteInquiry">
                            <i class="bi bi-trash-fill"></i>
                            <div class="text">Delete</div>
                        </a>
                        <a href="#" class="control-link">
                            <i class="bi bi-three-dots"></i>
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
                                            <td class="data--pic data-cell">
                                                <img src="{{url('img/profile_avatar.jpg')}}" alt="">
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
                                                        <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                    </div>
                                                    <div class="name">WhatsApp</div>
                                                </div>
                                            </td>
                                            <td class="data--date data-cell">
                                                <div class="text">{{\App\Models\Inquiries_Status::where('project_id',$all_ims_pro_client_message->project_id)->where('phone_number',$all_ims_pro_client_message->phone_number)->latest()->first()->assign_user}}</div>
                                            </td>      
                                            <td class="data--status data-cell">
                                                <div class="status-block">
                                                    <div class="indicator orange"></div>
                                                    <div class="status">Pending</div>
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