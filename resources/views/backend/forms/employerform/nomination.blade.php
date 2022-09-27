<fieldset id="fieldsettwo">
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">NOMINATION – POSITION NEEDED</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 2 - 4</h2>
            </div>
        </div>


        <h2 class="fs-title"> DETAILS OF THE POSITION YOU ARE WILLING TO OFFER </h2>

        <table>


            <tbody>
                <tr>
                    <td> Indicate where the visa applicant will be
                        working (full address)</td>
                    <td> <input type="text" name="nomination_visa_appliciant" id="nomination_visa_appliciant" @if(isset($data['education'][0]->edu_info_junior_fullname)) value="{{$data['education'][0]->edu_info_junior_fullname}}" @endif /> </td>
                </tr>


                <tr>
                    <td> Is this an intra-company transfer? (when
                        the applicant has been working for a
                        subsidiary and/or branch of the Australian
                        company outside of Australia)</td>
                    <td> <input type="text" name="nomination_intra_company_transfer" id="nomination_intra_company_transfer" @if(isset($data['education'][0]->edu_info_junior_fullname)) value="{{$data['education'][0]->edu_info_junior_fullname}}" @endif /> </td>
                </tr>


                <tr>
                    <td> Indicate the annual turnover of the
                        business for the last financial year
                    </td>
                    <td> <input type="text" name="nomination_financial_year" id="nomination_financial_year" @if(isset($data['education'][0]->edu_info_junior_fullname)) value="{{$data['education'][0]->edu_info_junior_fullname}}" @endif /> </td>
                </tr>

                <tr>
                    <td> What is the job title you are offering to the
                        visa applicant
                    </td>
                    <td> <input type="text" name="nomination_job_offering" id="nomination_job_offering" @if(isset($data['education'][0]->edu_info_junior_fullname)) value="{{$data['education'][0]->edu_info_junior_fullname}}" @endif /> </td>
                </tr>


                <tr>
                    <td>Are you able to find the most suitable
                        occupation from this dropdown menu? If
                        so, please select it</td>

                    <td>
                        <select class="form-control" id="nomination_job_occupation" name="nomination_job_occupation">
                            <option value="">SELECT </option>
                            <option value="1">- Chiropractor</option>
                            <option value="2">- Dentist</option>
                            <option value="3">- Dietitian or Nutritionist</option>
                            <option value="4">- Optometrist</option>
                            <option value="5">- Pharmacist</option>
                            <option value="6">- Physician</option>
                            <option value="7">- Physician Assistant</option>
                            <option value="8">- Podiatrist</option>
                            <option value="9">- Registered Nurse</option>
                            <option value="10">- Therapist</option>
                            <option value="11">- Veterinarian</option>
                            <option value="12">- Health Technologist or Technician</option>
                            <option value="13">- Other Healthcare Practitioners and Technical Occupation</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Indicate the main duties and responsibilities
                        that the applicant will be performing
                        (ideally please indicate 5 duties)
                    </td>
                    <td> <input type="text" name="nomination_responsibilities" id="nomination_responsibilities" /> </td>
                </tr>


                <tr>
                    <td>Indicate the main tasks to be performed
                    </td>
                    <td> <input type="text" name="nomination_performed" id="nomination_performed" /> </td>
                </tr>

                <tr>
                    <td>Other information about the position,
                        including information about why this
                    </td>
                    <td> <input type="text" name="nomination_position" id="nomination_position" /> </td>
                </tr>


            </tbody>
        </table>





    </div>
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>