<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'name' => 'required',
        ]);
       if(empty(auth()->user()->role)){
        abort(404);
       }else{
         if(auth()->user()->role == 'admin'){
            Category::create($data);
            return redirect()->route('blogs.index')->with('add_success', 'added successfully');
         }else{
            abort(404);
         }
       }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
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
    public function edit(Category $category)
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
    public function update(Request $request, Category $category)
    {
        //
        $data = $request->validate([
            'name' => 'required',
        ]);
        
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $category->update($data);
                return redirect()->route('blogs.index')->with('update_success', 'added successfully');
            }else{
                abort(404);
            }

        }
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $category->delete();
                return redirect()->route('blogs.index')->with('delete', 'added successfully');
            }else{
                abort(404);
            }
        }
        
    }
}
