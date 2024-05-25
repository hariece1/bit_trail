<?php

namespace App\Http\Controllers;
use App\Models\ProblemStatementP;
use Illuminate\Http\Request;
use App\Models\Participants;
class participantscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabledata = ProblemStatementP::orderBy('pid','asc')->get();
        return view('ps.participantsindex',compact('tabledata'));
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
    public function show()
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
