<fieldset id="fieldsetfive">
@if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('consultant'))
                    <a id="pdfapprenticeship" class="btn btn-primary" style="text-align:center;color:white; margin-bottom:20px;">Generate Pdf</a>
                    @endif
    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 5:</h2>

        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">APRENTICESHIP:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 5 - 14</h2>
            </div>
        </div>

        <table>
            <tbody>
                <tr>
                    <td> Did you undergo a period of apprenticeship (apprendistato) either during your formal studies or after you finished your course of study?
                    </td>
                    <td> 
                    <select name="apprenticeship_formal_studies" id="apprenticeship_formal_studies" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->apprenticeship_formal_studies)))
                            <option value="{{$data->apprenticeship_formal_studies}}" selected>{{$data->apprenticeship_formal_studies}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>    
                   </td>
                </tr>

                <tr>
                    <td> If yes, please specify what type of apprenticeship you did</td>
                    <td> <input type="text" name="apprenticeship_formal_studies_specify" id="apprenticeship_formal_studies_specify" @if(isset($data->apprenticeship_formal_studies_specify)) value="{{$data->apprenticeship_formal_studies_specify}}" @endif /> </td>
                </tr>

                <tr>
                    <td> Indicate the total duration of the apprenticeship </td>
                    <td> 
                    <select name="apprenticeship_total_duration" id="apprenticeship_total_duration" class="form-control">
                            <option value=""> Select Years </option>

                            @if(!empty(isset($data->apprenticeship_total_duration)))
                            <option value="{{$data->apprenticeship_total_duration}}" selected>{{$data->apprenticeship_total_duration}}</option>
                            @endif
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>      
                   </td>
                </tr>

                <tr>
                    <td> Was the apprenticeship completed? </td>
                    <td> 
                    <select name="apprenticeship_completed" id="apprenticeship_completed" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->apprenticeship_completed)))
                            <option value="{{$data->apprenticeship_completed}}" selected>{{$data->apprenticeship_completed}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>    
                    </td>
                </tr>


                <tr>
                    <td>What was the qualification you obtained at the
                        conclusion of the apprenticeship? </td>
                    <td> <input type="text" name="apprenticeship_conclusion" id="apprenticeship_conclusion" @if(isset($data->apprenticeship_conclusion)) value="{{$data->apprenticeship_conclusion}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Name of the company you did your apprenticeship
                        with </td>
                    <td> <input type="text" name="apprenticeship_company" id="apprenticeship_company" @if(isset($data->apprenticeship_company)) value="{{$data->apprenticeship_company}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Address of the company where you did your apprenticeship </td>
                    <td> <input type="text" name="apprenticeship_company_address" id="apprenticeship_company_address" @if(isset($data->apprenticeship_company_address)) value="{{$data->apprenticeship_company_address}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Did you need a visa to perform the work in this country? If so, please specify the visa you held </td>
                    <td>
                    <select name="apprenticeship_visa_country" id="apprenticeship_visa_country" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->apprenticeship_visa_country)))
                            <option value="{{$data->apprenticeship_visa_country}}" selected>{{$data->apprenticeship_visa_country}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>      
                    </td>
                </tr>

                <tr>
                    <td> Please indicate your role </td>
                    <td> <input type="text" name="apprenticeship_position" id="apprenticeship_position" @if(isset($data->apprenticeship_position)) value="{{$data->apprenticeship_position}}" @endif/> </td>
                </tr>


                <tr>
                    <td> Start date </td>
                    <td> <input type="date" name="apprenticeship_start_date" id="apprenticeship_start_date" @if(isset($data->apprenticeship_start_date)) value="{{$data->apprenticeship_start_date}}" @endif/> </td>
                </tr>

                <tr>
                    <td> End date (if still working indicate date of today) </td>
                    <td> <input type="date" name="apprenticeship_end_date" id="apprenticeship_end_date" @if(isset($data->apprenticeship_end_date)) value="{{$data->apprenticeship_end_date}}" @endif/> </td>
                </tr>


                <tr>
                    <td>Was this work full-time or part-time? </td>
                    <td>
                    <select name="apprenticeship_fulltime_parttime" id="apprenticeship_fulltime_parttime" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->apprenticeship_fulltime_parttime)))
                            <option value="{{$data->apprenticeship_fulltime_parttime}}" selected>{{$data->apprenticeship_fulltime_parttime}}</option>
                            @endif
                            <option value="Part Time"> Part Time </option>
                            <option value="Full Time"> Full Time </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Indicate the number of hours per week performed </td>
                    <td> <input type="text" name="apprenticeship_week_perhour" id="apprenticeship_week_perhour" @if(isset($data->apprenticeship_week_perhour)) value="{{$data->apprenticeship_week_perhour}}" @endif/> </td>
                </tr>

                <tr>
                    <td>List your main duties and responsibilities performed (please indicate 5 main duties and responsibilities) </td>
                    <td> <input type="text" name="apprenticeship_duties_responsibities" id="apprenticeship_duties_responsibities" @if(isset($data->apprenticeship_duties_responsibities)) value="{{$data->apprenticeship_duties_responsibities}}" @endif/> </td>
                </tr>


                <tr>
                    <td>Did you complete the apprenticeship and obtain the formal qualification through the apprenticeship?</td>
                    <td>
                    <select name="apprenticeship_formal_qualification" id="apprenticeship_formal_qualification" class="form-control">


                        <option value=""> Select Option </option>
                        @if(!empty(isset($data->apprenticeship_formal_qualification)))
                        <option value="{{$data->apprenticeship_formal_qualification}}" selected>{{$data->apprenticeship_formal_qualification}}</option>
                        @endif
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td>Did you receive payments for this apprenticeship period?</td>
                    <td>
                        <select name="apprenticeship_payments" id="apprenticeship_payments" class="form-control">


                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->apprenticeship_payments)))
                            <option value="{{$data->apprenticeship_payments}}" selected>{{$data->apprenticeship_payments}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Can this work period be documented with evidence of payment such as payslips, contracts, etc.? </td>
                    <td>
                        <select name="apprenticeship_period" id="apprenticeship_period" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->apprenticeship_period)))
                            <option value="{{$data->apprenticeship_period}}" selected>{{$data->apprenticeship_period}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Was this work performed as an employee or by issuing an invoice?</td>
                    <td> <input type="text" name="apprenticeship_issue_invoice" id="apprenticeship_issue_invoice" @if(isset($data->apprenticeship_issue_invoice)) value="{{$data->apprenticeship_issue_invoice}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Are you able to provide an employment or collaboration contract for this work period </td>
                    <td>
                        <select name="apprenticeship_employment_collaboration" id="apprenticeship_employment_collaboration" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->apprenticeship_employment_collaboration)))
                            <option value="{{$data->apprenticeship_employment_collaboration}}" selected>{{$data->apprenticeship_employment_collaboration}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Can you provide payslips for this work period </td>
                    <td>
                        <select name="apprenticeship_payslips" id="apprenticeship_payslips" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->apprenticeship_payslips)))
                            <option value="{{$data->apprenticeship_payslips}}" selected>{{$data->apprenticeship_payslips}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Can you provide taxation documents for this period such as Income tax returns?
                    </td>
                    <td>
                        <select name="apprenticeship_bank_statement" id="apprenticeship_income" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->apprenticeship_bank_statement)))
                            <option value="{{$data->apprenticeship_bank_statement}}" selected>{{$data->apprenticeship_bank_statement}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Can you provide bank statement showing payment in
                        your favour for the work performed?
                    </td>
                    <td>
                        <select name="apprenticeship_bank_statement" id="apprenticeship_bank_statement" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->apprenticeship_bank_statement)))
                            <option value="{{$data->apprenticeship_bank_statement}}" selected>{{$data->apprenticeship_bank_statement}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>Are you able to get a reference letter from your
                        employer?
                    </td>
                    <td>
                        <select name="apprenticeship_reference_letter" id="apprenticeship_reference_letter" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->apprenticeship_reference_letter)))
                            <option value="{{$data->apprenticeship_reference_letter}}" selected>{{$data->apprenticeship_reference_letter}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>Name and surname of your referee</td>
                    <td> <input type="text" name="apprenticeship_name_surname" id="apprenticeship_name_surname" @if(isset($data->apprenticeship_name_surname)) value="{{$data->apprenticeship_name_surname}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Contact number of your referee</td>
                    <td> <input type="tel" name="apprenticeship_referee_contact" id="apprenticeship_referee_contact" @if(isset($data->apprenticeship_referee_contact)) value="{{$data->apprenticeship_referee_contact}}" @endif/> </td>
                </tr>

                <!-- <tr>
                    <td>Contact number of your referee</td>
                    <td> <input type="tel" name="apprenticeship_referee_contact" id="apprenticeship_referee_contact" @if(isset($data->apprenticeship_referee_contact)) value="{{$data->apprenticeship_referee_contact}}" @endif/> </td>
                </tr> -->
            </tbody>
        </table>

        <h2 class="fs-title" style="margin-top: 10px;">DOCS for Apprenticeship
        </h2>
        <p style="color:red">Attachments must be colour scans of the original document and uploaded in PDF format only. Please consolidate all
            multipage files into one PDF document for each attachment type. Maximum PDF file size is 3MB per PDF.
            Unnecessary additional documents will cause delays in processing. </p>

        <table>
            <tbody>
                <tr>
                    <td> Apprenticeship contract
                    </td>
                    <td> <input type="file" name="apprenticeship_contract_doc" id="apprenticeship_contract_doc">
                
                    @if (array_key_exists('apprenticeship_contract_doc', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_contract_doc/'.$docdataForm360['apprenticeship_contract_doc'])  }}">
                                                               @if(str_contains($docdataForm360['apprenticeship_contract_doc'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_contract_doc/'.$docdataForm360['apprenticeship_contract_doc'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                
                
                </td>
                </tr>

                <tr>
                    <td> Apprenticeship completion letter issued by the employer
                    </td>
                    <td> <input type="file" name="apprenticeship_completion_letter" id="apprenticeship_completion_letter">
                
                    @if (array_key_exists('apprenticeship_completion_letter', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_completion_letter/'.$docdataForm360['apprenticeship_completion_letter'])  }}">
                                                               @if(str_contains($docdataForm360['apprenticeship_completion_letter'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_completion_letter/'.$docdataForm360['apprenticeship_completion_letter'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                
                </td>
                </tr>

                <tr>
                    <td> Payslip for the first year of apprenticeship 
                    </td>
                    <td> <input type="file" name="apprenticeship_payslip_current_year" id="apprenticeship_payslip_current_year">
                
                    @if (array_key_exists('apprenticeship_payslip_current_year', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_payslip_current_year/'.$docdataForm360['apprenticeship_payslip_current_year'])  }}">
                                                               @if(str_contains($docdataForm360['apprenticeship_payslip_current_year'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_payslip_current_year/'.$docdataForm360['apprenticeship_payslip_current_year'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> Payslip for the second year of apprenticeship 
                    </td>
                    <td> <input type="file" name="apprenticeship_previous_year" id="apprenticeship_previous_year">
                
                
                    @if (array_key_exists('apprenticeship_previous_year', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_previous_year/'.$docdataForm360['apprenticeship_previous_year'])  }}">
                                                               @if(str_contains($docdataForm360['apprenticeship_previous_year'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_previous_year/'.$docdataForm360['apprenticeship_previous_year'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> Payslip for the third year of apprenticeship  
                    </td>
                    <td> <input type="file" name="apprenticeship_third_year" id="apprenticeship_third_year">
                
                
                    @if (array_key_exists('apprenticeship_third_year', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_third_year/'.$docdataForm360['apprenticeship_third_year'])  }}">
                                                               @if(str_contains($docdataForm360['apprenticeship_third_year'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_third_year/'.$docdataForm360['apprenticeship_third_year'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>

                <tr>
                    <td> Income tax return of the last year of work performed as an apprentice (in Italy this document is called CUD)
                    </td>
                    <td> <input type="file" name="apprenticeship_tax_return" id="apprenticeship_tax_return">
                    @if (array_key_exists('apprenticeship_tax_return', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_tax_return/'.$docdataForm360['apprenticeship_tax_return'])  }}">
                                                               @if(str_contains($docdataForm360['apprenticeship_tax_return'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_tax_return/'.$docdataForm360['apprenticeship_tax_return'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                
                </td>
                </tr>

                <tr>
                    <td> Social Security payment evidence chart (such as Tabella INPS for Italy) or any other equivalent document issued by the National Social Security Body or dedicated
registration body showing the payments that were made in your favor for the entire period of apprenticeship 
                    </td>
                    <td> <input type="file" name="apprenticeship_social_security" id="apprenticeship_social_security">
                
                
                    @if (array_key_exists('apprenticeship_social_security', $docdataForm360))
                                                               
                                                               <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_social_security/'.$docdataForm360['apprenticeship_social_security'])  }}">
                                                               @if(str_contains($docdataForm360['apprenticeship_social_security'] , '.pdf'))
                                                               <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                               @else
                                                               <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_social_security/'.$docdataForm360['apprenticeship_social_security'])  }}"  />
                                                               @endif
                                                               </a>
                                                             
                                                               
                                                           @endif   
                </td>
                </tr>


            </tbody>
        </table>



    </div>
    @if(!Auth::user()->hasRole('consultant') && !Auth::user()->hasRole('admin') )
    <input type="button" name="save" class="save action-button" value="Save" />
    @endif
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>