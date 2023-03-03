<h2 class="fs-title" style="margin-top: 10px;"> </h2>
<h2 class="fs-title" style="margin-top: 10px;"> Section A ( 482 visa )</h2>
<p>INFO</p>

<table>
    <tbody>

        <tr>
            <td> Are you currently employed with the company that will sponsor you?
            </td>
            <td> <input type="text" name="workexperience_sponsor_section_a" id="workexperience_sponsor_section_a" @if(isset($data->workexperience_sponsor_section_a)) value="{{$data->workexperience_sponsor_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> What is or will be your position in the company?
            </td>
            <td> <input type="text" name="workexperience_position_section_a" id="workexperience_position_section_a" @if(isset($data->workexperience_position_section_a)) value="{{$data->workexperience_position_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> Please indicate the main 5 duties of the work you will perform for the sponsor
            </td>
            <td> <input type="text" name="workexperience_duties_section_a" id="workexperience_duties_section_a" @if(isset($data->workexperience_duties_section_a)) value="{{$data->workexperience_duties_section_a}}" @endif/> </td>
        </tr>

        <tr>
            <td> Have you ever been sponsored by this business before?

            </td>
            <td>
                <select name="workexperience_business_section_a" id="workexperience_business_section_a" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_business_section_a)))
                    <option value="{{$data->workexperience_business_section_a}}" selected>{{$data->workexperience_business_section_a}}</option>
                    @endif
                    <option value="Yes">Yes </option>
                    <option value="No"> No </option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Name of the business
            </td>
            <td> <input type="text" name="workexperience_name_of_the_business_section_a" id="workexperience_name_of_the_business_section_a" @if(isset($data->workexperience_name_of_the_business_section_a)) value="{{$data->workexperience_name_of_the_business_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> Address of the business
            </td>
            <td> <input type="text" name="workexperience_address_of_the_business_section_a" id="workexperience_address_of_the_business_section_a" @if(isset($data->workexperience_address_of_the_business_section_a)) value="{{$data->workexperience_address_of_the_business_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> ABN of the business Sector of the business
            </td>
            <td> <input type="text" name="workexperience_abn_of_the_business_section_a" id="workexperience_abn_of_the_business_section_a" @if(isset($data->workexperience_abn_of_the_business_section_a)) value="{{$data->workexperience_abn_of_the_business_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date when you will start working on the sponsorship visa (if already working with the sponsorship business please leave blank)
            </td>
            <td> <input type="date" name="workexperience_sponsorship_visa_section_a" id="workexperience_sponsorship_visa_section_a" @if(isset($data->workexperience_sponsorship_visa_section_a)) value="{{$data->workexperience_sponsorship_visa_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> How many years are you planning to work for your sponsor
            </td>
            <td> <input type="text" name="workexperience_planning_sponsor_section_a" id="workexperience_planning_sponsor_section_a" @if(isset($data->workexperience_planning_sponsor_section_a)) value="{{$data->workexperience_planning_sponsor_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> (Name & Surname of the contact person in the sponsoring business
            </td>
            <td> <input type="text" name="workexperience_name_and_surname_section_a" id="workexperience_name_and_surname_section_a" @if(isset($data->workexperience_name_and_surname_section_a)) value="{{$data->workexperience_name_and_surname_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> Position of the person on the business
            </td>
            <td> <input type="text" name="workexperience_position_of_the_person_section_a" id="workexperience_position_of_the_person_section_a" @if(isset($data->workexperience_position_of_the_person_section_a)) value="{{$data->workexperience_position_of_the_person_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> Email
            </td>
            <td> <input type="text" name="workexperience_email_of_the_person_section_a" id="workexperience_email_of_the_person_section_a" @if(isset($data->workexperience_email_of_the_person_section_a)) value="{{$data->workexperience_email_of_the_person_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> Phone contact
            </td>
            <td> <input type="tel" name="workexperience_tel_of_the_person_section_a" id="workexperience_tel_of_the_person_section_a" @if(isset($data->workexperience_tel_of_the_person_section_a)) value="{{$data->workexperience_tel_of_the_person_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> What will be the annual gross salary you will be paid by your sponsor?
            </td>
            <td> <input type="text" name="workexperience_annual_gross_section_a" id="workexperience_annual_gross_section_a" @if(isset($data->workexperience_annual_gross_section_a)) value="{{$data->workexperience_annual_gross_section_a}}" @endif/> </td>
        </tr>
        <tr>
            <td> How frequently will you be paid?

            </td>
            <td>
                <select name="workexperience_frequently_paid_section_a" id="workexperience_frequently_paid_section_a" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_frequently_paid_section_a)))
                    <option value="{{$data->workexperience_frequently_paid_section_a}}" selected>{{$data->workexperience_frequently_paid_section_a}}</option>
                    @endif
                    <option value="Every week">Every week</option>
                    <option value="2 week">2 week</option>
                    <option value="Monthly"> Monthly </option>
                </select>
            </td>
        </tr>
    </tbody>
</table>