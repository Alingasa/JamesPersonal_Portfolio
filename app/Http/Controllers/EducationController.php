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
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            $education = Education::simplePaginate(5);
        return view('pages.educations.index', compact('education'))->with('i', (request()->input('page', 1)- 1) * 5);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
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

        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                Education::create($data);
                return redirect()->route('education.index')->with('add_success', 'added successfully!');
            }else{
                abort(404);
            }
       
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
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
       if(empty(auth()->user()->role)){
        abort(404);
       }else{
        if(auth()->user()->role == 'admin'){
            $education->update($data);
            return redirect()->route('education.index')->with('update_success', 'updated successfully!');
        }else{
            abort(404);
        }
       }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
           }else{
            if(auth()->user()->role == 'admin'){
                $education->delete();
        return redirect()->route('education.index')->with('delete' , 'deleted successfully!');
            }else{

            }
           }
       
    }
}
