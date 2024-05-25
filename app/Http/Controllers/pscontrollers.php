<?php

namespace App\Http\Controllers;

use App\Models\ProblemStatement;
use App\Models\ProblemStatement1;
use App\Models\ProblemStatementP;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class pscontrollers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabledata = ProblemStatementP::orderBy('pid','asc')->get();
        return view('ps.index',compact('tabledata'));
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("hello");
        $request->validate([
            'problemstatementname' => 'required',
            'pid'=>'unique:problem_statement_p_s,pid'
        ]);
        $data = $request-> except('_token');
        
        $pss  = new ProblemStatementP;
        $pss->ProblemStatementName = $data['problemstatementname'];
        $pss->PID = $data['pid'];
        $pss->problemstatementd = $data['problemstatementd'];
        $pss->category=$data['category'];
        $pss->start_date = $data['start_date'];
        $pss->start_time = $data['start_time'];
        $pss->end_time = $data['end_time'];
        $pss->end_date = $data['end_date'];
        $pss->is_active = $data['is_active'];
        $pss->save();
        return redirect()->route('ps.index')->withMessage('Problem Statement created sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ProblemStatementP::find($id);
        return view('ps.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ProblemStatementP::find($id);
        return view('ps.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $data = $request->all();
        $odata = ProblemStatementP::find($id);
        $odata->update($data);
        return redirect()->route('ps.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ProblemStatementP::find($id);
        $data->delete();
        return redirect()->route('ps.index');
    }
}
