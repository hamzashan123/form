<fieldset id="fieldsetseven">
@if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('consultant'))
                    <a id="pdfworkexpintra" class="btn btn-primary" style="text-align:center;color:white; margin-bottom:20px;">Generate Pdf</a>
                    @endif
    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 7:</h2>

        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">- WORK EXPERIENCE – FOR INTRA COMPANY VISAS:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 7 - 14</h2>
            </div>
        </div>

        <table>
            <tbody>

                <tr>
                    <td>Are you currently employed? </td>
                    <td>
                        <select name="workexpintracompany_current_employed" id="workexpintracompany_current_employed" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexpintracompany_current_employed)))
                            <option value="{{$data->workexpintracompany_current_employed}}" selected>{{$data->workexpintracompany_current_employed}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If you are employed, are you currently working
                        for the overseas branch of the Australia or New
                        Zealandn company?
                    </td>
                    <td>
                        <select name="workexpintracompany_current_working" id="workexpintracompany_current_working" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexpintracompany_current_working)))
                            <option value="{{$data->workexpintracompany_current_working}}" selected>{{$data->workexpintracompany_current_working}}</option>
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
                    <td>
                        <input type="text" name="workexpintracompany_current_recent_occupation" id="workexpintracompany_current_recent_occupation" @if(isset($data->workexpintracompany_current_recent_occupation)) value="{{$data->workexpintracompany_current_recent_occupation}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Your Position
                    </td>
                    <td> <input type="text" name="workexpintracompany_your_position" id="workexpintracompany_your_position" @if(isset($data->workexpintracompany_your_position)) value="{{$data->workexpintracompany_your_position}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Position Type
                    </td>
                    <td>
                        <select name="workexpintracompany_your_position_type" id="workexpintracompany_your_position_type" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexpintracompany_your_position_type)))
                            <option value="{{$data->workexpintracompany_your_position_type}}" selected>{{$data->workexpintracompany_your_position_type}}</option>
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
                    <td> <input type="text" name="workexpintracompany_employer_name" id="workexpintracompany_employer_name" @if(isset($data->workexpintracompany_employer_name)) value="{{$data->workexpintracompany_employer_name}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Country where the business is located

                    </td>
                    <td> 
                    <select id="workexpintracompany_business_country" name="workexpintracompany_business_country" class="form-control">
                            <option value="">Select Country</option>
                            @if(!empty(isset($data->workexpintracompany_business_country)))
                            <option value="{{$data->workexpintracompany_business_country}}" selected>{{$data->workexpintracompany_business_country}}</option>
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
                    <td> <input type="date" name="workexpintracompany_date_work_started" id="workexpintracompany_date_work_started" @if(isset($data->workexpintracompany_date_work_started)) value="{{$data->workexpintracompany_date_work_started}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Date work ended (if still working please leave
                        blank)

                    </td>
                    <td> <input type="date" name="workexpintracompany_date_work_ended" id="workexpintracompany_date_work_ended" @if(isset($data->workexpintracompany_date_work_ended)) value="{{$data->workexpintracompany_date_work_ended}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Description of duties (please indicate 5 main
                        duties)

                    </td>
                    <td> <input type="text" name="workexpintracompany_description_duties" id="workexpintracompany_description_duties" @if(isset($data->workexpintracompany_description_duties)) value="{{$data->workexpintracompany_description_duties}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Please confirm that this work experience is
                        related to the nominated position

                    </td>
                    <td> <input type="text" name="workexpintracompany_nominated_position" id="workexpintracompany_nominated_position" @if(isset($data->workexpintracompany_nominated_position)) value="{{$data->workexpintracompany_nominated_position}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Was this work performed in Australia or New
                        Zealand?
                    </td>
                    <td>
                        <select name="workexpintracompany_performed_in_aus_nz" id="workexpintracompany_performed_in_aus_nz" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexpintracompany_performed_in_aus_nz)))
                            <option value="{{$data->workexpintracompany_performed_in_aus_nz}}" selected>{{$data->workexpintracompany_performed_in_aus_nz}}</option>
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
                    <td> <input type="text" name="workexpintracompany_visa_employer" id="workexpintracompany_visa_employer" @if(isset($data->workexpintracompany_visa_employer)) value="{{$data->workexpintracompany_visa_employer}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Did you receive a payslip for this work or an
                        invoice?
                    </td>
                    <td>
                        <select name="workexpintracompany_payslips_for_this_week" id="workexpintracompany_payslips_for_this_week" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexpintracompany_payslips_for_this_week)))
                            <option value="{{$data->workexpintracompany_payslips_for_this_week}}" selected>{{$data->workexpintracompany_payslips_for_this_week}}</option>
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
                        <select name="workexpintracompany_contact_details_work_period" id="workexpintracompany_contact_details_work_period" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexpintracompany_contact_details_work_period)))
                            <option value="{{$data->workexpintracompany_contact_details_work_period}}" selected>{{$data->workexpintracompany_contact_details_work_period}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, please indicate
                    </td>
                    <td> <input type="text" name="workexpintracompany_contact_details_work_period_indicate" id="workexpintracompany_contact_details_work_period_indicate" @if(isset($data->workexpintracompany_contact_details_work_period_indicate)) value="{{$data->workexpintracompany_contact_details_work_period_indicate}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Name & Surname
                    </td>
                    <td> <input type="text" name="workexpintracompany_contact_details_work_period_name" id="workexpintracompany_contact_details_work_period_name" @if(isset($data->workexpintracompany_contact_details_work_period_name)) value="{{$data->workexpintracompany_contact_details_work_period_name}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Position
                    </td>
                    <td> <input type="text" name="workexpintracompany_contact_details_work_period_position" id="workexpintracompany_contact_details_work_period_position" @if(isset($data->workexpintracompany_contact_details_work_period_position)) value="{{$data->workexpintracompany_contact_details_work_period_position}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Email
                    </td>
                    <td> <input type="email" name="workexpintracompany_contact_details_work_period_email" id="workexpintracompany_contact_details_work_period_email" @if(isset($data->workexpintracompany_contact_details_work_period_email)) value="{{$data->workexpintracompany_contact_details_work_period_email}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Phone contact
                    </td>
                    <td> <input type="tel" name="workexpintracompany_contact_details_work_period_phone" id="workexpintracompany_contact_details_work_period_phone" @if(isset($data->workexpintracompany_contact_details_work_period_phone)) value="{{$data->workexpintracompany_contact_details_work_period_phone}}" @endif/> </td>

                </tr>


            </tbody>
        </table>


        <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE – DOCS TO BE UPLOADED
        </h2>

        <table>
            <tbody>
                <tr>
                    <td> Employment contract </td>
                    <td> <input type="file" name="workexpintracompany_employment_contract" id="workexpintracompany_employment_contract" >
                    @if (array_key_exists('workexpintracompany_employment_contract', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_employment_contract/'.$docdataForm360['workexpintracompany_employment_contract'])  }}">
                                                               @if(str_contains($docdataForm360['workexpintracompany_employment_contract'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_employment_contract/'.$docdataForm360['workexpintracompany_employment_contract'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif      
                </td>
                </tr>

                <tr>
                    <td> Payslip of the current or most recent year of work performed  </td>
                    <td> <input type="file" name="workexpintracompany_current_recent_payslip" id="workexpintracompany_current_recent_payslip" >
                    @if (array_key_exists('workexpintracompany_current_recent_payslip', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_current_recent_payslip/'.$docdataForm360['workexpintracompany_current_recent_payslip'])  }}">
                                                               @if(str_contains($docdataForm360['workexpintracompany_current_recent_payslip'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_current_recent_payslip/'.$docdataForm360['workexpintracompany_current_recent_payslip'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif      
                </td>
                </tr>

                <tr>
                    <td> A payslip from the previous year of work performed (if applicable) </td>
                    <td> <input type="file" name="workexpintracompany_income_tax_return" id="workexpintracompany_income_tax_return" >
                    @if (array_key_exists('workexpintracompany_income_tax_return', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_income_tax_return/'.$docdataForm360['workexpintracompany_income_tax_return'])  }}">
                                                               @if(str_contains($docdataForm360['workexpintracompany_income_tax_return'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_income_tax_return/'.$docdataForm360['workexpintracompany_income_tax_return'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif      
                </td>
                </tr>

                <tr>
                    <td> Income tax return or CUD document for the most recent year of work performed
                    </td>
                    <td> <input type="file" name="workexpintracompany_social_security" id="workexpintracompany_social_security" >
                    @if (array_key_exists('workexpintracompany_social_security', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_social_security/'.$docdataForm360['workexpintracompany_social_security'])  }}">
                                                               @if(str_contains($docdataForm360['workexpintracompany_social_security'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_social_security/'.$docdataForm360['workexpintracompany_social_security'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif 
                    </td>
                </tr>
                <tr>
                    <td> INPS Chart – Estratto contributivo
                    </td>
                    <td> <input type="file" name="workexpintracompany_contributivo" id="workexpintracompany_contributivo" >
                    @if (array_key_exists('workexpintracompany_contributivo', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_contributivo/'.$docdataForm360['workexpintracompany_contributivo'])  }}">
                                                               @if(str_contains($docdataForm360['workexpintracompany_contributivo'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_contributivo/'.$docdataForm360['workexpintracompany_contributivo'])  }}"  />
                                                               @endif
                                                               </a>
                                                                                                    
                                                                                                      
                                                           @endif 
                    </td>
                </tr>
            </tbody>
        </table>

        <h2 class="fs-title" style="margin-top: 10px;"> WORK TO BE PERFORMED FOR THE SHORT-TERM WORK VISA OR PANDEMIC VISA IN AUSTRALIA OR NEW ZEALAND
        </h2>

        <table>
            <tbody>

                <tr>
                    <td>Name of company in Australia or New Zealand
                    </td>
                    <td> <input type="text" name="workexpintracompany_aus_nz_name_of_company" id="workexpintracompany_aus_nz_name_of_company" @if(isset($data->workexpintracompany_aus_nz_name_of_company)) value="{{$data->workexpintracompany_aus_nz_name_of_company}}" @endif /> </td>

                </tr>


                <tr>
                    <td>Registration number of the company in Australia
                        or New Zealand (ABN and CAN number)

                    </td>
                    <td> <input type="text" name="workexpintracompany_aus_nz_reg_number" id="workexpintracompany_aus_nz_reg_number" @if(isset($data->workexpintracompany_aus_nz_reg_number)) value="{{$data->workexpintracompany_aus_nz_reg_number}}" @endif /> </td>

                </tr>


                <tr>
                    <td>Address of the company in Australia or New
                        Zealand

                    </td>
                    <td> <input type="text" name="workexpintracompany_aus_nz_address" id="workexpintracompany_aus_nz_addresss" @if(isset($data->workexpintracompany_aus_nz_addresss)) value="{{$data->workexpintracompany_aus_nz_addresss}}" @endif /> </td>

                </tr>

                <tr>
                    <td>Contact number in Australia or New Zealand


                    </td>
                    <td> <input type="tel" name="workexpintracompany_aus_nz_contact" id="workexpintracompany_aus_nz_contact" @if(isset($data->workexpintracompany_aus_nz_contact)) value="{{$data->workexpintracompany_aus_nz_contact}}" @endif /> </td>

                </tr>

                <tr>
                    <td>Contact person in Australia or New Zealand
                        (name and surname) </td>
                    <td> <input type="text" name="workexpintracompany_aus_nz_name_surname" id="workexpintracompany_aus_nz_name_surname" @if(isset($data->workexpintracompany_aus_nz_name_surname)) value="{{$data->workexpintracompany_aus_nz_name_surname}}" @endif /> </td>

                </tr>

                <tr>
                    <td>Role of the contact person in Australia or New
                        Zealand </td>
                    <td> <input type="text" name="workexpintracompany_aus_nz_role" id="workexpintracompany_aus_nz_role" @if(isset($data->workexpintracompany_aus_nz_role)) value="{{$data->workexpintracompany_aus_nz_role}}" @endif/> </td>

                </tr>


                <tr>
                    <td>Company sector </td>
                    <td> <input type="text" name="workexpintracompany_aus_nz_sector" id="workexpintracompany_aus_nz_sector" @if(isset($data->workexpintracompany_aus_nz_sector)) value="{{$data->workexpintracompany_aus_nz_sector}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Position that you will carry out in Australia or
                        New Zealand </td>
                    <td> <input type="text" name="workexpintracompany_aus_nz_position" id="workexpintracompany_aus_nz_position" @if(isset($data->workexpintracompany_aus_nz_position)) value="{{$data->workexpintracompany_aus_nz_position}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Main responsibilities and duties to be carried
                        out in Australia or New Zealand </td>
                    <td> <input type="text" name="workexpintracompany_aus_nz_responsibilities" id="workexpintracompany_aus_nz_responsibilities" @if(isset($data->workexpintracompany_aus_nz_responsibilities)) value="{{$data->workexpintracompany_aus_nz_responsibilities}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Description of the project you will be working during the time
                         in Australia or New Zealand (This question is Not for the Pandemic visa) </td>
                    <td> <input type="text" name="workexpintracompany_aus_nz_description" id="workexpintracompany_aus_nz_description" @if(isset($data->workexpintracompany_aus_nz_description)) value="{{$data->workexpintracompany_aus_nz_description}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Date you are planning to enter Australia or New
                        Zealand </td>
                    <td> <input type="date" name="workexpintracompany_aus_nz_planing_date" id="workexpintracompany_aus_nz_planing_date" @if(isset($data->workexpintracompany_aus_nz_planing_date)) value="{{$data->workexpintracompany_aus_nz_planing_date}}" @endif/> </td>

                </tr>

                <tr>
                    <td>Date you are planning to leave Australia or New
                        Zealand (maximum 6 months stay) </td>
                    <td> <input type="date" name="workexpintracompany_aus_nz_planing_date_max_6_month" id="workexpintracompany_aus_nz_planing_date_max_6_month" @if(isset($data->workexpintracompany_aus_nz_planing_date_max_6_month)) value="{{$data->workexpintracompany_aus_nz_planing_date_max_6_month}}" @endif/> </td>

                </tr>


                <tr>
                    <td>Will it be necessary to enter Australia or New Zealand more than one time in order to carry out the job?  </td>
                    <td> 
                    <select name="workexpintracompany_aus_nz_necessary" id="workexpintracompany_aus_nz_necessary" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexpintracompany_aus_nz_necessary)))
                            <option value="{{$data->workexpintracompany_aus_nz_necessary}}" selected>{{$data->workexpintracompany_aus_nz_necessary}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>     
                  
                    </td>

                </tr>

                <tr>
                    <td>For the work carried out in Australia or New Zealand, will you be paid by the Australian or New Zealand company, or will you receive payments from the company located overseas? </td>
                    <td> 
                        
                    <select name="workexpintracompany_aus_nz_paidby" id="workexpintracompany_aus_nz_paidby" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->workexpintracompany_aus_nz_paidby)))
                            <option value="{{$data->workexpintracompany_aus_nz_paidby}}" selected>{{$data->workexpintracompany_aus_nz_paidby}}</option>
                            @endif
                            <option value="Australiancompany">Australian company </option>
                            <option value="NZCompany"> NZ Company </option>
                            <option value="Overseascompany "> Overseas company  </option>
                        </select> 
                   </td>

                </tr>



            </tbody>
        </table>


        <h2 class="fs-title" style="margin-top: 10px;">WORK TO BE PERFORMED IN AUSTRALIA OR NEW ZEALAND – DOCS</h2>

        <table>
            <tbody>
                <tr>
                    <td> Invitation letter from the Australia or NewZealand company
                    </td>
                    <td> <input type="file" name="workexpintracompany_perform_in_aus_nz" id="workexpintracompany_perform_in_aus_nz" >
                    @if (array_key_exists('workexpintracompany_perform_in_aus_nz', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_perform_in_aus_nz/'.$docdataForm360['workexpintracompany_perform_in_aus_nz'])  }}">
                                                               @if(str_contains($docdataForm360['workexpintracompany_perform_in_aus_nz'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexpintracompany_perform_in_aus_nz/'.$docdataForm360['workexpintracompany_perform_in_aus_nz'])  }}"  />
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