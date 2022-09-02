<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ConsultantUser;
use App\Models\UserForms;
use DB;

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

       // dd(array_values($request->user_ids));
        // $exist = ConsultantUser::where('consultant_id',$request->consultant_id)->exists();
        // if($exist == true){
        //     $data = ConsultantUser::where('consultant_id' ,$request->consultant_id)->first(['customer_id']);
        //     $customers = $data->customer_id;
        //     //dd($customers);
        //     foreach($request->user_ids as $cus){
        //         array_push($customers, $cus);
        //     }
            
        //     $customers= array_unique($customers);

        //     ConsultantUser::where('consultant_id' ,$request->consultant_id)->update([
        //         'customer_id' => array_values($customers)
        //     ]);
        //     return redirect()->back();
        // }
        foreach($request->form_ids as  $formid){
            $data = UserForms::create([
                'user_id' => $request->user_id,
                'form_id'  => $formid,
            ]);
        }
       
        
        return redirect()->back()->with('success','User Assigned successfully');
    }

    public function getUserForms(int $id){
        $data = UserForms::where('user_id' ,$id);
        $forms = $data->pluck('form_id');
        $userforms = DB::table('forms')->whereIn('id',$forms)->get();
        
        return view('backend.forms.forms',compact('userforms'));
    }

    public function deleteUserForm(int $user_id,int $form_id){
        
        
        $data = UserForms::where(['user_id' => $user_id, 'form_id' => $form_id])->delete();
        
        
        return redirect()->back();

    }

}

