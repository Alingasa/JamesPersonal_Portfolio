<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Interest;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Front_endController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = DB::table('users')->where('role', 'admin')->get();

        foreach ($users as $user) {
            $user->birth_date = Carbon::parse($user->birth_date)->isoFormat('MMMM DD, YYYY');
        }

        $interest = DB::table('interests')->get();
        $skill = DB::table('skills')->get();
        $experience = DB::table('experiences')->get();
        $education = DB::table('education')->get();
        $webinar = DB::table('webinars')->get();
        $blog = Blog::with('category')->get();

        return view('welcome',compact(
            'users', 
            'interest', 
            'skill', 
            'experience', 
            'education', 
            'webinar', 
            'blog'
        ));
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
