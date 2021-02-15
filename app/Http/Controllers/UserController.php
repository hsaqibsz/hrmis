<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Task;
use App\User;
use App\Profile;
use App\Documents;
use App\Education;
use App\Experience;
use Illuminate\Http\Request;

class UserController extends Controller
{


  /*open register form*/

 



  public function new()
  {
    return view('auth.register');
  }
 
 public function employees()
 {
  $employees = User::paginate(10);
  
  return view('hr.employee.index', compact('employees'));

 }

  public function update(request $request, $id)
  {
    $validatedData = $request->validate([
            'father_name' => 'required',
            'marital_status' => 'required',
            'dob' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
        ]);
      
      /*section 2*/
       $profile = Profile::where('user_id', $id)->first();

      $profile->father_name = $request->father_name;
      $profile->marital_status = $request->marital_status;
      $profile->dob = $request->dob;
      $profile->nationality = $request->nationality;
      $profile->phone = $request->phone;
      $profile->gender = $request->gender;
      $profile->contact_person_name = $request->contact_person_name;
      $profile->contact_person_phone = $request->contact_person_phone;

      /*Section 3 uploads*/

         /*avatar*/
              $file_avatar_name = null;
              $avatar_path = null;
              if ($request->avatar !== null) {
                  $file_avatar = $request->file('avatar');
                  $file_avatar_name = uniqid().$file_avatar->getClientOriginalName();
                  $path = base_path("uploads/hr/avatar/".date('Y')."/".date('M'));
                  $file_avatar->move($path, $file_avatar_name);
           
              } 
       
       
              $profile->NIC_number = $request->NIC_number;
              $profile->passport_number = $request->passport_number;

            /*section 4 Address*/

            $profile->permanent_village = $request->permanent_village;
            $profile->permanent_district = $request->permanent_district;
            $profile->permanent_province = $request->permanent_province;
            $profile->current_province = $request->current_province;
            $profile->current_district = $request->current_district;
            $profile->current_village = $request->current_village;

            /*Section 5 Social links*/
            $profile->habit_interests = $request->habit_interests;
            $profile->it_skills = $request->it_skills;
            $profile->facebook = $request->facebook;
            $profile->twitter = $request->twitter;
            $profile->linked = $request->linked;

            $profile->department_id = $request->department_id;
            $profile->country = $request->country;
            $profile->region_id = $request->region_id;
            $profile->province_id = $request->province_id;
            $profile->position_id = $request->position_id;
            $profile->join_date = $request->join_date;
            $profile->expiry_date = $request->expiry_date;
            $profile->salary = $request->salary;
            //$profile->percentage_charged = $request->percentage_charged;
            $profile->bank_account_number = $request->bank_account_number;
          

          if($request->role !== null) {
              $profile->role = $request->role;
          }

            $profile->save();

            Session::flash('success', 'saved changes Successfully!');

            return redirect(route('user.profile', $profile->user_id));
  }

  public function edit($id)
  {
    
    $profile = Profile::where('user_id', $id)->first();

    return view('hr.users.edit', compact('profile'));
  }

  public function profile($id)
  {
    $user = User::where('id', $id)->first();
    $profile = Profile::with('position')
    ->with('region')
    ->with('province')
    ->first();

    return view('hr.users.complete_profile_st7', compact('user', 'profile'));
  }



  public function dashboard()
  {
    $users = User::paginate(9);

  
    return view('hr.dashboard', compact('users'));
  }

  public function sort($a)
  {

    $users = User::where('name', 'LIKE', '%'. $a )->paginate(9);

     
 
    return view('hr.dashboard', compact('users'));
  }



    public function register (Request $request)
    {
    	
        $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users|max:255',
            ]);

        $user = new User;

    	$user->name = $request->name;
    	$user->lastname = $request->lastname;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);    

    	$user->save();

if (!Auth::check()) {
    
    	Auth::login($user, true);
 }

   Session::flash('success', $user->name. 'has been registered successfully, please duly complete your profile!');



   $profile = new Profile;
   $profile->user_id = $user->id;
   $profile->save();

   if (Auth::user()->profile->role>1) {
   
     return view('hr.users.edit', compact('profile'));

   }else

   return redirect(route('user.complete_profile1', $user->id));


    }



    public function completeProfile1($id)
    {
        $profile = Profile::where('user_id', $id)->first();
         
        return view('hr.users.complete_profile_st1', compact('profile'));
    }  
  
 
  
 public function completeProfile2(request $request, $id)
    {
 
       $file_avatar_name = null;
        $avatar_path = null;
        if ($request->avatar !== null) {
            $file_avatar = $request->file('avatar');
            $file_avatar_name = uniqid().$file_avatar->getClientOriginalName();
            $path = base_path("public/uploads/hr/avatar/".date('Y')."/".date('M'));
            $file_avatar->move($path, $file_avatar_name);
     
        }


      $validatedData = $request->validate([
              'father_name' => 'required',
              'marital_status' => 'required',
              'dob' => 'required',
              'nationality' => 'required',
              'gender' => 'required',
          ]);
        
        $profile = Profile::where('user_id', $id)->first();
        
        if($request->avatar !== null){
        $profile->avatar =  "/uploads/hr/avatar/".date('Y')."/".date('M')."/".$file_avatar_name;
          
          } 
        $profile->father_name = $request->father_name;
        $profile->marital_status = $request->marital_status;
        $profile->dob = $request->dob;
        $profile->nationality = $request->nationality;
        $profile->phone = $request->phone;
        $profile->gender = $request->gender;
        $profile->contact_person_name = $request->contact_person_name;
        $profile->contact_person_phone = $request->contact_person_phone;


        
      $profile->permanent_village = $request->permanent_village;
      $profile->permanent_district = $request->permanent_district;
      $profile->permanent_province = $request->permanent_province;
      $profile->current_province = $request->current_province;
      $profile->current_district = $request->current_district;
      $profile->current_village = $request->current_village;

          $profile->habit_interests = $request->habit_interests;
      $profile->it_skills = $request->it_skills;
      $profile->facebook = $request->facebook;
      $profile->twitter = $request->twitter;
      $profile->linked = $request->linked;


        $profile->save();

        Session::flash('success', 'The Personal Information has been updated successfully, please duly complete the remaining parts');


        return view('hr.users.complete_profile_st2', compact('profile'));
    }


public function completeProfile3(request $request, $id)
  {

 
     $profile = Profile::where('user_id', $id)->first();
 


  $edu = new Education;
  $edu->user_id = $id;
  $edu->degree = $request->degree;
  $edu->university = $request->university;
  $edu->location = $request->location;
  $edu->from = $request->from;
  $edu->to = $request->to;
  $edu->completed = $request->completed;
 // $edu->deploma = '/uploads/deploma/'.date('Y')."/".date('M')."/".$file_name;

  $edu->save();

  Session::flash('success','Added Successfully, please add new record');
 
return redirect()->route('education.create', $id);
  }

  public function CreateEducation($id)
  {
  $profile = Profile::where('user_id', $id)->first();
  return view('hr.users.complete_profile_st2')->with(['profile' => $profile]);

  }

public function completeProfile4 (request $request, $id)
  {

     $profile = Profile::where('user_id', $id)->first();

 $exp = New Experience;
 $exp->user_id = $id;
 $exp->from = $request->from;
 $exp->to = $request->to;
 if($request->to == null)
 {
 $exp->not_finished = 1;
}
 $exp->title = $request->title;
 $exp->organization = $request->organization;
 $exp->salary = $request->salary;
 $exp->unit = $request->unit;
 $exp->supervisor = $request->supervisor;
 $exp->supervisor_email = $request->supervisor_email;
 $exp->numberOfStaff = $request->numberOfStaff;
 $exp->reasonOfLeaving = $request->reasonOfLeaving;
 $exp->responsibilities = $request->responsibilities;
 $exp->save();

  Session::flash('success','Added Successfully, please add new record');

//return view('hr.users.complete_profile_st6', compact('exp','profile'));
 
return redirect()->back()->with(['exp' => $exp, 'profile', $profile]);

  }


public function OpenExperience($id)
{

  $profile = Profile::where('user_id', $id)->first();
  return view('hr.users.complete_profile_st3_experience', compact('profile'));

}


public function CreateDocuments($id)
{
  $profile = Profile::where('user_id', $id)->first();
  $user_documents = Documents::where('user_id', $id)->get();

  return view('hr.users.complete_profile_st4_upload', compact('profile', 'user_documents'));
 
}

public function StoreDocuments(request $request, $id)
{

   

   $file_document_name = null;
        $document_path = null;
        if ($request->file !== null) {
            $file_document = $request->file('file');
            $file_document_name = uniqid().$file_document->getClientOriginalName();
            $path = base_path("public/uploads/hr/documents/".date('Y')."/".date('M'));
            $file_document->move($path, $file_document_name);
     
        }


      $validatedData = $request->validate([
              'label' => 'required',
              'category_id' => 'required'
             
          ]);
 
        
       

    $document = new Documents;
      $document->user_id = $id;
      $document->category_id = $request->category_id;
      $document->label = $request->label;
      $document->hard_file_address = $request->hard_file_address;
 if($request->file !== null){
        $document->file =  "/uploads/hr/documents/".date('Y')."/".date('M')."/".$file_document_name;
          
          } 

    $document->save();
    Session::flash('success', 'file uploaded successfully');

    $user_documents = Documents::where('user_id', $id)->get();
    return redirect()->back()->with(['user_documents' => $user_documents]);

}

  public function completeProfile8 ($id)
  {

    $profile = Profile::where('id', $id)->first();

    return view('hr.users.complete_profile_st7', compact('profile'));

  }

}
