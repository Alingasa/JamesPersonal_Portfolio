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
        
        if(empty(auth()->user()->role)){
            abort(404, 'Not Found!');
        }else{
            if(auth()->user()->role == 'admin'){
                $user = User::simplePaginate(5);
                return view('users.index', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
            }else{
                return redirect()->back()->with('unauthorized', "Unable to connect");
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
        if(auth()->user()->role == 'admin'){
            $user = User::simplePaginate(5);
            return view('users.user_password.index', compact('user'))->with('i', (request()->input('page', 1)- 1) * 5);
        }else{
            return redirect()->back()->with('unauthorized', 'Unable to connect');
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

        if(empty(auth()->user()->role)){
            abort(404, 'Not Found!');
        }else {
            if(auth()->user()->role == 'admin'){
                User::create($data);
                return redirect()->route('user.index')->with('add_success', 'User created successfully.');
            }else{
                return redirect()->back()->with('unauthorized', "Unable to connect");
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
            if(auth()->user()->role == 'admin'){
                abort(404);
            }else{
                return redirect()->back()->with('unauthorized', "Unable to connect");
            }
        }
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

        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $user->update($data);

                return redirect()->route('user.create')->with('update_success', 'User created successfully.');
            }else{
                return redirect()->back()->with('unauthorized', "Unable to connect");
            }
        }
       
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

        if(empty(auth()->user()->role)){
           abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $user->update($data);
                return redirect()->route('user.index')->with('update_success', 'User created successfully.');
            }else{
                return redirect()->back()->with('unauthorized', "Unable to connect");
            }
          
        }
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        if(empty(auth()->user()->role)){

        }else{
            if(auth()->user()->role == 'admin'){
                $user->delete();
        
                return redirect()->route('user.index')
                ->with('delete','User deleted successfully');
            }else{
                return redirect()->back()->with('unauthorized', "Unable to connect");
            }
        
        }
    }

}
