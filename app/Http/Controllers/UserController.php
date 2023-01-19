<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        else{
            return view('user_login');
        }
    }

    public function login_logic(Request $request){

        $remember = $request->has('remember')?true:false;

        $auth = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $remember);

        if($auth){
            return redirect()->route('home');
        } else{
            $request->session()->flash('error', 'Wrong email or password');
            return redirect()->route('login_user');
        }
    }

    public function logout_logic(){
        Auth::logout();
        return redirect()->route('login_user');
    }

    public function register_logic(Request $request){
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|unique:users,email',
            'password' => 'required|alpha_num|confirmed|min:8',
            'gender' => 'required',
            'date_of_birth' => 'required|before:today',
            'country' => 'required'
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'registered',
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'country' => $request->country
        ]);

        $request->session()->flash('message', 'Successfully Register your Account. Please Login using Email and Password');
        return redirect()->route('login_user');
    }

    public function register_form(){
        return view('user_register');
    }

    public function profile_index(){
        return view('profile');
    }
}
