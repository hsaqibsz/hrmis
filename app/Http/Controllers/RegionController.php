<?php

namespace App\Http\Controllers;

use App\Region;
use Auth;
use Session;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = Region::all();

        return view('region.index', compact('region'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('region.create');
        
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
           
             'name' => 'required|unique:regions|max:255'
      
        ]);


        $region = new Region;

        $region->name = $request->name;

        $region->save();

        Session::flash('success', 'New region added');

        return redirect()->route('region.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $region = Region::where('id', $id)->first();

        return view('region.show', compact('region'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          $region = Region::where('id', $id)->first();

        return view('region.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              $validated = $request->validate([
           
             'name' => 'required|unique:regions|max:255'
      
        ]);

    $region = Region::where('id', $id)->first();

        $region->name = $request->name;

        $region->save();

        Session::flash('success', 'new region updated');

        return redirect()->route('region.index');   

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 

        $region = Region::where('id', $id)->first();

        $region->delete();
 

        Session::flash('success', 'New region deleted');

        return redirect()->back();   
    }
}
