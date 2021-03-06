<?php

namespace App\Http\Controllers;

use App\Position;
use Auth;
use Session;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = Position::all();

        return view('position.index', compact('position'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('position.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $validated = $request->validate([
           
             'name' => 'required|unique:positions|max:255'
      
        ]);


        $position = new Position;

        $position->name = $request->name;

        $position->save();

        Session::flash('success', 'New Position added');

        return redirect()->route('position.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $Position
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $position = Position::where('id', $id)->first();

        return view('position.show', compact('position'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $Position
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          $position = Position::where('id', $id)->first();

        return view('position.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $Position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              $validated = $request->validate([
           
             'name' => 'required|unique:positions|max:255'
      
        ]);

    $position = Position::where('id', $id)->first();

        $position->name = $request->name;

        $position->save();

        Session::flash('success', 'New Position updated');

        return redirect()->route('position.index');   

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $Position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 

        $position = Position::where('id', $id)->first();

        $position->delete();
 

        Session::flash('success', 'New Position deleted');

        return redirect()->back();   
    }
}
