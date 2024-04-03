<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $education = Education::simplePaginate(5);
        return view('pages.educations.index', compact('education'))->with('i', (request()->input('page', 1)- 1) * 5);
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
        $data = $request->validate([
            'grade_level' => 'required',
            'school_year' => 'required',
            'school_name' => 'required',
            'address' => 'required',
        ]);

        Education::create($data);
        return redirect()->route('education.index')->with('success', 'added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        //
        $data = $request->validate([
            'grade_level' => 'required',
            'school_year' => 'required',
            'school_name' => 'required',
            'address' => 'required',
        ]);
       
        $education->update($data);
        return redirect()->route('education.index')->with('success', 'updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
        $education->delete();
        return redirect()->route('education.index')->with('delete' , 'deleted successfully!');
    }
}
