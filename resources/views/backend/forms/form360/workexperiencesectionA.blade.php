<h2 class="fs-title" style="margin-top: 10px;">  </h2>
        <h2 class="fs-title" style="margin-top: 10px;"> Section A ( 482 visa )</h2>
        <p>INFO</p>

        <table>
            <tbody>

                <tr>
                    <td> Are you currently employed with the company that will sponsor you? 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> What is or will be your position in the company? 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Please indicate the main 5 duties of the work you will perform for the sponsor 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                
                <tr>
                    <td> Have you ever been sponsored by this business before?
                        
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
                    <td> Name of the business 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Address of the business 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> ABN of the business Sector of the business 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Date when you will start working on the sponsorship visa (if already working with the sponsorship business please leave blank) 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> How many years are you planning to work for your sponsor 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> (Name & Surname of the contact person in the sponsoring business 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Position of the person on the business 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Email  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Phone contact  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> What will be the annual gross salary you will be paid by your sponsor? 
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
                            <option value="2 week">2 week</option>
                            <option value="Monthly"> Monthly </option>
                        </select>
                    </td>
                </tr>
                </tbody>
        </table>