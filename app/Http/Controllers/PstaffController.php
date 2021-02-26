<?php

namespace App\Http\Controllers;

use App\Pstaff;
use App\Project;
use Session;
use Illuminate\Http\Request;

class PstaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($project_id)
    {
        $project = Project::where('id', $project_id)->first();

        return view('hr.pstaff.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         
         
    $project = Project::where('id', $request->project_id)->first();
   
    /* first check whether the staff of this project is already completed or if the staff member is already charged */
    
       $validatedData = $request->validate([
                'user_id' => 'required|unique:pstaffs'
            ]);  

    /* scan contract upload */

        $file_contract_name = null;
        $contract_path = null;
        if ($request->scan_contract !== null) {
            $file_contract = $request->file('scan_contract');
            $file_contract_name = uniqid().$file_contract->getClientOriginalName();
            $path = base_path("public/uploads/hr/contract/".$project->code."/".date('Y')."/".date('M'));
            $file_contract->move($path, $file_contract_name);
     
        }
       
 
            $pstaff = new Pstaff;
            $pstaff->donor_id = $project->donor_id;
            $pstaff->project_id = $request->project_id;
            $pstaff->user_id = $request->user_id;
            $pstaff->region_id = $request->region_id;
            $pstaff->province_id = $request->province_id;
            $pstaff->position_id = $request->position_id;
            $pstaff->DorS = $request->DorS;
            $pstaff->title_this_project = $request->title_this_project;
            
        if($request->scan_contract !== null){
           $pstaff->scan_contract =  "uploads/hr/contract/".$project->code."/".date('Y')."/".date('M')."/".$file_contract_name;
          }else {
              Session::flash('danger', 'Please upload the scan copy of employment contract');
              return redirect()->back();
          }

          if($request->percentage !== null){
            $pstaff->percentage = $request->percentage;
          }else {
              $pstaff->percentage = 100;
          }
            $pstaff->salary = $request->salary;
            $pstaff->currency_id = $request->currency_id;
            $pstaff->start_date = $request->start_date;
            $pstaff->completion_date = $request->completion_date;

            $pstaff->save();
            
            Session::flash('success', 'Registered Successfully');

            return redirect(route('pstaff.show', $project->id))
            ->with('project', $project)
            ->with('pstaff', Pstaff::where('project_id', $request->project_id));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pstaff  $pstaff
     * @return \Illuminate\Http\Response
     */
    public function show($project_id)
    {
        $pstaff = Pstaff::where('project_id', $project_id)
                ->with('user')
                ->with('position')
                ->with('region')
                ->with('province')
                ->with('donor')
                ->with('project')
                ->with('currency')
                ->get();

        $project = Project::where('id', $project_id)->first();//to control the number of staff

        return view('hr.pstaff.index', compact('pstaff', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pstaff  $pstaff
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
 
        $pstaff = Pstaff::where('user_id', $user_id)
            ->with('user')
                ->with('position')
                ->with('region')
                ->with('province')
                ->with('donor')
                ->with('project')
                ->with('currency')
                ->first();
 return view('hr.pstaff.edit', compact('pstaff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pstaff  $pstaff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $project = Project::where('id', $request->project_id)->first();
   
    /* first check whether the staff of this project is already completed or if the staff member is already charged */
    
      /*  $validatedData = $request->validate([
                'user_id' => 'required|unique:pstaffs'
            ]);  */ 

    /* scan contract upload */

        $file_contract_name = null;
        $contract_path = null;
        if ($request->scan_contract !== null) {
            $file_contract = $request->file('scan_contract');
            $file_contract_name = uniqid().$file_contract->getClientOriginalName();
            $path = base_path("public/uploads/hr/contract/".$project->code."/".date('Y')."/".date('M'));
            $file_contract->move($path, $file_contract_name);
     
        }
       
 
            $pstaff = Pstaff::where('project_id', $request->project_id)
                     ->where('donor_id', $request->donor_id)
                     ->where('user_id', $user_id)
                     ->first();
            $pstaff->donor_id = $project->donor_id;
            $pstaff->project_id = $request->project_id;
            $pstaff->user_id = $request->user_id;
            $pstaff->region_id = $request->region_id;
            $pstaff->province_id = $request->province_id;
            $pstaff->position_id = $request->position_id;
            $pstaff->DorS = $request->DorS;
            $pstaff->title_this_project = $request->title_this_project;
            
        if($request->scan_contract !== null){
           $pstaff->scan_contract =  "uploads/hr/contract/".$project->code."/".date('Y')."/".date('M')."/".$file_contract_name;
          } 

          if($request->percentage !== null){
            $pstaff->percentage = $request->percentage;
          }else {
              $pstaff->percentage = 100;
          }
            $pstaff->salary = $request->salary;
            $pstaff->currency_id = $request->currency_id;
            $pstaff->start_date = $request->start_date;
            $pstaff->completion_date = $request->completion_date;

            $pstaff->save();
            
            Session::flash('success', 'Changes Saved Successfully');

            return redirect(route('pstaff.show', $request->project_id))
            ->with('project', $project)
            ->with('pstaff', Pstaff::where('project_id', $request->project_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pstaff  $pstaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pstaff $pstaff)
    {
        //
    }
}
