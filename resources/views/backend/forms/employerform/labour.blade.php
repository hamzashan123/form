<fieldset id="fieldsetthree">
    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 3:</h2>

        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">LABOUR MARKET TESTING </h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 3 - 4</h2>
            </div>
        </div>

        <div class="col-12 pl-0 mt-20">

            <p>You will need to make sure that at least 3 job ads on 3 different platforms have been put
                online, under the name of the sponsoring company. Each job ad must indicate the name of
                the sponsoring company, the position to be filled, a brief description of the duties, full-time
                role, annual salary unless the annual salary to be offered is beyond $ 96.400 AUD per year. </p>

            <p> Each job ad must have run for at least 28 days and must not be older than 4 months before
                the application is submitted </p>
        </div>

        <table>

            <tbody>

                <tr>
                    <td>Have you published 3 job ads on 3 different
                        platforms (if not, please make sure to
                        update this form when the job ads will be
                        online)
                    </td>
                    <td> <input type="file" name="labour_market_different" id="labour_market_different" @if(isset($data->labour_market_different)) value="{{$data->labour_market_different}}" @endif></td>
                </tr>

            </tbody>
        </table>


        <h2 class="fs-title">For Job ad n.1 WORKFORCE WEBSITE - please indicate </h2>

        <table>
            <tbody>
                <tr>
                    <td> Name of the Job ad platform n.1 (Please
                        note that Workforce is a mandatory
                        website)
                    </td>
                    <td> <input type="text" name="labour_job_n1_people" id="labour_job_n1_people" @if(isset($data->labour_job_n1_people)) value="{{$data->labour_job_n1_people}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Exact date when the job ad was put online </td>
                    <td> <input type="date" name="labour_job_n1_exact_date" id="labour_job_n1_exact_date" @if(isset($data->labour_job_n1_exact_date)) value="{{$data->labour_job_n1_exact_date}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Please confirm this job ad has been online
                        for at least 28 days or it will be by the time
                        it expires </td>
                    <td> <input type="text" name="labour_job_n1_online" id="labour_job_n1_online" @if(isset($data->labour_job_n1_online)) value="{{$data->labour_job_n1_online}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Please indicate the link to the job ad here
                    </td>
                    <td> <input type="text" name="labour_job_n1_indicate" id="labour_job_n1_indicate" @if(isset($data->labour_job_n1_indicate)) value="{{$data->labour_job_n1_indicate}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Are you able to provide a payment receipt
                        for this job ad? If yes, please make sure to
                        attach this document
                    </td>
                    <td> <input type="text" name="labour_job_n1_payment" id="labour_job_n1_payment" @if(isset($data->labour_job_n1_payment)) value="{{$data->labour_job_n1_payment}}" @endif/> </td>
                </tr>


            </tbody>
        </table>


        <h2 class="fs-title">For Job ad n.1 AFTER THE 28 DAY PERIOD please indicate
        </h2>

        <table>
            <tbody>
                <tr>
                    <td> Number of people who applied for the
                        position to be filled </td>
                    <td> <input type="text" name="labour_job_n1_after_people" id="labour_job_n1_after_people" @if(isset($data->labour_job_n1_after_people)) value="{{$data->labour_job_n1_after_people}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Number of people who were shortlisted for
                        the role </td>
                    <td> <input type="text" name="labour_job_n1_after_people_shortlisted" id="labour_job_n1_after_people_shortlisted" @if(isset($data->labour_job_n1_after_people_shortlisted)) value="{{$data->labour_job_n1_after_people_shortlisted}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Reason why no one was suitable for the role
                        and therefore you are offering the full-time
                        position to the visa applicant </td>
                    <td> <input type="text" name="labour_job_n1_after_people_suitable" id="labour_job_n1_after_people_suitable" @if(isset($data->labour_job_n1_after_people_suitable)) value="{{$data->labour_job_n1_after_people_suitable}}" @endif/> </td>
                </tr>
            </tbody>
        </table>


        <h2 class="fs-title">For Job ad n.2 please indicate
        </h2>


        <table>
            <tbody>
                <tr>
                    <td> Name of the Job ad platform n.2

                    </td>
                    <td> <input type="text" name="labour_job_n2_people" id="labour_job_n2_people" @if(isset($data->labour_job_n2_people)) value="{{$data->labour_job_n2_people}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Exact date when the job ad was put online </td>
                    <td> <input type="date" name="labour_job_n2_exact_date" id="labour_job_n2_exact_date" @if(isset($data->labour_job_n2_exact_date)) value="{{$data->labour_job_n2_exact_date}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Please confirm this job ad has been online
                        for at least 28 days or it will be by the time
                        it expires </td>
                    <td> <input type="text" name="labour_job_n2_online" id="labour_job_n2_online" @if(isset($data->labour_job_n2_online)) value="{{$data->labour_job_n2_online}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Please indicate the link to the job ad here
                    </td>
                    <td> <input type="text" name="labour_job_n2_indicate" id="labour_job_n2_indicate" @if(isset($data->labour_job_n2_indicate)) value="{{$data->labour_job_n2_indicate}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Are you able to provide a payment receipt
                        for this job ad? If yes, please make sure to
                        attach this document
                    </td>
                    <td> <input type="text" name="labour_job_n2_payment" id="labour_job_n2_payment" @if(isset($data->labour_job_n2_payment)) value="{{$data->labour_job_n2_payment}}" @endif/> </td>
                </tr>


            </tbody>
        </table>


        <h2 class="fs-title">NOMINATION – DOCS TO UPLOAD FOR THE LABOR MARKET TESTING </h2>
        <h2 class="fs-title"> Job ad 1 – WORKFORCE platform </h2>
        <table>

            <tbody>

                <tr>
                    <td>Copy and paste of the link of the Job ad
                        platform
                    </td>
                    <td> <input type="file" name="workforce_1_copyandpaste" id="workforce_1_copyandpaste" @if(isset($data->workforce_1_copyandpaste)) value="{{$data->workforce_1_copyandpaste}}" @endif></td>
                </tr>

                <tr>
                    <td>Invoice for having posted the job ad (if
                        applicable)
                    </td>
                    <td> <input type="file" name="workforce_1_invoice" id="workforce_1_invoice" @if(isset($data->workforce_1_invoice)) value="{{$data->workforce_1_invoice}}" @endif></td>
                </tr>

                <tr>
                    <td>Screenshot of the job ad page
                    </td>
                    <td> <input type="file" name="workforce_1_screenshot" id="workforce_1_screenshot" @if(isset($data->workforce_1_screenshot)) value="{{$data->workforce_1_screenshot}}" @endif></td>
                </tr>

                <tr>
                    <td>Any other evidence of having posted the job
                        ad
                    </td>
                    <td> <input type="file" name="workforce_1_evidence" id="workforce_1_evidence" @if(isset($data->workforce_1_evidence)) value="{{$data->workforce_1_evidence}}" @endif></td>
                </tr>


            </tbody>
        </table>


        <h2 class="fs-title"> Job ad 2 </h2>

        <table>

            <tbody>

                <tr>
                    <td>Copy and paste of the link of the Job ad
                        platform
                    </td>
                    <td> <input type="file" name="workforce_2_copyandpaste" id="workforce_2_copyandpaste" @if(isset($data->workforce_2_copyandpaste)) value="{{$data->workforce_2_copyandpaste}}" @endif></td>
                </tr>

                <tr>
                    <td>Invoice for having posted the job ad (if
                        applicable)
                    </td>
                    <td> <input type="file" name="workforce_2_invoice" id="workforce_2_invoice" @if(isset($data->workforce_2_invoice)) value="{{$data->workforce_2_invoice}}" @endif></td>
                </tr>

                <tr>
                    <td>Screenshot of the job ad page
                    </td>
                    <td> <input type="file" name="workforce_2_screenshot" id="workforce_2_screenshot" @if(isset($data->workforce_2_screenshot)) value="{{$data->workforce_2_screenshot}}" @endif></td>
                </tr>

                <tr>
                    <td>Any other evidence of having posted the job
                        ad
                    </td>
                    <td> <input type="file" name="workforce_2_evidence" id="workforce_2_evidence" @if(isset($data->workforce_2_evidence)) value="{{$data->workforce_2_evidence}}" @endif></td>
                </tr>


            </tbody>
        </table>


        <h2 class="fs-title"> Job ad 3 </h2>

        <table>

            <tbody>

                <tr>
                    <td>Copy and paste of the link of the Job ad
                        platform
                    </td>
                    <td> <input type="file" name="workforce_3_copyandpaste" id="workforce_3_copyandpaste" @if(isset($data->workforce_3_copyandpaste)) value="{{$data->workforce_3_copyandpaste}}" @endif></td>
                </tr>

                <tr>
                    <td>Invoice for having posted the job ad (if
                        applicable)
                    </td>
                    <td> <input type="file" name="workforce_3_invoice" id="workforce_3_invoice" @if(isset($data->workforce_3_invoice)) value="{{$data->workforce_3_invoice}}" @endif></td>
                </tr>

                <tr>
                    <td>Screenshot of the job ad page
                    </td>
                    <td> <input type="file" name="workforce_3_screenshot" id="workforce_3_screenshot" @if(isset($data->workforce_3_screenshot)) value="{{$data->workforce_3_screenshot}}" @endif></td>
                </tr>

                <tr>
                    <td>Any other evidence of having posted the job
                        ad
                    </td>
                    <td> <input type="file" name="workforce_3_evidence" id="workforce_3_evidence" @if(isset($data->workforce_3_evidence)) value="{{$data->workforce_3_evidence}}" @endif></td>
                </tr>


            </tbody>
        </table>


    </div>




    @if(!Auth::user()->hasRole('consultant'))
    <input type="button" name="save" class="save action-button" value="Save" />
    @endif
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

</fieldset>