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
                    <td> <input type="text" name="nomination_intra_company_transfer" id="nomination_intra_company_transfer" /> </td>
                </tr>


                <tr>
                    <td> Indicate the annual turnover of the
                        business for the last financial year
                    </td>
                    <td> <input type="text" name="nomination_financial_year" id="nomination_financial_year" /> </td>
                </tr>

                <tr>
                    <td> What is the job title you are offering to the
                        visa applicant
                    </td>
                    <td> <input type="text" name="nomination_job_offering" id="nomination_job_offering" /> </td>
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
                        including information about why this position cannot be filled from the local
                        labour market:

                    </td>
                    <td> <input type="text" name="nomination_position" id="nomination_position" /> </td>
                </tr>


            </tbody>
        </table>

        <h2 class="fs-title"> QUALIFICATIONS AND EXPERIENCE NEEDED FOR THE POSITION NEEDED </h2>

        <p> Describe the qualifications, relevant skills, employment experience and
            registrations/licenses required to be held by the nominee </p>

        <table>

            <tbody>

                <tr>
                    <td> Relevant qualifications needed</td>
                    <td> <input type="text" name="qua_and_exp_relevant" id="qua_and_exp_relevant" /> </td>
                </tr>


                <tr>
                    <td>Relevant skills needed</td>
                    <td> <input type="text" name="qua_and_exp_skills" id="qua_and_exp_skills" /> </td>
                </tr>

                <tr>
                    <td>Does the position require the applicant to
                        hold a licence, registration or professional
                        membership? If so, please specify. Also,
                        please specify if the applicant can perform
                        work under supervision of another person
                        who holds licence/registration</td>
                    <td> <input type="text" name="qua_and_exp_license" id="qua_and_exp_license" /> </td>
                </tr>


                <tr>
                    <td>Has your business retrenched any Australian
                        citizens or Australian permanent residents in
                        the nominated occupation, or made their
                        positions redundant, in the last four months?</td>
                    <td> <input type="text" name="qua_and_exp_four_month" id="qua_and_exp_four_month" /> </td>
                </tr>

                <tr>
                    <td>Does your business operate in the
                        Agricultural sector?</td>
                    <td> <input type="text" name="qua_and_exp_agriculture" id="qua_and_exp_agriculture" /> </td>
                </tr>

            </tbody>
        </table>


        <h2 class="fs-title"> SALARY FOR THE POSITION NEEDED </h2>

        <table>
            <tbody>

                <tr>
                    <td> What annual salary are you offering the visa
                        applicant?
                    </td>
                    <td> <input type="text" name="salary_offering_visa_applicant" id="salary_offering_visa_applicant" /> </td>
                </tr>

                <tr>
                    <td> Are there any non-monetary components of
                        the nominee’s salary?
                    </td>
                    <td>
                        <select name="salary_non-monetary" id="salary_non-monetary" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td> If Yes, please specify
                    </td>
                    <td> <input type="text" name="salary_offering_visa_applicant_specify" id="salary_offering_visa_applicant_specify" /> </td>
                </tr>


                <tr>
                    <td>How many years of contract are you willing
                        to offer the visa applicant
                    </td>
                    <td>
                        <select name="salary_year_of_contract" id="salary_year_of_contract-monetary" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> 1 year </option>
                            <option value="no"> 2 year </option>
                            <option value="yes"> 3 year </option>
                            <option value="no"> 4 year </option>
                        </select>

                    </td>
                </tr>


                <tr>
                    <td> What annual salary will you be offering the
                        visa applicant? Please indicate the net salary
                        offered to the applicant NOT including
                        superannuation

                    </td>
                    <td> <input type="text" name="salary_annual" id="salary_annual" /> </td>
                </tr>

                <tr>
                    <td> How many hours per week will the applicant
                        be working (please note that a minimum of
                        38 hours per week is required)

                    </td>
                    <td> <input type="text" name="salary_hours_per_week" id="salary_hours_per_week" /> </td>
                </tr>

                <tr>
                    <td>Are you able to indicate how you elaborated
                        the annual salary rate you are willing to
                        offer the visa applicant?

                    </td>
                    <td> <input type="text" name="salary_eloborate_annual_salary" id="salary_eloborate_annual_salary" /> </td>
                </tr>

                <tr>
                    <td> Do you already have an Australian citizen
                        and/or a Permanent resident working in the
                        same position offered to the visa applicant?
                    </td>
                    <td>
                        <select name="salary_permanent_resident" id="salary_permanent_resident" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td>If yes, please indicate the annual salary of
                        this person

                    </td>
                    <td> <input type="text" name="salary_permanent_resident_indicate" id="salary_permanent_resident_indicate" /> </td>
                </tr>


                <tr>
                    <td> If you do have an Australian citizen and/or
                        PR resident, are you willing to pay the visa
                        applicant the same annual salary?
                    </td>
                    <td>
                        <select name="salary_citizen" id="salary_citizen" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>

                    </td>
                </tr>

            </tbody>
        </table>


        <h2 class="fs-title" style="margin-top: 10px;">NOMINATION – DOCS TO UPLOAD FOR THE POSITION NEEDED
        </h2>


        <table>
            <tbody>

                <tr>
                    <td> Job description/Duty Statement of the
                        position to be offered to the applicant </td>
                    <td> <input type="file" name="nomination_job_description" id="nomination_job_description"></td>
                </tr>
            </tbody>
        </table>

        <p> Employment contract to be offered to the
            applicant. Please note the contract must
            be: </p>


        <table>
            <tbody>
                <tr>
                    <td> 1) Dated after the 28 days period of
                        the job ads </td>
                    <td> <input type="file" name="nomination_period_of_job" id="nomination_period_of_job"></td>
                </tr>

                <tr>
                    <td> 2) Indicate the name and surname of
                        the applicant</td>
                    <td> <input type="file" name="nomination_name_and_surname" id="nomination_name_and_surname"></td>
                </tr>

                <tr>
                    <td> 3) Indicate "upon visa approval" for
                        the Start date</td>
                    <td> <input type="file" name="nomination_start_date_doc" id="nomination_start_date_doc"></td>
                </tr>

                <tr>
                    <td> 4) Indicate the gross annual salary rate</td>
                    <td> <input type="file" name="nomination_gross_annual_salary" id="nomination_gross_annual_salary"></td>
                </tr>

                <tr>
                    <td> 5) Indicate the super annuation in
                        addition to the gross annual salary
                        rate</td>
                    <td> <input type="file" name="nomination_super_annuation" id="nomination_super_annuation"></td>
                </tr>

                <tr>
                    <td> 6) Indicate any other monetary
                        components as a separate figure to
                        the annual gross salary</td>
                    <td> <input type="file" name="nomination_separate_figure" id="nomination_separate_figure"></td>
                </tr>



            </tbody>
        </table>

    </div>
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>