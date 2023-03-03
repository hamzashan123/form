<h2 class="fs-title" style="margin-top: 10px;"> </h2>
<h2 class="fs-title" style="margin-top: 10px;"> PART G 407 training visa </h2>
<p>INFO</p>

<table>
    <tbody>


        <tr>
            <td> What type of position will you be undertaking for this visa
            </td>
            <td> <input type="text" name="workexperience_position_section_g" id="workexperience_position_section_g" @if(isset($data->workexperience_position_section_g)) value="{{$data->workexperience_position_section_g}}" @endif/> </td>
        </tr>

        <tr>
            <td> And training will you be undertaking in Australia. Please indicate your role and describe the
            </td>
            <td> <input type="text" name="workexperience_training_section_g" id="workexperience_training_section_g" @if(isset($data->workexperience_training_section_g)) value="{{$data->workexperience_training_section_g}}" @endif/> </td>
        </tr>
        <tr>
            <td> Describe the main 5 Duties / activities you will be performing
            </td>
            <td> <input type="text" name="workexperience_describe_duties_activities_section_g" id="workexperience_describe_duties_activities_section_g" @if(isset($data->workexperience_describe_duties_activities_section_g)) value="{{$data->workexperience_describe_duties_activities_section_g}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date when the training will commence
            </td>
            <td> <input type="date" name="workexperience_training_date_section_g" id="workexperience_training_date_section_g" @if(isset($data->workexperience_training_date_section_g)) value="{{$data->workexperience_training_date_section_g}}" @endif/> </td>
        </tr>

        <tr>
            <td> Date when the training will end
            </td>
            <td> <input type="date" name="workexperience_training_date_end_section_g" id="workexperience_training_date_end_section_g" @if(isset($data->workexperience_training_date_end_section_g)) value="{{$data->workexperience_training_date_end_section_g}}" @endif/> </td>
        </tr>


        <tr>
            <td> Total duration

            </td>
            <td>
                <select name="workexperience_total_duration_section_g" id="workexperience_total_duration_section_g" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_total_duration_section_g)))
                    <option value="{{$data->workexperience_total_duration_section_g}}" selected>{{$data->workexperience_total_duration_section_g}}</option>
                    @endif
                    <option value="1 YEAR">1 YEAR </option>
                    <option value="2 YEARS">2 YEARS </option>
                </select>
            </td>
        </tr>


        <tr>
            <td> Legal registered name of your sponsor
            </td>
            <td> <input type="text" name="workexperience_legal_registered_section_g" id="workexperience_legal_registered_section_g" @if(isset($data->workexperience_legal_registered_section_g)) value="{{$data->workexperience_legal_registered_section_g}}" @endif/> </td>
        </tr>
        <tr>
            <td> Trading name of the sponsor
            </td>
            <td> <input type="text" name="workexperience_trading_name_section_g" id="workexperience_trading_name_section_g" @if(isset($data->workexperience_trading_name_section_g)) value="{{$data->workexperience_trading_name_section_g}}" @endif/> </td>
        </tr>
        <tr>
            <td> ABN of the sponsor
            </td>
            <td> <input type="text" name="workexperience_abn_sponsor_section_g" id="workexperience_abn_sponsor_section_g" @if(isset($data->workexperience_abn_sponsor_section_g)) value="{{$data->workexperience_abn_sponsor_section_g}}" @endif/> </td>
        </tr>
        <tr>
            <td> Adress of the business
            </td>
            <td> <input type="text" name="workexperience_business_address_section_g" id="workexperience_business_address_section_g" @if(isset($data->workexperience_business_address_section_g)) value="{{$data->workexperience_business_address_section_g}}" @endif/> </td>
        </tr>
        <tr>
            <td> Sector of the business in which the sponsor operates in
            </td>
            <td> <input type="text" name="workexperience_business_sector_section_g" id="workexperience_business_sector_section_g" @if(isset($data->workexperience_business_sector_section_g)) value="{{$data->workexperience_business_sector_section_g}}" @endif/> </td>
        </tr>

        <tr>
            <td> Will you be paid for undertaking the training activity in Australia

            </td>
            <td>
                <select name="workexperience_paid_for_undertaking_section_g" id="workexperience_paid_for_undertaking_section_g" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_paid_for_undertaking_section_g)))
                    <option value="{{$data->workexperience_paid_for_undertaking_section_g}}" selected>{{$data->workexperience_paid_for_undertaking_section_g}}</option>
                    @endif
                    <option value="Yes">Yes </option>
                    <option value="No"> No </option>
                </select>
            </td>
        </tr>

        <tr>
            <td> How much will you be paid each year?
            </td>
            <td> <input type="text" name="workexperience_paid_each_year_section_g" id="workexperience_paid_each_year_section_g" @if(isset($data->workexperience_paid_each_year_section_g)) value="{{$data->workexperience_paid_each_year_section_g}}" @endif/> </td>
        </tr>

        <tr>
            <td> How frequently will you be paid?

            </td>
            <td>
                <select name="workexperience_paid_frequently_section_g" id="workexperience_paid_frequently_section_g" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_paid_frequently_section_g)))
                    <option value="{{$data->workexperience_paid_frequently_section_g}}" selected>{{$data->workexperience_paid_frequently_section_g}}</option>
                    @endif
                    <option value="Every week">Every week</option>
                    <option value="2 weeks">2 weeks</option>
                    <option value="Monthly">Monthly</option>
                </select>
            </td>
        </tr>

    </tbody>
</table>