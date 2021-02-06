@extends('layouts.app')

@section('page-content')
 
 <div class="block">
                 <!-- Basic Wizard Title -->
                 <div class="block-title">
                    <h2><strong>User Profile</strong> Completion</h2>
                 </div>
                 <!-- END Basic Wizard Title -->

                     <!-- Second Step -->
                         <form id="basic-wizard" action="{{route('user.complete_profile4', $profile->user_id)}}" method="post" class="form-horizontal form-bordered ui-formwizard" enctype="multipart/form-data">
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

                    
                            

                             <div class="col-xs-2 active">
                                 <span>6. Experience </span>
                             </div>
                            
                      
                         </div>
                     </div>

                         <input type="hidden" name="emp_id" value="{{$profile->id}}" >
 

                     <div class="form-group">
                               <label class="col-md-4 control-label">Title</label>
                               <div class="col-md-6">
                       <input type="text" name="title" class="form-control" placeholder="Your title/position">
                     </div>
                  </div>  

                 <div class="form-group">
                               <label class="col-md-4 control-label">Organization</label>
                               <div class="col-md-6">
                       <input type="text" name="organization" class="form-control" placeholder="Organization">
                     </div>
                  </div>
         

          <div class="form-group">
                               <label class="col-md-4 control-label">Salary</label>
                               <div class="col-md-6">
                       <input type="number" name="salary" class="form-control" placeholder="salary">
                     </div>
                  </div>
    
     <div class="form-group">
                               <label class="col-md-4 control-label">Currency</label>
                               <div class="col-md-6">
                       <input type="text" name="unit" class="form-control" placeholder="Currency">
                     </div>
                  </div>  

     <div class="form-group">
                               <label class="col-md-4 control-label">Supervisor</label>
                               <div class="col-md-6">
                       <input type="text" name="supervisor" class="form-control" placeholder="Supervisor">
                     </div>
                  </div>

     <div class="form-group">
                               <label class="col-md-4 control-label">Superviser Email</label>
                               <div class="col-md-6">
                       <input type="text" name="supervisor_email" class="form-control" placeholder="Superviser Email">
                     </div>
                  </div>
     <div class="form-group">
                               <label class="col-md-4 control-label">Number of Staff</label>
                               <div class="col-md-6">
                       <input type="number" name="numberOfStaff" class="form-control" placeholder="Number of Staff">
                     </div>
                  </div>


 

                       <div class="form-group">
                                 <label class="col-md-4 control-label">Date From</label>
                                 <div class="col-md-6">
                                 <input type="text" name="from" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" >

                           </div>
                       </div> 

                        <div class="form-group">
                                 <label class="col-lg-4 control-label">Date To: <input  onclick ="experience();" id="to_date" type="checkbox" class="checkbox" style="float: right;" name="not_finished" value="not_finished" checked  /> (Still Working Here)  </label> 
                                 <div class="col-md-6">
                                 <input type="text" id="input_date" name="to" style="display: hidden;" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" >

                           </div>
                       </div>
                       
                     



                    
                      <div class="form-group">
                                 <label class="col-md-4 control-label">Reason for Leave</label>
                                 <div class="col-md-6">
                                    <textarea class="form-control" name="reasonOfLeaving" placeholder="reason of Leaving"></textarea>
                        </div>
                    </div>

             <div class="form-group">
                                 <label class="col-md-4 control-label">Description of Duties and Responsibilities </label>
                                 <div class="col-md-6">
                                    <textarea class="form-control" name="responsibilities" placeholder="Responsibilities"></textarea>
                        </div>
                    </div>

                     
                                             <!-- END Step Info -->
                                            
 
                                             <!-- Form Buttons -->
                                             <div class="form-group form-actions">

                                                 <div class="col-md-8 col-md-offset-4">
                                                     <button onclick="" class="btn btn-sm btn-warning ui-wizard-content ui-formwizard-button">Back</button>

                                                     <input type="submit" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button" id="next" value="Save and new record">
                                                     <a href="#" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button">Go to documents upload</a>
                                              @if($profile->user->experience->count()>1)
                                                     <a href="{{route('user.profile', $profile->user_id)}}" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button"> Go to Profile</a>
                                                @endif
                                                 </div>
                                             </div>
                                             <!-- END Form Buttons -->

                                         </div>
                                     </form>
                            
                                 
                                     <!-- END Basic Wizard Content -->


                                 </div>
                             
 
                          <!--    show educations -->

                                 <div class="block">

                                  <!-- Basic Wizard Title -->
                                  <div class="block-title">
                                     <h2><strong>{{$profile->user->name}}'s</strong> Experience</h2>
                                  </div>
                                  <!-- END Basic Wizard Title -->

                              <table class="table table-hover">

                                  <tr>
                                      <th>Title</th>
                                      <th>Organization</th>
                                      <th>Salary/Currency</th>
                                      <th> From</th>
                                      <th> To</th>
                                      
                                        
                                  </tr>

                                  @foreach($profile->user->experience as $experience)
                                  <tr>
                                      <td>  {{$experience->title}}</td>
                                      <td> {{$experience->organization}}</td>
                                      <td> {{$experience->salary}}/{{$experience->unit}}</td>
                                      <td> {{$experience->from}}</td>
                                      @if($experience->to !== null)
                                      <td> {{$experience->to}}</td>
                                      
                                      @else
                                      <td> Still working here</td>
                                      @endif
                                       
                                  </tr>
                                  @endforeach
                                  
                            </table>


                                 </div>



         <script type="text/javascript">
           function back()
           {

             window.history.go(-2)
           }


          function experience()
          {


            var status = document.getElementById('to_date');
             

            // if(status == 'not_finished'){
              if (status.checked == true){
               
              document.getElementById('input_date').style.visibility='hidden';
            }else {
              document.getElementById('input_date').style.visibility='visible';
               
            } 

          }

          experience();

         </script>

         @endsection