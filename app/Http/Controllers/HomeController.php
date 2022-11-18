<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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
        $events = Event::all();
        return view('home',compact('events'));
    }
    
public function create()
{
return view ('create');
}

    public function store(Request $request )
    {
        $request->validate
        ([
            'email'=>'required',
            'subject'=>'required',
        ]);
        Event::create($request->all());
        return redirect()->route('home');
    }

    public function delete(Request $request)
    {
       $id = $request->id;
    $event = Event::find($id);
    $event->delete();
    return redirect()->route('home');
    }

    public function update( Request $request , $id)
    {

    }

    public function show($id)
    {

    }

}
