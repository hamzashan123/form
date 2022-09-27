<fieldset id="fieldsettwelve">
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">- HEALTH QUESTIONS</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 12 - 14</h2>
            </div>
        </div>

        <table>
            <tbody>

                <tr>
                    <td> 1) Does any applicant intend to enter a hospital or a
                        health care facility (including nursing homes)
                        while in Australia or New Zealand? </td>
                    <td>
                        <select name="healthquestion_aus_or_nz" id="healthquestion_aus_or_nz" class="form-control">
                            <option value="selectoption"> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td> 2) Does any applicant intend to work as, or study to
                        be a doctor, dentist, nurse or paramedic during
                        their stay in Australia or New Zealand? </td>
                    <td> <input type="checkbox" name="healthquestion_paramedic" id="healthquestion_paramedic" /> </td>
                </tr>

                <tr>
                    <td> 3) Does any applicant intend to work or be a trainee
                        at a childcare centre (including preschools and
                        creches) while in Australia or New Zealand? </td>
                    <td> <input type="checkbox" name="healthquestion_childcare" id="healthquestion_childcare" /> </td>
                </tr>


                <tr>
                    <td> 4) Does any applicant intend to be in a classroom
                        situation for more than 3 months (eg. as either a
                        student, teacher, lecturer or observer)? </td>
                    <td> <input type="checkbox" name="healthquestion_classroom" id="healthquestion_classroom" /> </td>
                </tr>

                <tr>
                    <td> 5) Ever had, or currently have, tuberculosis? </td>
                    <td> <input type="checkbox" name="healthquestion_tuberculosis" id="healthquestion_tuberculosis" /> </td>
                </tr>

                <tr>
                    <td> 6) been in close contact with a family member that
                        has active tuberculosis? </td>
                    <td> <input type="checkbox" name="healthquestion_familymember_tuberculosis" id="healthquestion_familymember_tuberculosis" /> </td>
                </tr>

                <tr>
                    <td> 7) ever had a chest x-ray which showed an
                        abnormality? </td>
                    <td> <input type="checkbox" name="healthquestion_xray" id="healthquestion_xray" /> </td>
                </tr>

                <tr>
                    <td> If you answered YES to any questions, indicate YES, specify
                        what question number refers to you and provide further
                        details in the following box:</td>
                    <td> <input type="text" name="healthquestion_indicate_if_yes" id="healthquestion_indicate_if_yes" /> </td>
                </tr>



            </tbody>
        </table>


        <table>
            <tbody>

                <tr>
                    <td> During their proposed visit to Australia or New Zealand, do
                        you expect to incur medical costs, or require treatment or
                        medical follow up for: </td>
                    <td>
                        <select name="healthquestion_medicalcosts" id="healthquestion_medicalcosts" class="form-control">
                            <option value="selectoption"> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td> 1) Blood disorder </td>
                    <td> <input type="checkbox" name="healthquestion_blood" id="healthquestion_blood" /> </td>
                </tr>

                <tr>
                    <td> 2) Cancer
                    </td>
                    <td> <input type="checkbox" name="healthquestion_cancer" id="healthquestion_cancer" /> </td>
                </tr>


                <tr>
                    <td> 3) Heart disease </td>
                    <td> <input type="checkbox" name="healthquestion_heart" id="healthquestion_heart" /> </td>
                </tr>

                <tr>
                    <td> 4) Hepatitis B or C and/or liver disease </td>
                    <td> <input type="checkbox" name="healthquestion_hepatitis" id="healthquestion_hepatitis" /> </td>
                </tr>

                <tr>
                    <td> 5) HIV infection, including AIDS </td>
                    <td> <input type="checkbox" name="healthquestion_hiv" id="healthquestion_hiv" /> </td>
                </tr>

                <tr>
                    <td> 6) Kidney disease, including dialysis </td>
                    <td> <input type="checkbox" name="healthquestion_kidney" id="healthquestion_kidney" /> </td>
                </tr>

                <tr>
                    <td> 7) Mental illness</td>
                    <td> <input type="checkbox" name="healthquestion_mental" id="healthquestion_mental" /> </td>
                </tr>

                <tr>
                    <td> 8) Pregnancy </td>
                    <td> <input type="checkbox" name="healthquestion_pregnancy" id="healthquestion_pregnancy" /> </td>
                </tr>

                <tr>
                    <td> 9) Respiratory disease that has required hospital
                        admission or oxygen therapy </td>
                    <td> <input type="checkbox" name="healthquestion_respiratory1" id="healthquestion_respiratory1" /> </td>
                </tr>

                <tr>
                    <td> 10) Respiratory disease that has required hospital
                        admission or oxygen therapy </td>
                    <td> <input type="checkbox" name="healthquestion_respiratory1" id="healthquestion_respiratory1" /> </td>
                </tr>

                <tr>
                    <td> 11) Do you require assistance with mobility or care
                        due to a medical condition? </td>
                    <td> <input type="checkbox" name="healthquestion_medical_condition" id="healthquestion_medical_condition" /> </td>
                </tr>


                <tr>
                    <td> If you answered YES to any questions, indicate YES, specify
                        what question number refers to you and provide further
                        details in the following box:
                    </td>
                    <td> <input type="text" name="healthquestion_question_number_if_yes" id="healthquestion_question_number_if_yes" /> </td>
                </tr>



            </tbody>
        </table>


    </div>
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>