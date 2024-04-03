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
        $skill = Skill::simplePaginate(5);
        return  view('pages.skills.index', compact('skill'))->with('i', (request()->input('pages', 1)- 1) * 5);
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
    public function store(Request $request): RedirectResponse
    {
        //
        $data = $request->validate([
            'skill_name' => 'required',
            'percentage' => 'required',
        ]);
     
        Skill::create($data);
        return redirect()->route('skills.index')->with('success', 'added successfully');
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
    public function update(Request $request, Skill $skill): RedirectResponse
    {
        //
        $data = $request->validate([
            'skill_name' => 'required',
            'percentage' => 'required',
        ]);

        $skill->update($data);
        return redirect()->route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill): RedirectResponse
    {
       $skill->delete();
       
       return redirect()->route('skills.index')->with('delete', 'deleted successfully');
    }
}
