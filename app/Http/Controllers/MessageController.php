<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(empty(auth()->user()->role)){
            abort(404, 'Not Found!');
        }else{
            if(auth()->user()->role == 'admin'){
                $message = Message::get();
       
                return view('pages.messages.index', compact('message'))->with('i');
            }else{
                return redirect()->back()->with('unauthorized', 'Unable to Access');
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
            abort(404, 'Not Found!');
        }else{
            if(auth()->user()->role){
                abort(404);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        Message::create($data);
       return redirect()->to('http://localhost:8000/')->with('sent_success', 'message sent successfully');
      
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404, 'Not Found!');
        }else{
            if(auth()->user()->role){
               abort(404);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404, 'Not Found!');
        }else{
            if(auth()->user()->role){
               abort(404);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404, 'Not Found!');
        }else{
            if(auth()->user()->role){
               abort(404);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $message->delete();
                return redirect()->route('messages.index')->with('delete', 'deleted successfully');
            }else{
                return redirect()->back()->with('unauthorized', 'Unable to Access');
            }
        }
      
    }
}
