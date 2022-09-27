<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ConsultantUser;
use App\Models\UserForms;
use DB;
use App\Mail\AssignFormToUser;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    
    public function index(){

        $users = User::role('user')->get();
       
        $user_forms = DB::table('users')
                 ->join('user_forms', 'users.id', '=', 'user_forms.user_id')
                 ->select('users.*',DB::raw('count(*) as total'))
                 ->groupBy('user_forms.user_id')
                 ->get();
        
        return view('backend.forms.index',compact('users','user_forms'));
    }

    public function assignFormsToUser(Request $request){

        foreach($request->form_ids as  $formid){
            $exist = UserForms::where(['user_id' => $request->user_id,'form_id'  => $formid])->exists();

            if($exist == false){
                $data = UserForms::create([
                    'user_id' => $request->user_id,
                    'form_id'  => $formid,
                ]);
                
            }
        }
        if(!empty($request->user_id)){
            $userdetail = User::find($request->user_id);
                
                $userData = [
                    'username' => $userdetail->username,
                    'email' => $userdetail->email,
                    'usertype' => 'consultant',
                    'messagetype' => "You have assign a new form. Please check the system and fill out the form."
                   
                ];
    
                Mail::to($userdetail->email)->send(new AssignFormToUser($userData));
        }
       
        
        return redirect()->back()->with('success','User Assigned successfully');
    }

    public function getUserForms(int $id){
        $data = UserForms::where('user_id' ,$id);
        $forms = $data->pluck('form_id');
        $userassignforms = DB::table('forms')->whereIn('id',$forms)->get();
       
        return view('backend.forms.forms',compact('userassignforms','id'));
    }

    public function deleteUserForm(int $user_id,int $form_id){
        
        
        $data = UserForms::where(['user_id' => $user_id, 'form_id' => $form_id])->delete();
       
            
        return redirect()->back();

    }

    public function getFormDetails(int $user_id, int $form_id){
           if($form_id == 1){

            $data  =  DB::table('form360')
                        ->join('form360_matrix', 'form360.id', '=', 'form360_matrix.form360_id')     
                        ->where('user_id',$user_id)->select('form360.*','form360_matrix.*')->get();
            //dd($data);            
            return redirect()->route('admin.form360.index',compact('data'));
            }elseif($form_id == 2){

            $data  =  DB::table('employerform')
                ->join('employerform_sbs', 'employerform.id', '=', 'employerform_sbs.employerform_id')     
                ->where('user_id',$user_id)->select('employerform.*','employerform_sbs.*')->get();   
           // dd($data);    
            return redirect()->route('admin.employerform.index',compact('data'));   
            }else{

           }
         
          // dd($data);
    }



    public function form1(){

        return view('backend.forms.form1');
    }
    public function form2(){

        return view('backend.forms.form2');
    }
    public function form3(){

        return view('backend.forms.form3');
    }

}

