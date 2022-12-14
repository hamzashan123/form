<fieldset id="fieldsetthree">
@if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('consultant'))
                    <a id="pdffirst_education" class="btn btn-primary" style="text-align:center;color:white; margin-bottom:20px;">Generate Pdf</a>
                    @endif

    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 3:</h2>

        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">FIRST EDUCATION</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 3 - 14</h2>
            </div>
        </div>

        <h2 class="fs-title">EDUCATION HISTORY – INFO
        </h2>
        <p>Indicate what is your highest recognised qualification obtained </p>


        <table>
            <tbody>
                <tr>
                    <td>
                        Indicate what is your highest recognised
                        qualification obtained

                    </td>

                    <td>
                        <select name="first_education_qualification_obtained" id="first_education_qualification_obtained" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->first_education_qualification_obtained)))
                            <option value="{{$data->first_education_qualification_obtained}}" selected>{{$data->first_education_qualification_obtained}}</option>
                            @endif
                            <option value="PHD"> PHD </option>
                            <option value="Masters Degree"> Masters Degree </option>
                            <option value="Bachelor Degree"> Bachelor Degree </option>
                            <option value="Vocational diploma"> Vocational diploma </option>
                            <option value="High School diploma"> High School diploma </option>
                            <option value="Other"> Other </option>

                        </select>
                    </td>
                </tr>
            </tbody>
        </table>

        <h2 class="fs-title">EDUCATION BACKGROUND
        </h2>
        <p>PRIMARY SCHOOL or equivalent </p>

        <table>
            <tbody>
                <tr>
                    <td> Name Of the School </td>
                    <td> <input type="text" name="firstedu_background_nameofschool" id="firstedu_background_nameofschool" @if(isset($data->firstedu_background_nameofschool)) value="{{$data->firstedu_background_nameofschool}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Full address
                    </td>
                    <td> <input type="text" name="firstedu_background_fulladdress" id="firstedu_background_fulladdress" @if(isset($data->firstedu_background_fulladdress)) value="{{$data->firstedu_background_fulladdress}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Date course started

                    </td>
                    <td> <input type="date" name="firstedu_background_datecoursesstarted" id="firstedu_background_datecoursesstarted" @if(isset($data->firstedu_background_datecoursesstarted)) value="{{$data->firstedu_background_datecoursesstarted}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Date course ended

                    </td>
                    <td> <input type="date" name="firstedu_background_datecoursesended" id="firstedu_background_datecoursesended" @if(isset($data->firstedu_background_datecoursesended)) value="{{$data->firstedu_background_datecoursesended}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Year obtained

                    </td>
                    <td> 
                        <select name="firstedu_background_yearobt" id="firstedu_background_yearobt" class="form-control">
                            <option value=""> Select Year </option>

                            @if(!empty(isset($data->firstedu_background_yearobt)))
                            <option value="{{$data->firstedu_background_yearobt}}" selected>{{$data->firstedu_background_yearobt}}</option>
                            @endif

                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> Legal duration of the course


                    </td>
                    <td>
                    <select name="firstedu_background_legal_duration" id="firstedu_background_legal_duration" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->firstedu_background_legal_duration)))
                            <option value="{{$data->firstedu_background_legal_duration}}" selected>{{$data->firstedu_background_legal_duration}}</option>
                            @endif

                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select> 
                      
                    </td>
                </tr>

                <tr>
                    <td> Name of the qualification obtained



                    </td>
                    <td> <input type="text" name="firstedu_background_qualification_obtained" id="firstedu_background_qualification_obtained" @if(isset($data->firstedu_background_qualification_obtained)) value="{{$data->firstedu_background_qualification_obtained}}" @endif/>
                    </td>
                </tr>


            </tbody>
        </table>

        <h2 class="fs-title">MIDDLE SCHOOL or equivalent</h2>


        <table>
            <tbody>
                <tr>
                    <td> Name Of the School </td>
                    <td> <input type="text" name="firstedu_middle_nameofschool" id="firstedu_middle_nameofschool" @if(isset($data->firstedu_middle_nameofschool)) value="{{$data->firstedu_middle_nameofschool}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Full address
                    </td>
                    <td> <input type="text" name="firstedu_middle_fulladdress" id="firstedu_middle_fulladdress" @if(isset($data->firstedu_middle_fulladdress)) value="{{$data->firstedu_middle_fulladdress}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Date course started

                    </td>
                    <td> <input type="date" name="firstedu_middle_datecoursesstarted" id="firstedu_middle_datecoursesstarted" @if(isset($data->firstedu_middle_datecoursesstarted)) value="{{$data->firstedu_middle_datecoursesstarted}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Date course ended

                    </td>
                    <td> <input type="date" name="firstedu_middle_datecoursesended" id="firstedu_middle_datecoursesended" @if(isset($data->firstedu_middle_datecoursesended)) value="{{$data->firstedu_middle_datecoursesended}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Year obtained

                    </td>
                    <td>
                    <select name="firstedu_middle_yearobt" id="firstedu_middle_yearobt" class="form-control">
                            <option value=""> Select Year </option>

                            @if(!empty(isset($data->firstedu_middle_yearobt)))
                            <option value="{{$data->firstedu_middle_yearobt}}" selected>{{$data->firstedu_middle_yearobt}}</option>
                            @endif

                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>    
                   
                    </td>
                </tr>

                <tr>
                    <td> Legal duration of the course


                    </td>
                    <td> 
                    <select name="firstedu_middle_legal_duration" id="firstedu_middle_legal_duration" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->firstedu_middle_legal_duration)))
                            <option value="{{$data->firstedu_middle_legal_duration}}" selected>{{$data->firstedu_middle_legal_duration}}</option>
                            @endif

                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>     
                   
                    </td>
                </tr>

                <tr>
                    <td> Name of the qualification obtained



                    </td>
                    <td> <input type="text" name="firstedu_middle_qualification_obtained" id="firstedu_middle_qualification_obtained" @if(isset($data->firstedu_middle_qualification_obtained)) value="{{$data->firstedu_middle_qualification_obtained}}" @endif/>
                    </td>
                </tr>


            </tbody>
        </table>


        <h2 class="fs-title">HIGH SCHOOL or equivalent
        </h2>


        <table>
            <tbody>
                <tr>
                    <td> Name Of the School </td>
                    <td> <input type="text" name="firstedu_high_nameofschool" id="firstedu_high_nameofschool" @if(isset($data->firstedu_high_nameofschool)) value="{{$data->firstedu_high_nameofschool}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Full address
                    </td>
                    <td> <input type="text" name="firstedu_high_fulladdress" id="firstedu_high_fulladdress" @if(isset($data->firstedu_high_fulladdress)) value="{{$data->firstedu_high_fulladdress}}" @endif/>
                    </td>
                </tr>


                <tr>
                    <td> Date course started

                    </td>
                    <td> <input type="date" name="firstedu_high_datecoursesstarted" id="firstedu_high_datecoursesstarted" @if(isset($data->firstedu_high_datecoursesstarted)) value="{{$data->firstedu_high_datecoursesstarted}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Date course ended

                    </td>
                    <td> <input type="date" name="firstedu_high_datecoursesended" id="firstedu_high_datecoursesended" @if(isset($data->firstedu_high_datecoursesended)) value="{{$data->firstedu_high_datecoursesended}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Year obtained

                    </td>
                    <td> 
                    <select name="firstedu_high_yearobt" id="firstedu_high_yearobt" class="form-control">
                            <option value=""> Select Year </option>

                            @if(!empty(isset($data->firstedu_high_yearobt)))
                            <option value="{{$data->firstedu_high_yearobt}}" selected>{{$data->firstedu_high_yearobt}}</option>
                            @endif

                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>    
               
                    </td>
                </tr>

                <tr>
                    <td> Legal duration of the course


                    </td>
                    <td> 
                    <select name="firstedu_high_legal_duration" id="firstedu_high_legal_duration" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->firstedu_high_legal_duration)))
                            <option value="{{$data->firstedu_high_legal_duration}}" selected>{{$data->firstedu_high_legal_duration}}</option>
                            @endif

                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>     
                   
                    </td>
                </tr>

                <tr>
                    <td> Name of the qualification obtained



                    </td>
                    <td> <input type="text" name="firstedu_high_qualification_obtained" id="firstedu_high_qualification_obtained" @if(isset($data->firstedu_high_qualification_obtained)) value="{{$data->firstedu_high_qualification_obtained}}" @endif/>
                    </td>
                </tr>


            </tbody>
        </table>

    </div>




    @if(!Auth::user()->hasRole('consultant') && !Auth::user()->hasRole('admin') )
    <input type="button" name="save" class="save action-button" value="Save" />
    @endif
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

</fieldset>