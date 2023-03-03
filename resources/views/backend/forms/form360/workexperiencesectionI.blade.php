<h2 class="fs-title" style="margin-top: 10px;"> PART I 417 visa renewal </h2>
<p>2nd or 3rd WHV visa</p>
<p>INFO</p>
<p>TYPE OF WHV VISA APPLYING FOR</p>

<table>
    <tbody>

        <tr>
            <td> Select the type of working holiday visa the applicant is applying for

            </td>
            <td>
                <select name="workexperience_exams_list2_section_h" id="workexperience_exams_list2_section_h" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_exams_list2_section_h)))
                    <option value="{{$data->workexperience_exams_list2_section_h}}" selected>{{$data->workexperience_exams_list2_section_h}}</option>
                    @endif
                    <option value="SECOND WHV">SECOND WHV</option>
                    <option value="THIRD WHV">THIRD WHV </option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Have you been granted and entered Australia on a first Working Holiday visa (subclass 417) before?

            </td>
            <td>
                <select name="workexperience_exams_list2_section_h" id="workexperience_exams_list2_section_h" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_exams_list2_section_h)))
                    <option value="{{$data->workexperience_exams_list2_section_h}}" selected>{{$data->workexperience_exams_list2_section_h}}</option>
                    @endif
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> If yes, please specify
            </td>
            <td> <input type="text" name="workexperience_exams_list2_section_h" id="workexperience_exams_list2_section_h" @if(isset($data->workexperience_exams_list2_section_h)) value="{{$data->workexperience_exams_list2_section_h}}" @endif/> </td>
        </tr>

        <tr>
            <td> Have you been granted and been in Australia as the holder of a second Working Holiday visa (subclass 417) before?
            </td>
            <td> <input type="text" name="workexperience_exams_list2_section_h" id="workexperience_exams_list2_section_h" @if(isset($data->workexperience_exams_list2_section_h)) value="{{$data->workexperience_exams_list2_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> If yes, please specify
            </td>
            <td> <input type="text" name="workexperience_exams_list2_section_h" id="workexperience_exams_list2_section_h" @if(isset($data->workexperience_exams_list2_section_h)) value="{{$data->workexperience_exams_list2_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> Have you undertaken 3 months of specified work as the holder of a first Working Holiday visa (subclass 417)?
            </td>
            <td> <input type="text" name="workexperience_exams_list2_section_h" id="workexperience_exams_list2_section_h" @if(isset($data->workexperience_exams_list2_section_h)) value="{{$data->workexperience_exams_list2_section_h}}" @endif/> </td>
        </tr>


        <tr>
            <td> If yes, please specify
            </td>
            <td> <input type="text" name="workexperience_exams_list2_section_h" id="workexperience_exams_list2_section_h" @if(isset($data->workexperience_exams_list2_section_h)) value="{{$data->workexperience_exams_list2_section_h}}" @endif/> </td>
        </tr>

    </tbody>
</table>



<h2 class="fs-title" style="margin-top: 10px;"> SPECIFIC WORK PERFORMED FOR THE FOLLOWING WHV VISA </h2>
<p>Give details of the specified work undertaken by you, for each employer whilst on your Working Holiday visa</p>
<p>WORK EXPERIENCE DURING WHV VISA - Details of specified work undertaken</p>

<h2 class="fs-title" style="margin-top: 10px;">Employer n.1 </h2>

<table>
    <tbody>



        <tr>
            <td> Legal registered name
            </td>
            <td> <input type="text" name="workexperience_legal_n1_section_i" id="workexperience_legal_n1_section_i" @if(isset($data->workexperience_legal_n1_section_i)) value="{{$data->workexperience_legal_n1_section_i}}" @endif/> </td>
        </tr>

        <tr>
            <td> Trading name
            </td>
            <td> <input type="text" name="workexperience_trading_n1_section_i" id="workexperience_trading_n1_section_i" @if(isset($data->workexperience_trading_n1_section_i)) value="{{$data->workexperience_trading_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Australian Business Number (ABN)
            </td>
            <td> <input type="text" name="workexperience_abn_n1_section_i" id="workexperience_abn_n1_section_i" @if(isset($data->workexperience_abn_n1_section_i)) value="{{$data->workexperience_abn_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Is the employer a labour hire company

            </td>
            <td>
                <select name="workexperience_labour_n1_section_i" id="workexperience_labour_n1_section_i" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_labour_n1_section_i)))
                    <option value="{{$data->workexperience_labour_n1_section_i}}" selected>{{$data->workexperience_labour_n1_section_i}}</option>
                    @endif
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </td>
        </tr>

    </tbody>
</table>

<p>EMPLOYER CONTACT</p>

<table>
    <tbody>



        <tr>
            <td> Family name
            </td>
            <td> <input type="text" name="workexperience_familyname_n1_section_i" id="workexperience_familyname_n1_section_i" @if(isset($data->workexperience_familyname_n1_section_i)) value="{{$data->workexperience_familyname_n1_section_i}}" @endif/> </td>
        </tr>

        <tr>
            <td> Given names
            </td>
            <td> <input type="text" name="workexperience_given_name_n1_section_i" id="workexperience_given_name_n1_section_i" @if(isset($data->workexperience_given_name_n1_section_i)) value="{{$data->workexperience_given_name_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Position
            </td>
            <td> <input type="text" name="workexperience_position_n1_section_i" id="workexperience_position_n1_section_i" @if(isset($data->workexperience_position_n1_section_i)) value="{{$data->workexperience_position_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Business phone
            </td>
            <td> <input type="tel" name="workexperience_business_phone_n1_section_i" id="workexperience_business_phone_n1_section_i" @if(isset($data->workexperience_business_phone_n1_section_i)) value="{{$data->workexperience_business_phone_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Mobile / Cell phone
            </td>
            <td> <input type="tel" name="workexperience_mobile_cell_n1_section_i" id="workexperience_mobile_cell_n1_section_i" @if(isset($data->workexperience_mobile_cell_n1_section_i)) value="{{$data->workexperience_mobile_cell_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Email address
            </td>
            <td> <input type="text" name="workexperience_email_n1_section_i" id="workexperience_email_n1_section_i" @if(isset($data->workexperience_email_n1_section_i)) value="{{$data->workexperience_email_n1_section_i}}" @endif/> </td>
        </tr>


    </tbody>
</table>

<p>BUSINESS DETAILS</p>
<p>Give details of the address where the business operates</p>

<table>
    <tbody>


        <tr>
                    <td> Country
                        
                    </td>
                    <td>
                        <select name="workexperience_business_country_n1_section_i" id="workexperience_business_country_n1_section_i" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->workexperience_business_country_n1_section_i)))
                            <option value="{{$data->workexperience_business_country_n1_section_i}}" selected>{{$data->workexperience_business_country_n1_section_i}}</option>
                            @endif
                            @include('backend.forms.countrielist')
                        </select>
                    </td>
                </tr>

        

        <tr>
            <td> Address
            </td>
            <td> <input type="text" name="workexperience_business_address_n1_section_i" id="workexperience_business_address_n1_section_i" @if(isset($data->workexperience_business_address_n1_section_i)) value="{{$data->workexperience_business_address_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Suburb / Town
            </td>
            <td> <input type="text" name="workexperience_business_town_n1_section_i" id="workexperience_business_town_n1_section_i" @if(isset($data->workexperience_business_town_n1_section_i)) value="{{$data->workexperience_business_town_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> State / Territory
            </td>
            <td> <input type="tel" name="workexperience_business_state_n1_section_i" id="workexperience_business_state_n1_section_i" @if(isset($data->workexperience_business_state_n1_section_i)) value="{{$data->workexperience_business_state_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Postcode
            </td>
            <td> <input type="tel" name="workexperience_business_postcode_n1_section_i" id="workexperience_business_postcode_n1_section_i" @if(isset($data->workexperience_business_postcode_n1_section_i)) value="{{$data->workexperience_business_postcode_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Is the work address the same as the employer business address?

            </td>
            <td>
                <select name="workexperience_business_work_address_n1_section_i" id="workexperience_business_work_address_n1_section_i" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_business_work_address_n1_section_i)))
                    <option value="{{$data->workexperience_business_work_address_n1_section_i}}" selected>{{$data->workexperience_business_work_address_n1_section_i}}</option>
                    @endif
                    <option value="Yes">Yes </option>
                    <option value="No"> No </option>
                </select>
            </td>
        </tr>


    </tbody>
</table>

<p>WORK CONDITIONS</p>

<table>
    <tbody>



        <tr>
            <td> Employment type
            </td>
            <td> <input type="text" name="workexperience_work_employ_type_n1_section_i" id="workexperience_work_employ_type_n1_section_i" @if(isset($data->workexperience_work_employ_type_n1_section_i)) value="{{$data->workexperience_work_employ_type_n1_section_i}}" @endif/> </td>
        </tr>

        <tr>
            <td> Industry type
            </td>
            <td> <input type="text" name="workexperience_work_indus_type_n1_section_i" id="workexperience_work_indus_type_n1_section_i" @if(isset($data->workexperience_work_indus_type_n1_section_i)) value="{{$data->workexperience_work_indus_type_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Industry type sub-group
            </td>
            <td> <input type="text" name="workexperience_work_indus_type_subgroup_n1_section_i" id="workexperience_work_indus_type_subgroup_n1_section_i" @if(isset($data->workexperience_work_indus_type_subgroup_n1_section_i)) value="{{$data->workexperience_work_indus_type_subgroup_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Description of duties
            </td>
            <td> <input type="text" name="workexperience_work_duties_n1_section_i" id="workexperience_work_duties_n1_section_i" @if(isset($data->workexperience_work_duties_n1_section_i)) value="{{$data->workexperience_work_duties_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date from
            </td>
            <td> <input type="date" name="workexperience_work_date_from_n1_section_i" id="workexperience_work_date_from_n1_section_i" @if(isset($data->workexperience_work_date_from_n1_section_i)) value="{{$data->workexperience_work_date_from_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date to
            </td>
            <td> <input type="date" name="workexperience_work_date_to_n1_section_i" id="workexperience_work_date_to_n1_section_i" @if(isset($data->workexperience_work_date_to_n1_section_i)) value="{{$data->workexperience_work_date_to_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Total hours worked
            </td>
            <td> <input type="text" name="workexperience_work_total_hours_n1_section_i" id="workexperience_work_total_hours_n1_section_i" @if(isset($data->workexperience_work_total_hours_n1_section_i)) value="{{$data->workexperience_work_total_hours_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Total days worked
            </td>
            <td> <input type="text" name="workexperience_work_total_days_n1_section_i" id="workexperience_work_total_days_n1_section_i" @if(isset($data->workexperience_work_total_days_n1_section_i)) value="{{$data->workexperience_work_total_days_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Was the applicant employed under a piece rate agreement?
            </td>
            <td> <input type="text" name="workexperience_work_agreement_n1_section_i" id="workexperience_work_agreement_n1_section_i" @if(isset($data->workexperience_work_agreement_n1_section_i)) value="{{$data->workexperience_work_agreement_n1_section_i}}" @endif/> </td>
        </tr>



    </tbody>
</table>

<p>ACCOMODATION AND TRAVEL ARRANGEMENTS</p>
<p>Give details of the applicant's accommodation and travel arrangements whilst working for this employer</p>

<table>
    <tbody>



        <tr>
            <td> Living arrangements
            </td>
            <td> <input type="text" name="workexperience_accomo_agreement_n1_section_i" id="workexperience_accomo_agreement_n1_section_i" @if(isset($data->workexperience_accomo_agreement_n1_section_i)) value="{{$data->workexperience_accomo_agreement_n1_section_i}}" @endif/> </td>
        </tr>

        <tr>
            <td> Method of travel to work
            </td>
            <td> <input type="text" name="workexperience_accomo_method_n1_section_i" id="workexperience_accomo_method_n1_section_i" @if(isset($data->workexperience_accomo_method_n1_section_i)) value="{{$data->workexperience_accomo_method_n1_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Time taken to travel to work
            </td>
            <td> <input type="text" name="workexperience_accomo_timeTaken_n1_section_i" id="workexperience_accomo_timeTaken_n1_section_i" @if(isset($data->workexperience_accomo_timeTaken_n1_section_i)) value="{{$data->workexperience_accomo_timeTaken_n1_section_i}}" @endif/> </td>
        </tr>




    </tbody>
</table>

<h2 class="fs-title" style="margin-top: 10px;">Employer n.2 </h2>

<table>
    <tbody>



        <tr>
            <td> Legal registered name
            </td>
            <td> <input type="text" name="workexperience_legal_n2_section_i" id="workexperience_legal_n2_section_i" @if(isset($data->workexperience_legal_n2_section_i)) value="{{$data->workexperience_legal_n2_section_i}}" @endif/> </td>
        </tr>

        <tr>
            <td> Trading name
            </td>
            <td> <input type="text" name="workexperience_trading_n2_section_i" id="workexperience_trading_n2_section_i" @if(isset($data->workexperience_trading_n2_section_i)) value="{{$data->workexperience_trading_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Australian Business Number (ABN)
            </td>
            <td> <input type="text" name="workexperience_abn_n2_section_i" id="workexperience_abn_n2_section_i" @if(isset($data->workexperience_abn_n2_section_i)) value="{{$data->workexperience_abn_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Is the employer a labour hire company

            </td>
            <td>
                <select name="workexperience_labour_n2_section_i" id="workexperience_labour_n2_section_i" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_labour_n2_section_i)))
                    <option value="{{$data->workexperience_labour_n2_section_i}}" selected>{{$data->workexperience_labour_n2_section_i}}</option>
                    @endif
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </td>
        </tr>

    </tbody>
</table>

<p>EMPLOYER CONTACT</p>

<table>
    <tbody>



        <tr>
            <td> Family name
            </td>
            <td> <input type="text" name="workexperience_familyname_n2_section_i" id="workexperience_familyname_n2_section_i" @if(isset($data->workexperience_familyname_n2_section_i)) value="{{$data->workexperience_familyname_n2_section_i}}" @endif/> </td>
        </tr>

        <tr>
            <td> Given names
            </td>
            <td> <input type="text" name="workexperience_given_name_n2_section_i" id="workexperience_given_name_n2_section_i" @if(isset($data->workexperience_given_name_n2_section_i)) value="{{$data->workexperience_given_name_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Position
            </td>
            <td> <input type="text" name="workexperience_position_n2_section_i" id="workexperience_position_n2_section_i" @if(isset($data->workexperience_position_n2_section_i)) value="{{$data->workexperience_position_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Business phone
            </td>
            <td> <input type="tel" name="workexperience_business_phone_n2_section_i" id="workexperience_business_phone_n2_section_i" @if(isset($data->workexperience_business_phone_n2_section_i)) value="{{$data->workexperience_business_phone_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Mobile / Cell phone
            </td>
            <td> <input type="tel" name="workexperience_mobile_cell_n2_section_i" id="workexperience_mobile_cell_n2_section_i" @if(isset($data->workexperience_mobile_cell_n2_section_i)) value="{{$data->workexperience_mobile_cell_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Email address
            </td>
            <td> <input type="text" name="workexperience_email_n2_section_i" id="workexperience_email_n2_section_i" @if(isset($data->workexperience_email_n2_section_i)) value="{{$data->workexperience_email_n2_section_i}}" @endif/> </td>
        </tr>


    </tbody>
</table>

<p>BUSINESS DETAILS</p>
<p>Give details of the address where the business operates</p>

<table>
    <tbody>

        <tr>
                    <td> Country
                        
                    </td>
                    <td>
                        <select name="workexperience_business_country_n2_section_i" id="workexperience_business_country_n2_section_i" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->workexperience_business_country_n2_section_i)))
                            <option value="{{$data->workexperience_business_country_n2_section_i}}" selected>{{$data->workexperience_business_country_n2_section_i}}</option>
                            @endif
                            @include('backend.forms.countrielist')
                        </select>
                    </td>
                </tr>

        <tr>
            <td> Address
            </td>
            <td> <input type="text" name="workexperience_business_address_n2_section_i" id="workexperience_business_address_n2_section_i" @if(isset($data->workexperience_business_address_n2_section_i)) value="{{$data->workexperience_business_address_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Suburb / Town
            </td>
            <td> <input type="text" name="workexperience_business_town_n2_section_i" id="workexperience_business_town_n2_section_i" @if(isset($data->workexperience_business_town_n2_section_i)) value="{{$data->workexperience_business_town_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> State / Territory
            </td>
            <td> <input type="text" name="workexperience_business_state_n2_section_i" id="workexperience_business_state_n2_section_i" @if(isset($data->workexperience_business_state_n2_section_i)) value="{{$data->workexperience_business_state_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Postcode
            </td>
            <td> <input type="text" name="workexperience_business_postcode_n2_section_i" id="workexperience_business_postcode_n2_section_i" @if(isset($data->workexperience_business_postcode_n2_section_i)) value="{{$data->workexperience_business_postcode_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Is the work address the same as the employer business address?

            </td>
            <td>
                <select name="workexperience_business_work_address_n2_section_i" id="workexperience_business_work_address_n2_section_i" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_business_work_address_n2_section_i)))
                    <option value="{{$data->workexperience_business_work_address_n2_section_i}}" selected>{{$data->workexperience_business_work_address_n2_section_i}}</option>
                    @endif
                    <option value="Yes">Yes </option>
                    <option value="No"> No </option>
                </select>
            </td>
        </tr>


    </tbody>
</table>

<p>WORK CONDITIONS</p>

<table>
    <tbody>



        <tr>
            <td> Employment type
            </td>
            <td> <input type="text" name="workexperience_work_employ_type_n2_section_i" id="workexperience_work_employ_type_n2_section_i" @if(isset($data->workexperience_work_employ_type_n2_section_i)) value="{{$data->workexperience_work_employ_type_n2_section_i}}" @endif/> </td>
        </tr>

        <tr>
            <td> Industry type
            </td>
            <td> <input type="text" name="workexperience_work_indus_type_n2_section_i" id="workexperience_work_indus_type_n2_section_i" @if(isset($data->workexperience_work_indus_type_n2_section_i)) value="{{$data->workexperience_work_indus_type_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Industry type sub-group
            </td>
            <td> <input type="text" name="workexperience_work_indus_type_subgroup_n2_section_i" id="workexperience_work_indus_type_subgroup_n2_section_i" @if(isset($data->workexperience_work_indus_type_subgroup_n2_section_i)) value="{{$data->workexperience_work_indus_type_subgroup_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Description of duties
            </td>
            <td> <input type="text" name="workexperience_work_duties_n2_section_i" id="workexperience_work_duties_n2_section_i" @if(isset($data->workexperience_work_duties_n2_section_i)) value="{{$data->workexperience_work_duties_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date from
            </td>
            <td> <input type="date" name="workexperience_work_date_from_n2_section_i" id="workexperience_work_date_from_n2_section_i" @if(isset($data->workexperience_work_date_from_n2_section_i)) value="{{$data->workexperience_work_date_from_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date to
            </td>
            <td> <input type="date" name="workexperience_work_date_to_n2_section_i" id="workexperience_work_date_to_n2_section_i" @if(isset($data->workexperience_work_date_to_n2_section_i)) value="{{$data->workexperience_work_date_to_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Total hours worked
            </td>
            <td> <input type="text" name="workexperience_work_total_hours_n2_section_i" id="workexperience_work_total_hours_n2_section_i" @if(isset($data->workexperience_work_total_hours_n2_section_i)) value="{{$data->workexperience_work_total_hours_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Total days worked
            </td>
            <td> <input type="text" name="workexperience_work_total_days_n2_section_i" id="workexperience_work_total_days_n2_section_i" @if(isset($data->workexperience_work_total_days_n2_section_i)) value="{{$data->workexperience_work_total_days_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Was the applicant employed under a piece rate agreement?
            </td>
            <td> <input type="text" name="workexperience_work_agreement_n2_section_i" id="workexperience_work_agreement_n2_section_i" @if(isset($data->workexperience_work_agreement_n2_section_i)) value="{{$data->workexperience_work_agreement_n2_section_i}}" @endif/> </td>
        </tr>



    </tbody>
</table>

<p>ACCOMODATION AND TRAVEL ARRANGEMENTS</p>
<p>Give details of the applicant's accommodation and travel arrangements whilst working for this employer</p>

<table>
    <tbody>



        <tr>
            <td> Living arrangements
            </td>
            <td> <input type="text" name="workexperience_accomo_agreement_n2_section_i" id="workexperience_accomo_agreement_n2_section_i" @if(isset($data->workexperience_accomo_agreement_n2_section_i)) value="{{$data->workexperience_accomo_agreement_n2_section_i}}" @endif/> </td>
        </tr>

        <tr>
            <td> Method of travel to work
            </td>
            <td> <input type="text" name="workexperience_accomo_method_n2_section_i" id="workexperience_accomo_method_n2_section_i" @if(isset($data->workexperience_accomo_method_n2_section_i)) value="{{$data->workexperience_accomo_method_n2_section_i}}" @endif/> </td>
        </tr>
        <tr>
            <td> Time taken to travel to work
            </td>
            <td> <input type="text" name="workexperience_accomo_timeTaken_n2_section_i" id="workexperience_accomo_timeTaken_n2_section_i" @if(isset($data->workexperience_accomo_timeTaken_n2_section_i)) value="{{$data->workexperience_accomo_timeTaken_n2_section_i}}" @endif/> </td>
        </tr>




    </tbody>
</table>