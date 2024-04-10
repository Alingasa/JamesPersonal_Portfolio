<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller
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
            if(auth()->user()->role){
                $skill = Skill::simplePaginate(5);
                return  view('pages.skills.index', compact('skill'))->with('i', (request()->input('pages', 1)- 1) * 5);
        }
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
            if(auth()->user()->role){
                abort(404);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $data = $request->validate([
            'skill_name' => 'required',
            'percentage' => 'required',
        ]);
     if(empty(auth()->user()->role)){
        abort(404);
     }else{
        if(auth()->user()->role == 'admin'){
            Skill::create($data);
        return redirect()->route('skills.index')->with('add_success', 'added successfully');
        }else{
            return redirect()->back()->with('unauthorized', 'Unable to connect');
        }
     }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role){
                abort(404);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role){
                abort(404);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill): RedirectResponse
    {
        //
        $data = $request->validate([
            'skill_name' => 'required',
            'percentage' => 'required',
        ]);
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $skill->update($data);
                return redirect()->route('skills.index')->with('update_success', 'updated successfully!');
            }else{
                return redirect()->back()->with('unauthorized', 'Unable to connect');
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill): RedirectResponse
    {
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $skill->delete();
       
                return redirect()->route('skills.index')->with('delete', 'deleted successfully');
            }else{
                return redirect()->back()->with('unauthorized', 'Unable to connect');
            }
        }
       
    }
}
