<h2 class="fs-title" style="margin-top: 10px;"> </h2>
<h2 class="fs-title" style="margin-top: 10px;"> Section H 485 visa </h2>
<p>INFO</p>

<table>
    <tbody>

        <tr>
            <td> Have you completed or you will be completing at least years of study in Australia
            </td>
            <td> <input type="text" name="workexperience_completed_atleast_section_h" id="workexperience_completed_atleast_section_h" @if(isset($data->workexperience_completed_atleast_section_h)) value="{{$data->workexperience_completed_atleast_section_h}}" @endif/> </td>
        </tr>

        <tr>
            <td> Was the course of study at a vocational level or at a university level?
            </td>
            <td> <input type="text" name="workexperience_course_vocational_section_h" id="workexperience_course_vocational_section_h" @if(isset($data->workexperience_course_vocational_section_h)) value="{{$data->workexperience_course_vocational_section_h}}" @endif/> </td>
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
            <td> <input type="text" name="workexperience_course_name_section_h" id="workexperience_course_name_section_h" @if(isset($data->workexperience_course_name_section_h)) value="{{$data->workexperience_course_name_section_h}}" @endif/> </td>
        </tr>

        <tr>
            <td> Date course started
            </td>
            <td> <input type="date" name="workexperience_date_started_section_h" id="workexperience_date_started_section_h" @if(isset($data->workexperience_date_started_section_h)) value="{{$data->workexperience_date_started_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date course ended
            </td>
            <td> <input type="date" name="workexperience_date_ended_section_h" id="workexperience_date_ended_section_h" @if(isset($data->workexperience_date_ended_section_h)) value="{{$data->workexperience_date_ended_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> Name of the school/university where the course was attended
            </td>
            <td> <input type="text" name="workexperience_school_university_section_h" id="workexperience_school_university_section_h" @if(isset($data->workexperience_school_university_section_h)) value="{{$data->workexperience_school_university_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> Address of the school/university
            </td>
            <td> <input type="text" name="workexperience_school_university_address_section_h" id="workexperience_school_university_address_section_h" @if(isset($data->workexperience_school_university_address_section_h)) value="{{$data->workexperience_school_university_address_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> Country

            </td>
            <td>
                <select name="workexperience_country_section_h" id="workexperience_country_section_h" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_country_section_h)))
                    <option value="{{$data->workexperience_country_section_h}}" selected>{{$data->workexperience_country_section_h}}</option>
                    @endif
                    @include('backend.forms.countrielist')
                </select>
            </td>
        </tr>
        <tr>
            <td> Was this course completed or will be completed soon?
            </td>
            <td> <input type="text" name="workexperience_completed_course_completed_section_h" id="workexperience_completed_course_completed_section_h" @if(isset($data->workexperience_completed_course_completed_section_h)) value="{{$data->workexperience_completed_course_completed_section_h}}" @endif/> </td>
        </tr>


    </tbody>
</table>

<p>DOCS For Course 1</p>

<table>
    <tbody>



        <tr>
            <td> Completion letter
            </td>
            <td> <input type="file" name="workexperience_completion_letter_section_h" id="workexperience_completion_letter_section_h">
                @if (array_key_exists('workexperience_completion_letter_section_h', $docdataForm360))

                <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_completion_letter_section_h/'.$docdataForm360['workexperience_completion_letter_section_h'])  }}">
                    @if(str_contains($docdataForm360['workexperience_completion_letter_section_h'] , '.pdf'))
                    <img class="imgfile" src="{{asset('pdficon.png')}}" />
                    @else
                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_completion_letter_section_h/'.$docdataForm360['workexperience_completion_letter_section_h'])  }}" />
                    @endif
                </a>
                @endif
            </td>
        </tr>
        <tr>
            <td> List of exams/unit
            </td>
            <td> <input type="file" name="workexperience_exams_list_section_h" id="workexperience_exams_list_section_h">
                @if (array_key_exists('workexperience_exams_list_section_h', $docdataForm360))

                <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_exams_list_section_h/'.$docdataForm360['workexperience_exams_list_section_h'])  }}">
                    @if(str_contains($docdataForm360['workexperience_exams_list_section_h'] , '.pdf'))
                    <img class="imgfile" src="{{asset('pdficon.png')}}" />
                    @else
                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_exams_list_section_h/'.$docdataForm360['workexperience_exams_list_section_h'])  }}" />
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
            <td> <input type="text" name="workexperience_course_name2_section_h" id="workexperience_course_name2_section_h" @if(isset($data->workexperience_course_name2_section_h)) value="{{$data->workexperience_course_name2_section_h}}" @endif/> </td>
        </tr>

        <tr>
            <td> Date course started
            </td>
            <td> <input type="date" name="workexperience_course_start2_section_h" id="workexperience_course_start2_section_h" @if(isset($data->workexperience_course_start2_section_h)) value="{{$data->workexperience_course_start2_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> Date course ended
            </td>
            <td> <input type="date" name="workexperience_course_end2_section_h" id="workexperience_course_end2_section_h" @if(isset($data->workexperience_course_end2_section_h)) value="{{$data->workexperience_course_end2_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> Name of the school/university where the course was attended
            </td>
            <td> <input type="text" name="workexperience_school_university2_section_h" id="workexperience_school_university2_section_h" @if(isset($data->workexperience_school_university2_section_h)) value="{{$data->workexperience_school_university2_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> Address of the school/university
            </td>
            <td> <input type="text" name="workexperience_school_university_address2_section_h" id="workexperience_school_university_address2_section_h" @if(isset($data->workexperience_school_university_address2_section_h)) value="{{$data->workexperience_school_university_address2_section_h}}" @endif/> </td>
        </tr>
        <tr>
            <td> Country

            </td>
            <td>
                <select name="workexperience_country2_section_h" id="workexperience_country2_section_h" class="form-control">
                    <option value=""> Select Option </option>

                    @if(!empty(isset($data->workexperience_country2_section_h)))
                    <option value="{{$data->workexperience_country2_section_h}}" selected>{{$data->workexperience_country2_section_h}}</option>
                    @endif
                    @include('backend.forms.countrielist')
                </select>
            </td>
        </tr>
        <tr>
            <td> Was this course completed or will be completed soon?
            </td>
            <td> <input type="text" name="workexperience_course_completed2_section_h" id="workexperience_course_completed2_section_h" @if(isset($data->workexperience_course_completed2_section_h)) value="{{$data->workexperience_course_completed2_section_h}}" @endif/> </td>
        </tr>

    </tbody>
</table>

<p>DOCS For Course 2</p>

<table>
    <tbody>



        <tr>
            <td> Completion letter
            </td>
            <td> <input type="file" name="workexperience_completion_letter2_section_h" id="workexperience_completion_letter2_section_h">
                @if (array_key_exists('workexperience_completion_letter2_section_h', $docdataForm360))

                <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_completion_letter2_section_h/'.$docdataForm360['workexperience_completion_letter2_section_h'])  }}">
                    @if(str_contains($docdataForm360['workexperience_completion_letter2_section_h'] , '.pdf'))
                    <img class="imgfile" src="{{asset('pdficon.png')}}" />
                    @else
                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_completion_letter2_section_h/'.$docdataForm360['workexperience_completion_letter2_section_h'])  }}" />
                    @endif
                </a>
                @endif
            </td>
        </tr>
        <tr>
            <td> List of exams/unit
            </td>
            <td> <input type="file" name="workexperience_exams_list2_section_h" id="workexperience_exams_list2_section_h">
                @if (array_key_exists('workexperience_exams_list2_section_h', $docdataForm360))

                <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_exams_list2_section_h/'.$docdataForm360['workexperience_exams_list2_section_h'])  }}">
                    @if(str_contains($docdataForm360['workexperience_exams_list2_section_h'] , '.pdf'))
                    <img class="imgfile" src="{{asset('pdficon.png')}}" />
                    @else
                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexperience_exams_list2_section_h/'.$docdataForm360['workexperience_exams_list2_section_h'])  }}" />
                    @endif
                </a>
                @endif
            </td>
        </tr>

    </tbody>
</table>