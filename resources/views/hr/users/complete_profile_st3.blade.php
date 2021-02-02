@extends('layouts.app')

@section('page-content')
<?php $step1=0; ?>
 <div class="block">
                                     <!-- Basic Wizard Title -->
                                     <div class="block-title">
                                        <h2><strong>User Profile</strong> Completion</h2>
                                     </div>
                                     <!-- END Basic Wizard Title -->

                                         <!-- Second Step -->
                                             <form id="basic-wizard" action="{{route('user.complete_profile4', ['id' => $profile->user_id])}}" method="post" class="form-horizontal form-bordered ui-formwizard" enctype="multipart/form-data">
                                      @csrf
                                      
                                         <div id="second" class="step ui-formwizard-content"   style="display:  block;">
                                             <!-- Step Info -->
                                         <div class="wizard-steps" >
                                             <div class="row">
                                              <div col-xs-1></div>

                                                 <div class="col-xs-2  done">

                                              
                                                     <span><i class="fa fa-check"></i></span>
                                                    
                                                 </div>


                                                    <div class="col-xs-2  done ">
                                                        <span><i class="fa fa-check"></i></span>             
                                                    </div>



                                                 <div class="col-xs-2 active">
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