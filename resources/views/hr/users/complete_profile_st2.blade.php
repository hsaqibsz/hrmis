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
                                             <form id="basic-wizard" action="{{route('user.complete_profile3', $profile->user_id)}}" method="post" class="form-horizontal form-bordered ui-formwizard" enctype="multipart/form-data">
                                     	@csrf
                                     	
                                         <div id="second" class="step ui-formwizard-content"   style="display:  block;">
                                             <!-- Step Info -->
                                         <div class="wizard-steps" >
                                             <div class="row">
                                             	<div col-xs-1></div>

                                                 <div class="col-xs-2  done">

                                              
                                                     <span><i class="fa fa-check"></i></span>
                                                    
                                                 </div>


                                                    <div class="col-xs-2  active ">
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
                                                 <label class="col-md-4 control-label" for="example-firstname">Avatar </label>
                                                 <div class="col-md-6">
                                                     <input type="file" id="avatar" name="avatar" class="form-control ui-wizard-content"   title="Avatar field is required!">
                                                 </div>
                                             </div>
                                              
                                              <div class="form-group">
                                                  <label class="col-md-4 control-label" for="example-firstname">CV/Resume</label>
                                                  <div class="col-md-6">
                                                      <input type="file" id="resume" name="resume" class="form-control ui-wizard-content">
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