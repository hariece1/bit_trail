<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Adminlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class logincontrollers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function authenticate(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $username = $request->input('username');
        $password = $request->input('password');
        if(Auth::attempt(['username'=>$username,'password'=>$password])){
            $user = Adminlogin::where('username',$username)->first();
            Auth::login($user);
            return redirect('/home');
        }else{
            return back()->withErrors(['Invalid']);
        }
}
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
