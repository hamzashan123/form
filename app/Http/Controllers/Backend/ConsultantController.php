<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ConsultantUser;
use DB;
use App\Mail\AssignUserToConsultant;
use Illuminate\Support\Facades\Mail;

class ConsultantController extends Controller
{
    public function index(){

        $Assignedconsultants = DB::table('users')
                 ->join('consultant_users', 'users.id', '=', 'consultant_users.consultant_id')
                 ->select('users.*', 'consultant_users.id as consultant_id',DB::raw('count(*) as total'))
                 ->groupBy('consultant_users.consultant_id')
                 ->get();

        $consultants = User::role('consultant')->get();
        $users = User::role('user')->get();
        
       // dd($Assignedconsultants);
        return view('backend.consultants.index',compact('consultants','users','Assignedconsultants'));
    }

    public function assignUserToConsultant(Request $request){
  
        foreach($request->user_ids as  $user){   
            $exist = ConsultantUser::where(['consultant_id' => $request->consultant_id,'customer_id'  => $user])->exists();
              
            if($exist == false){
                $data = ConsultantUser::create([
                    'consultant_id' => $request->consultant_id,
                    'customer_id'  => $user,
                    'comments' => 'assigned to consultant',
                    'assigned_by_id' => auth()->user()->id
                ]);
                $userdetail = User::find($user);
                
                $userData = [
                    'username' => $userdetail->username,
                    'email' => $userdetail->email,
                    'usertype' => 'consultant',
                    'messagetype' => "Dear Consultant, You have been 
                    assigned a new client. Please check the Aus Legal Online System to view the new client and for any further
                    details related to this matter"
                   
                ];
    
                Mail::to($userdetail->email)->send(new AssignUserToConsultant($userData));
            }
        }
        
        
        return redirect()->back()->with('success','User Assigned successfully');
    }

    public function viewUsers(int $id){
       
        $data = ConsultantUser::where('consultant_id' ,$id);
        $customers = $data->pluck('customer_id');
        $users = DB::table('users')->whereIn('id',$customers->toArray())->get();
        
        return view('backend.consultants.users',compact('users','id'));
    }

    public function deleteConsultantUser(int $userid,int $consultant_id){
        
        $data = ConsultantUser::where(['consultant_id' => $consultant_id, 'customer_id' => $userid])->delete();
    
        return redirect()->back();

    }

}
