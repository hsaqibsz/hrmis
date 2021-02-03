@extends('layouts.app')

@section('page-content')
 

 <!-- Page content -->
 <div id="page-content">
     <!-- User Profile Header -->
     <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
     <div class="content-header content-header-media">
         <div class="header-section">
             <img src="{{$user->profile->avatar}}" alt="Avatar" class="pull-right img-circle" width="90px">&nbsp; 

             <i class="hi hi-pencil"></i> @if(Auth::user()->profile->role >=2)<a  href="{{route('user.edit.profile', $user->id)}}">One Form Profile [For Admins Only]</a>@endif

              &nbsp; &nbsp; 
             <a href="{{route('user.complete_profile1', $user->id)}}" class="btn-link">Wizard Profile</a>
             <h1> {{$user->name}} {{$user->lastname}} <br><small>We found this user is {{$user->profile->position}} @ {{$user->profile->province}} Province </small></h1>
         </div>
         <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
         <img src="{{ asset('assets/admin/img/placeholders/headers/profile_header.jpg') }}" alt="header image" class="animation-pulseSlow">
     </div>
     <!-- END User Profile Header -->

     <!-- User Profile Content -->
     <div class="row">

               <!-- Second Column -->
         <div class="col-lg-5">
             <!-- Info Block -->
             <div class="block">
                 <!-- Info Title -->
                 <div class="block-title">
                     <div class="block-options pull-right">
                       <!--   <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Friend Request"><i class="fa fa-plus"></i></a>
                         <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Hire"><i class="fa fa-briefcase"></i></a> -->
                     </div>
                     <h2>About <strong>{{$user->name}} <span style="text-transform: uppercase;">{{$user->lastname}}</span></strong> <small>&bull; <i class="fa fa-file-text text-primary"></i> <a href="javascript:void(0)" data-toggle="tooltip" title="Download Bio in PDF">Bio</a></small></h2>
                 </div>
                 <!-- END Info Title -->

                 <!-- Info Content -->
                  <table class="table table-borderless table-striped">
                    <tr><td>Full Name:</td> <td>{{$user->name}} <span style="text-transform: uppercase;">{{$user->lastname}}</span></td></tr>
                    <tr><td>Position/Duty Station:</td> <td>{{$user->profile->position}}/{{$user->profile->province}}</td></tr>
                    <tr><td>Tazkera/Passport No:</td> <td>{{$user->profile->NIC_number}}/{{$user->profile->passport_number}}</td></tr>
                    <tr><td>Telphone/WhatsApp Number:</td> <td>{{$user->profile->phone}}</td></tr>
                    <tr><td>Email:</td> <td><a href="mailto:{{$user->email}}"> {{$user->email}}</a></td></tr>
                    <tr><td>Contact Person Name:</td> <td>{{$user->profile->contact_person_name}}</td></tr>
                    <tr><td>Contact Person Telphone Number:</td> <td>{{$user->profile->contact_person_phone}}</td></tr>
                    <tr><td>Habits and Interests:</td> <td>{{$user->profile->habit_interests}}</td></tr>
                    
                  </table>
                 <!-- END Info Content -->
             </div>
             <!-- END Info Block -->

             <!-- Photos Block -->
             <div class="block">
                 <!-- Photos Title -->
                 <div class="block-title">
                     <div class="block-options pull-right">
                         <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                     </div>
                     <h2>New Submitted Project <strong>Photos</strong> <small>&bull; <a href="javascript:void(0)">  Files of Photo's Category</a></small></h2>
                 </div>
                 <!-- END Photos Title -->

                 <!-- Photos Content -->
                 <div class="gallery" data-toggle="lightbox-gallery">
                     <div class="row">
                       photos gallery
                  
                     </div>
                 </div>
                 <!-- END Photos Content -->
       
             </div>
             <!-- END Photos Block -->

     
         </div>
         <!-- END Second Column -->
         <!-- First Column -->
       <div class="col-lg-7">
                                <!-- Orders Block -->
                                <div class="block">
                                    <!-- Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <span class="label label-success"><strong>Count Projects 4</strong></span>
                                        </div>
                                        <h2><i class="gi gi-briefcase"></i> <strong>Projects</strong> </h2>
                                    </div>
                                    <!-- END Orders Title -->

                                    <!-- Orders Content -->
                                                               
                                </div>
                                <!-- END Orders Block -->

                            
 

                                <!-- Private Notes Block -->
                                <div class="block full">
                                    <!-- Private Notes Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-file-text-o"></i> <strong>Planned/Completed Tasks</strong> created by {{$user->name}} and 
                                          @if($user->profile->gender !== 0)
                                            His 
                                            @else
                                            Her
                                            @endif
                                            Supervisor 
                                        </h2>
                                    </div>
                                    <!-- END Private Notes Title -->

                                    <!-- Private Notes Content -->
                                    @foreach($user->tasks as $task)

                                    <div class="alert  @if($task->status>0) alert-success @else alert-info  @endif  alert-dismissable">
                                                                           @if($task->status ==0)
                                                                                   @if(Auth::user()->id == $task->user_id)
                                                                                 <a href="{{route('task.mrkCompleted', $task->id)}}"  style="float: right;">Mark as Completed &nbsp; <i class="gi gi-check"></i> </a>
                                                                                 @else
                                                                                         <button class="btn btn-warning btn-outline pull-right" data-toggle="tooltip" title="only the owner of task can  mark his/her task as Completed"> Mark As completed</button>
                                                                                 @endif
                                                                           @endif

                                                                            <h4>@if($task->status>0) <i class="fa fa-check"></i> 

                                                                                @else <i class="fa fa-info-circle"></i> @endif {{$task->title}} 
                                                                                @if($task->status == 0)   Due Date  {{ date("M d, Y",strtotime($task->deadline)) }}   
                                                                               
                                                                               @else
                                                                              <span style="color: red;"> 
                                                                              Due Date:
                                                                               {{ date("M d, Y",strtotime($task->updated_at)) }} ({{$task->updated_at->diffForHumans()}})
                                                                                </span> <br>
                                        
                                                                            <span style="color: red;"> 
                                                                              Completion Date:
                                                                               {{ date("M d, Y",strtotime($task->updated_at)) }}  
                                                                                </span>
                                                                              @endif
                                                                            </h4>  

                                                                            Created By @if($task->user_id == $task->created_by && $task->user_id == Auth::user()->id) Me
                                                                             @elseif($task->user_id == $task->created_by && $task->user_id !== Auth::user()->id) 
                                                                           
                                                                           @if($user->profile->gender !== 0)
                                                                             Himself  
                                                                             @else
                                                                             Herself
                                                                             @endif

                                                                             @else  
                                                                             @foreach($users as $users)
                                                                                @if($users->id == $task->created_by)
                                                                                           <span style"color:red;">{{$users->name}}</span>
                                                                                @endif
                                                                             @endforeach  

                                                                            @endif

                                                                         <p>   {{$task->body}} </p>

                                                                        </div>



                                    @endforeach


                                 @if(Auth::user()->id == $user->id || Auth::user()->profile->role>=4)

                                   <span style="font-weight: bold; color: lightblue;"> 
                                    @if(Auth::user()->id == $user->id) Schedual New Task @else
                                    
                                  Assign  @if($user->profile->gender !== 0)
                                      Him  
                                      @else
                                      Her
                                      @endif
                                    with a new assignment

                                      @endif 

                                 

                                   </span>

                                    <form action="{{route('user.AddTask', $user->id)}}" method="post">
                                        @csrf

                                        <input type="text" value="{{$user->id}}" name="user_id" hidden="true">
                                        <label>Titel:<span style="color: red;">*</span></label>
                                                     <input type="text" name="title" class="form-control" placeholder="Tile" required="true">

                                                     <label>Body</label>
                                                     <textarea name="body" rows="10" class="form-control" ></textarea>

                                                     <label>Deadline</label>
                                                     <input type="date" name="deadline" class="form-control">
 
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Task/Note</button>
                                    </form>
                                    @endif
                                    <!-- END Private Notes Content -->
                                </div>
                                <!-- END Private Notes Block -->
                            </div>




     </div>
     <!-- END User Profile Content -->
 </div>
 <!-- END Page Content -->

@endsection

<script src="{{ asset('assets/admin/js/vendor/jquery.min.js') }}"></script>
 

  <script src="{{ asset('assets/admin/js/pages/tablesDatatables.js') }}"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>