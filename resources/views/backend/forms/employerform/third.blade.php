<fieldset id="fieldsetthree">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">WORK EXPERIENCE INFO:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>
                                
                                <div class="col-12 pl-0 mt-20">
                                    <h3 class="fs-title">WORK EXPERIENCE - IF PERFORMED IN AUSTRALIA:</h3>
                                    <p>PLEASE REFER TO THE LAST 10 YEARS AND ONLY INDICATE RELEVANT WORK EXPERIENCE IN LINE WITH
                                        THE OCCUPATION </p>
                                </div>

                                <table>
                                    <tbody>
                                        <tr>
                                            <td> Employer - Business name 
                                            </td>
                                            <td> <input type="text" name="work_business_name" id="work_business_name" @if(isset($data['work'][0]->work_business_name)) value="{{$data['work'][0]->work_business_name}}" @endif /> </td>
                                        </tr>

                                        <tr>
                                            <td> Full address
                                            </td>
                                            <td> <input type="text" name="work_fulladdress" id="work_fulladdress" @if(isset($data['work'][0]->work_fulladdress)) value="{{$data['work'][0]->work_fulladdress}}" @endif/> </td>
                                        </tr>

                                        <tr>
                                            <td> Sector of activity </td>
                                            <td> <input type="text" name="work_activity" id="work_activity" @if(isset($data['work'][0]->work_activity)) value="{{$data['work'][0]->work_activity}}" @endif/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> Your role and position </td>
                                            <td> <input type="text" name="work_role" id="work_role" @if(isset($data['work'][0]->work_role)) value="{{$data['work'][0]->work_role}}" @endif/>
                                            </td>
                                        </tr>

                                      
                                
                                        <tr>
                                            <td> Phone contact of the referee 
                                            </td>
                                            <td> <input type="text" name="work_referee_phone"
                                                    id="work_referee_phone" class="numberfixed" @if(isset($data['work'][0]->work_referee_phone)) value="{{$data['work'][0]->work_referee_phone}}" @endif />
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

        
                                    
                            </div> 
                                
                                  
                                     
                                   
                                   
                            <input type="button" name="next" class="next action-button" value="Next" /> 
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    
                        </fieldset>