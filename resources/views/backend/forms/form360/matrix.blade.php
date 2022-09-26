<fieldset id="fieldsetone">
    <div class="form-card">
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
                            <option value="selectoption"> Select Option </option>
                            <option value="yes"> Yes </option>
                            <option value="no"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> Date of Birth </td>
                    <td> <input type="date" name="matrix_dob" id="matrix_dob" />
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>