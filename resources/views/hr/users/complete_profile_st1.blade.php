@extends('layouts.app')

@section('page-content')

 <div class="block">
                                     <!-- Basic Wizard Title -->
                                     <div class="block-title">
                                         <h2><strong>User Profile</strong> Completion</h2>
                                     </div>
                                     <!-- END Basic Wizard Title -->
 
                                     <!-- Basic Wizard Content -->
                                     <form id="basic-wizard" action="{{route('user.complete_profile2', $profile->user_id)}}" method="post" class="form-horizontal form-bordered ui-formwizard">
                                     	@csrf


                                         <!-- First Step -->
                                         <div id="first" class="step ui-formwizard-content"  style="display:  block;"  >
                                             <!-- Step Info -->
                                             <div class="wizard-steps" >
                                                 <div class="row">
                                                 	<div col-xs-1></div>
                                                     <div class="col-xs-2   active ">
                                                     
                                                         <span>1. Personal</span> 
                                                     </div>

                                                     <div class="col-xs-2">

                                                         <span>2. Upload</span>
                                                     </div>

                                                     <div class="col-xs-2">
                                                         <span>3. Address</span>
                                                     </div>
                                                    
                                                     <div class="col-xs-2">
                                                         <span>4. Extras</span>
                                                     </div>

                                                      <div class="col-xs-2">
                                                         <span>5. Education</span>
                                                     </div>
                                                     
                                                      <div class="col-xs-2 ">
                                                          <span>6. Experience </span>
                                                      </div>
                                                      
                                                 </div>
                                             </div>
                                             <!-- END Step Info -->
                                            
                                             <div class="form-group">
                                                 <label class="col-md-4 control-label" for="example-username">Father's Name</label>
                                                 <div class="col-md-6">
                                                     <input type="text" id="father_name"  value="{{$profile->father_name}}" name="father_name" class="form-control ui-wizard-content" placeholder="Your Father's name..">
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                     <label class="col-md-4 control-label"> Marital Status</label>
                                                     <div class="col-md-6">
                                                      Single:    <input type="radio" name="marital_status" value="0" @if($profile->marital_status == 0) checked @endif> &nbsp; &nbsp; 
                                                      married:    <input type="radio" name="marital_status" value="1" @if($profile->marital_status == 1) checked @endif> &nbsp; &nbsp; 
                                                     </div>
                                                 </div>


                                             <div class="form-group">
                                                 <label class="col-md-4 control-label" for="dob">Date of Birth</label>
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


                                               <div class="form-group form-actions">
                                                   <div class="col-md-8 col-md-offset-4">
                                                       <input type="reset" class="btn btn-sm btn-warning ui-wizard-content ui-formwizard-button" id="back" value="Back" disabled="disabled">
                                                       <input type="submit" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button" id="next" value="Next">
                                                   </div>
                                               </div>

                                             
                                         </div>
                                     </form>

                                         <!-- END First Step -->
 
                                     <!-- END Basic Wizard Content -->
                                 </div>
              
              <script type="text/javascript">
                function back()
                {

                  window.history.go(-1)
                }
              </script>

@endsection