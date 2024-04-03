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

        $blog = Blog::with('category')->get();
        $category = Category::get();
        $cat = Category::pluck('name', 'id');
        return view('pages.blogs.index', compact('blog', 'category', 'cat'))->with('i');
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
            'category_id' => 'required',
            'blog_image' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        
        if($request->hasFile('blog_image')){
            $image = $request->file('blog_image');
            $imagePath = $image->store('image', 'public');
            $data['blog_image'] = $imagePath;
        }
        Blog::create($data);
       return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
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
        ]);

        if($request->hasFile('blog_image')){
            $image = $request->file('blog_image');
            $imagePath = $image->store('img', 'public');
            $data['blog_image'] = $imagePath;
        }else{
            $data['blog_image'] = $blog->blog_image;
        }

        $blog->update($data);

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
