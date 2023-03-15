@extends('layouts.admin')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('formstyles.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{asset('countrycode.js')}}"></script>
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="box-shadow padding-20 col-11 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-center   mt-3 mb-2">
            <div class=" px-0 pt-4 pb-0 mt-3 mb-3">

                <img src="/logo.png" class="logo" />
                <h2 id="heading">Form Applicant </h2>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                        <b>MATRIX:</b>
                                                    </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                            <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td> Name and Surname </td>
                                                                    <td>  @if(isset($data->matrix_name_and_surname)) {{$data->matrix_name_and_surname}} @endif
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td> What is your age ? </td>
                                                                    <td>  @if(isset($data->matrix_age)) {{$data->matrix_age}} @endif
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td> Are you currently in Australia or New Zealand? </td>
                                                                    <td>
                                                                    
                                                                            @if(!empty(isset($data->matrix_aus_or_nz)))
                                                                                {{$data->matrix_aus_or_nz}}
                                                                            @endif
                                                                        
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td> If yes, please indicate where you are located </td>
                                                                    <td>
                                                                        
                                                                            @if(!empty(isset($data->matrix_located)))
                                                                                {{$data->matrix_located}}
                                                                            @endif
                                                                            
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td> If in Australia or New Zealand, what visa do you hold? </td>
                                                                    <td> @if(isset($data->matrix_visahold)) {{$data->matrix_visahold}} @endif
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>If in Australia or New Zealand, when does your visa
                                                                        expire </td>
                                                                    <td>  @if(isset($data->matrix_visaexpire)) {{$data->matrix_visaexpire}} @endif
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td> What is your occupation </td>
                                                                    <td> @if(isset($data->matrix_occupation)) {{$data->matrix_occupation}} @endif
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Level of English Basic</td>
                                                                    <td>
                                                                    
                                                                            @if(!empty(isset($data->matrix_levelofenglish)))
                                                                            {{$data->matrix_levelofenglish}}
                                                                            @endif
                                                                            
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Years of work experience in Australia or New Zealand
                                                                        in your occupation
                                                                    </td>

                                                                    <td>
                                                                        
                                                                            @if(!empty(isset($data->matrix_yearofexperienceinausornz)))
                                                                                {{$data->matrix_yearofexperienceinausornz}}
                                                                            @endif
                                                                            
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>Years of work experience outside of Australia or New
                                                                        Zealand in your occupation</td>
                                                                    <td>
                                                                    
                                                                            @if(!empty(isset($data->matrix_yearofexperienceoutsideausornz)))
                                                                                {{$data->matrix_yearofexperienceoutsideausornz}}
                                                                            @endif
                                                                        
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Highest education qualification obtained</td>
                                                                    <td>
                                                                        
                                                                            @if(!empty(isset($data->matrix_highesteducationqualification)))
                                                                                {{$data->matrix_highesteducationqualification}}
                                                                            @endif
                                                                        
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Are you coming to Australia or New Zealand or
                                                                        extending your stay to study?</td>
                                                                    <td>
                                                                    
                                                                            @if(!empty(isset($data->matrix_areyoucomingtoausornz)))
                                                                                {{$data->matrix_areyoucomingtoausornz}}
                                                                            @endif
                                                                            
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>If yes, please indicate what course of study/studies
                                                                        you will be enrolling in</td>
                                                                    <td>  @if(isset($data->matrix_enrolling)) {{$data->matrix_enrolling}} @endif
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>Do you have a skills assessment YES – NO</td>
                                                                    <td>
                                                                    
                                                                            @if(!empty(isset($data->matrix_skillassessment)))
                                                                                {{$data->matrix_skillassessment}}
                                                                            @endif
                                                                        
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>If yes, indicate for what occupation</td>
                                                                    <td>  @if(isset($data->matrix_indicateoccupation)) {{$data->matrix_indicateoccupation}} @endif 
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Have you taken one of the following English tests?</td>
                                                                    <td>
                                                                    
                                                                            @if(!empty(isset($data->matrix_englishtest)))
                                                                                {{$data->matrix_englishtest}}
                                                                            @endif
                                                                        
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>If yes, please indicate when the test was taken
                                                                    </td>
                                                                    <td> @if(isset($data->matrix_indicatetesttaken)) {{$data->matrix_indicatetesttaken}} @endif 
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Will your family members (partner/children) be
                                                                        included in your visa application?
                                                                    </td>

                                                                    <td>
                                                                    
                                                                            @if(!empty(isset($data->matrix_familymember)))
                                                                                {{$data->matrix_familymember}}
                                                                            @endif
                                                                            
                                                                    </td>

                                                                </tr>

                                                                <tr>
                                                                    <td>If yes, please indicate who will be included in the
                                                                        application
                                                                    </td>
                                                                    <td>
                                                                    
                                                                            @if(!empty(isset($data->matrix_indicateincluded)))
                                                                                {{$data->matrix_indicateincluded}}
                                                                            @endif
                                                                        
                                                                    
                                                                    </td>
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    </div>
                    </div>
                    <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                    <b>PERSONAL:</b>
                                                    </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                    <div class="accordion-body">
                                                    <h2 class="fs-title">MAIN APPLICANT</h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name </td>
                                        <td>
                                           @if(isset($data->personal_name)) {{$data->personal_name}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Surname </td>
                                        <td>  @if(isset($data->personal_surname)) {{$data->personal_surname}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Are or have you ever been formally known by any other names or surnames? If so, please specify
                                        </td>
                                        <td>
                                             @if(isset($data->personal_name_surname)) {{$data->personal_name_surname}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Civil status </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->personal_civil_status)))
                                                        {{$data->personal_civil_status}}
                                                @endif
                                                

                                           
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Date of birth

                                        </td>
                                        <td>  @if(isset($data->personal_dob)) {{$data->personal_dob}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Country of birth

                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_pob)))
                                                    {{$data->personal_pob}}
                                                @endif
                                                

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> City where you were born

                                        </td>
                                        <td>  @if(isset($data->personal_city_of_born)) {{$data->personal_city_of_born}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Gender

                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_gender)))
                                                    {{$data->personal_gender}}
                                                @endif
                                               

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nationality

                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_nationality)))
                                                        {{$data->personal_nationality}}
                                                @endif
                                            
                                              

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other Nationality (If applicable)

                                        </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->personal_other_nationality)))
                                                        {{$data->personal_other_nationality}}
                                                @endif
                                        
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Country of residence

                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_countryofresidence)))
                                                         {{$data->personal_countryofresidence}}
                                                @endif
                                              
                                             
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Address where you live in your usual country of
                                            residence

                                        </td>
                                        <td>  @if(isset($data->personal_addressusualcountry)) {{$data->personal_addressusualcountry}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Address in Australia or New Zealand (if
                                            applicable)


                                        </td>
                                        <td> @if(isset($data->personal_addressinausornz)) {{$data->personal_addressinausornz}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Contact number in your usually country of
                                            residence</td>
                                        <td>  @if(isset($data->personal_contactnumberusuallycountry))                                       {{$data->personal_contactnumberusuallycountry}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Whatsapp contact number
                                        </td>
                                        <td>    @if(isset($data->personal_whatsappcontact)) {{$data->personal_whatsappcontact}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Phone number in Australia or New Zealand (if
                                            already available)
                                        </td>
                                        <td>  @if(isset($data->personal_contactnumberausornz)) {{$data->personal_contactnumberausornz}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Email address</td>
                                        <td>  @if(isset($data->personal_emailaddress)) {{$data->personal_emailaddress}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Are you currently in Australia or New Zealand? </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_aus_or_nz)))
                                                        {{$data->personal_aus_or_nz}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> If in Australia or New Zealand, what visa do you hold? </td>
                                        <td> @if(isset($data->personal_visahold))  {{$data->personal_visahold}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>If in Australia or New Zealand, when does your visa
                                            expire </td>
                                        <td>  @if(isset($data->personal_visaexpire)) {{$data->personal_visaexpire}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>Have you undertaken a health examination for an Australia or New Zealandn visa in the last 12 months? </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_health_examination)))
                                                {{$data->personal_health_examination}}
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>If yes, please specify when it was taken </td>
                                        <td>  @if(isset($data->personal_health_examination_specifytaken)){{$data->personal_health_examination_specifytaken}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>During your stay in Australia or New Zealand, are you planning to enter a hospital or a health care facility (including nursing homes) </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->personal_health_care)))
                                                        {{$data->personal_health_care}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>If yes, please specify </td>
                                        <td>  @if(isset($data->personal_health_care_specifytaken)) {{$data->personal_health_care_specifytaken}}     @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Have you ever been convicted of an offence in any country (including any conviction which is now removed from official records)? </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->personal_conviction)))
                                                {{$data->personal_conviction}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>If yes, please specify </td>
                                        <td> @if(isset($data->personal_conviction_specifytaken)) {{$data->personal_conviction_specifytaken}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Have you ever been charged with any offence that is currently awaiting legal action? </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_legal_action)))
                                                     {{$data->personal_legal_action}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>If yes, please specify </td>
                                        <td>  @if(isset($data->personal_legal_action_specifytaken)) {{$data->personal_legal_action_specifytaken}} @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <h2 class="fs-title" style="margin-top: 10px;">DOCS FOR PERSONAL DETAILS</h2>
                            <p style="color:red"> Attachments must be colour scans of the original document and uploaded in PDF format only. Please consolidate all multipage files into one PDF document for each attachment type. Maximum PDF file size is 3MB per PDF. Unnecessary additional documents will cause delays in processing.
                            </p>

                            <table>
                                <tbody>

                                    <tr>
                                        <td> Passport biodata page </td>
                                        <td> <input type="file" name="personal_passport_biodata_page" id="personal_passport_biodata_page">

                                            @if (array_key_exists('personal_passport_biodata_page', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/personal_passport_biodata_page/'.$docdataForm360['personal_passport_biodata_page'])  }}">
                                                @if(str_contains($docdataForm360['personal_passport_biodata_page'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/personal_passport_biodata_page/'.$docdataForm360['personal_passport_biodata_page'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> ID card or driving license </td>
                                        <td> <input type="file" name="personal_id_card_driving_license" id="personal_id_card_driving_license">
                                            @if (array_key_exists('personal_id_card_driving_license', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/personal_id_card_driving_license/'.$docdataForm360['personal_id_card_driving_license'])  }}">
                                                @if(str_contains($docdataForm360['personal_id_card_driving_license'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/personal_id_card_driving_license/'.$docdataForm360['personal_id_card_driving_license'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Updated CV/Resume </td>
                                        <td> <input type="file" name="personal_update_resume" id="personal_update_resume">
                                            @if (array_key_exists('personal_update_resume', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/personal_update_resume/'.$docdataForm360['personal_update_resume'])  }}">
                                                @if(str_contains($docdataForm360['personal_update_resume'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/personal_update_resume/'.$docdataForm360['personal_update_resume'])  }}" />
                                                @endif
                                            </a>



                                            @endif
                                        </td>
                                    </tr>



                                </tbody>
                            </table>

                            <h2 class="fs-title" style="margin-top: 10px;"> SKILLS ASSESSMENT </h2>
                            <table>
                                <tbody>

                                    <tr>
                                        <td>Do you hold a skills assessment? If so, in what occupation (please attach outcome letter) </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_skills_assessment)))
                                                    {{$data->personal_skills_assessment}}
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>If yes, please indicate in what occupation you obtained the assessment </td>
                                        <td>  @if(isset($data->personal_skills_assessment_specifytaken))                    {{$data->personal_skills_assessment_specifytaken}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>If you do not have a skills assessment, have you lodged a skills assessment application that is still pending? </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_skills_assessment_application)))
                                               {{$data->personal_skills_assessment_application}}
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>If yes, please specify what skills assessment has been lodged and for what occupation
                                        </td>
                                        <td>  @if(isset($data->personal_skills_assessment_application_specifytaken))            {{$data->personal_skills_assessment_application_specifytaken}} @endif
                                        </td>
                                    </tr>
                                </tbody>


                            </table>


                            <h2 class="fs-title" style="margin-top: 10px;">SKILLS ASSESSMENT - DOCS</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Skills assessment outcome letter </td>
                                        <td> <input type="file" name="personal_skills_assessment_outcome_letter" id="personal_skills_assessment_outcome_letter">

                                            @if (array_key_exists('personal_skills_assessment_outcome_letter', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/personal_skills_assessment_outcome_letter/'.$docdataForm360['personal_skills_assessment_outcome_letter'])  }}">
                                                @if(str_contains($docdataForm360['personal_skills_assessment_outcome_letter'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/personal_skills_assessment_outcome_letter/'.$docdataForm360['personal_skills_assessment_outcome_letter'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <h2 class="fs-title" style="margin-top: 10px;">LANGUAGES</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> What is your main language </td>
                                        <td>  @if(isset($data->personal_main_languages)) {{$data->personal_main_languages}} @endif 

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Have you ever taken a formal English test such
                                            as IELTS Test or PTE, TOEFL; CAE Advanced, OET,
                                            in the last 36 months? </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_languages_english_test)))
                                                {{$data->personal_languages_english_test}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>If yes, please specify what Test was taken </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_englishtest_specify)))
                                               {{$data->personal_englishtest_specify}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date the English test was taken </td>
                                        <td>  @if(isset($data->personal_englishtest_taken)) {{$data->personal_englishtest_taken}} @endif</td>
                                    </tr>

                                    <tr>
                                        <td>Have you studied in a secondary and or tertiary
                                            institution where the instruction was in English?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->personal_tertiary_institution)))
                                                {{$data->personal_tertiary_institution}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> If yes, please specify what course level it was,
                                            the duration and where the course was taken </td>
                                        <td>  @if(isset($data->personal_course_duration)) {{$data->personal_course_duration}} @endif </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2 class="fs-title" style="margin-top: 10px;">LANGUAGES - DOCS</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> IELTS or equivalent English test </td>
                                        <td> <input type="file" name="personal_languages_english_test_document" id="personal_languages_english_test_document">

                                            @if (array_key_exists('personal_languages_english_test_document', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/personal_languages_english_test_document/'.$docdataForm360['personal_languages_english_test_document'])  }}">
                                                @if(str_contains($docdataForm360['personal_languages_english_test_document'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/personal_languages_english_test_document/'.$docdataForm360['personal_languages_english_test_document'])  }}" />
                                                @endif
                                            </a>


                                            @endif



                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2 class="fs-title" style="margin-top: 10px;">LICENCE AND REGSITRATION</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            Is registration or a licence required to work in
                                            the nominated occupation in the location where
                                            you will be working in Australia or New
                                            Zealand
                                        </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->personal_license_and_registration)))
                                                    {{$data->personal_license_and_registration}}
                                                @endif
                                               
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2 class="fs-title" style="margin-top: 10px;">LICENCE AND REGISTRATION – DOCS
                            </h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Licence/Registration evidence </td>
                                        <td> <input type="file" name="personal_license_and_registration_document" id="personal_license_and_registration_document">

                                            @if (array_key_exists('personal_license_and_registration_document', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/personal_license_and_registration_document/'.$docdataForm360['personal_license_and_registration_document'])  }}">
                                                @if(str_contains($docdataForm360['personal_license_and_registration_document'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/personal_license_and_registration_document/'.$docdataForm360['personal_license_and_registration_document'])  }}" />
                                                @endif
                                            </a>


                                            @endif



                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                                    </div>
                                </div>
                        </div>
                    <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                    <b>FIRST EDUCATION</b>
                                                    </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                                    <div class="accordion-body">
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
                                            
                                                @if(!empty(isset($data->first_education_qualification_obtained)))
                                               {{$data->first_education_qualification_obtained}}
                                                @endif
                                               
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
                                        <td>  @if(isset($data->firstedu_background_nameofschool)) {{$data->firstedu_background_nameofschool}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Full address
                                        </td>
                                        <td>  @if(isset($data->firstedu_background_fulladdress)) {{$data->firstedu_background_fulladdress}}   @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Date course started

                                        </td>
                                        <td>  @if(isset($data->firstedu_background_datecoursesstarted)) {{$data->firstedu_background_datecoursesstarted}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date course ended

                                        </td>
                                        <td>  @if(isset($data->firstedu_background_datecoursesended)) {{$data->firstedu_background_datecoursesended}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Year obtained

                                        </td>
                                        <td> 
                                            

                                                @if(!empty(isset($data->firstedu_background_yearobt)))
                                                     {{$data->firstedu_background_yearobt}}
                                                @endif

                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Legal duration of the course


                                        </td>
                                        <td>
                                       

                                                @if(!empty(isset($data->firstedu_background_legal_duration)))
                                                {{$data->firstedu_background_legal_duration}}
                                                @endif

                                                
                                        
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Name of the qualification obtained



                                        </td>
                                        <td>  @if(isset($data->firstedu_background_qualification_obtained)) {{$data->firstedu_background_qualification_obtained}} @endif
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                            <h2 class="fs-title">MIDDLE SCHOOL or equivalent</h2>


                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name Of the School </td>
                                        <td>  @if(isset($data->firstedu_middle_nameofschool)) {{$data->firstedu_middle_nameofschool}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Full address
                                        </td>
                                        <td>  @if(isset($data->firstedu_middle_fulladdress)) {{$data->firstedu_middle_fulladdress}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Date course started

                                        </td>
                                        <td>  @if(isset($data->firstedu_middle_datecoursesstarted)) {{$data->firstedu_middle_datecoursesstarted}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date course ended

                                        </td>
                                        <td>  @if(isset($data->firstedu_middle_datecoursesended)) {{$data->firstedu_middle_datecoursesended}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Year obtained

                                        </td>
                                        <td>
                                        

                                                @if(!empty(isset($data->firstedu_middle_yearobt)))
                                                {{$data->firstedu_middle_yearobt}}
                                                @endif

                                               
                                    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Legal duration of the course


                                        </td>
                                        <td> 
                                        

                                                @if(!empty(isset($data->firstedu_middle_legal_duration)))
                                                     {{$data->firstedu_middle_legal_duration}}
                                                @endif

                                              
                                    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Name of the qualification obtained



                                        </td>
                                        <td>  @if(isset($data->firstedu_middle_qualification_obtained)) {{$data->firstedu_middle_qualification_obtained}} @endif
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
                                        <td>  @if(isset($data->firstedu_high_nameofschool)) {{$data->firstedu_high_nameofschool}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Full address
                                        </td>
                                        <td>  @if(isset($data->firstedu_high_fulladdress)) {{$data->firstedu_high_fulladdress}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Date course started

                                        </td>
                                        <td>  @if(isset($data->firstedu_high_datecoursesstarted)) {{$data->firstedu_high_datecoursesstarted}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date course ended

                                        </td>
                                        <td>  @if(isset($data->firstedu_high_datecoursesended)) {{$data->firstedu_high_datecoursesended}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Year obtained

                                        </td>
                                        <td> 
                                        
                                                @if(!empty(isset($data->firstedu_high_yearobt)))
                                                {{$data->firstedu_high_yearobt}}
                                                @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Legal duration of the course


                                        </td>
                                        <td> 
                                        

                                                @if(!empty(isset($data->firstedu_high_legal_duration)))
                                                {{$data->firstedu_high_legal_duration}}
                                                @endif

                                                  
                                    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Name of the qualification obtained



                                        </td>
                                        <td>  @if(isset($data->firstedu_high_qualification_obtained)) {{$data->firstedu_high_qualification_obtained}} @endif
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                                                    </div>
                                                    </div>
                    </div>
                    <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                    <b>HIGHER LEVEL QUALIFICATION (UNIVERISITY / VOCATIONAL QUALIFICATIONS)</b>
                                                    </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                                    <div class="accordion-body">
                                                        <p>Indicate all relevant qualifications obtained and that are relevant to the sector for your visa or skills assessment
                                application</p>

                            <p>Please start with your highest qualification obtained </p>

                            <h2 class="fs-title">QUALIFICATIONS 1
                            </h2>

                            <table>

                                <tbody>

                                    <tr>
                                        <td> Name of University/Institute </td>
                                        <td>  @if(isset($data->higher_level_qualification1_nameofuniversity)) {{$data->higher_level_qualification1_nameofuniversity}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Is this a university or vocational level qualification?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->higher_level_vocational_level_qualification1)))
                                                    {{$data->higher_level_vocational_level_qualification1}}
                                                @endif

                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Full address of the education provider
                                        </td>
                                        <td>  @if(isset($data->higher_level__qualification1_education_provider)) {{$data->higher_level__qualification1_education_provider}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Name of exact qualification obtained in the official
                                            language
                                        </td>
                                        <td>  @if(isset($data->higher_level_qualifciation1_official_languages)) {{$data->higher_level_qualifciation1_official_languages}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Name of the qualification obtained in English
                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification1_english)) {{$data->higher_level_qualification1_english}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Course duration

                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->higher_level_qualification1_course_duration)))
                                                {{$data->higher_level_qualification1_course_duration}}
                                                @endif

                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Date course started

                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification1_course_started)) {{$data->higher_level_qualification1_course_started}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date course extension_loaded

                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification1_course_ended)) {{$data->higher_level_qualification1_course_ended}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Was the course studied full-time or part-time


                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->higher_level_qualification1_full_part)))
                                                    {{$data->higher_level_qualification1_full_part}}
                                                @endif
                                                

                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Was this qualification obtained through course of
                                            study or via RPL?


                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->higher_level_qualification1_courseofstudy)))
                                                    {{$data->higher_level_qualification1_courseofstudy}}
                                                @endif
                                               

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Country where you studied


                                        </td>
                                        <td>

                                                @if(!empty(isset($data->higher_level_qualification1_country)))
                                                    {{$data->higher_level_qualification1_country}}
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Was a thesis or final project required to end the
                                            course? If so, specify the title of the thesis/project



                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification1_thesis_project))     {{$data->higher_level_qualification1_thesis_project}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Indicate the number of weeks (even if approximate)
                                            studied to complete the thesis/project



                                        </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->higher_level_qualification1_thesis_project_if)))
                                                    {{$data->higher_level_qualification1_thesis_project_if}}
                                                @endif

                                               
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <h2 class="fs-title" style="margin-top: 10px;">DOCS FOR HIGHER QUALIFICATION 1
                            </h2>
                            <p style="color:red">Attachments must be color scans of the original document and uploaded in PDF format only. Please consolidate all multipage files into one PDF document for each attachment type. Maximum PDF file size is 3MB per PDF. Unnecessary additional documents will cause delays in processing.
                            </p>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Qualification – Diploma/Award Certificate
                                        </td>
                                        <td> <input type="file" name="higher_level_qualification1_diploma_award" id="higher_level_qualification1_diploma_award">
                                            @if (array_key_exists('higher_level_qualification1_diploma_award', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_diploma_award/'.$docdataForm360['higher_level_qualification1_diploma_award'])  }}">
                                                @if(str_contains($docdataForm360['higher_level_qualification1_diploma_award'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_diploma_award/'.$docdataForm360['higher_level_qualification1_diploma_award'])  }}" />
                                                @endif
                                            </a>


                                            @endif


                                        </td>
                                    </tr>

                                    <tr>
                                        <td> List of exams taken

                                        </td>
                                        <td> <input type="file" name="higher_level_qualification1_listofexams" id="higher_level_qualification1_listofexams">

                                            @if (array_key_exists('higher_level_qualification1_listofexams', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_listofexams/'.$docdataForm360['higher_level_qualification1_listofexams'])  }}">
                                                @if(str_contains($docdataForm360['higher_level_qualification1_listofexams'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_listofexams/'.$docdataForm360['higher_level_qualification1_listofexams'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Diploma Supplement


                                        </td>
                                        <td> <input type="file" name="higher_level_qualification1_diploma_supplement" id="higher_level_qualification1_diploma_supplement">
                                            @if (array_key_exists('higher_level_qualification1_diploma_supplement', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_diploma_supplement/'.$docdataForm360['higher_level_qualification1_diploma_supplement'])  }}">
                                                @if(str_contains($docdataForm360['higher_level_qualification1_diploma_supplement'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification1_diploma_supplement/'.$docdataForm360['higher_level_qualification1_diploma_supplement'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2 class="fs-title">QUALIFICATIONS 2
                            </h2>

                            <table>

                                <tbody>

                                    <tr>
                                        <td> Name of University/Institute </td>
                                        <td>  @if(isset($data->higher_level_qualification2_nameofuniversity))       {{$data->higher_level_qualification2_nameofuniversity}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Is this a university or vocational level qualification?
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->higher_level_vocational_level_qualification2)))
                                                     {{$data->higher_level_vocational_level_qualification2}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Full address of the education provider
                                        </td>
                                        <td>  @if(isset($data->higher_level__qualification2_education_provider)) {{$data->higher_level__qualification2_education_provider}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Name of exact qualification obtained in the official
                                            language
                                        </td>
                                        <td>  @if(isset($data->higher_level_qualifciation2_official_languages)) {{$data->higher_level_qualifciation2_official_languages}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Name of the qualification obtained in English
                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification2_english)) {{$data->higher_level_qualification2_english}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Course duration

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->higher_level_qualification2_course_duration)))
                                                {{$data->higher_level_qualification2_course_duration}}
                                                @endif

                                                

                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Date course started

                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification2_course_started)) {{$data->higher_level_qualification2_course_started}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date course ended

                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification2_course_ended)) {{$data->higher_level_qualification2_course_ended}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Was the course studied full-time or part-time


                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->higher_level_qualification2_full_part)))
                                                    {{$data->higher_level_qualification2_full_part}}
                                                @endif
                                                

                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Was this qualification obtained through course of
                                            study or via RPL?


                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->higher_level_qualification2_courseofstudy)))
                                                    {{$data->higher_level_qualification2_courseofstudy}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Country where you studied


                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->higher_level_qualification2_country)))
                                                        {{$data->higher_level_qualification2_country}}
                                                @endif
                                               

                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Was a thesis or final project required to end the
                                            course? If so, specify the title of the thesis/project
                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification2_thesis_project)) {{$data->higher_level_qualification2_thesis_project}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Indicate the number of weeks (even if approximate)
                                            studied to complete the thesis/project



                                        </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->higher_level_qualification2_thesis_project_if)))
                                                {{$data->higher_level_qualification2_thesis_project_if}}
                                                @endif

                                               

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <h2 class="fs-title" style="margin-top: 10px;">DOCS FOR HIGHER QUALIFICATION 2
                            </h2>
                            <p style="color:red">Attachments must be colour scans of the original document and uploaded in PDF format only. Please consolidate all
                                multipage files into one PDF document for each attachment type. Maximum PDF file size is 3MB per PDF.
                                Unnecessary additional documents will cause delays in processing. </p>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Qualification – Diploma/Award Certificate
                                        </td>
                                        <td> <input type="file" name="higher_level_qualification2_diploma_award" id="higher_level_qualification2_diploma_award">
                                            @if (array_key_exists('higher_level_qualification2_diploma_award', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_diploma_award/'.$docdataForm360['higher_level_qualification2_diploma_award'])  }}">
                                                @if(str_contains($docdataForm360['higher_level_qualification2_diploma_award'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_diploma_award/'.$docdataForm360['higher_level_qualification2_diploma_award'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> List of exams taken

                                        </td>
                                        <td> <input type="file" name="higher_level_qualification2_listofexams" id="higher_level_qualification2_listofexams">
                                            @if (array_key_exists('higher_level_qualification2_listofexams', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_listofexams/'.$docdataForm360['higher_level_qualification2_listofexams'])  }}">
                                                @if(str_contains($docdataForm360['higher_level_qualification2_listofexams'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_listofexams/'.$docdataForm360['higher_level_qualification2_listofexams'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Diploma Supplement


                                        </td>
                                        <td> <input type="file" name="higher_level_qualification2_diploma_supplement" id="higher_level_qualification2_diploma_supplement">

                                            @if (array_key_exists('higher_level_qualification2_diploma_supplement', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_diploma_supplement/'.$docdataForm360['higher_level_qualification2_diploma_supplement'])  }}">
                                                @if(str_contains($docdataForm360['higher_level_qualification2_diploma_supplement'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification2_diploma_supplement/'.$docdataForm360['higher_level_qualification2_diploma_supplement'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2 class="fs-title">QUALIFICATIONS 3
                            </h2>


                            <table>

                                <tbody>

                                    <tr>
                                        <td> Name of University/Institute </td>
                                        <td>  @if(isset($data->higher_level_qualification3_nameofuniversity)) {{$data->higher_level_qualification3_nameofuniversity}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Is this a university or vocational level qualification?
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->higher_level_vocational_level_qualification3)))
                                               {{$data->higher_level_vocational_level_qualification3}}
                                                @endif



                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Full address of the education provider
                                        </td>
                                        <td>  @if(isset($data->higher_level__qualification3_education_provider)) {{$data->higher_level__qualification3_education_provider}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Name of exact qualification obtained in the official
                                            language
                                        </td>
                                        <td>  @if(isset($data->higher_level_qualifciation3_official_languages)) {{$data->higher_level_qualifciation3_official_languages}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Name of the qualification obtained in English
                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification3_english)) {{$data->higher_level_qualification3_english}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Course duration

                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification3_course_duration)) {{$data->higher_level_qualification3_course_duration}} @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Date course started

                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification3_course_started))     {{$data->higher_level_qualification3_course_started}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date course extension_loaded

                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification3_course_ended)) {{$data->higher_level_qualification3_course_ended}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Was the course studied full-time or part-time


                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->higher_level_qualification3_full_part)))
                                                    {{$data->higher_level_qualification3_full_part}}
                                                @endif
                                                


                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Was this qualification obtained through course of
                                            study or via RPL?


                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->higher_level_qualification3_courseofstudy)))
                                                {{$data->higher_level_qualification3_courseofstudy}}
                                                @endif
                                                

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Country where you studied


                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->higher_level_qualification3_country)))
                                               {{$data->higher_level_qualification3_country}}
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Was a thesis or final project required to end the
                                            course? If so, specify the title of the thesis/project



                                        </td>
                                        <td>  @if(isset($data->higher_level_qualification3_thesis_project)) {{$data->higher_level_qualification3_thesis_project}} @endif 
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Indicate the number of weeks (even if approximate)
                                            studied to complete the thesis/project



                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->higher_level_qualification3_thesis_project_if)))
                                                {{$data->higher_level_qualification3_thesis_project_if}}
                                                @endif

                                                

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <h2 class="fs-title" style="margin-top: 10px;">DOCS FOR HIGHER QUALIFICATION 3
                            </h2>
                            <p style="color:red">Attachments must be colour scans of the original document and uploaded in PDF format only. Please consolidate all
                                multipage files into one PDF document for each attachment type. Maximum PDF file size is 3MB per PDF.
                                Unnecessary additional documents will cause delays in processing. </p>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Qualification – Diploma/Award Certificate
                                        </td>
                                        <td> <input type="file" name="higher_level_qualification3_diploma_award" id="higher_level_qualification3_diploma_award">

                                            @if (array_key_exists('higher_level_qualification3_diploma_award', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_diploma_award/'.$docdataForm360['higher_level_qualification3_diploma_award'])  }}">
                                                @if(str_contains($docdataForm360['higher_level_qualification3_diploma_award'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_diploma_award/'.$docdataForm360['higher_level_qualification3_diploma_award'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> List of exams taken

                                        </td>
                                        <td> <input type="file" name="higher_level_qualification3_listofexams" id="higher_level_qualification3_listofexams">
                                            @if (array_key_exists('higher_level_qualification3_listofexams', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_listofexams/'.$docdataForm360['higher_level_qualification3_listofexams'])  }}">
                                                @if(str_contains($docdataForm360['higher_level_qualification3_listofexams'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_listofexams/'.$docdataForm360['higher_level_qualification3_listofexams'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Diploma Supplement


                                        </td>
                                        <td> <input type="file" name="higher_level_qualification3_diploma_supplement" id="higher_level_qualification3_diploma_supplement">
                                            @if (array_key_exists('higher_level_qualification3_diploma_supplement', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_diploma_supplement/'.$docdataForm360['higher_level_qualification3_diploma_supplement'])  }}">
                                                @if(str_contains($docdataForm360['higher_level_qualification3_diploma_supplement'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/higher_level_qualification3_diploma_supplement/'.$docdataForm360['higher_level_qualification3_diploma_supplement'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                                                    </div>
                                                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                        <b>APRENTICESHIP:</b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                        <table>
                                        <tbody>
                                            <tr>
                                                <td> Did you undergo a period of apprenticeship (apprendistato) either during your formal studies or after you finished your course of study?
                                                </td>
                                                <td> 
                                                

                                                        @if(!empty(isset($data->apprenticeship_formal_studies)))
                                                            {{$data->apprenticeship_formal_studies}}
                                                        @endif
                                                           
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> If yes, please specify what type of apprenticeship you did</td>
                                                <td>  @if(isset($data->apprenticeship_formal_studies_specify)) {{$data->apprenticeship_formal_studies_specify}} @endif  </td>
                                            </tr>

                                            <tr>
                                                <td> Indicate the total duration of the apprenticeship </td>
                                                <td> 
                                                

                                                        @if(!empty(isset($data->apprenticeship_total_duration)))
                                                            {{$data->apprenticeship_total_duration}}
                                                        @endif
                                                       
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Was the apprenticeship completed? </td>
                                                <td> 
                                                

                                                        @if(!empty(isset($data->apprenticeship_completed)))
                                                            {{$data->apprenticeship_completed}}
                                                        @endif
                                                         
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>What was the qualification you obtained at the
                                                    conclusion of the apprenticeship? </td>
                                                <td>  @if(isset($data->apprenticeship_conclusion)) {{$data->apprenticeship_conclusion}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Name of the company you did your apprenticeship
                                                    with </td>
                                                <td> @if(isset($data->apprenticeship_company)) {{$data->apprenticeship_company}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td> Address of the company where you did your apprenticeship </td>
                                                <td>  @if(isset($data->apprenticeship_company_address)) {{$data->apprenticeship_company_address}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td> Did you need a visa to perform the work in this country? If so, please specify the visa you held </td>
                                                <td>
                                                

                                                        @if(!empty(isset($data->apprenticeship_visa_country)))
                                                             {{$data->apprenticeship_visa_country}}
                                                        @endif
                                                            
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Please indicate your role </td>
                                                <td>  @if(isset($data->apprenticeship_position)) {{$data->apprenticeship_position}} @endif </td>
                                            </tr>


                                            <tr>
                                                <td> Start date </td>
                                                <td>  @if(isset($data->apprenticeship_start_date)) {{$data->apprenticeship_start_date}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td> End date (if still working indicate date of today) </td>
                                                <td>  @if(isset($data->apprenticeship_end_date)) {{$data->apprenticeship_end_date}} @endif </td>
                                            </tr>


                                            <tr>
                                                <td>Was this work full-time or part-time? </td>
                                                <td>
                                                

                                                        @if(!empty(isset($data->apprenticeship_fulltime_parttime)))
                                                        {{$data->apprenticeship_fulltime_parttime}}
                                                        @endif
                                                       
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Indicate the number of hours per week performed </td>
                                                <td>  @if(isset($data->apprenticeship_week_perhour)) {{$data->apprenticeship_week_perhour}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>List your main duties and responsibilities performed (please indicate 5 main duties and responsibilities) </td>
                                                <td>  @if(isset($data->apprenticeship_duties_responsibities)) {{$data->apprenticeship_duties_responsibities}} @endif </td>
                                            </tr>


                                            <tr>
                                                <td>Did you complete the apprenticeship and obtain the formal qualification through the apprenticeship?</td>
                                                <td>
                                                
                                                    @if(!empty(isset($data->apprenticeship_formal_qualification)))
                                                    {{$data->apprenticeship_formal_qualification}}
                                                    @endif
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Did you receive payments for this apprenticeship period?</td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->apprenticeship_payments)))
                                                             {{$data->apprenticeship_payments}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Can this work period be documented with evidence of payment such as payslips, contracts, etc.? </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->apprenticeship_period)))
                                                            {{$data->apprenticeship_period}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Was this work performed as an employee or by issuing an invoice?</td>
                                                <td>  @if(isset($data->apprenticeship_issue_invoice)) {{$data->apprenticeship_issue_invoice}}@endif </td>
                                            </tr>

                                            <tr>
                                                <td>Are you able to provide an employment or collaboration contract for this work period </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->apprenticeship_employment_collaboration)))
                                                            {{$data->apprenticeship_employment_collaboration}}
                                                        @endif
                                                      
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Can you provide payslips for this work period </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->apprenticeship_payslips)))
                                                             {{$data->apprenticeship_payslips}}
                                                        @endif
                                                       
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Can you provide taxation documents for this period such as Income tax returns?
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->apprenticeship_bank_statement)))
                                                            {{$data->apprenticeship_bank_statement}}
                                                        @endif
                                                       
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Can you provide bank statement showing payment in
                                                    your favour for the work performed?
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->apprenticeship_bank_statement)))
                                                        {{$data->apprenticeship_bank_statement}}
                                                        @endif
                                                       
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Are you able to get a reference letter from your
                                                    employer?
                                                </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->apprenticeship_reference_letter)))
                                                        {{$data->apprenticeship_reference_letter}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Name and surname of your referee</td>
                                                <td>  @if(isset($data->apprenticeship_name_surname)) {{$data->apprenticeship_name_surname}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Contact number of your referee</td>
                                                <td>  @if(isset($data->apprenticeship_referee_contact)) {{$data->apprenticeship_referee_contact}} @endif </td>
                                            </tr>

                                            <!-- <tr>
                                                <td>Contact number of your referee</td>
                                                <td> <input type="tel" name="apprenticeship_referee_contact" id="apprenticeship_referee_contact" @if(isset($data->apprenticeship_referee_contact)) value="{{$data->apprenticeship_referee_contact}}" @endif </td>
                                            </tr> -->
                                        </tbody>
                                    </table>

                                    <h2 class="fs-title" style="margin-top: 10px;">DOCS for Apprenticeship
                                    </h2>
                                    <p style="color:red">Attachments must be colour scans of the original document and uploaded in PDF format only. Please consolidate all
                                        multipage files into one PDF document for each attachment type. Maximum PDF file size is 3MB per PDF.
                                        Unnecessary additional documents will cause delays in processing. </p>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td> Apprenticeship contract
                                                </td>
                                                <td> <input type="file" name="apprenticeship_contract_doc" id="apprenticeship_contract_doc">
                                            
                                                @if (array_key_exists('apprenticeship_contract_doc', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_contract_doc/'.$docdataForm360['apprenticeship_contract_doc'])  }}">
                                                                                        @if(str_contains($docdataForm360['apprenticeship_contract_doc'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_contract_doc/'.$docdataForm360['apprenticeship_contract_doc'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            
                                            
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Apprenticeship completion letter issued by the employer
                                                </td>
                                                <td> <input type="file" name="apprenticeship_completion_letter" id="apprenticeship_completion_letter">
                                            
                                                @if (array_key_exists('apprenticeship_completion_letter', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_completion_letter/'.$docdataForm360['apprenticeship_completion_letter'])  }}">
                                                                                        @if(str_contains($docdataForm360['apprenticeship_completion_letter'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_completion_letter/'.$docdataForm360['apprenticeship_completion_letter'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslip for the first year of apprenticeship 
                                                </td>
                                                <td> <input type="file" name="apprenticeship_payslip_current_year" id="apprenticeship_payslip_current_year">
                                            
                                                @if (array_key_exists('apprenticeship_payslip_current_year', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_payslip_current_year/'.$docdataForm360['apprenticeship_payslip_current_year'])  }}">
                                                                                        @if(str_contains($docdataForm360['apprenticeship_payslip_current_year'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_payslip_current_year/'.$docdataForm360['apprenticeship_payslip_current_year'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslip for the second year of apprenticeship 
                                                </td>
                                                <td> <input type="file" name="apprenticeship_previous_year" id="apprenticeship_previous_year">
                                            
                                            
                                                @if (array_key_exists('apprenticeship_previous_year', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_previous_year/'.$docdataForm360['apprenticeship_previous_year'])  }}">
                                                                                        @if(str_contains($docdataForm360['apprenticeship_previous_year'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_previous_year/'.$docdataForm360['apprenticeship_previous_year'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslip for the third year of apprenticeship  
                                                </td>
                                                <td> <input type="file" name="apprenticeship_third_year" id="apprenticeship_third_year">
                                            
                                            
                                                @if (array_key_exists('apprenticeship_third_year', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_third_year/'.$docdataForm360['apprenticeship_third_year'])  }}">
                                                                                        @if(str_contains($docdataForm360['apprenticeship_third_year'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_third_year/'.$docdataForm360['apprenticeship_third_year'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Income tax return of the last year of work performed as an apprentice (in Italy this document is called CUD)
                                                </td>
                                                <td> <input type="file" name="apprenticeship_tax_return" id="apprenticeship_tax_return">
                                                @if (array_key_exists('apprenticeship_tax_return', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_tax_return/'.$docdataForm360['apprenticeship_tax_return'])  }}">
                                                                                        @if(str_contains($docdataForm360['apprenticeship_tax_return'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_tax_return/'.$docdataForm360['apprenticeship_tax_return'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Social Security payment evidence chart (such as Tabella INPS for Italy) or any other equivalent document issued by the National Social Security Body or dedicated
                                                    registration body showing the payments that were made in your favor for the entire period of apprenticeship 
                                                </td>
                                                <td> <input type="file" name="apprenticeship_social_security" id="apprenticeship_social_security">
                                            
                                            
                                                @if (array_key_exists('apprenticeship_social_security', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_social_security/'.$docdataForm360['apprenticeship_social_security'])  }}">
                                                                                        @if(str_contains($docdataForm360['apprenticeship_social_security'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/apprenticeship_social_security/'.$docdataForm360['apprenticeship_social_security'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>


                                        </tbody>
                                    </table>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                    <b>WORK EXPERIENCE (CURRENT OR MOST RECENT) NOT OLDER THAN 10 YEARS</b>
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                                    <div class="accordion-body">
                                    <table>
                                        <tbody>

                                            <tr>
                                                <td>Are you currently employed? </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->workexp_current_employed)))
                                                            {{$data->workexp_current_employed}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If you are employed, are you currently working
                                                    for your future sponsor?
                                                </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->workexp_current_future_sponsor)))
                                                        {{$data->workexp_current_future_sponsor}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>What is your current or most recent
                                                    occupation?
                                                </td>
                                                <td>  @if(isset($data->workexp_current_recent_occupation)) {{$data->workexp_current_recent_occupation}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Are you retired? </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->workexp_retired)))
                                                            {{$data->workexp_retired}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If retired, when did you retire? </td>
                                                <td> @if(isset($data->workexp_if_retired)) {{$data->workexp_if_retired}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>What was your last occupation before
                                                    retiring
                                                </td>
                                                <td> @if(isset($data->workexp_last_occupation)) {{$data->workexp_last_occupation}} @endif </td>
                                            </tr>


                                            </tbody>
                                        </table>


                                    <!-- word experience infos start -->

                                    <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.1 – INFO
                                    </h2>
                                    <p style="color:red">FOR EACH WORKING PERIOD PLEASE INDICATE THE FOLLOWING. PLEASE REFER ONLY TO WORK THAT IS RELEVANT
                                        TO THE OCCUPATION YOU WILL BE PERFORMING ON YOUR VISA. </p>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td> Your Position
                                                </td>
                                                <td> @if(isset($data->workexp1_your_position)) {{$data->workexp1_your_position}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Position Type
                                                </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->workexp1_your_position_type)))
                                                        {{$data->workexp1_your_position_type}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Employer/Name of the business you work for
                                                </td>
                                                <td>  @if(isset($data->workexp1_employer_name)) {{$data->workexp1_employer_name}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Country where the business is located

                                                </td>
                                                <td>
                                               
                                                        @if(!empty(isset($data->workexp1_business_country)))
                                                            {{$data->workexp1_business_country}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Date work started

                                                </td>
                                                <td>  @if(isset($data->workexp1_date_work_started)) {{$data->workexp1_date_work_started}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Date work ended (if still working please leave
                                                    blank)

                                                </td>
                                                <td>  @if(isset($data->workexp1_date_work_ended)) {{$data->workexp1_date_work_ended}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Description of duties (please indicate 5 main
                                                    duties)

                                                </td>
                                                <td>  @if(isset($data->workexp1_description_duties)) {{$data->workexp1_description_duties}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Please confirm that this work experience is
                                                    related to the nominated position

                                                </td>
                                                <td>
                                                
                                                        @if(!empty(isset($data->workexp1_nominated_position)))
                                                            {{$data->workexp1_nominated_position}}
                                                        @endif
                                                           
                                            </td>
                                            </tr>

                                            <tr>
                                                <td>Was this work performed in Australia or New
                                                    Zealand?
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->workexp1_performed_in_aus_nz)))
                                                            {{$data->workexp1_performed_in_aus_nz}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If yes, please specify with what visa you have
                                                    worked with this employer

                                                </td>
                                                <td>  @if(isset($data->workexp1_visa_employer)) {{$data->workexp1_visa_employer}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Did you receive a payslip for this work or an
                                                    invoice?
                                                </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->workexp1_payslips_for_this_week)))
                                                            {{$data->workexp1_payslips_for_this_week}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Can you provide the contact details of a person
                                                    for this work period
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->workexp1_contact_details_work_period)))
                                                        {{$data->workexp1_contact_details_work_period}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If yes, please indicate
                                                </td>
                                                <td>  @if(isset($data->workexp1_contact_details_work_period_indicate)) {{$data->workexp1_contact_details_work_period_indicate}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Name & Surname
                                                </td>
                                                <td>  @if(isset($data->workexp1_contact_details_work_period_name)){{$data->workexp1_contact_details_work_period_name}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Position
                                                </td>
                                                <td>  @if(isset($data->workexp1_contact_details_work_period_position)) {{$data->workexp1_contact_details_work_period_position}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Email
                                                </td>
                                                <td>  @if(isset($data->workexp1_contact_details_work_period_email)) {{$data->workexp1_contact_details_work_period_email}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Phone contact
                                                </td>
                                                <td>  @if(isset($data->workexp1_contact_details_work_period_phone)) {{$data->workexp1_contact_details_work_period_phone}} @endif </td>

                                            </tr>

                                        </tbody>
                                    </table>

                                    <!-- word experience infos end -->


                                    <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.1 – DOCS TO BE UPLOADED
                                    </h2>
                                    <h2 class="fs-title" style="margin-top: 10px;"> EMPLOYMENT CONTRACT LETTER
                                    </h2>


                                    <table>
                                        <tbody>
                                            <tr>
                                                <td> Employment contract or appointment letter  </td>
                                                <td> <input type="file" name="workexp1_employment_contract" id="workexp1_employment_contract">
                                            
                                                @if (array_key_exists('workexp1_employment_contract', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_employment_contract/'.$docdataForm360['workexp1_employment_contract'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_employment_contract'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_employment_contract/'.$docdataForm360['workexp1_employment_contract'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            
                                            </td>
                                            </tr>
                                            <tr>
                                                <td> Reference letter (only if you have one already)  </td>
                                                <td> <input type="file" name="workexp1_employment_reference_letter" id="workexp1_employment_reference_letter">
                                            
                                                @if (array_key_exists('workexp1_employment_reference_letter', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_employment_reference_letter/'.$docdataForm360['workexp1_employment_reference_letter'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_employment_reference_letter'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_employment_reference_letter/'.$docdataForm360['workexp1_employment_reference_letter'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h2 class="fs-title" style="margin-top: 10px;"> Payslips</h2>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Payslip for the current or most recent year of work 
                                                </td>
                                                <td> <input type="file" name="workexp1_current_year_of_experience" id="workexp1_current_year_of_experience">
                                            
                                                @if (array_key_exists('workexp1_current_year_of_experience', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_current_year_of_experience/'.$docdataForm360['workexp1_current_year_of_experience'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_current_year_of_experience'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_current_year_of_experience/'.$docdataForm360['workexp1_current_year_of_experience'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslips for the 2nd year of work (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp1_previous_year_of_experience1" id="workexp1_previous_year_of_experience1">
                                            
                                                @if (array_key_exists('workexp1_previous_year_of_experience1', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience1/'.$docdataForm360['workexp1_previous_year_of_experience1'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_previous_year_of_experience1'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience1/'.$docdataForm360['workexp1_previous_year_of_experience1'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslips for the 3rd year of work (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp1_previous_year_of_experience2" id="workexp1_previous_year_of_experience2">
                                            
                                                @if (array_key_exists('workexp1_previous_year_of_experience2', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience2/'.$docdataForm360['workexp1_previous_year_of_experience2'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_previous_year_of_experience2'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience2/'.$docdataForm360['workexp1_previous_year_of_experience2'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslips for the 4th year of work (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp1_previous_year_of_experience3" id="workexp1_previous_year_of_experience3">
                                            
                                                @if (array_key_exists('workexp1_previous_year_of_experience3', $docdataForm360))
                                                                                        
                                                    <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience3/'.$docdataForm360['workexp1_previous_year_of_experience3'])  }}">
                                                    @if(str_contains($docdataForm360['workexp1_previous_year_of_experience3'] , '.pdf'))
                                                    <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                    @else
                                                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_previous_year_of_experience3/'.$docdataForm360['workexp1_previous_year_of_experience3'])  }}"  />
                                                    @endif
                                                    </a>
                                                                                        
                                                                                        
                                                @endif   
                                            </td>
                                            </tr>


                                        </tbody>
                                    </table>

                                    <h2 class="fs-title" style="margin-top: 10px;"> INCOME TAX RETURN (In Italy CUD) FOR EACH YEAR OF WORK PERFORMED. </h2>
                                    <p style="color:red;">For Australia: The Income tax return can be found by logging onto the MyGov website site, ATO section. Click on the linked services. One on the ATO section, on the top left side you can click on Tax – Lodgements. Once on the Tax page, you can click on History to view all the Income tax returns you have lodged. You will need to send us the document that is generated from the link called Notice of Assessment
                                    </p>
                                    <p style="color:red;">For Italy: This document is called CUD </p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the current or most recent year of work performed 
                                                </td>
                                                <td> <input type="file" name="workexp1_income_tax_return1" id="workexp1_income_tax_return1">
                                                @if (array_key_exists('workexp1_income_tax_return1', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return1/'.$docdataForm360['workexp1_income_tax_return1'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_income_tax_return1'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return1/'.$docdataForm360['workexp1_income_tax_return1'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif  
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the 2nd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp1_income_tax_return2" id="workexp1_income_tax_return2">
                                                @if (array_key_exists('workexp1_income_tax_return2', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return2/'.$docdataForm360['workexp1_income_tax_return2'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_income_tax_return2'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return2/'.$docdataForm360['workexp1_income_tax_return2'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif  
                                            </td>
                                            </tr>

                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the 3rd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp1_income_tax_return2_1" id="workexp1_income_tax_return2_1">
                                                @if (array_key_exists('workexp1_income_tax_return2_1', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return2_1/'.$docdataForm360['workexp1_income_tax_return2_1'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_income_tax_return2_1'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_income_tax_return2_1/'.$docdataForm360['workexp1_income_tax_return2_1'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif  
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the 4th year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp1_relevant_doc" id="workexp1_relevant_doc">
                                                @if (array_key_exists('workexp1_relevant_doc', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_relevant_doc/'.$docdataForm360['workexp1_relevant_doc'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_relevant_doc'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_relevant_doc/'.$docdataForm360['workexp1_relevant_doc'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif      
                                            </td>
                                            </tr>





                                        </tbody>
                                    </table>


                                    <h2 class="fs-title" style="margin-top: 10px;"> PAYG </h2>
                                
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>PayG for the current or most recent year of work performed  
                                                </td>
                                                <td> <input type="file" name="workexp1_payg_one" id="workexp1_payg_one">
                                            
                                                @if (array_key_exists('workexp1_payg_one', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_one/'.$docdataForm360['workexp1_payg_one'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_payg_one'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_one/'.$docdataForm360['workexp1_payg_one'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> PayG for the 2nd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp1_payg_two" id="workexp1_payg_two">
                                            
                                                @if (array_key_exists('workexp1_payg_two', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_two/'.$docdataForm360['workexp1_payg_two'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_payg_two'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_two/'.$docdataForm360['workexp1_payg_two'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> PayG for the 3rd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp1_payg_three" id="workexp1_payg_three">
                                            
                                                @if (array_key_exists('workexp1_payg_three', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_three/'.$docdataForm360['workexp1_payg_three'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_payg_three'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_three/'.$docdataForm360['workexp1_payg_three'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> PayG for the 4th year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp1_payg_four" id="workexp1_payg_four">
                                            
                                                @if (array_key_exists('workexp1_payg_four', $docdataForm360))
                                                                                        
                                                    <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_four/'.$docdataForm360['workexp1_payg_four'])  }}">
                                                    @if(str_contains($docdataForm360['workexp1_payg_four'] , '.pdf'))
                                                    <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                    @else
                                                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_payg_four/'.$docdataForm360['workexp1_payg_four'])  }}"  />
                                                    @endif
                                                    </a>
                                                                                        
                                                                                        
                                                @endif   
                                            </td>
                                            </tr>


                                        </tbody>
                                    </table>

                                

                                    <h2 class="fs-title" style="margin-top: 10px;"> INPS CHART (Italian employment only) </h2>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Tabella estratto contributivo INPS
                                                </td>
                                                <td> <input type="file" name="workexp1_tabella_estratto" id="workexp1_tabella_estratto">
                                                @if (array_key_exists('workexp1_tabella_estratto', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_tabella_estratto/'.$docdataForm360['workexp1_tabella_estratto'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp1_tabella_estratto'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp1_tabella_estratto/'.$docdataForm360['workexp1_tabella_estratto'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>


                                    <!-- work exprrience 2 start  -->

                                    <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.2 – INFO
                                    </h2>
                                    <p style="color:red">FOR EACH WORKING PERIOD PLEASE INDICATE THE FOLLOWING. PLEASE REFER ONLY TO WORK THAT IS RELEVANT
                                        TO THE OCCUPATION YOU WILL BE PERFORMING ON YOUR VISA. </p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td> Your Position
                                                </td>
                                                <td>  @if(isset($data->workexp2_your_position)) {{$data->workexp2_your_position}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Position Type
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->workexp2_your_position_type)))
                                                        {{$data->workexp2_your_position_type}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Employer/Name of the business you work for
                                                </td>
                                                <td>  @if(isset($data->workexp2_employer_name)) {{$data->workexp2_employer_name}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Country where the business is located

                                                </td>
                                                <td>
                                              
                                                        @if(!empty(isset($data->workexp2_business_country)))
                                                             {{$data->workexp2_business_country}}
                                                        @endif
                                                      
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Date work started

                                                </td>
                                                <td>  @if(isset($data->workexp2_date_work_started)) {{$data->workexp2_date_work_started}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Date work ended (if still working please leave
                                                    blank)

                                                </td>
                                                <td>  @if(isset($data->workexp2_date_work_ended)) {{$data->workexp2_date_work_ended}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Description of duties (please indicate 5 main
                                                    duties)

                                                </td>
                                                <td>  @if(isset($data->workexp2_description_duties)) {{$data->workexp2_description_duties}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Please confirm that this work experience is
                                                    related to the nominated position

                                                </td>
                                                <td>
                                                

                                                        @if(!empty(isset($data->workexp2_nominated_position)))
                                                            {{$data->workexp2_nominated_position}}
                                                        @endif
                                                          
                                            </td>
                                            </tr>

                                            <tr>
                                                <td>Was this work performed in Australia or New
                                                    Zealand?
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->workexp2_performed_in_aus_nz)))
                                                            {{$data->workexp2_performed_in_aus_nz}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If yes, please specify with what visa you have
                                                    worked with this employer

                                                </td>
                                                <td>  @if(isset($data->workexp2_visa_employer)) {{$data->workexp2_visa_employer}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Did you receive a payslip for this work or an
                                                    invoice?
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->workexp2_payslips_for_this_week)))
                                                            {{$data->workexp2_payslips_for_this_week}}
                                                        @endif
                                                      
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Can you provide the contact details of a person
                                                    for this work period
                                                </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->workexp2_contact_details_work_period)))
                                                            {{$data->workexp2_contact_details_work_period}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If yes, please indicate
                                                </td>
                                                <td>  @if(isset($data->workexp2_contact_details_work_period_indicate)) {{$data->workexp2_contact_details_work_period_indicate}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Name & Surname
                                                </td>
                                                <td>  @if(isset($data->workexp2_contact_details_work_period_name)) {{$data->workexp2_contact_details_work_period_name}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Position
                                                </td>
                                                <td>  @if(isset($data->workexp2_contact_details_work_period_position)){{$data->workexp2_contact_details_work_period_position}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Email
                                                </td>
                                                <td> @if(isset($data->workexp2_contact_details_work_period_email)) {{$data->workexp2_contact_details_work_period_email}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Phone contact
                                                </td>
                                                <td>  @if(isset($data->workexp2_contact_details_work_period_phone)) {{$data->workexp2_contact_details_work_period_phone}} @endif </td>

                                            </tr>

                                        </tbody>
                                    </table>

                                    
                                    <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.2 – DOCS TO BE UPLOADED
                                    </h2>
                                    <h2 class="fs-title" style="margin-top: 10px;"> EMPLOYMENT CONTRACT LETTER
                                    </h2>


                                    <table>
                                        <tbody>
                                            <tr>
                                                <td> Employment contract or appointment letter  </td>
                                                <td> <input type="file" name="workexp2_employment_contract" id="workexp2_employment_contract">
                                            
                                                @if (array_key_exists('workexp2_employment_contract', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_employment_contract/'.$docdataForm360['workexp2_employment_contract'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_employment_contract'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_employment_contract/'.$docdataForm360['workexp2_employment_contract'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            
                                            </td>
                                            </tr>
                                            <tr>
                                                <td> Reference letter (only if you have one already)  </td>
                                                <td> <input type="file" name="workexp2_employment_contract" id="workexp2_employment_contract">
                                            
                                                @if (array_key_exists('workexp2_employment_contract', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_employment_contract/'.$docdataForm360['workexp2_employment_contract'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_employment_contract'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_employment_contract/'.$docdataForm360['workexp2_employment_contract'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h2 class="fs-title" style="margin-top: 10px;"> Payslips</h2>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Payslip for the current or most recent year of work 
                                                </td>
                                                <td> <input type="file" name="workexp2_current_year_of_experience" id="workexp2_current_year_of_experience">
                                            
                                                @if (array_key_exists('workexp2_current_year_of_experience', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_current_year_of_experience/'.$docdataForm360['workexp2_current_year_of_experience'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_current_year_of_experience'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_current_year_of_experience/'.$docdataForm360['workexp2_current_year_of_experience'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslips for the 2nd year of work (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp2_previous_year_of_experience1" id="workexp2_previous_year_of_experience1">
                                            
                                                @if (array_key_exists('workexp2_previous_year_of_experience1', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience1/'.$docdataForm360['workexp2_previous_year_of_experience1'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_previous_year_of_experience1'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience1/'.$docdataForm360['workexp2_previous_year_of_experience1'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslips for the 3rd year of work (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp2_previous_year_of_experience2" id="workexp2_previous_year_of_experience2">
                                            
                                                @if (array_key_exists('workexp2_previous_year_of_experience2', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience2/'.$docdataForm360['workexp2_previous_year_of_experience2'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_previous_year_of_experience2'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience2/'.$docdataForm360['workexp2_previous_year_of_experience2'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslips for the 4th year of work (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp2_previous_year_of_experience3" id="workexp2_previous_year_of_experience3">
                                            
                                                @if (array_key_exists('workexp2_previous_year_of_experience3', $docdataForm360))
                                                                                        
                                                    <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience3/'.$docdataForm360['workexp2_previous_year_of_experience3'])  }}">
                                                    @if(str_contains($docdataForm360['workexp2_previous_year_of_experience3'] , '.pdf'))
                                                    <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                    @else
                                                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_previous_year_of_experience3/'.$docdataForm360['workexp2_previous_year_of_experience3'])  }}"  />
                                                    @endif
                                                    </a>
                                                                                        
                                                                                        
                                                @endif   
                                            </td>
                                            </tr>


                                        </tbody>
                                    </table>

                                    <h2 class="fs-title" style="margin-top: 10px;"> INCOME TAX RETURN (In Italy CUD) FOR EACH YEAR OF WORK PERFORMED. </h2>
                                    <p style="color:red;">For Australia: The Income tax return can be found by logging onto the MyGov website site, ATO section. Click on the linked services. One on the ATO section, on the top left side you can click on Tax – Lodgements. Once on the Tax page, you can click on History to view all the Income tax returns you have lodged. You will need to send us the document that is generated from the link called Notice of Assessment
                                    </p>
                                    <p style="color:red;">For Italy: This document is called CUD </p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the current or most recent year of work performed 
                                                </td>
                                                <td> <input type="file" name="workexp2_income_tax_return1" id="workexp2_income_tax_return1">
                                                @if (array_key_exists('workexp2_income_tax_return1', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return1/'.$docdataForm360['workexp2_income_tax_return1'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_income_tax_return1'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return1/'.$docdataForm360['workexp2_income_tax_return1'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif  
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the 2nd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp2_income_tax_return2" id="workexp2_income_tax_return2">
                                                @if (array_key_exists('workexp2_income_tax_return2', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return2/'.$docdataForm360['workexp2_income_tax_return2'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_income_tax_return2'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return2/'.$docdataForm360['workexp2_income_tax_return2'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif  
                                            </td>
                                            </tr>

                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the 3rd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp2_income_tax_return2_1" id="workexp2_income_tax_return2_1">
                                                @if (array_key_exists('workexp2_income_tax_return2_1', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return2_1/'.$docdataForm360['workexp2_income_tax_return2_1'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_income_tax_return2_1'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_income_tax_return2_1/'.$docdataForm360['workexp2_income_tax_return2_1'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif  
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the 4th year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp2_relevant_doc" id="workexp2_relevant_doc">
                                                @if (array_key_exists('workexp2_relevant_doc', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_relevant_doc/'.$docdataForm360['workexp2_relevant_doc'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_relevant_doc'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_relevant_doc/'.$docdataForm360['workexp2_relevant_doc'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif      
                                            </td>
                                            </tr>





                                        </tbody>
                                    </table>


                                    <h2 class="fs-title" style="margin-top: 10px;"> PAYG </h2>
                                
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>PayG for the current or most recent year of work performed  
                                                </td>
                                                <td> <input type="file" name="workexp2_payg_one" id="workexp2_payg_one">
                                            
                                                @if (array_key_exists('workexp2_payg_one', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_one/'.$docdataForm360['workexp2_payg_one'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_payg_one'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_one/'.$docdataForm360['workexp2_payg_one'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> PayG for the 2nd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp2_payg_two" id="workexp2_payg_two">
                                            
                                                @if (array_key_exists('workexp2_payg_two', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_two/'.$docdataForm360['workexp2_payg_two'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_payg_two'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_two/'.$docdataForm360['workexp2_payg_two'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> PayG for the 3rd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp2_payg_three" id="workexp2_payg_three">
                                            
                                                @if (array_key_exists('workexp2_payg_three', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_three/'.$docdataForm360['workexp2_payg_three'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_payg_three'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_three/'.$docdataForm360['workexp2_payg_three'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> PayG for the 4th year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp2_payg_four" id="workexp2_payg_four">
                                            
                                                @if (array_key_exists('workexp2_payg_four', $docdataForm360))
                                                                                        
                                                    <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_four/'.$docdataForm360['workexp2_payg_four'])  }}">
                                                    @if(str_contains($docdataForm360['workexp2_payg_four'] , '.pdf'))
                                                    <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                    @else
                                                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_payg_four/'.$docdataForm360['workexp2_payg_four'])  }}"  />
                                                    @endif
                                                    </a>
                                                                                        
                                                                                        
                                                @endif   
                                            </td>
                                            </tr>


                                        </tbody>
                                    </table>

                                

                                    <h2 class="fs-title" style="margin-top: 10px;"> INPS CHART (Italian employment only) </h2>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Tabella estratto contributivo INPS
                                                </td>
                                                <td> <input type="file" name="workexp2_tabella_estratto" id="workexp2_tabella_estratto">
                                                @if (array_key_exists('workexp2_tabella_estratto', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_tabella_estratto/'.$docdataForm360['workexp2_tabella_estratto'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp2_tabella_estratto'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp2_tabella_estratto/'.$docdataForm360['workexp2_tabella_estratto'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>



                                        <!-- work exprrience 3 start  -->

                                <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.3 – INFO
                                    </h2>
                                    <p style="color:red">FOR EACH WORKING PERIOD PLEASE INDICATE THE FOLLOWING. PLEASE REFER ONLY TO WORK THAT IS RELEVANT
                                        TO THE OCCUPATION YOU WILL BE PERFORMING ON YOUR VISA. </p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td> Your Position
                                                </td>
                                                <td> @if(isset($data->workexp3_your_position)) {{$data->workexp3_your_position}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Position Type
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->workexp3_your_position_type)))
                                                            {{$data->workexp3_your_position_type}}
                                                        @endif
                                                       
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Employer/Name of the business you work for
                                                </td>
                                                <td>  @if(isset($data->workexp3_employer_name)) {{$data->workexp3_employer_name}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Country where the business is located

                                                </td>
                                                <td>
                                               
                                                        @if(!empty(isset($data->workexp3_business_country)))
                                                            {{$data->workexp3_business_country}}
                                                        @endif
                                                       
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Date work started

                                                </td>
                                                <td>  @if(isset($data->workexp3_date_work_started)) {{$data->workexp3_date_work_started}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Date work ended (if still working please leave
                                                    blank)

                                                </td>
                                                <td>  @if(isset($data->workexp3_date_work_ended)) {{$data->workexp3_date_work_ended}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Description of duties (please indicate 5 main
                                                    duties)

                                                </td>
                                                <td>  @if(isset($data->workexp3_description_duties)) {{$data->workexp3_description_duties}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Please confirm that this work experience is
                                                    related to the nominated position

                                                </td>
                                                <td>
                                               

                                                        @if(!empty(isset($data->workexp3_nominated_position)))
                                                            {{$data->workexp3_nominated_position}}
                                                        @endif
                                                          
                                            </td>
                                            </tr>

                                            <tr>
                                                <td>Was this work performed in Australia or New
                                                    Zealand?
                                                </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->workexp3_performed_in_aus_nz)))
                                                            {{$data->workexp3_performed_in_aus_nz}}
                                                        @endif
                                                      
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If yes, please specify with what visa you have
                                                    worked with this employer

                                                </td>
                                                <td>  @if(isset($data->workexp3_visa_employer)) {{$data->workexp3_visa_employer}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Did you receive a payslip for this work or an
                                                    invoice?
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->workexp3_payslips_for_this_week)))
                                                            {{$data->workexp3_payslips_for_this_week}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Can you provide the contact details of a person
                                                    for this work period
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->workexp3_contact_details_work_period)))
                                                             {{$data->workexp3_contact_details_work_period}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If yes, please indicate
                                                </td>
                                                <td>  @if(isset($data->workexp3_contact_details_work_period_indicate)) {{$data->workexp3_contact_details_work_period_indicate}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Name & Surname
                                                </td>
                                                <td>  @if(isset($data->workexp3_contact_details_work_period_name)) {{$data->workexp3_contact_details_work_period_name}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Position
                                                </td>
                                                <td>  @if(isset($data->workexp3_contact_details_work_period_position)) {{$data->workexp3_contact_details_work_period_position}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Email
                                                </td>
                                                <td>  @if(isset($data->workexp3_contact_details_work_period_email)) {{$data->workexp3_contact_details_work_period_email}} @endif </td>

                                            </tr>

                                            <tr>
                                                <td>Phone contact
                                                </td>
                                                <td>  @if(isset($data->workexp3_contact_details_work_period_phone)) {{$data->workexp3_contact_details_work_period_phone}} @endif </td>

                                            </tr>

                                        </tbody>
                                    </table>

                                    
                                    <h2 class="fs-title" style="margin-top: 10px;">WORK EXPERIENCE N.3 – DOCS TO BE UPLOADED
                                    </h2>
                                    <h2 class="fs-title" style="margin-top: 10px;"> EMPLOYMENT CONTRACT LETTER
                                    </h2>


                                    <table>
                                        <tbody>
                                            <tr>
                                                <td> Employment contract or appointment letter  </td>
                                                <td> <input type="file" name="workexp3_employment_contract" id="workexp3_employment_contract">
                                            
                                                @if (array_key_exists('workexp3_employment_contract', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_employment_contract/'.$docdataForm360['workexp3_employment_contract'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_employment_contract'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_employment_contract/'.$docdataForm360['workexp3_employment_contract'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            
                                            </td>
                                            </tr>
                                            <tr>
                                                <td> Reference letter (only if you have one already)  </td>
                                                <td> <input type="file" name="workexp3_employment_contract" id="workexp3_employment_contract">
                                            
                                                @if (array_key_exists('workexp3_employment_contract', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_employment_contract/'.$docdataForm360['workexp3_employment_contract'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_employment_contract'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_employment_contract/'.$docdataForm360['workexp3_employment_contract'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h2 class="fs-title" style="margin-top: 10px;"> Payslips</h2>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Payslip for the current or most recent year of work 
                                                </td>
                                                <td> <input type="file" name="workexp3_current_year_of_experience" id="workexp3_current_year_of_experience">
                                            
                                                @if (array_key_exists('workexp3_current_year_of_experience', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_current_year_of_experience/'.$docdataForm360['workexp3_current_year_of_experience'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_current_year_of_experience'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_current_year_of_experience/'.$docdataForm360['workexp3_current_year_of_experience'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslips for the 2nd year of work (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp3_previous_year_of_experience1" id="workexp3_previous_year_of_experience1">
                                            
                                                @if (array_key_exists('workexp3_previous_year_of_experience1', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_previous_year_of_experience1/'.$docdataForm360['workexp3_previous_year_of_experience1'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_previous_year_of_experience1'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_previous_year_of_experience1/'.$docdataForm360['workexp3_previous_year_of_experience1'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslips for the 3rd year of work (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp3_previous_year_of_experience2" id="workexp3_previous_year_of_experience2">
                                            
                                                @if (array_key_exists('workexp3_previous_year_of_experience2', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_previous_year_of_experience2/'.$docdataForm360['workexp3_previous_year_of_experience2'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_previous_year_of_experience2'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_previous_year_of_experience2/'.$docdataForm360['workexp3_previous_year_of_experience2'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> Payslips for the 4th year of work (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp3_previous_year_of_experience3" id="workexp3_previous_year_of_experience3">
                                            
                                                @if (array_key_exists('workexp3_previous_year_of_experience3', $docdataForm360))
                                                                                        
                                                    <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_previous_year_of_experience3/'.$docdataForm360['workexp3_previous_year_of_experience3'])  }}">
                                                    @if(str_contains($docdataForm360['workexp3_previous_year_of_experience3'] , '.pdf'))
                                                    <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                    @else
                                                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_previous_year_of_experience3/'.$docdataForm360['workexp3_previous_year_of_experience3'])  }}"  />
                                                    @endif
                                                    </a>
                                                                                        
                                                                                        
                                                @endif   
                                            </td>
                                            </tr>


                                        </tbody>
                                    </table>

                                    <h2 class="fs-title" style="margin-top: 10px;"> INCOME TAX RETURN (In Italy CUD) FOR EACH YEAR OF WORK PERFORMED. </h2>
                                    <p style="color:red;">For Australia: The Income tax return can be found by logging onto the MyGov website site, ATO section. Click on the linked services. One on the ATO section, on the top left side you can click on Tax – Lodgements. Once on the Tax page, you can click on History to view all the Income tax returns you have lodged. You will need to send us the document that is generated from the link called Notice of Assessment
                                    </p>
                                    <p style="color:red;">For Italy: This document is called CUD </p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the current or most recent year of work performed 
                                                </td>
                                                <td> <input type="file" name="workexp3_income_tax_return1" id="workexp3_income_tax_return1">
                                                @if (array_key_exists('workexp3_income_tax_return1', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_income_tax_return1/'.$docdataForm360['workexp3_income_tax_return1'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_income_tax_return1'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_income_tax_return1/'.$docdataForm360['workexp3_income_tax_return1'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif  
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the 2nd year of work performed (if applicable)
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
                                                <td>Income tax return Notice of Assessment or CUD for the 3rd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp3_income_tax_return2_1" id="workexp3_income_tax_return2_1">
                                                @if (array_key_exists('workexp3_income_tax_return2_1', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_income_tax_return2_1/'.$docdataForm360['workexp3_income_tax_return2_1'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_income_tax_return2_1'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_income_tax_return2_1/'.$docdataForm360['workexp3_income_tax_return2_1'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif  
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Income tax return Notice of Assessment or CUD for the 4th year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp3_relevant_doc" id="workexp3_relevant_doc">
                                                @if (array_key_exists('workexp3_relevant_doc', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_relevant_doc/'.$docdataForm360['workexp3_relevant_doc'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_relevant_doc'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_relevant_doc/'.$docdataForm360['workexp3_relevant_doc'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif      
                                            </td>
                                            </tr>





                                        </tbody>
                                    </table>


                                    <h2 class="fs-title" style="margin-top: 10px;"> PAYG </h2>
                                
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>PayG for the current or most recent year of work performed  
                                                </td>
                                                <td> <input type="file" name="workexp3_payg_one" id="workexp3_payg_one">
                                            
                                                @if (array_key_exists('workexp3_payg_one', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_payg_one/'.$docdataForm360['workexp3_payg_one'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_payg_one'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_payg_one/'.$docdataForm360['workexp3_payg_one'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> PayG for the 2nd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp3_payg_two" id="workexp3_payg_two">
                                            
                                                @if (array_key_exists('workexp3_payg_two', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_payg_two/'.$docdataForm360['workexp3_payg_two'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_payg_two'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_payg_two/'.$docdataForm360['workexp3_payg_two'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> PayG for the 3rd year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp3_payg_three" id="workexp3_payg_three">
                                            
                                                @if (array_key_exists('workexp3_payg_three', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_payg_three/'.$docdataForm360['workexp3_payg_three'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_payg_three'] , '.pdf'))
                                                                                        <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_payg_three/'.$docdataForm360['workexp3_payg_three'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                        
                                                                                        
                                                                                    @endif   
                                            </td>
                                            </tr>

                                            <tr>
                                                <td> PayG for the 4th year of work performed (if applicable)
                                                </td>
                                                <td> <input type="file" name="workexp3_payg_four" id="workexp3_payg_four">
                                            
                                                @if (array_key_exists('workexp3_payg_four', $docdataForm360))
                                                                                        
                                                    <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_payg_four/'.$docdataForm360['workexp3_payg_four'])  }}">
                                                    @if(str_contains($docdataForm360['workexp3_payg_four'] , '.pdf'))
                                                    <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                    @else
                                                    <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_payg_four/'.$docdataForm360['workexp3_payg_four'])  }}"  />
                                                    @endif
                                                    </a>
                                                                                        
                                                                                        
                                                @endif   
                                            </td>
                                            </tr>


                                        </tbody>
                                    </table>

                                

                                    <h2 class="fs-title" style="margin-top: 10px;"> INPS CHART (Italian employment only) </h2>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Tabella estratto contributivo INPS
                                                </td>
                                                <td> <input type="file" name="workexp3_tabella_estratto" id="workexp3_tabella_estratto">
                                                @if (array_key_exists('workexp3_tabella_estratto', $docdataForm360))
                                                                                        
                                                                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_tabella_estratto/'.$docdataForm360['workexp3_tabella_estratto'])  }}">
                                                                                        @if(str_contains($docdataForm360['workexp3_tabella_estratto'] , '.pdf'))
                                                                                            <img class="imgfile" src="{{asset('pdficon.png')}}"   />
                                                                                        @else
                                                                                        <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/workexp3_tabella_estratto/'.$docdataForm360['workexp3_tabella_estratto'])  }}"  />
                                                                                        @endif
                                                                                        </a>
                                                                                                                                
                                                                                                                                
                                                                                    @endif 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </div>
                    </div>
                    <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                    <b>WORK/ACTIVITY TO BE PERFORMED IN AUSTRALIA OR NZ:</b>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                                    <div class="accordion-body">
                                            @include('backend.forms.form360.workexperiencesectionA')
                                            @include('backend.forms.form360.workexperiencesectionB')
                                            @include('backend.forms.form360.workexperiencesectionC')
                                            @include('backend.forms.form360.workexperiencesectionD')
                                            @include('backend.forms.form360.workexperiencesectionE')
                                            @include('backend.forms.form360.workexperiencesectionF')
                                            @include('backend.forms.form360.workexperiencesectionG')
                                            @include('backend.forms.form360.workexperiencesectionH')
                                            @include('backend.forms.form360.workexperiencesectionI')
                                            @include('backend.forms.form360.workexperiencesectionJ')       
                                    </div>
                                </div>
                    </div>
                    <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                <b>VISA HISTORY</b>
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                                <div class="accordion-body">
                                <h2 class="fs-title">CURRENT VISA DETAILS</h2>
                                    <table>
                                        <tbody>

                                            <tr>
                                                <td>Are you currently in Australia or New Zealand
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->currentvisa_in_aus_nz)))
                                                            {{$data->currentvisa_in_aus_nz}}
                                                        @endif

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Do you hold a visa to Australia or New Zealand?
                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->currentvisa_hold_aus_nz)))
                                                            {{$data->currentvisa_hold_aus_nz}}
                                                        @endif

                                                        
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>If yes, what type of visa do you hold?
                                                </td>
                                                <td>
                                                    @if(isset($data->currentvisa_typeofvisa)) {{$data->currentvisa_typeofvisa}} @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Are you waiting for a visa to Australia or New
                                                    Zealand to be finalized?

                                                </td>
                                                <td>
                                                    
                                                        @if(!empty(isset($data->currentvisa_waiting_for_visa)))
                                                            {{$data->currentvisa_waiting_for_visa}}
                                                        @endif

                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If yes, what type of visa are you waiting to be
                                                    finalized?
                                                </td>
                                                <td>
                                                     @if(isset($data->currentvisa_typeofvisawaiting)) {{$data->currentvisa_typeofvisawaiting}} @endif
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Date of expiry of your current visa? (if
                                                    applicable)

                                                </td>
                                                <td>
                                                     @if(isset($data->currentvisa_dateofexpiry)) {{$data->currentvisa_dateofexpiry}} @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Have you ever had a visa for Australia or New
                                                    Zealand or any other country refused or cancelled? If so, please specify
                                                </td>
                                                <td>
                                                    @if(isset($data->currentvisa_ever_had_visa)) {{$data->currentvisa_ever_had_visa}} @endif

                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Do you hold or have you ever held a visa to any other country, other than Australia or New Zealand?

                                                </td>
                                                <td>
                                                   
                                                        @if(!empty(isset($data->currentvisa_held_visa)))
                                                        {{$data->currentvisa_held_visa}}
                                                        @endif

                                                      
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>If yes, please indicate the countries you have
                                                    held or hold a visa for
                                                </td>
                                                <td>
                                                    @if(isset($data->currentvisa_indicate_countries)) {{$data->currentvisa_indicate_countries}} @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Have you ever had any visa issues or have not complied with visa conditions or have departed outside their authorized period of stay, in any country? <br>
                                                    If yes, please specify the country and the type of issue

                                                </td>
                                                <td>
                                                     @if(isset($data->currentvisa_complied_with_visa_conditions)) {{$data->currentvisa_complied_with_visa_conditions}} @endif
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>


                                    <h2 class="fs-title">VISA HISTORY – DOCS TO UPLAOD</h2>

                                    <p> Upload each current and/or previous visas to Australia or New Zealand </p>

                                    <table>
                                        <tbody>

                                            <table>
                                                <tbody>

                                                    <tr>
                                                        <td> Current visa to Australia or New Zealand (if applicable)
                                                        </td>
                                                        <td> <input type="file" name="currentvisa_aus_naz_if_applicable" id="currentvisa_aus_naz_if_applicable">
                                                            @if (array_key_exists('currentvisa_aus_naz_if_applicable', $docdataForm360))

                                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/currentvisa_aus_naz_if_applicable/'.$docdataForm360['currentvisa_aus_naz_if_applicable'])  }}">
                                                                @if(str_contains($docdataForm360['currentvisa_aus_naz_if_applicable'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                                @else
                                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/currentvisa_aus_naz_if_applicable/'.$docdataForm360['currentvisa_aus_naz_if_applicable'])  }}" />
                                                                @endif
                                                            </a>


                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Previous visas to Australia or New Zealand (if applicable)
                                                        </td>
                                                        <td> <input type="file" name="previous_visa_if_applicable1" id="previous_visa_if_applicable1">
                                                            @if (array_key_exists('previous_visa_if_applicable1', $docdataForm360))

                                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/previous_visa_if_applicable1/'.$docdataForm360['previous_visa_if_applicable1'])  }}">
                                                                @if(str_contains($docdataForm360['previous_visa_if_applicable1'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                                @else
                                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/previous_visa_if_applicable1/'.$docdataForm360['previous_visa_if_applicable1'])  }}" />
                                                                @endif
                                                            </a>


                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Previous visas to Australia or New Zealand (if applicable)
                                                        </td>
                                                        <td> <input type="file" name="previous_visa_if_applicable2" id="previous_visa_if_applicable2">
                                                            @if (array_key_exists('previous_visa_if_applicable2', $docdataForm360))

                                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/previous_visa_if_applicable2/'.$docdataForm360['previous_visa_if_applicable2'])  }}">
                                                                @if(str_contains($docdataForm360['previous_visa_if_applicable2'] , '.pdf'))
                                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                                @else
                                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/previous_visa_if_applicable2/'.$docdataForm360['previous_visa_if_applicable2'])  }}" />
                                                                @endif
                                                            </a>


                                                            @endif
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div> 
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                            <b>TRAVEL HISTORY GENERAL – TRAVELS FOR LESS THAN 3 MONTHS IN THE LAST 10 YEARS</b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                            <div class="accordion-body">
                                
                                <h2 class="fs-title">CURRENT VISA DETAILS</h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>In the last 10 years have you visited any
                                                countries outside your usual country of
                                                residence since turning 16 years of age, for a
                                                period of less than 3 months?
                                            </td>
                                            <td>
                                               
                                                    @if(!empty(isset($data->travelhistory_last_ten_years)))
                                                    {{$data->travelhistory_last_ten_years}}
                                                    @endif
                                                    
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p style="color:red"> If yes, for each country you have travelled to please indicate the following (please indicate the main travels taken
                                    only). For each country you have travelled to please indicate the following (please indicate the main travels taken)
                                </p>

                                <table>
                                    <tbody>
                                        <tr>
                                            <td> Country </td>
                                            <td>
                                                
                                                    @if(!empty(isset($data->travelhistory_country1)))
                                                        {{$data->travelhistory_country1}}
                                                    @endif
                                                   
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> Date From </td>
                                            <td> @if(isset($data->travelhistory_datefrom1)) {{$data->travelhistory_datefrom1}} @endif </td>
                                        </tr>

                                        <tr>
                                            <td> Date to </td>
                                            <td> @if(isset($data->travelhistory_dateto1)) {{$data->travelhistory_dateto1}} @endif </td>
                                        </tr>

                                        <tr>
                                            <td>Purpose of your travel
                                            </td>
                                            <td>  @if(isset($data->travelhistory_purpose1)) {{$data->travelhistory_purpose1}} @endif </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table>
                                    <tbody>
                                        <tr>
                                            <td> Country </td>
                                            <td>
                                                
                                                    @if(!empty(isset($data->travelhistory_country4)))
                                                        {{$data->travelhistory_country4}}
                                                    @endif

                                                   
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> Date From </td>
                                            <td>  @if(isset($data->travelhistory_datefrom2)) {{$data->travelhistory_datefrom2}} @endif </td>
                                        </tr>

                                        <tr>
                                            <td> Date to </td>
                                            <td>  @if(isset($data->travelhistory_dateto2)) {{$data->travelhistory_dateto2}} @endif </td>
                                        </tr>

                                        <tr>
                                            <td>Purpose of your travel
                                            </td>
                                            <td>  @if(isset($data->travelhistory_purpose2)) {{$data->travelhistory_purpose2}} @endif </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table>
                                    <tbody>
                                        <tr>
                                            <td> Country </td>
                                            <td>
                                                
                                                    @if(!empty(isset($data->travelhistory_country3)))
                                                    {{$data->travelhistory_country3}}
                                                    @endif

                                                    
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> Date From </td>
                                            <td> @if(isset($data->travelhistory_datefrom3)) {{$data->travelhistory_datefrom3}} @endif </td>
                                        </tr>

                                        <tr>
                                            <td> Date to </td>
                                            <td>  @if(isset($data->travelhistory_dateto3)) {{$data->travelhistory_dateto3}} @endif </td>
                                        </tr>

                                        <tr>
                                            <td>Purpose of your travel
                                            </td>
                                            <td>  @if(isset($data->travelhistory_purpose3)) {{$data->travelhistory_purpose3}} @endif </td>
                                        </tr>
                                    </tbody>
                                </table>


                                <table>
                                    <tbody>
                                        <tr>
                                            <td> Country </td>
                                            <td>
                                              
                                                    @if(!empty(isset($data->travelhistory_country4)))
                                                   {{$data->travelhistory_country4}}
                                                    @endif

                                                  
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> Date From </td>
                                            <td>  @if(isset($data->travelhistory_datefrom4)) {{$data->travelhistory_datefrom4}} @endif </td>
                                        </tr>

                                        <tr>
                                            <td> Date to </td>
                                            <td>  @if(isset($data->travelhistory_dateto4)) {{$data->travelhistory_dateto4}} @endif </td>
                                        </tr>

                                        <tr>
                                            <td>Purpose of your travel
                                            </td>
                                            <td>  @if(isset($data->travelhistory_purpose4)) {{$data->travelhistory_purpose4}} @endif </td>
                                        </tr>
                                    </tbody>
                                </table>


                                
                                <table>
                                    <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->travelhistory_country5)))
                                                    {{$data->travelhistory_country5}}
                                                @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date From </td>
                                        <td>  @if(isset($data->travelhistory_datefrom5)) {{$data->travelhistory_datefrom5}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date to </td>
                                        <td> @if(isset($data->travelhistory_dateto5)) {{$data->travelhistory_dateto5}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td>Purpose of your travel
                                        </td>
                                        <td>  @if(isset($data->travelhistory_purpose5)) {{$data->travelhistory_purpose5}} @endif </td>
                                    </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                        <b>COUNTRIES OF RESIDENCE – AT LEAST 12 MONTHS </b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
                        <div class="accordion-body">
                                        <p class="fs-title">Give details of all countries where you have spent a total period of time that adds up to 12 months or more (even if
                            cumulatively) in the past 10 years since turning 16 years of age</p>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->countryofresidence_country1)))
                                                {{$data->countryofresidence_country1}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> From When </td>
                                        <td>  @if(isset($data->countryofresidence_fromwhen1)) {{$data->countryofresidence_fromwhen1}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td> To When </td>
                                        <td>  @if(isset($data->countryofresidence_towhen1)) {{$data->countryofresidence_towhen1}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Address
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_address1)) {{$data->countryofresidence_address1}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>City
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_city1)) {{$data->countryofresidence_city1}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Postal Code
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_postal1)) {{$data->countryofresidence_postal1}} @endif
                                             </td>
                                    </tr>
                                </tbody>
                            </table>


                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                          

                                                @if(!empty(isset($data->countryofresidence_country2)))
                                                    {{$data->countryofresidence_country2}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> From When </td>
                                        <td>  @if(isset($data->countryofresidence_fromwhen2)) {{$data->countryofresidence_fromwhen2}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td> To When </td>
                                        <td>  @if(isset($data->countryofresidence_towhen2)) {{$data->countryofresidence_towhen2}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Address
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_address2)) {{$data->countryofresidence_address2}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>City
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_city2)) {{$data->countryofresidence_city2}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Postal Code
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_postal2)) {{$data->countryofresidence_postal2}} @endif
                                             </td>
                                    </tr>
                                </tbody>
                            </table>


                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->countryofresidence_country3)))
                                                {{$data->countryofresidence_country3}}
                                                @endif
                                             
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> From When </td>
                                        <td>  @if(isset($data->countryofresidence_fromwhen3)) {{$data->countryofresidence_fromwhen3}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td> To When </td>
                                        <td>  @if(isset($data->countryofresidence_towhen3)) {{$data->countryofresidence_towhen3}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Address
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_address3)) {{$data->countryofresidence_address3}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>City
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_city3)) {{$data->countryofresidence_city3}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Postal Code
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_postal3)) {{$data->countryofresidence_postal3}} @endif
                                             </td>
                                    </tr>
                                </tbody>
                            </table>


                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->countryofresidence_country4)))
                                               {{$data->countryofresidence_country4}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> From When </td>
                                        <td>  @if(isset($data->countryofresidence_fromwhen4)) {{$data->countryofresidence_fromwhen4}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td> To When </td>
                                        <td>  @if(isset($data->countryofresidence_towhen4)) {{$data->countryofresidence_towhen4}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Address
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_address4)) {{$data->countryofresidence_address4}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>City
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_city4)) {{$data->countryofresidence_city4}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Postal Code
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_postal4)) {{$data->countryofresidence_postal4}} @endif
                                             </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->countryofresidence_country5)))
                                                    {{$data->countryofresidence_country5}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> From When </td>
                                        <td>  @if(isset($data->countryofresidence_fromwhen5)) {{$data->countryofresidence_fromwhen5}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td> To When </td>
                                        <td>  @if(isset($data->countryofresidence_towhen5)) {{$data->countryofresidence_towhen5}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Address
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_address5)) {{$data->countryofresidence_address5}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>City
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_city5)) {{$data->countryofresidence_city5}} @endif
                                             </td>
                                    </tr>

                                    <tr>
                                        <td>Postal Code
                                        </td>
                                        <td>  @if(isset($data->countryofresidence_postal5)) {{$data->countryofresidence_postal5}} @endif
                                             </td>
                                    </tr>
                                </tbody>
                            </table>  
                        </div>
                        </div>
                    </div>     
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false" aria-controls="panelsStayOpen-collapseEleven">
                                <b>HEALTH DECLARATION – TRAVLES FOR MORE THAN 3 MONTHS IN THE LAST 5 YEARS </b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEleven">
                        <div class="accordion-body">
                             <p>For any country OTHER THAN AUSTRALIA OR NEW ZEALAND, that you visited, or lived, outside your country of
                                passport, for more than 3 months (even if cumulatively) please indicate: </p>


                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->healthdeclaration_country1)))
                                                {{$data->healthdeclaration_country1}}
                                                @endif

                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date From </td>
                                        <td>  @if(isset($data->healthdeclaration_from1)) {{$data->healthdeclaration_from1}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date to </td>
                                        <td>  @if(isset($data->healthdeclaration_to1)) {{$data->healthdeclaration_to1}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td>Purpose of your travel
                                        </td>
                                        <td>  @if(isset($data->healthdeclaration_purpose1)) {{$data->healthdeclaration_purpose1}} @endif </td>
                                    </tr>
                                </tbody>
                            </table>


                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->healthdeclaration_country2)))
                                                {{$data->healthdeclaration_country2}}
                                                @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date From </td>
                                        <td>  @if(isset($data->healthdeclaration_from2)) {{$data->healthdeclaration_from2}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date to </td>
                                        <td>  @if(isset($data->healthdeclaration_to2)) {{$data->healthdeclaration_to2}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td>Purpose of your travel
                                        </td>
                                        <td>  @if(isset($data->healthdeclaration_purpose2)) {{$data->healthdeclaration_purpose2}} @endif </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->healthdeclaration_country3)))
                                                    {{$data->healthdeclaration_country3}}
                                                @endif

                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date From </td>
                                        <td>  @if(isset($data->healthdeclaration_from3)) {{$data->healthdeclaration_from3}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date to </td>
                                        <td>  @if(isset($data->healthdeclaration_to3)) {{$data->healthdeclaration_to3}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td>Purpose of your travel
                                        </td>
                                        <td>  @if(isset($data->healthdeclaration_purpose3)) {{$data->healthdeclaration_purpose3}} @endif </td>
                                    </tr>
                                </tbody>
                            </table>


                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                            <select id="healthdeclaration_country4" name="healthdeclaration_country4" class="form-control">
                                                <option value="">Select Country</option>
                                                @if(!empty(isset($data->healthdeclaration_country4)))
                                                <option value="{{$data->healthdeclaration_country4}}" selected>{{$data->healthdeclaration_country4}}</option>
                                                @endif

                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                </option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                </option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The
                                                    Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                    (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern
                                                    Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                    Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                    State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                </option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea,
                                                    Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's
                                                    Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                </option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">
                                                    Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia,
                                                    Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian
                                                    Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                </option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and
                                                    The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South
                                                    Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                </option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United
                                                    Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States
                                                    Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British
                                                </option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date From </td>
                                        <td>  @if(isset($data->healthdeclaration_from4)) {{$data->healthdeclaration_from4}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date to </td>
                                        <td>  @if(isset($data->healthdeclaration_to4)) {{$data->healthdeclaration_to4}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td>Purpose of your travel
                                        </td>
                                        <td>  @if(isset($data->healthdeclaration_purpose4)) {{$data->healthdeclaration_purpose4}} @endif </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Country </td>
                                        <td>
                                            <select id="healthdeclaration_country5" name="healthdeclaration_country5" class="form-control">
                                                <option value="">Select Country</option>
                                                @if(!empty(isset($data->healthdeclaration_country5)))
                                                <option value="{{$data->healthdeclaration_country5}}" selected>{{$data->healthdeclaration_country5}}</option>
                                                @endif

                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                </option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                </option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The
                                                    Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                    (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern
                                                    Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                    Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                    State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                </option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea,
                                                    Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's
                                                    Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                </option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">
                                                    Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia,
                                                    Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian
                                                    Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                </option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and
                                                    The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South
                                                    Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                </option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United
                                                    Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States
                                                    Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British
                                                </option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date From </td>
                                        <td>  @if(isset($data->healthdeclaration_from5)) {{$data->healthdeclaration_from5}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date to </td>
                                        <td>  @if(isset($data->healthdeclaration_to5)) {{$data->healthdeclaration_to5}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td>Purpose of your travel
                                        </td>
                                        <td>  @if(isset($data->healthdeclaration_purpose5)) {{$data->healthdeclaration_purpose5}} @endif </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwelve">
                            <b>HEALTH QUESTIONS </b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwelve">
                        <div class="accordion-body">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <ul>
                                                    <li>Does any applicant intend to enter a hospital or a
                                                        health care facility (including nursing homes)
                                                        while in Australia or New Zealand?</li>
                                                    <li>Does any applicant intend to work as, or study to
                                                        be a doctor, dentist, nurse or paramedic during
                                                        their stay in Australia or New Zealand? </li>
                                                    <li>Does any applicant intend to work or be a trainee
                                                        at a childcare centre (including preschools and
                                                        creches) while in Australia or New Zealand? </li>
                                                    <li>Does any applicant intend to be in a classroom
                                                        situation for more than 3 months (eg. as either a
                                                        student, teacher, lecturer or observer)? </li>
                                                    <li> Ever had, or currently have, tuberculosis? </li>
                                                    <li> been in close contact with a family member that
                                                        has active tuberculosis? </li>
                                                    <li> ever had a chest x-ray which showed an
                                                        abnormality?</li>
                                                </ul>
                                            </td>
                                            <td>
                                                
                                                    @if(!empty(isset($data->healthquestion_aus_or_nz)))
                                                   {{$data->healthquestion_aus_or_nz}}
                                                    @endif

                                                    
                                            </td>
                                        </tr>


                                        <!-- <tr>
                                            <td> 2) Does any applicant intend to work as, or study to
                                                be a doctor, dentist, nurse or paramedic during
                                                their stay in Australia or New Zealand? </td>
                                            <td>

                                                <select name="healthquestion_paramedic" id="healthquestion_paramedic" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_paramedic)))
                                                    <option value="{{$data->healthquestion_paramedic}}" selected>{{$data->healthquestion_paramedic}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 3) Does any applicant intend to work or be a trainee
                                                at a childcare centre (including preschools and
                                                creches) while in Australia or New Zealand? </td>
                                            <td>
                                                <select name="healthquestion_childcare" id="healthquestion_childcare" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_childcare)))
                                                    <option value="{{$data->healthquestion_childcare}}" selected>{{$data->healthquestion_childcare}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td> 4) Does any applicant intend to be in a classroom
                                                situation for more than 3 months (eg. as either a
                                                student, teacher, lecturer or observer)? </td>
                                            <td>

                                                <select name="healthquestion_classroom" id="healthquestion_classroom" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_classroom)))
                                                    <option value="{{$data->healthquestion_classroom}}" selected>{{$data->healthquestion_classroom}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 5) Ever had, or currently have, tuberculosis? </td>
                                            <td>

                                                <select name="healthquestion_tuberculosis" id="healthquestion_tuberculosis" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_tuberculosis)))
                                                    <option value="{{$data->healthquestion_tuberculosis}}" selected>{{$data->healthquestion_tuberculosis}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 6) been in close contact with a family member that
                                                has active tuberculosis? </td>
                                            <td>
                                                <select name="healthquestion_familymember_tuberculosis" id="healthquestion_familymember_tuberculosis" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_familymember_tuberculosis)))
                                                    <option value="{{$data->healthquestion_familymember_tuberculosis}}" selected>{{$data->healthquestion_familymember_tuberculosis}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>




                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 7) ever had a chest x-ray which showed an
                                                abnormality? </td>
                                            <td>

                                                <select name="healthquestion_xray" id="healthquestion_xray" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_xray)))
                                                    <option value="{{$data->healthquestion_xray}}" selected>{{$data->healthquestion_xray}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>
                                            </td>
                                        </tr> -->

                                        <tr>
                                            <td> If you answered YES to any questions, indicate YES, specify
                                                what question number refers to you and provide further
                                                details in the following box:</td>
                                            <td>
                                                 @if(isset($data->healthquestion_indicate_if_yes)) {{$data->healthquestion_indicate_if_yes}} @endif




                                            </td>
                                        </tr>



                                    </tbody>
                                </table>


                                <table>
                                    <tbody>

                                        <tr>
                                            <td> During their proposed visit to Australia or New Zealand, do
                                                you expect to incur medical costs, or require treatment or
                                                medical follow up for:
                                                <ul>
                                                    <li> Blood disorder </li>
                                                    <li> Cancer </li>
                                                    <li> Heart disease </li>
                                                    <li> Hepatitis B or C and/or liver disease </li>
                                                    <li> HIV infection, including AIDS </li>
                                                    <li> Kidney disease, including dialysis </li>
                                                    <li> Mental illness </li>
                                                    <li> Pregnancy </li>
                                                    <li> Respiratory disease that has required hospital
                                                        admission or oxygen therapy </li>
                                                    <li> Do you require assistance with mobility or care
                                                        due to a medical condition? </li>

                                                </ul>
                                            </td>
                                            <td>
                                                
                                                    @if(!empty(isset($data->healthquestion_medicalcosts)))
                                                        {{$data->healthquestion_medicalcosts}}
                                                    @endif

                                            </td>
                                        </tr>


                                        <!-- <tr>
                                            <td> 1) Blood disorder </td>
                                            <td>
                                                <select name="healthquestion_blood" id="healthquestion_blood" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_blood)))
                                                    <option value="{{$data->healthquestion_blood}}" selected>{{$data->healthquestion_blood}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 2) Cancer
                                            </td>
                                            <td>
                                                <select name="healthquestion_cancer" id="healthquestion_cancer" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_cancer)))
                                                    <option value="{{$data->healthquestion_cancer}}" selected>{{$data->healthquestion_cancer}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td> 3) Heart disease </td>
                                            <td>
                                                <select name="healthquestion_heart" id="healthquestion_heart" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_heart)))
                                                    <option value="{{$data->healthquestion_heart}}" selected>{{$data->healthquestion_heart}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>


                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 4) Hepatitis B or C and/or liver disease </td>
                                            <td>
                                                <select name="healthquestion_hepatitis" id="healthquestion_hepatitis" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_hepatitis)))
                                                    <option value="{{$data->healthquestion_hepatitis}}" selected>{{$data->healthquestion_hepatitis}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>



                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 5) HIV infection, including AIDS </td>
                                            <td>

                                                <select name="healthquestion_hiv" id="healthquestion_hiv" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_hiv)))
                                                    <option value="{{$data->healthquestion_hiv}}" selected>{{$data->healthquestion_hiv}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>


                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 6) Kidney disease, including dialysis </td>
                                            <td>
                                                <select name="healthquestion_kidney" id="healthquestion_kidney" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_kidney)))
                                                    <option value="{{$data->healthquestion_kidney}}" selected>{{$data->healthquestion_kidney}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>


                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 7) Mental illness</td>
                                            <td>
                                                <select name="healthquestion_mental" id="healthquestion_mental" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_mental)))
                                                    <option value="{{$data->healthquestion_mental}}" selected>{{$data->healthquestion_mental}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>


                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 8) Pregnancy </td>
                                            <td>
                                                <select name="healthquestion_pregnancy" id="healthquestion_pregnancy" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_pregnancy)))
                                                    <option value="{{$data->healthquestion_pregnancy}}" selected>{{$data->healthquestion_pregnancy}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>


                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 9) Respiratory disease that has required hospital
                                                admission or oxygen therapy </td>
                                            <td>
                                                <select name="healthquestion_respiratory1" id="healthquestion_respiratory1" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_respiratory1)))
                                                    <option value="{{$data->healthquestion_respiratory1}}" selected>{{$data->healthquestion_respiratory1}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 10) Respiratory disease that has required hospital
                                                admission or oxygen therapy </td>
                                            <td>

                                                <select name="healthquestion_respiratory1" id="healthquestion_respiratory1" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_respiratory1)))
                                                    <option value="{{$data->healthquestion_respiratory1}}" selected>{{$data->healthquestion_respiratory1}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>


                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 11) Do you require assistance with mobility or care
                                                due to a medical condition? </td>
                                            <td>


                                                <select name="healthquestion_medical_condition" id="healthquestion_medical_condition" class="form-control">
                                                    <option value=""> Select Option </option>
                                                    @if(!empty(isset($data->healthquestion_medical_condition)))
                                                    <option value="{{$data->healthquestion_medical_condition}}" selected>{{$data->healthquestion_medical_condition}}</option>
                                                    @endif

                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>

                                            </td>
                                        </tr> -->


                                        <tr>
                                            <td> If you answered YES to any questions, indicate YES, specify
                                                what question number refers to you and provide further
                                                details in the following box:
                                            </td>
                                            <td>
                                                 @if(isset($data->healthquestion_question_number_if_yes)){{$data->healthquestion_question_number_if_yes}} @endif

                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThirteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseThirteen">
                            <b>CHARACTER – GENERAL QUESTIONS</b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThirteen">
                        <div class="accordion-body">
                            <table>
                                <tbody>

                                    <tr>
                                        <td> 
                                            <ul>
                                                
                                            <li>Has any applicant ever been charged with any offence that is currently awaiting legal action? </li>
                                            <li>Has any applicant ever been convicted of an offence in any country (including any conviction which is now removed from official records)?</li>
                                            <li>Has any applicant ever been the subject of an arrest warrant or Interpol notice? </li>
                                            <li>Has any applicant ever been the subject of an arrest warrant or Interpol notice? </li>
                                            <li>Has any applicant ever been found guilty of a sexually based offence involving a child (including where no conviction was recorded)?
                                            </li>
                                            <li>Has any applicant ever been named on a sex offender register?
                                            </li>
                                            <li>Has any applicant ever been acquitted of any offence on the grounds of unsoundness of mind or insanity?
                                            </li>
                                            <li>Has any applicant ever been found by a court not fit to plead?
                                            </li>
                                            <li>Has any applicant ever been found by a court not fit to plead? </li>
                                            <li>Has any applicant ever been directly or indirectly involved in, or associated with, activities which would represent a risk to national security in Australia or New Zealand or any other country?
                                            </li>
                                            <li>Has any applicant ever been charged with, or indicted for: genocide, war crimes, crimes against humanity, torture, slavery, or any other crime that is otherwise of a serious international concern?
                                            </li>
                                            <li>acts of violence (including war, insurgency, freedom fighting, terrorism, protest) either overseas or in Australia or New Zealand? </li>
                                            <li>Has any applicant ever served in a military force, police force, state sponsored / private militia or intelligence agency (including secret police)? </li>
                                            <li>explosives or in the manufacture of chemical/biological products?
                                            </li>
                                            <li>Has any applicant ever undergone any military/paramilitary training, been trained in weapons/ </li>
                                            <li>Has any applicant ever been involved in people smuggling or people trafficking offences?
                                            </li>
                                            <li>Has any applicant ever been removed, deported or excluded from any country (including Australia or New Zealand)? </li>
                                            <li>Has any applicant ever overstayed a visa in any country (including Australia or New Zealand)? </li>
                                            <li>Has any applicant ever had any outstanding debts to the Australia or New Zealandn Government or any public authority in Australia or New Zealand? </li>
                                        
                                            </ul>
                                        
                                        
                                        </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->character_legal_action)))
                                                     {{$data->character_legal_action}}
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <!-- <tr>
                                        <td> 2) Has any applicant ever been convicted of an
                                            offence in any country (including any conviction
                                            which is now removed from official records)? </td>
                                        <td>
                                            <select name="character_official_record" id="character_official_record" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_official_record)))
                                                <option value="{{$data->character_official_record}}" selected>{{$data->character_official_record}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 3) Has any applicant ever been the subject of an
                                            arrest warrant or Interpol notice? </td>
                                        <td>
                                            <select name="character_interpol_notice1" id="character_interpol_notice1" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_interpol_notice1)))
                                                <option value="{{$data->character_interpol_notice1}}" selected>{{$data->character_interpol_notice1}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 4) Has any applicant ever been the subject of an
                                            arrest warrant or Interpol notice?
                                        </td>
                                        <td>
                                            <select name="character_interpol_notice2" id="character_interpol_notice2" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_interpol_notice2)))
                                                <option value="{{$data->character_interpol_notice2}}" selected>{{$data->character_interpol_notice2}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> 5) Has any applicant ever been found guilty of a
                                            sexually based offence involving a child (including
                                            where no conviction was recorded)?
                                        </td>
                                        <td>
                                            <select name="character_sexually" id="character_sexually" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_sexually)))
                                                <option value="{{$data->character_sexually}}" selected>{{$data->character_sexually}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 6) Has any applicant ever been named on a sex
                                            offender register?
                                        </td>
                                        <td>
                                            <select name="character_offender" id="character_offender" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_offender)))
                                                <option value="{{$data->character_offender}}" selected>{{$data->character_offender}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> 7) Has any applicant ever been acquitted of any
                                            offence on the grounds of unsoundness of mind
                                            or insanity?
                                        </td>
                                        <td>
                                            <select name="character_unsoundness" id="character_unsoundness" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_unsoundness)))
                                                <option value="{{$data->character_unsoundness}}" selected>{{$data->character_unsoundness}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> 8) Has any applicant ever been found by a court not
                                            fit to plead?
                                        </td>
                                        <td>
                                            <select name="character_plead1" id="character_plead1" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_plead1)))
                                                <option value="{{$data->character_plead1}}" selected>{{$data->character_plead1}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> 9) Has any applicant ever been found by a court not
                                            fit to plead?

                                        </td>
                                        <td>
                                            <select name="character_plead2" id="character_plead2" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_plead2)))
                                                <option value="{{$data->character_plead2}}" selected>{{$data->character_plead2}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 10) Has any applicant ever been directly or indirectly
                                            involved in, or associated with, activities which
                                            would represent a risk to national security in
                                            Australia or New Zealand or any other country??

                                        </td>
                                        <td>
                                            <select name="character_associated" id="character_associated" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_associated)))
                                                <option value="{{$data->character_associated}}" selected>{{$data->character_associated}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> 11) Has any applicant ever been charged with, or
                                            indicted for: genocide, war crimes, crimes against
                                            humanity, torture, slavery, or any other crime
                                            that is otherwise of a serious international
                                            concern?

                                        </td>
                                        <td>
                                            <select name="character_genocide" id="character_genocide" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_genocide)))
                                                <option value="{{$data->character_genocide}}" selected>{{$data->character_genocide}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> 12) acts of violence (including war, insurgency,
                                            freedom fighting, terrorism, protest) either
                                            overseas or in Australia or New Zealand?

                                        </td>
                                        <td>
                                            <select name="character_terrorism" id="character_terrorism" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_terrorism)))
                                                <option value="{{$data->character_terrorism}}" selected>{{$data->character_terrorism}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 13) Has any applicant ever served in a military force,
                                            police force, state sponsored / private militia or
                                            intelligence agency (including secret police)?

                                        </td>
                                        <td>
                                            <select name="character_private_militia" id="character_private_militia" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_private_militia)))
                                                <option value="{{$data->character_private_militia}}" selected>{{$data->character_private_militia}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 14) explosives or in the manufacture of
                                            chemical/biological products?

                                        </td>
                                        <td>
                                            <select name="character_biological" id="character_biological" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_biological)))
                                                <option value="{{$data->character_biological}}" selected>{{$data->character_biological}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 15) Has any applicant ever undergone any
                                            military/paramilitary training, been trained in
                                            weapons/</td>
                                        <td>
                                            <select name="character_training" id="character_training" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_training)))
                                                <option value="{{$data->character_training}}" selected>{{$data->character_training}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> 16) Has any applicant ever been involved in people
                                            smuggling or people trafficking offences?
                                        </td>
                                        <td>
                                            <select name="character_offences" id="character_offences" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_offences)))
                                                <option value="{{$data->character_offences}}" selected>{{$data->character_offences}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 17) Has any applicant ever been removed, deported
                                            or excluded from any country (including Australia
                                            or New Zealand)?
                                        </td>
                                        <td>
                                            <select name="character_deported" id="character_deported" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_deported)))
                                                <option value="{{$data->character_deported}}" selected>{{$data->character_deported}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 18) Has any applicant ever overstayed a visa in any
                                            country (including Australia or New Zealand)?
                                        </td>
                                        <td>
                                            <select name="character_overstayed" id="character_overstayed" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_overstayed)))
                                                <option value="{{$data->character_overstayed}}" selected>{{$data->character_overstayed}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 19) Has any applicant ever had any outstanding debts
                                            to the Australia or New Zealandn Government or
                                            any public authority in Australia or New Zealand?
                                        </td>
                                        <td>
                                            <select name="character_authority" id="character_authority" class="form-control">
                                                <option value=""> Select Option </option>
                                                @if(!empty(isset($data->character_authority)))
                                                <option value="{{$data->character_authority}}" selected>{{$data->character_authority}}</option>
                                                @endif
                                               
                                        </td>
                                    </tr> -->


                                    <tr>
                                        <td> If you answered YES to any questions, indicate YES, specify
                                            what question number refers to you and provide further
                                            details in the following box:

                                        </td>
                                        <td>
                                            @if(isset($data->character_refer_to_you)) {{$data->character_refer_to_you}} @endif
                                            
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFourteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseFourteen">
                            <b>FAMILY MEMBERS</b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFourteen">
                        <div class="accordion-body">
                                    
                            <table>
                                <tbody>
                                    <tr>
                                        <td> Do you have a partner?
                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member)))
                                                    {{$data->fam_member}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Will your partner included in this visa application?
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_visa)))
                                                     {{$data->fam_member_visa}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Do you have children? If yes, please indicate how many you have
                                        </td>
                                        <td>
                                             @if(isset($data->fam_member_children)) {{$data->fam_member_children}} @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Will your child/children be included in your visa application?

                                        </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->fam_member_child_visa)))
                                                    {{$data->fam_member_child_visa}}
                                                @endif
                                              
                                        </td>
                                    </tr>

                                </tbody>
                            </table>


                            <h2 class="fs-title"> YOUR PARTNER </h2>


                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name and surname
                                        </td>
                                        <td>
                                             @if(isset($data->fam_member_name)) {{$data->fam_member_name}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td> @if(isset($data->fam_member_dob)) {{$data->fam_member_dob}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Place of birth </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_pob)))
                                                    {{$data->fam_member_pob}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nationality
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_nationality)))
                                                         {{$data->fam_member_nationality}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other nationalities
                                        </td>
                                        <td>

                                            
                                                @if(!empty(isset($data->fam_member_other_nationality)))
                                                    {{$data->fam_member_other_nationality}}
                                                @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever suffered of severe illness, or do you
                                            take any prescribed medication? If so, please specify
                                        </td>
                                        <td>
                                             @if(isset($data->fam_member_ever_suffered)) {{$data->fam_member_ever_suffered}} @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever been convicted of a crime or are
                                            awaiting legal action on any other matter, even if no
                                            longer indicated on the police check or other
                                            equivalent documents? If so, please specify
                                        </td>
                                        <td>  @if(isset($data->fam_member_legal_action)) {{$data->fam_member_legal_action}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Are you also included in the visa application?
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_include_visa_application)))
                                                    {{$data->fam_member_include_visa_application}}
                                                @endif
                                                



                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Are you currently in Australia or NZ?
                                        </td>
                                        <td>

                                           

                                                @if(!empty(isset($data->fam_member_australiz_newzland)))
                                                    {{$data->fam_member_australiz_newzland}}
                                                @endif
                                            



                                        </td>
                                    </tr>
                                    <tr>
                                        <td> If either in Australia or NZ, please specify the country and with which visa
                                        </td>
                                        <td>  @if(isset($data->fam_member_which_visa)) {{$data->fam_member_which_visa}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Do you hold the same visa that your partner holds?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_visa_partner_hold)))
                                                    {{$data->fam_member_visa_partner_hold}}
                                                @endif
                                                



                                        </td>
                                    </tr>

                                    <tr>
                                        <td> When does your visa expire?
                                        </td>
                                        <td>  @if(isset($data->fam_member_visa_expire)) {{$data->fam_member_visa_expire}} @endif </td>
                                    </tr>

                                    <!-- <tr>
                                        <td> Is this person included in the visa application?
                                        </td>
                                        <td> <input type="text" name="fam_member_visa_application" id="fam_member_visa_application" @if(isset($data->fam_member_visa_application)) value="{{$data->fam_member_visa_application}}" @endif/> </td>
                                    </tr>

                                    <tr>
                                        <td> Where does this person currently live?
                                        </td>
                                        <td> <input type="text" name="fam_member_currently_live" id="fam_member_currently_live" @if(isset($data->fam_member_currently_live)) value="{{$data->fam_member_currently_live}}" @endif/> </td>
                                    </tr> -->

                                </tbody>
                            </table>

                            <h2 class="fs-title">YOUR PARTNER'S DOCS TO UPLOAD </h2>

                            <table>

                                <tbody>

                                    <tr>
                                        <td> Passport
                                        </td>
                                        <td> <input type="file" name="family_member_partner_passport" id="family_member_partner_passport">
                                            @if (array_key_exists('family_member_partner_passport', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_passport/'.$docdataForm360['family_member_partner_passport'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_passport'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_passport/'.$docdataForm360['family_member_partner_passport'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Passport photo
                                        </td>
                                        <td> <input type="file" name="family_member_partner_passport_photo" id="family_member_partner_passport_photo">
                                            @if (array_key_exists('family_member_partner_passport_photo', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_passport_photo/'.$docdataForm360['family_member_partner_passport_photo'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_passport_photo'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_passport_photo/'.$docdataForm360['family_member_partner_passport_photo'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> ID Card or Driving license
                                        </td>
                                        <td> <input type="file" name="family_member_partner_driving_license" id="family_member_partner_driving_license">
                                            @if (array_key_exists('family_member_partner_driving_license', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_driving_license/'.$docdataForm360['family_member_partner_driving_license'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_driving_license'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_driving_license/'.$docdataForm360['family_member_partner_driving_license'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Current or most recent visa to Australia (if applicable)
                                        </td>
                                        <td> <input type="file" name="family_member_partner_recent_visa" id="family_member_partner_recent_visa">
                                            @if (array_key_exists('family_member_partner_recent_visa', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_recent_visa/'.$docdataForm360['family_member_partner_recent_visa'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_recent_visa'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_recent_visa/'.$docdataForm360['family_member_partner_recent_visa'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> IELTS Test or equivalent English test taken (if applicable)
                                        </td>
                                        <td> <input type="file" name="family_member_partner_ielts" id="family_member_partner_ielts">
                                            @if (array_key_exists('family_member_partner_ielts', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_ielts/'.$docdataForm360['family_member_partner_ielts'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_ielts'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_ielts/'.$docdataForm360['family_member_partner_ielts'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Updated CV or Resume
                                        </td>
                                        <td> <input type="file" name="family_member_partner_cv_resume" id="family_member_partner_cv_resume">
                                            @if (array_key_exists('family_member_partner_cv_resume', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_cv_resume/'.$docdataForm360['family_member_partner_cv_resume'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_cv_resume'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_cv_resume/'.$docdataForm360['family_member_partner_cv_resume'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Marriage or De facto registration certificate
                                        </td>
                                        <td> <input type="file" name="family_member_partner_reg_certificate" id="family_member_partner_reg_certificate">
                                            @if (array_key_exists('family_member_partner_reg_certificate', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_reg_certificate/'.$docdataForm360['family_member_partner_reg_certificate'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_reg_certificate'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_reg_certificate/'.$docdataForm360['family_member_partner_reg_certificate'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Joint bank account showing both names and last 3 months movements
                                        </td>
                                        <td> <input type="file" name="family_member_partner_join_bank_account" id="family_member_partner_join_bank_account">
                                            @if (array_key_exists('family_member_partner_join_bank_account', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_join_bank_account/'.$docdataForm360['family_member_partner_join_bank_account'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_join_bank_account'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_join_bank_account/'.$docdataForm360['family_member_partner_join_bank_account'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Joint Rental Agreement
                                        </td>
                                        <td> <input type="file" name="family_member_partner_rental_agreement" id="family_member_partner_rental_agreement">
                                            @if (array_key_exists('family_member_partner_rental_agreement', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_rental_agreement/'.$docdataForm360['family_member_partner_rental_agreement'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_rental_agreement'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_rental_agreement/'.$docdataForm360['family_member_partner_rental_agreement'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> A few utility bills in both names or in one person’s name but indicating the same address
                                        </td>
                                        <td> <input type="file" name="family_member_partner_utility_bills" id="family_member_partner_utility_bills">
                                            @if (array_key_exists('family_member_partner_utility_bills', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_utility_bills/'.$docdataForm360['family_member_partner_utility_bills'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_utility_bills'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_utility_bills/'.$docdataForm360['family_member_partner_utility_bills'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> A few utility bills in both names or in one person’s name but indicating the same address
                                        </td>
                                        <td> <input type="file" name="family_member_partner_utility_bills2" id="family_member_partner_utility_bills2">
                                            @if (array_key_exists('family_member_partner_utility_bills2', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_utility_bills2/'.$docdataForm360['family_member_partner_utility_bills2'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_utility_bills2'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_utility_bills2/'.$docdataForm360['family_member_partner_utility_bills2'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> A few utility bills in both names or in one person’s name but indicating the same address
                                        </td>
                                        <td> <input type="file" name="family_member_partner_utility_bills3" id="family_member_partner_utility_bills3">
                                            @if (array_key_exists('family_member_partner_utility_bills3', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_utility_bills3/'.$docdataForm360['family_member_partner_utility_bills3'])  }}">
                                                @if(str_contains($docdataForm360['family_member_partner_utility_bills3'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_partner_utility_bills3/'.$docdataForm360['family_member_partner_utility_bills3'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>





                                </tbody>
                            </table>


                            <h2 class="fs-title"> YOUR CHILD/CHILDREN </h2>

                            <h2 class="fs-title">Child 1 - INFO </h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name and surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_name1)) {{$data->fam_member_child_name1}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td>
                                             @if(isset($data->fam_member_child_dob1)) {{$data->fam_member_child_dob1}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Place of birth </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->fam_member_child_pob1)))
                                                {{$data->fam_member_child_pob1}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nationality
                                        </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->fam_member_child_nationality1)))
                                                    {{$data->fam_member_child_nationality1}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other nationalities
                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_child_other_nationality1)))
                                                    {{$data->fam_member_child_other_nationality1}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever suffered of severe illness, or do you
                                            take any prescribed medication? If so, please specify
                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_child_ever_suffered1)))
                                                {{$data->fam_member_child_ever_suffered1}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever been convicted of a crime or are
                                            awaiting legal action on any other matter, even if no
                                            longer indicated on the police check or other
                                            equivalent documents? If so, please specify
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_legal_action1)) {{$data->fam_member_child_legal_action1}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Are you also included in the visa application?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_include_visa_application)) {{$data->fam_member_child_include_visa_application}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Are you currently in Australia or NZ?
                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_child_australiz_newzland)))
                                                        {{$data->fam_member_child_australiz_newzland}}
                                                @endif
                                               
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> If either in Australia or NZ, please specify the country and with which visa
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_which_visa)) {{$data->fam_member_child_which_visa}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Do you hold the same visa that your partner holds?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_visa_partner_hold)) {{$data->fam_member_child_visa_partner_hold}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> When does your visa expire?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_visa_expire)) {{$data->fam_member_child_visa_expire}} @endif </td>
                                    </tr>

                                </tbody>
                            </table>

                            <h2 class="fs-title">Child 1 - DOCS </h2>

                            <table>

                                <tbody>

                                    <tr>
                                        <td> Passport
                                        </td>
                                        <td> <input type="file" name="family_member_child1_passport" id="family_member_child1_passport">
                                            @if (array_key_exists('family_member_child1_passport', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_passport/'.$docdataForm360['family_member_child1_passport'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child1_passport'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_passport/'.$docdataForm360['family_member_child1_passport'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Passport photo
                                        </td>
                                        <td> <input type="file" name="family_member_child1_passport_photo" id="family_member_child1_passport_photo">
                                            @if (array_key_exists('family_member_child1_passport_photo', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_passport_photo/'.$docdataForm360['family_member_child1_passport_photo'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child1_passport_photo'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_passport_photo/'.$docdataForm360['family_member_child1_passport_photo'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> ID Card or Driving license
                                        </td>
                                        <td> <input type="file" name="family_member_child1_driving_license" id="family_member_child1_driving_license">
                                            @if (array_key_exists('family_member_child1_driving_license', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_driving_license/'.$docdataForm360['family_member_child1_driving_license'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child1_driving_license'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_driving_license/'.$docdataForm360['family_member_child1_driving_license'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Current or most recent visa to Australia (if applicable)
                                        </td>
                                        <td> <input type="file" name="family_member_child1_recent_visa" id="family_member_child1_recent_visa">
                                            @if (array_key_exists('family_member_child1_recent_visa', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_recent_visa/'.$docdataForm360['family_member_child1_recent_visa'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child1_recent_visa'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_recent_visa/'.$docdataForm360['family_member_child1_recent_visa'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> IELTS Test or equivalent English test taken (if applicable)
                                        </td>
                                        <td> <input type="file" name="family_member_child1_ielts" id="family_member_child1_ielts">
                                            @if (array_key_exists('family_member_child1_ielts', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_ielts/'.$docdataForm360['family_member_child1_ielts'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child1_ielts'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_ielts/'.$docdataForm360['family_member_child1_ielts'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Updated CV or Resume
                                        </td>
                                        <td> <input type="file" name="family_member_child1_cv_resume" id="family_member_child1_cv_resume">
                                            @if (array_key_exists('family_member_child1_cv_resume', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_cv_resume/'.$docdataForm360['family_member_child1_cv_resume'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child1_cv_resume'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_cv_resume/'.$docdataForm360['family_member_child1_cv_resume'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Birth certificate indicating name of both parents
                                        </td>
                                        <td> <input type="file" name="family_member_child1_birth_certificate" id="family_member_child1_birth_certificate">
                                            @if (array_key_exists('family_member_child1_birth_certificate', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_birth_certificate/'.$docdataForm360['family_member_child1_birth_certificate'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child1_birth_certificate'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child1_birth_certificate/'.$docdataForm360['family_member_child1_birth_certificate'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>









                                </tbody>
                            </table>

                            <h2 class="fs-title">Child 2 - INFO</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name and surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_name2)) {{$data->fam_member_child_name2}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_dob2)) {{$data->fam_member_child_dob2}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Place of birth </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->fam_member_child_pob2)))
                                                     {{$data->fam_member_child_pob2}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other nationalities
                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_child_other_nationality2)))
                                                 {{$data->fam_member_child_other_nationality2}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever suffered of severe illness, or do you
                                            take any prescribed medication? If so, please specify
                                        </td>
                                        <td>
                                            @if(isset($data->fam_member_child_ever_suffered2)) {{$data->fam_member_child_ever_suffered2}} @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever been convicted of a crime or are
                                            awaiting legal action on any other matter, even if no
                                            longer indicated on the police check or other
                                            equivalent documents? If so, please specify
                                        </td>
                                        <td>
                                             @if(isset($data->fam_member_child_legal_action2)) {{$data->fam_member_child_legal_action2}} @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Are you also included in the visa application?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child2_include_visa_application)) {{$data->fam_member_child2_include_visa_application}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Are you currently in Australia or NZ?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child2_australiz_newzland)) {{$data->fam_member_child2_australiz_newzland}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> If either in Australia or NZ, please specify the country and with which visa
                                        </td>
                                        <td>  @if(isset($data->fam_member_child2_which_visa)) {{$data->fam_member_child2_which_visa}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Do you hold the same visa that your partner holds?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child2_visa_partner_hold)) {{$data->fam_member_child2_visa_partner_hold}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> When does your visa expire?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child2_visa_expire)) {{$data->fam_member_child2_visa_expire}} @endif </td>
                                    </tr>


                                </tbody>
                            </table>

                            <h2 class="fs-title">Child 2 - DOCS </h2>

                            <table>

                                <tbody>

                                    <tr>
                                        <td> Passport
                                        </td>
                                        <td> <input type="file" name="family_member_child2_passport" id="family_member_child2_passport">
                                            @if (array_key_exists('family_member_child2_passport', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_passport/'.$docdataForm360['family_member_child2_passport'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child2_passport'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_passport/'.$docdataForm360['family_member_child2_passport'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Passport photo
                                        </td>
                                        <td> <input type="file" name="family_member_child2_passport_photo" id="family_member_child2_passport_photo">
                                            @if (array_key_exists('family_member_child2_passport_photo', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_passport_photo/'.$docdataForm360['family_member_child2_passport_photo'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child2_passport_photo'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_passport_photo/'.$docdataForm360['family_member_child2_passport_photo'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> ID Card or Driving license
                                        </td>
                                        <td> <input type="file" name="family_member_child2_driving_license" id="family_member_child2_driving_license">
                                            @if (array_key_exists('family_member_child2_driving_license', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_driving_license/'.$docdataForm360['family_member_child2_driving_license'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child2_driving_license'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_driving_license/'.$docdataForm360['family_member_child2_driving_license'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Current or most recent visa to Australia (if applicable)
                                        </td>
                                        <td> <input type="file" name="family_member_child2_recent_visa" id="family_member_child2_recent_visa">
                                            @if (array_key_exists('family_member_child2_recent_visa', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_recent_visa/'.$docdataForm360['family_member_child2_recent_visa'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child2_recent_visa'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_recent_visa/'.$docdataForm360['family_member_child2_recent_visa'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> IELTS Test or equivalent English test taken (if applicable)
                                        </td>
                                        <td> <input type="file" name="family_member_child2_ielts" id="family_member_child2_ielts">
                                            @if (array_key_exists('family_member_child2_ielts', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_ielts/'.$docdataForm360['family_member_child2_ielts'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child2_ielts'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_ielts/'.$docdataForm360['family_member_child2_ielts'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Updated CV or Resume
                                        </td>
                                        <td> <input type="file" name="family_member_child2_cv_resume" id="family_member_child2_cv_resume">
                                            @if (array_key_exists('family_member_child2_cv_resume', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_cv_resume/'.$docdataForm360['family_member_child2_cv_resume'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child2_cv_resume'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_cv_resume/'.$docdataForm360['family_member_child2_cv_resume'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Birth certificate indicating name of both parents
                                        </td>
                                        <td> <input type="file" name="family_member_child2_birth_certificate" id="family_member_child2_birth_certificate">
                                            @if (array_key_exists('family_member_child2_birth_certificate', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_birth_certificate/'.$docdataForm360['family_member_child2_birth_certificate'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child2_birth_certificate'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child2_birth_certificate/'.$docdataForm360['family_member_child2_birth_certificate'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>









                                </tbody>
                            </table>

                            <h2 class="fs-title">Child 3 - INFO </h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name and surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_name3)) {{$data->fam_member_child_name3}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td>  @if(isset($data->fam_member_child_dob3)) {{$data->fam_member_child_dob3}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Place of birth </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_child_pob3)))
                                                {{$data->fam_member_child_pob3}}
                                                @endif
                                              
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nationality
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_child_nationality3)))
                                                    {{$data->fam_member_child_nationality3}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other nationalities
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_child_other_nationality3)))
                                                    {{$data->fam_member_child_other_nationality3}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever suffered of severe illness, or do you
                                            take any prescribed medication? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_child_ever_suffered3)))
                                                    {{$data->fam_member_child_ever_suffered3}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever been convicted of a crime or are
                                            awaiting legal action on any other matter, even if no
                                            longer indicated on the police check or other
                                            equivalent documents? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_child_legal_action3)))
                                                    {{$data->fam_member_child_legal_action3}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Are you also included in the visa application?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_child3_include_visa_application)))
                                                    {{$data->fam_member_child3_include_visa_application}}
                                                @endif
                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Are you currently in Australia or NZ?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child3_australiz_newzland)) {{$data->fam_member_child3_australiz_newzland}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> If either in Australia or NZ, please specify the country and with which visa
                                        </td>
                                        <td>  @if(isset($data->fam_member_child3_which_visa)) {{$data->fam_member_child3_which_visa}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Do you hold the same visa that your partner holds?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child3_visa_partner_hold)) {{$data->fam_member_child3_visa_partner_hold}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> When does your visa expire?
                                        </td>
                                        <td>  @if(isset($data->fam_member_child3_visa_expire)) {{$data->fam_member_child3_visa_expire}} @endif </td>
                                    </tr>

                                </tbody>
                            </table>
                            <h2 class="fs-title">Child 3 - DOCS </h2>

                            <table>

                                <tbody>

                                    <tr>
                                        <td> Passport
                                        </td>
                                        <td> <input type="file" name="family_member_child3_passport" id="family_member_child3_passport">
                                            @if (array_key_exists('family_member_child3_passport', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_passport/'.$docdataForm360['family_member_child3_passport'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child3_passport'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_passport/'.$docdataForm360['family_member_child3_passport'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Passport photo
                                        </td>
                                        <td> <input type="file" name="family_member_child3_passport_photo" id="family_member_child3_passport_photo">
                                            @if (array_key_exists('family_member_child3_passport_photo', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_passport_photo/'.$docdataForm360['family_member_child3_passport_photo'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child3_passport_photo'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_passport_photo/'.$docdataForm360['family_member_child3_passport_photo'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> ID Card or Driving license
                                        </td>
                                        <td> <input type="file" name="family_member_child3_driving_license" id="family_member_child3_driving_license">
                                            @if (array_key_exists('family_member_child3_driving_license', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_driving_license/'.$docdataForm360['family_member_child3_driving_license'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child3_driving_license'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_driving_license/'.$docdataForm360['family_member_child3_driving_license'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Current or most recent visa to Australia (if applicable)
                                        </td>
                                        <td> <input type="file" name="family_member_child3_recent_visa" id="family_member_child3_recent_visa">
                                            @if (array_key_exists('family_member_child3_recent_visa', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_recent_visa/'.$docdataForm360['family_member_child3_recent_visa'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child3_recent_visa'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_recent_visa/'.$docdataForm360['family_member_child3_recent_visa'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> IELTS Test or equivalent English test taken (if applicable)
                                        </td>
                                        <td> <input type="file" name="family_member_child3_ielts" id="family_member_child3_ielts">
                                            @if (array_key_exists('family_member_child3_ielts', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_ielts/'.$docdataForm360['family_member_child3_ielts'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child3_ielts'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_ielts/'.$docdataForm360['family_member_child3_ielts'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Updated CV or Resume
                                        </td>
                                        <td> <input type="file" name="family_member_child3_cv_resume" id="family_member_child3_cv_resume">
                                            @if (array_key_exists('family_member_child3_cv_resume', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_cv_resume/'.$docdataForm360['family_member_child3_cv_resume'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child3_cv_resume'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_cv_resume/'.$docdataForm360['family_member_child3_cv_resume'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Birth certificate indicating name of both parents
                                        </td>
                                        <td> <input type="file" name="family_member_child3_birth_certificate" id="family_member_child3_birth_certificate">
                                            @if (array_key_exists('family_member_child3_birth_certificate', $docdataForm360))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_birth_certificate/'.$docdataForm360['family_member_child3_birth_certificate'])  }}">
                                                @if(str_contains($docdataForm360['family_member_child3_birth_certificate'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/form360/'.$data->user_id.'/family_member_child3_birth_certificate/'.$docdataForm360['family_member_child3_birth_certificate'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>









                                </tbody>
                            </table>

                            <h2 class="fs-title"> FATHER OF THE MAIN APPLICANT</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name and surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_father_name)) {{$data->fam_member_father_name}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td>  @if(isset($data->fam_member_father_dob)) {{$data->fam_member_father_dob}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Place of birth </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->fam_member_father_pob)))
                                                    {{$data->fam_member_father_pob}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nationality
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_father_nationality)))
                                                    {{$data->fam_member_father_nationality}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other nationalities
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_father_other_nationality)))
                                                {{$data->fam_member_father_other_nationality}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever suffered of severe illness, or do you
                                            take any prescribed medication? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_father_ever_suffered)))
                                                    {{$data->fam_member_father_ever_suffered}}
                                                @endif
                                              
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever been convicted of a crime or are
                                            awaiting legal action on any other matter, even if no
                                            longer indicated on the police check or other
                                            equivalent documents? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_father_legal_action)))
                                                    {{$data->fam_member_father_legal_action}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Is this person included in the visa application?
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_father_visa_application)))
                                                    {{$data->fam_member_father_visa_application}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Where does this person currently live?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_father_currently_live)))
                                                    {{$data->fam_member_father_currently_live}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <h2 class="fs-title"> MOTHER OF THE MAIN APPLICANT</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name and surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_mother_name)) {{$data->fam_member_mother_name}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td>  @if(isset($data->fam_member_mother_dob)) {{$data->fam_member_mother_dob}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Place of birth </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->fam_member_mother_pob)))
                                                    {{$data->fam_member_mother_pob}}
                                                @endif
                                              
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nationality
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_mother_nationality)))
                                                    {{$data->fam_member_mother_nationality}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other nationalities
                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_mother_other_nationality)))
                                                    {{$data->fam_member_mother_other_nationality}}
                                                @endif
                                             
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever suffered of severe illness, or do you
                                            take any prescribed medication? If so, please specify
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_mother_ever_suffered)))
                                                {{$data->fam_member_mother_ever_suffered}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever been convicted of a crime or are
                                            awaiting legal action on any other matter, even if no
                                            longer indicated on the police check or other
                                            equivalent documents? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_mother_legal_action)))
                                                    {{$data->fam_member_mother_legal_action}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Is this person included in the visa application?
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_mother_visa_application)))
                                                {{$data->fam_member_mother_visa_application}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Where does this person currently live?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_mother_currently_live)))
                                               {{$data->fam_member_mother_currently_live}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                </tbody>
                            </table>


                            <h2 class="fs-title"> SIBLINGS OF THE MAIN APPLICANT</h2>
                            <h2 class="fs-title">SIBLING 1 </h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name and surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_bro_sis_name1)) {{$data->fam_member_bro_sis_name1}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td> @if(isset($data->fam_member_bro_sis_dob1)) {{$data->fam_member_bro_sis_dob1}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Place of birth </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_bro_sis_pob1)))
                                                    {{$data->fam_member_bro_sis_pob1}}
                                                @endif
                                              
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nationality
                                        </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->fam_member_bro_sis_nationality1)))
                                                    {{$data->fam_member_bro_sis_nationality1}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other nationalities
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_bro_sis_other_nationality1)))
                                                    {{$data->fam_member_bro_sis_other_nationality1}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever suffered of severe illness, or do you
                                            take any prescribed medication? If so, please specify
                                        </td>
                                        <td>
                                           
                                                @if(!empty(isset($data->fam_member_bro_sis_ever_suffered1)))
                                                {{$data->fam_member_bro_sis_ever_suffered1}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever been convicted of a crime or are
                                            awaiting legal action on any other matter, even if no
                                            longer indicated on the police check or other
                                            equivalent documents? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_bro_sis_legal_action1)))
                                                    {{$data->fam_member_bro_sis_legal_action1}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Is this person included in the visa application?
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_bro_sis_visa_application1)))
                                                    {{$data->fam_member_bro_sis_visa_application1}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Where does this person currently live?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_bro_sis_currently_live1)))
                                                {{$data->fam_member_bro_sis_currently_live1}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <h2 class="fs-title">SIBLING 2 </h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name and surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_bro_sis_name2)) {{$data->fam_member_bro_sis_name2}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td>  @if(isset($data->fam_member_bro_sis_dob2)) {{$data->fam_member_bro_sis_dob2}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Place of birth </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_bro_sis_pob2)))
                                                {{$data->fam_member_bro_sis_pob2}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nationality
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_bro_sis_nationality2)))
                                                    {{$data->fam_member_bro_sis_nationality2}}
                                                @endif
                                              
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other nationalities
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_bro_sis_other_nationality2)))
                                                    {{$data->fam_member_bro_sis_other_nationality2}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever suffered of severe illness, or do you
                                            take any prescribed medication? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_bro_sis_ever_suffered2)))
                                                {{$data->fam_member_bro_sis_ever_suffered2}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever been convicted of a crime or are
                                            awaiting legal action on any other matter, even if no
                                            longer indicated on the police check or other
                                            equivalent documents? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_bro_sis_legal_action2)))
                                                    {{$data->fam_member_bro_sis_legal_action2}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Is this person included in the visa application?
                                        </td>
                                        <td>
                                            <

                                                @if(!empty(isset($data->fam_member_bro_sis_visa_application2)))
                                                    {{$data->fam_member_bro_sis_visa_application2}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Where does this person currently live?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_bro_sis_currently_live2)))
                                                    {{$data->fam_member_bro_sis_currently_live2}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <h2 class="fs-title">SIBLING 3 </h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name and surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_bro_sis_name3)) {{$data->fam_member_bro_sis_name3}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td>  @if(isset($data->fam_member_bro_sis_dob3)) {{$data->fam_member_bro_sis_dob3}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Place of birth </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_bro_sis_pob3)))
                                                {{$data->fam_member_bro_sis_pob3}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nationality
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_bro_sis_nationality3)))
                                                {{$data->fam_member_bro_sis_nationality3}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Other nationalities
                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_bro_sis_other_nationality3)))
                                                    {{$data->fam_member_bro_sis_other_nationality3}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever suffered of severe illness, or do you
                                            take any prescribed medication? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_bro_sis_ever_suffered3)))
                                               {{$data->fam_member_bro_sis_ever_suffered3}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Have you ever been convicted of a crime or are
                                            awaiting legal action on any other matter, even if no
                                            longer indicated on the police check or other
                                            equivalent documents? If so, please specify
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_bro_sis_legal_action3)))
                                                    {{$data->fam_member_bro_sis_legal_action3}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Is this person included in the visa application?
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_bro_sis_visa_application3)))
                                                    {{$data->fam_member_bro_sis_visa_application3}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Where does this person currently live?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->fam_member_bro_sis_currently_live3)))
                                                {{$data->fam_member_bro_sis_currently_live3}}
                                                @endif
                                                
                                            
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <h2 class="fs-title">PART B </h2>
                            <p>Partner visa application only (To be filled out for who is in a relationship with an Australian/NZ citizen or PR visa holder)</p>

                            <h3 class="fs-title">Common Details </h3>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Are you (visa applicant) in a relationship with your partner who is either:
                                            An Australian citizen,
                                            Permanent resident of Australia,
                                            New Zealand citizen ,
                                            NZ permanent resident
                                        </td>
                                        <td>
                                          

                                                @if(!empty(isset($data->fam_member_partner_visa_sectionb)))
                                                    {{$data->fam_member_partner_visa_sectionb}}
                                                @endif
                                                
                                        </td>
                                    </tr>



                                    <tr>
                                        <td> Who is your partner?

                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_your_partner_visa_sectionb)))
                                                    {{$data->fam_member_your_partner_visa_sectionb}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> How did your partner obtain Australian or NZ citizenship

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_your_partner_obtain_visa_sectionb)))
                                                    {{$data->fam_member_your_partner_obtain_visa_sectionb}}
                                                @endif
                                               
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> When did you first meet your partner?
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_first_meet_visa_sectionb)) {{$data->fam_member_your_partner_first_meet_visa_sectionb}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> How did you meet her exactly (Please indicate the circumstances)
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_first_meet_exactly_visa_sectionb)) {{$data->fam_member_your_partner_first_meet_exactly_visa_sectionb}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> When did you become a couple to the exclusion of all other?
                                        </td>
                                        <td> @if(isset($data->fam_member_your_partner_couple_sectionb)) {{$data->fam_member_your_partner_couple_sectionb}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> What is your civil status?

                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_your_partner_civil_status_sectionb)))
                                                    {{$data->fam_member_your_partner_civil_status_sectionb}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Indicate your date of marriage or date of when you registered your relationship
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_date_marriage_sectionb)) {{$data->fam_member_your_partner_date_marriage_sectionb}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Do you currently live together?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_your_partner_live_together_sectionb)))
                                                    {{$data->fam_member_your_partner_live_together_sectionb}}
                                                @endif
                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> If you live together, please indicate when you started living together
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_started_live_together_sectionb)) {{$data->fam_member_your_partner_started_live_together_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Ever since you became a couple, did you live apart for any period? If so, please indicate from when – to, the reason and if you maintained regular contact at all times
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_became_a_couple_sectionb)) {{$data->fam_member_your_partner_became_a_couple_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Have you or your partner even been married or in a formal defacto relationship before?

                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_your_partner_even_been_married_sectionb)))
                                                    {{$data->fam_member_your_partner_even_been_married_sectionb}}
                                                @endif
                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Do you have children from your relationship?

                                        </td>
                                        <td>
                                          

                                                @if(!empty(isset($data->fam_member_your_partner_children_sectionb)))
                                                    {{$data->fam_member_your_partner_children_sectionb}}
                                                @endif
                                               
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Do you have children from any previous relationship? If yes please specify
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_have_children_sectionb)) {{$data->fam_member_your_partner_have_children_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Has your partner ever sponsored anyone on any type of visa before? If so, please specify
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_sponsored_sectionb)) {{$data->fam_member_your_partner_sponsored_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Has your partner ever been sponsored for any type of visa before?
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_type_of_visa_sectionb)) {{$data->fam_member_your_partner_type_of_visa_sectionb}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Do you have a joint bank account?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_your_partner_joint_bank_sectionb)))
                                                     {{$data->fam_member_your_partner_joint_bank_sectionb}}
                                                @endif
                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> In which country is the bank account?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_your_partner_bank_account_sectionb)))
                                              {{$data->fam_member_your_partner_bank_account_sectionb}}
                                                @endif
                                                
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> If you have a joint bank account, when was it opened
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_joint_bank_account_sectionb)) {{$data->fam_member_your_partner_joint_bank_account_sectionb}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Is this bank account used on a regular basis?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_your_partner_regular_basis_sectionb)))
                                                    {{$data->fam_member_your_partner_regular_basis_sectionb}}
                                                @endif
                                              
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Do you have joint rental agreement?

                                        </td>
                                        <td>
                                           

                                                @if(!empty(isset($data->fam_member_your_partner_rental_agreement_sectionb)))
                                                    {{$data->fam_member_your_partner_rental_agreement_sectionb}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> When is the start date of this rental agreement?
                                        </td>
                                        <td>  @if(isset($data->fam_member_your_partner_rental_agreement_startDate_sectionb)) {{$data->fam_member_your_partner_rental_agreement_startDate_sectionb}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Are you able to provide utility bills showing each person’s name and same address?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_your_partner_utilityBill_sectionb)))
                                                {{$data->fam_member_your_partner_utilityBill_sectionb}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Are you able to have at least 2 people (guarantor) to declare your relationship is genuine?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_your_partner_guarantor_sectionb)))
                                                    {{$data->fam_member_your_partner_guarantor_sectionb}}
                                                @endif
                                             
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <h3 class="fs-title">Details of your guarantors:</h3>
                            <h3 class="fs-title">Person N.1</h3>
                            <p>The person must know the visa applicant and the partner for at least 12 months</p>

                            <table>
                                <tbody>

                                    <tr>
                                        <td> Name
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_name_p1_sectionb)) {{$data->fam_member_guarantor_name_p1_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_surname_p1_sectionb)) {{$data->fam_member_guarantor_surname_p1_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_dob_p1_sectionb)) {{$data->fam_member_guarantor_dob_p1_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Is this person a: Australian citizenship or hold permanent residency?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_guarantor_permanent_p1_sectionb)))
                                                    {{$data->fam_member_guarantor_permanent_p1_sectionb}}
                                                @endif
                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Work-position
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_position_p1_sectionb))  {{$data->fam_member_guarantor_position_p1_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Phone contact
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_phone_p1_sectionb)) {{$data->fam_member_guarantor_phone_p1_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Email contact
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_email_p1_sectionb)) {{$data->fam_member_guarantor_email_p1_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> How long has this person known the visa applicant for?

                                        </td>
                                        <td>
                                          

                                                @if(!empty(isset($data->fam_member_guarantor_applicant_p1_sectionb)))
                                                    {{$data->fam_member_guarantor_applicant_p1_sectionb}}
                                                @endif
                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Is this person willing to complete form 888?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_guarantor_willing_p1_sectionb)))
                                                    {{$data->fam_member_guarantor_willing_p1_sectionb}}
                                                @endif
                                              
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                            <h3 class="fs-title">Person N.2</h3>

                            <table>
                                <tbody>

                                    <tr>
                                        <td> Name
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_name_p2_sectionb)) {{$data->fam_member_guarantor_name_p2_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Surname
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_surname_p2_sectionb)) {{$data->fam_member_guarantor_surname_p2_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Date of birth
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_dob_p2_sectionb)) {{$data->fam_member_guarantor_dob_p2_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Is this person a: Australian citizenship or hold permanent residency?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_guarantor_permanent_p2_sectionb)))
                                                {{$data->fam_member_guarantor_permanent_p2_sectionb}}
                                                @endif
                                               
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Work-position
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_position_p2_sectionb)) {{$data->fam_member_guarantor_position_p2_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Phone contact
                                        </td>
                                        <td>  @if(isset($data->fam_member_guarantor_phone_p2_sectionb)) {{$data->fam_member_guarantor_phone_p2_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> Email contact
                                        </td>
                                        <td> @if(isset($data->fam_member_guarantor_email_p2_sectionb)) {{$data->fam_member_guarantor_email_p2_sectionb}} @endif </td>
                                    </tr>
                                    <tr>
                                        <td> How long has this person known the visa applicant for?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_guarantor_applicant_p2_sectionb)))
                                                {{$data->fam_member_guarantor_applicant_p2_sectionb}}
                                                @endif
                                              
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Is this person willing to complete form 888?

                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->fam_member_guarantor_willing_p2_sectionb)))
                                                {{$data->fam_member_guarantor_willing_p2_sectionb}}
                                                @endif
                                                
                                        </td>
                                    </tr>


                                </tbody>
                            </table>                
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script>
    
    jQuery('.accordion-item table tr input, .accordion-item table tr select').each(function() {

    var thisValue = jQuery(this).val();
                jQuery(this).replaceWith(jQuery('<p>' + thisValue + '</p>'))

    })
    $('.alert-success').fadeIn().delay(5000).fadeOut();
  </script>
@endsection()