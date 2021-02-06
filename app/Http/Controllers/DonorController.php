<?php

namespace App\Http\Controllers;

use App\Donor;
use Auth;
use Session;
use Illuminate\Http\Request;

class donorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donor = Donor::all();

        return view('donor.index', compact('donor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('donor.create');
        
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
           
             'name' => 'required|unique:donors|max:255'
      
        ]);


        $donor = new donor;

        $donor->name = $request->name;

        $donor->save();

        Session::flash('success', 'New donor added');

        return redirect()->route('donor.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donor = Donor::where('id', $id)->first();

        return view('donor.show', compact('donor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          $donor = Donor::where('id', $id)->first();

        return view('donor.edit', compact('donor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              $validated = $request->validate([
           
             'name' => 'required|unique:donors|max:255'
      
        ]);

    $donor = Donor::where('id', $id)->first();

        $donor->name = $request->name;

        $donor->save();

        Session::flash('success', 'New donor updated');

        return redirect()->route('donor.index');   

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 

        $donor = Donor::where('id', $id)->first();

        $donor->delete();
 

        Session::flash('success', 'New donor deleted');

        return redirect()->back();   
    }
}
