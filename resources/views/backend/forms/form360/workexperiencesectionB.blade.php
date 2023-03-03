        <h2 class="fs-title" style="margin-top: 10px;"> </h2>
        <h2 class="fs-title" style="margin-top: 10px;"> Section B ( 482– For intra-company transfer visa)</h2>
        <p>INFO</p>

        <table>
            <tbody>


                <tr>
                    <td> Are you currently employed with the overseas/offshore company for which you will be working in Australia or NZ?
                    </td>
                    <td>
                        <select name="workexperience_overseas_offshor_section_b" id="workexperience_overseas_offshor_section_b" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->workexperience_overseas_offshor_section_b)))
                            <option value="{{$data->workexperience_overseas_offshor_section_b}}" selected>{{$data->workexperience_overseas_offshor_section_b}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> What is your occupation with the overseas/offshore company?
                    </td>
                    <td> <input type="text" name="workexperience_occuption_overseas_offshor_section_b" id="workexperience_occuption_overseas_offshor_section_b" @if(isset($data->workexperience_occuption_overseas_offshor_section_b)) value="{{$data->workexperience_occuption_overseas_offshor_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Your Position
                    </td>
                    <td> <input type="text" name="workexperience_your_position_section_b" id="workexperience_your_position_section_b" @if(isset($data->workexperience_your_position_section_b)) value="{{$data->workexperience_your_position_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Position Type FULL TIME PART TIME
                    </td>
                    <td> <input type="text" name="workexperience_position_type_section_b" id="workexperience_position_type_section_b" @if(isset($data->workexperience_position_type_section_b)) value="{{$data->workexperience_position_type_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Employer/Name of the business you work for
                    </td>
                    <td> <input type="text" name="workexperience_employer_name_section_b" id="workexperience_employer_name_section_b" @if(isset($data->workexperience_employer_name_section_b)) value="{{$data->workexperience_employer_name_section_b}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Country where the business you are working for is located
                        
                    </td>
                    <td>
                        <select name="workexperience_business_country_section_b" id="workexperience_business_country_section_b" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->workexperience_business_country_section_b)))
                            <option value="{{$data->workexperience_business_country_section_b}}" selected>{{$data->workexperience_business_country_section_b}}</option>
                            @endif
                            @include('backend.forms.countrielist')
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Address of the business in the country where you are working for at the moment
                    </td>
                    <td> <input type="text" name="workexperience_business_address_section_b" id="workexperience_business_address_section_b" @if(isset($data->workexperience_business_address_section_b)) value="{{$data->workexperience_business_address_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Date work started
                    </td>
                    <td> <input type="text" name="workexperience_date_work_started_section_b" id="workexperience_date_work_started_section_b" @if(isset($data->workexperience_date_work_started_section_b)) value="{{$data->workexperience_date_work_started_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Date work ended (if still working please leave blank)
                    </td>
                    <td> <input type="text" name="workexperience_date_work_ended_section_b" id="workexperience_date_work_ended_section_b" @if(isset($data->workexperience_date_work_ended_section_b)) value="{{$data->workexperience_date_work_ended_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Description of duties (please indicate 5 main duties)
                    </td>
                    <td> <input type="text" name="workexperience_duties_section_b" id="workexperience_duties_section_b" @if(isset($data->workexperience_duties_section_b)) value="{{$data->workexperience_duties_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td>How many years are you planning to work for your sponsor

                    </td>
                    <td> <input type="text" name="workexperience_planning_to_work_section_b" id="workexperience_planning_to_work_section_b" @if(isset($data->workexperience_planning_to_work_section_b)) value="{{$data->workexperience_planning_to_work_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Name & Surname of the contact person in the sponsoring business

                    </td>
                    <td> <input type="text" name="workexperience_name_and_surname_section_b" id="workexperience_name_and_surname_section_b" @if(isset($data->workexperience_name_and_surname_section_b)) value="{{$data->workexperience_name_and_surname_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Position of the person on the business

                    </td>
                    <td> <input type="text" name="workexperience_position_of_the_person_section_b" id="workexperience_position_of_the_person_section_b" @if(isset($data->workexperience_position_of_the_person_section_b)) value="{{$data->workexperience_position_of_the_person_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Email

                    </td>
                    <td> <input type="text" name="workexperience_email_of_the_person_section_b" id="workexperience_email_of_the_person_section_b" @if(isset($data->workexperience_email_of_the_person_section_b)) value="{{$data->workexperience_email_of_the_person_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Phone contact

                    </td>
                    <td> <input type="tel" name="workexperience_phone_of_the_person_section_b" id="workexperience_phone_of_the_person_section_b" @if(isset($data->workexperience_phone_of_the_person_section_b)) value="{{$data->workexperience_phone_of_the_person_section_b}}" @endif/> </td>
                </tr>
                <tr>
                    <td>What is your current annual gross salary with the offshore company?

                    </td>
                    <td> <input type="text" name="workexperience_current_annual_gross_salary_section_b" id="workexperience_current_annual_gross_salary_section_b" @if(isset($data->workexperience_current_annual_gross_salary_section_b)) value="{{$data->workexperience_current_annual_gross_salary_section_b}}" @endif/> </td>
                </tr>

            </tbody>
        </table>

        <p>DOCS</p>

        <table>
            <tbody>



                <tr>
                    <td>Employment contract
                    </td>
                    <td> <input type="file" name="workexperience_employment_contract_section_b" id="workexperience_employment_contract_section_b">
                        @if (array_key_exists('workexperience_employment_contract_section_b', $docdataForm360))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_employment_contract_section_b/'.$docdataForm360['workexperience_employment_contract_section_b'])  }}">
                            @if(str_contains($docdataForm360['workexperience_employment_contract_section_b'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_employment_contract_section_b/'.$docdataForm360['workexperience_employment_contract_section_b'])  }}" />
                            @endif
                        </a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Your most recent payslip issued by the company
                    </td>
                    <td> <input type="file" name="workexperience_recent_payslip_section_b" id="workexperience_recent_payslip_section_b">
                        @if (array_key_exists('workexperience_recent_payslip_section_b', $docdataForm360))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_recent_payslip_section_b/'.$docdataForm360['workexperience_recent_payslip_section_b'])  }}">
                            @if(str_contains($docdataForm360['workexperience_recent_payslip_section_b'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_recent_payslip_section_b/'.$docdataForm360['workexperience_recent_payslip_section_b'])  }}" />
                            @endif
                        </a>
                        @endif
                    </td>
                </tr>

            </tbody>
        </table>