<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">
                
                <div class="row g-0">
                    <div class="col">
                        <div class="ims__navbar">
                        <div class="property-block">
                                <ul class="navbar-nav">
                                    <li class="nav-item border-right dropdown">
                                        <a class="nav-link" href="#" id="propertyDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="property">

                                            <a href="{{ route('frontend.user.project.chat',$project_id) }}" style="text-decoration:none;"><p class="px-4 mt-3">Go back</p></a>

                                         
                                                <div class="image"></div>
                                                <div class="content">
                                                    <h6 class="site-name" data-bs-toggle="modal" data-bs-target="#project_modal"></h6>
                                                </div>
                                               
                                            
                                                
                                                        <div class="image">
                                                            

                                                      
                                                        </div>
                                                        <div class="content">
                                                            <h6 class="site-name"></h6>
                                                            <span class="site-url"></span>
                                                        </div>
                                                        
                                                        <div class="image">

                                                        </div>
                                                        <div class="content">
                                                            <h6 class="site-name"></h6>
                                                        </div>
                                                      

                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="propertyDropdown">
                                       
                                                <li>
                                                    <a class="dropdown-item" href="">
                                                        <div class="property">
                                                            <div class="image">

                                                                
                                                                        <img src="" alt="propery-image">
                                                                
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="site-name"></h6>
                                                                <span class="site-url"></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                          
                                        </ul>
                                    </li>
                                   
                                    <a href="" style="text-decoration:none"><p class="px-4 mt-3"></p></a>
                                </ul>
                            </div>
                            <div class="profile-block">
                            <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                      
                                      

                                        <ul class="dropdown-menu" aria-labelledby="notifyDrop">
                                            <div class="inner-wrapper">
                                                <div class="list-group">
                                                                                                          
                                                                <a href="" class="list-group-item list-group-item-action" aria-current="true">
                                                                    <div class="d-flex w-100 justify-content-between">

                                                                        <div class="row">
                                                                            <div class="col-1">
                                                                                <i class=" mt-3" style="font-size:24px;"></i>
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <h5 class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"></h5>
                                                                                <p class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                                                    
                                                                                </p>
                                                                                <!-- <small>And some small print.</small> -->
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <small></small>
                                                                            </div>
                                                                        </div>

                                                                    </div>                                                                   
                                                                </a>
                                                        
                                                          
                                                </div>
                                             
                                                    <a href="" class="view-more">View More</a>
                                              
                                            </div>
                                        </ul>
                                    </li>
                                    
                                    @if(whatsapp_server_status( $project_id )['server_type'] == 'default_server' )
                                        {{--<button type="submit" class="btn btn-success btn-get-number" data-bs-toggle="modal" data-bs-target="#get_your_number">Add your own number</button>--}}
                                    @endif


                                    @if(whatsapp_server_status( $project_id )['connection_status'] != null )

                                        {{ whatsapp_server_status( $project_id )['connection_status'] }}

                                    @endif

                                    


                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="imsNavDrop" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <div class="profile">
                                                <div class="profile__pic">
                                                    @auth
                                                        <img src="{{auth()->user()->picture}}" >
                                                    @else
                                                        <img src="{{url('img/profile_avatar.jpg')}}" >
                                                    @endauth
                                                </div>
                                                <div class="name">
                                                    @auth
                                                        <div class="name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                                    @else
                                                        @if(count($ims_pro_user_details) != 0)
                                                            @foreach($ims_pro_user_details as $ims_pro_user_detail)  
                                                                {{$ims_pro_user_detail->name}}
                                                                @break;
                                                            @endforeach
                                                        @endif
                                                    @endauth
                                                </div>
                                                <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu profile-dropdown-menu" aria-labelledby="imsNavDrop">
                                            
                                                <li>
                                                    @auth
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('dashboard')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-speedometer"></i>
                                                                </div>
                                                                <div class="text">Dashboard</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('reports')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-journal-text"></i>
                                                                </div>
                                                                <div class="text">Reports</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('projects')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                </div>
                                                                <div class="text">Projects</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                                <div class="text">Your Details</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-pencil"></i>
                                                                </div>
                                                                <div class="text">Edit Profile</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-shield-check"></i>
                                                                </div>
                                                                <div class="text">Password & Security</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('settings')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-box-seam"></i>
                                                                </div>
                                                                <div class="text">Choose Plan</div>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{route('frontend.auth.logout')}}">
                                                                <div class="icon-block">
                                                                    <i class="bi bi-box-arrow-right"></i>
                                                                </div>
                                                                <div class="text">Sign Out</div>
                                                            </a>
                                                        </li>
                                                        
                                                    @else
                                                        
                                                        @if(count($ims_pro_user_details) != 0)
                                                            @foreach($ims_pro_user_details as $ims_pro_user_detail)  
                                                                    <a class="dropdown-item" href="{{url('ims_pro_logout',$ims_pro_user_detail->id)}}">
                                                                        <div class="icon-block">
                                                                            <i class="bi bi-box-arrow-right"></i>
                                                                        </div>
                                                                        <div class="text">Sign Out</div>
                                                                    </a>
                                                                @break;
                                                            @endforeach
                                                        @endif

                                                    @endauth

                                                   
                                                   
                                                </li>

                                        </ul>
                                    </li>





                                    
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="modal fade" id="project_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    
                    <form action="{{route('frontend.user.user_projects.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel"><img src="{{url('images/idea.png')}}" > Create your project</h4>
                            <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label style="font-size:16px">Project Name<span class="text-danger">*</span></label>
                                <input type="text" style="font-size:15px;" id="name" class="form-control mt-2" name="name" placeholder="Type your project name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label style="font-size:16px">Project Type <span class="text-danger">*</span></label>
                                <select class="form-control mt-2" style="font-size:15px;" id="project_type" name="project_type" required>
                                    <option value="" selected disabled>Select...</option>
                                    
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label style="font-size:16px">URL (With https://) <span class="text-danger">*</span></label>
                                <input type="text" style="font-size:15px;" id="url" class="form-control mt-2" name="url" placeholder="Type your URL" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade modal-get-number" id="get_your_number" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="brand">Tallentor - IMS</div>
                        <div id="modalNav" class="navigation">
                            <div class="navigation-btn selected">
                                <i class="bi circle bi-circle"></i>
                                <i class="bi circle-fill bi-check-circle-fill"></i>
                                <div class="text">Choose plan</div>
                            </div>
                            <div class="navigation-btn">
                                <i class="bi circle bi-circle"></i>
                                <i class="bi circle-fill bi-check-circle-fill"></i>
                                <div class="text">Billing info</div>
                            </div>
                            <div class="navigation-btn">
                                <i class="bi circle bi-circle"></i>
                                <i class="bi circle-fill bi-check-circle-fill"></i>
                                <div class="text">Inquiry</div>
                            </div>
                        </div>
                        <i class="bi bi-x-lg" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
                    </div>
                    <div class="modal-body">
                        <div class="content p-0">
                            <div id="planBlock" class="content-block plan-block active animate__animated animate__fadeIn">
                                <h2 class="title">Choose your Monthly plan</h2>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ut autem iusto maiores eaque voluptate temporibus odio in repellat incidunt?</p>
                                <div class="subscriptions">
                                    <!-- <div class="subcriptioin-block basic-block">
                                        <img src="{{url('images/dashboard/ims_pro/basic-sub.png')}}"  class="sub-img">
                                        <div class="title">Basic</div>
                                        <div class="discount">20% Savings</div>
                                        <div class="fee"><span>FREE</span> / month</div>                                        
                                        <button type="button" class="btn-sub">Start with Basic
                                            <input type="hidden" class="sub-input" name="basic">
                                        </button>
                                    </div>
                                    <div class="subcriptioin-block plus-block">
                                        <img src="{{url('images/dashboard/ims_pro/standard-sub.png')}}"  class="sub-img">
                                        <div class="title">Plus</div>
                                        <div class="discount">20% Savings</div>
                                        <div class="fee">LKR <span>2500</span> .00 / month</div>                                        
                                        <button type="button" class="btn-sub">Start with Plus
                                            <input type="hidden" class="sub-input" name="plus">
                                        </button>
                                    </div>
                                    <div class="subcriptioin-block executive-block">
                                        <img src="{{url('images/dashboard/ims_pro/premium-sub.png')}}"  class="sub-img">
                                        <div class="title">Executive</div>
                                        <div class="discount">20% Savings</div>
                                        <div class="fee">LKR <span>5000</span> .00 / month</div>                                        
                                        <button type="button" class="btn-sub">Start with Executive
                                            <input type="hidden" class="sub-input" name="executive">
                                        </button>
                                    </div>
                                    <div class="subcriptioin-block professional-block">
                                        <img src="{{url('images/dashboard/ims_pro/premium-sub.png')}}"  class="sub-img">
                                        <div class="title">Professional</div>
                                        <div class="discount">20% Savings</div>
                                        <div class="fee">LKR <span>5000</span> .00 / month</div>                                        
                                        <button type="button" class="btn-sub">Start with Professional
                                            <input type="hidden" class="sub-input" name="professional">
                                        </button>
                                    </div>
                                    <div class="subcriptioin-block premium-block">
                                        <img src="{{url('images/dashboard/ims_pro/premium-sub.png')}}"  class="sub-img">
                                        <div class="title">Premium</div>
                                        <div class="discount">20% Savings</div>
                                        <div class="fee">LKR <span>5000</span> .00 / month</div>                                        
                                        <button type="button" class="btn-sub">Start with Premium
                                            <input type="hidden" class="sub-input" name="premium">
                                        </button>
                                    </div> -->
                                    <div class="subcriptioin-block basic-block">
                                        <img src="{{url('images/dashboard/ims_pro/basic-plan.png')}}"  class="sub-image">
                                        <input type="hidden" class="sub-input" name="basic">
                                    </div>
                                    <div class="subcriptioin-block executive-block">
                                        <img src="{{url('images/dashboard/ims_pro/executive-plan.png')}}"  class="sub-image">
                                        <input type="hidden" class="sub-input" name="executive">
                                    </div>
                                    <div class="subcriptioin-block premium-block">
                                        <img src="{{url('images/dashboard/ims_pro/premium-plan.png')}}"  class="sub-image">
                                        <input type="hidden" class="sub-input" name="premium">
                                    </div>
                                </div>
                            </div>

                            <div id="billingBlock" class="content-block billing-block animate__animated">
                                <div class="row g-0">
                                    <div class="col-6 p-4">
                                        <h2 class="title">Billing info</h2>
                                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ut autem iusto maiores.</p>
                                        <form class="row g-3 card-details-form">
                                            <div class="col-12">
                                                <label class="form-label">Bank Name</label>
                                                <input type="text" id="bankInput" class="form-control" placeholder='Peoples Bank'>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Card Holder</label>
                                                <input type="text" id="cardHolderInput" class="form-control" placeholder='Kamal Kumarasiri'>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Card Number</label>
                                                <input type="number" id="cardNumberInput" class="form-control" placeholder='0225 9995 8888 0001'>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Expiration date</label>
                                                <input type="number" id="expDateInput" class="form-control" placeholder='07/21'>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">CVV</label>
                                                <input type="number" id="cvvInput" class="form-control" placeholder='678'>
                                            </div>
                                            <div class="col-12">
                                                <div class="alert">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                    Your subscription will renew on the 9th of every month.
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-6 p-4 image-block">
                                        <img src="{{url('images/dashboard/ims_pro/modal-image.png')}}"  class="modal-image">
                                        <div class="button-block">
                                            <button type="button" class="modal-btn billing-btn-prev btn-prev">
                                                <i class="bi bi-arrow-left-short"></i>
                                                <div class="text">Previous step</div>
                                            </button>
                                            <button type="button" class="modal-btn billing-btn-next btn-next">
                                                <div class="text">Next step</div>
                                                <i class="bi bi-arrow-right-short"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="inquiryBlock" class="content-block inquiry-block animate__animated">
                                <div class="row g-0">
                                    <div class="col-6 p-4">
                                        <h2 class="title">Drop Your Message</h2>
                                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ut autem iusto maiores.</p>
                                        <form class="row g-3 card-details-form">
                                            <div class="col-12">
                                                <label class="form-label">Your name</label>
                                                <input type="text" id="nameInput" class="form-control" placeholder='Kamal Kumarasiri'>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Email</label>
                                                <input type="email" id="emailInput" class="form-control" placeholder='example@gmail.com'>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Mobile Number</label>
                                                <input type="tel" id="telInput" class="form-control" placeholder='+94 875 42 1547'>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Your Message</label>
                                                <textarea class="form-control" id="msgInput" rows="4"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-6 p-4 image-block">
                                        <img src="{{url('images/dashboard/ims_pro/modal-image.png')}}"  class="modal-image">
                                        <div class="button-block">
                                            <button type="button" class="modal-btn inquiry-btn-prev btn-prev">
                                                <i class="bi bi-arrow-left-short"></i>
                                                <div class="text">Previous step</div>
                                            </button>
                                            <button type="submit" class="modal-btn inquiry-btn-next btn-next">
                                                <div class="text">Submit</div>
                                                <i class="bi bi-arrow-right-short"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script>
const planBlock = document.getElementById('planBlock')
const billingBlock = document.getElementById('billingBlock')
const inquiryBlock = document.getElementById('inquiryBlock')
const btnSub = planBlock.querySelectorAll('.btn-sub')
const modalNav = document.getElementById('modalNav')
const billingBtnPrv = document.querySelector('.billing-btn-prev')
const billingBtnNxt = document.querySelector('.billing-btn-next')
const inquiryBtnPrv = document.querySelector('.inquiry-btn-prev')
const inquiryBtnNxt = document.querySelector('.inquiry-btn-next')

const subBlcok = planBlock.querySelectorAll('.subcriptioin-block')

const cardHolderInput = document.getElementById('cardHolderInput')
const cardNumberInput = document.getElementById('cardNumberInput')
const expDateInput = document.getElementById('expDateInput')
const cvvInput = document.getElementById('cvvInput')
const nameInput = document.getElementById('nameInput')
const emailInput = document.getElementById('emailInput')
const telInput = document.getElementById('telInput')
const msgInput = document.getElementById('msgInput')

subBlcok.forEach(function (sub) {
    sub.addEventListener('click', function () {
        subBlcok.forEach(function (emp) {
            emp.querySelector('.sub-input').classList.remove('active')
        })
        sub.querySelector('.sub-input').classList.add('active')
        console.log(sub.querySelector('.sub-input.active').getAttribute('name'))
        modalNav.querySelector('.navigation-btn:nth-child(1)').classList.add('active')
        modalNav.querySelector('.navigation-btn:nth-child(2)').classList.add('selected')
        planBlock.classList.add('animate__fadeOut')
        planBlock.classList.remove('active', 'animate__fadeIn')
        billingBlock.classList.add('active', 'animate__fadeIn')
        billingBlock.classList.remove('animate__fadeOut')
    })
})

billingBtnPrv.addEventListener('click', function () {
    billingBlock.classList.add('animate__fadeOut')
    billingBlock.classList.remove('active', 'animate__fadeIn')
    planBlock.classList.remove('animate__fadeOut')
    planBlock.classList.add('active', 'animate__fadeIn')
})

inquiryBtnPrv.addEventListener('click', function () {
    inquiryBlock.classList.add('animate__fadeOut')
    inquiryBlock.classList.remove('active', 'animate__fadeIn')
    billingBlock.classList.remove('animate__fadeOut')
    billingBlock.classList.add('active', 'animate__fadeIn')
})

billingBtnNxt.addEventListener('click', function () {
    billingBlock.classList.add('animate__fadeOut')
    billingBlock.classList.remove('active')
    inquiryBlock.classList.add('active', 'animate__fadeIn')
    inquiryBlock.classList.remove('animate__fadeOut')
    modalNav.querySelector('.navigation-btn:nth-child(2)').classList.add('active')
    modalNav.querySelector('.navigation-btn:nth-child(3)').classList.add('selected')
})
</script>