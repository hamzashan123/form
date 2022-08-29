<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ConsultantUser;

class ConsultantController extends Controller
{
    public function index(){

        $Assignedconsultants = User::role('consultant')->whereNotNull('consultant_users.consultant_id')->leftjoin('consultant_users', 'users.id', '=', 'consultant_users.consultant_id')->get();
       
        $consultants = User::role('consultant')->get();
        $users = User::role('user')->get();
        
       // dd($Assignedconsultants);
        return view('backend.consultants.index',compact('consultants','users','Assignedconsultants'));
    }

    public function assignUserToConsultant(Request $request){

       // dd(array_values($request->user_ids));
        $exist = ConsultantUser::where('consultant_id',$request->consultant_id)->exists();
        if($exist == true){
            $data = ConsultantUser::where('consultant_id' ,$request->consultant_id)->first(['customer_id']);
            $customers = $data->customer_id;
            //dd($customers);
            foreach($request->user_ids as $cus){
                array_push($customers, $cus);
            }
            
            $customers= array_unique($customers);

            ConsultantUser::where('consultant_id' ,$request->consultant_id)->update([
                'customer_id' => array_values($customers)
            ]);
            return redirect()->back();
        }
        $data = ConsultantUser::create([
            'consultant_id' => $request->consultant_id,
            'customer_id'  => $request->user_ids,
            'comments' => 'assigned to consultant',
            'assigned_by_id' => auth()->user()->id
        ]);
        
        return redirect()->back()->with('success','User Assigned successfully');
    }

    public function viewUsers(int $id){
        $data = ConsultantUser::where('consultant_id' ,$id)->first(['customer_id']);
        $customers = $data->customer_id;
        $users = User::whereIn('id',$customers)->get();
        
        return view('backend.consultants.users',compact('users','id'));
    }

    public function deleteConsultantUser(int $userid,int $consultant_id){
        
        $data = ConsultantUser::where('consultant_id' ,$consultant_id)->first(['customer_id']);
        $customers = $data->customer_id;
       // dd($customers);
        if (($userid = array_search($userid, $customers)) !== false) {
            unset($customers[$userid]);
        }
        
        ConsultantUser::where('consultant_id' ,$consultant_id)->update([
            'customer_id' => array_values($customers)
        ]);
        
        return redirect()->back();

    }

    public function forms(){
        $users = User::role('user')->get();
        return view('backend.forms.index',compact('users'));
    }
}
