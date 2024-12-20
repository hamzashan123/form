<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorrectionMail;
use App\Mail\NewFormSubmitted;
use App\Mail\CorrectionEmailAdmin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\ConsultantUser;
use App\Models\User;
use App\Models\Setting;

class Form360Controller extends Controller
{
    protected $settings;
    protected $siteEmail;

    public function __construct()
    {
        $this->settings = Setting::all();
        $this->siteEmail = $this->settings->where('key','site_email')->first()->value;
    }

    public function index(Request $request){

        if(!empty($_GET['userid']) && !empty($_GET['form_id'])){
            $userid = $_GET['userid'];
        }else{
            $userid = Auth::user()->id;
        }
        
        

            $data  =  DB::table('form360')
                        ->join('form360_matrix', 'form360.id', '=', 'form360_matrix.form360_id')
                        ->join('form360_personal', 'form360.id', '=', 'form360_personal.form360_id')
                        ->join('form360_first_education', 'form360.id', '=', 'form360_first_education.form360_id')
                        ->join('form360_high_education', 'form360.id', '=', 'form360_high_education.form360_id')
                        ->join('form360_apprenticeship', 'form360.id', '=', 'form360_apprenticeship.form360_id')
                        ->join('form360_work_experience', 'form360.id', '=', 'form360_work_experience.form360_id') 
                        ->join('form360_work_experience_intra_companies', 'form360.id', '=', 'form360_work_experience_intra_companies.form360_id')     
                        ->join('form360_workexperiencesection_a', 'form360.id', '=', 'form360_workexperiencesection_a.form360_id') 
                        ->join('form360_workexperiencesection_b', 'form360.id', '=', 'form360_workexperiencesection_b.form360_id') 
                        ->join('form360_workexperiencesection_c', 'form360.id', '=', 'form360_workexperiencesection_c.form360_id') 
                        ->join('form360_workexperiencesection_d', 'form360.id', '=', 'form360_workexperiencesection_d.form360_id') 
                        ->join('form360_workexperiencesection_e', 'form360.id', '=', 'form360_workexperiencesection_e.form360_id') 
                        ->join('form360_workexperiencesection_f', 'form360.id', '=', 'form360_workexperiencesection_f.form360_id') 
                        ->join('form360_workexperiencesection_g', 'form360.id', '=', 'form360_workexperiencesection_g.form360_id') 
                        ->join('form360_workexperiencesection_h', 'form360.id', '=', 'form360_workexperiencesection_h.form360_id') 
                        ->join('form360_workexperiencesection_i', 'form360.id', '=', 'form360_workexperiencesection_i.form360_id')
                        ->join('form360_workexperiencesection_j', 'form360.id', '=', 'form360_workexperiencesection_j.form360_id') 
                        ->join('form360_visa_history', 'form360.id', '=', 'form360_visa_history.form360_id')
                        ->join('form360_travel_history', 'form360.id', '=', 'form360_travel_history.form360_id')
                        ->join('form360_countries_of_residence', 'form360.id', '=', 'form360_countries_of_residence.form360_id')
                        ->join('form360_health_declaration', 'form360.id', '=', 'form360_health_declaration.form360_id')
                        ->join('form360_health_questions', 'form360.id', '=', 'form360_health_questions.form360_id')
                        ->join('form360_character', 'form360.id', '=', 'form360_character.form360_id')
                        ->join('form360_family_members', 'form360.id', '=', 'form360_family_members.form360_id')
                        ->join('form360_family_members_section_b', 'form360.id', '=', 'form360_family_members_section_b.form360_id')
                        
                        ->where('form360.user_id',$userid)->select(
                            'form360.*',
                            'form360_matrix.*',
                            'form360_personal.*',
                            'form360_first_education.*',
                            'form360_high_education.*',
                            'form360_apprenticeship.*',
                            'form360_work_experience.*',
                            'form360_work_experience_intra_companies.*',
                            'form360_workexperiencesection_a.*',
                            'form360_workexperiencesection_b.*',
                            'form360_workexperiencesection_c.*',
                            'form360_workexperiencesection_d.*',
                            'form360_workexperiencesection_e.*',
                            'form360_workexperiencesection_f.*',
                            'form360_workexperiencesection_g.*',
                            'form360_workexperiencesection_h.*',
                            'form360_workexperiencesection_i.*',
                            'form360_workexperiencesection_j.*',
                            'form360_visa_history.*',
                            'form360_travel_history.*',
                            'form360_countries_of_residence.*',
                            'form360_health_declaration.*',
                            'form360_health_questions.*',
                            'form360_character.*',
                            'form360_family_members.*',
                            'form360_family_members_section_b.*'
                            )->get();
         
        
        if(!empty($data[0])){
            $data = $data[0];
        }   
        if(!empty($data->user_id)){
           $data->documents  =  DB::table('form360_documents')->where(['user_id' => $data->user_id ])->get();
        }    
        
        $docdataForm360 = [];
      
        if(!empty($data->documents)){
            foreach ($data->documents as $key =>  $doc) {
                $docdataForm360[$doc->doc_field] = $doc->doc_name;
             
            }
        }
  
        
        // dd($data);
        if(!empty($_GET['complete']) && $_GET['complete'] == true ) {

            return view('backend.forms.form360.completeform',compact('data','docdataForm360'));
            
        }else{
        
            return view('backend.forms.form360.index',compact('data','docdataForm360'));
        }
        
               
        
        
    }

    public function save(Request $request)
    {
        //dd($request);

        $formExist = DB::table('form360')->where('user_id', Auth::user()->id)->first();
        //agar form ni ha 
        if(empty($formExist)){

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

            DB::table('form360_workexperiencesection_a')->insert([
                $fieldsets['workexperiencesectionA']
            ]);

            DB::table('form360_workexperiencesection_b')->insert([
                $fieldsets['workexperiencesectionB']
            ]);

            DB::table('form360_workexperiencesection_c')->insert([
                $fieldsets['workexperiencesectionC']
            ]);

            DB::table('form360_workexperiencesection_d')->insert([
                $fieldsets['workexperiencesectionD']
            ]);

            DB::table('form360_workexperiencesection_e')->insert([
                $fieldsets['workexperiencesectionE']
            ]);

            DB::table('form360_workexperiencesection_f')->insert([
                $fieldsets['workexperiencesectionF']
            ]);

            DB::table('form360_workexperiencesection_g')->insert([
                $fieldsets['workexperiencesectionG']
            ]);

            DB::table('form360_workexperiencesection_h')->insert([
                $fieldsets['workexperiencesectionH']
            ]);

            DB::table('form360_workexperiencesection_i')->insert([
                $fieldsets['workexperiencesectionI']
            ]);

            DB::table('form360_workexperiencesection_j')->insert([
                $fieldsets['workexperiencesectionJ']
            ]);

    
            DB::table('form360_visa_history')->insert([
                $fieldsets['visahistoryData']
            ]);
    
            DB::table('form360_travel_history')->insert([
                $fieldsets['travelhistoryData']
            ]);
    
            
            DB::table('form360_countries_of_residence')->insert([
                $fieldsets['countryofresidenceData']
            ]);
    
            DB::table('form360_health_declaration')->insert([
                $fieldsets['healthdeclaration']
            ]);
    
            DB::table('form360_health_questions')->insert([
                $fieldsets['healthQuestion']
            ]);
    
            DB::table('form360_character')->insert([
                $fieldsets['character']
            ]);
    
            DB::table('form360_family_members')->insert([
                $fieldsets['familymember']
            ]);

            DB::table('form360_family_members_section_b')->insert([
                $fieldsets['familymemberSectionB']
            ]);

            $this->saveDocuments($formid,$request);
            

            //if button is submiited
            if($request->formsubmit == 'FORMSUBMIT'){
                DB::table('form360')->where('user_id', Auth::user()->id)->update(['is_email_sent' => true]);

                $admindata = [
                    'admin' => true,
                    'consultant' => false,
                    'surname' => Auth::user()->surname,
                    'username' => Auth::user()->username,
                    'email' => Auth::user()->email,
                    'subject' => 'New Application Recieved',
                    'messagetype' => 'A new application has been recieved!'
                ];
                Mail::to($this->siteEmail)->send(new NewFormSubmitted($admindata));

                $userdata = [
                    'admin' => false,
                    'consultant' => false,
                    'surname' => Auth::user()->surname,
                    'username' => Auth::user()->username,
                    'email' => Auth::user()->email,
                    'subject' => 'Your application has been submitted ',
                    'messagetype' => ' 
                        Your application has been correctly submitted and received on the Auslegal Info/Docs system.
                        What will happen next
                        Australia Legal Admin Team will review the form and then assign it to an internal consultant.
                        Once the consultant is assigned, he/she will check the information and documents you have provided and will either:
                        ⦁	Inform you that the application will be lodged as no other information is needed
                        Or 
                        2) 
                        You will receive an email from the consultant with a request of more information and/or specific comments about the information and documents you will have provided on the online form.
                        '
                ];
                Mail::to(Auth::user()->email)->send(new NewFormSubmitted($userdata));

                 // if this user has any consultant then email also be sent to consultant
                 $consultants = ConsultantUser::where(['client_id'  => Auth::user()->id])->pluck('consultant_id');
                 if(count($consultants) > 0){
                     foreach($consultants as $consultant){
                         $consultantUser = DB::table('users')->where('id',$consultant)->first();
                         if($consultantUser !== null){
                            $consultantdata = [
                                'admin' => false,
                                'consultant' => true,
                                'surname' => $consultantUser->surname,
                                'username' => $consultantUser->username,
                                'email' => $consultantUser->email,
                                'messagetype' => 'A new application is submitted by your assigned user please check and make correction if you find any problem in the submitted application.'
                            ];
                            Mail::to($consultantUser->email)->send(new NewFormSubmitted($consultantdata));
                        }
                        
                     }
                 }
                
                return redirect()->back()->with('success', 'Application Submitted !');
            }// if button is saved
            else{
                 
            //send email after everytime client saves the form
                $saveEmail = [
                    'admin' => false,
                    'consultant' => false,
                    'surname' => Auth::user()->surname,
                    'username' => Auth::user()->username,
                    'email' => Auth::user()->email,
                    'subject' => 'Your application has been saved',
                    'messagetype' => ' 
                    Your application has been saved.You can login again and resume your application when needed.
                    Please note that until your form is not submitted for the first time, the application will not show as submitted. 
                    To submit your form you must get to the last page of the form and click on submit.'
                ];
                Mail::to(Auth::user()->email)->send(new NewFormSubmitted($saveEmail));    
                return redirect()->back()->with('success', 'Application Saved !');
            }
        }
        //agar form ha
        else{

            $existingForm =  DB::table('form360')->where('user_id', Auth::user()->id)->first();

            $fieldsets = $this->getFieldsetsData($existingForm->id,$request);
           
            DB::table('form360_matrix')->where('form360_id',$existingForm->id)->update(
                $fieldsets['matrixdata']
            );

            DB::table('form360_personal')->where('form360_id',$existingForm->id)->update(
                $fieldsets['personaldata']
            );

            DB::table('form360_first_education')->where('form360_id',$existingForm->id)->update(
                $fieldsets['firsteducationdata']
            );

            DB::table('form360_high_education')->where('form360_id',$existingForm->id)->update(
                $fieldsets['higheducationdata']
            );

            DB::table('form360_apprenticeship')->where('form360_id',$existingForm->id)->update(
                $fieldsets['apprenticeship']
            );

            DB::table('form360_work_experience')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workExperienceData']
            );

            DB::table('form360_work_experience_intra_companies')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workExperienceIntraData']
            );

            DB::table('form360_workexperiencesection_a')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionA']
            );

            DB::table('form360_workexperiencesection_b')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionB']
            );

            DB::table('form360_workexperiencesection_c')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionC']
            );

            DB::table('form360_workexperiencesection_d')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionD']
            );

            DB::table('form360_workexperiencesection_e')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionE']
            );

            DB::table('form360_workexperiencesection_f')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionF']
            );

            DB::table('form360_workexperiencesection_g')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionG']
            );

            DB::table('form360_workexperiencesection_h')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionH']
            );

            DB::table('form360_workexperiencesection_i')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionI']
            );

            DB::table('form360_workexperiencesection_j')->where('form360_id',$existingForm->id)->update(
                $fieldsets['workexperiencesectionJ']
            );

            DB::table('form360_visa_history')->where('form360_id',$existingForm->id)->update(
                $fieldsets['visahistoryData']
            );

            DB::table('form360_travel_history')->where('form360_id',$existingForm->id)->update(
                $fieldsets['travelhistoryData']
            );

            
            DB::table('form360_countries_of_residence')->where('form360_id',$existingForm->id)->update(
                $fieldsets['countryofresidenceData']
            );

            DB::table('form360_health_declaration')->where('form360_id',$existingForm->id)->update(
                $fieldsets['healthdeclaration']
            );

            DB::table('form360_health_questions')->where('form360_id',$existingForm->id)->update(
                $fieldsets['healthQuestion']
            );

            DB::table('form360_character')->where('form360_id',$existingForm->id)->update(
                $fieldsets['character']
            );

            DB::table('form360_family_members')->where('form360_id',$existingForm->id)->update(
                $fieldsets['familymember']
            );

            DB::table('form360_family_members_section_b')->where('form360_id',$existingForm->id)->update(
                $fieldsets['familymemberSectionB']
            );
            
            $this->saveDocuments($existingForm->id,$request);

             //if button is submiited
             if($request->formsubmit == 'FORMSUBMIT'){
                DB::table('form360')->where('user_id', Auth::user()->id)->update(['is_email_sent' => true]);
                
                $admindata = [
                    'admin' => true,
                    'consultant' => false,
                    'surname' => Auth::user()->surname,
                    'username' => Auth::user()->username,
                    'email' => Auth::user()->email,
                    'subject' => 'New Application Recieved',
                    'messagetype' => 'A new application has been recieved!'
                ];
                Mail::to($this->siteEmail)->send(new NewFormSubmitted($admindata));

                $userdata = [
                    'admin' => false,
                    'consultant' => false,
                    'surname' => Auth::user()->surname,
                    'username' => Auth::user()->username,
                    'email' => Auth::user()->email,
                    'subject' => 'Your application has been submitted ',
                    'messagetype' => ' 
                        Your application has been correctly submitted and received on the Auslegal Info/Docs system.
                        What will happen next
                        Australia Legal Admin Team will review the form and then assign it to an internal consultant.
                        Once the consultant is assigned, he/she will check the information and documents you have provided and will either:
                        ⦁	Inform you that the application will be lodged as no other information is needed
                        Or 
                        2) 
                        You will receive an email from the consultant with a request of more information and/or specific comments about the information and documents you will have provided on the online form.
                        '
                ];
                Mail::to(Auth::user()->email)->send(new NewFormSubmitted($userdata));

                 // if this user has any consultant then email also be sent to consultant
                 $consultants = ConsultantUser::where(['client_id'  => Auth::user()->id])->pluck('consultant_id');
                 if(count($consultants) > 0){
                     foreach($consultants as $consultant){
                         $consultantUser = DB::table('users')->where('id',$consultant)->first();
                         if($consultantUser !== null){
                            $consultantdata = [
                                'admin' => false,
                                'consultant' => true,
                                'surname' => $consultantUser->surname,
                                'username' => $consultantUser->username,
                                'email' => $consultantUser->email,
                                'messagetype' => 'A new application is submitted by your assigned user please check and make correction if you find any problem in the submitted application.'
                            ];
                            Mail::to($consultantUser->email)->send(new NewFormSubmitted($consultantdata));
                        }   
                        
                     }
                 }

                return redirect()->back()->with('success', 'Application Submitted !');
            }// if button is saved
            else{
                 //send email after everytime client saves the form
             $saveEmail = [
                'admin' => false,
                'consultant' => false,
                'surname' => Auth::user()->surname,
                'username' => Auth::user()->username,
                'email' => Auth::user()->email,
                'subject' => 'Your application has been saved',
                'messagetype' => ' 
                Your application has been saved.You can login again and resume your application when needed.
                Please note that until your form is not submitted for the first time, the application will not show as submitted. 
                To submit your form you must get to the last page of the form and click on submit.'
            ];
            Mail::to(Auth::user()->email)->send(new NewFormSubmitted($saveEmail));

                return redirect()->back()->with('success', 'Application Saved !');
            }
            
        }
    }


    private function saveDocuments($form_id,$request){
        $documents = [
            //personal docs
         'personal_passport_biodata_page' => $request->file('personal_passport_biodata_page'),
         'personal_id_card_driving_license' => $request->file('personal_id_card_driving_license'),
         'personal_update_resume' => $request->file('personal_update_resume'),

         'personal_skills_assessment_outcome_letter' => $request->file('personal_skills_assessment_outcome_letter'),
         'personal_languages_english_test_document' => $request->file('personal_languages_english_test_document'),
         'personal_license_and_registration_document' => $request->file('personal_license_and_registration_document'),

         'higher_level_qualification1_diploma_award' => $request->file('higher_level_qualification1_diploma_award'),
         'higher_level_qualification1_listofexams' => $request->file('higher_level_qualification1_listofexams'),
         'higher_level_qualification1_diploma_supplement' => $request->file('higher_level_qualification1_diploma_supplement'),

         'higher_level_qualification2_diploma_award' => $request->file('higher_level_qualification2_diploma_award'),
         'higher_level_qualification2_listofexams' => $request->file('higher_level_qualification2_listofexams'),
         'higher_level_qualification2_diploma_supplement' => $request->file('higher_level_qualification2_diploma_supplement'),


         'higher_level_qualification3_diploma_award' => $request->file('higher_level_qualification3_diploma_award'),
         'higher_level_qualification3_listofexams' => $request->file('higher_level_qualification3_listofexams'),
         'higher_level_qualification3_diploma_supplement' => $request->file('higher_level_qualification3_diploma_supplement'),



         
         'apprenticeship_contract_doc' => $request->file('apprenticeship_contract_doc'),
         'apprenticeship_completion_letter' => $request->file('apprenticeship_completion_letter'),
         'apprenticeship_payslip_current_year' => $request->file('apprenticeship_payslip_current_year'),
         'apprenticeship_previous_year' => $request->file('apprenticeship_previous_year'),
         'apprenticeship_third_year' => $request->file('apprenticeship_third_year'),
         'apprenticeship_tax_return' => $request->file('apprenticeship_tax_return'),
         'apprenticeship_social_security' => $request->file('apprenticeship_social_security'),

         'workexp1_employment_contract' => $request->file('workexp1_employment_contract'),
         'workexp1_employment_reference_letter' => $request->file('workexp1_employment_reference_letter'),
         'workexp1_current_year_of_experience' => $request->file('workexp1_current_year_of_experience'),
         'workexp1_previous_year_of_experience1' => $request->file('workexp1_previous_year_of_experience1'),
         'workexp1_previous_year_of_experience2' => $request->file('workexp1_previous_year_of_experience2'),
         'workexp1_previous_year_of_experience3' => $request->file('workexp1_previous_year_of_experience3'),

         'workexp2_employment_contract' => $request->file('workexp2_employment_contract'),
         'workexp2_employment_reference_letter' => $request->file('workexp2_employment_reference_letter'),
         'workexp2_current_year_of_experience' => $request->file('workexp2_current_year_of_experience'),
         'workexp2_previous_year_of_experience1' => $request->file('workexp2_previous_year_of_experience1'),
         'workexp2_previous_year_of_experience2' => $request->file('workexp2_previous_year_of_experience2'),
         'workexp2_previous_year_of_experience3' => $request->file('workexp2_previous_year_of_experience3'),

         'workexp3_employment_contract' => $request->file('workexp3_employment_contract'),
         'workexp3_employment_reference_letter' => $request->file('workexp3_employment_reference_letter'),
         'workexp3_current_year_of_experience' => $request->file('workexp3_current_year_of_experience'),
         'workexp3_previous_year_of_experience1' => $request->file('workexp3_previous_year_of_experience1'),
         'workexp3_previous_year_of_experience2' => $request->file('workexp3_previous_year_of_experience2'),
         'workexp3_previous_year_of_experience3' => $request->file('workexp3_previous_year_of_experience3'),

         'workexp1_payg_one' => $request->file('workexp1_payg_one'),
         'workexp1_payg_two' => $request->file('workexp1_payg_two'),
         'workexp1_payg_three' => $request->file('workexp1_payg_three'),
         'workexp1_payg_four' => $request->file('workexp1_payg_four'),

         'workexp2_payg_one' => $request->file('workexp2_payg_one'),
         'workexp2_payg_two' => $request->file('workexp2_payg_two'),
         'workexp2_payg_three' => $request->file('workexp2_payg_three'),
         'workexp2_payg_four' => $request->file('workexp2_payg_four'),

         'workexp3_payg_one' => $request->file('workexp3_payg_one'),
         'workexp3_payg_two' => $request->file('workexp3_payg_two'),
         'workexp3_payg_three' => $request->file('workexp3_payg_three'),
         'workexp3_payg_four' => $request->file('workexp3_payg_four'),   

         'workexp1_income_tax_return1' => $request->file('workexp1_income_tax_return1'),
         'workexp1_income_tax_return2' => $request->file('workexp1_income_tax_return2'),
         'workexp1_income_tax_return2_1' => $request->file('workexp1_income_tax_return2_1'),
         'workexp1_relevant_doc' => $request->file('workexp1_relevant_doc'),

         'workexp1_tabella_estratto' => $request->file('workexp1_tabella_estratto'),

         'workexp2_income_tax_return1' => $request->file('workexp2_income_tax_return1'),
         'workexp2_income_tax_return2' => $request->file('workexp2_income_tax_return2'),
         'workexp2_income_tax_return2_1' => $request->file('workexp2_income_tax_return2_1'),
         'workexp2_relevant_doc' => $request->file('workexp2_relevant_doc'),
         'workexp2_tabella_estratto' => $request->file('workexp2_tabella_estratto'),   
         
         'workexp3_income_tax_return1' => $request->file('workexp3_income_tax_return1'),
         'workexp3_income_tax_return2' => $request->file('workexp3_income_tax_return2'),
         'workexp3_income_tax_return2_1' => $request->file('workexp3_income_tax_return2_1'),
         'workexp3_relevant_doc' => $request->file('workexp3_relevant_doc'),
         'workexp3_tabella_estratto' => $request->file('workexp3_tabella_estratto'),  

         'workexpintracompany_employment_contract' => $request->file('workexpintracompany_employment_contract'),
         'workexpintracompany_current_recent_payslip' => $request->file('workexpintracompany_current_recent_payslip'),
         'workexpintracompany_income_tax_return' => $request->file('workexpintracompany_income_tax_return'),
         'workexpintracompany_social_security' => $request->file('workexpintracompany_social_security'),
         'workexpintracompany_perform_in_aus_nz' => $request->file('workexpintracompany_perform_in_aus_nz'),
         'workexperience_employment_contract_section_b' => $request->file('workexperience_employment_contract_section_b'),
         'workexperience_recent_payslip_section_b' => $request->file('workexperience_recent_payslip_section_b'),  
         'workexperience_work_performed_section_e' => $request->file('workexperience_work_performed_section_e'), 
         'workexperience_invitation_letter_section_f' => $request->file('workexperience_invitation_letter_section_f'),
         'workexperience_contract_university_section_f' => $request->file('workexperience_contract_university_section_f'),
         'workexperience_anyother_document_section_f' => $request->file('workexperience_anyother_document_section_f'),
         'workexperience_completion_letter_section_h' => $request->file('workexperience_completion_letter_section_h'),
         'workexperience_exams_list_section_h' => $request->file('workexperience_exams_list_section_h'),
         'workexperience_completion_letter2_section_h' => $request->file('workexperience_completion_letter2_section_h'),
         'workexperience_exams_list2_section_h' => $request->file('workexperience_exams_list2_section_h'),

         'currentvisa_aus_naz_if_applicable' => $request->file('currentvisa_aus_naz_if_applicable'),
         'previous_visa_if_applicable1' => $request->file('previous_visa_if_applicable1'),
         'previous_visa_if_applicable2' => $request->file('previous_visa_if_applicable2'),


         //family members doc
         'family_member_partner_passport' => $request->file('family_member_partner_passport'),
         'family_member_partner_passport_photo' => $request->file('family_member_partner_passport_photo'),
         'family_member_partner_driving_license' => $request->file('family_member_partner_driving_license'),
         'family_member_partner_recent_visa' => $request->file('family_member_partner_recent_visa'),
         'family_member_partner_ielts' => $request->file('family_member_partner_ielts'),
         'family_member_partner_cv_resume' => $request->file('family_member_partner_cv_resume'),
         'family_member_partner_reg_certificate' => $request->file('family_member_partner_reg_certificate'),
         'family_member_partner_join_bank_account' => $request->file('family_member_partner_join_bank_account'),
         'family_member_partner_rental_agreement' => $request->file('family_member_partner_rental_agreement'),
         'family_member_partner_utility_bills' => $request->file('family_member_partner_utility_bills'),
         'family_member_partner_utility_bills2' => $request->file('family_member_partner_utility_bills2'),
         'family_member_partner_utility_bills3' => $request->file('family_member_partner_utility_bills3'),
         'family_member_child1_passport_photo ' => $request->file('family_member_child1_passport_photo '),   

         'family_member_child1_passport' => $request->file('family_member_child1_passport'),
         'family_member_child1_passport_photo' => $request->file('family_member_child1_passport_photo'),
         'family_member_child1_driving_license' => $request->file('family_member_child1_driving_license'),
         'family_member_child1_recent_visa' => $request->file('family_member_child1_recent_visa'),
         'family_member_child1_ielts' => $request->file('family_member_child1_ielts'),   
         'family_member_child1_cv_resume' => $request->file('family_member_child1_cv_resume'),
         'family_member_child1_birth_certificate' => $request->file('family_member_child1_birth_certificate'),

         'family_member_child2_passport' => $request->file('family_member_child2_passport'),
         'family_member_child2_passport_photo' => $request->file('family_member_child2_passport_photo'),
         'family_member_child2_driving_license' => $request->file('family_member_child2_driving_license'),
         'family_member_child2_recent_visa' => $request->file('family_member_child2_recent_visa'),
         'family_member_child2_ielts' => $request->file('family_member_child2_ielts'),   
         'family_member_child2_cv_resume' => $request->file('family_member_child2_cv_resume'),
         'family_member_child2_birth_certificate' => $request->file('family_member_child2_birth_certificate'),

         'family_member_child3_passport' => $request->file('family_member_child3_passport'),
         'family_member_child3_passport_photo' => $request->file('family_member_child3_passport_photo'),
         'family_member_child3_driving_license' => $request->file('family_member_child3_driving_license'),
         'family_member_child3_recent_visa' => $request->file('family_member_child3_recent_visa'),
         'family_member_child3_ielts' => $request->file('family_member_child3_ielts'),   
         'family_member_child3_cv_resume' => $request->file('family_member_child3_cv_resume'),
         'family_member_child3_birth_certificate' => $request->file('family_member_child3_birth_certificate'),
        
            //education docs
        //  'edu_info_university_diploma' => $request->file('edu_info_university_diploma'),
        //     //work docs
        //  'work_agreement' => $request->file('work_agreement'),
        ];

        foreach($documents as $key =>  $doc){
                   
            if($key){
                $uploadedFile = $doc;
                $filetype = '';
                $filename = ''; 
                if(!empty($doc)){
                    $fileMimeType = $doc->getMimeType();
                     
                    if($fileMimeType == 'image/png' || $fileMimeType == 'image/jpg' || $fileMimeType == 'image/jpeg' || $fileMimeType == 'image/eps' || $fileMimeType == 'image/gif'){
              
                        $filetype = 'png';
                    }
                    if($fileMimeType == 'application/pdf' ){
                        
                        $filetype = 'pdf';
                    }
                }
                 
                 
                if(!empty($uploadedFile)){
                    $filename = time().$uploadedFile->getClientOriginalName();
                    Storage::disk('local')->put('/public/form360/'.Auth::user()->id.'/'.$key.'/' . $filename, File::get($uploadedFile));
                    
                    $docData = [
                        'user_id' => Auth::user()->id,
                        'form360_id' => $form_id,
                        'doc_name' => $filename,
                        'doc_field' => $key,
                        'file_type' => $filetype,
                  ];
                  $documetExist = DB::table('form360_documents')
                  ->where([
                      'user_id' => Auth::user()->id,
                      'form360_id' => $form_id,
                      'doc_field' => $key,
                  ])
                  ->exists();
                  if($documetExist == true){
                      $documetExist = DB::table('form360_documents')
                      ->where([
                          'user_id' => Auth::user()->id,
                          'form360_id' => $form_id,
                          'doc_field' => $key,
                      ])
                      ->update($docData);
                  }else{
                      $documetUploaded = DB::table('form360_documents')->insert($docData);
                  }
                }  
                 

                  
                    
              
            }
             
          
          
      }
       // dd($request);
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
            'personal_city_of_born' => $request->personal_city_of_born,
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
            'workexp1_contact_details_work_period_phone' => $request->workexp1_contact_details_work_period_phone,
            // work exp 2
            'workexp2_your_position' => $request->workexp2_your_position,
            'workexp2_your_position_type' => $request->workexp2_your_position_type,
            'workexp2_employer_name' => $request->workexp2_employer_name,
            'workexp2_business_country' => $request->workexp2_business_country,
            'workexp2_date_work_started' => $request->workexp2_date_work_started,
            'workexp2_date_work_ended' => $request->workexp2_date_work_ended,
            'workexp2_description_duties' => $request->workexp2_description_duties,
            'workexp2_nominated_position' => $request->workexp2_nominated_position,
            'workexp2_performed_in_aus_nz' => $request->workexp2_performed_in_aus_nz,
            'workexp2_visa_employer' => $request->workexp2_visa_employer,
            'workexp2_payslips_for_this_week' => $request->workexp2_payslips_for_this_week,
            'workexp2_contact_details_work_period' => $request->workexp2_contact_details_work_period,
            'workexp2_contact_details_work_period_indicate' => $request->workexp2_contact_details_work_period_indicate,
            'workexp2_contact_details_work_period_name' => $request->workexp2_contact_details_work_period_name,
            'workexp2_contact_details_work_period_position' => $request->workexp2_contact_details_work_period_position,
            'workexp2_contact_details_work_period_email' => $request->workexp2_contact_details_work_period_email,
            'workexp2_contact_details_work_period_phone' => $request->workexp2_contact_details_work_period_phone,

            // work exp 3
            'workexp3_your_position' => $request->workexp3_your_position,
            'workexp3_your_position_type' => $request->workexp3_your_position_type,
            'workexp3_employer_name' => $request->workexp3_employer_name,
            'workexp3_business_country' => $request->workexp3_business_country,
            'workexp3_date_work_started' => $request->workexp3_date_work_started,
            'workexp3_date_work_ended' => $request->workexp3_date_work_ended,
            'workexp3_description_duties' => $request->workexp3_description_duties,
            'workexp3_nominated_position' => $request->workexp3_nominated_position,
            'workexp3_performed_in_aus_nz' => $request->workexp3_performed_in_aus_nz,
            'workexp3_visa_employer' => $request->workexp3_visa_employer,
            'workexp3_payslips_for_this_week' => $request->workexp3_payslips_for_this_week,
            'workexp3_contact_details_work_period' => $request->workexp3_contact_details_work_period,
            'workexp3_contact_details_work_period_indicate' => $request->workexp3_contact_details_work_period_indicate,
            'workexp3_contact_details_work_period_name' => $request->workexp3_contact_details_work_period_name,
            'workexp3_contact_details_work_period_position' => $request->workexp3_contact_details_work_period_position,
            'workexp3_contact_details_work_period_email' => $request->workexp3_contact_details_work_period_email,
            'workexp3_contact_details_work_period_phone' => $request->workexp3_contact_details_work_period_phone,
        
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
            'workexpintracompany_aus_nz_address_company' => $request->workexpintracompany_aus_nz_address_company,
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

        $workexperiencesectionA = [
            'form360_id' => $form_id,
            'workexperience_sponsor_section_a' => $request->workexperience_sponsor_section_a,
            'workexperience_position_section_a' => $request->workexperience_position_section_a,
            'workexperience_duties_section_a' => $request->workexperience_duties_section_a,
            'workexperience_business_section_a' => $request->workexperience_business_section_a,
            'workexperience_name_of_the_business_section_a' => $request->workexperience_name_of_the_business_section_a,
            'workexperience_address_of_the_business_section_a' => $request->workexperience_address_of_the_business_section_a,
            'workexperience_abn_of_the_business_section_a' => $request->workexperience_abn_of_the_business_section_a,
            'workexperience_sponsorship_visa_section_a' => $request->workexperience_sponsorship_visa_section_a,
            'workexperience_planning_sponsor_section_a' => $request->workexperience_planning_sponsor_section_a,
            'workexperience_name_and_surname_section_a' => $request->workexperience_name_and_surname_section_a,
            'workexperience_position_of_the_person_section_a' => $request->workexperience_position_of_the_person_section_a,
            'workexperience_email_of_the_person_section_a' => $request->workexperience_email_of_the_person_section_a,
            'workexperience_tel_of_the_person_section_a' => $request->workexperience_tel_of_the_person_section_a,
            'workexperience_annual_gross_section_a' => $request->workexperience_annual_gross_section_a,
            'workexperience_frequently_paid_section_a' => $request->workexperience_frequently_paid_section_a,
        ];

        $workexperiencesectionB = [
            'form360_id' => $form_id,
            'workexperience_overseas_offshor_section_b' => $request->workexperience_overseas_offshor_section_b,
            'workexperience_occuption_overseas_offshor_section_b' => $request->workexperience_occuption_overseas_offshor_section_b,
            'workexperience_your_position_section_b' => $request->workexperience_your_position_section_b,
            'workexperience_position_type_section_b' => $request->workexperience_position_type_section_b,
            'workexperience_employer_name_section_b' => $request->workexperience_employer_name_section_b,
            'workexperience_business_country_section_b' => $request->workexperience_business_country_section_b,
            'workexperience_business_address_section_b' => $request->workexperience_business_address_section_b,
            'workexperience_date_work_started_section_b' => $request->workexperience_date_work_started_section_b,
            'workexperience_date_work_ended_section_b' => $request->workexperience_date_work_ended_section_b,
            'workexperience_duties_section_b' => $request->workexperience_duties_section_b,
            'workexperience_planning_to_work_section_b' => $request->workexperience_planning_to_work_section_b,
            'workexperience_name_and_surname_section_b' => $request->workexperience_name_and_surname_section_b,
            'workexperience_position_of_the_person_section_b' => $request->workexperience_position_of_the_person_section_b,
            'workexperience_email_of_the_person_section_b' => $request->workexperience_email_of_the_person_section_b,
            'workexperience_phone_of_the_person_section_b' => $request->workexperience_phone_of_the_person_section_b,
            'workexperience_current_annual_gross_salary_section_b' => $request->workexperience_current_annual_gross_salary_section_b,
        ];

        $workexperiencesectionC = [
            'form360_id' => $form_id,
            "workexperience_current_holder_section_c" => $request->workexperience_current_holder_section_c,
            "workexperience_same_employer_section_c" => $request->workexperience_same_employer_section_c,
            "workexperience_your_position_section_c" => $request->workexperience_your_position_section_c,
            "workexperience_position_type_section_c" => $request->workexperience_position_type_section_c,
            "workexperience_employer_name_section_c" => $request->workexperience_employer_name_section_c,
            "workexperience_business_located_section_c" => $request->workexperience_business_located_section_c,
            "workexperience_address_of_the_business_section_c" => $request->workexperience_address_of_the_business_section_c,
            "workexperience_date_started_section_c" => $request->workexperience_date_started_section_c,
            "workexperience_date_ended_section_c" => $request->workexperience_date_ended_section_c,
            "workexperience_description_duties_section_c" => $request->workexperience_description_duties_section_c,
            "workexperience_name_surname_section_c" => $request->workexperience_name_surname_section_c,
            "workexperience_position_of_the_person_section_c" => $request->workexperience_position_of_the_person_section_c,
            "workexperience_email_of_the_person_section_c" => $request->workexperience_email_of_the_person_section_c,
            "workexperience_phone_of_the_person_section_c" => $request->workexperience_phone_of_the_person_section_c,
            "workexperience_indicate_current_annual_gross_section_c" => $request->workexperience_indicate_current_annual_gross_section_c
        ];

        $workexperiencesectionD = [
            'form360_id' => $form_id,
            "workexperience_current_holder_section_d" =>  $request->workexperience_current_holder_section_d,
            "workexperience_currently_sponsor_section_d" => $request->workexperience_currently_sponsor_section_d,
            "workexperience_current_sponsor_section_d" => $request->workexperience_current_sponsor_section_d,
            "workexperience_current_sponsored_occupation_section_d" => $request->workexperience_current_sponsored_occupation_section_d,
            "workexperience_skill_assessment_section_d" => $request->workexperience_skill_assessment_section_d,
            "workexperience_what_occupation_section_d" => $request->workexperience_what_occupation_section_d,
            "workexperience_alternative_english_section_d" => $request->workexperience_alternative_english_section_d,
            "workexperience_indicate_position_section_d" => $request->workexperience_indicate_position_section_d,
            "workexperience_position_type_section_d" => $request->workexperience_position_type_section_d,
            "workexperience_business_country_section_d" => $request->workexperience_business_country_section_d,
            "workexperience_country_address_section_d" => $request->workexperience_country_address_section_d,
            "workexperience_date_start_section_d" => $request->workexperience_date_start_section_d,
            "workexperience_5_duties_section_d" => $request->workexperience_5_duties_section_d,
            "workexperience_name_of_the_contact_person_section_d" => $request->workexperience_name_of_the_contact_person_section_d,
            "workexperience_surname_of_the_contact_person_section_d" => $request->workexperience_surname_of_the_contact_person_section_d,
            "workexperience_position_of_the_person_section_d" => $request->workexperience_position_of_the_person_section_d,
            "workexperience_email_of_the_person_section_d" => $request->workexperience_email_of_the_person_section_d,
            "workexperience_phone_of_the_person_section_d" => $request->workexperience_phone_of_the_person_section_d,
        ];

        $workexperiencesectionE = [
            'form360_id' => $form_id,
            "workexperience_company_name_section_e" => $request->workexperience_company_name_section_e,
            "workexperience_registration_number_section_e" => $request->workexperience_registration_number_section_e,
            "workexperience_company_address_section_e" => $request->workexperience_company_address_section_e,
            "workexperience_contact_number_section_e" => $request->workexperience_contact_number_section_e,
            "workexperience_contact_person_name_surname_section_e" => $request->workexperience_contact_person_name_surname_section_e,
            "workexperience_contact_person_role_section_e" => $request->workexperience_contact_person_role_section_e,
            "workexperience_company_sector_section_e" => $request->workexperience_company_sector_section_e,
            "workexperience_position_section_e" => $request->workexperience_position_section_e,
            "workexperience_responsibilities_section_e" => $request->workexperience_responsibilities_section_e,
            "workexperience_description_section_e" => $request->workexperience_description_section_e,
            "workexperience_date_planing_section_e" => $request->workexperience_date_planing_section_e,
            "workexperience_date_planing_leave_section_e" => $request->workexperience_date_planing_leave_section_e,
            "workexperience_carry_out_section_e" => $request->workexperience_carry_out_section_e,
            "workexperience_receive_payment_section_e" => $request->workexperience_receive_payment_section_e,
        ];

        $workexperiencesectionF = [
            'form360_id' => $form_id,
            "workexperience_duration_stay_section_f" => $request->workexperience_duration_stay_section_f,
            "workexperience_organization_name_section_f" => $request->workexperience_organization_name_section_f,
            "workexperience_website_section_f" => $request->workexperience_website_section_f,
            "workexperience_abn_section_f" => $request->workexperience_abn_section_f,
            "workexperience_address_organization_section_f" => $request->workexperience_address_organization_section_f,
            "workexperience_country_section_f" => $request->workexperience_country_section_f,
            "workexperience_contact_surname_section_f" => $request->workexperience_contact_surname_section_f,
            "workexperience_contact_name_section_f" => $request->workexperience_contact_name_section_f,
            "workexperience_position_section_f" => $request->workexperience_position_section_f,
            "workexperience_business_section_f" => $request->workexperience_business_section_f,
            "workexperience_mobile_section_f" => $request->workexperience_mobile_section_f,
            "workexperience_email_section_f" => $request->workexperience_email_section_f,
            "workexperience_position_activity_section_f" => $request->workexperience_position_activity_section_f,
            "workexperience_applicant_undertaking_section_f" => $request->workexperience_applicant_undertaking_section_f,
            "workexperience_visa_applicant_section_f" => $request->workexperience_visa_applicant_section_f,
            "workexperience_duties_activities_section_f" => $request->workexperience_duties_activities_section_f,
            "workexperience_date_commence_section_f" => $request->workexperience_date_commence_section_f,
            "workexperience_date_end_section_f" => $request->workexperience_date_end_section_f,
            "workexperience_street_addresses_section_f" => $request->workexperience_street_addresses_section_f,
            "workexperience_will_paid_undertaking_section_f" => $request->workexperience_will_paid_undertaking_section_f,
            "workexperience_entire_period_section_f" => $request->workexperience_entire_period_section_f,
            "workexperience_frequently_paid_section_f" => $request->workexperience_frequently_paid_section_f,
        ];

        $workexperiencesectionG = [
            'form360_id' => $form_id,
            "workexperience_position_section_g" => $request->workexperience_position_section_g,
            "workexperience_training_section_g" => $request->workexperience_training_section_g,
            "workexperience_describe_duties_activities_section_g" => $request->workexperience_describe_duties_activities_section_g,
            "workexperience_training_date_section_g" => $request->workexperience_training_date_section_g,
            "workexperience_training_date_end_section_g" => $request->workexperience_training_date_end_section_g,
            "workexperience_total_duration_section_g" => $request->workexperience_total_duration_section_g,
            "workexperience_legal_registered_section_g" => $request->workexperience_legal_registered_section_g,
            "workexperience_trading_name_section_g" => $request->workexperience_trading_name_section_g,
            "workexperience_abn_sponsor_section_g" => $request->workexperience_abn_sponsor_section_g,
            "workexperience_business_address_section_g" => $request->workexperience_business_address_section_g,
            "workexperience_business_sector_section_g" => $request->workexperience_business_sector_section_g,
            "workexperience_paid_for_undertaking_section_g" => $request->workexperience_paid_for_undertaking_section_g,
            "workexperience_paid_each_year_section_g" => $request->workexperience_paid_each_year_section_g,
            "workexperience_paid_frequently_section_g" => $request->workexperience_paid_frequently_section_g,
        ];

        $workexperiencesectionH = [
            'form360_id' => $form_id,
            "workexperience_completed_atleast_section_h" => $request->workexperience_completed_atleast_section_h,
            "workexperience_course_vocational_section_h" => $request->workexperience_course_vocational_section_h,
            "workexperience_course_name_section_h" => $request->workexperience_course_name_section_h,
            "workexperience_date_started_section_h" => $request->workexperience_date_started_section_h,
            "workexperience_date_ended_section_h" => $request->workexperience_date_ended_section_h,
            "workexperience_school_university_section_h" => $request->workexperience_school_university_section_h,
            "workexperience_school_university_address_section_h" => $request->workexperience_school_university_address_section_h,
            "workexperience_country_section_h" => $request->workexperience_country_section_h,
            "workexperience_completed_course_completed_section_h" => $request->workexperience_completed_course_completed_section_h,
            "workexperience_course_name2_section_h" => $request->workexperience_course_name2_section_h,
            "workexperience_course_start2_section_h" => $request->workexperience_course_start2_section_h,
            "workexperience_course_end2_section_h" => $request->workexperience_course_end2_section_h,
            "workexperience_school_university2_section_h" => $request->workexperience_school_university2_section_h,
            "workexperience_school_university_address2_section_h" => $request->workexperience_school_university_address2_section_h,
            "workexperience_country2_section_h" => $request->workexperience_country2_section_h,
            "workexperience_course_completed2_section_h" => $request->workexperience_course_completed2_section_h,
            "workexperience_exams_list2_section_h" => $request->workexperience_exams_list2_section_h,
        ];

        $workexperiencesectionI = [
            'form360_id' => $form_id,
            "workexperience_legal_n1_section_i" => $request->workexperience_legal_n1_section_i,
            "workexperience_trading_n1_section_i" =>  $request->workexperience_trading_n1_section_i,
            "workexperience_abn_n1_section_i" => $request->workexperience_abn_n1_section_i,
            "workexperience_labour_n1_section_i" => $request->workexperience_labour_n1_section_i,
            "workexperience_familyname_n1_section_i" => $request->workexperience_familyname_n1_section_i,
            "workexperience_given_name_n1_section_i" => $request->workexperience_given_name_n1_section_i,
            "workexperience_position_n1_section_i" => $request->workexperience_position_n1_section_i,
            "workexperience_business_phone_n1_section_i" => $request->workexperience_business_phone_n1_section_i,
            "workexperience_mobile_cell_n1_section_i" => $request->workexperience_mobile_cell_n1_section_i,
            "workexperience_email_n1_section_i" => $request->workexperience_email_n1_section_i,
            "workexperience_business_country_n1_section_i" => $request->workexperience_business_country_n1_section_i,
            "workexperience_business_address_n1_section_i" => $request->workexperience_business_address_n1_section_i,
            "workexperience_business_town_n1_section_i" => $request->workexperience_business_town_n1_section_i,
            "workexperience_business_state_n1_section_i" => $request->workexperience_business_state_n1_section_i,
            "workexperience_business_postcode_n1_section_i" => $request->workexperience_business_postcode_n1_section_i,
            "workexperience_business_work_address_n1_section_i" => $request->workexperience_business_work_address_n1_section_i,
            "workexperience_work_employ_type_n1_section_i" => $request->workexperience_work_employ_type_n1_section_i,
            "workexperience_work_indus_type_n1_section_i" => $request->workexperience_work_indus_type_n1_section_i,
            "workexperience_work_indus_type_subgroup_n1_section_i" => $request->workexperience_work_indus_type_subgroup_n1_section_i,
            "workexperience_work_duties_n1_section_i" => $request->workexperience_work_duties_n1_section_i,
            "workexperience_work_date_from_n1_section_i" => $request->workexperience_work_date_from_n1_section_i,
            "workexperience_work_date_to_n1_section_i" => $request->workexperience_work_date_to_n1_section_i,
            "workexperience_work_total_hours_n1_section_i" => $request->workexperience_work_total_hours_n1_section_i,
            "workexperience_work_total_days_n1_section_i" => $request->workexperience_work_total_days_n1_section_i,
            "workexperience_work_agreement_n1_section_i" => $request->workexperience_work_agreement_n1_section_i,
            "workexperience_accomo_agreement_n1_section_i" => $request->workexperience_accomo_agreement_n1_section_i,
            "workexperience_accomo_method_n1_section_i" => $request->workexperience_accomo_method_n1_section_i,
            "workexperience_accomo_timeTaken_n1_section_i" => $request->workexperience_accomo_timeTaken_n1_section_i,
            "workexperience_legal_n2_section_i" => $request->workexperience_legal_n2_section_i,
            "workexperience_trading_n2_section_i" => $request->workexperience_trading_n2_section_i,
            "workexperience_abn_n2_section_i" => $request->workexperience_abn_n2_section_i,
            "workexperience_labour_n2_section_i" => $request->workexperience_labour_n2_section_i,
            "workexperience_familyname_n2_section_i" => $request->workexperience_familyname_n2_section_i,
            "workexperience_given_name_n2_section_i" => $request->workexperience_given_name_n2_section_i,
            "workexperience_position_n2_section_i" => $request->workexperience_position_n2_section_i,
            "workexperience_business_phone_n2_section_i" => $request->workexperience_business_phone_n2_section_i,
            "workexperience_mobile_cell_n2_section_i" => $request->workexperience_mobile_cell_n2_section_i,
            "workexperience_email_n2_section_i" => $request->workexperience_email_n2_section_i,
            "workexperience_business_country_n2_section_i" => $request->workexperience_business_country_n2_section_i,
            "workexperience_business_address_n2_section_i" => $request->workexperience_business_address_n2_section_i,
            "workexperience_business_town_n2_section_i" => $request->workexperience_business_town_n2_section_i,
            "workexperience_business_state_n2_section_i" => $request->workexperience_business_state_n2_section_i,
            "workexperience_business_postcode_n2_section_i" => $request->workexperience_business_postcode_n2_section_i,
            "workexperience_business_work_address_n2_section_i" => $request->workexperience_business_work_address_n2_section_i,
            "workexperience_work_employ_type_n2_section_i" => $request->workexperience_work_employ_type_n2_section_i,
            "workexperience_work_indus_type_n2_section_i" => $request->workexperience_work_indus_type_n2_section_i,
            "workexperience_work_indus_type_subgroup_n2_section_i" => $request->workexperience_work_indus_type_subgroup_n2_section_i,
            "workexperience_work_duties_n2_section_i" => $request->workexperience_work_duties_n2_section_i,
            "workexperience_work_date_from_n2_section_i" => $request->workexperience_work_date_from_n2_section_i,
            "workexperience_work_date_to_n2_section_i" => $request->workexperience_work_date_to_n2_section_i,
            "workexperience_work_total_hours_n2_section_i" => $request->workexperience_work_total_hours_n2_section_i,
            "workexperience_work_total_days_n2_section_i" => $request->workexperience_work_total_days_n2_section_i,
            "workexperience_work_agreement_n2_section_i" => $request->workexperience_work_agreement_n2_section_i,
            "workexperience_accomo_agreement_n2_section_i" => $request->workexperience_accomo_agreement_n2_section_i,
            "workexperience_accomo_method_n2_section_i" => $request->workexperience_accomo_method_n2_section_i,
            "workexperience_accomo_timeTaken_n2_section_i" => $request->workexperience_accomo_timeTaken_n2_section_i,
            
            "workexperience_visa_applicant_2nd_section_i" => $request->workexperience_visa_applicant_2nd_section_i,
            "workexperience_granted_2nd_section_i" => $request->workexperience_granted_2nd_section_i,
            "workexperience_specify_2nd_section_i" => $request->workexperience_specify_2nd_section_i,
            "workexperience_subclass_2nd_section_i" => $request->workexperience_subclass_2nd_section_i,
            "workexperience_subclass_specify_2nd_section_i" => $request->workexperience_subclass_specify_2nd_section_i,
            "workexperience_undertaken_2nd_section_i" => $request->workexperience_undertaken_2nd_section_i,
            "workexperience_undertaken_specify_2nd_section_i" => $request->workexperience_undertaken_specify_2nd_section_i
        ];

        $workexperiencesectionJ = [
            'form360_id' => $form_id,
            "workexperience_stay_length_remain_section_j" => $request->workexperience_stay_length_remain_section_j,
            "workexperience_stay_length_further_section_j" => $request->workexperience_stay_length_further_section_j,
            "workexperience_stay_length_reason_section_j" => $request->workexperience_stay_length_reason_section_j,
            "workexperience_stay_length_travelling_section_j" => $request->workexperience_stay_length_travelling_section_j,
            "workexperience_travelling_companies_visa_remain_section_j" => $request->workexperience_travelling_companies_visa_remain_section_j,
            "workexperience_relationship_person1_section_j" => $request->workexperience_relationship_person1_section_j,
            "workexperience_familyname_person1_section_j" => $request->workexperience_familyname_person1_section_j,
            "workexperience_givenname_person1_section_j" => $request->workexperience_givenname_person1_section_j,
            "workexperience_sex_person1_section_j" => $request->workexperience_sex_person1_section_j,
            "workexperience_dob_person1_section_j" => $request->workexperience_dob_person1_section_j,
            "workexperience_nationality_person1_section_j" => $request->workexperience_nationality_person1_section_j,
            "workexperience_relationship_person2_section_j" => $request->workexperience_relationship_person2_section_j,
            "workexperience_familyname_person2_section_j" => $request->workexperience_familyname_person2_section_j,
            "workexperience_givenname_person2_section_j" => $request->workexperience_givenname_person2_section_j,
            "workexperience_sex_person2_section_j" => $request->workexperience_sex_person2_section_j,
            "workexperience_dob_person2_section_j" => $request->workexperience_dob_person2_section_j,
            "workexperience_nationality_person2_section_j" => $request->workexperience_nationality_person2_section_j,
            "workexperience_relationship_person3_section_j" => $request->workexperience_relationship_person3_section_j,
            "workexperience_familyname_person3_section_j" => $request->workexperience_familyname_person3_section_j,
            "workexperience_givenname_person3_section_j" => $request->workexperience_givenname_person3_section_j,
            "workexperience_sex_person3_section_j" => $request->workexperience_sex_person3_section_j,
            "workexperience_dob_person3_section_j" => $request->workexperience_dob_person3_section_j,
            "workexperience_nationality_person3_section_j" => $request->workexperience_nationality_person3_section_j,
            "workexperience_relatives_friends_section_j" => $request->workexperience_relatives_friends_section_j,
            "workexperience_relationship_familyname_person1_section_j" => $request->workexperience_relationship_familyname_person1_section_j,
            "workexperience_relationship_givenname_person1_section_j" => $request->workexperience_relationship_givenname_person1_section_j,
            "workexperience_relationship_person_person1_section_j" => $request->workexperience_relationship_person_person1_section_j,
            "workexperience_relationship_sex_person1_section_j" => $request->workexperience_relationship_sex_person1_section_j,
            "workexperience_relationship_dob_person1_section_j" => $request->workexperience_relationship_dob_person1_section_j,
            "workexperience_relationship_address_person1_section_j" => $request->workexperience_relationship_address_person1_section_j,
            "workexperience_relationship_town_person1_section_j" => $request->workexperience_relationship_town_person1_section_j,
            "workexperience_relationship_state_person1_section_j" => $request->workexperience_relationship_state_person1_section_j,
            "workexperience_relationship_postcode_person1_section_j" => $request->workexperience_relationship_postcode_person1_section_j,
            "workexperience_relationship_nospaces_person1_section_j" => $request->workexperience_relationship_nospaces_person1_section_j,
            "workexperience_relationship_home_person1_section_j" => $request->workexperience_relationship_home_person1_section_j,
            "workexperience_relationship_business_person1_section_j" => $request->workexperience_relationship_business_person1_section_j,
            "workexperience_relationship_mobile_person1_section_j" => $request->workexperience_relationship_mobile_person1_section_j,
            "workexperience_relationship_status_person1_section_j" => $request->workexperience_relationship_status_person1_section_j,
            "workexperience_relationship_familyname_person2_section_j" => $request->workexperience_relationship_familyname_person2_section_j,
            "workexperience_relationship_givenname_person2_section_j" => $request->workexperience_relationship_givenname_person2_section_j,
            "workexperience_relationship_person_person2_section_j" => $request->workexperience_relationship_person_person2_section_j,
            "workexperience_relationship_sex_person2_section_j" => $request->workexperience_relationship_sex_person2_section_j,
            "workexperience_relationship_dob_person2_section_j" => $request->workexperience_relationship_dob_person2_section_j,
            "workexperience_relationship_address_person2_section_j" => $request->workexperience_relationship_address_person2_section_j,
            "workexperience_relationship_town_person2_section_j" => $request->workexperience_relationship_town_person2_section_j,
            "workexperience_relationship_state_person2_section_j" => $request->workexperience_relationship_state_person2_section_j,
            "workexperience_relationship_postcode_person2_section_j" => $request->workexperience_relationship_postcode_person2_section_j,
            "workexperience_relationship_nospaces_person2_section_j" => $request->workexperience_relationship_nospaces_person2_section_j,
            "workexperience_relationship_home_person2_section_j" => $request->workexperience_relationship_home_person2_section_j,
            "workexperience_relationship_business_person2_section_j" => $request->workexperience_relationship_business_person2_section_j,
            "workexperience_relationship_mobile_person2_section_j" => $request->workexperience_relationship_mobile_person2_section_j,
            "workexperience_relationship_status_person2_section_j" => $request->workexperience_relationship_status_person2_section_j,
            "workexperience_currentStatus_employment_status_section_j" => $request->workexperience_currentStatus_employment_status_section_j,
            "workexperience_currentlyWorking_most_recent_section_j" => $request->workexperience_currentlyWorking_most_recent_section_j,
            "workexperience_your_position_section_j" => $request->workexperience_your_position_section_j,
            "workexperienc_position_type_section_j" => $request->workexperienc_position_type_section_j,
            "workexperienc_employer_name_business_section_j" => $request->workexperienc_employer_name_business_section_j,
            "workexperienc_business_located_section_j" => $request->workexperienc_business_located_section_j,
            "workexperienc_business_started_date_section_j" => $request->workexperienc_business_started_date_section_j,
            "workexperienc_business_ended_date_section_j" => $request->workexperienc_business_ended_date_section_j,
            "workexperienc_business_detail_person_section_j" => $request->workexperienc_business_detail_person_section_j,
            "workexperienc_business_ifyes_indicate_section_j" => $request->workexperienc_business_ifyes_indicate_section_j,
            "workexperienc_business_name_surname_section_j" => $request->workexperienc_business_name_surname_section_j,
            "workexperienc_business_position_section_j" => $request->workexperienc_business_position_section_j,
            "workexperienc_business_email_section_j" => $request->workexperienc_business_email_section_j,
            "workexperienc_business_phone_section_j" => $request->workexperienc_business_phone_section_j,
            "workexperienc_exact_qualification_option2_section_j" => $request->workexperienc_exact_qualification_option2_section_j,
            "workexperienc_qualification_obtain_option2_section_j" => $request->workexperienc_qualification_obtain_option2_section_j,
            "workexperienc_school_institue_option2_section_j" => $request->workexperienc_school_institue_option2_section_j,
            "workexperienc_year_obtained_option2_section_j" => $request->workexperienc_year_obtained_option2_section_j,
            "workexperienc_date_course_option2_section_j" => $request->workexperienc_date_course_option2_section_j,
            "workexperienc_date_course_end_option2_section_j" => $request->workexperienc_date_course_end_option2_section_j,
            "workexperienc_legal_duration_option2_section_j" => $request->workexperienc_legal_duration_option2_section_j,
            "workexperienc_qualification_country_option2_section_j" => $request->workexperienc_qualification_country_option2_section_j,
            "workexperienc_last_occuption_option3_section_j" => $request->workexperienc_last_occuption_option3_section_j,
            "workexperienc_retired_option4_section_j" => $request->workexperienc_retired_option4_section_j,
            "workexperienc_funding_option4_section_j" => $request->workexperienc_funding_option4_section_j,
            "workexperienc_funds_option4_section_j" => $request->workexperienc_funds_option4_section_j,
          
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
            'travelhistory_country5' => $request->travelhistory_country5,
            'travelhistory_datefrom2' => $request->travelhistory_datefrom2,
            'travelhistory_dateto2' => $request->travelhistory_dateto2,
            'travelhistory_purpose2' => $request->travelhistory_purpose2,
            'travelhistory_country3' => $request->travelhistory_country3,
            'travelhistory_datefrom3' => $request->travelhistory_datefrom3,
            'travelhistory_dateto3' => $request->travelhistory_dateto3,
            'travelhistory_purpose3' => $request->travelhistory_purpose3,
            'travelhistory_datefrom4' => $request->travelhistory_datefrom4,
            'travelhistory_dateto4' => $request->travelhistory_dateto4,
            'travelhistory_datefrom5' => $request->travelhistory_datefrom5,
            'travelhistory_dateto5' => $request->travelhistory_dateto5,
            'travelhistory_purpose4' => $request->travelhistory_purpose4,
            'travelhistory_purpose5' => $request->travelhistory_purpose5,


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

        $healthDeclaration =  [
            'form360_id' => $form_id,
            'healthdeclaration_country1' => $request->healthdeclaration_country1,
            'healthdeclaration_from1' => $request->healthdeclaration_from1,
            'healthdeclaration_to1' => $request->healthdeclaration_to1,
            'healthdeclaration_purpose1' => $request->healthdeclaration_purpose1,
            'healthdeclaration_country2' => $request->healthdeclaration_country2,
            'healthdeclaration_from2' => $request->healthdeclaration_from2,
            'healthdeclaration_to2' => $request->healthdeclaration_to2,
            'healthdeclaration_purpose2' => $request->healthdeclaration_purpose2,
            'healthdeclaration_country3' => $request->healthdeclaration_country3,
            'healthdeclaration_from3' => $request->healthdeclaration_from3,
            'healthdeclaration_to3' => $request->healthdeclaration_to3,
            'healthdeclaration_purpose3' => $request->healthdeclaration_purpose3,
            'healthdeclaration_country4' => $request->healthdeclaration_country4,
            'healthdeclaration_from4' => $request->healthdeclaration_from4,
            'healthdeclaration_to4' => $request->healthdeclaration_to4,
            'healthdeclaration_purpose4' => $request->healthdeclaration_purpose4,
            'healthdeclaration_country5' => $request->healthdeclaration_country5,
            'healthdeclaration_from5' => $request->healthdeclaration_from5,
            'healthdeclaration_to5' => $request->healthdeclaration_to5,
            'healthdeclaration_purpose5' => $request->healthdeclaration_purpose5
        ];

        $healthQuestion =  [
            'form360_id' => $form_id,
            'healthquestion_aus_or_nz' => $request->healthquestion_aus_or_nz,
            'healthquestion_paramedic' => $request->healthquestion_paramedic,
            'healthquestion_childcare' => $request->healthquestion_childcare,
            'healthquestion_classroom' => $request->healthquestion_classroom,
            'healthquestion_tuberculosis' => $request->healthquestion_tuberculosis,
            'healthquestion_familymember_tuberculosis' => $request->healthquestion_familymember_tuberculosis,
            'healthquestion_xray' => $request->healthquestion_xray,
            'healthquestion_indicate_if_yes' => $request->healthquestion_indicate_if_yes,
            'healthquestion_medicalcosts' => $request->healthquestion_medicalcosts,
            'healthquestion_blood' => $request->healthquestion_blood,
            'healthquestion_cancer' => $request->healthquestion_cancer,
            'healthquestion_heart' => $request->healthquestion_heart,
            'healthquestion_hepatitis' => $request->healthquestion_hepatitis,
            'healthquestion_hiv' => $request->healthquestion_hiv,
            'healthquestion_kidney' => $request->healthquestion_kidney,
            'healthquestion_mental' => $request->healthquestion_mental,
            'healthquestion_pregnancy' => $request->healthquestion_pregnancy,
            'healthquestion_respiratory1' => $request->healthquestion_respiratory1,
            'healthquestion_medical_condition' => $request->healthquestion_medical_condition,
            'healthquestion_question_number_if_yes' => $request->healthquestion_question_number_if_yes
        ];

        $character =  [
            'form360_id' => $form_id,
            'character_legal_action' => $request->character_legal_action,
            'character_official_record' => $request->character_official_record,
            'character_interpol_notice1' => $request->character_interpol_notice1,
            'character_interpol_notice2' => $request->character_interpol_notice2,
            'character_sexually' => $request->character_sexually,
            'character_offender' => $request->character_offender,
            'character_unsoundness' => $request->character_unsoundness,
            'character_plead1' => $request->character_plead1,
            'character_plead2' => $request->character_plead2,
            'character_associated' => $request->character_associated,
            'character_genocide' => $request->character_genocide,
            'character_terrorism' => $request->character_terrorism,
            'character_private_militia' => $request->character_private_militia,
            'character_biological' => $request->character_biological,
            'character_training' => $request->character_training,
            'character_offences' => $request->character_offences,
            'character_deported' => $request->character_deported,
            'character_overstayed' => $request->character_overstayed,
            'character_authority' => $request->character_authority,
            'character_refer_to_you' => $request->character_refer_to_you
        ];

        $familymember =  [
            'form360_id' => $form_id,
            'fam_member' => $request->fam_member,
            'fam_member_visa' => $request->fam_member_visa,
            'fam_member_children' => $request->fam_member_children,
            'fam_member_child_visa' => $request->fam_member_child_visa,
            'fam_member_name' => $request->fam_member_name,
            'fam_member_dob' => $request->fam_member_dob,
            'fam_member_pob' => $request->fam_member_pob,
            'fam_member_nationality' => $request->fam_member_nationality,
            'fam_member_other_nationality' => $request->fam_member_other_nationality,
            'fam_member_ever_suffered' => $request->fam_member_ever_suffered,
            'fam_member_legal_action' => $request->fam_member_legal_action,
            'fam_member_visa_application' => $request->fam_member_visa_application,
            'fam_member_include_visa_application' => $request->fam_member_include_visa_application,
            'fam_member_australiz_newzland' => $request->fam_member_australiz_newzland,
            'fam_member_which_visa' => $request->fam_member_which_visa,
            'fam_member_visa_partner_hold' => $request->fam_member_visa_partner_hold,
            'fam_member_visa_expire' => $request->fam_member_visa_expire,
            'fam_member_child_include_visa_application' => $request->fam_member_child_include_visa_application,
            'fam_member_child_australiz_newzland' => $request->fam_member_child_australiz_newzland,
            'fam_member_child_which_visa' => $request->fam_member_child_which_visa,
            'fam_member_child_visa_partner_hold' => $request->fam_member_child_visa_partner_hold,
            'fam_member_child_visa_expire' => $request->fam_member_child_visa_expire,
            'fam_member_currently_live' => $request->fam_member_currently_live,
            'fam_member_child_name1' => $request->fam_member_child_name1,
            'fam_member_child_dob1' => $request->fam_member_child_dob1,
            'fam_member_child_pob1' => $request->fam_member_child_pob1,
            'fam_member_child_nationality1' => $request->fam_member_child_nationality1,
            'fam_member_child_other_nationality1' => $request->fam_member_child_other_nationality1,
            'fam_member_child_ever_suffered1' => $request->fam_member_child_ever_suffered1,
            'fam_member_child_legal_action1' => $request->fam_member_child_legal_action1,
            'fam_member_child_visa_application1' => $request->fam_member_child_visa_application1,
            'fam_member_child_currently_live1' => $request->fam_member_child_currently_live1,
            'fam_member_child_name2' => $request->fam_member_child_name2,
            'fam_member_child_dob2' => $request->fam_member_child_dob2,
            'fam_member_child_pob2' => $request->fam_member_child_pob2,
            'fam_member_child_nationality2' => $request->fam_member_child_nationality2,
            'fam_member_child_other_nationality2' => $request->fam_member_child_other_nationality2,
            'fam_member_child_ever_suffered2' => $request->fam_member_child_ever_suffered2,
            'fam_member_child_legal_action2' => $request->fam_member_child_legal_action2,
            'fam_member_child_visa_application2' => $request->fam_member_child_visa_application2,
            'fam_member_child_currently_live2' => $request->fam_member_child_currently_live2,
            'fam_member_child_name3' => $request->fam_member_child_name3,
            'fam_member_child_dob3' => $request->fam_member_child_dob3,
            'fam_member_child_pob3' => $request->fam_member_child_pob3,
            'fam_member_child_nationality3' => $request->fam_member_child_nationality3,
            'fam_member_child_other_nationality3' => $request->fam_member_child_other_nationality3,
            'fam_member_child_ever_suffered3' => $request->fam_member_child_ever_suffered3,
            'fam_member_child_legal_action3' => $request->fam_member_child_legal_action3,
            'fam_member_child_visa_application3' => $request->fam_member_child_visa_application3,
            'fam_member_child_currently_live3' => $request->fam_member_child_currently_live3,
            'fam_member_child_name4' => $request->fam_member_child_name4,
            'fam_member_child_dob4' => $request->fam_member_child_dob4,
            'fam_member_child_pob4' => $request->fam_member_child_pob4,
            'fam_member_child_nationality4' => $request->fam_member_child_nationality4,
            'fam_member_child_other_nationality4' => $request->fam_member_child_other_nationality4,
            'fam_member_child_ever_suffered4' => $request->fam_member_child_ever_suffered4,
            'fam_member_child_legal_action4' => $request->fam_member_child_legal_action4,
            'fam_member_child_visa_application4' => $request->fam_member_child_visa_application4,
            'fam_member_child_currently_live4' => $request->fam_member_child_currently_live4,
            'fam_member_father_name' => $request->fam_member_father_name,
            'fam_member_father_dob' => $request->fam_member_father_dob,
            'fam_member_father_pob' => $request->fam_member_father_pob,
            'fam_member_father_nationality' => $request->fam_member_father_nationality,
            'fam_member_father_other_nationality' => $request->fam_member_father_other_nationality,
            'fam_member_father_ever_suffered' => $request->fam_member_father_ever_suffered,
            'fam_member_father_legal_action' => $request->fam_member_father_legal_action,
            'fam_member_father_visa_application' => $request->fam_member_father_visa_application,
            'fam_member_father_currently_live' => $request->fam_member_father_currently_live,
            'fam_member_mother_name' => $request->fam_member_mother_name,
            'fam_member_mother_dob' => $request->fam_member_mother_dob,
            'fam_member_mother_pob' => $request->fam_member_mother_pob,
            'fam_member_mother_nationality' => $request->fam_member_mother_nationality,
            'fam_member_mother_other_nationality' => $request->fam_member_mother_other_nationality,
            'fam_member_mother_ever_suffered' => $request->fam_member_mother_ever_suffered,
            'fam_member_mother_legal_action' => $request->fam_member_mother_legal_action,
            'fam_member_mother_visa_application' => $request->fam_member_mother_visa_application,
            'fam_member_mother_currently_live' => $request->fam_member_mother_currently_live,
            'fam_member_bro_sis_name1' => $request->fam_member_bro_sis_name1,
            'fam_member_bro_sis_dob1' => $request->fam_member_bro_sis_dob1,
            'fam_member_bro_sis_pob1' => $request->fam_member_bro_sis_pob1,
            'fam_member_bro_sis_nationality1' => $request->fam_member_bro_sis_nationality1 ,
            'fam_member_bro_sis_other_nationality1' => $request->fam_member_bro_sis_other_nationality1,
            'fam_member_bro_sis_ever_suffered1' => $request->fam_member_bro_sis_ever_suffered1,
            'fam_member_bro_sis_legal_action1' => $request->fam_member_bro_sis_legal_action1,
            'fam_member_bro_sis_visa_application1' => $request->fam_member_bro_sis_visa_application1,
            'fam_member_bro_sis_currently_live1' => $request->fam_member_bro_sis_currently_live1,
            'fam_member_bro_sis_name2' => $request->fam_member_bro_sis_name2,
            'fam_member_bro_sis_dob2' => $request->fam_member_bro_sis_dob2,
            'fam_member_bro_sis_pob2' => $request->fam_member_bro_sis_pob2,
            'fam_member_bro_sis_nationality2' => $request->fam_member_bro_sis_nationality2,
            'fam_member_bro_sis_other_nationality2' => $request->fam_member_bro_sis_other_nationality2,
            'fam_member_bro_sis_ever_suffered2' => $request->fam_member_bro_sis_ever_suffered2,
            'fam_member_bro_sis_legal_action2' => $request->fam_member_bro_sis_legal_action2,
            'fam_member_bro_sis_visa_application2' => $request->fam_member_bro_sis_visa_application2,
            'fam_member_bro_sis_currently_live2' => $request->fam_member_bro_sis_currently_live2,

            'fam_member_child2_include_visa_application' => $request->fam_member_child2_include_visa_application,
            'fam_member_child2_australiz_newzland' => $request->fam_member_child2_australiz_newzland,
            'fam_member_child2_which_visa' => $request->fam_member_child2_which_visa,
            'fam_member_child2_visa_partner_hold' => $request->fam_member_child2_visa_partner_hold,
            'fam_member_child2_visa_expire' => $request->fam_member_child2_visa_expire,

            'fam_member_child3_include_visa_application' => $request->fam_member_child3_include_visa_application,
            'fam_member_child3_australiz_newzland' => $request->fam_member_child3_australiz_newzland,
            'fam_member_child3_which_visa' => $request->fam_member_child3_which_visa,
            'fam_member_child3_visa_partner_hold' => $request->fam_member_child3_visa_partner_hold,
            'fam_member_child3_visa_expire' => $request->fam_member_child3_visa_expire,
            
            'fam_member_bro_sis_name3' => $request->fam_member_bro_sis_name3,
            'fam_member_bro_sis_dob3' => $request->fam_member_bro_sis_dob3,
            'fam_member_bro_sis_pob3' => $request->fam_member_bro_sis_pob3,
            'fam_member_bro_sis_nationality3' => $request->fam_member_bro_sis_nationality3,
            'fam_member_bro_sis_other_nationality3' => $request->fam_member_bro_sis_other_nationality3,
            'fam_member_bro_sis_ever_suffered3' => $request->fam_member_bro_sis_ever_suffered3,
            'fam_member_bro_sis_legal_action3' => $request->fam_member_bro_sis_legal_action3,
            'fam_member_bro_sis_visa_application3' => $request->fam_member_bro_sis_visa_application3 ,
            'fam_member_bro_sis_currently_live3' => $request->fam_member_bro_sis_currently_live3,
            'fam_member_bro_sis_name4' => $request->fam_member_bro_sis_name4,
            'fam_member_bro_sis_dob4' => $request->fam_member_bro_sis_dob4,
            'fam_member_bro_sis_pob4' => $request->fam_member_bro_sis_pob4,
            'fam_member_bro_sis_nationality4' => $request->fam_member_bro_sis_nationality4,
            'fam_member_bro_sis_other_nationality4' => $request->fam_member_bro_sis_other_nationality4,
            'fam_member_bro_sis_ever_suffered4' => $request->fam_member_bro_sis_ever_suffered4,
            'fam_member_bro_sis_legal_action4' => $request->fam_member_bro_sis_legal_action4,
            'fam_member_bro_sis_visa_application4' => $request->fam_member_bro_sis_visa_application4,
            'fam_member_bro_sis_currently_live4' => $request->fam_member_bro_sis_currently_live4,

        ];

        $familymemberSectionB =  [
            'form360_id' => $form_id,
            "fam_member_partner_visa_sectionb" => $request->fam_member_partner_visa_sectionb,
            "fam_member_your_partner_visa_sectionb" => $request->fam_member_your_partner_visa_sectionb,
            "fam_member_your_partner_obtain_visa_sectionb" => $request->fam_member_your_partner_obtain_visa_sectionb,
            "fam_member_your_partner_first_meet_visa_sectionb" => $request->fam_member_your_partner_first_meet_visa_sectionb,
            "fam_member_your_partner_first_meet_exactly_visa_sectionb" => $request->fam_member_your_partner_first_meet_exactly_visa_sectionb,
            "fam_member_your_partner_couple_sectionb" => $request->fam_member_your_partner_couple_sectionb,
            "fam_member_your_partner_civil_status_sectionb" => $request->fam_member_your_partner_civil_status_sectionb,
            "fam_member_your_partner_date_marriage_sectionb" => $request->fam_member_your_partner_date_marriage_sectionb,
            "fam_member_your_partner_live_together_sectionb" => $request->fam_member_your_partner_live_together_sectionb,
            "fam_member_your_partner_started_live_together_sectionb" => $request->fam_member_your_partner_started_live_together_sectionb,
            "fam_member_your_partner_became_a_couple_sectionb" => $request->fam_member_your_partner_became_a_couple_sectionb,
            "fam_member_your_partner_even_been_married_sectionb" => $request->fam_member_your_partner_even_been_married_sectionb,
            "fam_member_your_partner_children_sectionb" => $request->fam_member_your_partner_children_sectionb,
            "fam_member_your_partner_have_children_sectionb" => $request->fam_member_your_partner_have_children_sectionb,
            "fam_member_your_partner_sponsored_sectionb" => $request->fam_member_your_partner_sponsored_sectionb,
            "fam_member_your_partner_type_of_visa_sectionb" => $request->fam_member_your_partner_type_of_visa_sectionb,
            "fam_member_your_partner_joint_bank_sectionb" => $request->fam_member_your_partner_joint_bank_sectionb,
            "fam_member_your_partner_bank_account_sectionb" => $request->fam_member_your_partner_bank_account_sectionb,
            "fam_member_your_partner_joint_bank_account_sectionb" => $request->fam_member_your_partner_joint_bank_account_sectionb,
            "fam_member_your_partner_regular_basis_sectionb" => $request->fam_member_your_partner_regular_basis_sectionb,
            "fam_member_your_partner_rental_agreement_sectionb" => $request->fam_member_your_partner_rental_agreement_sectionb,
            "fam_member_your_partner_rental_agreement_startDate_sectionb" => $request->fam_member_your_partner_rental_agreement_startDate_sectionb,
            "fam_member_your_partner_utilityBill_sectionb" => $request->fam_member_your_partner_utilityBill_sectionb,
            "fam_member_your_partner_guarantor_sectionb" => $request->fam_member_your_partner_guarantor_sectionb,
            "fam_member_guarantor_name_p1_sectionb" => $request->fam_member_guarantor_name_p1_sectionb,
            "fam_member_guarantor_surname_p1_sectionb" => $request->fam_member_guarantor_surname_p1_sectionb,
            "fam_member_guarantor_dob_p1_sectionb" => $request->fam_member_guarantor_dob_p1_sectionb,
            "fam_member_guarantor_permanent_p1_sectionb" => $request->fam_member_guarantor_permanent_p1_sectionb,
            "fam_member_guarantor_position_p1_sectionb" => $request->fam_member_guarantor_position_p1_sectionb,
            "fam_member_guarantor_phone_p1_sectionb" => $request->fam_member_guarantor_phone_p1_sectionb,
            "fam_member_guarantor_email_p1_sectionb" => $request->fam_member_guarantor_email_p1_sectionb,
            "fam_member_guarantor_applicant_p1_sectionb" => $request->fam_member_guarantor_applicant_p1_sectionb,
            "fam_member_guarantor_willing_p1_sectionb" => $request->fam_member_guarantor_willing_p1_sectionb,
            "fam_member_guarantor_name_p2_sectionb" => $request->fam_member_guarantor_name_p2_sectionb,
            "fam_member_guarantor_surname_p2_sectionb" => $request->fam_member_guarantor_surname_p2_sectionb,
            "fam_member_guarantor_dob_p2_sectionb" => $request->fam_member_guarantor_dob_p2_sectionb,
            "fam_member_guarantor_permanent_p2_sectionb" => $request->fam_member_guarantor_permanent_p2_sectionb,
            "fam_member_guarantor_position_p2_sectionb" => $request->fam_member_guarantor_position_p2_sectionb,
            "fam_member_guarantor_phone_p2_sectionb" => $request->fam_member_guarantor_phone_p2_sectionb,
            "fam_member_guarantor_email_p2_sectionb" => $request->fam_member_guarantor_email_p2_sectionb,
            "fam_member_guarantor_applicant_p2_sectionb" => $request->fam_member_guarantor_applicant_p2_sectionb,
            "fam_member_guarantor_willing_p2_sectionb" => $request->fam_member_guarantor_willing_p2_sectionb,
        ];
        

        $fieldsetsData = [
            'matrixdata' => $matrixData ,
            'personaldata' => $personalData ,
            'firsteducationdata' => $firstEducationData,
            'higheducationdata' =>$highEducationData,
            'apprenticeship' =>$apprenticeshipData, 
            'workExperienceData' => $workExperienceData,
            'workExperienceIntraData' => $workExperienceIntraData,
            'workexperiencesectionA' =>  $workexperiencesectionA,
            'workexperiencesectionB' => $workexperiencesectionB,
            'workexperiencesectionC' => $workexperiencesectionC,
            'workexperiencesectionD' => $workexperiencesectionD,
            'workexperiencesectionE' => $workexperiencesectionE,
            'workexperiencesectionF' => $workexperiencesectionF,
            'workexperiencesectionG' => $workexperiencesectionG,
            'workexperiencesectionH' => $workexperiencesectionH,
            'workexperiencesectionI' => $workexperiencesectionI,
            'workexperiencesectionJ' => $workexperiencesectionJ,
            'visahistoryData' => $visahistoryData,
            'travelhistoryData' => $travelhistoryData,
            'countryofresidenceData' => $countryofresidenceData,
            'healthdeclaration' => $healthDeclaration,
            'healthQuestion' => $healthQuestion,
            'character' => $character,
            'familymember' => $familymember,
            'familymemberSectionB' => $familymemberSectionB
        ];
        
        return $fieldsetsData;

    }

    public function correctFieldsEmail(Request $request){
        
        if(!empty($request->userid)){
            $user = User::where('id',$request->userid)->first();
            $consultant = User::where('id',Auth::user()->id)->first();
            if($request->has('fieldsname')){
                       $data = [
                           'email' => $user->email,
                           'username' => $user->username,
                           'fieldsname' => $request->fieldsname,
                           'fieldsvalue' => $request->fieldsvalue,
                           'fieldscomments' => $request->fieldscomments,
                           'formname' => $request->formName,
                           'msg' => 'We have received the information and document provided on the info/docs system. Please see below the comments of your consultant. Please make sure to copy and paste and answer under each question in order to allow your consultant to finalize your application. Once the form updated please send us an updated email'
                       ];

                       $consultantdata = [
                        'email' => $consultant->email,
                        'username' => $consultant->username,
                        'fieldsname' => $request->fieldsname,
                        'fieldsvalue' => $request->fieldsvalue,
                        'fieldscomments' => $request->fieldscomments,
                        'formname' => $request->formName,
                        'msg' => 'An email of fields correction has been sent to the client.'
                    ];
                       //dd($data);
                       Mail::to($user->email)->send(new CorrectionMail($data));
                       Mail::to($consultant->email)->send(new CorrectionMail($consultantdata));
                      //Mail::to($this->siteEmail)->send(new CorrectionEmailAdmin($data));
                       return response()->json(['success' => "true"]);
           }
       }
    }
}
