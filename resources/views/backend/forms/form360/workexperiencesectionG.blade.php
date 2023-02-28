<h2 class="fs-title" style="margin-top: 10px;">  </h2>
        <h2 class="fs-title" style="margin-top: 10px;"> Section G  407 training visa </h2>
        <p>INFO</p>

        <table>
            <tbody>

                
                <tr>
                    <td> What type of position will you be undertaking for this visa 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> And training will you be undertaking in Australia. Please indicate your role and describe the    
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Describe the main 5 Duties / activities you will be performing	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Date when the training will commence 
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Date when the training will end
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
               
            
                <tr>
                    <td> Total duration 
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="1 YEAR">1 YEAR  </option>
                            <option value="2 YEARS">2 YEARS </option>
                        </select>
                    </td>
                </tr>
               
                
                <tr>
                    <td> Legal registered name of your sponsor
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Trading name of the sponsor
                    </td>
                    <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> ABN of the sponsor   
                    </td>
                    <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Adress of the business  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Sector of the business in which the sponsor operates in 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Will you be paid for undertaking the training activity in Australia
                        
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
                    <td> How much will you be paid each year?   
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                
                <tr>
                    <td> How frequently will you be paid? 
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="Every week">Every week</option>
                            <option value="2 weeks">2 weeks</option>
                            <option value="Monthly">Monthly</option>
                        </select>
                    </td>
                </tr>
            
            </tbody>
        </table>