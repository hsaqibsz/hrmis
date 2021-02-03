@extends('layouts.app')

@section('page-content')

 
                                <!-- User Assist Block -->
                                <div class="block">
                                    <!-- User Assist Title -->
                                    <div class="block-title">
                                        <h2><strong>Create vertual board</strong> Tasks</h2>
                                    </div>
           <form id="basic-wizard" action="{{route('user.AddTask')}}" method="post" class="form-horizontal form-bordered ui-formwizard">
               @csrf
              
               <div class="form-group">
              <label class="col-md-4 control-label" for="Assign to">Select User</label>
               <div class="col-md-6">
                <select id="user_id" name="user_id" class="select-select2 select2-hidden-accessible" style="width: 100%;" data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                   
                    @foreach($users as $user)
                      <option value="{{$user->id}}"> @if(Auth::user()->id == $user->id) 
                        {{$user->name}} <span style="color: green; font-weight: bold;">(Me)</span>
                    @else
                         {{$user->name}}
                    @endif
                    </option>
                    @endforeach
                </select>

                <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
                	<span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="Hikmatullah SAQIB">Hikmatullah SAQIB</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>





 
                   <div class="form-group">
                     <label class="col-md-4 control-label" for="Title"> Title &nbsp; <span id="reqired_field">*</span></label>
                     <div class="col-md-6">
                     <input type="text" name="title" class="form-control" placeholder="Tile of the task" value="{{old('title')}}">
                 </div> 
             </div> 


                   <div class="form-group">
                     <label class="col-md-4 control-label" for="Body"> Details &nbsp; <span id="reqired_field">*</span></label>
                     <div class="col-md-6">
                     <textarea name="body" class="form-control" rows="12" name="body" placeholder="Details of the task"> {{old('body')}}</textarea>
                 </div> 
             </div>


             <div class="form-group">
                 <label class="col-md-4 control-label" for="Due Date"> Due Date &nbsp; <span id="reqired_field">*</span></label>
                 <div class="col-md-6">
                    <input type="text" id="deadline" name="deadline" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{old('profile')}}"> 
                 </div>
             </div>


<div class="form-group">
	<div class="col-md-6 center-block">
               <input type="submit" class="btn btn-primary" value="Schedual">
 
        </div>
        </div>

                           </form>

                                </div>
 
@endsection



<style type="text/css">
    
#reqired_field {
    color: red;
    font-weight: bold;
}
</style>