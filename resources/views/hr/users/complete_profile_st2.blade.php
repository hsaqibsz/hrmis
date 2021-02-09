@extends('layouts.app')

@section('page-content')
 
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
                             
                            <div class="col-xs-2  done ">
                                    <span><i class="fa fa-check"></i></span>             
                                </div>


                                <div class="col-xs-2 active">
                                    <span>2. Education</span>
                                </div>
                                
                                <div class="col-xs-2 ">
                                    <span>3. Experience </span>
                                </div>
                                
                            </div>
                        </div>

                         <input type="hidden" name="emp_id" value="{{$profile->id}}" >


                     <div class="form-group">
                               <label class="col-md-4 control-label">Degree</label>
                               <div class="col-md-6">
                       <input type="text" name="degree" class="form-control" placeholder="Master of Science in computer Science" value="{{old('degree')}}">
                     </div>
                  </div>



                  <div class="form-group">
                            <label class="col-md-4 control-label">Institution/University</label>
                            <div class="col-md-6">

                       <input type="text" name="university" class="form-control" placeholder="Kabul University" value="{{old('university')}}">
                   </div>
               </div>


                        <div class="form-group">
                                  <label class="col-md-4 control-label">Location</label>
                                  <div class="col-md-6">
                                    <input type="text" name="location" class="form-control" placeholder="Kabul, Afghanistan" value="{{old('location')}}">
                            </div>

                       <div class="form-group">
                                 <label class="col-md-4 control-label">Date From</label>
                                 <div class="col-md-6">
                                 <input type="text" name="from" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{old('from')}}" >

                           </div>
                       </div> 

                        <div class="form-group">
                                 <label class="col-md-4 control-label">Date to</label>
                                 <div class="col-md-6">
                                 <input type="text" name="to" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd"  value="{{old('to')}}" >

                           </div>
                       </div>
                       
                       <div class="form-group">
                                <label class="col-md-4 control-label">Completed?</label>
                                <div class="col-md-6">
                        <input type="radio" name="completed" value="1" @if($profile->competed == 1) selected @endif> Yes &nbsp; <input type="radio" name="completed" value="0" @if($profile->completed == 0) selected @endif > No <br>
                        </div>
                      </div>



                        <div class="form-group">
                                 <label class="col-md-4 control-label">Deploma</label>
                                 <div class="col-md-6">
                                    <input type="file" name="deploma" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                             <label class="col-md-4 control-label">Or Past URL, Deploma:</label>
                             <div class="col-md-6">
                        <input type="text" name="deploma" class="form-control" placeholder="https://www.kabulUniversity.edu.af/certificate/9494949">
                    </div>
                </div>

                <!-- END Step Info -->
            

                <!-- Form Buttons -->
                <div class="form-group form-actions">

                    <div class="col-md-8 col-md-offset-4">
                        <button onclick="" class="btn btn-sm btn-warning ui-wizard-content ui-formwizard-button">Back</button>

                        <input type="submit" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button" id="next" value="Save / Go to new Record">

                        <a href="{{route('user.OpenExperience', $profile->user_id)}}" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button" > Go to Experience</a>
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
            <h2><strong>{{$profile->user->name}}'s</strong> Educations</h2>
            </div>
            <!-- END Basic Wizard Title -->

        <table class="table table-hover">

            <tr>
                <th>SN</th>
                <th>Degree</th>
                <th>Universty/College</th>
                <th>Location</th>
                <th> From</th>
                <th> To</th>
                <th>Completed</th>
                <th>Deploma</th>  
            </tr>

            @foreach($profile->user->education as $education)
            <tr>
            <td>{{$loop->index + 1}}</td>
            <td>{{$education->degree}}</td>
                <td>{{$education->university}}</td>
                <td>{{$education->location}}</td>
                <td> {{$education->from}}</td>
                <td> {{$education->to}}</td>
                <td>@if($education->completed == 0) Not Completed @else Completed @endif</td>
            @if($education->completed !== 0)   <td><a href="{{$education->deploma}}">Download</a></td>@else<td> not available </td> @endif
            </tr>
            @endforeach
            
    </table>
           
</div>

         <script type="text/javascript">
           function back()
           {
             window.history.go(-2)
           }
         </script>
         @endsection