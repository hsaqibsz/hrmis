<?php

namespace App\Http\Controllers;

use App\Province;
use Auth;
use Session;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $province = Province::all();

        return view('province.index', compact('province'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('province.create');
        
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
           
             'name' => 'required|unique:provinces|max:255'
      
        ]);


        $province = new province;

        $province->name = $request->name;

        $province->save();

        Session::flash('success', 'New province added');

        return redirect()->route('province.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $province = Province::where('id', $id)->first();

        return view('province.show', compact('province'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          $province = Province::where('id', $id)->first();

        return view('province.edit', compact('province'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              $validated = $request->validate([
           
             'name' => 'required|unique:provinces|max:255'
      
        ]);

    $province = Province::where('id', $id)->first();

        $province->name = $request->name;

        $province->save();

        Session::flash('success', 'New province updated');

        return redirect()->route('province.index');   

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 

        $province = Province::where('id', $id)->first();

        $province->delete();
 

        Session::flash('success', 'New province deleted');

        return redirect()->back();   
    }
}
