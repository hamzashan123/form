@extends('layouts.admin')
<style>
    .container-fluid.completeformEmployer  tr td:nth-child(1) {
    font-weight: 700;
    font-size: 15px;
    color: black !important;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('formstyles.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{asset('countrycode.js')}}"></script>
@section('content')
<div class="container-fluid completeformEmployer">
    <div class="row justify-content-center">
        <div class="box-shadow padding-20 col-11 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-center   mt-3 mb-2">
            <div class=" px-0 pt-4 pb-0 mt-3 mb-3">

                <img src="/logo.png" class="logo" />
                <h2 id="heading"> Employer Form </h2>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                        <b>SBS:</b>
                                                    </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                                        <div class="accordion-body">
                                                        <h2 class="fs-title">SBS - BUSINESS DETAILS </h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td> Is your business registered in Australia? </td>
                                    <td>
                                        

                                            @if(!empty(isset($data->sbs_business_required_aus)))
                                            {{$data->sbs_business_required_aus}}
                                            @endif
                                          
                                    </td>
                                </tr>

                                <tr>
                                    <td> If not in Australia, indicate the country
                                        where your business is registered </td>
                                    <td>
                                       
                                            @if(!empty(isset($data->sbs_business_country)))
                                            {{$data->sbs_business_country}}
                                            @endif
                                            
                                    </td>
                                </tr>


                                <tr>
                                    <td> What is the business legal registered name
                                    </td>
                                    <td>
                                        @if(isset($data->sbs_business_legal_registered)) {{$data->sbs_business_legal_registered}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> Do you have a different trading name? If so,
                                        please specify

                                    </td>
                                    <td>
                                         @if(isset($data->sbs_business_trading)) {{$data->sbs_business_trading}} @endif
                                    </td>
                                </tr>



                                <tr>
                                    <td> What is your ABN number or the
                                        registration number in the country where
                                        the business is registered?

                                    </td>
                                    <td>
                                         @if(isset($data->sbs_business_abn)) {{$data->sbs_business_abn}} @endif
                                    </td>
                                </tr>


                                <tr>
                                    <td> What is the ACN number of the business?

                                    </td>
                                    <td>
                                         @if(isset($data->sbs_business_acn)) {{$data->sbs_business_acn}} @endif
                                    </td>
                                </tr>


                                <tr>
                                    <td> Business type (company, sole trader, public
                                        listed company, trust, other)

                                    </td>
                                    <td>
                                       
                                            @if(!empty(isset($data->sbs_business_type)))
                                                {{$data->sbs_business_type}}
                                            @endif
                                            
                                    </td>
                                </tr>


                                <tr>
                                    <td> Is this business a subsidiary of a foreign
                                        company? If so, please provide details

                                    </td>
                                    <td>
                                         @if(isset($data->sbs_business_subsidiary)) {{$data->sbs_business_subsidiary}} @endif
                                    </td>
                                </tr>


                                <tr>
                                    <td> Is this company a branch of a foreign
                                        company? If so, please provide details

                                    </td>
                                    <td>
                                         @if(isset($data->sbs_business_branch)) {{$data->sbs_business_branch}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> Is your business part of a franchise?

                                    </td>
                                    <td>
                                   

                                            @if(!empty(isset($data->sbs_business_franchise)))
                                                {{$data->sbs_business_franchise}}
                                            @endif
                                            
                                    
                                    </td>
                                </tr>


                                <tr>
                                    <td>Is your business the trustee for any other
                                        business activities?

                                    </td>
                                    <td>
                                    

                                            @if(!empty(isset($data->sbs_business_trustee)))
                                                     {{$data->sbs_business_trustee}}
                                            @endif
                                           
                                    
                                    </td>
                                </tr>



                                <tr>
                                    <td>If so, please specify

                                    </td>
                                    <td>
                                         @if(isset($data->sbs_business_trustee_specify)) {{$data->sbs_business_trustee_specify}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Trust name

                                    </td>
                                    <td>
                                        @if(isset($data->sbs_business_trustee_name)) {{$data->sbs_business_trustee_name}} @endif
                                    </td>
                                </tr>


                                <tr>
                                    <td>Trust Australian Number (ABN)

                                    </td>
                                    <td>
                                         @if(isset($data->sbs_business_trustee_abn)) {{$data->sbs_business_trustee_abn}} @endif
                                    </td>
                                </tr>


                                <tr>
                                    <td>Have you ever been a sponsor for migration
                                        purposes before? If so, please send us the
                                        Immigration approval letter
                                    </td>
                                    <td>
                                    

                                            @if(!empty(isset($data->sbs_business_sponsor_migration)))
                                                {{$data->sbs_business_sponsor_migration}}
                                            @endif
                                            
                                    
                                    </td>
                                </tr>


                                <tr>
                                    <td>Is your business currently registered with
                                        the Australian Taxation Office (ATO)?


                                    </td>
                                    <td>
                                    
                                            @if(!empty(isset($data->sbs_business_ato)))
                                                {{$data->sbs_business_ato}}
                                            @endif
                                            
                                    
                                    </td>
                                </tr>


                                <tr>
                                    <td>Is your business registered with the
                                        Australian Securities and Investments
                                        Commission (ASIC) or the Australian Stock
                                        Exchange (ASX)?


                                    </td>
                                    <td>
                                    

                                            @if(!empty(isset($data->sbs_business_stock_exchange)))
                                                {{$data->sbs_business_stock_exchange}}
                                            @endif
                                            
                                    
                                    </td>
                                </tr>




                            </tbody>
                        </table>

                        <h2 class="fs-title">SBS - TRADING DETAILS </h2>

                        <table>
                            <tbody>



                                <tr>
                                    <td> In what year was your business
                                        established?
                                    </td>
                                    <td>
                                         @if(isset($data->sbs_trading_established)) {{$data->sbs_trading_established}} @endif
                                    </td>
                                </tr>


                                <tr>
                                    <td> How long has your business been trading in
                                        Australia? Indicate the month and year
                                    </td>
                                    <td>
                                         @if(isset($data->sbs_trading_business)) {{$data->sbs_trading_business}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> Business structure

                                    </td>
                                    <td>
                                         @if(isset($data->sbs_trading_structure)) {{$data->sbs_trading_structure}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> Address of the business
                                    </td>
                                    <td>
                                         @if(isset($data->sbs_trading_address)) {{$data->sbs_trading_address}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> Sector of business
                                    </td>
                                    <td>
                                        @if(isset($data->sbs_trading_sector)) {{$data->sbs_trading_sector}} @endif
                                    </td>
                                </tr>


                                <tr>
                                    <td> Description of the business activity
                                    </td>
                                    <td>
                                        @if(isset($data->sbs_trading_activity)) {{$data->sbs_trading_activity}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> How many people are you willing to
                                        sponsor in the following 5 years?</td>
                                    <td>
                                       

                                            @if(!empty(isset($data->sbs_trading_willing)))
                                                {{$data->sbs_trading_willing}}
                                            @endif
                                            
                                    </td>
                                </tr>


                                <tr>
                                    <td>Please provide an explanation outlining the
                                        reasons why you are willing to sponsor a
                                        foreigner rather than an Australian citizen
                                        or PR resident
                                    </td>
                                    <td>
                                         @if(isset($data->sbs_trading_outlining)) {{$data->sbs_trading_outlining}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Indicate your webpage, if you have one
                                    </td>
                                    <td>
                                         @if(isset($data->sbs_trading_webpage)) {{$data->sbs_trading_webpage}} @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <h2 class="fs-title">Main point of contact in the business </h2>

                        <table>
                            <tbody>

                                <tr>
                                    <td>Indicate Name and surname of the best
                                        contact person in the company
                                    </td>
                                    <td>
                                         @if(isset($data->main_point_name_surname)) {{$data->main_point_name_surname}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Indicate the role of this person in the
                                        company
                                    </td>
                                    <td>
                                         @if(isset($data->main_point_role)) {{$data->main_point_role}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Indicate the email contact of this person
                                    </td>
                                    <td>
                                         @if(isset($data->main_point_email_person)) {{$data->main_point_email_person}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Indicate the best contact number of this
                                        person
                                    </td>
                                    <td>
                                        @if(isset($data->main_point_contact_number)) {{$data->main_point_contact_number}} @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>


                        <h2 class="fs-title">For each of the owners, directors, principals and / or partners </h2>

                        <table>
                            <tbody>

                                <tr>
                                    <td>Name and surname
                                    </td>
                                    <td>
                                         @if(isset($data->partner_name_surname1)) {{$data->partner_name_surname1}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Gender
                                    </td>
                                    <td>
                                    

                                            @if(!empty(isset($data->partner_gender1)))
                                                    {{$data->partner_gender1}}
                                            @endif
                                           
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date of birth
                                    </td>
                                    <td>
                                         @if(isset($data->partner_dob1)) {{$data->partner_dob1}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Position
                                    </td>
                                    <td>
                                    

                                            @if(!empty(isset($data->partner_position1)))
                                                    {{$data->partner_position1}}
                                            @endif
                                            
                                        
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <table>
                            <tbody>

                                <tr>
                                    <td>Name and surname
                                    </td>
                                    <td>
                                         @if(isset($data->partner_name_surname2)) {{$data->partner_name_surname2}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Gender
                                    </td>
                                    <td>
                                        

                                            @if(!empty(isset($data->partner_gender2)))
                                                    {{$data->partner_gender2}}
                                            @endif
                                            
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date of birth
                                    </td>
                                    <td>
                                        @if(isset($data->partner_dob2)) {{$data->partner_dob2}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Position
                                    </td>
                                    <td>
                                    

                                            @if(!empty(isset($data->partner_position2)))
                                                    {{$data->partner_position2}}
                                            @endif
                                            
                                    
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <table>
                            <tbody>

                                <tr>
                                    <td>Name and surname
                                    </td>
                                    <td>
                                         @if(isset($data->partner_name_surname3)) {{$data->partner_name_surname3}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Gender
                                    </td>
                                    <td>
                                    

                                            @if(!empty(isset($data->partner_gender3)))
                                            {{$data->partner_gender3}}
                                            @endif
                                            
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date of birth
                                    </td>
                                    <td>
                                        @if(isset($data->partner_dob3)) {{$data->partner_dob3}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Position
                                    </td>
                                    <td>
                                    
                                            @if(!empty(isset($data->partner_position3)))
                                                {{$data->partner_position3}}
                                            @endif
                                           
                                    
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <table>
                            <tbody>

                                <tr>
                                    <td>Name and surname
                                    </td>
                                    <td>
                                        @if(isset($data->partner_name_surname4)) {{$data->partner_name_surname4}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Gender
                                    </td>
                                    <td>
                                    

                                            @if(!empty(isset($data->partner_gender4)))
                                                {{$data->partner_gender4}}
                                            @endif
                                            
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date of birth
                                    </td>
                                    <td>
                                         @if(isset($data->partner_dob4)) {{$data->partner_dob4}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Position
                                    </td>
                                    <td>
                                    
                                            @if(!empty(isset($data->partner_position4)))
                                              {{$data->partner_position4}}
                                            @endif
                                           
                                    
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <h2 class="fs-title">WORKFORCE DETAILS OF THE BUSINESS/ORGANIZATION </h2>

                        <p> Indicate what is the total number of: </p>

                        <table>
                            <tbody>

                                <tr>
                                    <td>Australian employees (including Australian
                                        citizens and permanent residents)

                                    </td>
                                    <td>
                                        
                                            @if(!empty(isset($data->organization_name_surname)))
                                                    {{$data->organization_name_surname}}
                                            @endif
                                            
                                    </td>
                                </tr>

                                <tr>
                                    <td>Out of the Australian citizens and PR
                                        residents, how many are classified as
                                        professionals?

                                    </td>
                                    <td>
                                       
                                            @if(!empty(isset($data->organization_residents1)))
                                                {{$data->organization_residents1}}
                                            @endif
                                           
                                    </td>
                                </tr>

                                <tr>
                                    <td>Out of the Australian citizens and PR
                                        residents, how many are classified as
                                        trades?


                                    </td>
                                    <td>
                                       
                                            @if(!empty(isset($data->organization_residents2)))
                                                {{$data->organization_residents2}}
                                            @endif
                                            
                                    </td>
                                </tr>


                                <tr>
                                    <td>Foreign employees (i.e. non-Australian
                                        citizens or non-permanent residents)



                                    </td>
                                    <td>
                                        
                                            @if(!empty(isset($data->organization_foreign_employees)))
                                            {{$data->organization_foreign_employees}}
                                            @endif
                                           
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="fs-title">Of the total number of foreign employees,
                                        what is the number of:</h2>
                        <table>
                            <tbody>
                                
                                
                                <!-- <tr >
                                    <td>
                                    Of the total number of foreign employees,
                                        what is the number of:
                                    </td>
                                    <td>

                                    </td>
                                </tr> -->

                                <tr>
                                    <td> 457 or 482 visa holders (this is the
                                        sponsorship visa)</td>
                                    <td>
                                       

                                            @if(!empty(isset($data->organization_foreign_457_482_visa)))
                                            {{$data->organization_foreign_457_482_visa}}
                                            @endif

                                          
                                    </td>
                                </tr>


                                <tr>
                                    <td>Other temporary work or temporary
                                        activity visa holders
                                    </td>
                                    <td>
                                       
                                            @if(!empty(isset($data->organization_foreign_other_temporary_visa)))
                                                {{$data->organization_foreign_other_temporary_visa}}
                                            @endif

                                    </td>
                                </tr>

                                <tr>
                                    <td>Student visa
                                    </td>
                                    <td>
                                        
                                            @if(!empty(isset($data->organization_foreign_student_visa)))
                                                 {{$data->organization_foreign_student_visa}}
                                            @endif

                                    </td>
                                </tr>


                                <tr>
                                    <td>Working holiday makers
                                    </td>
                                    <td>
                                       

                                            @if(!empty(isset($data->organization_foreign_working_holiday)))
                                                    {{$data->organization_foreign_working_holiday}}
                                            @endif

                                    </td>
                                </tr>

                                <tr>
                                    <td>Other visas
                                    </td>
                                    <td>
                                        
                                            @if(!empty(isset($data->organization_foreign_other_visas)))
                                                {{$data->organization_foreign_other_visas}}
                                            @endif
                                            
                                    </td>
                                </tr>


                                <tr>
                                    <td>How many recent Australian university
                                        graduates with less than 12 months work
                                        experience </td>
                                    <td>
                                   
                                        @if(!empty(isset($data->organization_foreign_recent_university)))
                                        {{$data->organization_foreign_recent_university}}
                                        @endif
                                     
                                    </td>
                                </tr>

                                <tr>
                                    <td>How many apprentices ae employed under
                                        a training agreement or contract of training </td>
                                    <td>
                                        
                                   
                                            @if(!empty(isset($data->organization_foreign_contract_of_training)))
                                            {{$data->organization_foreign_contract_of_training}}
                                            @endif
                                        
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                        <h2 class="fs-title">ANNUAL TURNOVER </h2>

                        <table>

                            <tbody>

                                <tr>
                                    <td>What was the annual turnover of your
                                        business for the most recent full financial
                                        year?
                                    </td>
                                    <td>
                                     @if(isset($data->annual_turnover_year)) {{$data->annual_turnover_year}} @endif
                                        
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>What has been the payroll figure (wages +
                                        expenses) for the most recent financial year

                                    </td>
                                    <td>
                                         @if(isset($data->annual_turnover_payroll_figure)) {{$data->annual_turnover_payroll_figure}} @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>If you have been operating for less than 12
                                        months, please indicate the payroll figure
                                        starting since you have been operating

                                    </td>
                                    <td>
                                         @if(isset($data->annual_turnover_operating)) {{$data->annual_turnover_operating}} @endif
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                        <h2 class="fs-title">SBS DOCS TO UPLOAD </h2>

                        <table>

                            <tbody>

                                <tr>
                                    <td> Previous Sponsorship Approval Letter (SBS)
                                        if applicable
                                    </td>
                                    <td> <input type="file" name="sbs_upload_previous_sponsorship" id="sbs_upload_previous_sponsorship">
                                        @if (array_key_exists('sbs_upload_previous_sponsorship', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_previous_sponsorship/'.$docdataemployerform['sbs_upload_previous_sponsorship'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_previous_sponsorship'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_previous_sponsorship/'.$docdataemployerform['sbs_upload_previous_sponsorship'])  }}" />
                                            @endif
                                        </a>


                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> ASIC Historical Extract
                                    </td>
                                    <td> <input type="file" name="sbs_upload_asic_historical" id="sbs_upload_asic_historical">
                                        @if (array_key_exists('sbs_upload_asic_historical', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_asic_historical/'.$docdataemployerform['sbs_upload_asic_historical'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_asic_historical'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_asic_historical/'.$docdataemployerform['sbs_upload_asic_historical'])  }}" />
                                            @endif
                                        </a>


                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> Trust deed (signed pages only) if applicable
                                    </td>
                                    <td> <input type="file" name="sbs_upload_trust" id="sbs_upload_trust">

                                        @if (array_key_exists('sbs_upload_trust', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_trust/'.$docdataemployerform['sbs_upload_trust'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_trust'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_trust/'.$docdataemployerform['sbs_upload_trust'])  }}" />
                                            @endif
                                        </a>


                                        @endif

                                    </td>
                                </tr>

                                <tr>
                                    <td> Lease agreement/evidence of ownership
                                        for the business premises
                                    </td>
                                    <td> <input type="file" name="sbs_upload_lease" id="sbs_upload_lease">
                                        @if (array_key_exists('sbs_upload_lease', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_lease/'.$docdataemployerform['sbs_upload_lease'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_lease'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_lease/'.$docdataemployerform['sbs_upload_lease'])  }}" />
                                            @endif
                                        </a>


                                        @endif

                                    </td>
                                </tr>

                                <tr>
                                    <td> Bank statement in the name of the
                                        company (not older than 6 months)
                                    </td>
                                    <td> <input type="file" name="sbs_upload_bank_statement" id="sbs_upload_bank_statement">

                                        @if (array_key_exists('sbs_upload_bank_statement', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_bank_statement/'.$docdataemployerform['sbs_upload_bank_statement'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_bank_statement'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_bank_statement/'.$docdataemployerform['sbs_upload_bank_statement'])  }}" />
                                            @endif
                                        </a>


                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> BAS for the last 12 months or since when
                                        you the business has been operating
                                    </td>
                                    <td> <input type="file" name="sbs_upload_bas" id="sbs_upload_bas">
                                        @if (array_key_exists('sbs_upload_bas', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_bas/'.$docdataemployerform['sbs_upload_bas'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_bas'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_bas/'.$docdataemployerform['sbs_upload_bas'])  }}" />
                                            @endif
                                        </a>


                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td> Profit & Loss of the most recent financial
                                        year
                                    </td>
                                    <td> <input type="file" name="sbs_upload_profit_loss" id="sbs_upload_profit_loss">

                                        @if (array_key_exists('sbs_upload_profit_loss', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_profit_loss/'.$docdataemployerform['sbs_upload_profit_loss'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_profit_loss'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_profit_loss/'.$docdataemployerform['sbs_upload_profit_loss'])  }}" />
                                            @endif
                                        </a>


                                        @endif


                                    </td>
                                </tr>

                                <tr>
                                    <td> Most recent payroll extract: provide the
                                        company’s gross payroll + expenses +
                                        superannuation extract for the past 12
                                        month (or ever since the business has been
                                        operating for)
                                    </td>
                                    <td> <input type="file" name="sbs_upload_recent_payroll" id="sbs_upload_recent_payroll">

                                        @if (array_key_exists('sbs_upload_recent_payroll', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_recent_payroll/'.$docdataemployerform['sbs_upload_recent_payroll'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_recent_payroll'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_recent_payroll/'.$docdataemployerform['sbs_upload_recent_payroll'])  }}" />
                                            @endif
                                        </a>


                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Organizational Chart: please provide an
                                        organizational chart for the business to be
                                        filled with the list of all of your employees
                                        and roles
                                    </td>
                                    <td> <input type="file" name="sbs_upload_chart" id="sbs_upload_chart">


                                        @if (array_key_exists('sbs_upload_chart', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_chart/'.$docdataemployerform['sbs_upload_chart'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_chart'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_chart/'.$docdataemployerform['sbs_upload_chart'])  }}" />
                                            @endif
                                        </a>


                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>A few recent utility bills
                                    </td>
                                    <td> <input type="file" name="sbs_upload_bill1" id="sbs_upload_bill1">

                                        @if (array_key_exists('sbs_upload_bill1', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_bill1/'.$docdataemployerform['sbs_upload_bill1'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_bill1'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_bill1/'.$docdataemployerform['sbs_upload_bill1'])  }}" />
                                            @endif
                                        </a>


                                        @endif

                                    </td>
                                </tr>

                                <tr>
                                    <td>A few recent utility bills
                                    </td>
                                    <td> <input type="file" name="sbs_upload_bill2" id="sbs_upload_bill2">

                                        @if (array_key_exists('sbs_upload_bill2', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_bill2/'.$docdataemployerform['sbs_upload_bill2'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_bill2'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_bill2/'.$docdataemployerform['sbs_upload_bill2'])  }}" />
                                            @endif
                                        </a>


                                        @endif

                                    </td>
                                </tr>

                                <tr>
                                    <td>A few invoices from suppliers
                                    </td>
                                    <td> <input type="file" name="sbs_upload_invoice1" id="sbs_upload_invoice1">

                                        @if (array_key_exists('sbs_upload_invoice1', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_invoice1/'.$docdataemployerform['sbs_upload_invoice1'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_invoice1'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_invoice1/'.$docdataemployerform['sbs_upload_invoice1'])  }}" />
                                            @endif
                                        </a>


                                        @endif

                                    </td>
                                </tr>

                                <tr>
                                    <td>A few invoices from suppliers
                                    </td>
                                    <td> <input type="file" name="sbs_upload_invoice2" id="sbs_upload_invoice2">

                                        @if (array_key_exists('sbs_upload_invoice2', $docdataemployerform))

                                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_invoice2/'.$docdataemployerform['sbs_upload_invoice2'])  }}">
                                            @if(str_contains($docdataemployerform['sbs_upload_invoice2'] , '.pdf'))
                                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                            @else
                                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/sbs_upload_invoice2/'.$docdataemployerform['sbs_upload_invoice2'])  }}" />
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
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <b>NOMINATION – POSITION NEEDED </b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                        <h2 class="fs-title"> DETAILS OF THE POSITION YOU ARE WILLING TO OFFER </h2>

                            <table>


                                <tbody>
                                    <tr>
                                        <td> Indicate where the visa applicant will be
                                            working (full address)</td>
                                        <td>  @if(isset($data->nomination_visa_appliciant)) {{$data->nomination_visa_appliciant}} @endif </td>
                                    </tr>


                                    <tr>
                                        <td> Is this an intra-company transfer? (when
                                            the applicant has been working for a
                                            subsidiary and/or branch of the Australian
                                            company outside of Australia)
                                        </td>
                                        <td> 
                                        

                                                @if(!empty(isset($data->nomination_intra_company_transfer)))
                                                    {{$data->nomination_intra_company_transfer}}
                                                @endif
                                                   
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Indicate the annual turnover of the
                                            business for the last financial year
                                        </td>
                                        <td>  @if(isset($data->nomination_financial_year)) {{$data->nomination_financial_year}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> What is the job title you are offering to the
                                            visa applicant
                                        </td>
                                        <td>  @if(isset($data->nomination_job_offering)) {{$data->nomination_job_offering}} @endif </td>
                                    </tr>


                                    <tr>
                                        <td>Are you able to find the most suitable
                                            occupation from this dropdown menu? If
                                            so, please select it</td>

                                        <td>

                                           
                                                @if(!empty(isset($data->nomination_job_occupation)))
                                                {{$data->nomination_job_occupation}}
                                                @endif
                                               
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Indicate the main duties and responsibilities
                                            that the applicant will be performing
                                            (ideally please indicate 5 duties)
                                        </td>
                                        <td>  @if(isset($data->nomination_responsibilities)) {{$data->nomination_responsibilities}} @endif </td>
                                    </tr>


                                    <tr>
                                        <td>Indicate the main tasks to be performed
                                        </td>
                                        <td>  @if(isset($data->nomination_performed)) {{$data->nomination_performed}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td>Other information about the position,
                                            including information about why this position cannot be filled from the local
                                            labour market:

                                        </td>
                                        <td>  @if(isset($data->nomination_position)) {{$data->nomination_position}} @endif </td>
                                    </tr>


                                </tbody>
                            </table>

                            <h2 class="fs-title"> QUALIFICATIONS AND EXPERIENCE NEEDED FOR THE POSITION NEEDED </h2>

                            <p> Describe the qualifications, relevant skills, employment experience and
                                registrations/licenses required to be held by the nominee </p>

                            <table>

                                <tbody>

                                    <tr>
                                        <td> Relevant qualifications needed</td>
                                        <td>  @if(isset($data->qua_and_exp_relevant)) {{$data->qua_and_exp_relevant}} @endif </td>
                                    </tr>


                                    <tr>
                                        <td>Relevant skills needed</td>
                                        <td>  @if(isset($data->qua_and_exp_skills)) {{$data->qua_and_exp_skills}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td>Does the position require the applicant to
                                            hold a licence, registration or professional
                                            membership? If so, please specify. Also,
                                            please specify if the applicant can perform
                                            work under supervision of another person
                                            who holds licence/registration</td>
                                        <td> 
                                       

                                                @if(!empty(isset($data->qua_and_exp_license)))
                                                    {{$data->qua_and_exp_license}}
                                                @endif
                                                    
                                    </td>
                                    </tr>


                                    <tr>
                                        <td>Has your business retrenched any Australian
                                            citizens or Australian permanent residents in
                                            the nominated occupation, or made their
                                            positions redundant, in the last four months?</td>
                                        <td>
                                        

                                                @if(!empty(isset($data->qua_and_exp_four_month)))
                                                    {{$data->qua_and_exp_four_month}}
                                                @endif
                                                
                                    </td>
                                    </tr>

                                    <tr>
                                        <td>Does your business operate in the
                                            Agricultural sector?</td>
                                        <td> 
                                        

                                                @if(!empty(isset($data->qua_and_exp_agriculture)))
                                                    {{$data->qua_and_exp_agriculture}}
                                                @endif
                                                
                                        </td>
                                    </tr>

                                </tbody>
                            </table>


                            <h2 class="fs-title"> SALARY FOR THE POSITION NEEDED </h2>

                            <table>
                                <tbody>

                                    <tr>
                                        <td> What annual salary will you be offering the visa applicant? Please indicate the net salary offered to the applicant NOT including superannuation
                                        </td>
                                        <td>  @if(isset($data->salary_offering_visa_applicant)) {{$data->salary_offering_visa_applicant}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Are there any non-monetary components of
                                            the nominee’s salary?
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->salary_non_monetary)))
                                                    {{$data->salary_non_monetary}}
                                                @endif

                                              

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> If Yes, please specify
                                        </td>
                                        <td>  @if(isset($data->salary_offering_visa_applicant_specify)) {{$data->salary_offering_visa_applicant_specify}} @endif </td>
                                    </tr>


                                    <tr>
                                        <td>How many years of contract are you willing
                                            to offer the visa applicant
                                        </td>
                                        <td>
                                            

                                                @if(!empty(isset($data->salary_year_of_contract)))
                                                    {{$data->salary_year_of_contract}}
                                                @endif
                                               

                                        </td>
                                    </tr>


                                    <!-- <tr>
                                        <td> What annual salary will you be offering the
                                            visa applicant? Please indicate the net salary
                                            offered to the applicant NOT including
                                            superannuation

                                        </td>
                                        <td> <input type="text" name="salary_annual" id="salary_annual" @if(isset($data->salary_annual)) value="{{$data->salary_annual}}" @endif/> </td>
                                    </tr> -->

                                    <tr>
                                        <td> How many hours per week will the applicant
                                            be working (please note that a minimum of
                                            38 hours per week is required)

                                        </td>
                                        <td>  @if(isset($data->salary_hours_per_week)) {{$data->salary_hours_per_week}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td>Are you able to indicate how you elaborated
                                            the annual salary rate you are willing to
                                            offer the visa applicant?

                                        </td>
                                        <td>  @if(isset($data->salary_eloborate_annual_salary)) {{$data->salary_eloborate_annual_salary}} @endif </td>
                                    </tr>

                                    <tr>
                                        <td> Do you already have an Australian citizen
                                            and/or a Permanent resident working in the
                                            same position offered to the visa applicant?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->salary_permanent_resident)))
                                                    {{$data->salary_permanent_resident}}
                                                @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>If yes, please indicate the annual salary of
                                            this person

                                        </td>
                                        <td> @if(isset($data->salary_permanent_resident_indicate)) {{$data->salary_permanent_resident_indicate}} @endif </td>
                                    </tr>


                                    <tr>
                                        <td> If you do have an Australian citizen and/or
                                            PR resident, are you willing to pay the visa
                                            applicant the same annual salary?
                                        </td>
                                        <td>
                                            
                                                @if(!empty(isset($data->salary_citizen)))
                                                    {{$data->salary_citizen}}
                                                @endif
                                                

                                        </td>
                                    </tr>

                                </tbody>
                            </table>


                            <h2 class="fs-title" style="margin-top: 10px;">NOMINATION – DOCS TO UPLOAD FOR THE POSITION NEEDED
                            </h2>


                            <table>
                                <tbody>

                                    <tr>
                                        <td> Job description/Duty Statement of the
                                            position to be offered to the applicant </td>
                                        <td> <input type="file" name="nomination_job_description" id="nomination_job_description">

                                            @if (array_key_exists('nomination_job_description', $docdataemployerform))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_job_description/'.$docdataemployerform['nomination_job_description'])  }}">
                                                @if(str_contains($docdataemployerform['nomination_job_description'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_job_description/'.$docdataemployerform['nomination_job_description'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>




                            <table>
                                <tbody>
                                    <tr>
                                                <td>   Employment contract to be offered to the
                                        applicant. Please note the contract must
                                        be:  <br> 1) Dated after the 28 days period of
                                                    the job ads 
                                                    <br>
                                                    2) Indicate the name and surname of
                                                    the applicant
                                                    <br>
                                                    3) Indicate "upon visa approval" for
                                                    the Start date
                                                    <br>
                                                    4) Indicate the gross annual salary rate
                                                    <br>
                                                    5) Indicate the super annuation in
                                                    addition to the gross annual salary
                                                    rate 
                                                    <br>
                                                    6) Indicate any other monetary
                                                    components as a separate figure to
                                                    the annual gross salary           
                                        </td>
                                        <td> <input type="file" name="nomination_period_of_job" id="nomination_period_of_job">

                                            @if (array_key_exists('nomination_period_of_job', $docdataemployerform))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_period_of_job/'.$docdataemployerform['nomination_period_of_job'])  }}">
                                                @if(str_contains($docdataemployerform['nomination_period_of_job'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_period_of_job/'.$docdataemployerform['nomination_period_of_job'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <!-- <tr>
                                        <td> 2) Indicate the name and surname of
                                            the applicant</td>
                                        <td> <input type="file" name="nomination_name_and_surname" id="nomination_name_and_surname">

                                            @if (array_key_exists('nomination_name_and_surname', $docdataemployerform))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_name_and_surname/'.$docdataemployerform['nomination_name_and_surname'])  }}">
                                                @if(str_contains($docdataemployerform['nomination_name_and_surname'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_name_and_surname/'.$docdataemployerform['nomination_name_and_surname'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 3) Indicate "upon visa approval" for
                                            the Start date</td>
                                        <td> <input type="file" name="nomination_start_date_doc" id="nomination_start_date_doc">


                                            @if (array_key_exists('nomination_start_date_doc', $docdataemployerform))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_start_date_doc/'.$docdataemployerform['nomination_start_date_doc'])  }}">
                                                @if(str_contains($docdataemployerform['nomination_start_date_doc'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_start_date_doc/'.$docdataemployerform['nomination_start_date_doc'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 4) Indicate the gross annual salary rate</td>
                                        <td> <input type="file" name="nomination_gross_annual_salary" id="nomination_gross_annual_salary">

                                            @if (array_key_exists('nomination_gross_annual_salary', $docdataemployerform))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_gross_annual_salary/'.$docdataemployerform['nomination_gross_annual_salary'])  }}">
                                                @if(str_contains($docdataemployerform['nomination_gross_annual_salary'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_gross_annual_salary/'.$docdataemployerform['nomination_gross_annual_salary'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 5) Indicate the super annuation in
                                            addition to the gross annual salary
                                            rate</td>
                                        <td> <input type="file" name="nomination_super_annuation" id="nomination_super_annuation">

                                            @if (array_key_exists('nomination_super_annuation', $docdataemployerform))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_super_annuation/'.$docdataemployerform['nomination_super_annuation'])  }}">
                                                @if(str_contains($docdataemployerform['nomination_super_annuation'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_super_annuation/'.$docdataemployerform['nomination_super_annuation'])  }}" />
                                                @endif
                                            </a>


                                            @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 6) Indicate any other monetary
                                            components as a separate figure to
                                            the annual gross salary</td>
                                        <td> <input type="file" name="nomination_separate_figure" id="nomination_separate_figure">

                                            @if (array_key_exists('nomination_separate_figure', $docdataemployerform))

                                            <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_separate_figure/'.$docdataemployerform['nomination_separate_figure'])  }}">
                                                @if(str_contains($docdataemployerform['nomination_separate_figure'] , '.pdf'))
                                                <img class="imgfile" src="{{asset('pdficon.png')}}" />
                                                @else
                                                <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_separate_figure/'.$docdataemployerform['nomination_separate_figure'])  }}" />
                                                @endif
                                            </a>


                                            @endif
                                        </td>
                                    </tr> -->



                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            <b> LABOUR MARKET TESTING </b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
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
                                                
                                               

                                                        @if(!empty(isset($data->labour_market_different)))
                                                            {{$data->labour_market_different}}
                                                        @endif
                                                        
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
                                                 @if(isset($data->labour_job_n1_people)) {{$data->labour_job_n1_people}} @endif
                                            
                                                
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Exact date when the job ad was put online </td>
                                                <td>  @if(isset($data->labour_job_n1_exact_date)) {{$data->labour_job_n1_exact_date}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td> Please confirm this job ad has been online
                                                    for at least 28 days or it will be by the time
                                                    it expires </td>
                                                <td> 
                                                

                                                        @if(!empty(isset($data->labour_job_n1_online)))
                                                        {{$data->labour_job_n1_online}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Please indicate the link to the job ad here
                                                </td>
                                                <td>  @if(isset($data->labour_job_n1_indicate)) {{$data->labour_job_n1_indicate}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td> Are you able to provide a payment receipt
                                                    for this job ad? If yes, please make sure to
                                                    attach this document
                                                </td>
                                                <td> 
                                                

                                                        @if(!empty(isset($data->labour_job_n1_payment)))
                                                        {{$data->labour_job_n1_payment}}
                                                        @endif
                                                          
                                            </td>
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
                                                <td>  @if(isset($data->labour_job_n2_people)) {{$data->labour_job_n2_people}} @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Exact date when the job ad was put online </td>
                                                <td>  @if(isset($data->labour_job_n2_exact_date)) {{$data->labour_job_n2_exact_date}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td> Please confirm this job ad has been online
                                                    for at least 28 days or it will be by the time
                                                    it expires </td>
                                                <td>
                                               

                                                        @if(!empty(isset($data->labour_job_n2_online)))
                                                        {{$data->labour_job_n2_online}}
                                                        @endif
                                                       
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Please indicate the link to the job ad here
                                                </td>
                                                <td>  @if(isset($data->labour_job_n2_indicate)) {{$data->labour_job_n2_indicate}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td> Are you able to provide a payment receipt
                                                    for this job ad? If yes, please make sure to
                                                    attach this document
                                                </td>
                                                <td> 
                                                

                                                        @if(!empty(isset($data->labour_job_n2_payment)))
                                                        {{$data->labour_job_n2_payment}}
                                                        @endif
                                                          
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
                                                <td>  @if(isset($data->labour_job_n3_people)) {{$data->labour_job_n3_people}} @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Exact date when the job ad was put online </td>
                                                <td>  @if(isset($data->labour_job_n3_exact_date)) {{$data->labour_job_n3_exact_date}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td> Please confirm this job ad has been online
                                                    for at least 28 days or it will be by the time
                                                    it expires </td>
                                                <td>
                                                

                                                        @if(!empty(isset($data->labour_job_n3_online)))
                                                        {{$data->labour_job_n3_online}}
                                                        @endif
                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Please indicate the link to the job ad here
                                                </td>
                                                <td>  @if(isset($data->labour_job_n3_indicate)) {{$data->labour_job_n3_indicate}} @endif </td>
                                            </tr>

                                            <tr>
                                                <td> Are you able to provide a payment receipt
                                                    for this job ad? If yes, please make sure to
                                                    attach this document
                                                </td>
                                                <td> 
                                                

                                                        @if(!empty(isset($data->labour_job_n3_payment)))
                                                        {{$data->labour_job_n3_payment}}
                                                        @endif
                                                          
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
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                             <b>JOB </b>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                        <h2 class="fs-title">For Job ad n.1 After the 28 day period, please indicate</h2> 
                            <table>
                                <tbody>
                                    <tr>
                                        <td> Number of people who applied for the
                                            position to be filled </td>
                                        <td> 
                               
                                    @if(!empty(isset($data->job_n2_people)))
                                        {{$data->job_n2_people}}
                                    @endif
                                    
                                    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Number of people who were shortlisted for
                                            the role </td>
                                        <td> 
                                       
                                                    @if(!empty(isset($data->job_n2_people_shortlisted)))
                                                    {{$data->job_n2_people_shortlisted}}
                                                    @endif
                                                 
                                    </td>
                                    </tr>

                                    <tr>
                                        <td> Reason why no one was suitable for the role
                                            and therefore you are offering the full-time
                                            position to the visa applicant </td>
                                        <td>  @if(isset($data->job_n2_people_suitable)) {{$data->job_n2_people_suitable}} @endif </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- <h2 class="fs-title">For Job ad n.3 please indicate</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Name of the Job ad platform n.2 </td>
                                        <td> 
                                            <input type="text" name="job_n3_people" id="job_n3_people" @if(isset($data->job_n3_people)) value="{{$data->job_n3_people}}" @endif/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Exact date when the job ad was put online </td>
                                        <td> <input type="date" name="job_n3_exact_date" id="job_n3_exact_date" @if(isset($data->job_n3_exact_date)) value="{{$data->job_n3_exact_date}}" @endif/> </td>
                                    </tr>

                                    <tr>
                                        <td> Please confirm this job ad has been online
                                            for at least 28 days or it will be by the time
                                            it expires </td>
                                        <td> <input type="text" name="job_n3_online" id="job_n3_online" @if(isset($data->job_n3_online)) value="{{$data->job_n3_online}}" @endif/> </td>
                                    </tr>

                                    <tr>
                                        <td> Please indicate the link to the job ad here
                                        </td>
                                        <td> <input type="text" name="job_n3_indicate" id="job_n3_indicate" @if(isset($data->job_n3_indicate)) value="{{$data->job_n3_indicate}}" @endif/> </td>
                                    </tr>

                                    <tr>
                                        <td> Are you able to provide a payment receipt
                                            for this job ad? If yes, please make sure to
                                            attach this document
                                        </td>
                                        <td> <input type="text" name="job_n3_payment" id="job_n3_payment" @if(isset($data->job_n3_payment)) value="{{$data->job_n3_payment}}" @endif/> </td>
                                    </tr>


                                </tbody>
                            </table> -->
                            <h2 class="fs-title">For Job ad n.2 After the 28 day period, please indicate
                                    </h2> 
                                    
                            <table>
                                <tbody>
                                    <tr>
                                        <td> Number of people who applied for the
                                            position to be filled </td>
                                        <td> 
                                
                                    @if(!empty(isset($data->job_n4_people)))
                                        {{$data->job_n4_people}}
                                    @endif
                                   
                                    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Number of people who were shortlisted for
                                            the role </td>
                                        <td> 
                                        
                                                    @if(!empty(isset($data->job_n4_people_shortlisted)))
                                                    {{$data->job_n4_people_shortlisted}}
                                                    @endif
                                                   
                                    </td>
                                    </tr>

                                    <tr>
                                        <td> Reason why no one was suitable for the role
                                            and therefore you are offering the full-time
                                            position to the visa applicant </td>
                                        <td> <input type="text" name="job_n4_people_suitable" id="job_n4_people_suitable" @if(isset($data->job_n4_people_suitable)) value="{{$data->job_n4_people_suitable}}" @endif/> </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2 class="fs-title">For Job ad n.3 AFTER THE 28 DAY PERIOD please indicate</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td> Number of people who applied for the
                                            position to be filled </td>
                                        <td> 
                                        
                                                @if(!empty(isset($data->job_n3_after_people)))
                                                {{$data->job_n3_after_people}}
                                                @endif
                                              
                                                                
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td> Number of people who were shortlisted for
                                                                        the role </td>
                                                                    <td> 
                                                                   
                                                @if(!empty(isset($data->job_n3_after_people_shortlisted)))
                                                {{$data->job_n3_after_people_shortlisted}}
                                                @endif
                                              
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Reason why no one was suitable for the role
                                            and therefore you are offering the full-time
                                            position to the visa applicant </td>
                                        <td>  @if(isset($data->job_n3_after_people_suitable)) {{$data->job_n3_after_people_suitable}} @endif </td>
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
    var counter = 0;
        jQuery('.completeformEmployer tr td:nth-child(1)').each(function (){
            counter++;
            
            jQuery(this).prepend(' ( '+counter+' ) ');
    })
    $('.alert-success').fadeIn().delay(5000).fadeOut();
  </script>
@endsection()