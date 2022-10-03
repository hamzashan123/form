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
                    <td> <input type="text" name="matrix_name_and_surname" id="matrix_name_and_surname" @if(isset($data->matrix_name_and_surname)) value="{{$data->matrix_name_and_surname}}" @endif />
                    </td>
                </tr>


                <tr>
                    <td> What is your age ? </td>
                    <td> <input type="text" name="matrix_age" id="matrix_age" @if(isset($data->matrix_age)) value="{{$data->matrix_age}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Are you currently in Australia or New Zealand? </td>
                    <td>
                        <select name="matrix_aus_or_nz" id="matrix_aus_or_nz" class="form-control">
                           
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->matrix_aus_or_nz)))
                                <option value="{{$data->matrix_aus_or_nz}}" selected>{{$data->matrix_aus_or_nz}}</option>
                            @endif
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
                            @if(!empty(isset($data->matrix_located)))
                                <option value="{{$data->matrix_located}}" selected>{{$data->matrix_located}}</option>
                            @endif
                            <option value="aus"> Australia </option>
                            <option value="nz"> New Zealand </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td> If in Australia or New Zealand, what visa do you hold? </td>
                    <td> <input type="text" name="matrix_visahold" id="matrix_visahold" @if(isset($data->matrix_visahold)) value="{{$data->matrix_visahold}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td>If in Australia or New Zealand, when does your visa
                        expire </td>
                    <td> <input type="date" name="matrix_visaexpire" id="matrix_visaexpire" @if(isset($data->matrix_visaexpire)) value="{{$data->matrix_visaexpire}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> What is your occupation </td>
                    <td> <input type="text" name="matrix_occupation" id="matrix_occupation" @if(isset($data->matrix_occupation)) value="{{$data->matrix_occupation}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td>Level of English Basic</td>
                    <td>
                        <select name="matrix_levelofenglish" id="matrix_levelofenglish" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->matrix_levelofenglish)))
                                <option value="{{$data->matrix_levelofenglish}}" selected>{{$data->matrix_levelofenglish}}</option>
                            @endif
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
                            @if(!empty(isset($data->matrix_yearofexperienceinausornz)))
                                <option value="{{$data->matrix_yearofexperienceinausornz}}" selected>{{$data->matrix_yearofexperienceinausornz}}</option>
                            @endif
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
                            @if(!empty(isset($data->matrix_yearofexperienceoutsideausornz)))
                                <option value="{{$data->matrix_yearofexperienceoutsideausornz}}" selected>{{$data->matrix_yearofexperienceoutsideausornz}}</option>
                            @endif
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
                            @if(!empty(isset($data->matrix_highesteducationqualification)))
                                <option value="{{$data->matrix_highesteducationqualification}}" selected>{{$data->matrix_highesteducationqualification}}</option>
                            @endif
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
                            @if(!empty(isset($data->matrix_areyoucomingtoausornz)))
                                <option value="{{$data->matrix_areyoucomingtoausornz}}" selected>{{$data->matrix_areyoucomingtoausornz}}</option>
                            @endif
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, please indicate what course of study/studies
                        you will be enrolling in</td>
                    <td> <input type="text" name="matrix_enrolling" id="matrix_enrolling" @if(isset($data->matrix_enrolling)) value="{{$data->matrix_enrolling}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td>Do you have a skills assessment YES – NO</td>
                    <td>
                        <select name="matrix_skillassessment" id="matrix_skillassessment" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->matrix_skillassessment)))
                                <option value="{{$data->matrix_skillassessment}}" selected>{{$data->matrix_skillassessment}}</option>
                            @endif
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>If yes, indicate for what occupation</td>
                    <td> <input type="text" name="matrix_indicateoccupation" id="matrix_indicateoccupation" @if(isset($data->matrix_indicateoccupation)) value="{{$data->matrix_indicateoccupation}}" @endif />
                    </td>
                </tr>

                <tr>
                    <td>Have you taken one of the following English tests?</td>
                    <td>
                        <select name="matrix_englishtest" id="matrix_englishtest" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->matrix_englishtest)))
                                <option value="{{$data->matrix_englishtest}}" selected>{{$data->matrix_englishtest}}</option>
                            @endif
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
                    <td> <input type="date" name="matrix_indicatetesttaken" id="matrix_indicatetesttaken" @if(isset($data->matrix_indicatetesttaken)) value="{{$data->matrix_indicatetesttaken}}" @endif />
                    </td>
                </tr>

                <tr>
                    <td>Will your family members (partner/children) be
                        included in your visa application?
                    </td>

                    <td>
                        <select name="matrix_familymember" id="matrix_familymember" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->matrix_familymember)))
                                <option value="{{$data->matrix_familymember}}" selected>{{$data->matrix_familymember}}</option>
                            @endif
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>

                </tr>

                <tr>
                    <td>If yes, please indicate who will be included in the
                        application
                    </td>
                    <td> <input type="date" name="matrix_indicateincluded" id="matrix_indicateincluded" @if(isset($data->matrix_indicateincluded)) value="{{$data->matrix_indicateincluded}}" @endif/>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
    @if(!Auth::user()->hasRole('consultant') && !Auth::user()->hasRole('admin') )
    <input type="button" name="save" class="save action-button" value="Save" />
    @endif
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>