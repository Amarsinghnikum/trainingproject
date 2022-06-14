<?php

namespace App\Http\Controllers;

use App\Models\Current;
use App\Models\Pending;
use App\Models\Order;

use Illuminate\Http\Request;
use Session;
use Image;
use DB;
use Auth;
use Hash;
use Response;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        $user_id = Session::get('usersession')->id;
        // $data['package'] ='';
        // $data['getcurrent'] = DB::table('current_payment')->where('user_id',$user_id)->get();
        // $data['getpending'] = DB::table('pending_payment')->get();
        return view('index');
    }

    public function RegisterPage(Request $request)
    {
        return view('register');
    }
    public function Register(Request $request)
    {

        $ParamArray = [
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'password'=>$request->confirmpassword,
        ];

        $userregister = DB::table('accessadmin')->insert($ParamArray);
        if($userregister=1){
        return redirect('register')->with('Investor Registered Successfully!');
        }
    }

    public function Login(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $usersession = DB::table('accessadmin')->where('email', $email)->where('password', $password)->first();
        if ($usersession) {
          Session::put('usersession',$usersession);
          echo "<h2>Login Successfully</h2>";  
          return redirect('/category');            
        }
        else
        {
          return view('login');
        }
    }

    public function deleteUserProfile(Request $request)
    {
        $request->session()->forget('usersession');
        return redirect('/login');   
    }

}
