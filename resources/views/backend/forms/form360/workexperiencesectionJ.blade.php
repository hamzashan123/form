
        <h2 class="fs-title" style="margin-top: 10px;"> Section J  Visitor visa   </h2>
        <p>Onshore or Offshore</p>
        <p>INFO</p>
        
        <h2 class="fs-title" style="margin-top: 10px;"> LENGTH OF STAY OR OF FURTHER STAY IN AUSTRALIA  </h2>

        <table>
            <tbody>

                <tr>
                    <td> How long do you wish to stay OR remain in Australia for? 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Length of stay or of further stay in Australia 
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="Up to 3 months">Up to 3 months</option>
                            <option value="Up to 6 months">Up to 6 months  </option>
                            <option value="Up to 12 months">Up to 12 months  </option>
                        </select>
                    </td>
                </tr>
               
                
            
                <tr>
                    <td>Please specify the reason for your visit OR further stay in Australia   
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Are you travelling OR remaining in Australia with other people?	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
               
            </tbody>
        </table>


        <h2 class="fs-title" style="margin-top: 10px;"> TRAVELLING COMPANIONS OR PEOPLE REMAINING WITH YOU IN AUSTRALIA  </h2>
       
        
        <table>
            <tbody>
            <tr>
                    <td> Are you remaining in Australia with other people who also need to apply for a visa to remain in Australia?
                        
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
            </tbody>
        </table>



        <h2 class="fs-title" style="margin-top: 10px;"> If you are travelling OR remaining in Australia with other people, please indicate the name and surname of every other person:   </h2>
        <p>For each person please indicate: </p>
        
        
        <p>PERSON 1</p>
        <table>
            <tbody>

                <tr>
                    <td> Relationship to the applicant
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="SPOUSE/PARTNER">SPOUSE/PARTNER </option>
                            <option value="SON/DAUGHTER"> SON/DAUGHTER </option>
                            <option value="FRIEND"> FRIEND </option>
                            <option value="BUSINESS PARTNER"> BUSINESS PARTNER </option>
                            <option value="Other"> Other </option>
                        </select>
                    </td>
                </tr>
              
                <tr>
                    <td> Family name
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Given names  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                
                <tr>
                    <td> Sex
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Date of birth	 
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Nationality	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
               
            </tbody>
        </table>

        <p>PERSON 2</p>
        <table>
            <tbody>

                <tr>
                    <td> Relationship to the applicant
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="SPOUSE/PARTNER">SPOUSE/PARTNER </option>
                            <option value="SON/DAUGHTER"> SON/DAUGHTER </option>
                            <option value="FRIEND"> FRIEND </option>
                            <option value="BUSINESS PARTNER"> BUSINESS PARTNER </option>
                            <option value="Other"> Other </option>
                        </select>
                    </td>
                </tr>
              
                <tr>
                    <td> Family name
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Given names  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                
                <tr>
                    <td> Sex
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Date of birth	 
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Nationality	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
               
            </tbody>
        </table>

        <p>PERSON 3</p>
        <table>
            <tbody>

                <tr>
                    <td> Relationship to the applicant
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="SPOUSE/PARTNER">SPOUSE/PARTNER </option>
                            <option value="SON/DAUGHTER"> SON/DAUGHTER </option>
                            <option value="FRIEND"> FRIEND </option>
                            <option value="BUSINESS PARTNER"> BUSINESS PARTNER </option>
                            <option value="Other"> Other </option>
                        </select>
                    </td>
                </tr>
              
                <tr>
                    <td> Family name
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Given names  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                
                <tr>
                    <td> Sex
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Date of birth	 
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Nationality	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
               
            </tbody>
        </table>
        
        <h2 class="fs-title" style="margin-top: 10px;"> CONTACTS IN AUSTRALIA   </h2>

        <table>
            <tbody>
                <tr>
                        <td> Do you have any relatives, friends or contacts while you will be in Australia?
                            
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
            </tbody>
        </table>

        <p>If yes, for each person indicate your relationship with this person: </p>

        <p>PERSON 1</p>
        <table>
            <tbody>

              
              
                <tr>
                    <td> Family name
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Given names  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  What is your relationship to this person?	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Sex
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>  Date of birth	 
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Address where the person lives in Australia	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Suburb / Town	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  State / Territory	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Postcode	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Enter numbers only with no spaces	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Home phone	 
                    </td>
                    <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Business phone	 
                    </td>
                    <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Mobile / Cell phone	 
                    </td>
                    <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> What is the Australian residency status of this person
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="AUS CITIZEN ">AUS CITIZEN  </option>
                            <option value="PR RESIDENT"> PR RESIDENT </option>
                            <option value="TEMPORARY RESIDENT (if so please specify the visa this person holds)"> TEMPORARY RESIDENT (if so please specify the visa this person holds) </option>
                        </select>
                    </td>
                </tr>
               
               
            </tbody>
        </table>

        <p>PERSON 2</p>
        <table>
            <tbody>

              
              
                <tr>
                    <td> Family name
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Given names  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  What is your relationship to this person?	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Sex
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>  Date of birth	 
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Address where the person lives in Australia	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Suburb / Town	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  State / Territory	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Postcode	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Enter numbers only with no spaces	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Home phone	 
                    </td>
                    <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Business phone	 
                    </td>
                    <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Mobile / Cell phone	 
                    </td>
                    <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> What is the Australian residency status of this person
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="AUS CITIZEN ">AUS CITIZEN  </option>
                            <option value="PR RESIDENT"> PR RESIDENT </option>
                            <option value="TEMPORARY RESIDENT (if so please specify the visa this person holds)"> TEMPORARY RESIDENT (if so please specify the visa this person holds) </option>
                        </select>
                    </td>
                </tr>
               
               
            </tbody>
        </table>

        
        <p>CURRENT STATUS – PLEASE MAKE SURE TO FILL OUT ONLY THE OPTION THAT REFERS TO YOUR CASE</p>

        <table>
                <tbody>
                <tr>
                    <td> What is your current employment status
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="Working">Working </option>
                            <option value="Studying"> Studying  </option>
                            <option value="Retired"> Retired   </option>
                            <option value="Other"> Other    </option>
                        </select>
                    </td>
                </tr>
                </tbody>
        </table>

        <p>YOU ARE CURRENTLY WORKING </p>
        <p>WORK EXPERIENCE – OPTION 1  </p>
        <p>If you are currently employed, please indicate the following  </p>
        <table>
                <tbody>
                <tr>
                    <td>  What is your current or most recent occupation?	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                </tbody>
        </table>
          
        <p>WORK EXPERIENCE </p>
        <table>
                <tbody>

                    <tr>
                        <td>  Your position	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Position type
                            
                        </td>
                        <td>
                            <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                                <option value=""> Select Option </option>

                                @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                                <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                                @endif
                                <option value="Full-time">Full-time </option>
                                <option value="Part-time"> Part-time </option>
                                <option value="Other"> Other </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>  Employer/Name of the business you work for	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>Country where the business is located
                            
                        </td>
                        <td>
                            <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                                <option value=""> Select Option </option>

                                @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                                <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                                @endif
                                @include('backend.forms.countrielist')
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>  Date work started 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>

                    <tr>
                        <td>  Date work ended (if still working please leave blank)
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>

                    <tr>
                        <td> Can you provide the contact details of a person for this work period
                            
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
                        <td>  If yes, please indicate 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Name and surname 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Position  
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Email contact 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Phone contact 
                        </td>
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>

                </tbody>
        </table>

        <p>YOU ARE CURRENTLY STUDYING – OPTION 2 </p>
        <table>
                <tbody>

                    <tr>
                        <td>  Exact qualification and title to be obtained	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> What was the level of the qualification you will obtain?
                            
                        </td>
                        <td>
                            <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                                <option value=""> Select Option </option>

                                @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                                <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                                @endif
                                <option value="PhD">PhD </option>
                                <option value="Masters degree"> Masters degree </option>
                                <option value="Bachelor degree">Bachelor degree </option>
                                <option value="Vocational diploma">Vocational diploma</option>
                                <option value="High School diploma">High School diploma</option>
                                <option value="Other">Other </option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>  Name of school/Institute	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Year to obtained	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Date course started	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Date course will end	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Legal duration of the course	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                    <td> Country where the qualification will be obtained
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            @include('backend.forms.countrielist')
                        </select>
                    </td>
                </tr>
                </tbody>
        </table>

        <p>YOU ARE RETIRED – OPTION 3 </p>
        <table>
            <tbody>
                    <tr>
                        <td>  What was your last occupation before retiring 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  When did you retire	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
            </tbody>
        </table>

        <p>OTHER – OPTION 4 </p>
        <table>
            <tbody>
                    <tr>
                        <td>  Please provide further details about your status since you are not working, not studying and you are not retired	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
            </tbody>
        </table>

        <p>FUNDING WHILE IN AUSTRALIA </p>
        <table>
            <tbody>
                    <tr>
                        <td>  Give details of how you will be funding your stay while in Australia 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> What funds will you have available to support your stay in Australia	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
            </tbody>
        </table>