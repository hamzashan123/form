<h2 class="fs-title" style="margin-top: 10px;"> </h2>
<h2 class="fs-title" style="margin-top: 10px;"> Section F 408 Academic Training (University) </h2>
<p>INFO</p>

<table>
    <tbody>

        <tr>
            <td> Duration of stay

            </td>
            <td>
                <select name="workexperience_duration_stay_section_f" id="workexperience_duration_stay_section_f" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_duration_stay_section_f)))
                    <option value="{{$data->workexperience_duration_stay_section_f}}" selected>{{$data->workexperience_duration_stay_section_f}}</option>
                    @endif
                    <option value="3 months">3 months </option>
                    <option value="6 months">6 months </option>
                    <option value="12 months">12 months </option>
                    <option value="More than 12 months">More than 12 months </option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Name of the Organization where the training will take place
            </td>
            <td> <input type="text" name="workexperience_organization_name_section_f" id="workexperience_organization_name_section_f" @if(isset($data->workexperience_organization_name_section_f)) value="{{$data->workexperience_organization_name_section_f}}" @endif/> </td>
        </tr>

        <tr>
            <td> Website (if available)
            </td>
            <td> <input type="text" name="workexperience_website_section_f" id="workexperience_website_section_f" @if(isset($data->workexperience_website_section_f)) value="{{$data->workexperience_website_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> (ABN) Business registration ID
            </td>
            <td> <input type="text" name="workexperience_abn_section_f" id="workexperience_abn_section_f" @if(isset($data->workexperience_abn_section_f)) value="{{$data->workexperience_abn_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Address of the organization
            </td>
            <td> <input type="text" name="workexperience_address_organization_section_f" id="workexperience_address_organization_section_f" @if(isset($data->workexperience_address_organization_section_f)) value="{{$data->workexperience_address_organization_section_f}}" @endif/> </td>
        </tr>

        <tr>
            <td> Country

            </td>
            <td>
                <select name="workexperience_country_section_f" id="workexperience_country_section_f" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_country_section_f)))
                    <option value="{{$data->workexperience_country_section_f}}" selected>{{$data->workexperience_country_section_f}}</option>
                    @endif
                    <option value="AUSTRALIA">AUSTRALIA </option>
                    <option value="Newzealand">Newzealand </option>

                </select>
            </td>
        </tr>

        <tr>
            <td> Contact surname of the person in the organization
            </td>
            <td> <input type="text" name="workexperience_contact_surname_section_f" id="workexperience_contact_surname_section_f" @if(isset($data->workexperience_contact_surname_section_f)) value="{{$data->workexperience_contact_surname_section_f}}" @endif/> </td>
        </tr>


        <tr>
            <td> Contact name of the person in the organization
            </td>
            <td> <input type="text" name="workexperience_contact_name_section_f" id="workexperience_contact_name_section_f" @if(isset($data->workexperience_contact_name_section_f)) value="{{$data->workexperience_contact_name_section_f}}" @endif/> </td>
        </tr>


        <tr>
            <td> Position of the person in the organization
            </td>
            <td> <input type="text" name="workexperience_contact_position_section_f" id="workexperience_contact_position_section_f" @if(isset($data->workexperience_contact_position_section_f)) value="{{$data->workexperience_contact_position_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Business phone
            </td>
            <td> <input type="tel" name="workexperience_business_phone_section_f" id="workexperience_business_phone_section_f" @if(isset($data->workexperience_business_phone_section_f)) value="{{$data->workexperience_business_phone_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Mobile
            </td>
            <td> <input type="tel" name="workexperience_mobile_section_f" id="workexperience_mobile_section_f" @if(isset($data->workexperience_mobile_section_f)) value="{{$data->workexperience_mobile_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Email address
            </td>
            <td> <input type="text" name="workexperience_email_address_section_f" id="workexperience_email_address_section_f" @if(isset($data->workexperience_email_address_section_f)) value="{{$data->workexperience_email_address_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Position Activity Position details
            </td>
            <td> <input type="text" name="workexperience_position_activity_section_f" id="workexperience_position_activity_section_f" @if(isset($data->workexperience_position_activity_section_f)) value="{{$data->workexperience_position_activity_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Give details of the type of activity the applicant will be undertaking in Australia
            </td>
            <td> <input type="text" name="workexperience_type_of_activity_section_f" id="workexperience_type_of_activity_section_f" @if(isset($data->workexperience_type_of_activity_section_f)) value="{{$data->workexperience_type_of_activity_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Your Position as the visa applicant during the training period
            </td>
            <td> <input type="text" name="workexperience_applicant_position_section_f" id="workexperience_applicant_position_section_f" @if(isset($data->workexperience_applicant_position_section_f)) value="{{$data->workexperience_applicant_position_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Please indicate the main 5 Duties / activities you will be performing
            </td>
            <td> <input type="text" name="workexperience_duties_activities_section_f" id="workexperience_duties_activities_section_f" @if(isset($data->workexperience_duties_activities_section_f)) value="{{$data->workexperience_duties_activities_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date when the activity will commence
            </td>
            <td> <input type="date" name="workexperience_date_activity_section_f" id="workexperience_date_activity_section_f" @if(isset($data->workexperience_date_activity_section_f)) value="{{$data->workexperience_date_activity_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date when the activity will end
            </td>
            <td> <input type="date" name="workexperience_date_activity_end_section_f" id="workexperience_date_activity_end_section_f" @if(isset($data->workexperience_date_activity_end_section_f)) value="{{$data->workexperience_date_activity_end_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Give details of all street addresses where the activity will be undertaken
            </td>
            <td> <input type="text" name="workexperience_street_address_section_f" id="workexperience_street_address_section_f" @if(isset($data->workexperience_street_address_section_f)) value="{{$data->workexperience_street_address_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> Will you be paid for undertaking the activity in Australia?

            </td>
            <td>
                <select name="workexperience_undertaking_activity_section_f" id="workexperience_undertaking_activity_section_f" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_undertaking_activity_section_f)))
                    <option value="{{$data->workexperience_undertaking_activity_section_f}}" selected>{{$data->workexperience_undertaking_activity_section_f}}</option>
                    @endif
                    <option value="Yes">Yes </option>
                    <option value="No"> No </option>
                </select>
            </td>
        </tr>
        <tr>
            <td> How much will you be paid for the entire period of stay
            </td>
            <td> <input type="text" name="workexperience_entire_period_section_f" id="workexperience_entire_period_section_f" @if(isset($data->workexperience_entire_period_section_f)) value="{{$data->workexperience_entire_period_section_f}}" @endif/> </td>
        </tr>
        <tr>
            <td> How frequently will you be paid?

            </td>
            <td>
                <select name="workexperience_frequently_paid_section_f" id="workexperience_frequently_paid_section_f" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_frequently_paid_section_f)))
                    <option value="{{$data->workexperience_frequently_paid_section_f}}" selected>{{$data->workexperience_frequently_paid_section_f}}</option>
                    @endif
                    <option value="Every week">Every week </option>
                    <option value="2 weeks"> 2 weeks </option>
                    <option value="Monthly"> Monthly </option>
                </select>
            </td>
        </tr>


    </tbody>
</table>


<p>DOCS</p>

<table>
    <tbody>



        <tr>
            <td> WORK TO BE PERFORMED IN AUSTRALIA OR NEW ZEALAND – DOCS Invitation letter from the Australia or New Zealand company
            </td>
            <td> <input type="file" name="workexperience_work_performed_doc_section_f" id="workexperience_work_performed_doc_section_f">
                @if (array_key_exists('workexperience_work_performed_doc_section_f', $docdataForm360))

                <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_work_performed_doc_section_f/'.$docdataForm360['workexperience_work_performed_doc_section_f'])  }}">
                    @if(str_contains($docdataForm360['workexperience_work_performed_doc_section_f'] , '.pdf'))
                    <img class="imgfile" src="{{asset('pdficon.png')}}" />
                    @else
                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_work_performed_doc_section_f/'.$docdataForm360['workexperience_work_performed_doc_section_f'])  }}" />
                    @endif
                </a>
                @endif
            </td>
        </tr>


    </tbody>
</table>