<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\webinar;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WebinarController extends Controller
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
            if(auth()->user()->role){
                $webinar = webinar::simplePaginate(5);
                foreach ($webinar as $webinars) {
                    $webinars->date = Carbon::parse($webinars->date)->isoFormat('MMMM DD, YYYY');
                }
                return view('pages.webinars.index', compact('webinar'))->with('i', (request()->input('page', 1) -1) * 5);
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
                abort(404);
            }else{
                return redirect()->back()->with('unauthorized', 'Unauthorized Access');
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
            'host_name' => 'required',
            'agenda' => 'required|unique:webinars',
            'date' => 'required',
        ]);
        
        if($request->hasFile('webinar_image')){
            $image = $request->file('webinar_image');
            $imagePath = $image->store('img', 'public');
            $data['webinar_image'] = $imagePath;
        }
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                webinar::create($data);
                return redirect()->route('webinars.index')->with('add_success', 'added succesfully');
            }else{

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
    public function edit(string $id)
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, webinar $webinar): RedirectResponse
    {
        //
        $data = $request->validate([
            'host_name' => 'required',
            'agenda' => 'required',
        ]);

        if($request->hasFile('webinar_image')){
            $image = $request->file('webinar_image');
            $imagePath = $image->store('img', 'public');
            $data['webinar_image'] = $imagePath;
        }else{
            $data['webinar_image'] = $webinar->webinar_image;
        }

        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
        $webinar->update($data);
         return redirect()->route('webinars.index')->with('update_success', 'updated succesfully');
            }else{
                return redirect()->back()->with('unauthorized', "Unable to connect");
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(webinar $webinar): RedirectResponse
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
        $webinar->delete();
        return redirect()->route('webinars.index')->with('delete', 'deleted succesfully');
            }else{
                return redirect()->back()->with('unauthorized', "Unable to connect");
            }
        }
       
    }
}
