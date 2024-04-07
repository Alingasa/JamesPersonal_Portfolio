<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard(){

        $totalAdmins = DB::table('users')->where('role', 'admin')->count();
        $totalSpectators = DB::table('users')->where('role', 'spectator')->count();
        $totalEducation = DB::table('education')->count();
        $totalInterests = DB::table('interests')->count();
        $totalSkills = DB::table('skills')->count();
        $totalExperience = DB::table('experiences')->count();
        $totalWebinar = DB::table('webinars')->count();
        $totalBlog = DB::table('blogs')->count();

        return view('/dashboard.index', compact(
            'totalAdmins', 
            'totalSpectators', 
            'totalEducation', 
            'totalInterests', 
            'totalSkills',
            'totalExperience',
            'totalWebinar',
            'totalBlog'
        ));
    }
}
