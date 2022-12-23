<fieldset id="fieldsetsix">
@if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('consultant'))
                    <a id="pdfworkhistory" class="btn btn-primary" style="text-align:center;color:white; margin-bottom:20px;">Generate Pdf</a>
                    @endif
    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 6:</h2>

        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">- WORK EXPERIENCE (CURRENT OR MOST RECENT) NOT OLDER THAN 10 YEARS:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 6 - 14</h2>
            </div>
        </div>

        <table>
            <tbody>

                <tr>
                    <td>Are you currently employed? </td>
                    <td>
                        <select name="workexp_current_employed" id="workexp_current_employed" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp_current_employed)))
                            <option value="{{$data->workexp_current_employed}}" selected>{{$data->workexp_current_employed}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If you are employed, are you currently working
                        for your future sponsor?
                    </td>
                    <td>
                        <select name="workexp_current_future_sponsor" id="workexp_current_future_sponsor" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp_current_future_sponsor)))
                            <option value="{{$data->workexp_current_future_sponsor}}" selected>{{$data->workexp_current_future_sponsor}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>What is your current or most recent
                        occupation?
                    </td>
                    <td> <input type="text" name="workexp_current_recent_occupation" id="workexp_current_recent_occupation" @if(isset($data->workexp_current_recent_occupation)) value="{{$data->workexp_current_recent_occupation}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Are you retired? </td>
                    <td>
                        <select name="workexp_retired" id="workexp_retired" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp_retired)))
                            <option value="{{$data->workexp_retired}}" selected>{{$data->workexp_retired}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If retired, when did you retire? </td>
                    <td> <input type="date" name="workexp_if_retired" id="workexp_if_retired" @if(isset($data->workexp_if_retired)) value="{{$data->workexp_if_retired}}" @endif/> </td>
                </tr>

                <tr>
                    <td>What was your last occupation before
                        retiring
                    </td>
                    <td> <input type="text" name="workexp_last_occupation" id="workexp_last_occupation" @if(isset($data->workexp_last_occupation)) value="{{$data->workexp_last_occupation}}" @endif/> </td>
                </tr>


            </tbody>
        </table>


        <!-- word experience infos start -->

        <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.1 – INFO
        </h2>
        <p style="color:red">FOR EACH WORKING PERIOD PLEASE INDICATE THE FOLLOWING. PLEASE REFER ONLY TO WORK THAT IS RELEVANT
            TO THE OCCUPATION YOU WILL BE PERFORMING ON YOUR VISA. </p>

        <table>
            <tbody>
                <tr>
                    <td> Your Position
                    </td>
                    <td> <input type="text" name="workexp1_your_position" id="workexp1_your_position" @if(isset($data->workexp1_your_position)) value="{{$data->workexp1_your_position}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Position Type
                    </td>
                    <td>
                        <select name="workexp1_your_position_type" id="workexp1_your_position_type" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp1_your_position_type)))
                            <option value="{{$data->workexp1_your_position_type}}" selected>{{$data->workexp1_your_position_type}}</option>
                            @endif
                            <option value="Full Time"> Full Time </option>
                            <option value="Part Time"> Part Time </option>
                            <option value="Other"> Other </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>Employer/Name of the business you work for
                    </td>
                    <td> <input type="text" name="workexp1_employer_name" id="workexp1_employer_name" @if(isset($data->workexp1_employer_name)) value="{{$data->workexp1_employer_name}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Country where the business is located

                    </td>
                    <td>
                    <select id="workexp1_business_country" name="workexp1_business_country" class="form-control">
                            <option value="">Select Country</option>
                            @if(!empty(isset($data->workexp1_business_country)))
                            <option value="{{$data->workexp1_business_country}}" selected>{{$data->workexp1_business_country}}</option>
                            @endif
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Aland Islands</option>
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
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                            </option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean
                                Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic
                            </option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                            </option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The
                                Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
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
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands
                                (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern
                                Territories</option>
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
                            <option value="Heard Island and Mcdonald Islands">Heard Island and
                                Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                            </option>
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
                            <option value="Korea, Democratic People's Republic of">Korea,
                                Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's
                                Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                            </option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">
                                Macedonia, The Former Yugoslav Republic of</option>
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
                            <option value="Micronesia, Federated States of">Micronesia,
                                Federated States of</option>
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
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands
                            </option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian
                                Territory, Occupied</option>
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
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                            </option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and
                                The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
                            <option value="South Georgia and The South Sandwich Islands">South
                                Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                            </option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United
                                Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands
                            </option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States
                                Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British
                            </option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select> 
                      </td>
                </tr>

                <tr>
                    <td>Date work started

                    </td>
                    <td> <input type="date" name="workexp1_date_work_started" id="workexp1_date_work_started" @if(isset($data->workexp1_date_work_started)) value="{{$data->workexp1_date_work_started}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Date work ended (if still working please leave
                        blank)

                    </td>
                    <td> <input type="date" name="workexp1_date_work_ended" id="workexp1_date_work_ended" @if(isset($data->workexp1_date_work_ended)) value="{{$data->workexp1_date_work_ended}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Description of duties (please indicate 5 main
                        duties)

                    </td>
                    <td> <input type="text" name="workexp1_description_duties" id="workexp1_description_duties" @if(isset($data->workexp1_description_duties)) value="{{$data->workexp1_description_duties}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Please confirm that this work experience is
                        related to the nominated position

                    </td>
                    <td>
                    <select name="workexp1_nominated_position" id="workexp1_nominated_position" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->workexp1_nominated_position)))
                            <option value="{{$data->workexp1_nominated_position}}" selected>{{$data->workexp1_nominated_position}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>    
                   </td>
                </tr>

                <tr>
                    <td>Was this work performed in Australia or New
                        Zealand?
                    </td>
                    <td>
                        <select name="workexp1_performed_in_aus_nz" id="workexp1_performed_in_aus_nz" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp1_performed_in_aus_nz)))
                            <option value="{{$data->workexp1_performed_in_aus_nz}}" selected>{{$data->workexp1_performed_in_aus_nz}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, please specify with what visa you have
                        worked with this employer

                    </td>
                    <td> <input type="text" name="workexp1_visa_employer" id="workexp1_visa_employer" @if(isset($data->workexp1_visa_employer)) value="{{$data->workexp1_visa_employer}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Did you receive a payslip for this work or an
                        invoice?
                    </td>
                    <td>
                        <select name="workexp1_payslips_for_this_week" id="workexp1_payslips_for_this_week" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp1_payslips_for_this_week)))
                            <option value="{{$data->workexp1_payslips_for_this_week}}" selected>{{$data->workexp1_payslips_for_this_week}}</option>
                            @endif
                            <option value="Payslip"> Payslip </option>
                            <option value="Invoice"> Invoice </option>
                            <option value="Other"> Other </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Can you provide the contact details of a person
                        for this work period
                    </td>
                    <td>
                        <select name="workexp1_contact_details_work_period" id="workexp1_contact_details_work_period" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp1_contact_details_work_period)))
                            <option value="{{$data->workexp1_contact_details_work_period}}" selected>{{$data->workexp1_contact_details_work_period}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, please indicate
                    </td>
                    <td> <input type="text" name="workexp1_contact_details_work_period_indicate" id="workexp1_contact_details_work_period_indicate" @if(isset($data->workexp1_contact_details_work_period_indicate)) value="{{$data->workexp1_contact_details_work_period_indicate}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Name & Surname
                    </td>
                    <td> <input type="text" name="workexp1_contact_details_work_period_name" id="workexp1_contact_details_work_period_name" @if(isset($data->workexp1_contact_details_work_period_name)) value="{{$data->workexp1_contact_details_work_period_name}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Position
                    </td>
                    <td> <input type="text" name="workexp1_contact_details_work_period_position" id="workexp1_contact_details_work_period_position" @if(isset($data->workexp1_contact_details_work_period_position)) value="{{$data->workexp1_contact_details_work_period_position}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Email
                    </td>
                    <td> <input type="email" name="workexp1_contact_details_work_period_email" id="workexp1_contact_details_work_period_email" @if(isset($data->workexp1_contact_details_work_period_email)) value="{{$data->workexp1_contact_details_work_period_email}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Phone contact
                    </td>
                    <td> <input type="tel" name="workexp1_contact_details_work_period_phone" id="workexp1_contact_details_work_period_phone" @if(isset($data->workexp1_contact_details_work_period_phone)) value="{{$data->workexp1_contact_details_work_period_phone}}" @endif/> </td>

                </tr>

            </tbody>
        </table>

        <!-- word experience infos end -->


        <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.1 – DOCS TO BE UPLOADED
        </h2>
        <h2 class="fs-title" style="margin-top: 10px;"> EMPLOYMENT CONTRACT LETTER
        </h2>


        <table>
            <tbody>
                <tr>
                    <td> Employment contract or appointment letter  </td>
                    <td> <input type="file" name="workexp1_employment_contract" id="workexp1_employment_contract">
                
                    @if (array_key_exists('workexp1_employment_contract', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_employment_contract/'.$docdataForm360['workexp1_employment_contract'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_employment_contract'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_employment_contract/'.$docdataForm360['workexp1_employment_contract'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                
                </td>
                </tr>
                <tr>
                    <td> Reference letter (only if you have one already)  </td>
                    <td> <input type="file" name="workexp1_employment_contract" id="workexp1_employment_contract">
                
                    @if (array_key_exists('workexp1_employment_contract', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_employment_contract/'.$docdataForm360['workexp1_employment_contract'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_employment_contract'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_employment_contract/'.$docdataForm360['workexp1_employment_contract'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                
                </td>
                </tr>
            </tbody>
        </table>

        <h2 class="fs-title" style="margin-top: 10px;"> Payslips</h2>

        <table>
            <tbody>
                <tr>
                    <td>Payslip for the current or most recent year of work 
                    </td>
                    <td> <input type="file" name="workexp1_current_year_of_experience" id="workexp1_current_year_of_experience">
                
                    @if (array_key_exists('workexp1_current_year_of_experience', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_current_year_of_experience/'.$docdataForm360['workexp1_current_year_of_experience'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_current_year_of_experience'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_current_year_of_experience/'.$docdataForm360['workexp1_current_year_of_experience'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> Payslips for the 2nd year of work (if applicable)
                    </td>
                    <td> <input type="file" name="workexp1_previous_year_of_experience1" id="workexp1_previous_year_of_experience1">
                
                    @if (array_key_exists('workexp1_previous_year_of_experience1', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience1/'.$docdataForm360['workexp1_previous_year_of_experience1'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_previous_year_of_experience1'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience1/'.$docdataForm360['workexp1_previous_year_of_experience1'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> Payslips for the 3rd year of work (if applicable)
                    </td>
                    <td> <input type="file" name="workexp1_previous_year_of_experience2" id="workexp1_previous_year_of_experience2">
                
                    @if (array_key_exists('workexp1_previous_year_of_experience2', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience2/'.$docdataForm360['workexp1_previous_year_of_experience2'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_previous_year_of_experience2'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience2/'.$docdataForm360['workexp1_previous_year_of_experience2'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> Payslips for the 4th year of work (if applicable)
                    </td>
                    <td> <input type="file" name="workexp1_previous_year_of_experience3" id="workexp1_previous_year_of_experience3">
                
                    @if (array_key_exists('workexp1_previous_year_of_experience3', $docdataForm360))
                                                               
                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience3/'.$docdataForm360['workexp1_previous_year_of_experience3'])  }}">
                        @if(str_contains($docdataForm360['workexp1_previous_year_of_experience3'] , '.pdf'))
                         <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                        @else
                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience3/'.$docdataForm360['workexp1_previous_year_of_experience3'])  }}"  />
                        @endif
                        </a>
                                                             
                                                               
                    @endif   
                </td>
                </tr>


            </tbody>
        </table>

        <h2 class="fs-title" style="margin-top: 10px;"> INCOME TAX RETURN (In Italy CUD) FOR EACH YEAR OF WORK PERFORMED. </h2>
        <p style="color:red;">For Australia: The Income tax return can be found by logging onto the MyGov website site, ATO section. Click on the linked services. One on the ATO section, on the top left side you can click on Tax – Lodgements. Once on the Tax page, you can click on History to view all the Income tax returns you have lodged. You will need to send us the document that is generated from the link called Notice of Assessment
        </p>
        <p style="color:red;">For Italy: This document is called CUD </p>
        <table>
            <tbody>
                <tr>
                    <td>Income tax return Notice of Assessment or CUD for the current or most recent year of work performed 
                    </td>
                    <td> <input type="file" name="workexp1_income_tax_return1" id="workexp1_income_tax_return1">
                    @if (array_key_exists('workexp1_income_tax_return1', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return1/'.$docdataForm360['workexp1_income_tax_return1'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_income_tax_return1'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return1/'.$docdataForm360['workexp1_income_tax_return1'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif  
                    </td>
                </tr>

                <tr>
                    <td>Income tax return Notice of Assessment or CUD for the 2nd year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp1_income_tax_return2" id="workexp1_income_tax_return2">
                    @if (array_key_exists('workexp1_income_tax_return2', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return2/'.$docdataForm360['workexp1_income_tax_return2'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_income_tax_return2'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return2/'.$docdataForm360['workexp1_income_tax_return2'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif  
                </td>
                </tr>

                <tr>
                    <td>Income tax return Notice of Assessment or CUD for the 3rd year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp1_income_tax_return2_1" id="workexp1_income_tax_return2_1">
                    @if (array_key_exists('workexp1_income_tax_return2_1', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return2_1/'.$docdataForm360['workexp1_income_tax_return2_1'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_income_tax_return2_1'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return2_1/'.$docdataForm360['workexp1_income_tax_return2_1'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif  
                    </td>
                </tr>


                <tr>
                    <td>Income tax return Notice of Assessment or CUD for the 4th year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp1_relevant_doc" id="workexp1_relevant_doc">
                    @if (array_key_exists('workexp1_relevant_doc', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_relevant_doc/'.$docdataForm360['workexp1_relevant_doc'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_relevant_doc'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_relevant_doc/'.$docdataForm360['workexp1_relevant_doc'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif      
                </td>
                </tr>





            </tbody>
        </table>


        <h2 class="fs-title" style="margin-top: 10px;"> PAYG </h2>
       
        <table>
            <tbody>
                <tr>
                    <td>PayG for the current or most recent year of work performed  
                    </td>
                    <td> <input type="file" name="workexp1_payg_one" id="workexp1_payg_one">
                
                    @if (array_key_exists('workexp1_payg_one', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_one/'.$docdataForm360['workexp1_payg_one'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_payg_one'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_one/'.$docdataForm360['workexp1_payg_one'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> PayG for the 2nd year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp1_payg_two" id="workexp1_payg_two">
                
                    @if (array_key_exists('workexp1_payg_two', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_two/'.$docdataForm360['workexp1_payg_two'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_payg_two'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_two/'.$docdataForm360['workexp1_payg_two'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> PayG for the 3rd year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp1_payg_three" id="workexp1_payg_three">
                
                    @if (array_key_exists('workexp1_payg_three', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_three/'.$docdataForm360['workexp1_payg_three'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_payg_three'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_three/'.$docdataForm360['workexp1_payg_three'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> PayG for the 4th year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp1_payg_four" id="workexp1_payg_four">
                
                    @if (array_key_exists('workexp1_payg_four', $docdataForm360))
                                                               
                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_four/'.$docdataForm360['workexp1_payg_four'])  }}">
                        @if(str_contains($docdataForm360['workexp1_payg_four'] , '.pdf'))
                         <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                        @else
                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_four/'.$docdataForm360['workexp1_payg_four'])  }}"  />
                        @endif
                        </a>
                                                             
                                                               
                    @endif   
                </td>
                </tr>


            </tbody>
        </table>

       

        <h2 class="fs-title" style="margin-top: 10px;"> INPS CHART (Italian employment only) </h2>

        <table>
            <tbody>
                <tr>
                    <td>Tabella estratto contributivo INPS
                    </td>
                    <td> <input type="file" name="workexp1_tabella_estratto" id="workexp1_tabella_estratto">
                    @if (array_key_exists('workexp1_tabella_estratto', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_tabella_estratto/'.$docdataForm360['workexp1_tabella_estratto'])  }}">
                                                               @if(str_contains($docdataForm360['workexp1_tabella_estratto'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_tabella_estratto/'.$docdataForm360['workexp1_tabella_estratto'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif 
                    </td>
                </tr>
            </tbody>
        </table>


        <!-- work exprrience 2 start  -->

        <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.2 – INFO
        </h2>
        <p style="color:red">FOR EACH WORKING PERIOD PLEASE INDICATE THE FOLLOWING. PLEASE REFER ONLY TO WORK THAT IS RELEVANT
            TO THE OCCUPATION YOU WILL BE PERFORMING ON YOUR VISA. </p>
        <table>
            <tbody>
                <tr>
                    <td> Your Position
                    </td>
                    <td> <input type="text" name="workexp2_your_position" id="workexp2_your_position" @if(isset($data->workexp2_your_position)) value="{{$data->workexp2_your_position}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Position Type
                    </td>
                    <td>
                        <select name="workexp2_your_position_type" id="workexp2_your_position_type" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp2_your_position_type)))
                            <option value="{{$data->workexp2_your_position_type}}" selected>{{$data->workexp2_your_position_type}}</option>
                            @endif
                            <option value="Full Time"> Full Time </option>
                            <option value="Part Time"> Part Time </option>
                            <option value="Other"> Other </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>Employer/Name of the business you work for
                    </td>
                    <td> <input type="text" name="workexp2_employer_name" id="workexp2_employer_name" @if(isset($data->workexp2_employer_name)) value="{{$data->workexp2_employer_name}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Country where the business is located

                    </td>
                    <td>
                    <select id="workexp2_business_country" name="workexp2_business_country" class="form-control">
                            <option value="">Select Country</option>
                            @if(!empty(isset($data->workexp2_business_country)))
                            <option value="{{$data->workexp2_business_country}}" selected>{{$data->workexp2_business_country}}</option>
                            @endif
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Aland Islands</option>
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
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                            </option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean
                                Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic
                            </option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                            </option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The
                                Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
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
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands
                                (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern
                                Territories</option>
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
                            <option value="Heard Island and Mcdonald Islands">Heard Island and
                                Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                            </option>
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
                            <option value="Korea, Democratic People's Republic of">Korea,
                                Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's
                                Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                            </option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">
                                Macedonia, The Former Yugoslav Republic of</option>
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
                            <option value="Micronesia, Federated States of">Micronesia,
                                Federated States of</option>
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
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands
                            </option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian
                                Territory, Occupied</option>
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
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                            </option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and
                                The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
                            <option value="South Georgia and The South Sandwich Islands">South
                                Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                            </option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United
                                Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands
                            </option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States
                                Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British
                            </option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select> 
                    </td>
                </tr>

                <tr>
                    <td>Date work started

                    </td>
                    <td> <input type="date" name="workexp2_date_work_started" id="workexp2_date_work_started" @if(isset($data->workexp2_date_work_started)) value="{{$data->workexp2_date_work_started}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Date work ended (if still working please leave
                        blank)

                    </td>
                    <td> <input type="date" name="workexp2_date_work_ended" id="workexp2_date_work_ended" @if(isset($data->workexp2_date_work_ended)) value="{{$data->workexp2_date_work_ended}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Description of duties (please indicate 5 main
                        duties)

                    </td>
                    <td> <input type="text" name="workexp2_description_duties" id="workexp2_description_duties" @if(isset($data->workexp2_description_duties)) value="{{$data->workexp2_description_duties}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Please confirm that this work experience is
                        related to the nominated position

                    </td>
                    <td>
                    <select name="workexp2_nominated_position" id="workexp2_nominated_position" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->workexp2_nominated_position)))
                            <option value="{{$data->workexp2_nominated_position}}" selected>{{$data->workexp2_nominated_position}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>    
                </td>
                </tr>

                <tr>
                    <td>Was this work performed in Australia or New
                        Zealand?
                    </td>
                    <td>
                        <select name="workexp2_performed_in_aus_nz" id="workexp2_performed_in_aus_nz" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp2_performed_in_aus_nz)))
                            <option value="{{$data->workexp2_performed_in_aus_nz}}" selected>{{$data->workexp2_performed_in_aus_nz}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, please specify with what visa you have
                        worked with this employer

                    </td>
                    <td> <input type="text" name="workexp2_visa_employer" id="workexp2_visa_employer" @if(isset($data->workexp2_visa_employer)) value="{{$data->workexp2_visa_employer}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Did you receive a payslip for this work or an
                        invoice?
                    </td>
                    <td>
                        <select name="workexp2_payslips_for_this_week" id="workexp2_payslips_for_this_week" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp2_payslips_for_this_week)))
                            <option value="{{$data->workexp2_payslips_for_this_week}}" selected>{{$data->workexp2_payslips_for_this_week}}</option>
                            @endif
                            <option value="Payslip"> Payslip </option>
                            <option value="Invoice"> Invoice </option>
                            <option value="Other"> Other </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Can you provide the contact details of a person
                        for this work period
                    </td>
                    <td>
                        <select name="workexp2_contact_details_work_period" id="workexp2_contact_details_work_period" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexp2_contact_details_work_period)))
                            <option value="{{$data->workexp2_contact_details_work_period}}" selected>{{$data->workexp2_contact_details_work_period}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, please indicate
                    </td>
                    <td> <input type="text" name="workexp2_contact_details_work_period_indicate" id="workexp2_contact_details_work_period_indicate" @if(isset($data->workexp2_contact_details_work_period_indicate)) value="{{$data->workexp2_contact_details_work_period_indicate}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Name & Surname
                    </td>
                    <td> <input type="text" name="workexp2_contact_details_work_period_name" id="workexp2_contact_details_work_period_name" @if(isset($data->workexp2_contact_details_work_period_name)) value="{{$data->workexp2_contact_details_work_period_name}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Position
                    </td>
                    <td> <input type="text" name="workexp2_contact_details_work_period_position" id="workexp2_contact_details_work_period_position" @if(isset($data->workexp2_contact_details_work_period_position)) value="{{$data->workexp2_contact_details_work_period_position}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Email
                    </td>
                    <td> <input type="email" name="workexp2_contact_details_work_period_email" id="workexp2_contact_details_work_period_email" @if(isset($data->workexp2_contact_details_work_period_email)) value="{{$data->workexp2_contact_details_work_period_email}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Phone contact
                    </td>
                    <td> <input type="tel" name="workexp2_contact_details_work_period_phone" id="workexp2_contact_details_work_period_phone" @if(isset($data->workexp2_contact_details_work_period_phone)) value="{{$data->workexp2_contact_details_work_period_phone}}" @endif/> </td>

                </tr>

            </tbody>
        </table>

        
        <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.2 – DOCS TO BE UPLOADED
        </h2>
        <h2 class="fs-title" style="margin-top: 10px;"> EMPLOYMENT CONTRACT LETTER
        </h2>


        <table>
            <tbody>
                <tr>
                    <td> Employment contract or appointment letter  </td>
                    <td> <input type="file" name="workexp2_employment_contract" id="workexp2_employment_contract">
                
                    @if (array_key_exists('workexp2_employment_contract', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_employment_contract/'.$docdataForm360['workexp2_employment_contract'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_employment_contract'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_employment_contract/'.$docdataForm360['workexp2_employment_contract'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                
                </td>
                </tr>
                <tr>
                    <td> Reference letter (only if you have one already)  </td>
                    <td> <input type="file" name="workexp2_employment_contract" id="workexp2_employment_contract">
                
                    @if (array_key_exists('workexp2_employment_contract', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_employment_contract/'.$docdataForm360['workexp2_employment_contract'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_employment_contract'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_employment_contract/'.$docdataForm360['workexp2_employment_contract'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                
                </td>
                </tr>
            </tbody>
        </table>

        <h2 class="fs-title" style="margin-top: 10px;"> Payslips</h2>

        <table>
            <tbody>
                <tr>
                    <td>Payslip for the current or most recent year of work 
                    </td>
                    <td> <input type="file" name="workexp2_current_year_of_experience" id="workexp2_current_year_of_experience">
                
                    @if (array_key_exists('workexp2_current_year_of_experience', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_current_year_of_experience/'.$docdataForm360['workexp2_current_year_of_experience'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_current_year_of_experience'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_current_year_of_experience/'.$docdataForm360['workexp2_current_year_of_experience'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> Payslips for the 2nd year of work (if applicable)
                    </td>
                    <td> <input type="file" name="workexp2_previous_year_of_experience1" id="workexp2_previous_year_of_experience1">
                
                    @if (array_key_exists('workexp2_previous_year_of_experience1', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience1/'.$docdataForm360['workexp2_previous_year_of_experience1'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_previous_year_of_experience1'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience1/'.$docdataForm360['workexp2_previous_year_of_experience1'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> Payslips for the 3rd year of work (if applicable)
                    </td>
                    <td> <input type="file" name="workexp2_previous_year_of_experience2" id="workexp2_previous_year_of_experience2">
                
                    @if (array_key_exists('workexp2_previous_year_of_experience2', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience2/'.$docdataForm360['workexp2_previous_year_of_experience2'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_previous_year_of_experience2'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience2/'.$docdataForm360['workexp2_previous_year_of_experience2'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> Payslips for the 4th year of work (if applicable)
                    </td>
                    <td> <input type="file" name="workexp2_previous_year_of_experience3" id="workexp2_previous_year_of_experience3">
                
                    @if (array_key_exists('workexp2_previous_year_of_experience3', $docdataForm360))
                                                               
                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience3/'.$docdataForm360['workexp2_previous_year_of_experience3'])  }}">
                        @if(str_contains($docdataForm360['workexp2_previous_year_of_experience3'] , '.pdf'))
                         <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                        @else
                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience3/'.$docdataForm360['workexp2_previous_year_of_experience3'])  }}"  />
                        @endif
                        </a>
                                                             
                                                               
                    @endif   
                </td>
                </tr>


            </tbody>
        </table>

        <h2 class="fs-title" style="margin-top: 10px;"> INCOME TAX RETURN (In Italy CUD) FOR EACH YEAR OF WORK PERFORMED. </h2>
        <p style="color:red;">For Australia: The Income tax return can be found by logging onto the MyGov website site, ATO section. Click on the linked services. One on the ATO section, on the top left side you can click on Tax – Lodgements. Once on the Tax page, you can click on History to view all the Income tax returns you have lodged. You will need to send us the document that is generated from the link called Notice of Assessment
        </p>
        <p style="color:red;">For Italy: This document is called CUD </p>
        <table>
            <tbody>
                <tr>
                    <td>Income tax return Notice of Assessment or CUD for the current or most recent year of work performed 
                    </td>
                    <td> <input type="file" name="workexp2_income_tax_return1" id="workexp2_income_tax_return1">
                    @if (array_key_exists('workexp2_income_tax_return1', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return1/'.$docdataForm360['workexp2_income_tax_return1'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_income_tax_return1'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return1/'.$docdataForm360['workexp2_income_tax_return1'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif  
                    </td>
                </tr>

                <tr>
                    <td>Income tax return Notice of Assessment or CUD for the 2nd year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp2_income_tax_return2" id="workexp2_income_tax_return2">
                    @if (array_key_exists('workexp2_income_tax_return2', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return2/'.$docdataForm360['workexp2_income_tax_return2'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_income_tax_return2'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return2/'.$docdataForm360['workexp2_income_tax_return2'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif  
                </td>
                </tr>

                <tr>
                    <td>Income tax return Notice of Assessment or CUD for the 3rd year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp2_income_tax_return2_1" id="workexp2_income_tax_return2_1">
                    @if (array_key_exists('workexp2_income_tax_return2_1', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return2_1/'.$docdataForm360['workexp2_income_tax_return2_1'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_income_tax_return2_1'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return2_1/'.$docdataForm360['workexp2_income_tax_return2_1'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif  
                    </td>
                </tr>


                <tr>
                    <td>Income tax return Notice of Assessment or CUD for the 4th year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp2_relevant_doc" id="workexp2_relevant_doc">
                    @if (array_key_exists('workexp2_relevant_doc', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_relevant_doc/'.$docdataForm360['workexp2_relevant_doc'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_relevant_doc'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_relevant_doc/'.$docdataForm360['workexp2_relevant_doc'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif      
                </td>
                </tr>





            </tbody>
        </table>


        <h2 class="fs-title" style="margin-top: 10px;"> PAYG </h2>
       
        <table>
            <tbody>
                <tr>
                    <td>PayG for the current or most recent year of work performed  
                    </td>
                    <td> <input type="file" name="workexp2_payg_one" id="workexp2_payg_one">
                
                    @if (array_key_exists('workexp2_payg_one', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_one/'.$docdataForm360['workexp2_payg_one'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_payg_one'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_one/'.$docdataForm360['workexp2_payg_one'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> PayG for the 2nd year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp2_payg_two" id="workexp2_payg_two">
                
                    @if (array_key_exists('workexp2_payg_two', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_two/'.$docdataForm360['workexp2_payg_two'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_payg_two'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_two/'.$docdataForm360['workexp2_payg_two'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> PayG for the 3rd year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp2_payg_three" id="workexp2_payg_three">
                
                    @if (array_key_exists('workexp2_payg_three', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_three/'.$docdataForm360['workexp2_payg_three'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_payg_three'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_three/'.$docdataForm360['workexp2_payg_three'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> PayG for the 4th year of work performed (if applicable)
                    </td>
                    <td> <input type="file" name="workexp2_payg_four" id="workexp2_payg_four">
                
                    @if (array_key_exists('workexp2_payg_four', $docdataForm360))
                                                               
                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_four/'.$docdataForm360['workexp2_payg_four'])  }}">
                        @if(str_contains($docdataForm360['workexp2_payg_four'] , '.pdf'))
                         <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                        @else
                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_four/'.$docdataForm360['workexp2_payg_four'])  }}"  />
                        @endif
                        </a>
                                                             
                                                               
                    @endif   
                </td>
                </tr>


            </tbody>
        </table>

       

        <h2 class="fs-title" style="margin-top: 10px;"> INPS CHART (Italian employment only) </h2>

        <table>
            <tbody>
                <tr>
                    <td>Tabella estratto contributivo INPS
                    </td>
                    <td> <input type="file" name="workexp2_tabella_estratto" id="workexp2_tabella_estratto">
                    @if (array_key_exists('workexp2_tabella_estratto', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_tabella_estratto/'.$docdataForm360['workexp2_tabella_estratto'])  }}">
                                                               @if(str_contains($docdataForm360['workexp2_tabella_estratto'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_tabella_estratto/'.$docdataForm360['workexp2_tabella_estratto'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif 
                    </td>
                </tr>
            </tbody>
        </table>


    </div>
    @if(!Auth::user()->hasRole('consultant') && !Auth::user()->hasRole('admin') )
    <input type="button" name="save" class="save action-button" value="Save" />
    @endif
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>