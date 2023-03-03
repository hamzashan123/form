<h2 class="fs-title" style="margin-top: 10px;"> </h2>
<h2 class="fs-title" style="margin-top: 10px;"> PART D ( 186 Visa – Direct Entry )</h2>
<p>INFO</p>

<table>
    <tbody>


        <tr>
            <td> Are you currently the holder of a 482 visa?
            </td>
            <td> <input type="text" name="workexperience_current_holder_section_d" id="workexperience_current_holder_section_d" @if(isset($data->workexperience_current_holder_section_d)) value="{{$data->workexperience_current_holder_section_d}}" @endif/> </td>
        </tr>

        <tr>
            <td> If so, are you currently on a 482 visa with your future 186 visa sponsor?
            </td>
            <td> <input type="text" name="workexperience_currently_sponsor_section_d" id="workexperience_currently_sponsor_section_d" @if(isset($data->workexperience_currently_sponsor_section_d)) value="{{$data->workexperience_currently_sponsor_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td> If not, please indicate the name of your current sponsor under which you hold your current 482 visa
            </td>
            <td> <input type="text" name="workexperience_current_sponsor_section_d" id="workexperience_current_sponsor_section_d" @if(isset($data->workexperience_current_sponsor_section_d)) value="{{$data->workexperience_current_sponsor_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td> Indicate the occupation under which you are currently sponsored
            </td>
            <td> <input type="text" name="workexperience_current_sponsored_occupation_section_d" id="workexperience_current_sponsored_occupation_section_d" @if(isset($data->workexperience_current_sponsored_occupation_section_d)) value="{{$data->workexperience_current_sponsored_occupation_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td> Do you hold a skills assessment?

            </td>
            <td>
                <select name="workexperience_skill_assessment_section_d" id="workexperience_skill_assessment_section_d" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_skill_assessment_section_d)))
                    <option value="{{$data->workexperience_skill_assessment_section_d}}" selected>{{$data->workexperience_skill_assessment_section_d}}</option>
                    @endif
                    <option value="Yes">Yes </option>
                    <option value="No"> No </option>
                </select>
            </td>
        </tr>
        <tr>
            <td> If yes, in what occupation

            </td>
            <td>
                <select name="workexperience_what_occupation_section_d" id="workexperience_what_occupation_section_d" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_what_occupation_section_d)))
                    <option value="{{$data->workexperience_what_occupation_section_d}}" selected>{{$data->workexperience_what_occupation_section_d}}</option>
                    @endif
                    <option value="Yes">Yes </option>
                    <option value="No"> No </option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Have you taken an IELTS or alternative English test in the last 3 years?

            </td>
            <td>
                <select name="workexperience_alternative_english_section_d" id="workexperience_alternative_english_section_d" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_alternative_english_section_d)))
                    <option value="{{$data->workexperience_alternative_english_section_d}}" selected>{{$data->workexperience_alternative_english_section_d}}</option>
                    @endif
                    <option value="Yes">Yes </option>
                    <option value="No"> No </option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Indicate the position you will be working with your sponsor for your 186 visa
            </td>
            <td> <input type="text" name="workexperience_indicate_position_section_d" id="workexperience_indicate_position_section_d" @if(isset($data->workexperience_indicate_position_section_d)) value="{{$data->workexperience_indicate_position_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td> Position Type

            </td>
            <td>
                <select name="workexperience_position_type_section_d" id="workexperience_position_type_section_d" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_position_type_section_d)))
                    <option value="{{$data->workexperience_position_type_section_d}}" selected>{{$data->workexperience_position_type_section_d}}</option>
                    @endif
                    <option value="Full Time">Full Time </option>
                    <option value="Part Time"> Part Time </option>
                </select>
            </td>
        </tr>

        
        <tr>
                    <td> Country where the business is located
                        
                    </td>
                    <td>
                        <select name="workexperience_business_country_section_d" id="workexperience_business_country_section_d" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->workexperience_business_country_section_d)))
                            <option value="{{$data->workexperience_business_country_section_d}}" selected>{{$data->workexperience_business_country_section_d}}</option>
                            @endif
                            @include('backend.forms.countrielist')
                        </select>
                    </td>
                </tr>
        <tr>
            <td> Address of the business
            </td>
            <td> <input type="text" name="workexperience_country_address_section_d" id="workexperience_country_address_section_d" @if(isset($data->workexperience_country_address_section_d)) value="{{$data->workexperience_country_address_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date work will start
            </td>
            <td> <input type="date" name="workexperience_date_start_section_d" id="workexperience_date_start_section_d" @if(isset($data->workexperience_date_start_section_d)) value="{{$data->workexperience_date_start_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td> Description of duties (please indicate 5 main duties)
            </td>
            <td> <input type="text" name="workexperience_5_duties_section_d" id="workexperience_5_duties_section_d" @if(isset($data->workexperience_5_duties_section_d)) value="{{$data->workexperience_5_duties_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td> Name of the contact person in the sponsoring business
            </td>
            <td> <input type="text" name="workexperience_name_of_the_contact_person_section_d" id="workexperience_name_of_the_contact_person_section_d" @if(isset($data->workexperience_name_of_the_contact_person_section_d)) value="{{$data->workexperience_name_of_the_contact_person_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td>Surname of the contact person in the sponsoring business
            </td>
            <td> <input type="text" name="workexperience_surname_of_the_contact_person_section_d" id="workexperience_surname_of_the_contact_person_section_d" @if(isset($data->workexperience_surname_of_the_contact_person_section_d)) value="{{$data->workexperience_surname_of_the_contact_person_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td>Position of the person on the business
            </td>
            <td> <input type="text" name="workexperience_position_of_the_person_section_d" id="workexperience_position_of_the_person_section_d" @if(isset($data->workexperience_position_of_the_person_section_d)) value="{{$data->workexperience_position_of_the_person_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td>Email
            </td>
            <td> <input type="text" name="workexperience_email_of_the_person_section_d" id="workexperience_email_of_the_person_section_d" @if(isset($data->workexperience_email_of_the_person_section_d)) value="{{$data->workexperience_email_of_the_person_section_d}}" @endif/> </td>
        </tr>
        <tr>
            <td>Phone contact
            </td>
            <td> <input type="tel" name="workexperience_phone_of_the_person_section_d" id="workexperience_phone_of_the_person_section_d" @if(isset($data->workexperience_phone_of_the_person_section_d)) value="{{$data->workexperience_phone_of_the_person_section_d}}" @endif/> </td>
        </tr>


    </tbody>
</table>