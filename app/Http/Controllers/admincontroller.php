<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;
use App\Models\ProblemStatementP;

class admincontroller extends Controller
{
    public function login()
{
    return view('auth/newuser');
}   
    public function homepage()
{
    return view('home');
} 
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regdetails = Participants::all();
        return view('participants.RegistrationDetails',compact('regdetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function search(Request $request)
    {
        $search = $request-> except('_token');
        $searchString = is_array($search) ? implode(',', $search) : $search;

        $regdetails = Participants::where(function ($query) use ($searchString) {
                $query->where('name', 'like', "%$searchString%")
                      ->orWhere('rollno', 'like', "%$searchString%")
                      ->orWhere('splname', 'like', "%$searchString%");
            })
            ->get();
        return view('participants.RegistrationDetails', compact('regdetails'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request-> except('_token');
        $rd = new Participants;
        $rd ->name = $data['name'];
        $rd ->rollno = $data['rollno'];
        $rd ->splname = $data['splname'];
        $rd ->splid = $data['splid'];
        $rd ->phone = $data['phoneno'];
        $rd->save();
        return redirect()->route('ps.home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Participants::find($id);
        return view('participants.show',compact('data'));
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
        $data = Participants::find($id);
        $data->delete();
        return redirect()->route('redetails.index');
    }
}
