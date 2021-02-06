<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use App\Profile;
use App\Task;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Session;

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
       
      /*  resume*/
              $file_resume_name = null;
              $resume_path = null;
              if ($request->resume!== null) {
                  $file_resume = $request->file('resume');
                  $file_resume_name = uniqid().$file_resume->getClientOriginalName();
                  $path = base_path("uploads/hr/resume/".date('Y')."/".date('M'));
                  $file_resume->move($path, $file_resume_name);
              
              }

         /*NIC*/
              $file_NIC_name = null;
              $NIC_path = null;
              if ($request->NIC!== null) {
                  $file_NIC = $request->file('NIC');
                  $file_NIC_name = uniqid().$file_NIC->getClientOriginalName();
                  $path = base_path("uploads/hr/NIC/".date('Y')."/".date('M'));
                  $file_NIC->move($path, $file_NIC_name);
              
              }

              /*passport*/
                   $file_passport_name = null;
                   $passport_path = null;
                   if ($request->passport!== null) {
                       $file_passport = $request->file('passport');
                       $file_passport_name = uniqid().$file_passport->getClientOriginalName();
                       $path = base_path("uploads/hr/passport/".date('Y')."/".date('M'));
                       $file_passport->move($path, $file_passport_name);
                   
                   }

              /*scan bank account card*/
                   $file_bank_account_card = null;
                   $card_path = null;
                   if ($request->scan_bank_account_card!== null) {
                       $file_bank_account_card = $request->file('scan_bank_account_card');
                       $file_scan_bank_account_card_name = uniqid().$file_bank_account_card->getClientOriginalName();
                       $path = base_path("uploads/hr/bankcard/".date('Y')."/".date('M'));
                       $file_bank_account_card->move($path, $file_bank_account_card);
                   
                   }



     

         if($request->avatar !== null){
                  $profile->avatar =  "/uploads/hr/avatar/".date('Y')."/".date('M')."/".$file_avatar_name;
                    
                    }    


          if($request->resume !== null){
                   $profile->resume =  "/uploads/hr/resume/".date('Y')."/".date('M')."/".$file_resume_name;
                     
                     }

          if($request->NIC !== null){
                   $profile->NIC =  "/uploads/hr/NIC/".date('Y')."/".date('M')."/".$file_NIC_name;
                     
                     }


          if($request->passport !== null){
                   $profile->passport =  "/uploads/hr/passport/".date('Y')."/".date('M')."/".$file_passport_name;
                     

                     }


          if($request->scan_bank_account_card !== null){
                   $profile->scan_bank_account_card =  "/uploads/hr/bankcard/".date('Y')."/".date('M')."/".$file_scan_bank_account_card_name;
                     

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
          
          
          if($request->bank_account_number !== null){
              $profile->bank_account_number = $request->bank_account_number;
              $profile->salary = $request->salary;
              $profile->currency = $request->currency;

              $profile->department = $request->department;
              $profile->country = $request->country;
              $profile->zone = $request->zone;
              $profile->province = $request->province;
              $profile->position = $request->position;
              $profile->join_date = $request->join_date;
              $profile->expiry_date = $request->expiry_date;
          }



          if($request->role !== null){
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

    return view('hr.users.complete_profile_st7', compact('user'));
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



   return redirect(route('user.complete_profile1', $user->id));


    }



    public function completeProfile1($id)
    {
        $profile = Profile::where('user_id', $id)->first();
         
        return view('hr.users.complete_profile_st1', compact('profile'));
    }  
  
 
  
 public function completeProfile2(request $request, $id)
    {

      $validatedData = $request->validate([
              'father_name' => 'required',
              'marital_status' => 'required',
              'dob' => 'required',
              'nationality' => 'required',
              'gender' => 'required',
          ]);
        
        $profile = Profile::where('user_id', $id)->first();
        $profile->father_name = $request->father_name;
        $profile->marital_status = $request->marital_status;
        $profile->dob = $request->dob;
        $profile->nationality = $request->nationality;
        $profile->phone = $request->phone;
        $profile->gender = $request->gender;
        $profile->contact_person_name = $request->contact_person_name;
        $profile->contact_person_phone = $request->contact_person_phone;
        $profile->save();

        Session::flash('success', 'The Personal Information has been updated successfully, please duly complete the remaining parts');


        return view('hr.users.complete_profile_st2', compact('profile'));
    }


    public function completeProfile3(Request $request, $id)
    {
 

   /*avatar*/
        $file_avatar_name = null;
        $avatar_path = null;
        if ($request->avatar !== null) {
            $file_avatar = $request->file('avatar');
            $file_avatar_name = uniqid().$file_avatar->getClientOriginalName();
            $path = base_path("public/uploads/hr/avatar/".date('Y')."/".date('M'));
            $file_avatar->move($path, $file_avatar_name);
     
        } 
 
/*  resume*/
        $file_resume_name = null;
        $resume_path = null;
        if ($request->resume!== null) {
            $file_resume = $request->file('resume');
            $file_resume_name = uniqid().$file_resume->getClientOriginalName();
            $path = base_path("public/uploads/hr/resume/".date('Y')."/".date('M'));
            $file_resume->move($path, $file_resume_name);
        
        }

   /*NIC*/
        $file_NIC_name = null;
        $NIC_path = null;
        if ($request->NIC!== null) {
            $file_NIC = $request->file('NIC');
            $file_NIC_name = uniqid().$file_NIC->getClientOriginalName();
            $path = base_path("public/uploads/hr/NIC/".date('Y')."/".date('M'));
            $file_NIC->move($path, $file_NIC_name);
        
        }

        /*passport*/
             $file_passport_name = null;
             $passport_path = null;
             if ($request->passport!== null) {
                 $file_passport = $request->file('passport');
                 $file_passport_name = uniqid().$file_passport->getClientOriginalName();
                 $path = base_path("public/uploads/hr/passport/".date('Y')."/".date('M'));
                 $file_passport->move($path, $file_passport_name);
             
             }



       $profile = Profile::where('user_id', $id)->first();

   if($request->avatar !== null){
            $profile->avatar =  "/uploads/hr/avatar/".date('Y')."/".date('M')."/".$file_avatar_name;
              
              }    


    if($request->resume !== null){
             $profile->resume =  "/uploads/hr/resume/".date('Y')."/".date('M')."/".$file_resume_name;
               
               }

    if($request->NIC !== null){
             $profile->NIC =  "/uploads/hr/NIC/".date('Y')."/".date('M')."/".$file_NIC_name;
               
               }


    if($request->passport !== null){
             $profile->passport =  "/uploads/hr/passport/".date('Y')."/".date('M')."/".$file_passport_name;
               

               }

    $profile->save();

    Session::flash('success', 'Step2 Files Uploaded successfully!');

  return view('hr.users.complete_profile_st3', compact('profile'));



    }



public function completeProfile4(request $request, $id)
  {

  
    
      $profile = Profile::where('user_id', $id)->first();

 
      $profile->permanent_village = $request->permanent_village;
      $profile->permanent_district = $request->permanent_district;
      $profile->permanent_province = $request->permanent_province;
      $profile->current_province = $request->current_province;
      $profile->current_district = $request->current_district;
      $profile->current_village = $request->current_village;

      $profile->save();

      Session::flash('success', 'Step3 Address Information has been saved successfully!');

      return view('hr.users.complete_profile_st4', compact('profile'));

  }

  public function completeProfile5 (request $request, $id)
  {
 
    $profile = Profile::where('user_id', $id)->first();

    $profile->habit_interests = $request->habit_interests;
    $profile->it_skills = $request->it_skills;
    $profile->facebook = $request->facebook;
    $profile->twitter = $request->twitter;
    $profile->linked = $request->linked;
    $profile->save();

Session::flash('success', 'Step4 Extra Information has been saved successfully!');


return view('hr.users.complete_profile_st5', compact('profile'));
  }  



public function completeProfile6 (request $request, $id)
  {

 
     $profile = Profile::where('user_id', $id)->first();
     $file_name = null;

  if($request->deploma !== null) {
      $file = $request->file('deploma');
      $file_name = uniqid().$file->getClientOriginalName();
      $file->move(base_path('/uploads/deploma'.date('Y')."/".date('M')), $file_name);    
    } 


  $edu = new Education;
  $edu->user_id = $id;
  $edu->degree = $request->degree;
  $edu->university = $request->university;
  $edu->location = $request->location;
  $edu->from = $request->from;
  $edu->to = $request->to;
  $edu->completed = $request->completed;
  $edu->deploma = '/uploads/deploma/'.date('Y')."/".date('M')."/".$file_name;

  $edu->save();

  Session::flash('success','Added Successfully, please add new record');

return view('hr.users.complete_profile_st5', compact('edu', 'profile'));
  }



public function OpenExperience($id)
{

 
  $profile = Profile::where('user_id', $id)->first();
  return view('hr.users.complete_profile_st6', compact('profile'));

}

public function completeProfile7 (request $request, $id)
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

return view('hr.users.complete_profile_st6', compact('exp','profile'));
  }



  public function completeProfile8 ($id)
  {

    $profile = Profile::where('id', $id)->first();

    return view('hr.users.complete_profile_st7', compact('profile'));

  }




}
