<h2 class="fs-title" style="margin-top: 10px;">  </h2>
        <h2 class="fs-title" style="margin-top: 10px;"> Section H  485 visa </h2>
        <p>INFO</p>

        <table>
            <tbody>

                <tr>
                    <td> Have you completed or you will be completing at least years of study in Australia
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Was the course of study at a vocational level or at a university level?
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            </tbody>
        </table>

       
        <p> For each course of study please indicate</p>
        <p> Course 1</p>

        <table>
            <tbody>

                <tr>
                    <td> Name of course completed 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Date course started
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Date course ended
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Name of the school/university where the course was attended
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Address of the school/university
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Country
                        
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
                    <td> Was this course completed or will be completed soon?
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                

            </tbody>
        </table>

        <p>DOCS For Course 1</p>

    <table>
            <tbody>


            
            <tr>
                <td> Completion letter  
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
                <td> List of exams/unit  
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


   
    <p> Course 2</p>

    <table>
            <tbody>

               
            <tr>
                    <td> Name of course completed 
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
            
                <tr>
                    <td> Date course started
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Date course ended
                    </td>
                    <td> <input type="date" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Name of the school/university where the course was attended
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Address of the school/university
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>
                <tr>
                    <td> Country
                        
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
                    <td> Was this course completed or will be completed soon?
                    </td>
                    <td> <input type="text" name="fam_member_child_name2" id="fam_member_child_name2" @if(isset($data->fam_member_child_name2)) value="{{$data->fam_member_child_name2}}" @endif/> </td>
                </tr>

            </tbody>
    </table>

    <p>DOCS For Course 2</p>

<table>
        <tbody>


        
        <tr>
            <td> Completion letter  
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
            <td> List of exams/unit  
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
