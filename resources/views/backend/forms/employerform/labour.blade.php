<fieldset id="fieldsetthree">
    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 3:</h2>

        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">LABOUR MARKET TESTING </h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 3 - 4</h2>
            </div>
        </div>

        <div class="col-12 pl-0 mt-20">

            <p>Unless it’s an intra company transfer, You will need to make sure that at least 3 job ads on 3 different platforms have been put online, under the name of the sponsoring company. Each job ad must indicate the name of the sponsoring company, the position to be filled, a brief description of the duties, full-time role, annual salary unless the annual salary to be offered is beyond $ 96.400 AUD per year. </p>

            <p> Each job ad must have run for at least 28 days and must not be older than 4 months before
                the application is submitted </p>
        </div>

        <table>

            <tbody>

                <tr>
                    <td>Have you published 3 job ads on 3 different
                        platforms (if not, please make sure to
                        update this form when the job ads will be
                        online)
                    </td>
                    <td> 
                        
                    <select name="labour_market_different" id="labour_market_different" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->labour_market_different)))
                            <option value="{{$data->labour_market_different}}" selected>{{$data->labour_market_different}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

            </tbody>
        </table>


        <h2 class="fs-title">For Job ad n.1 WORKFORCE WEBSITE - please indicate </h2>

        <table>
            <tbody>
                <tr>
                    <td> Name of the Job ad platform n.1 (Please
                        note that Workforce is a mandatory
                        website)
                    </td>
                    <td> 
                        
                    <select name="labour_job_n1_people" id="labour_job_n1_people" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->labour_job_n1_people)))
                            <option value="{{$data->labour_job_n1_people}}" selected>{{$data->labour_job_n1_people}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>
                    
                    </td>
                </tr>

                <tr>
                    <td> Exact date when the job ad was put online </td>
                    <td> <input type="date" name="labour_job_n1_exact_date" id="labour_job_n1_exact_date" @if(isset($data->labour_job_n1_exact_date)) value="{{$data->labour_job_n1_exact_date}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Please confirm this job ad has been online
                        for at least 28 days or it will be by the time
                        it expires </td>
                    <td> 
                    <select name="labour_job_n1_online" id="labour_job_n1_online" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->labour_job_n1_online)))
                            <option value="{{$data->labour_job_n1_online}}" selected>{{$data->labour_job_n1_online}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> Please indicate the link to the job ad here
                    </td>
                    <td> <input type="text" name="labour_job_n1_indicate" id="labour_job_n1_indicate" @if(isset($data->labour_job_n1_indicate)) value="{{$data->labour_job_n1_indicate}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Are you able to provide a payment receipt
                        for this job ad? If yes, please make sure to
                        attach this document
                    </td>
                    <td> <input type="text" name="labour_job_n1_payment" id="labour_job_n1_payment" @if(isset($data->labour_job_n1_payment)) value="{{$data->labour_job_n1_payment}}" @endif/> </td>
                </tr>


            </tbody>
        </table>

        <h2 class="fs-title">For Job ad n.2 please indicate
        </h2>


        <table>
            <tbody>
                <tr>
                    <td> Name of the Job ad platform n.2

                    </td>
                    <td> <input type="text" name="labour_job_n2_people" id="labour_job_n2_people" @if(isset($data->labour_job_n2_people)) value="{{$data->labour_job_n2_people}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Exact date when the job ad was put online </td>
                    <td> <input type="date" name="labour_job_n2_exact_date" id="labour_job_n2_exact_date" @if(isset($data->labour_job_n2_exact_date)) value="{{$data->labour_job_n2_exact_date}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Please confirm this job ad has been online
                        for at least 28 days or it will be by the time
                        it expires </td>
                    <td>
                    <select name="labour_job_n2_online" id="labour_job_n2_online" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->labour_job_n2_online)))
                            <option value="{{$data->labour_job_n2_online}}" selected>{{$data->labour_job_n2_online}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>    
                    </td>
                </tr>

                <tr>
                    <td> Please indicate the link to the job ad here
                    </td>
                    <td> <input type="text" name="labour_job_n2_indicate" id="labour_job_n2_indicate" @if(isset($data->labour_job_n2_indicate)) value="{{$data->labour_job_n2_indicate}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Are you able to provide a payment receipt
                        for this job ad? If yes, please make sure to
                        attach this document
                    </td>
                    <td> 
                    <select name="labour_job_n2_payment" id="labour_job_n2_payment" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->labour_job_n2_payment)))
                            <option value="{{$data->labour_job_n2_payment}}" selected>{{$data->labour_job_n2_payment}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                    </select>    
                   </td>
                </tr>


            </tbody>
        </table>

        <h2 class="fs-title">For Job ad n.3 please indicate
        </h2>


        <table>
            <tbody>
                <tr>
                    <td> Name of the Job ad platform n.3

                    </td>
                    <td> <input type="text" name="labour_job_n3_people" id="labour_job_n3_people" @if(isset($data->labour_job_n3_people)) value="{{$data->labour_job_n3_people}}" @endif/>
                    </td>
                </tr>

                <tr>
                    <td> Exact date when the job ad was put online </td>
                    <td> <input type="date" name="labour_job_n3_exact_date" id="labour_job_n3_exact_date" @if(isset($data->labour_job_n3_exact_date)) value="{{$data->labour_job_n3_exact_date}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Please confirm this job ad has been online
                        for at least 28 days or it will be by the time
                        it expires </td>
                    <td>
                    <select name="labour_job_n3_online" id="labour_job_n3_online" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->labour_job_n3_online)))
                            <option value="{{$data->labour_job_n3_online}}" selected>{{$data->labour_job_n3_online}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>    
                    </td>
                </tr>

                <tr>
                    <td> Please indicate the link to the job ad here
                    </td>
                    <td> <input type="text" name="labour_job_n3_indicate" id="labour_job_n3_indicate" @if(isset($data->labour_job_n3_indicate)) value="{{$data->labour_job_n3_indicate}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Are you able to provide a payment receipt
                        for this job ad? If yes, please make sure to
                        attach this document
                    </td>
                    <td> 
                    <select name="labour_job_n3_payment" id="labour_job_n3_payment" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->labour_job_n3_payment)))
                            <option value="{{$data->labour_job_n3_payment}}" selected>{{$data->labour_job_n3_payment}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                    </select>    
                   </td>
                </tr>


            </tbody>
        </table>
        <!-- <h2 class="fs-title">For Job ad n.1 AFTER THE 28 DAY PERIOD please indicate
        </h2>

        <table>
            <tbody>
                <tr>
                    <td> Number of people who applied for the
                        position to be filled </td>
                    <td>
                    <select name="labour_job_n1_after_people" id="labour_job_n1_after_people" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->labour_job_n1_after_people)))
                            <option value="{{$data->labour_job_n1_after_people}}" selected>{{$data->labour_job_n1_after_people}}</option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                            <option value="61">61</option>
                            <option value="62">62</option>
                            <option value="63">63</option>
                            <option value="64">64</option>
                            <option value="65">65</option>
                            <option value="66">66</option>
                            <option value="67">67</option>
                            <option value="68">68</option>
                            <option value="69">69</option>
                            <option value="70">70</option>
                            <option value="71">71</option>
                            <option value="72">72</option>
                            <option value="73">73</option>
                            <option value="74">74</option>
                            <option value="75">75</option>
                            <option value="76">76</option>
                            <option value="77">77</option>
                            <option value="78">78</option>
                            <option value="79">79</option>
                            <option value="80">80</option>
                            <option value="81">81</option>
                            <option value="82">82</option>
                            <option value="83">83</option>
                            <option value="84">84</option>
                            <option value="85">85</option>
                            <option value="86">86</option>
                            <option value="87">87</option>
                            <option value="88">88</option>
                            <option value="89">89</option>
                            <option value="90">90</option>
                            <option value="91">91</option>
                            <option value="92">92</option>
                            <option value="93">93</option>
                            <option value="94">94</option>
                            <option value="95">95</option>
                            <option value="96">96</option>
                            <option value="97">97</option>
                            <option value="98">98</option>
                            <option value="99">99</option>
                            <option value="100">100</option>
                        </select>
                       
                    </td>
                </tr>

                <tr>
                    <td> Number of people who were shortlisted for
                        the role </td>
                    <td>
                    <select name="labour_job_n1_after_people_shortlisted" id="labour_job_n1_after_people_shortlisted" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->labour_job_n1_after_people_shortlisted)))
                            <option value="{{$data->labour_job_n1_after_people_shortlisted}}" selected>{{$data->labour_job_n1_after_people_shortlisted}}</option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                            <option value="61">61</option>
                            <option value="62">62</option>
                            <option value="63">63</option>
                            <option value="64">64</option>
                            <option value="65">65</option>
                            <option value="66">66</option>
                            <option value="67">67</option>
                            <option value="68">68</option>
                            <option value="69">69</option>
                            <option value="70">70</option>
                            <option value="71">71</option>
                            <option value="72">72</option>
                            <option value="73">73</option>
                            <option value="74">74</option>
                            <option value="75">75</option>
                            <option value="76">76</option>
                            <option value="77">77</option>
                            <option value="78">78</option>
                            <option value="79">79</option>
                            <option value="80">80</option>
                            <option value="81">81</option>
                            <option value="82">82</option>
                            <option value="83">83</option>
                            <option value="84">84</option>
                            <option value="85">85</option>
                            <option value="86">86</option>
                            <option value="87">87</option>
                            <option value="88">88</option>
                            <option value="89">89</option>
                            <option value="90">90</option>
                            <option value="91">91</option>
                            <option value="92">92</option>
                            <option value="93">93</option>
                            <option value="94">94</option>
                            <option value="95">95</option>
                            <option value="96">96</option>
                            <option value="97">97</option>
                            <option value="98">98</option>
                            <option value="99">99</option>
                            <option value="100">100</option>
                        </select>    
                   </td>
                </tr>

                <tr>
                    <td> Reason why no one was suitable for the role
                        and therefore you are offering the full-time
                        position to the visa applicant </td>
                    <td> <input type="text" name="labour_job_n1_after_people_suitable" id="labour_job_n1_after_people_suitable" @if(isset($data->labour_job_n1_after_people_suitable)) value="{{$data->labour_job_n1_after_people_suitable}}" @endif/> </td>
                </tr>
            </tbody>
        </table> -->


       


        <h2 class="fs-title">NOMINATION – DOCS TO UPLOAD FOR THE LABOR MARKET TESTING </h2>
        <h2 class="fs-title"> Job ad 1 – WORKFORCE platform </h2>
        <table>

            <tbody>

                <!-- <tr>
                    <td>Copy and paste of the link of the Job ad
                        platform
                    </td>
                    <td> <input type="file" name="workforce_1_copyandpaste" id="workforce_1_copyandpaste">

                        @if (array_key_exists('workforce_1_copyandpaste', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_1_copyandpaste/'.$docdataemployerform['workforce_1_copyandpaste'])  }}">
                            @if(str_contains($docdataemployerform['workforce_1_copyandpaste'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_1_copyandpaste/'.$docdataemployerform['workforce_1_copyandpaste'])  }}" />
                            @endif
                        </a>


                        @endif


                    </td>
                </tr> -->

                <tr>
                    <td>Invoice for having posted the job ad (if
                        applicable)
                    </td>
                    <td> <input type="file" name="workforce_1_invoice" id="workforce_1_invoice">



                        @if (array_key_exists('workforce_1_invoice', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_1_invoice/'.$docdataemployerform['workforce_1_invoice'])  }}">
                            @if(str_contains($docdataemployerform['workforce_1_invoice'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_1_invoice/'.$docdataemployerform['workforce_1_invoice'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>

                <tr>
                    <td>Screenshot of the job ad page
                    </td>
                    <td> <input type="file" name="workforce_1_screenshot" id="workforce_1_screenshot">


                        @if (array_key_exists('workforce_1_screenshot', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_1_screenshot/'.$docdataemployerform['workforce_1_screenshot'])  }}">
                            @if(str_contains($docdataemployerform['workforce_1_screenshot'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_1_screenshot/'.$docdataemployerform['workforce_1_screenshot'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>

                <tr>
                    <td>Any other evidence of having posted the job
                        ad
                    </td>
                    <td> <input type="file" name="workforce_1_evidence" id="workforce_1_evidence">



                        @if (array_key_exists('workforce_1_evidence', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_1_evidence/'.$docdataemployerform['workforce_1_evidence'])  }}">
                            @if(str_contains($docdataemployerform['workforce_1_evidence'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_1_evidence/'.$docdataemployerform['workforce_1_evidence'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>


            </tbody>
        </table>


        <h2 class="fs-title"> Job ad 2 </h2>

        <table>

            <tbody>

                <!-- <tr>
                    <td>Copy and paste of the link of the Job ad
                        platform
                    </td>
                    <td> <input type="file" name="workforce_2_copyandpaste" id="workforce_2_copyandpaste">


                        @if (array_key_exists('workforce_2_copyandpaste', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_2_copyandpaste/'.$docdataemployerform['workforce_2_copyandpaste'])  }}">
                            @if(str_contains($docdataemployerform['workforce_2_copyandpaste'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_2_copyandpaste/'.$docdataemployerform['workforce_2_copyandpaste'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr> -->

                <tr>
                    <td>Invoice for having posted the job ad (if
                        applicable)
                    </td>
                    <td> <input type="file" name="workforce_2_invoice" id="workforce_2_invoice">

                        @if (array_key_exists('workforce_2_invoice', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_2_invoice/'.$docdataemployerform['workforce_2_invoice'])  }}">
                            @if(str_contains($docdataemployerform['workforce_2_invoice'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_2_invoice/'.$docdataemployerform['workforce_2_invoice'])  }}" />
                            @endif
                        </a>


                        @endif



                    </td>
                </tr>

                <tr>
                    <td>Screenshot of the job ad page
                    </td>
                    <td> <input type="file" name="workforce_2_screenshot" id="workforce_2_screenshot">

                        @if (array_key_exists('workforce_2_screenshot', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_2_screenshot/'.$docdataemployerform['workforce_2_screenshot'])  }}">
                            @if(str_contains($docdataemployerform['workforce_2_screenshot'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_2_screenshot/'.$docdataemployerform['workforce_2_screenshot'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>

                <tr>
                    <td>Any other evidence of having posted the job
                        ad
                    </td>
                    <td> <input type="file" name="workforce_2_evidence" id="workforce_2_evidence">



                        @if (array_key_exists('workforce_2_evidence', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_2_evidence/'.$docdataemployerform['workforce_2_evidence'])  }}">
                            @if(str_contains($docdataemployerform['workforce_2_evidence'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_2_evidence/'.$docdataemployerform['workforce_2_evidence'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>


            </tbody>
        </table>


        <h2 class="fs-title"> Job ad 3 </h2>

        <table>

            <tbody>

                <!-- <tr>
                    <td>Copy and paste of the link of the Job ad
                        platform
                    </td>
                    <td> <input type="file" name="workforce_3_copyandpaste" id="workforce_3_copyandpaste">

                        @if (array_key_exists('workforce_3_copyandpaste', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_3_copyandpaste/'.$docdataemployerform['workforce_3_copyandpaste'])  }}">
                            @if(str_contains($docdataemployerform['workforce_3_copyandpaste'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_3_copyandpaste/'.$docdataemployerform['workforce_3_copyandpaste'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr> -->

                <tr>
                    <td>Invoice for having posted the job ad (if
                        applicable)
                    </td>
                    <td> <input type="file" name="workforce_3_invoice" id="workforce_3_invoice">


                        @if (array_key_exists('workforce_3_invoice', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_3_invoice/'.$docdataemployerform['workforce_3_invoice'])  }}">
                            @if(str_contains($docdataemployerform['workforce_3_invoice'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_3_invoice/'.$docdataemployerform['workforce_3_invoice'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>

                <tr>
                    <td>Screenshot of the job ad page
                    </td>
                    <td> <input type="file" name="workforce_3_screenshot" id="workforce_3_screenshot">


                        @if (array_key_exists('workforce_3_screenshot', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_3_screenshot/'.$docdataemployerform['workforce_3_screenshot'])  }}">
                            @if(str_contains($docdataemployerform['workforce_3_screenshot'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_3_screenshot/'.$docdataemployerform['workforce_3_screenshot'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>

                <tr>
                    <td>Any other evidence of having posted the job
                        ad
                    </td>
                    <td> <input type="file" name="workforce_3_evidence" id="workforce_3_evidence">



                        @if (array_key_exists('workforce_3_evidence', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_3_evidence/'.$docdataemployerform['workforce_3_evidence'])  }}">
                            @if(str_contains($docdataemployerform['workforce_3_evidence'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/workforce_3_evidence/'.$docdataemployerform['workforce_3_evidence'])  }}" />
                            @endif
                        </a>


                        @endif

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