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
        $experience = Experience::simplePaginate(5);

        return view('pages.experiences.index', compact('experience'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'experience_image' => 'required',
            'experience_name' => 'required',
            'experience_link' => 'required',
        ]);

       if($request->hasFile('experience_image')){
         $image = $request->file('experience_image');
         $imagePath = $image->store('img', 'public');
         $data['experience_image'] = $imagePath;
       } else {
        
        $data['experience_image'] = null;

       }
       if(empty(auth()->user()->role)){
        abort(404);
       }else{
        if(auth()->user()->role == 'admin'){

            Experience::create($data);
            return redirect()->route('experiences.index')->with('add_success', 'added! successfully');
        }else{
            abort(404);
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
            
                abort(404);
            
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
            
                abort(404);
            
           }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience): RedirectResponse
    {
        //
        $data = $request->validate([
            'experience_name' => 'required',
            'experience_link' => 'required',
        ]);
         
        if($request->hasFile('experience_image')){
            $image = $request->file('experience_image');
            $imagePath = $image->store('img', 'public');
            $data['experience_image'] = $imagePath;
        } else {
            $data['experience_image'] = $experience->experience_image;
        }
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $experience->update($data);
                return redirect()->route('experiences.index')->with('update_success', 'updated successfully');
            }else{
                abort(404);
            }
        }
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $experience->delete();
        
                return redirect()->route('experiences.index')->with('delete', 'deleted successfully');
            }
        }
    }
}
