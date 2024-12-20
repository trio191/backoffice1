<!DOCTYPE html>
<html>
<head>
    @include('user.layout.link')
    <link rel="stylesheet" href="{{ asset('user/css/account/login.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/account/account.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
        .is-invalid {
            border-color: red;
        }
    </style>
</head>
<body>
    <div class="container-fluid " style="font-family: Poppins;">
        <div class="row ">
            <div class="col-xl-4 left-side">
                <div class="left-content">
                    <div class="overlay"></div>
                    <!-- logo -->
                    <div class="py-3">
                        <img src="/user/images/logo.png" class="position-relative z-index-1" alt="logo" width="100">
                    </div>
                    <!-- heading -->
                    <h2 class="text-white position-relative create-account-text z-index-1 text-uppercase">One-stop management Platform</h2>
                    <h1 class="text-center text-white create-account-text position-relative z-index-1">Keeping your yacht seaworthy, year-round</h1>
                    <!-- sub heading -->
                </div>
            </div>
            <div class="col-xl-8  right-side-addlink justify-content-center">
                <div class="">
                    <div class="px-5 py-3">
                        <div class="d-flex py-4">
                            <img src="/user/images/cheif.png"/>
                        </div>
                        <h3 class="heading-text" style="font-family: Cormorant Garamond;color: #00365E;">Create account as <span style="color: #5E8BF7;">Yacht Owner</span></h3>
                        <p class="" style="font-family: Poppins; color: #00365E;">Please add your details and select the type of account to proceed</p>
                        <form id="registration-form">
                            <div class="form-row">
                                <div class="form-group col-12 py-1">
                                    <label for="inputState" style="color: #00365E;">Details</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <select id="country" class="form-control" name="country">
                                        <option value="" selected disabled>Select Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
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
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Eswatini">Eswatini</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
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
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="North Macedonia">North Macedonia</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City">Vatican City</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    
                                    
                                    <div class="error-message" data-error="country"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" value="" class="form-control" id="state" name="state" placeholder="State*">
                                    <div class="error-message" data-error="state"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" value=""  class="form-control" id="city" name="city" placeholder="City*">
                                    <div class="error-message" data-error="city"></div>
                                </div>
                                <div class="form-group col-6">
                                    <input type="number"  value=""  class="form-control" id="postalCode" name="postalCode" placeholder="Postal Code">
                                    <div class="error-message" data-error="postalCode"></div>
                                </div>

                                <div class="form-group col-md-12">
                                    <textarea id="address"  value=""  name="address"  class="form-control" placeholder="Address" ></textarea>
                                    <div class="error-message" data-error="address"></div>
                                </div>
                                <div class="form-group col-12 pt-4">
                                    <label for="inputState" style="color: #00365E;">Socials</label>
                                </div>
                                <div class="facebook-linkdin">
                                    <div class="form-group facebook pl-2 d-flex align-items-center border rounded">
                                        <img src="/user/images/Facebook.png" style="width: 24px; height: 24px;"/>
                                        <input type="text"  value=""  class="form-control px-0 border-0" id="facebookUrl" name="facebookUrl" placeholder="Facebook Url">
                                        <div class="error-message" data-error="facebookUrl"></div>
                                    </div>
                                    <div class="form-group linkdin px-2 d-flex align-items-center border rounded">
                                        <img src="/user/images/Linkedin.png" style="width: 24px; height: 24px;"/>
                                        <input type="text"  value=""  class="form-control border-0 px-1" id="linkedinUrl" name="linkedinUrl" placeholder="LinkedIn Url">
                                        <div class="error-message" data-error="linkedinUrl"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 d-flex align-items-center">
                                <div class="col-6 d-flex">
                                    <a href="/register/yachtowner" > 
                                        <button type="button" class="border-0 d-flex align-items-center bg-white px-4 py-1">
                                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                                            </svg>
                                            <span>Back</span>
                                        </button>
                                    </a> 
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <button  type="submit" class="border-0 d-flex align-items-center text-white px-4 py-1" style="background-color: #5E8BF7;">
                                        Next
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            // Retrieve and parse the yacht owner data from localStorage
            var yachtowners = JSON.parse(localStorage.getItem('yachtowner')) || {};

            // Define an object mapping each field to its corresponding ID
            var fields = {
                country: '#country',
                state: '#state',
                city: '#city',
                postalCode: '#postalCode',
                address: '#address',
                facebookUrl: '#facebookUrl',
                linkedinUrl: '#linkedinUrl'
            };

            // Loop through each field and set the value
            Object.keys(fields).forEach(function(key) {
                $(fields[key]).val(yachtowners[key] || '');
            });


            $('#registration-form').on('submit', function(e) {
                e.preventDefault();
                var yachtowner = {
                        country:  $('#country').val(),
                        state:  $('#state').val(),
                        city:  $('#city').val(),
                        postalCode:  $('#postalCode').val(),
                        address:  $('#address').val(),
                        facebookUrl:  $('#facebookUrl').val(),
                        linkedinUrl:  $('#linkedinUrl').val(),
                }
                localStorage.setItem('yachtowner', JSON.stringify(yachtowner));
                window.location.href = "/register/addYachatOwner";
                
            });
        });
    </script>
</body>
</html>
