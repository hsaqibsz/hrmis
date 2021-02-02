@extends('layouts.app')

@section('page-content')

 <div class="block">
                 <!-- Basic Wizard Title -->
                 <div class="block-title">
                    <h2><strong>User Profile</strong> Completion</h2>
                 </div>
                 <!-- END Basic Wizard Title -->

                     <!-- Second Step -->
                         <form id="basic-wizard" action="{{route('user.complete_profile5', $profile->user_id)}}" method="post" class="form-horizontal form-bordered ui-formwizard" enctype="multipart/form-data">
                  @csrf
                  
                     <div id="second" class="step ui-formwizard-content"   style="display:  block;">
                         <!-- Step Info -->
                     <div class="wizard-steps" >
                         <div class="row">
                          

                             <div class="col-xs-2  done">
                                 <span><i class="fa fa-check"></i></span>                                     
                             </div>


                                <div class="col-xs-2  done ">
                                    <span><i class="fa fa-check"></i></span>             
                                </div>

                             <div class="col-xs-2 done">
                                <span><i class="fa fa-check"></i></span>  
                             </div>

                              <div class="col-xs-2 active">
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
                                            
 
                                             <!-- Form Buttons -->
                                             <div class="form-group form-actions">

                                                 <div class="col-md-8 col-md-offset-4">
                                                     <button onclick="" class="btn btn-sm btn-warning ui-wizard-content ui-formwizard-button">Back</button>

                                                     <input type="submit" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button" id="next" value="Next">
                                                 </div>
                                             </div>
                                             <!-- END Form Buttons -->


                                         </div>
                                     </form>
 

                                         <!-- END Second Step -->

                             

                                 
                                     <!-- END Basic Wizard Content -->
                                 </div>
         <script type="text/javascript">
           function back()
           {

             window.history.go(-1)
           }
         </script>
         @endsection