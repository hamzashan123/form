        <h2 class="fs-title" style="margin-top: 10px;">  </h2>
        <h2 class="fs-title" style="margin-top: 10px;"> Section B ( 482– For intra-company transfer visa)</h2>
        <p>INFO</p>

        <table>
            <tbody>
            
                
                <tr>
                    <td> Are you currently employed with the overseas/offshore company for which you will be working in Australia or NZ?  
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> What is your occupation with the overseas/offshore company? 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Your Position  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Position Type FULL TIME PART TIME
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Employer/Name of the business you work for  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Country where the business you are working for is located 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Address of the business in the country where you are working for at the moment 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Date work started  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Date work ended (if still working please leave blank)   
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Description of duties (please indicate 5 main duties)   
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>How many years are you planning to work for your sponsor

                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Name & Surname of the contact person in the sponsoring business
                         
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Position  of the person on the business 
                         
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Email  
                         
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Phone contact  
                         
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>What is your current annual gross salary with the offshore company? 
                         
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
        
            </tbody>
        </table>

        <p>DOCS</p>

        <table>
            <tbody>


            
            <tr>
                <td>Employment contract 
                    </td>
                    <td> <input type="file" name="workexp3_income_tax_return2" id="workexp3_income_tax_return2">
                    @if (array_key_exists('workexp3_income_tax_return2', $docdataForm360))
                                                               
                         <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_income_tax_return2/'.$docdataForm360['workexp3_income_tax_return2'])  }}">
                        @if(str_contains($docdataForm360['workexp3_income_tax_return2'] , '.pdf'))
                                 <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                        @else
                          <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_income_tax_return2/'.$docdataForm360['workexp3_income_tax_return2'])  }}"  />
                        @endif
                        </a>
                    @endif  
                </td>
            </tr>
            <tr>
                <td>Your most recent payslip issued by the company 
                    </td>
                    <td> <input type="file" name="workexp3_income_tax_return2" id="workexp3_income_tax_return2">
                    @if (array_key_exists('workexp3_income_tax_return2', $docdataForm360))
                                                               
                         <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_income_tax_return2/'.$docdataForm360['workexp3_income_tax_return2'])  }}">
                        @if(str_contains($docdataForm360['workexp3_income_tax_return2'] , '.pdf'))
                                 <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                        @else
                          <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_income_tax_return2/'.$docdataForm360['workexp3_income_tax_return2'])  }}"  />
                        @endif
                        </a>
                    @endif  
                </td>
            </tr>

            </tbody>
        </table>