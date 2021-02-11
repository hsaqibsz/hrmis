<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Project;
use App\User;
use App\Currency;
use Auth;
use Session;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $projects = Project::all();

       return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
      $users = User::all();
      $donors = Donor::all();
      $currencies = Currency::all();

      return view('project.create', compact('users', 'donors', 'currencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
 
       $project = new Project;
       $project->name = $request->name;
       $project->code = $request->code;
       $project->direct_benefeciaries = $request->direct_benefeciaries;
       $project->start_date = $request->start_date;
       $project->completion_date = $request->completion_date;
       $project->D_staff = $request->D_staff;
       $project->S_staff = $request->S_staff;
       $project->donor_id = $request->donor_id;
       $project->Total_budget = $request->Total_budget;
       $project->Total_salaries = $request->Total_salaries;
       $project->currency_id = $request->currency_id;
       $project->location = $request->location;
       $project->description = $request->description;
       $project->goals = $request->goals;
       $project->user_id = $request->user_id;

       $project->save();

       Session::flash('success', 'Project added to the system successfully');

       return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $project = Project::where('id', $id)->first();
       return view('project.show', compact('project'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $donors = Donor::all();
        $currencies = Currency::all();

        $project = Project::where('id', $id)->first();
        
        return view('project.edit', compact('project', 'users', 'donors', 'currencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $project = Project::where('id', $id)->first();
       $project->name = $request->name;
       $project->code = $request->code;
       $project->direct_benefeciaries = $request->direct_benefeciaries;
       $project->start_date = $request->start_date;
       $project->completion_date = $request->completion_date;
       
       $project->D_staff = $request->D_staff;
       $project->S_staff = $request->S_staff;
       $project->donor_id = $request->donor_id;
       $project->Total_budget = $request->Total_budget;
       $project->Total_salaries = $request->Total_salaries;
       $project->currency_id = $request->currency_id;
       $project->location = $request->location;
       $project->description = $request->description;
       $project->goals = $request->goals;
       $project->user_id = $request->user_id;

       $project->save();

       Session::flash('success', 'Changes saved in the system successfully');

       return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $project = Project::where('id', $id)->first();
      $project->delete();

      Session::flash('success', 'Deleted 1 record successfully');

      return redirect()->back();

    }
}
