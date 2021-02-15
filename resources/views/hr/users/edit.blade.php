@extends('layouts.app')

@section('page-content')
 
 <div class="block">
                 <!-- Basic Wizard Title -->
                 <div class="block-title">
                    <h2><strong>User Profile</strong> Completion/Update</h2>
                 </div>
                 <!-- END Basic Wizard Title -->
                     <!-- Second Step -->
                         <form id="basic-wizard"  method="post" class="form-horizontal form-bordered ui-formwizard" action="{{route('user.update.profile', $profile->user_id)}}" enctype="multipart/form-data">
                   @csrf
                   
                  
                 <!--  Sttp one -->
                 <div class="form-group">
                     <label class="col-md-4 control-label" for="example-username"> Father's Name</label>
                     <div class="col-md-6">
                         <input type="text" id="father_name"  value="{{$profile->father_name}}" name="father_name" class="form-control ui-wizard-content" placeholder="Your Father's name..">
                     </div>
                 </div>

               <div class="form-group">
                         <label class="col-md-4 control-label"> Marital Status </label>
                         <div class="col-md-6">
                          Single:  <input type="radio" name="marital_status" value="0" @if($profile->marital_status == 0) checked @endif> &nbsp; &nbsp; 
                          married: <input type="radio" name="marital_status" value="1" @if($profile->marital_status == 1) checked @endif> &nbsp; &nbsp; 
                         </div>
                  </div>  


                 <div class="form-group">
                     <label class="col-md-4 control-label" for="dob"> Date of Birth</label>
                     <div class="col-md-6">
                        <input type="text" id="dob" name="dob" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{$profile->dob}}"> 
                     </div>
                 </div>


                 <div class="form-group">
                     <label class="col-md-4 control-label" for="example-username">Nationality</label>
                     <div class="col-md-6">
                         <input type="text" id="nationality" name="nationality" class="form-control ui-wizard-content" placeholder="Your nationality.." value="{{$profile->nationality}}" >
                     </div>
                 </div>     

                 <div class="form-group">
                     <label class="col-md-4 control-label" for="example-username">Phone Number</label>
                     <div class="col-md-6">
                         <input type="text" id="masked_phone" name="phone" class="form-control ui-wizard-content" placeholder="(999) 999-9999" value="{{$profile->phone}}">
                     </div>
                 </div>

                 <div class="form-group">
                         <label class="col-md-4 control-label"> Gender</label>
                         <div class="col-md-6">
                          Female:    <input type="radio" name="gender" value="0" @if($profile->gender == 0) checked @endif> &nbsp; &nbsp; 
                          Male:    <input type="radio" name="gender" value="1" @if($profile->gender == 1) checked @endif> &nbsp; &nbsp; 
                         </div>
                     </div>

                   <div class="form-group">
                       <label class="col-md-4 control-label" for="contact_person_name">Contact Person Name</label>
                       <div class="col-md-6">
                           <input type="text" id="contact_person_name" name="contact_person_name" class="form-control ui-wizard-content" placeholder="Your Contact Person Name.." value="{{$profile->contact_person_name}}" >
                       </div>
                   </div>   

                    <div class="form-group">
                       <label class="col-md-4 control-label" for="contact_person_phone">Contact Person's Phone</label>
                       <div class="col-md-6">
                           <input type="text" id="masked_phone" name="contact_person_phone" class="form-control ui-wizard-content" placeholder="(999) 999-9999" value="{{$profile->contact_person_phone}}">
                       </div>
                   </div>
                 <!--  Sttp one -->



                 <!-- step two -->
                 <!-- END Step Info -->
                 <div class="form-group">
                     <label class="col-md-4 control-label" for="example-firstname">Avatar *</label>
                     <div class="col-md-6">
                         <input type="file" id="avatar" name="avatar" class="form-control ui-wizard-content"  title="Avatar field is required!">
                     </div>
                 </div>
                  
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="example-firstname">CV/Resume</label>
                      <div class="col-md-6">
                          <input type="file" id="resume" name="resume" class="form-control ui-wizard-content">
                      </div>
                  </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="example-firstname">NIC No</label>
                      <div class="col-md-6">
                          <input type="Number" id="NIC_number" name="NIC_number" value="{{$profile->NIC_number}}" class="form-control ui-wizard-content">
                      </div>
                  </div>   

                   <div class="form-group">
                      <label class="col-md-4 control-label" for="example-firstname">Passport No</label>
                      <div class="col-md-6">
                          <input type="text" id="passport_number" name="passport_number" value="{{$profile->passport_number}}" class="form-control ui-wizard-content">
                      </div>
                  </div>


                  <div class="form-group">
                      <label class="col-md-4 control-label" for="example-firstname">Tazkera/NIC</label>
                      <div class="col-md-6">
                          <input type="file" id="NIC" name="NIC" class="form-control ui-wizard-content">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-md-4 control-label" for="example-firstname">Passport</label>
                      <div class="col-md-6">
                          <input type="file" id="passport" name="passport" class="form-control ui-wizard-content">
                      </div>
                  </div>     

               
                 <!-- step two -->
                   













                <!-- step three -->
                      <div class="divider">Permanent Address</div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="example-firstname">Permanent Village *</label>
                          <div class="col-md-6">
                               <input type="text" id="permanent_village"  value="{{$profile->permanent_village or old('permanent_village')}}" name="permanent_village" class="form-control ui-wizard-content" placeholder="Your Parmanent Village."z>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label" for="example-firstname">Permanent district *</label>
                          <div class="col-md-6">
                               <input required type="text" id="permanent_district"  value="{{$profile->permanent_district or old('permanent_district')}}" name="permanent_district" class="form-control ui-wizard-content" placeholder="Your Parmanent district.">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label" for="example-firstname">Permanent Province *</label>
                          <div class="col-md-6">
                               <input required type="text" id="permanent_province"  value="{{$profile->permanent_province}} or old('permanent_province')" name="permanent_province" class="form-control ui-wizard-content" placeholder="Your Parmanent province.">
                          </div>
                      </div>



                <div class="divider">Current Address</div>

                      <div class="form-group">
                          <label class="col-md-4 control-label" for="example-firstname">Current Village *</label>
                          <div class="col-md-6">
                               <input required type="text" id="current_village"  value="{{$profile->current_village or old('current_village')}}" name="current_village" class="form-control ui-wizard-content" placeholder="Your Parmanent Village.">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label" for="example-firstname">Current district *</label>
                          <div class="col-md-6">
                               <input required type="text" id="current_district"  value="{{$profile->current_district or old('current_district')}}" name="current_district" class="form-control ui-wizard-content" placeholder="Your Parmanent district.">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label" for="example-firstname">Current Province *</label>
                          <div class="col-md-6">
                               <input required type="text" id="current_province"  value="{{$profile->current_province or old('current_province')}}" name="current_province" class="form-control ui-wizard-content" placeholder="Your Parmanent province.">
                          </div>
                      </div>
                       
                <!-- step three -->








                <!-- step four -->
<div class="form-group">
    <label class="col-md-4 control-label">Your Brief Bio with Habits and Interests</label>
    <div class="col-md-6">
        <textarea class="form-control" name="habit_interests" required="true">{{$profile->habit_interests or old('habit_interests')}}</textarea>
    </div>
</div>


<div class="form-group">
        <label class="col-md-4 control-label" for="it_skills">IT Skills</label>
        <div class="col-md-6">
            <select id="it_skills" name="it_skills" class="form-control" data-placeholder="Choose a Category.." required="true">
                <option disabled="true">Select IT Skills</option>
                    <option value="1" @if($profile->it_skills == 1) selected="true" @endif>Poor</option>
                    <option value="2" @if($profile->it_skills == 2) selected="true" @endif>Fair</option>
                    <option value="3" @if($profile->it_skills == 3) selected="true" @endif>Good</option>
                    <option value="4" @if($profile->it_skills == 4) selected="true" @endif>Excellent</option>
            </select> 
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="example-Linked">Linked In Profile</label>
        <div class="col-md-6">
                <input type="text" id="linked"  value="{{$profile->linked or old('linked')}}" name="linked" class="form-control ui-wizard-content" placeholder="Your linked profile."  >
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="example-twitter">Twitter Profile</label>
        <div class="col-md-6">
                <input type="text" id="twitter"  value="{{$profile->twitter or old('twitter')}}" name="twitter" class="form-control ui-wizard-content" placeholder="Your twitter profile." >
        </div>
    </div>
    

    <div class="form-group">
        <label class="col-md-4 control-label" for="example-facebook">Fcebook Profile</label>
        <div class="col-md-6">
                <input type="text" id="facebook"  value="{{$profile->facebook or old('facebook')}}" name="facebook" class="form-control ui-wizard-content" placeholder="Your facebook profile."  >
        </div>
    </div>
                    
                <!-- step four -->
      
               
                  @if(Auth::user()->profile->role >=2)
   <div class="divider bold">HR/Admin Information Section</div>
 
 <div class="hr-section">
       <div class="form-group">
           <label class="col-md-4 control-label" for="example-facebook">Department</label>
           <div class="col-md-6">
              <select name="department_id" class="form-control"> 
             @foreach($Shared_departments as $department)                
                <option @if($profile->department_id ==  $department->id) selected @endif  value="{{$department->id}}">{{$department->name}}</option>
               @endforeach  
                </select>
             </div>
         </div> 

          <div class="form-group">
             <label class="col-md-4 control-label" for="example-facebook">Country</label>
             <div class="col-md-6">
                  <input type="text" id="country"  value="{{$profile->country or old('country')}}" name="country" class="form-control ui-wizard-content" placeholder="Afghanistan">
             </div>
         </div> 

         
        <div class="form-group">
            <label class="col-md-4 control-label" for="example-facebook">Region</label>
            <div class="col-md-6">
                <select name="region_id" class="form-control">  
            @foreach($Shared_regions as $region)               
                <option @if($profile->region_id == $region->id) selected @endif  value="{{$region->id}}">{{$region->name}}</option>
            @endforeach
                </select>
                </div>
            </div> 

        <div class="form-group">
            <label class="col-md-4 control-label" for="example-facebook">Province</label>
            <div class="col-md-6">
                <select name="province_id" class="form-control">  
            @foreach($Shared_provinces as $province)               
                <option @if($profile->province_id == $province->id) selected @endif  value="{{$province->id}}">{{$province->name}}</option>
            @endforeach
                </select>
                </div>
            </div> 

        <div class="form-group">
            <label class="col-md-4 control-label" for="example-facebook">Position</label>
            <div class="col-md-6">
                <select name="currency_id" class="form-control">  
            @foreach($Shared_currencies as $currency)               
                <option @if($profile->currency_id == $currency->id) selected @endif  value="{{$currency->id}}">{{$currency->name}}</option>
            @endforeach
                </select>
                </div>
            </div> 

 

    <div class="form-group">
        <label class="col-md-4 control-label" for="dob"> Join Date</label>
        <div class="col-md-6">
        <input type="text" id="join_date" name="join_date" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{$profile->join_date}}"> 
        </div>
    </div>  

<div class="form-group">
        <label class="col-md-4 control-label" for="dob"> Expiry Date</label>
        <div class="col-md-6">
        <input type="text" id="expiry_date" name="expiry_date" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{$profile->expiry_date}}"> 
        </div>
    </div>

    <div class="hr-section">
        <div class="form-group">
            <label class="col-md-4 control-label" for="example-facebook">Bank Account Numbers, separat by comma in case of multiple numbers<br> <small>Info:&nbsp;Upload the scan copy of bank account card under documents tab</small></label>
            <div class="col-md-6">
                    <input type="text" id="bank_account_number"  value="{{$profile->bank_account_number}}" name="bank_account_number" class="form-control ui-wizard-content" placeholder="006901100745209"  >
            </div>
        </div>  

 
        
        <div class="form-group">
            <label class="col-md-4 control-label" for="example-facebook">Salary Amount</label>
            <div class="col-md-6">
                    <input type="Number" id="salary"  value="{{$profile->salary}}" name="salary" class="form-control ui-wizard-content" placeholder="80000"  >
            </div>
        </div> 

     <div class="form-group">
            <label class="col-md-4 control-label" for="example-facebook">Currency</label>
            <div class="col-md-6">
                <select name="position_id" class="form-control">  
            @foreach($Shared_positions as $position)               
                <option @if($profile->position_id == $position->id) selected @endif  value="{{$position->id}}">{{$position->name}}</option>
            @endforeach
                </select>
                </div>
            </div>  

        </div>
    @endif

@if(Auth::user()->profile->role==4)
<div class="divider">Admin Section</div>
<div class="form-group role-section">
    <label class="col-md-4 control-label" for="example-facebook">Role</label>
    <div class="col-md-6">
            <select id="role" name="role" class="form-control" data-placeholder="Assign Role.." required="true">
            <option disabled="true">Select role</option>
                <option value="1" @if($profile->role == 0) selected="true" @endif>Guest</option>
                <option value="2" @if($profile->role == 1) selected="true" @endif>Reporter</option>
                <option value="3" @if($profile->role == 2) selected="true" @endif>HR/Admin</option>
                <option value="4" @if($profile->role == 3) selected="true" @endif>Senior/Management member </option>
                <option value="3" @if($profile->role == 4) selected="true" @endif>Developer</option>
            </select> 
    </div>
</div>

@endif
 
    <!-- Form Buttons -->
    <div class="form-group form-actions">

        <div class="col-md-8 col-md-offset-4">


            <input type="submit" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button" id="next" value="Save Changes">

            <a href="{{route('user.OpenExperience', $profile->user_id)}}" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button" > Add Experience</a>
        <a href="{{route('education.create', $profile->user_id)}}" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button"> Add Education</a>
            <a href="{{route('documents.create', $profile->user_id)}}" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button"> Upload Documents</a>
        </div>
    </div>
    <!-- END Form Buttons -->


</form>


<!-- END Basic Wizard Content -->
</div>



@endsection

         <style type="text/css">
           .hr-section {
            background-color: #1BBAE1;
            border-radius: 8px;
           }

           .role-section {
            background-color: lightgreen;
            border-radius: 8px;
           }
         </style>