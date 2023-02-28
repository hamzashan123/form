
        <h2 class="fs-title" style="margin-top: 10px;"> Section I  417 visa renewal  </h2>
        <p>2nd or 3rd WHV visa</p>
        <p>INFO</p>
        <p>TYPE OF WHV VISA APPLYING FOR</p>

        <table>
            <tbody>

                <tr>
                    <td> Select the type of working holiday visa the applicant is applying for 
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="SECOND WHV">SECOND WHV</option>
                            <option value="THIRD WHV">THIRD WHV  </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Have you been granted and entered Australia on a first Working Holiday visa (subclass 417) before? 
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> If yes, please specify
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Have you been granted and been in Australia as the holder of a second Working Holiday visa (subclass 417) before?   
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  If yes, please specify 	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Have you undertaken 3 months of specified work as the holder of a first Working Holiday visa (subclass 417)? 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>


                <tr>
                    <td> If yes, please specify
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
               
            </tbody>
        </table>


        
        <h2 class="fs-title" style="margin-top: 10px;"> SPECIFIC WORK PERFORMED FOR THE FOLLOWING WHV VISA  </h2>
        <p>Give details of the specified work undertaken by you, for each employer whilst on your Working Holiday visa</p>
        <p>WORK EXPERIENCE DURING WHV VISA - Details of specified work undertaken</p>
        <h2 class="fs-title" style="margin-top: 10px;">Employer n.1 </h2>
        
        <table>
            <tbody>

              
              
                <tr>
                    <td> Legal registered name
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Trading name  
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td>  Australian Business Number (ABN)	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Is the employer a labour hire company 
                        
                    </td>
                    <td>
                        <select name="fam_member_sectionb_" id="fam_member_sectionb_relationship_partner" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->fam_member_sectionb_relationship_partner)))
                            <option value="{{$data->fam_member_sectionb_relationship_partner}}" selected>{{$data->fam_member_sectionb_relationship_partner}}</option>
                            @endif
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </td>
                </tr>
               
            </tbody>
        </table>

        <p>EMPLOYER CONTACT</p>

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
                    <td>  Position	 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
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
                    <td>  Email address	 
                    </td>
                    <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
               
               
            </tbody>
        </table>

        <p>BUSINESS DETAILS</p>
        <p>Give details of the address where the business operates</p>

            <table>
                <tbody>

                
                
                    <tr>
                        <td> Country
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                
                    <tr>
                        <td> Address  
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
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Postcode	 
                        </td>
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Is the work address the same as the employer business address?
                            
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

            <p>WORK CONDITIONS</p>

            <table>
                <tbody>

                
                
                    <tr>
                        <td> Employment type
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                
                    <tr>
                        <td> Industry type  
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Industry type sub-group	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Description of duties	 
                        </td>
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Date from	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Date to	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Total hours worked	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Total days worked	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td>  Was the applicant employed under a piece rate agreement?	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    
                
                
                </tbody>
            </table>

            <p>ACCOMODATION AND TRAVEL ARRANGEMENTS</p>
            <p>Give details of the applicant's accommodation and travel arrangements whilst working for this employer</p>
            <table>
                <tbody>

                
                
                    <tr>
                        <td> Living arrangements
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                
                    <tr>
                        <td> Method of travel to work  
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Time taken to travel to work	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    
                    
                
                
                </tbody>
            </table>

            <h2 class="fs-title" style="margin-top: 10px;">Employer n.2 </h2>

           
            <table>
                <tbody>

                
                
                    <tr>
                        <td> Legal registered name
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                
                    <tr>
                        <td> Trading name 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Australian Business Number (ABN)	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Is the employer a labour hire company
                            
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

            <p>EMPLOYER CONTACT</p>

           
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
                        <td> Position	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Business phone	 
                        </td>
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Mobile / Cell phone	 
                        </td>
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Email address
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    
                
                </tbody>
            </table>

            
            <p> BUSINESS DETAILS</p>
           
            <table>
                <tbody>

                
                
                    <tr>
                        <td> Country
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                
                    <tr>
                        <td> Address 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Suburb / Town	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> State / Territory:
                        </td>
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Postcode	 
                        </td>
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>

                    <tr>
                        <td> Is the work address the same as the employer business address?
                            
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

            <p> WORK CONDITIONS</p>

           
            <table>
                <tbody>

                
                
                    <tr>
                        <td> Employment type
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                
                    <tr>
                        <td> Industry type 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Industry type sub-group	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Description of duties:
                        </td>
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Date from	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Date to	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Total hours worked	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Total days worked	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Was the applicant employed under a piece rate agreement?	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>

                
                </tbody>
            </table>


            <p> WORK CONDITIONS</p>

           
            <table>
                <tbody>

                
                
                    <tr>
                        <td> Employment type
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                
                    <tr>
                        <td> Industry type 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Industry type sub-group	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Description of duties:
                        </td>
                        <td> <input type="tel" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Date from	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Date to	 
                        </td>
                        <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Total hours worked	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Total days worked	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Was the applicant employed under a piece rate agreement?	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>

                
                </tbody>
            </table>

            <p> ACCOMODATION AND TRAVEL ARRANGEMENTS</p>
            <p> Give details of the applicant's accommodation and travel arrangements whilst working for this employer </p>
           
            <table>
                <tbody>

                
                
                    <tr>
                        <td> Living arrangements
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                
                    <tr>
                        <td> Method of travel to work 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    <tr>
                        <td> Time taken to travel to work	 
                        </td>
                        <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                    </tr>
                    
                    

                
                </tbody>
            </table>
