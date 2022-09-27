<fieldset id="fieldsetone">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">PERSONAL INFO:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4 </h2>
                                    </div>
                                </div>

                                <table>
                                    <tbody>
                                        <tr>
                                            <td> Name </td>
                                            <td> <input type="text" name="p_info_name" id="p_info_name" class="required"  @if(isset($data['personal'][0]->p_info_name)) value="{{$data['personal'][0]->p_info_name}}" @endif /> 
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> Surname </td>
                                            <td> <input type="text" name="p_info_surname" id="p_info_surname" @if(isset($data['personal'][0]->p_info_surname)) value="{{$data['personal'][0]->p_info_surname}}" @endif /> </td>
                                        </tr>

                                        <tr>
                                            <td> Are you known by any other names (if so specify
                                                the names and the reaons) </td>
                                            <td> <input type="text" name="p_info_othername" id="p_info_othername" @if(isset($data['personal'][0]->p_info_othername)) value="{{$data['personal'][0]->p_info_othername}}" @endif/>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>    
                            </div>      
                            <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
                        
                        
                        
                        