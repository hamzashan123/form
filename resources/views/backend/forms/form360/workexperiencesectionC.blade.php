<h2 class="fs-title" style="margin-top: 10px;"> </h2>
<h2 class="fs-title" style="margin-top: 10px;"> Section C ( 186 Visa - Transition stream )</h2>
<p>INFO</p>

<table>
    <tbody>


        <tr>
            <td> Are you currently the holder of a 482 visa?
            </td>
            <td> <input type="text" name="workexperience_current_holder_section_c" id="workexperience_current_holder_section_c" @if(isset($data->workexperience_current_holder_section_c)) value="{{$data->workexperience_current_holder_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> If you currently hold a 482 visa, have you worked for the same employer for at least 3 years or will be reaching 3 years soon?

            </td>
            <td>
                <select name="workexperience_same_employer_section_c" id="workexperience_same_employer_section_c" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_same_employer_section_c)))
                    <option value="{{$data->workexperience_same_employer_section_c}}" selected>{{$data->workexperience_same_employer_section_c}}</option>
                    @endif
                    <option value="Yes">Yes </option>
                    <option value="No"> No </option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Your Position
            </td>
            <td> <input type="text" name="workexperience_your_position_section_c" id="workexperience_your_position_section_c" @if(isset($data->workexperience_your_position_section_c)) value="{{$data->workexperience_your_position_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> Position Type
            </td>
            <td> <input type="text" name="workexperience_position_type_section_c" id="workexperience_position_type_section_c" @if(isset($data->workexperience_position_type_section_c)) value="{{$data->workexperience_position_type_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> Employer/Name of the business you work for
            </td>
            <td> <input type="text" name="workexperience_employer_name_section_c" id="workexperience_employer_name_section_c" @if(isset($data->workexperience_employer_name_section_c)) value="{{$data->workexperience_employer_name_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> Country where the business you are working for is located
            </td>
            <td> <input type="text" name="workexperience_business_located_section_c" id="workexperience_business_located_section_c" @if(isset($data->workexperience_business_located_section_c)) value="{{$data->workexperience_business_located_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> Address of the business in the country where you are working for
            </td>
            <td> <input type="text" name="workexperience_address_of_the_business_section_c" id="workexperience_address_of_the_business_section_c" @if(isset($data->workexperience_address_of_the_business_section_c)) value="{{$data->workexperience_address_of_the_business_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date work started (this is the date when your 482 visa was granted)
            </td>
            <td> <input type="text" name="workexperience_date_started_section_c" id="workexperience_date_started_section_c" @if(isset($data->workexperience_date_started_section_c)) value="{{$data->workexperience_date_started_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date work ended (if still working please leave blank)
            </td>
            <td> <input type="text" name="workexperience_date_ended_section_c" id="workexperience_date_ended_section_c" @if(isset($data->workexperience_date_ended_section_c)) value="{{$data->workexperience_date_ended_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> Description of duties (please indicate 5 main duties)
            </td>
            <td> <input type="text" name="workexperience_description_duties_section_c" id="workexperience_description_duties_section_c" @if(isset($data->workexperience_description_duties_section_c)) value="{{$data->workexperience_description_duties_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> Name & Surname of the contact person in the sponsoring business
            </td>
            <td> <input type="text" name="workexperience_name_surname_section_c" id="workexperience_name_surname_section_c" @if(isset($data->workexperience_name_surname_section_c)) value="{{$data->workexperience_name_surname_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td> Position of the person on the business
            </td>
            <td> <input type="text" name="workexperience_position_of_the_person_section_c" id="workexperience_position_of_the_person_section_c" @if(isset($data->workexperience_position_of_the_person_section_c)) value="{{$data->workexperience_position_of_the_person_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td>Email
            </td>
            <td> <input type="text" name="workexperience_email_of_the_person_section_c" id="workexperience_email_of_the_person_section_c" @if(isset($data->workexperience_email_of_the_person_section_c)) value="{{$data->workexperience_email_of_the_person_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td>Phone contact
            </td>
            <td> <input type="tel" name="workexperience_phone_of_the_person_section_c" id="workexperience_phone_of_the_person_section_c" @if(isset($data->workexperience_phone_of_the_person_section_c)) value="{{$data->workexperience_phone_of_the_person_section_c}}" @endif/> </td>
        </tr>
        <tr>
            <td>Indicate your current annual gross salary
            </td>
            <td> <input type="text" name="workexperience_indicate_current_annual_gross_section_c" id="workexperience_indicate_current_annual_gross_section_c" @if(isset($data->workexperience_indicate_current_annual_gross_section_c)) value="{{$data->workexperience_indicate_current_annual_gross_section_c}}" @endif/> </td>
        </tr>


    </tbody>
</table>