<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
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
                $blog = Blog::with('category')->simplePaginate(5);
                $category = Category::simplePaginate(5);
                $cat = Category::pluck('name', 'id');
                return view('pages.blogs.index', compact('blog', 'category', 'cat'))->with('i', (request()->input('pages', 1) - 1)* 5);
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
        $data = $request->validate([
            'category_id' => 'required',
            'blog_image' => 'required',
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
        ]);
        
        if($request->hasFile('blog_image')){
            $image = $request->file('blog_image');
            $imagePath = $image->store('image', 'public');
            $data['blog_image'] = $imagePath;
        }
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                Blog::create($data);
                return redirect()->route('blogs.index')->with('add_success', 'added successfully');
            }else{
                abort(404);
            }
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
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
    public function edit(Blog $blog)
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
    public function update(Request $request, Blog $blog)
    {

        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'description' => 'required', 
        ]);

        if($request->hasFile('blog_image')){
            $image = $request->file('blog_image');
            $imagePath = $image->store('img', 'public');
            $data['blog_image'] = $imagePath;
        }else{
            $data['blog_image'] = $blog->blog_image;
        }

        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $blog->update($data);

                return redirect()->route('blogs.index')->with('update_success', 'updated successfully');
            }else{
                abort(404);
            }
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $blog->delete();
                return redirect()->route('blogs.index')->with('delete', 'added successfully');
            }else{
                abort(404);
            }
        }
       
    }
}
