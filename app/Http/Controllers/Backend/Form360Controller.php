<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Form360Controller extends Controller
{
    public function index(){
        return view('backend.forms.form360.index');
    }

    public function save(Request $request){
        dd($request);
        $formid = DB::table('form360')->insertGetId([
            'user_id' => auth()->user()->id,
            'created_at' => date('m/d/Y h:i:s a'),
            'updated_at' => date('m/d/Y h:i:s a')
        ]);
        
        $fieldsets = $this->getFieldsetsData($formid,$request);

        DB::table('form360_matrix')->insert([
            $fieldsets['matrixdata']
        ]);

        DB::table('form360_personal')->insert([
            $fieldsets['personaldata']
        ]);

        DB::table('form360_first_education')->insert([
            $fieldsets['firsteducationdata']
        ]);

        DB::table('form360_high_education')->insert([
            $fieldsets['higheducationdata']
        ]);

        DB::table('form360_apprenticeship')->insert([
            $fieldsets['apprenticeship']
        ]);

        DB::table('form360_work_experience')->insert([
            $fieldsets['workExperienceData']
        ]);

        DB::table('form360_work_experience_intra_companies')->insert([
            $fieldsets['workExperienceIntraData']
        ]);

        DB::table('form360_countries_of_residence')->insert([
            $fieldsets['countryofresidenceData']
        ]);
        
        
        return redirect()->back()->with('success','Application Submitted Successfully!');
    }










    private function getFieldsetsData($form_id,$request){
        
        $matrixData =  [
            'form360_id' => $form_id,
            'matrix_name_and_surname' => $request->matrix_name_and_surname,
            'matrix_age' => $request->matrix_age,
            'matrix_aus_or_nz' => $request->matrix_aus_or_nz,
            'matrix_located' => $request->matrix_located,
            'matrix_visahold' => $request->matrix_visahold,
            'matrix_visaexpire' => $request->matrix_visaexpire,
            'matrix_occupation' => $request->matrix_occupation,
            'matrix_levelofenglish' => $request->matrix_levelofenglish,
            'matrix_yearofexperienceinausornz' => $request->matrix_yearofexperienceinausornz,
            'matrix_yearofexperienceoutsideausornz' => $request->matrix_yearofexperienceoutsideausornz,
            'matrix_highesteducationqualification' => $request->matrix_highesteducationqualification,
            'matrix_areyoucomingtoausornz' => $request->matrix_areyoucomingtoausornz,
            'matrix_enrolling' => $request->matrix_enrolling,
            'matrix_skillassessment' => $request->matrix_skillassessment,
            'matrix_indicateoccupation' => $request->matrix_indicateoccupation,
            'matrix_englishtest' => $request->matrix_englishtest,
            'matrix_indicatetesttaken' => $request->matrix_indicatetesttaken,
            'matrix_indicateincluded' => $request->matrix_indicateincluded,
            'matrix_familymember' => $request->matrix_familymember,
            'matrix_familymember' => $request->matrix_familymember,
            'matrix_familymember' => $request->matrix_familymember,
        ];

        $personalData = [
            'form360_id' => $form_id,
            'personal_name' => $request->personal_name,
            'personal_surname' => $request->personal_surname,
            'personal_name_surname' => $request->personal_name_surname,
            'personal_civil_status' => $request->personal_civil_status,
            'personal_dob' => $request->personal_dob,
            'personal_pob' => $request->personal_pob,
            'personal_gender' => $request->personal_gender,
            'personal_nationality' => $request->personal_nationality,
            'personal_other_nationality' => $request->personal_other_nationality,
            'personal_countryofresidence' => $request->personal_countryofresidence,
            'personal_addressusualcountry' => $request->personal_addressusualcountry,
            'personal_addressinausornz' => $request->personal_addressinausornz,
            'personal_contactnumberusuallycountry' => $request->personal_contactnumberusuallycountry,
            'personal_whatsappcontact' => $request->personal_whatsappcontact,
            'personal_contactnumberausornz' => $request->personal_contactnumberausornz,
            'personal_emailaddress' => $request->personal_emailaddress,
            'personal_aus_or_nz' => $request->personal_aus_or_nz,
            'personal_visahold' => $request->personal_visahold,
            'personal_visaexpire' => $request->personal_visaexpire,
            'personal_health_examination' => $request->personal_health_examination,
            'personal_health_examination_specifytaken' => $request->personal_health_examination_specifytaken,
            'personal_health_care' => $request->personal_health_care,
            'personal_health_care_specifytaken' => $request->personal_health_care_specifytaken,
            'personal_conviction' => $request->personal_conviction,
            'personal_conviction_specifytaken' => $request->personal_conviction_specifytaken,
            'personal_legal_action' => $request->personal_legal_action,
            'personal_legal_action_specifytaken' => $request->personal_legal_action_specifytaken,
            'personal_skills_assessment' => $request->personal_skills_assessment,
            'personal_skills_assessment_specifytaken' => $request->personal_skills_assessment_specifytaken,
            'personal_skills_assessment_application' => $request->personal_skills_assessment_application,
            'personal_skills_assessment_application_specifytaken' => $request->personal_skills_assessment_application_specifytaken,
            'personal_main_languages' => $request->personal_main_languages,
            'personal_languages_english_test' => $request->personal_languages_english_test,
            'personal_englishtest_specify' => $request->personal_englishtest_specify,
            'personal_englishtest_taken' => $request->personal_englishtest_taken,
            'personal_tertiary_institution' => $request->personal_tertiary_institution,
            'personal_course_duration' => $request->personal_course_duration,
            'personal_license_and_registration' => $request->personal_license_and_registration,
        ];

        $firstEducationData = [
            'form360_id' => $form_id,
            'first_education_qualification_obtained' => $request->first_education_qualification_obtained,
            'firstedu_background_nameofschool' => $request->firstedu_background_nameofschool,
            'firstedu_background_fulladdress' => $request->firstedu_background_fulladdress,
            'firstedu_background_datecoursesstarted' => $request->firstedu_background_datecoursesstarted,
            'firstedu_background_datecoursesended' => $request->firstedu_background_datecoursesended,
            'firstedu_background_yearobt' => $request->firstedu_background_yearobt,
            'firstedu_background_legal_duration' => $request->firstedu_background_legal_duration,
            'firstedu_background_qualification_obtained' => $request->firstedu_background_qualification_obtained,
            'firstedu_middle_nameofschool' => $request->firstedu_middle_nameofschool,
            'firstedu_middle_fulladdress' => $request->firstedu_middle_fulladdress,
            'firstedu_middle_datecoursesstarted' => $request->firstedu_middle_datecoursesstarted,
            'firstedu_middle_datecoursesended' => $request->firstedu_middle_datecoursesended,
            'firstedu_middle_yearobt' => $request->firstedu_middle_yearobt,
            'firstedu_middle_legal_duration' => $request->firstedu_middle_legal_duration,
            'firstedu_middle_qualification_obtained' => $request->firstedu_middle_qualification_obtained,
            'firstedu_high_nameofschool' => $request->firstedu_high_nameofschool,
            'firstedu_high_fulladdress' => $request->firstedu_high_fulladdress,
            'firstedu_high_datecoursesstarted' => $request->firstedu_high_datecoursesstarted,
            'firstedu_high_datecoursesended' => $request->firstedu_high_datecoursesended,
            'firstedu_high_yearobt' => $request->firstedu_high_yearobt,
            'firstedu_high_legal_duration' => $request->firstedu_high_legal_duration,
            'firstedu_high_qualification_obtained' => $request->firstedu_high_qualification_obtained,
        ];

        $highEducationData = [
            'form360_id' => $form_id,
            'higher_level_qualification1_nameofuniversity' => $request->higher_level_qualification1_nameofuniversity,
            'higher_level_vocational_level_qualification1' => $request->higher_level_vocational_level_qualification1,
            'higher_level__qualification1_education_provider' => $request->higher_level__qualification1_education_provider,
            'higher_level_qualifciation1_official_languages' => $request->higher_level_qualifciation1_official_languages,
            'higher_level_qualification1_english' => $request->higher_level_qualification1_english,
            'higher_level_qualification1_course_duration' => $request->higher_level_qualification1_course_duration,
            'higher_level_qualification1_course_started' => $request->higher_level_qualification1_course_started,
            'higher_level_qualification1_course_ended' => $request->higher_level_qualification1_course_ended,
            'higher_level_qualification1_full_part' => $request->higher_level_qualification1_full_part,
            'higher_level_qualification1_courseofstudy' => $request->higher_level_qualification1_courseofstudy,
            'higher_level_qualification1_country' => $request->higher_level_qualification1_country,
            'higher_level_qualification1_thesis_project' => $request->higher_level_qualification1_thesis_project,
            'higher_level_qualification1_thesis_project_if' => $request->higher_level_qualification1_thesis_project_if,
            
            'higher_level_qualification2_nameofuniversity' => $request->higher_level_qualification2_nameofuniversity,
            'higher_level_vocational_level_qualification2' => $request->higher_level_vocational_level_qualification2,
            'higher_level__qualification2_education_provider' => $request->higher_level__qualification2_education_provider,
            'higher_level_qualifciation2_official_languages' => $request->higher_level_qualifciation2_official_languages,
            'higher_level_qualification2_english' => $request->higher_level_qualification2_english,
            'higher_level_qualification2_course_duration' => $request->higher_level_qualification2_course_duration,
            'higher_level_qualification2_course_started' => $request->higher_level_qualification2_course_started,
            'higher_level_qualification2_course_ended' => $request->higher_level_qualification2_course_ended,
            'higher_level_qualification2_full_part' => $request->higher_level_qualification2_full_part,
            'higher_level_qualification2_courseofstudy' => $request->higher_level_qualification2_courseofstudy,
            'higher_level_qualification2_country' => $request->higher_level_qualification2_country,
            'higher_level_qualification2_thesis_project' => $request->higher_level_qualification2_thesis_project,
            'higher_level_qualification2_thesis_project_if' => $request->higher_level_qualification2_thesis_project_if,

            'higher_level_qualification3_nameofuniversity' => $request->higher_level_qualification3_nameofuniversity,
            'higher_level_vocational_level_qualification3' => $request->higher_level_vocational_level_qualification3,
            'higher_level__qualification3_education_provider' => $request->higher_level__qualification3_education_provider,
            'higher_level_qualifciation3_official_languages' => $request->higher_level_qualifciation3_official_languages,
            'higher_level_qualification3_english' => $request->higher_level_qualification3_english,
            'higher_level_qualification3_course_duration' => $request->higher_level_qualification3_course_duration,
            'higher_level_qualification3_course_started' => $request->higher_level_qualification3_course_started,
            'higher_level_qualification3_course_ended' => $request->higher_level_qualification3_course_ended,
            'higher_level_qualification3_full_part' => $request->higher_level_qualification3_full_part,
            'higher_level_qualification3_courseofstudy' => $request->higher_level_qualification3_courseofstudy,
            'higher_level_qualification3_country' => $request->higher_level_qualification3_country,
            'higher_level_qualification3_thesis_project' => $request->higher_level_qualification3_thesis_project,
            'higher_level_qualification3_thesis_project_if' => $request->higher_level_qualification3_thesis_project_if,
            
        ];

        $apprenticeshipData = [
            'form360_id' => $form_id,
            'apprenticeship_formal_studies' => $request->apprenticeship_formal_studies,
            'apprenticeship_formal_studies_specify' => $request->apprenticeship_formal_studies_specify,
            'apprenticeship_total_duration' => $request->apprenticeship_total_duration,
            'apprenticeship_completed' => $request->apprenticeship_completed,
            'apprenticeship_conclusion' => $request->apprenticeship_conclusion,
            'apprenticeship_company' => $request->apprenticeship_company,
            'apprenticeship_company_address' => $request->apprenticeship_company_address,
            'apprenticeship_visa_country' => $request->apprenticeship_visa_country,
            'apprenticeship_position' => $request->apprenticeship_position,
            'apprenticeship_start_date' => $request->apprenticeship_start_date,
            'apprenticeship_end_date' => $request->apprenticeship_end_date,
            'apprenticeship_fulltime_parttime' => $request->apprenticeship_fulltime_parttime,
            'apprenticeship_week_perhour' => $request->apprenticeship_week_perhour,
            'apprenticeship_duties_responsibities' => $request->apprenticeship_duties_responsibities,
            'apprenticeship_formal_qualification' => $request->apprenticeship_formal_qualification,
            'apprenticeship_payments' => $request->apprenticeship_payments,
            'apprenticeship_period' => $request->apprenticeship_period,
            'apprenticeship_issue_invoice' => $request->apprenticeship_issue_invoice,
            'apprenticeship_employment_collaboration' => $request->apprenticeship_employment_collaboration,
            'apprenticeship_payslips' => $request->apprenticeship_payslips,
            'apprenticeship_income' => $request->apprenticeship_income,
            'apprenticeship_bank_statement' => $request->apprenticeship_bank_statement,
            'apprenticeship_reference_letter' => $request->apprenticeship_reference_letter,
            'apprenticeship_name_surname' => $request->apprenticeship_name_surname,
            'apprenticeship_referee_contact' => $request->apprenticeship_referee_contact,
        ];

        $workExperienceData = [
            'form360_id' => $form_id,
            'workexp_current_employed' => $request->workexp_current_employed,
            'workexp_current_future_sponsor' => $request->workexp_current_future_sponsor,
            'workexp_current_recent_occupation' => $request->workexp_current_recent_occupation,
            'workexp_retired' => $request->workexp_retired,
            'workexp_if_retired' => $request->workexp_if_retired,
            'workexp_last_occupation' => $request->workexp_last_occupation,
            'workexp1_your_position' => $request->workexp1_your_position,
            'workexp1_your_position_type' => $request->workexp1_your_position_type,
            'workexp1_employer_name' => $request->workexp1_employer_name,
            'workexp1_business_country' => $request->workexp1_business_country,
            'workexp1_date_work_started' => $request->workexp1_date_work_started,
            'workexp1_date_work_ended' => $request->workexp1_date_work_ended,
            'workexp1_description_duties' => $request->workexp1_description_duties,
            'workexp1_nominated_position' => $request->workexp1_nominated_position,
            'workexp1_performed_in_aus_nz' => $request->workexp1_performed_in_aus_nz,
            'workexp1_visa_employer' => $request->workexp1_visa_employer,
            'workexp1_payslips_for_this_week' => $request->workexp1_payslips_for_this_week,
            'workexp1_contact_details_work_period' => $request->workexp1_contact_details_work_period,
            'workexp1_contact_details_work_period_indicate' => $request->workexp1_contact_details_work_period_indicate,
            'workexp1_contact_details_work_period_name' => $request->workexp1_contact_details_work_period_name,
            'workexp1_contact_details_work_period_position' => $request->workexp1_contact_details_work_period_position,
            'workexp1_contact_details_work_period_email' => $request->workexp1_contact_details_work_period_email,
            'workexp1_contact_details_work_period_phone' => $request->workexp1_contact_details_work_period_phone
        
        ];

        $workExperienceIntraData = [
            'form360_id' => $form_id,
            'workexpintracompany_current_employed' => $request->workexpintracompany_current_employed,
            'workexpintracompany_current_working' => $request->workexpintracompany_current_working,
            'workexpintracompany_current_recent_occupation' => $request->workexpintracompany_current_recent_occupation,
            'workexpintracompany_your_position' => $request->workexpintracompany_your_position,
            'workexpintracompany_your_position_type' => $request->workexpintracompany_your_position_type,
            'workexpintracompany_employer_name' => $request->workexpintracompany_employer_name,
            'workexpintracompany_business_country' => $request->workexpintracompany_business_country,
            'workexpintracompany_date_work_started' => $request->workexpintracompany_date_work_started,
            'workexpintracompany_date_work_ended' => $request->workexpintracompany_date_work_ended,
            'workexpintracompany_description_duties' => $request->workexpintracompany_description_duties,
            'workexpintracompany_nominated_position' => $request->workexpintracompany_nominated_position,
            'workexpintracompany_performed_in_aus_nz' => $request->workexpintracompany_performed_in_aus_nz,
            'workexpintracompany_visa_employer' => $request->workexpintracompany_visa_employer,
            'workexpintracompany_payslips_for_this_week' => $request->workexpintracompany_payslips_for_this_week,
            'workexpintracompany_contact_details_work_period' => $request->workexpintracompany_contact_details_work_period,
            'workexpintracompany_contact_details_work_period_indicate' => $request->workexpintracompany_contact_details_work_period_indicate,
            'workexpintracompany_contact_details_work_period_name' => $request->workexpintracompany_contact_details_work_period_name,
            'workexpintracompany_contact_details_work_period_position' => $request->workexpintracompany_contact_details_work_period_position,
            'workexpintracompany_contact_details_work_period_email' => $request->workexpintracompany_contact_details_work_period_email,
            'workexpintracompany_contact_details_work_period_phone' => $request->workexpintracompany_contact_details_work_period_phone,
            'workexpintracompany_aus_nz_name_of_company' => $request->workexpintracompany_aus_nz_name_of_company,
            'workexpintracompany_aus_nz_reg_number' => $request->workexpintracompany_aus_nz_reg_number,
            'workexpintracompany_aus_nz_address' => $request->workexpintracompany_aus_nz_address,
            'workexpintracompany_aus_nz_contact' => $request->workexpintracompany_aus_nz_contact,
            'workexpintracompany_aus_nz_name_surname' => $request->workexpintracompany_aus_nz_name_surname,
            'workexpintracompany_aus_nz_role' => $request->workexpintracompany_aus_nz_role,
            'workexpintracompany_aus_nz_sector' => $request->workexpintracompany_aus_nz_sector,
            'workexpintracompany_aus_nz_position' => $request->workexpintracompany_aus_nz_position,
            'workexpintracompany_aus_nz_responsibilities' => $request->workexpintracompany_aus_nz_responsibilities,
            'workexpintracompany_aus_nz_description' => $request->workexpintracompany_aus_nz_description,
            'workexpintracompany_aus_nz_planing_date' => $request->workexpintracompany_aus_nz_planing_date,
            'workexpintracompany_aus_nz_planing_date_max_6_month' => $request->workexpintracompany_aus_nz_planing_date_max_6_month,
            'workexpintracompany_aus_nz_necessary' => $request->workexpintracompany_aus_nz_necessary,
            'workexpintracompany_aus_nz_paidby' => $request->workexpintracompany_aus_nz_paidby,

        ];

        $visahistoryData =  [
            'form360_id' => $form_id,
            'currentvisa_in_aus_nz' => $request->currentvisa_in_aus_nz,
            'currentvisa_hold_aus_nz' => $request->currentvisa_hold_aus_nz,
            'currentvisa_typeofvisa' => $request->currentvisa_typeofvisa,
            'currentvisa_waiting_for_visa' => $request->currentvisa_waiting_for_visa,
            'currentvisa_typeofvisawaiting' => $request->currentvisa_typeofvisawaiting,
            'currentvisa_dateofexpiry' => $request->currentvisa_dateofexpiry,
            'currentvisa_ever_had_visa' => $request->currentvisa_ever_had_visa,
            'currentvisa_held_visa' => $request->currentvisa_held_visa,
            'currentvisa_indicate_countries' => $request->currentvisa_indicate_countries,
            'currentvisa_complied_with_visa_conditions' => $request->currentvisa_complied_with_visa_conditions
        ];

        $travelhistoryData =  [
            'form360_id' => $form_id,
            'travelhistory_last_ten_years' => $request->travelhistory_last_ten_years,
            'travelhistory_country1' => $request->travelhistory_country1,
            'travelhistory_datefrom1' => $request->travelhistory_datefrom1,
            'travelhistory_dateto1' => $request->travelhistory_dateto1,
            'travelhistory_purpose1' => $request->travelhistory_purpose1,
            'travelhistory_country4' => $request->travelhistory_country4,
            'travelhistory_datefrom2' => $request->travelhistory_datefrom2,
            'travelhistory_dateto2' => $request->travelhistory_dateto2,
            'currentvisa_indicate_countries' => $request->currentvisa_indicate_countries,
            'currentvisa_complied_with_visa_conditions' => $request->currentvisa_complied_with_visa_conditions
        ];

        $countryofresidenceData = [
            'form360_id' => $form_id,
            'countryofresidence_country1' => $request->countryofresidence_country1,
            'countryofresidence_fromwhen1' => $request->countryofresidence_fromwhen1,
            'countryofresidence_towhen1' => $request->countryofresidence_towhen1,
            'countryofresidence_address1' => $request->countryofresidence_address1,
            'countryofresidence_city1' => $request->countryofresidence_city1,
            'countryofresidence_postal1' => $request->countryofresidence_postal1,
            'countryofresidence_country2' => $request->countryofresidence_country2,
            'countryofresidence_fromwhen2' => $request->countryofresidence_fromwhen2,
            'countryofresidence_towhen2' => $request->countryofresidence_towhen2,
            'countryofresidence_address2' => $request->countryofresidence_address2,
            'countryofresidence_city2' => $request->countryofresidence_city2,
            'countryofresidence_postal2' => $request->countryofresidence_postal2,
            'countryofresidence_country3' => $request->countryofresidence_country3,
            'countryofresidence_fromwhen3' => $request->countryofresidence_fromwhen3,
            'countryofresidence_towhen3' => $request->countryofresidence_towhen3,
            'countryofresidence_address3' => $request->countryofresidence_address3,
            'countryofresidence_city3' => $request->countryofresidence_city3,
            'countryofresidence_postal3' => $request->countryofresidence_postal3,
            'countryofresidence_country4' => $request->countryofresidence_country4,
            'countryofresidence_fromwhen4' => $request->countryofresidence_fromwhen4,
            'countryofresidence_towhen4' => $request->countryofresidence_towhen4,
            'countryofresidence_address4' => $request->countryofresidence_address4,
            'countryofresidence_city4' => $request->countryofresidence_city4,
            'countryofresidence_postal4' => $request->countryofresidence_postal4,
            'countryofresidence_country5' => $request->countryofresidence_country5,
            'countryofresidence_fromwhen5' => $request->countryofresidence_fromwhen5,
            'countryofresidence_towhen5' => $request->countryofresidence_towhen5,
            'countryofresidence_address5' => $request->countryofresidence_address5,
            'countryofresidence_city5' => $request->countryofresidence_city5,
            'countryofresidence_postal5' => $request->countryofresidence_postal5,
        
        ];

        
        $fieldsetsData = [
            'matrixdata' => $matrixData ,
            'personaldata' => $personalData ,
            'firsteducationdata' => $firstEducationData,
            'higheducationdata' =>$highEducationData,
            'apprenticeship' =>$apprenticeshipData, 
            'workExperienceData' => $workExperienceData,
            'workExperienceIntraData' => $workExperienceIntraData,
            'visahistoryData' => $visahistoryData,
            'countryofresidenceData' => $countryofresidenceData
        ];
        return $fieldsetsData;

    }
}
