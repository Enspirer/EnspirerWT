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
                                                    <img src="{{url('images/profile.png')}}" alt="">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="profile-info">
                                                    <i class="bi bi-pencil-fill"></i>
                                                    <div class="info-item">
                                                        Your Name :
                                                        <span class="data">John The Done</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Email :
                                                        <span class="data">john@done.com</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Contact Number :
                                                        <span class="data">+94 77 157 4123</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Address :
                                                        <span class="data">1542, Malabe, Kaduwela</span>
                                                    </div>
                                                    <div class="info-item">
                                                        City :
                                                        <span class="data">Malabe</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Province :
                                                        <span class="data">Western</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Zip Code :
                                                        <span class="data">15968</span>
                                                    </div>
                                                    <div class="info-item">
                                                        Country :
                                                        <span class="data">Sri Lanka</span>
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
                                                    <img src="{{url('images/profile.png')}}" alt="">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="row g-4">
                                            <div class="col-6">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstName">
                                            </div>
                                            <div class="col-6">
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastName">
                                            </div>
                                            <div class="col-12">
                                                <label for="emailInput" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="emailInput">
                                            </div>
                                            <div class="col-12">
                                                <label for="contactNo" class="form-label">Contact Number</label>
                                                <input type="tel" class="form-control" id="contactNo">
                                            </div>
                                            <div class="col-12">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputCity" class="form-label">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputProvince" class="form-label">Province</label>
                                                <input type="text" class="form-control" id="inputProvince">
                                            </div>
                                            <div class="col-6">
                                                <label for="zipCode" class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" id="zipCode">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputCountry" class="form-label">Country</label>
                                                <select id="inputCountry" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia, Plurinational State of</option>
                                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Côte d'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                    <option value="KR">Korea, Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia, the former Yugoslav Republic of
                                                    </option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Réunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha
                                                    </option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the South Sandwich Islands
                                                    </option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands, British</option>
                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <input type="text" id="password" class="form-control">
                                                    <span class="input-group-text" onclick="showPass('password')"><i
                                                            class="bi bi-eye-slash-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
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
                                        <form class="row g-4">
                                            <div class="col-12">
                                                <label for="cur-password" class="form-label">Current Password</label>
                                                <div class="input-group">
                                                    <input type="text" id="cur-password" class="form-control">
                                                    <span class="input-group-text" onclick="showPass('cur-password')"><i
                                                            class="bi bi-eye-slash-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="new-password" class="form-label">New Password</label>
                                                <div class="input-group">
                                                    <input type="text" id="new-password" class="form-control">
                                                    <span class="input-group-text" onclick="showPass('new-password')"><i
                                                            class="bi bi-eye-slash-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="confirm-password" class="form-label">Confirm New
                                                    Password</label>
                                                <div class="input-group">
                                                    <input type="text" id="confirm-password" class="form-control">
                                                    <span class="input-group-text" onclick="showPass('confirm-password')"><i
                                                            class="bi bi-eye-slash-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <button type="submit" class="save-btn">Save</button>
                                            </div>
                                        </form>
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
    </script>

    @endpush