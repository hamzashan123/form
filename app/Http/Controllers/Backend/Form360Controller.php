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
            'name' => $request->matrix_name_and_surname
        ];

        $fieldsetsData = ['matrixdata' => $matrixData ,'personaldata' => $personalData];
        return $fieldsetsData;

    }
}
