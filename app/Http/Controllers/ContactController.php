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
        $contact = User::get()->where('role', 'admin');
        
        return view('pages.contacts.index', compact('contact'));
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
        //
        // return 'hahah';
        // $data = $request->validate([
        //     'fb_url' => 'required',
        //     'instagram_url' => 'required',
        //     'linkedin_url' => 'required',
        //     'youtube_url' => 'required',
        //     'email' => 'required',
        //     'phone_number' => 'required',
        // ]);
        
        // if($data){
        //     return dd('hohaha');
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
