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
                                
                                    <span>01. General</span> 
                                </div>


                                <div class="col-xs-2">
                                    <span>2. Education</span>
                                </div>
                                
                                <div class="col-xs-2 ">
                                    <span>3. Experience </span>
                                </div>
                                
                            </div>
                        </div>
                        <!-- END Step Info -->
                    
                    <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Avatar </label>
                            <div class="col-md-6">
                                <input type="file" id="avatar" name="avatar" class="form-control ui-wizard-content"   title="Avatar field is required!">
                            </div>
                        </div>

                        
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


                        <!-- END Step Info -->

                        <div class="divider">Permanent Address</div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Permanent Village *</label>
                            <div class="col-md-6">
                                <input type="text" id="permanent_village"  value="{{$profile->permanent_village}}" name="permanent_village" class="form-control ui-wizard-content" placeholder="Your Parmanent Village."z>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Permanent district *</label>
                            <div class="col-md-6">
                                <input required type="text" id="permanent_district"  value="{{$profile->permanent_district}}" name="permanent_district" class="form-control ui-wizard-content" placeholder="Your Parmanent district.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Permanent Province *</label>
                            <div class="col-md-6">
                                <input required type="text" id="permanent_province"  value="{{$profile->permanent_province}}" name="permanent_province" class="form-control ui-wizard-content" placeholder="Your Parmanent province.">
                            </div>
                        </div>



                <div class="divider">Current Address</div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Current Village *</label>
                            <div class="col-md-6">
                                <input required type="text" id="current_village"  value="{{$profile->current_village}}" name="current_village" class="form-control ui-wizard-content" placeholder="Your Parmanent Village.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Current district *</label>
                            <div class="col-md-6">
                                <input required type="text" id="current_district"  value="{{$profile->current_district}}" name="current_district" class="form-control ui-wizard-content" placeholder="Your Parmanent district.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Current Province *</label>
                            <div class="col-md-6">
                                <input required type="text" id="current_province"  value="{{$profile->current_province}}" name="current_province" class="form-control ui-wizard-content" placeholder="Your Parmanent province.">
                            </div>
                        </div>


                                                                <div class="form-group">
                        <label class="col-md-4 control-label">Your Brief Bio with Habits and Interests</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="habit_interests" required="true">{{$profile->habit_interests}}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                            <label class="col-md-4 control-label" for="it_skills">IT Skills</label>
                            <div class="col-md-6">
                                <select id="it_skills" name="it_skills" class="form-control" data-placeholder="Choose a Category.." required="true">
                                        <option value="1">Poor</option>
                                        <option value="2">Fair</option>
                                        <option value="3">Good</option>
                                        <option value="4">Excellent</option>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-Linked">Linked In Profile</label>
                            <div class="col-md-6">
                                    <input type="text" id="linked"  value="{{$profile->linked}}" name="linked" class="form-control ui-wizard-content" placeholder="Your linked profile." required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-twitter">Twitter Profile</label>
                            <div class="col-md-6">
                                    <input type="text" id="twitter"  value="{{$profile->twitter}}" name="twitter" class="form-control ui-wizard-content" placeholder="Your twitter profile." required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-facebook">Fcebook Profile</label>
                            <div class="col-md-6">
                                    <input type="text" id="facebook"  value="{{$profile->facebook}}" name="facebook" class="form-control ui-wizard-content" placeholder="Your facebook profile." true>
                            </div>
                        </div>


                        <div class="form-group form-actions">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="reset" class="btn btn-sm btn-warning ui-wizard-content ui-formwizard-button" id="back" value="Back" disabled="disabled">
                                <input type="submit" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button" id="next" value="Save & Next">
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