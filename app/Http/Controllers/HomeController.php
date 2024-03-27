<?php

namespace App\Http\Controllers;

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
        
        return view('home', compact('users', 'totalAdmins'));
    }
    public function dashboard(){

        $totalAdmins = DB::table('users')->where('role', 'admin')->count();
            $totalSpectators = DB::table('users')->where('role', 'spectator')->count();

        return view('/dashboard.index', compact('totalAdmins', 'totalSpectators'));
    }
}
