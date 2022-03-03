@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/reports.css')}}">
<link rel="stylesheet" href="{{url('css/projects.css')}}">
<link rel="stylesheet" href="{{url('css/dashboard_settings.css')}}">


<section id="sectionMainWindow">
    @include('frontend.includes.sidebar')

    <div id="sectionBody">
        @include('frontend.includes.nav')

        <!-- Content goes here -->
        <div class="row g-0">
            <section class="section-settings">
                <div class="tab-block">
                    <div class="nav nav-pills " id="settingsTab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="accounts-details-tab" data-bs-toggle="pill"
                            data-bs-target="#accounts-details" type="button" role="tab" aria-controls="accounts-details"
                            aria-selected="true">
                            <div class="inner-wrapper">
                                <i class="bi bi-person"></i>
                                <div class="text">Your Details</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="nav-link" id="edit-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#edit-profile" type="button" role="tab" aria-controls="edit-profile"
                            aria-selected="false">
                            <div class="inner-wrapper">
                                <i class="bi bi-pencil"></i>
                                <div class="text">Edit Profile</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="nav-link" id="pw-n-security-tab" data-bs-toggle="pill"
                            data-bs-target="#pw-n-security" type="button" role="tab" aria-controls="pw-n-security"
                            aria-selected="false">
                            <div class="inner-wrapper">
                                <i class="bi bi-shield-check"></i>
                                <div class="text">Password & Security</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="nav-link" id="choose-plan-tab" data-bs-toggle="pill"
                            data-bs-target="#choose-plan" type="button" role="tab" aria-controls="choose-plan"
                            aria-selected="false">
                            <div class="inner-wrapper">
                                <i class="bi bi-box-seam"></i>
                                <div class="text">Choose Plan</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="content-block">
                    <div class="tab-content" id="settingsTabContent">
                        <div class="tab-pane fade show active" id="accounts-details" role="tabpanel"
                            aria-labelledby="accounts-details-tab">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title">Account Details</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-9">
                                    <div class="content">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <div class="profile-pic">
                                                    <img src="{{ auth()->user()->picture }}" alt="">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="profile-info">
                                                    <i class="bi bi-pencil-fill"></i>
                                                    <div class="info-item">
                                                        Your Name :
                                                        <span class="data">{{$user->first_name}} {{$user->last_name}}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Email :
                                                        <span class="data">{{$user->email}}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Contact Number :
                                                        <span class="data">{{$user->contact_number}}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Address :
                                                        <span class="data">{{$user->address}}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        City :
                                                        <span class="data">{{$user->city}}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Province :
                                                        <span class="data">{{$user->province}}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Zip Code :
                                                        <span class="data">{{$user->zip_code}}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Country :
                                                        <span class="data">{{$user->country}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title">Edit Profile</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-6">
                                    <div class="content">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="profile-pic">
                                                    <img src="{{ auth()->user()->picture }}" alt="">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{route('frontend.user.profile_details.update')}}" class="row g-4" method="post" enctype="multipart/form-data" >
                                            {{csrf_field()}}
                                            <div class="col-6">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" id="firstName" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" id="lastName" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="emailInput" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" value="{{$user->email}}" id="emailInput" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="contactNo" class="form-label">Contact Number</label>
                                                <input type="tel" class="form-control" name="contact_number" value="{{$user->contact_number}}" id="contactNo" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" name="address" value="{{$user->address}}" id="address" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputCity" class="form-label">City</label>
                                                <input type="text" class="form-control" name="city" value="{{$user->city}}" id="inputCity" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputProvince" class="form-label">Province</label>
                                                <input type="text" class="form-control" name="province" value="{{$user->province}}" id="inputProvince" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="zipCode" class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" name="zip_code" value="{{$user->zip_code}}" id="zipCode" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputCountry" class="form-label">Country</label>
                                                <select id="inputCountry" class="form-select" name="country" required>
                                                    <option value="" selected disabled>Select Here...</option>
                                                    <option value="Afganistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bonaire">Bonaire</option>
                                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Canary Islands">Canary Islands</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Channel Islands">Channel Islands</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Island">Cocos Island</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Curaco">Curacao</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Ter">French Southern Ter</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Great Britain">Great Britain</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="India">India</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea North">Korea North</option>
                                                    <option value="Korea Sout">Korea South</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Midway Islands">Midway Islands</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Nambia">Nambia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                    <option value="Nevis">Nevis</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau Island">Palau Island</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Phillipines">Philippines</option>
                                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="St Barthelemy">St Barthelemy</option>
                                                    <option value="St Eustatius">St Eustatius</option>
                                                    <option value="St Helena">St Helena</option>
                                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                    <option value="St Lucia">St Lucia</option>
                                                    <option value="St Maarten">St Maarten</option>
                                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                    <option value="Saipan">Saipan</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="Samoa American">Samoa American</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Tahiti">Tahiti</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                                    <option value="United States of America">United States of America</option>
                                                    <option value="Uraguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City State">Vatican City State</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                    <option value="Wake Island">Wake Island</option>
                                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zaire">Zaire</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>                                                
                                            </div>
                                            
                                            <div class="col-12 mt-4">
                                                <input type="hidden" class="form-control" value="{{ $user->id }}" name="hid_id">
                                                <button type="submit" class="save-btn">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pw-n-security" role="tabpanel"
                            aria-labelledby="pw-n-security-tab">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title">Password & Security</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-6">
                                    <div class="content">
                                        
                                            {{ html()->form('PATCH', route('frontend.auth.password.update'))->class('form-horizontal')->open() }}

                                            <div class="col-12">
                                                <label for="cur-password" class="form-label">Current Password</label>
                                                <div class="input-group">
                                                    <input type="password" id="cur-password" class="form-control" name="old_password" required>
                                                    <span class="input-group-text" onclick="showPass('cur-password')"><i class="bi bi-eye-slash-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="new-password" class="form-label">New Password</label>
                                                <div class="input-group">
                                                    <input type="password" id="new-password" class="form-control" name="password" required>
                                                    <span class="input-group-text" onclick="showPass('new-password')"><i class="bi bi-eye-slash-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="confirm-password" class="form-label">Confirm New Password</label>
                                                <div class="input-group">
                                                    <input type="password" id="confirm-password" class="form-control" name="password_confirmation" required>
                                                    <span class="input-group-text" onclick="showPass('confirm-password')"><i class="bi bi-eye-slash-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <button type="submit" class="save-btn">Save</button>
                                            </div>
                                            {{ html()->form()->close() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="choose-plan" role="tabpanel" aria-labelledby="choose-plan-tab">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title">Choose Plan</div>
                                </div>
                            </div>
                            <div class="row g-5">
                                <div class="col-4">
                                    <div id="basic-plan" class="plan-info active basic-plan">
                                        <div class="title">Your Plan</div>
                                        <div class="subtitle">Basic Plan</div>
                                        <div class="plan-options">
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem
                                                    ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option unavailable"><i class="bi bi-x-circle"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option unavailable"><i class="bi bi-x-circle"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option unavailable"><i class="bi bi-x-circle"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option unavailable"><i class="bi bi-x-circle"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                        </div>
                                    </div>
                                    <div id="standard-plan" class="plan-info standard-plan">
                                        <div class="title">Your Plan</div>
                                        <div class="subtitle">Standard Plan</div>
                                        <div class="plan-options">
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem
                                                    ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option unavailable"><i class="bi bi-x-circle"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option unavailable"><i class="bi bi-x-circle"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                        </div>
                                    </div>
                                    <div id="premium-plan" class="plan-info premium-plan">
                                        <div class="title">Your Plan</div>
                                        <div class="subtitle">Premium Plan</div>
                                        <div class="plan-options">
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem
                                                    ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                            <div class="option"><i class="bi bi-check-circle-fill"></i><span
                                                    class="text">Lorem ipsum dolor sit.</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="subscriptions">
                                        <form action="">
                                            <fieldset class="row g-4" id="subscriptions">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="subscriptions" id="basic-sub" value="option1" checked>
                                                            <i class="bi bi-check-circle-fill"></i>
                                                        <label class="form-check-label" for="basic-sub">
                                                            <div class="icon-block">
                                                                <img src="{{url('images/Group 434.png')}}" alt="">
                                                            </div>
                                                            <div class="title-block">
                                                                <div class="title">Basic</div>
                                                                <div class="subtitle">Subtitle here</div>
                                                            </div>
                                                            <div class="discount-block basic">7% Saving</div>
                                                            <div class="fees-block basic">
                                                                <div class="currency"></div>
                                                                <div class="fee">FREE<span class="cents"></span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="subscriptions" id="standard-sub" value="option2">
                                                            <i class="bi bi-check-circle-fill"></i>
                                                        <label class="form-check-label" for="standard-sub">
                                                            <div class="icon-block">
                                                                <img src="{{url('images/Group 435.png')}}" alt="">
                                                            </div>
                                                            <div class="title-block">
                                                                <div class="title">Standard</div>
                                                                <div class="subtitle">Subtitle here</div>
                                                            </div>
                                                            <div class="discount-block standard">20% Saving</div>
                                                            <div class="fees-block standard">
                                                                <div class="currency">LKR</div>
                                                                <div class="fee">2500<span class="cents">.00</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="subscriptions" id="premium-sub" value="option3">
                                                            <i class="bi bi-check-circle-fill"></i>
                                                        <label class="form-check-label" for="premium-sub">
                                                            <div class="icon-block">
                                                                <img src="{{url('images/Group 436.png')}}" alt="">
                                                            </div>
                                                            <div class="title-block">
                                                                <div class="title">Premium</div>
                                                                <div class="subtitle">Subtitle here</div>
                                                            </div>
                                                            <div class="discount-block premium">30% Saving</div>
                                                            <div class="fees-block premium">
                                                                <div class="currency">LKR</div>
                                                                <div class="fee">5000<span class="cents">.00</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row g-0">
                                                <div class="plan-change-confirmation">
                                                    <div class="text">Are you sure you want to change your plan now ?
                                                    </div>
                                                    <div class="button-block">
                                                        <button type="button" class="btn cancel-btn">Cancel</button>
                                                        <button type="submit" class="btn submit-btn">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



    @endsection

    @push('after-scripts')

    <script>
        // Subscription Change function
        $('#subscriptions input[type=radio]').change(function(){
            radioVAl = this.value;

            if(radioVAl == 'option1') {
                $('.plan-info').hide();
                $('#basic-plan').show();
            } else if(radioVAl == 'option2') {
                $('.plan-info').hide();
                $('#standard-plan').show();
            } else if(radioVAl == 'option3') {
                $('.plan-info').hide();
                $('#premium-plan').show();
            } else {
                $('.plan-info').hide();
            }
        });

        // Show hide Password
        function showPass(id) {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        $(document).ready(function() {     

            let country = <?php echo json_encode ($user->country ) ?>

            $('#inputCountry option').each(function(i){
                if($(this).val() == country) {
                    $(this).attr('selected', 'selected');
                }
            });

        });
    </script>

    @endpush