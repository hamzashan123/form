<fieldset id="fieldsetone">
    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 1:</h2>
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">MATRIX:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 1 - 14 </h2>
            </div>
        </div>

        <table>
            <tbody>
                <tr>
                    <td> Name and Surname </td>
                    <td> <input type="text" name="matrix_name_and_surname" id="matrix_name_and_surname" />
                    </td>
                </tr>


                <tr>
                    <td> What is your age ? </td>
                    <td> <input type="text" name="matrix_age" id="matrix_age" />
                    </td>
                </tr>

                <tr>
                    <td> Are you currently in Australia or New Zealand? </td>
                    <td>
                        <select name="matrix_aus_or_nz" id="matrix_aus_or_nz" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> If yes, please indicate where you are located </td>
                    <td>
                        <select name="matrix_located" id="matrix_located" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="aus"> Australia </option>
                            <option value="nz"> New Zealand </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td> If in Australia or New Zealand, what visa do you hold? </td>
                    <td> <input type="text" name="matrix_visahold" id="matrix_visahold" />
                    </td>
                </tr>

                <tr>
                    <td>If in Australia or New Zealand, when does your visa
                        expire </td>
                    <td> <input type="date" name="matrix_visaexpire" id="matrix_visaexpire" />
                    </td>
                </tr>

                <tr>
                    <td> What is your occupation </td>
                    <td> <input type="text" name="matrix_occupation" id="matrix_occupation" />
                    </td>
                </tr>

                <tr>
                    <td>Level of English Basic</td>
                    <td>
                        <select name="matrix_levelofenglish" id="matrix_levelofenglish" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="basic"> Basic </option>
                            <option value="competent"> Competent </option>
                            <option value="proficient"> Proficient </option>
                            <option value="superior"> Superior </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Years of work experience in Australia or New Zealand
                        in your occupation
                    </td>

                    <td>
                        <select name="matrix_yearofexperienceinausornz" id="matrix_yearofexperienceinausornz" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="lessthanoneyear"> Less than 1 year </option>
                            <option value="atleastoneyear"> At least 1 year </option>
                            <option value="atleastthreeyear">At least 3 year </option>
                            <option value="atleastfiveyear"> At least 5 year </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>Years of work experience outside of Australia or New
                        Zealand in your occupation</td>
                    <td>
                        <select name="matrix_yearofexperienceoutsideausornz" id="matrix_yearofexperienceoutsideausornz" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="lessthanoneyear"> Less than 3 year </option>
                            <option value="atleastoneyear"> More than 3 year </option>
                            <option value="atleastfiveyear"> At least 5 year </option>
                            <option value="atleasteightyear"> At least 8 year </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Highest education qualification obtained</td>
                    <td>
                        <select name="matrix_highesteducationqualification" id="matrix_highesteducationqualification" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yeareight"> Year 8 </option>
                            <option value="twelveThirteen"> Year 12/13 Maturità </option>
                            <option value="vocational"> Vocational technical course </option>
                            <option value="bachelorsOrMaster"> Bachelor or Master’s degree course </option>
                            <option value="phd"> PhD </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Are you coming to Australia or New Zealand or
                        extending your stay to study?</td>
                    <td>
                        <select name="matrix_areyoucomingtoausornz" id="matrix_areyoucomingtoausornz" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, please indicate what course of study/studies
                        you will be enrolling in</td>
                    <td> <input type="text" name="matrix_enrolling" id="matrix_enrolling" />
                    </td>
                </tr>


                <tr>
                    <td>Do you have a skills assessment YES – NO</td>
                    <td>
                        <select name="matrix_skillassessment" id="matrix_skillassessment" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>If yes, indicate for what occupation</td>
                    <td> <input type="text" name="matrix_indicateoccupation" id="matrix_indicateoccupation" />
                    </td>
                </tr>

                <tr>
                    <td>Have you taken one of the following English tests?</td>
                    <td>
                        <select name="matrix_englishtest" id="matrix_englishtest" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="ielts"> IELTS </option>
                            <option value="pte"> PTE Academic </option>
                            <option value="toefl"> TOEFL </option>
                            <option value="oet"> OET </option>
                            <option value="cae"> CAE Advanced </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, please indicate when the test was taken
                    </td>
                    <td> <input type="date" name="matrix_indicatetesttaken" id="matrix_indicatetesttaken" />
                    </td>
                </tr>

                <tr>
                    <td>Will your family members (partner/children) be
                        included in your visa application?
                    </td>

                    <td>
                        <select name="matrix_familymember" id="matrix_familymember" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>

                </tr>

                <tr>
                    <td>If yes, please indicate who will be included in the
                        application
                    </td>
                    <td> <input type="date" name="matrix_indicateincluded" id="matrix_indicateincluded" />
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>