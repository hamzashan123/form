<fieldset id="fieldsetfive">
                                <div class="form-card">
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
                                                <td> Full name of the school
                                                </td>
                                                <td> <input type="text" name="edu_info_junior_fullname" id="edu_info_junior_fullname"  @if(isset($data['education'][0]->edu_info_junior_fullname)) value="{{$data['education'][0]->edu_info_junior_fullname}}" @endif /> </td>
                                            </tr>

                                            <tr>
                                                <td> Full address
                                                </td>
                                                <td> <input type="text" name="edu_info_junior_fulladdress" id="edu_info_junior_fulladdress" @if(isset($data['education'][0]->edu_info_junior_fulladdress)) value="{{$data['education'][0]->edu_info_junior_fulladdress}}" @endif/> </td>
                                            </tr>

                                            <tr>
                                                <td> Year obtained </td>
                                                <td> <input type="date" name="edu_info_junior_yearobtainted" id="edu_info_junior_yearobtainted" @if(isset($data['education'][0]->edu_info_junior_yearobtainted)) value="{{$data['education'][0]->edu_info_junior_yearobtainted}}" @endif/>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Legal duration of the course </td>
                                                <td> <input type="text" name="edu_info_junior_course" id="edu_info_junior_course" @if(isset($data['education'][0]->edu_info_junior_course)) value="{{$data['education'][0]->edu_info_junior_course}}" @endif/>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Indicate the START date of your studies (DD-MMYYY)
                                                </td>
                                                <td> <input type="date" name="edu_info_junior_startdate" id="edu_info_junior_startdate" @if(isset($data['education'][0]->edu_info_junior_startdate)) value="{{$data['education'][0]->edu_info_junior_startdate}}" @endif/> </td>
                                            </tr>

                                            <tr>
                                                <td> Indicate the END date of your studies (DD-MMYYY)
                                                </td>
                                                <td> <input type="date" name="edu_info_junior_enddate"
                                                        id="edu_info_junior_enddate" @if(isset($data['education'][0]->edu_info_junior_enddate)) value="{{$data['education'][0]->edu_info_junior_enddate}}" @endif/>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                  
                                
                                
                               
                                    </div>
                                <input type="button" name="next" class="next action-button" value="Next" /> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>