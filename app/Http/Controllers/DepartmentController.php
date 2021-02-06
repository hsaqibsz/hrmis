<?php

namespace App\Http\Controllers;

use App\Department;
use Auth;
use Session;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::all();

        return view('department.index', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('department.create');
        
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
           
             'name' => 'required|unique:departments|max:255'
      
        ]);


        $department = new Department;

        $department->name = $request->name;

        $department->save();

        Session::flash('success', 'New department added');

        return redirect()->route('department.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::where('id', $id)->first();

        return view('department.show', compact('department'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          $department = Department::where('id', $id)->first();

        return view('department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              $validated = $request->validate([
           
             'name' => 'required|unique:departments|max:255'
      
        ]);

    $department = Department::where('id', $id)->first();

        $department->name = $request->name;

        $department->save();

        Session::flash('success', 'New Department updated');

        return redirect()->route('department.index');   

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 

        $department = Department::where('id', $id)->first();

        $department->delete();
 

        Session::flash('success', 'New department deleted');

        return redirect()->back();   
    }
}
