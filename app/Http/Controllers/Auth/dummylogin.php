<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Logincontroller extends Controller
{
    public function authenticate(Request $request){
            $request->validate([
                'name'=>'required',
                'password'=>'required'
            ]);
            $name = $request->input('name');
            $password = $request->input('password');
            if(Auth::attempt(['name'=>$name,'password'=>$password])){
                $user = User::where('name',$name)->first();
                Auth::login($user);
                return redirect('/home');
            }else{
                return back()->withErrors(['Invalid']);
            }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function newuserl(){
        return redirect('/newuser');
    }
}
