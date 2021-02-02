<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Project;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function Gsearch(request $request)
    {


      
        if($request->search_table == "users"){

            $users = User::where('name', 'LIKE', '%'. $request->keywords.'%')
            ->orwhere('id', $request->user_id)->paginate(9);
            

           return view('hr.dashboard', compact('users'));

          }


        elseif ($request->search_table == 'projects') {

        $projects = Project::where('project_name', 'LIKE', '%'. $request->keywords.'%')
        ->orwhere('project_id', 'LIKE', '%'. $request->project_id .'%')->paginate(5);
        $project_count = $projects->count();

        if($project_count>0){
         Session::flash('success', $project_count.' '. 'records found!');
        }
        else{
         Session::flash('danger', ' No records found!');
        }
        

          return view('project.index', compact('projects'));
        } else{

        

        $projects = Project::where('project_name', 'LIKE', '%'. $request->keywords.'%')
        ->orwhere('project_id', 'LIKE', '%'. $request->project_id .'%')->paginate(5);
        $project_count = $projects->count();

        if($project_count>0){
         Session::flash('success', $project_count.' '. 'records found!');
        }
        else{
         Session::flash('danger', ' No records found!');
        }
        

          return view('project.index', compact('projects'));

        }


    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('welcome', compact('user'));
    }

    public function getUsers()
    {
        $users = User::all();

        return view('hr.users.index', compact('users'));
    }

    public function grantAdmin($id)
    {
         
        $user = User::where('id', $id)->first();
        $user->admin = 1;
        $user->save();
        return redirect()->back();

    }

    public function revokAdmin($id)
    {
        $user = User::where('id', $id)->first();
        $user->admin = 0;
        $user->save();
        return redirect()->back();
    }


    public function userEdit($id)
    {
        $user = User::where('id', $id)->first();

        return view('hr.users.edit', compact('user'));
    }

    public function usersUpdate (request $request, $id)
    {
       
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->province = $request->province;
 
        if($request->password !== null)
         {
            $user->password = bcrypt($request->password);
         }

         $user->save();

         return redirect()->route('getUsers');

    }


    public function userDelete($id)

    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->back();
    }

    public function addUser()
    {
          if (Auth::user()->admin = 0) {
            return redirect()->back();
        }

        return view('hr.users.addNew');
    }

    public function storeUser(request $request)
    {

        if (Auth::user()->admin = 0) {
            return redirect()->back();
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->province = $request->province;
 
        if($request->password !== null)
         {
            $user->password = bcrypt($request->password);
         }

         $user->save();

         return redirect()->route('getUsers');

    }
}
