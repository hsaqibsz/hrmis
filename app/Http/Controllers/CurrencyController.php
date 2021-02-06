<?php

namespace App\Http\Controllers;

use App\Currency;
use Auth;
use Session;
use Illuminate\Http\Request;

class currencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currency = Currency::all();

        return view('currency.index', compact('currency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('currency.create');
        
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
           
             'name' => 'required|unique:currencies|max:255'
      
        ]);


        $currency = new currency;

        $currency->name = $request->name;

        $currency->save();

        Session::flash('success', 'New currency added');

        return redirect()->route('currency.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currency = Currency::where('id', $id)->first();

        return view('currency.show', compact('currency'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          $currency = Currency::where('id', $id)->first();

        return view('currency.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              $validated = $request->validate([
           
             'name' => 'required|unique:currencies|max:255'
      
        ]);

    $currency = Currency::where('id', $id)->first();

        $currency->name = $request->name;

        $currency->save();

        Session::flash('success', 'New currency updated');

        return redirect()->route('currency.index');   

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 

        $currency = Currency::where('id', $id)->first();

        $currency->delete();
 

        Session::flash('success', 'New currency deleted');

        return redirect()->back();   
    }
}
