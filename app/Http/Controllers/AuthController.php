<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function userAuthLogin()
    {
        return view('auth.login');
    }
    public function userAuthLoginPost(Request $request)
    {
        // dd($request->all());
        //validate data
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        //login Code
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('name',$user->name);
                return redirect('home');
            }else{
                return back()->with('fail','Password does not matches');
            }

        }else{
            return back()->with('fail','This email is not registered');
        }
    }
    
    public function userAuthRegister()
    {
        return view('auth.register');
    }
    public function userAuthRegisterPost(Request $request)
    {
        // dd($request->all());
        //validate data
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:8'
        ]);

        //save in users table

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $res = $user->save();

        if($res){
            return redirect('login')->with('success','You have registered successfully');
        }else{
            return back()->with('fail','Something Wrong');
        }
    }
    
    public function userAuthForgetPassword()
    {
        return view('auth.forgetPassword');
    }

    public function home()
    {
        $data = array();
        if(Session::has('name')){
            $data = User::where('id', '=', Session::get('name'))->first();
        }
        return view('frontend.index', compact('data'));
    }

    public function userAuthLogout()
    {
        if(Session::has('name')){
            Session::pull('name');
            return redirect('home');
        }
    }

}
