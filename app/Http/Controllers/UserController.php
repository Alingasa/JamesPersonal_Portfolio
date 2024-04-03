<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::simplePaginate(5);
        return view('users.index', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = User::simplePaginate(5);
        return view('users.user_password.index', compact('user'))->with('i', (request()->input('page', 1)- 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $data = $request->validate([
            'role' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'min:8'],
        ]);
        
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public'); 
            $data['avatar'] = $avatarPath;
        } else {
       
            $data['avatar'] = null;
        }
        
      
        User::create($data);
        
        return redirect()->route('user.index')->with('success', 'User created successfully.');
        
        
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
    public function edit(Request $request,  User $user): RedirectResponse
    {
        //
        $data = $request->validate([
            'password' => 'required',
        ]);

        $user->update($data);

        return redirect()->route('user.create')->with('success', 'User created successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  User $user)
    {
        //
        $data = $request->validate([
            'role' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ]);
         
        if ($request->hasFile('avatar')) {
        
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public');  
            $data['avatar'] = $avatarPath;
        } else {
           
            $data['avatar'] = $user->avatar;
        }
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User created successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        
        return redirect()->route('user.index')
        ->with('delete','User deleted successfully');

    }

}
