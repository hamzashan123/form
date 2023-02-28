<h2 class="fs-title" style="margin-top: 10px;">  </h2>
        <h2 class="fs-title" style="margin-top: 10px;"> Section F  408 Academic Training (University) </h2>
        <p>INFO</p>

        <table>
            <tbody>

                <tr>
                    <td> Duration of stay 
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="3 months">3 months  </option>
                            <option value="6 months">6 months  </option>
                            <option value="12 months">12 months  </option>
                            <option value="More than 12 months">More than 12 months  </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Name of company in Australia or New Zealand where you will be performing your work 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Registration number of the company in Australia or New Zealand (ABN and ACN number  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Address of the company in Australia or New Zealand 	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Contact number in Australia or New Zealand 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Contact person in Australia or New Zealand (name and surname) 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
               
            
                <tr>
                    <td> Role of the contact person in Australia or New Zealand  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
               
                
                <tr>
                    <td> Company sector in which the company in Australia or NZ operates in
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Position that you will carry out to Australia or New Zealand 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Main responsibilities and duties to be carried out in Australia or New Zealand  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Description of the project you will be working during the time in Australia or New Zealand 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Date you are planning to enter Australia or New Zealand 
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Date you are planning to leave Australia or New Zealand (maximum 6 months stay)  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>Will it be necessary to enter Australia or New Zealand more than one time in order to carry out the job?    
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>For the work carried out in Australia or New Zealand, will you be paid by the Australian or New Zealand company, or will you receive payments from the company located overseas?  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                

            </tbody>
        </table>


        <p>DOCS</p>

        <table>
            <tbody>


            
            <tr>
                <td> WORK TO BE PERFORMED IN AUSTRALIA OR NEW ZEALAND – DOCS Invitation letter from the Australia or New Zealand company 
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