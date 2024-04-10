<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
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
            if(auth()->user()->role == 'admin'){
                $contact = User::get()->where('role', 'admin');
                return view('pages.contacts.index', compact('contact'));
            }else{
                abort(404);
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
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
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
    public function edit(Request $request, User $contact)
    {
        //
        $data = $request->validate([
            'fb_url' => 'required',
            'instagram_url' => 'required',
            'linkedin_url' => 'required',
            'youtube_url' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);
        
        if($data){
            $contact->update($data);
            return redirect()->route('contacts.index')->with('update_success', 'updated successfully!');
        }
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
    }
}
