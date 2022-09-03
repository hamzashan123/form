<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Mail\RegisterUser;
use Illuminate\Support\Facades\Mail;
use Config;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:128', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'status' => false,
            'password' => Hash::make($data['password'])
        ]);
        
        if($data['usertype'] == 'consultant'){
            $user->markEmailAsVerified();
            $user->assignRole('consultant');

            $adminData = [
                'username' => $data['username'],
                'email' => $data['email'],
                'usertype' => 'consultant',
                'messagetype' => "User has been registered on your system please check the system and update the user status."
               
            ];
            Mail::to(env('ADMINEMAIL','riccardo@australialegal.it'))->send(new RegisterUser($adminData));

            $userData = [
                'username' => $data['username'],
                'email' => $data['email'],
                'usertype' => 'consultant',
                'messagetype' => "Thanks for registered on the system. Our admin will approve it to system and you will be notified."
               
            ];

            Mail::to($data['email'])->send(new RegisterUser($userData));

        }else if($data['usertype'] == 'user'){

            $adminData = [
                'username' => $data['username'],
                'email' => $data['email'],
                'usertype' => 'user',
                'messagetype' => "User has been registered on your system please check the system and update the user status."
               
            ];
            
            Mail::to(env('ADMINEMAIL','riccardo@australialegal.it'))->send(new RegisterUser($adminData));

            $userData = [
                'username' => $data['username'],
                'email' => $data['email'],
                'usertype' => 'user',
                'messagetype' => "Thanks for registered on the system. Our admin will approve it to system and you will be notified."
               
            ];

            Mail::to($data['email'])->send(new RegisterUser($userData));
            $user->markEmailAsVerified();
            $user->assignRole('user');
        }
        

        return redirect()->route('register')->with([
            'message' => 'Registered successfully',
            'alert-type' => 'success'
        ]);

        //return $user;
    }
}
