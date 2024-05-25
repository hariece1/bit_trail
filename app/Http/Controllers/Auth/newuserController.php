<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\Adminlogin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;    
class newuserController extends Controller
{
    public function store(Request $request){
        dd($request);
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        Auth::login($user);
        return redirect('/login');
    }
    public function adminstore(Request $request){
        $user = new Adminlogin;
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect('/login');
    }
}
