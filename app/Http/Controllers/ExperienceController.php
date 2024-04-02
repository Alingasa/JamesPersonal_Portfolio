<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $experience = Experience::get();

        return view('pages.experiences.index', compact('experience'))->with('i');
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
            'experience_image' => 'required',
            'experience_name' => 'required',
            'description' => 'required',
        ]);

       if($request->hasFile('experience_image')){
         $image = $request->file('experience_image');
         $imagePath = $image->store('img', 'public');
         $data['experience_image'] = $imagePath;
       } else {
        
        $data['experience_image'] = null;

       }

        Experience::create($data);
        
        return redirect()->route('experiences.index');
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
    public function update(Request $request, Experience $experience): RedirectResponse
    {
        //
        $data = $request->validate([
            'experience_name' => 'required',
            'description' => 'required',
        ]);
         
        if($request->hasFile('experience_image')){
            $image = $request->file('experience_image');
            $imagePath = $image->store('img', 'public');
            $data['experience_image'] = $imagePath;
        } else {
            $data['experience_image'] = $experience->experience_image;
        }
        
        $experience->update($data);
        return redirect()->route('experiences.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
        $experience->delete();
        
        return redirect()->route('experiences.index');
    }
}
