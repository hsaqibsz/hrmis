@extends('layouts.app')
 

@section('page-content')
 
<div id="page-content">

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
                                <!-- Widget -->
                                <a href="page_widgets_stats.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background animation-fadeIn">
                                            <img src="{{$user->profile->avatar}}" class="pull-right img-circle" width="70px" height="70"  >
                                        </div>
                                        <div class="pull-right">
                                            <!-- Jquery Sparkline (initialized in js/pages/index.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                                            <span id="mini-chart-brand"><canvas width="176" height="64" style="display: inline-block; width: 176px; height: 64px; vertical-align: top;"></canvas></span>
                                        </div>
                                        <h3 class="widget-content animation-pullDown visible-lg">
                                        <h3 class="bold">{{$user->name}} &nbsp; {{$user->lastname}}</h3><br>
                                           @if($profile->position_id !==null) <span class="headline">{{$profile->position->name}}</span> @endif
                                           @if($profile->region_id !==null) <span class="headline">&nbsp; <i class="fa fa-map-marker" aria-hidden="true"></i> {{$profile->region->name}}/</span> @endif
                                           @if($profile->province_id !==null) <span class="headline">{{$profile->province->name}}</span> @endif
                                          
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>

     




                            <div class="col-sm-6 col-lg-3">
                                <!-- Widget -->
                                <a href="{{route('user.register.new')}}" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                                            <i class="fa fa-edit header-icon"  ></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            Edit <strong>Profile</strong><br>
                                            <small>HRM - ORD</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                            
                            <div class="col-sm-6 col-lg-3">
                                <!-- Widget -->
                                <a href="{{route('user.register.new')}}" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                            <i class="gi gi-briefcase header-icon"  ></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                           New <strong>Education</strong><br>
                                            <small>HRM - ORD</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                            
                        
                            <div class="col-sm-6 col-lg-3">
                                <!-- Widget -->
                                <a href="page_ready_inbox.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn ">
                                            <i class="gi gi-upload header-icon"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            5 <strong>Upload Docs</strong>
                                            <small>ORD-Cloud</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <!-- Widget -->
                                <a href="page_comp_gallery.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                                            <i class="fa fa-file-pdf-o header-icon"></i>
                                        </div>
                                        <h3 class="widget-content text-center animation-pullDown">
                                             <strong>HR Info File</strong>
                                            <small>ORD-Cloud</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                       
                        </div>

 <!-- Page content -->
 
    

 
 


 
<div class="block">
  <div class="block-title"><h4>Human Resource Information Form</h4> </div>
<p>
<table class="table table-hover">
    <tr class="hr-info-header"> <td colspan="2"> Personal Information </td></tr>
    <tr><td>Full Name</td><td>{{$user->name}} &nbsp; {{$user->lastname}}</td></tr>
    <tr><td>Father's Name</td><td>{{$profile->father_name}}</td></tr>
    <tr><td>Gender</td><td>@if($profile->gender == 0) Female @else Male @endif</td></tr>
    <tr><td>Marital Status</td><td>@if($profile->marital_status == 0) Single @else Married @endif</td></tr>
    <tr><td>Nationality</td><td>{{$profile->nationality}}</td></tr>
    <tr><td>NIC/Tazkera No</td><td>{{$profile->NIC_No}}</td></tr>
<tr><td>Passport No</td><td>@if($profile->passport !== null) {{$profile->passport}} @else Nill @endif</td></tr>
    <tr><td>Contact Person</td><td>{{$profile->contact_person_name}}</td></tr>
    
    <tr class="hr-info-header"> <td colspan="2"> Contact Information and Current/Permanent Address </td></tr>
    <tr><td>Email Address</td><td>{{$user->email}}</td></tr>
    <tr><td>Mobile Number</td><td>{{$profile->phone}}</td></tr>
    <tr><td>Alternative/Contact Person Mobile Number</td><td>@if($profile->contact_person_mobile !== null) {{$profile->contact_person_mobile}} @else Nill @endif</td></tr>
    <tr><td>Current Location</td><td>{{$profile->current_village}}, {{$profile->current_district}}, {{$profile->current_province}}</td></tr>
    <tr><td>Current Location</td><td>{{$profile->permanent_village}}, {{$profile->permanent_district}}, {{$profile->permanent_province}}</td></tr>
    
</table>


{{--  Education --}}
<table class="table table-hover">
<tr class="hr-info-header"> <td colspan="6"> Education </td></tr>

<tr>
<th>SN</th>
<th>Degree</th>
<th>Universty/College</th>
<th>Location</th>
<th> From</th>
<th> To</th>


</tr>

@foreach($profile->user->education as $education)
<tr>
<td>{{$loop->index + 1}}</td>
<td>{{$education->degree}}</td>
<td>{{$education->university}}</td>
<td>{{$education->location}}</td>
<td> {{$education->from}}</td>
<td> {{$education->to}}</td>

</tr>
@endforeach

</table>



{{--  previouse experience --}}
<table class="table table-hover">
<tr class="hr-info-header"> <td colspan="6"> Employment Record </td></tr>

<tr>
<th>Title</th>
<th>Organization</th>
<th>Salary/Currency</th>
<th> From</th>
<th> To</th>
<th> Actions</th>

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

<td class="text-center">
<div class="btn-group btn-group-xs">
    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Show Detials"><i class="fa fa-th-large"></i></a>
</div>
</td>
</tr>

@endforeach

</table>
</p>
</div>







 

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

<style>

.header-icon {
margin-top:15px !important;
}
.headline {
font-size: 16px;

}

.hr-info-header {
font-size: 16px;
font-weight: bold;
padding: 2px;
background-color: black;
color: white;
}
</style>
