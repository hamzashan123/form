<fieldset id="fieldseteight">
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">VISA HISTORY QUESTIONS</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 8 - 14</h2>
            </div>
        </div>



        <h2 class="fs-title">CURRENT VISA DETAILS</h2>
        <table>
            <tbody>

                <tr>
                    <td>Are you currently in Australia or New Zealand
                    </td>
                    <td>
                        <select name="currentvisa_in_aus_nz" id="currentvisa_in_aus_nz" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Do you hold a visa to Australia or New Zealand?
                    </td>
                    <td>
                        <select name="currentvisa_hold_aus_nz" id="currentvisa_hold_aus_nz" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>

                        </select>
                    </td>
                </tr>


                <tr>
                    <td>If yes, what type of visa do you hold?
                    </td>
                    <td>
                        <input type="text" name="currentvisa_typeofvisa" id="currentvisa_typeofvisa" />
                    </td>
                </tr>

                <tr>
                    <td>Are you waiting for a visa to Australia or New
                        Zealand to be finalized?

                    </td>
                    <td>
                        <select name="currentvisa_waiting_for_visa" id="currentvisa_waiting_for_visa" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, what type of visa are you waiting to be
                        finalized?
                    </td>
                    <td>
                        <input type="text" name="currentvisa_typeofvisawaiting" id="currentvisa_typeofvisawaiting" />
                    </td>
                </tr>


                <tr>
                    <td>Date of expiry of your current visa? (if
                        applicable)

                    </td>
                    <td>
                        <input type="date" name="currentvisa_dateofexpiry" id="currentvisa_dateofexpiry" />
                    </td>
                </tr>

                <tr>
                    <td>Have you ever had a visa for Australia or New
                        Zealand or any other country refused or
                        cancelled?If so, please specify
                    </td>
                    <td>
                        <input type="text" name="currentvisa_ever_had_visa" id="currentvisa_ever_had_visa" />
                    </td>
                </tr>


                <tr>
                    <td>Do you hold or have you ever held a visa to any
                        other country, other than Australia or New
                        Zealand? sa to Australia or New Zealand or any
                        other country?

                    </td>
                    <td>
                        <select name="currentvisa_held_visa" id="currentvisa_held_visa" class="form-control">
                            <option value=""> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>If yes, please indicate the countries you have
                        held or hold a visa for
                    </td>
                    <td>
                        <input type="text" name="currentvisa_indicate_countries" id="currentvisa_indicate_countries" />
                    </td>
                </tr>

                <tr>
                    <td>Have you ever been in Australia or New Zealand
                        or any other country and Have you ever had any
                        visa issues, not complied with visa conditions or
                        have departed outside their authorised period
                        of stay, in any country, Australia or New
                        Zealand or non in Australia or New Zealand? If
                        yes, please specify the country and the type of
                        issue

                    </td>
                    <td>
                        <input type="text" name="currentvisa_complied_with_visa_conditions" id="currentvisa_complied_with_visa_conditions" />
                    </td>
                </tr>


            </tbody>
        </table>


        <h2 class="fs-title">VISA HISTORY – DOCS TO UPLAOD</h2>

        <p> Upload each current and/or previous visas to Australia or New Zealand </p>

        <table>
            <tbody>

                <table>
                    <tbody>

                        <tr>
                            <td> Current visa to Australia or New Zealand (if
                                applicable)
                            </td>
                            <td> <input type="file" name="currentvisa_aus_naz_if_applicable" id="currentvisa_aus_naz_if_applicable"></td>
                        </tr>

                        <tr>
                            <td> Previous visas to Australia or New Zealand (if
                                applicable)
                            </td>
                            <td> <input type="file" name="previous_visa_if_applicable1" id="previous_visa_if_applicable1"></td>
                        </tr>

                        <tr>
                            <td> Previous visas to Australia or New Zealand (if
                                applicable)

                            </td>
                            <td> <input type="file" name="previous_visa_if_applicable2" id="previous_visa_if_applicable2"></td>
                        </tr>


                    </tbody>
                </table>


            </tbody>
        </table>





    </div>
    <input type="button" name="save" class="save action-button" value="Save" />
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>