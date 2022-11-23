<fieldset id="fieldsetfour">
@if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('consultant'))
                    <a id="pdfhighleveleducation" class="btn btn-primary" style="text-align:center;color:white; margin-bottom:20px;">Generate Pdf</a>
                    @endif

    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 4:</h2>

        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">HIGHER LEVEL QUALIFICATION (UNIVERISITY / VOCATIONAL QUALIFICATIONS)
                </h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 4 - 14</h2>
            </div>
        </div>

        <p>Indicate all relevant qualifications obtained and that are relevant to the sector for your visa or skills assessment
            application</p>

        <p>Please start with your highest qualification obtained </p>

        <h2 class="fs-title">QUALIFICATIONS 1
        </h2>

        <table>

            <tbody>

                <tr>
                    <td> Name of University/Institute </td>
                    <td> <input type="text" name="higher_level_qualification1_nameofuniversity" id="higher_level_qualification1_nameofuniversity" @if(isset($data->higher_level_qualification1_nameofuniversity)) value="{{$data->higher_level_qualification1_nameofuniversity}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Is this a university or vocational level qualification?
                    </td>
                    <td>
                        <select name="higher_level_vocational_level_qualification1" id="higher_level_vocational_level_qualification1" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->higher_level_vocational_level_qualification1)))
                            <option value="{{$data->higher_level_vocational_level_qualification1}}" selected>{{$data->higher_level_vocational_level_qualification1}}</option>
                            @endif

                            <option value="University Level"> University Level </option>
                            <option value="Vocational/Professional Level"> Vocational/Professional Level </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> Full address of the education provider
                    </td>
                    <td> <input type="text" name="higher_level__qualification1_education_provider" id="higher_level__qualification1_education_provider" @if(isset($data->higher_level__qualification1_education_provider)) value="{{$data->higher_level__qualification1_education_provider}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Name of exact qualification obtained in the official
                        language
                    </td>
                    <td> <input type="text" name="higher_level_qualifciation1_official_languages" id="higher_level_qualifciation1_official_languages" @if(isset($data->higher_level_qualifciation1_official_languages)) value="{{$data->higher_level_qualifciation1_official_languages}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Name of the qualification obtained in English
                    </td>
                    <td> <input type="text" name="higher_level_qualification1_english" id="higher_level_qualification1_english" @if(isset($data->higher_level_qualification1_english)) value="{{$data->higher_level_qualification1_english}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Course duration

                    </td>
                    <td> <input type="text" name="higher_level_qualification1_course_duration" id="higher_level_qualification1_course_duration" @if(isset($data->higher_level_qualification1_course_duration)) value="{{$data->higher_level_qualification1_course_duration}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Date course started

                    </td>
                    <td> <input type="date" name="higher_level_qualification1_course_started" id="higher_level_qualification1_course_started" @if(isset($data->higher_level_qualification1_course_started)) value="{{$data->higher_level_qualification1_course_started}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Date course extension_loaded

                    </td>
                    <td> <input type="date" name="higher_level_qualification1_course_ended" id="higher_level_qualification1_course_ended" @if(isset($data->higher_level_qualification1_course_ended)) value="{{$data->higher_level_qualification1_course_ended}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Was the course studied full-time or part-time


                    </td>
                    <td>
                    <select name="higher_level_qualification1_full_part" id="higher_level_qualification1_full_part" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->higher_level_qualification1_full_part)))
                            <option value="{{$data->higher_level_qualification1_full_part}}" selected>{{$data->higher_level_qualification1_full_part}}</option>
                            @endif
                            <option value="Part Time"> Part Time </option>
                            <option value="Full Time"> Full Time </option>
                        </select>    
                    
                    </td>
                </tr>


                <tr>
                    <td> Was this qualification obtained through course of
                        study or via RPL?


                    </td>
                    <td> 
                    <select name="higher_level_qualification1_courseofstudy" id="higher_level_qualification1_courseofstudy" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->higher_level_qualification1_courseofstudy)))
                            <option value="{{$data->higher_level_qualification1_courseofstudy}}" selected>{{$data->higher_level_qualification1_courseofstudy}}</option>
                            @endif
                            <option value="Course of study"> Course of study </option>
                            <option value="RPL"> RPL </option>
                        </select>     
                    
                    </td>
                </tr>

                <tr>
                    <td> Country where you studied


                    </td>
                    <td> 
                      
                    <select id="higher_level_qualification1_country" name="higher_level_qualification1_country" class="form-control">
                            <option value="">Select Nationality</option>
                            @if(!empty(isset($data->higher_level_qualification1_country)))
                            <option value="{{$data->higher_level_qualification1_country}}" selected>{{$data->higher_level_qualification1_country}}</option>
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
                    <td> Was a thesis or final project required to end the
                        course? If so, specify the title of the thesis/project



                    </td>
                    <td> <input type="text" name="higher_level_qualification1_thesis_project" id="higher_level_qualification1_thesis_project" @if(isset($data->higher_level_qualification1_thesis_project)) value="{{$data->higher_level_qualification1_thesis_project}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Indicate the number of weeks (even if approximate)
                        studied to complete the thesis/project



                    </td>
                    <td> <input type="text" name="higher_level_qualification1_thesis_project_if" id="higher_level_qualification1_thesis_project_if" @if(isset($data->higher_level_qualification1_thesis_project_if)) value="{{$data->higher_level_qualification1_thesis_project_if}}" @endif/>
                    </td>
                </tr>

            </tbody>
        </table>

        <h2 class="fs-title" style="margin-top: 10px;">DOCS FOR HIGHER QUALIFICATION 1
        </h2>
        <p style="color:red">Attachments must be colour scans of the original document and uploaded in PDF format only. Please consolidate all
            multipage files into one PDF document for each attachment type. Maximum PDF file size is 3MB per PDF.
            Unnecessary additional documents will cause delays in processing. </p>

        <table>
            <tbody>
                <tr>
                    <td> Qualification – Diploma/Award Certificate
                    </td>
                    <td> <input type="file" name="higher_level_qualification1_diploma_award" id="higher_level_qualification1_diploma_award">
                    @if (array_key_exists('higher_level_qualification1_diploma_award', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_diploma_award/'.$docdataForm360['higher_level_qualification1_diploma_award'])  }}">
                                                               @if(str_contains($docdataForm360['higher_level_qualification1_diploma_award'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_diploma_award/'.$docdataForm360['higher_level_qualification1_diploma_award'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif
                
                
                </td>
                </tr>

                <tr>
                    <td> List of exams taken

                    </td>
                    <td> <input type="file" name="higher_level_qualification1_listofexams" id="higher_level_qualification1_listofexams">
                
                    @if (array_key_exists('higher_level_qualification1_listofexams', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_listofexams/'.$docdataForm360['higher_level_qualification1_listofexams'])  }}">
                                                               @if(str_contains($docdataForm360['higher_level_qualification1_listofexams'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_listofexams/'.$docdataForm360['higher_level_qualification1_listofexams'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif
                </td>
                </tr>

                <tr>
                    <td> Diploma Supplement


                    </td>
                    <td> <input type="file" name="higher_level_qualification1_diploma_supplement" id="higher_level_qualification1_diploma_supplement" >
                    @if (array_key_exists('higher_level_qualification1_diploma_supplement', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_diploma_supplement/'.$docdataForm360['higher_level_qualification1_diploma_supplement'])  }}">
                                                               @if(str_contains($docdataForm360['higher_level_qualification1_diploma_supplement'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_diploma_supplement/'.$docdataForm360['higher_level_qualification1_diploma_supplement'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif
                
                </td>
                </tr>
            </tbody>
        </table>

        <h2 class="fs-title">QUALIFICATIONS 2
        </h2>

        <table>

            <tbody>

                <tr>
                    <td> Name of University/Institute </td>
                    <td> <input type="text" name="higher_level_qualification2_nameofuniversity" id="higher_level_qualification2_nameofuniversity" @if(isset($data->higher_level_qualification2_nameofuniversity)) value="{{$data->higher_level_qualification2_nameofuniversity}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Is this a university or vocational level qualification?
                    </td>
                    <td>
                        <select name="higher_level_vocational_level_qualification2" id="higher_level_vocational_level_qualification2" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->higher_level_vocational_level_qualification2)))
                            <option value="{{$data->higher_level_vocational_level_qualification2}}" selected>{{$data->higher_level_vocational_level_qualification2}}</option>
                            @endif
                            <option value="University Level"> University Level </option>
                            <option value="Vocational/Professional Level"> Vocational/Professional Level </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> Full address of the education provider
                    </td>
                    <td> <input type="text" name="higher_level__qualification2_education_provider" id="higher_level__qualification2_education_provider" @if(isset($data->higher_level__qualification2_education_provider)) value="{{$data->higher_level__qualification2_education_provider}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Name of exact qualification obtained in the official
                        language
                    </td>
                    <td> <input type="text" name="higher_level_qualifciation2_official_languages" id="higher_level_qualifciation2_official_languages" @if(isset($data->higher_level_qualifciation2_official_languages)) value="{{$data->higher_level_qualifciation2_official_languages}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Name of the qualification obtained in English
                    </td>
                    <td> <input type="text" name="higher_level_qualification2_english" id="higher_level_qualification2_english" @if(isset($data->higher_level_qualification2_english)) value="{{$data->higher_level_qualification2_english}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Course duration

                    </td>
                    <td> <input type="text" name="higher_level_qualification2_course_duration" id="higher_level_qualification2_course_duration" @if(isset($data->higher_level_qualification2_course_duration)) value="{{$data->higher_level_qualification2_course_duration}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Date course started

                    </td>
                    <td> <input type="date" name="higher_level_qualification2_course_started" id="higher_level_qualification2_course_started" @if(isset($data->higher_level_qualification2_course_started)) value="{{$data->higher_level_qualification2_course_started}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Date course extension_loaded

                    </td>
                    <td> <input type="date" name="higher_level_qualification2_course_ended" id="higher_level_qualification2_course_ended" @if(isset($data->higher_level_qualification2_course_ended)) value="{{$data->higher_level_qualification2_course_ended}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Was the course studied full-time or part-time


                    </td>
                    <td>
                    <select name="higher_level_qualification2_full_part" id="higher_level_qualification2_full_part" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->higher_level_qualification2_full_part)))
                            <option value="{{$data->higher_level_qualification2_full_part}}" selected>{{$data->higher_level_qualification2_full_part}}</option>
                            @endif
                            <option value="Part Time"> Part Time </option>
                            <option value="Full Time"> Full Time </option>
                        </select>  
                        
                    </td>
                </tr>


                <tr>
                    <td> Was this qualification obtained through course of
                        study or via RPL?


                    </td>
                    <td>
                    <select name="higher_level_qualification2_courseofstudy" id="higher_level_qualification2_courseofstudy" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->higher_level_qualification2_courseofstudy)))
                            <option value="{{$data->higher_level_qualification2_courseofstudy}}" selected>{{$data->higher_level_qualification2_courseofstudy}}</option>
                            @endif
                            <option value="Course of study"> Course of study </option>
                            <option value="RPL"> RPL </option>
                        </select>       
                    </td>
                </tr>

                <tr>
                    <td> Country where you studied


                    </td>
                    <td> 
                    <select id="higher_level_qualification2_country" name="higher_level_qualification2_country" class="form-control">
                            <option value="">Select Nationality</option>
                            @if(!empty(isset($data->higher_level_qualification2_country)))
                            <option value="{{$data->higher_level_qualification2_country}}" selected>{{$data->higher_level_qualification2_country}}</option>
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
                    <td> Was a thesis or final project required to end the
                        course? If so, specify the title of the thesis/project



                    </td>
                    <td> <input type="text" name="higher_level_qualification2_thesis_project" id="higher_level_qualification2_thesis_project" @if(isset($data->higher_level_qualification2_thesis_project)) value="{{$data->higher_level_qualification2_thesis_project}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Indicate the number of weeks (even if approximate)
                        studied to complete the thesis/project



                    </td>
                    <td> <input type="text" name="higher_level_qualification2_thesis_project_if" id="higher_level_qualification2_thesis_project_if" @if(isset($data->higher_level_qualification2_thesis_project_if)) value="{{$data->higher_level_qualification2_thesis_project_if}}" @endif/>
                    </td>
                </tr>

            </tbody>
        </table>

        <h2 class="fs-title" style="margin-top: 10px;">DOCS FOR HIGHER QUALIFICATION 2
        </h2>
        <p style="color:red">Attachments must be colour scans of the original document and uploaded in PDF format only. Please consolidate all
            multipage files into one PDF document for each attachment type. Maximum PDF file size is 3MB per PDF.
            Unnecessary additional documents will cause delays in processing. </p>

        <table>
            <tbody>
                <tr>
                    <td> Qualification – Diploma/Award Certificate
                    </td>
                    <td> <input type="file" name="higher_level_qualification2_diploma_award" id="higher_level_qualification2_diploma_award">
                    @if (array_key_exists('higher_level_qualification2_diploma_award', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_diploma_award/'.$docdataForm360['higher_level_qualification2_diploma_award'])  }}">
                                                               @if(str_contains($docdataForm360['higher_level_qualification2_diploma_award'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_diploma_award/'.$docdataForm360['higher_level_qualification2_diploma_award'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif
                
                </td>
                </tr>

                <tr>
                    <td> List of exams taken

                    </td>
                    <td> <input type="file" name="higher_level_qualification2_listofexams" id="higher_level_qualification2_listofexams">
                    @if (array_key_exists('higher_level_qualification2_listofexams', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_listofexams/'.$docdataForm360['higher_level_qualification2_listofexams'])  }}">
                                                               @if(str_contains($docdataForm360['higher_level_qualification2_listofexams'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_listofexams/'.$docdataForm360['higher_level_qualification2_listofexams'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif
                
                </td>
                </tr>

                <tr>
                    <td> Diploma Supplement


                    </td>
                    <td> <input type="file" name="higher_level_qualification2_diploma_supplement" id="higher_level_qualification2_diploma_supplement">
                
                    @if (array_key_exists('higher_level_qualification2_diploma_supplement', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_diploma_supplement/'.$docdataForm360['higher_level_qualification2_diploma_supplement'])  }}">
                                                               @if(str_contains($docdataForm360['higher_level_qualification2_diploma_supplement'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_diploma_supplement/'.$docdataForm360['higher_level_qualification2_diploma_supplement'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif
                
                </td>
                </tr>
            </tbody>
        </table>

        <h2 class="fs-title">QUALIFICATIONS 3
        </h2>


        <table>

            <tbody>

                <tr>
                    <td> Name of University/Institute </td>
                    <td> <input type="text" name="higher_level_qualification3_nameofuniversity" id="higher_level_qualification3_nameofuniversity" @if(isset($data->higher_level_qualification3_nameofuniversity)) value="{{$data->higher_level_qualification3_nameofuniversity}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Is this a university or vocational level qualification?
                    </td>
                    <td>
                        <select name="higher_level_vocational_level_qualification3" id="higher_level_vocational_level_qualification3" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->higher_level_vocational_level_qualification3)))
                            <option value="{{$data->higher_level_vocational_level_qualification3}}" selected>{{$data->higher_level_vocational_level_qualification3}}</option>
                            @endif



                            <option value="University Level"> University Level </option>
                            <option value="Vocational/Professional Level"> Vocational/Professional Level </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> Full address of the education provider
                    </td>
                    <td> <input type="text" name="higher_level__qualification3_education_provider" id="higher_level__qualification3_education_provider" @if(isset($data->higher_level__qualification3_education_provider)) value="{{$data->higher_level__qualification3_education_provider}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Name of exact qualification obtained in the official
                        language
                    </td>
                    <td> <input type="text" name="higher_level_qualifciation3_official_languages" id="higher_level_qualifciation3_official_languages" @if(isset($data->higher_level_qualifciation3_official_languages)) value="{{$data->higher_level_qualifciation3_official_languages}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Name of the qualification obtained in English
                    </td>
                    <td> <input type="text" name="higher_level_qualification3_english" id="higher_level_qualification3_english" @if(isset($data->higher_level_qualification3_english)) value="{{$data->higher_level_qualification3_english}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Course duration

                    </td>
                    <td> <input type="text" name="higher_level_qualification3_course_duration" id="higher_level_qualification3_course_duration" @if(isset($data->higher_level_qualification3_course_duration)) value="{{$data->higher_level_qualification3_course_duration}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Date course started

                    </td>
                    <td> <input type="date" name="higher_level_qualification3_course_started" id="higher_level_qualification3_course_started" @if(isset($data->higher_level_qualification3_course_started)) value="{{$data->higher_level_qualification3_course_started}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Date course extension_loaded

                    </td>
                    <td> <input type="date" name="higher_level_qualification3_course_ended" id="higher_level_qualification3_course_ended" @if(isset($data->higher_level_qualification3_course_ended)) value="{{$data->higher_level_qualification3_course_ended}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Was the course studied full-time or part-time


                    </td>
                    <td> 
                    <select name="higher_level_qualification3_full_part" id="higher_level_qualification3_full_part" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->higher_level_qualification3_full_part)))
                            <option value="{{$data->higher_level_qualification3_full_part}}" selected>{{$data->higher_level_qualification3_full_part}}</option>
                            @endif
                            <option value="Part Time"> Part Time </option>
                            <option value="Full Time"> Full Time </option>
                        </select> 
                   
                       
                    </td>
                </tr>


                <tr>
                    <td> Was this qualification obtained through course of
                        study or via RPL?


                    </td>
                    <td> 
                    <select name="higher_level_qualification3_courseofstudy" id="higher_level_qualification3_courseofstudy" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->higher_level_qualification3_courseofstudy)))
                            <option value="{{$data->higher_level_qualification3_courseofstudy}}" selected>{{$data->higher_level_qualification3_courseofstudy}}</option>
                            @endif
                            <option value="Course of study"> Course of study </option>
                            <option value="RPL"> RPL </option>
                        </select> 
                   
                    </td>
                </tr>

                <tr>
                    <td> Country where you studied


                    </td>
                    <td>
                    <select id="higher_level_qualification3_country" name="higher_level_qualification3_country" class="form-control">
                            <option value="">Select Nationality</option>
                            @if(!empty(isset($data->higher_level_qualification3_country)))
                            <option value="{{$data->higher_level_qualification3_country}}" selected>{{$data->higher_level_qualification3_country}}</option>
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
                    <td> Was a thesis or final project required to end the
                        course? If so, specify the title of the thesis/project



                    </td>
                    <td> <input type="text" name="higher_level_qualification3_thesis_project" id="higher_level_qualification3_thesis_project" @if(isset($data->higher_level_qualification3_thesis_project)) value="{{$data->higher_level_qualification3_thesis_project}}" @endif />
                    </td>
                </tr>


                <tr>
                    <td> Indicate the number of weeks (even if approximate)
                        studied to complete the thesis/project



                    </td>
                    <td> <input type="text" name="higher_level_qualification3_thesis_project_if" id="higher_level_qualification3_thesis_project_if" @if(isset($data->higher_level_qualification3_thesis_project_if)) value="{{$data->higher_level_qualification3_thesis_project_if}}" @endif/>
                    </td>
                </tr>

            </tbody>
        </table>

        <h2 class="fs-title" style="margin-top: 10px;">DOCS FOR HIGHER QUALIFICATION 3
        </h2>
        <p style="color:red">Attachments must be colour scans of the original document and uploaded in PDF format only. Please consolidate all
            multipage files into one PDF document for each attachment type. Maximum PDF file size is 3MB per PDF.
            Unnecessary additional documents will cause delays in processing. </p>

        <table>
            <tbody>
                <tr>
                    <td> Qualification – Diploma/Award Certificate
                    </td>
                    <td> <input type="file" name="higher_level_qualification3_diploma_award" id="higher_level_qualification3_diploma_award">
                
                    @if (array_key_exists('higher_level_qualification3_diploma_award', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_diploma_award/'.$docdataForm360['higher_level_qualification3_diploma_award'])  }}">
                                                               @if(str_contains($docdataForm360['higher_level_qualification3_diploma_award'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_diploma_award/'.$docdataForm360['higher_level_qualification3_diploma_award'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif
                
                </td>
                </tr>

                <tr>
                    <td> List of exams taken

                    </td>
                    <td> <input type="file" name="higher_level_qualification3_listofexams" id="higher_level_qualification3_listofexams">
                    @if (array_key_exists('higher_level_qualification3_listofexams', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_listofexams/'.$docdataForm360['higher_level_qualification3_listofexams'])  }}">
                                                               @if(str_contains($docdataForm360['higher_level_qualification3_listofexams'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_listofexams/'.$docdataForm360['higher_level_qualification3_listofexams'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif               
                </td>
                </tr>

                <tr>
                    <td> Diploma Supplement


                    </td>
                    <td> <input type="file" name="higher_level_qualification3_diploma_supplement" id="higher_level_qualification3_diploma_supplement">
                    @if (array_key_exists('higher_level_qualification3_diploma_supplement', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_diploma_supplement/'.$docdataForm360['higher_level_qualification3_diploma_supplement'])  }}">
                                                               @if(str_contains($docdataForm360['higher_level_qualification3_diploma_supplement'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_diploma_supplement/'.$docdataForm360['higher_level_qualification3_diploma_supplement'])  }}"  />
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