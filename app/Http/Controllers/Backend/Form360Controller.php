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
       // dd($request);
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
        $fieldsetsData = [
            'matrixdata' => $matrixData ,
            'personaldata' => $personalData ,
            'firsteducationdata' => $firstEducationData,
            'higheducationdata' =>$highEducationData 
        ];
        return $fieldsetsData;

    }
}
