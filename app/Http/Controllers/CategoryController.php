<?php

namespace App\Http\Controllers;

use App\Category;
use Auth;
use Session;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();

        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('category.create');
        
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
           
             'name' => 'required|unique:Categories|max:255'
      
        ]);


        $category = new Category;

        $category->name = $request->name;

        $category->save();

        Session::flash('success', 'New category added');

        return redirect()->route('category.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::where('id', $id)->first();

        return view('category.show', compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          $category = Category::where('id', $id)->first();

        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              $validated = $request->validate([
           
             'name' => 'required|unique:Categories|max:255'
      
        ]);

    $category = Category::where('id', $id)->first();

        $category->name = $request->name;

        $category->save();

        Session::flash('success', 'New category updated');

        return redirect()->route('category.index');   

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 

        $category = Category::where('id', $id)->first();

        $category->delete();
 

        Session::flash('success', 'New category deleted');

        return redirect()->back();   
    }
}
