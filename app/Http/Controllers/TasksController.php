<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;


class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function MarkCompleted($id)
 {
  $task = Task::where('id', $id)->first();
  $task->status = 1;
  $task->date_completed = date('Y-m-d');

  $task->save();

  Session::flash('success', $task->title.' '. 'marked as completed in the system');

  return redirect()->back();
 }




    public function AddTask(request $request)
    {
    

      $task = new Task;
      $task->user_id = $request->user_id;
      $task->created_by = Auth::user()->id;
      $task->title = $request->title;
      $task->body = $request->body;
      $task->deadline = $request->deadline;
      $task->save();

      Session::flash('success', 'Task Created Successfully');
      return redirect()->back();

    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::all();
        return view('task.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
