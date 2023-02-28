<h2 class="fs-title" style="margin-top: 10px;"> </h2>
<h2 class="fs-title" style="margin-top: 10px;"> Section E 400 Visa (Short term for a maximum of 3 or 6 months duration visa)</h2>
<p>INFO</p>

<table>
    <tbody>


        <tr>
            <td> Name of company in Australia or New Zealand where you will be performing your work
            </td>
            <td> <input type="text" name="workexperience_company_name_section_e" id="workexperience_company_name_section_e" @if(isset($data->workexperience_company_name_section_e)) value="{{$data->workexperience_company_name_section_e}}" @endif/> </td>
        </tr>

        <tr>
            <td> Registration number of the company in Australia or New Zealand (ABN and ACN number
            </td>
            <td> <input type="text" name="workexperience_registration_number_section_e" id="workexperience_registration_number_section_e" @if(isset($data->workexperience_registration_number_section_e)) value="{{$data->workexperience_registration_number_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td> Address of the company in Australia or New Zealand
            </td>
            <td> <input type="text" name="workexperience_company_address_section_e" id="workexperience_company_address_section_e" @if(isset($data->workexperience_company_address_section_e)) value="{{$data->workexperience_company_address_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td> Contact number in Australia or New Zealand
            </td>
            <td> <input type="text" name="workexperience_contact_number_section_e" id="workexperience_contact_number_section_e" @if(isset($data->workexperience_contact_number_section_e)) value="{{$data->workexperience_contact_number_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td> Contact person in Australia or New Zealand (name and surname)
            </td>
            <td> <input type="text" name="workexperience_contact_person_name_surname_section_e" id="workexperience_contact_person_name_surname_section_e" @if(isset($data->workexperience_contact_person_name_surname_section_e)) value="{{$data->workexperience_contact_person_name_surname_section_e}}" @endif/> </td>
        </tr>


        <tr>
            <td> Role of the contact person in Australia or New Zealand
            </td>
            <td> <input type="text" name="workexperience_contact_person_role_section_e" id="workexperience_contact_person_role_section_e" @if(isset($data->workexperience_contact_person_role_section_e)) value="{{$data->workexperience_contact_person_role_section_e}}" @endif/> </td>
        </tr>


        <tr>
            <td> Company sector in which the company in Australia or NZ operates in
            </td>
            <td> <input type="text" name="workexperience_company_sector_section_e" id="workexperience_company_sector_section_e" @if(isset($data->workexperience_company_sector_section_e)) value="{{$data->workexperience_company_sector_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td> Position that you will carry out to Australia or New Zealand
            </td>
            <td> <input type="text" name="workexperience_position_section_e" id="workexperience_position_section_e" @if(isset($data->workexperience_position_section_e)) value="{{$data->workexperience_position_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td> Main responsibilities and duties to be carried out in Australia or New Zealand
            </td>
            <td> <input type="text" name="workexperience_responsibilities_section_e" id="workexperience_responsibilities_section_e" @if(isset($data->workexperience_responsibilities_section_e)) value="{{$data->workexperience_responsibilities_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td> Description of the project you will be working during the time in Australia or New Zealand
            </td>
            <td> <input type="text" name="workexperience_description_section_e" id="workexperience_description_section_e" @if(isset($data->workexperience_description_section_e)) value="{{$data->workexperience_description_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date you are planning to enter Australia or New Zealand
            </td>
            <td> <input type="date" name="workexperience_date_planing_section_e" id="workexperience_date_planing_section_e" @if(isset($data->workexperience_date_planing_section_e)) value="{{$data->workexperience_date_planing_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td>Date you are planning to leave Australia or New Zealand (maximum 6 months stay)
            </td>
            <td> <input type="text" name="workexperience_date_planing_leave_section_e" id="workexperience_date_planing_leave_section_e" @if(isset($data->workexperience_date_planing_leave_section_e)) value="{{$data->workexperience_date_planing_leave_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td>Will it be necessary to enter Australia or New Zealand more than one time in order to carry out the job?
            </td>
            <td> <input type="text" name="workexperience_carry_out_section_e" id="workexperience_carry_out_section_e" @if(isset($data->workexperience_carry_out_section_e)) value="{{$data->workexperience_carry_out_section_e}}" @endif/> </td>
        </tr>
        <tr>
            <td>For the work carried out in Australia or New Zealand, will you be paid by the Australian or New Zealand company, or will you receive payments from the company located overseas?
            </td>
            <td> <input type="text" name="workexperience_receive_payment_section_e" id="workexperience_receive_payment_section_e" @if(isset($data->workexperience_receive_payment_section_e)) value="{{$data->workexperience_receive_payment_section_e}}" @endif/> </td>
        </tr>


    </tbody>
</table>


<p>DOCS</p>

<table>
    <tbody>

        <tr>
            <td> WORK TO BE PERFORMED IN AUSTRALIA OR NEW ZEALAND – DOCS Invitation letter from the Australia or New Zealand company
            </td>
            <td> <input type="file" name="workexperience_work_performed_section_e" id="workexperience_work_performed_section_e">
                @if (array_key_exists('workexperience_current_holder_section_e', $docdataForm360))

                <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_work_performed_section_e/'.$docdataForm360['workexperience_work_performed_section_e'])  }}">
                    @if(str_contains($docdataForm360['workexperience_work_performed_section_e'] , '.pdf'))
                    <img class="imgfile" src="{{asset('pdficon.png')}}" />
                    @else
                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_work_performed_section_e/'.$docdataForm360['workexperience_work_performed_section_e'])  }}" />
                    @endif
                </a>
                @endif
            </td>
        </tr>


    </tbody>
</table>