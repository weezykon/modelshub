@extends ('layouts')
@section('accounttype')
    <div class="col-md-4">
        <div class="form-group">
            <span>Select Membership Type</span>
            <select name="type" class="form-control" onchange="showDiv(this)" required="">
                <option value="">Choose</option>
                <option value="Member">Member</option>
                <option value="Model">Model</option>
            </select>
        </div>
    </div>
    <div class="col-md-8">
        <section class="panel" id="member" style="display: none;">
            <header class="panel-heading">
                Contact Details
            </header>
            <div class="panel-body">
                <form method="post" action="/createmember">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="form-group col-md-6">
                            <span>Telephone</span>
                            <input type="text" id="Member-Phone" class="form-control" name="phone" placeholder="Telephone">
                            <input type="hidden" name="type" value="Member">
                        </div>
                        <div class="form-group col-md-6">
                            <span>Date Of Birth</span>
                            <!-- <input type="date" id="Member-Dob" class="form-control" name="dob"> -->
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date=""  class="input-append date dpYears three-width">
                                <input type="text" name="dob" id="Member-Dob" readonly="" size="16" class="form-control">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-md-4 username-form">
                            <span>Gender</span>
                            <select name="gender" id="Member-Gender" class="form-control">
                                <option value="">Choose</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 username-form">
                            <span>Nationality</span>
                            <select name="country" id="Member-Country" class="form-control selectpicker" data-live-search="true">
                                <option value="">Choose</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Aland Islands">Aland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D&apos;ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curacao">Curacao</option>
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
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People&apos;s Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <span>Website(Optional)</span>
                            <input type="text" name="website" class="form-control" id="website" placeholder="Website">
                        </div>
                        <div class="form-group col-md-4">
                            <span>State</span>
                            <select name="state" id="Member-State" class="form-control selectpicker" data-live-search="true" id="select">
                                <option value="outide">Outside Nigeria</option>
                                <option value="Abuja">ABUJA FCT</option>
                                <option value="Abia">ABIA</option>
                                <option value="Adamawa">ADAMAWA</option>
                                <option value="Akwa Ibom">AKWA IBOM</option>
                                <option value="Anambra">ANAMBRA</option>
                                <option value="Bauchi">BAUCHI</option>
                                <option value="Bayelsa">BAYELSA</option>
                                <option value="Benue">BENUE</option>
                                <option value="Borno">BORNO</option>
                                <option value="Cross River">CROSS RIVER</option>
                                <option value="Delta">DELTA</option>
                                <option value="Ebonyi">EBONYI</option>
                                <option value="Edo">EDO</option>
                                <option value="Ekiti">EKITI</option>
                                <option value="Enugu">ENUGU</option>
                                <option value="Gombe">GOMBE</option>
                                <option value="Imo">IMO</option>
                                <option value="Jigawa">JIGAWA</option>
                                <option value="Kaduna">KADUNA</option>
                                <option value="Kano">KANO</option>
                                <option value="Katsina">KATSINA</option>
                                <option value="Kebbi">KEBBI</option>
                                <option value="Kogi">KOGI</option>
                                <option value="Kwara">KWARA</option>
                                <option value="Lagos">LAGOS</option>
                                <option value="Nassarawa">NASSARAWA</option>
                                <option value="Niger">NIGER</option>
                                <option value="Ogun">OGUN</option>
                                <option value="Ondo">ONDO</option>
                                <option value="Osun">OSUN</option>
                                <option value="Oyo">OYO</option>
                                <option value="Plateau">PLATEAU</option>
                                <option value="Rivers">RIVERS</option>
                                <option value="Sokoto">SOKOTO</option>
                                <option value="Taraba">TARABA</option>
                                <option value="Yobe">YOBE</option>
                                <option value="Zamfara">ZAMFARA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <span>Town</span>
                            <input type="text" id="Member-Town" class="form-control" name="town" placeholder="Town/City">
                        </div>
                        <div class="form-group col-md-12">
                            <span>Languages</span>
                            <input type="text" name="languages" id="Member-Languages" class="form-control" data-role="tagsinput" placeholder="Examples: English, French.">
                        </div>
                        <div class="form-group col-md-8 username-form">
                            <span>Address</span>
                            <textarea name="address" id="Member-Address" placeholder="Address" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-8 username-form">
                            <span>Bio</span>
                            <textarea name="bio" id="Member-Bio" placeholder="Bio" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12 account-btn-section">
                            <button type="submit" class="btn btn-amber-outline">Next <i class="ti ti-arrow-circle-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="panel" id="model" style="display: none;">
            <header class="panel-heading">
                Contact Details
            </header>
            <div class="panel-body">
                <form method="post" action="/createmodel">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="form-group col-md-6">
                            <span>Telephone</span>
                            <input type="text" name="phone" class="form-control" id="Model-Phone" placeholder="Telephone">
                            <input type="hidden" name="type" value="Model">
                        </div>
                        <div class="form-group col-md-6">
                            <span>Date Of Birth</span>
                            <!-- <input type="date" name="dob" class="form-control" id="Model-Dob"> -->
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date=""  class="input-append date dpYears three-width">
                                <input type="text" name="dob" id="Model-Dob" readonly="" size="16" class="form-control">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-md-4 username-form">
                            <span>Gender</span>
                            <select name="gender" id="Model-Gender" class="form-control" onchange="showGender(this)">
                                <option value="">Choose</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 username-form">
                            <span>Nationality</span>
                            <select name="country" id="Model-Country" class="form-control selectpicker" data-live-search="true">
                                <option value="">Choose</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Aland Islands">Aland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D&apos;ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curacao">Curacao</option>
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
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People&apos;s Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <span>Website</span>
                            <input type="text" name="website" class="form-control" id="website" placeholder="Website">
                        </div>
                        <div class="form-group col-md-4">
                            <span>State</span>
                            <select name="state" id="Model-State" class="form-control selectpicker" data-live-search="true" id="select">
                                <option value="outide">Outside Nigeria</option>
                                <option value="Abuja">ABUJA FCT</option>
                                <option value="Abia">ABIA</option>
                                <option value="Adamawa">ADAMAWA</option>
                                <option value="Akwa Ibom">AKWA IBOM</option>
                                <option value="Anambra">ANAMBRA</option>
                                <option value="Bauchi">BAUCHI</option>
                                <option value="Bayelsa">BAYELSA</option>
                                <option value="Benue">BENUE</option>
                                <option value="Borno">BORNO</option>
                                <option value="Cross River">CROSS RIVER</option>
                                <option value="Delta">DELTA</option>
                                <option value="Ebonyi">EBONYI</option>
                                <option value="Edo">EDO</option>
                                <option value="Ekiti">EKITI</option>
                                <option value="Enugu">ENUGU</option>
                                <option value="Gombe">GOMBE</option>
                                <option value="Imo">IMO</option>
                                <option value="Jigawa">JIGAWA</option>
                                <option value="Kaduna">KADUNA</option>
                                <option value="Kano">KANO</option>
                                <option value="Katsina">KATSINA</option>
                                <option value="Kebbi">KEBBI</option>
                                <option value="Kogi">KOGI</option>
                                <option value="Kwara">KWARA</option>
                                <option value="Lagos">LAGOS</option>
                                <option value="Nassarawa">NASSARAWA</option>
                                <option value="Niger">NIGER</option>
                                <option value="Ogun">OGUN</option>
                                <option value="Ondo">ONDO</option>
                                <option value="Osun">OSUN</option>
                                <option value="Oyo">OYO</option>
                                <option value="Plateau">PLATEAU</option>
                                <option value="Rivers">RIVERS</option>
                                <option value="Sokoto">SOKOTO</option>
                                <option value="Taraba">TARABA</option>
                                <option value="Yobe">YOBE</option>
                                <option value="Zamfara">ZAMFARA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <span>Town</span>
                            <input type="text" name="town" class="form-control" id="Model-Town" placeholder="Town/City">
                        </div>
                        <div class="form-group col-md-8 username-form">
                            <span>Bio</span>
                            <textarea name="bio" id="Model-Bio" placeholder="Bio" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-8 username-form">
                            <span>Address</span>
                            <textarea name="address" id="Model-Address" placeholder="Address" class="form-control"></textarea>
                        </div>
                    </div>
                    <header class="panel-heading">
                        Model Details
                    </header>
                    <div class="row">
                        <div class="form-group col-md-4" id="femaletype" style="display: none">
                            <span>Female Model Type (Multiple)</span>
                            <select name="modeltype[]" id="female-model" class="form-control selectpicker" multiple title="Choose">
                                <option value="Runway/Catwalk">Runway/Catwalk Model</option>
                                <option value="Fashion (Editorial)">Fashion (Editorial) Model</option>
                                <option value="Commercial">Commercial Model</option>
                                <option value="Plus Size">Plus Size Model</option>
                                <option value="Petite">Petite Model</option>
                                <option value="Child">Child Model</option>
                                <option value="Swimsuit/Lingerie">Swimsuit/Lingerie Model</option>
                                <option value="Glamour">Glamour Model</option>
                                <option value="Fitness">Fitness Model</option>
                                <option value="Fit">Fit Model</option>
                                <option value="Parts">Parts Model</option>
                                <option value="Promotional">Promotional Model</option>
                                <option value="Mature">Mature</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4" id="maletype" style="display: none">
                            <span>Male Model Type (Multiple)</span>
                            <select name="modeltype[]" id="male-model" class="form-control selectpicker" multiple title="Choose">
                                <option value="Runway/Catwalk">Runway/Catwalk Model</option>
                                <option value="Fashion (Editorial)">Fashion (Editorial) Model</option>
                                <option value="Commercial">Commercial Model</option>
                                <option value="Underwear/Swimsuit">Underwear/Swimsuit Model</option>
                                <option value="Fitness">Fitness Model</option>
                                <option value="Fit">Fit Model</option>
                                <option value="Parts">Parts Model</option>
                                <option value="Promotional">Promotional Model</option>
                                <option value="Mature">Mature</option>
                                <option value="Child">Child Model</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <span>Languages</span>
                            <input type="text" name="languages" class="form-control" data-role="tagsinput" id="Model-Languages" placeholder="Examples: English, French.">
                        </div>
                        <div class="form-group col-md-4">
                            <span>Chest</span>
                            <input type="number" name="chest" class="form-control" id="chest" placeholder="Chest">
                        </div>
                        <div class="form-group col-md-4">
                            <span>Height</span>
                            <input type="number" name="height" class="form-control" id="height" placeholder="Height">
                        </div>
                        <div class="form-group col-md-4">
                            <span>Waist</span>
                            <input type="number" name="waist" class="form-control" id="waist" placeholder="Waist">
                        </div>
                        <div class="form-group col-md-4">
                            <span>Shoe Size</span>
                            <input type="number" name="shoe" class="form-control" id="shoe" placeholder="Shoe Size">
                        </div>
                        <div class="form-group col-md-4">
                            <span>Eye Color</span>
                            <input type="text" name="eye" class="form-control" id="eye" placeholder="Eye Color">
                        </div>
                        <div class="form-group col-md-4">
                            <span>Hair Color</span>
                            <input type="text" name="hair" class="form-control" id="hair" placeholder="Hair Color">
                        </div>
                        <div class="form-group col-md-12 account-btn-section">
                            <button type="submit" class="btn btn-amber-outline">Next <i class="ti ti-arrow-circle-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div> 
    <script type="text/javascript">
        function showDiv(elem){
            if(elem.value == 'Model'){
                document.getElementById('model').style.display = "block";
                document.getElementById('member').style.display = "none";
                // Required Fields
                // document.getElementById('phone').setAttribute("required", "required");
                document.getElementById('Model-Phone').setAttribute("required", "required");
                document.getElementById('Model-Address').setAttribute("required", "required");
                document.getElementById('Model-Town').setAttribute("required", "required");
                document.getElementById('Model-Country').setAttribute("required", "required");
                document.getElementById('Model-Bio').setAttribute("required", "required");
                document.getElementById('Model-Gender').setAttribute("required", "required");
                document.getElementById('Model-Dob').setAttribute("required", "required");
                document.getElementById('Model-State').setAttribute("required", "required");
            }
            if(elem.value == 'Member'){
                document.getElementById('model').style.display = "none";
                document.getElementById('member').style.display = "block";
                document.getElementById('Member-Phone').setAttribute("required", "required");
                document.getElementById('Member-Address').setAttribute("required", "required");
                document.getElementById('Member-Town').setAttribute("required", "required");
                document.getElementById('Member-Country').setAttribute("required", "required");
                document.getElementById('Member-Bio').setAttribute("required", "required");
                document.getElementById('Member-Gender').setAttribute("required", "required");
                document.getElementById('Member-Dob').setAttribute("required", "required");
                document.getElementById('Member-State').setAttribute("required", "required");
            }
            if(elem.value == ''){
                document.getElementById('model').style.display = "none";
                document.getElementById('member').style.display = "none";
            }
        }

        function showGender(elem){
            if (elem.value == 'Male') {
                document.getElementById('maletype').style.display = "block";
                document.getElementById('femaletype').style.display = "none";
                document.getElementById('male-model').setAttribute("required", "required");
            }
            if (elem.value == 'Female') {
                document.getElementById('femaletype').style.display = "block";
                document.getElementById('maletype').style.display = "none";
                document.getElementById('female-model').setAttribute("required", "required");
            }
        }
    </script>
@endsection('accounttype')