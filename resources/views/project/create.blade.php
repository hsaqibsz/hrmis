@extends('layouts.app')

@section('page-content')

 
                                <!-- User Assist Block -->
                                <div class="block" >
                                    <!-- User Assist Title -->
                                    <div class="block-title">
                                        <h2><strong>Create new</strong> Project</h2>
                                    </div>
           <form id="basic-wizard" action="{{route('project.store')}}" method="post" class="form-horizontal form-bordered ui-formwizard">
               @csrf


                   <div class="form-group">
                     <label class="col-md-4 control-label" for="Name"> Name &nbsp; <span id="reqired_field">*</span></label>
                     <div class="col-md-6">
                     <input type="text" name="name" class="form-control" placeholder="Name of the project" value="{{ old('name') }}">
                 </div> 
             </div>            

             <div class="form-group">
                     <label class="col-md-4 control-label" for="Code"> Project Unique Number &nbsp; <span id="reqired_field">*</span></label>
                     <div class="col-md-6">
                     <input type="text" name="code" class="form-control" placeholder="code of the project" value="{{ old('code') }}">
                 </div> 
             </div>      

             <div class="form-group">
                 <label class="col-md-4 control-label" for="Start Date"> Start Date &nbsp; <span id="reqired_field">*</span></label>
                 <div class="col-md-6">
                    <input type="text" id="start_date" name="start_date" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{old('start_date')}}"> 
                 </div>
             </div> 

          <div class="form-group">
                 <label class="col-md-4 control-label" for="Completion Date"> Completion Date &nbsp; <span id="reqired_field">*</span></label>
                 <div class="col-md-6">
                    <input type="text" id="completion_date" name="completion_date" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{old('completion_date')}}"> 
                 </div>
             </div> 

             <div class="form-group">
                     <label class="col-md-4 control-label" for="benefeciaries"> Direct benefeciaries &nbsp; <span id="reqired_field">*</span></label>
                     <div class="col-md-6">
                     <input type="number" name="direct_benefeciaries" class="form-control" placeholder="direct_benefeciaries of the project" value="{{ old('direct_benefeciaries') }}">
                 </div> 
             </div>

           <div class="form-group">
                     <label class="col-md-4 control-label" for="D_staff"> Direct Staff &nbsp; <span id="reqired_field">*</span></label>
                     <div class="col-md-6">
                     <input type="number" name="D_staff" class="form-control" placeholder="Direct staff of the project" value="{{ old('D_staff') }}">
                 </div> 
             </div> 

            <div class="form-group">
                     <label class="col-md-4 control-label" for="s_staff"> Support Staff &nbsp; <span id="reqired_field">*</span></label>
                     <div class="col-md-6">
                     <input type="number" name="S_staff" class="form-control" placeholder="Support staff of the project" value="{{ old('S_staff') }}">
                 </div> 
             </div> 

           <div class="form-group">
                   <label class="col-md-4 control-label" for="donor">Select Donor</label>
                    <div class="col-md-6">
                     <select id="donor_id" name="donor_id" class="select-select2 select2-hidden-accessible" style="width: 100%;" data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
                         <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                        
                         @foreach($donors as $donor)
                           <option value="{{$donor->id}}"> {{$donor->name}} </option>
                         @endforeach
                     </select>

                     <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
                      <span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="PATRIP Foundation">PATRIP Foundation</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                 </div>
             </div>


             <div class="form-group">
                      <label class="col-md-4 control-label" for="T_Budget"> Total Project Budget &nbsp; <span id="reqired_field">*</span></label>
                      <div class="col-md-6">
                      <input type="number" name="Total_budget" class="form-control" placeholder="Support staff of the project" value="{{ old('Total_budget') }}">
                  </div> 
              </div>
            
             <div class="form-group">
                      <label class="col-md-4 control-label" for="T_Budget"> Total Salaries &nbsp; <span id="reqired_field">*</span></label>
                      <div class="col-md-6">
                      <input type="number" name="Total_salaries" class="form-control" placeholder="Support staff of the project" value="{{ old('Total_salaries') }}">
                  </div> 
              </div>             

              <div class="form-group">
                      <label class="col-md-4 control-label" for="currency">Select currency</label>
                       <div class="col-md-6">
                        <select id="currency_id" name="currency_id" class="select-select2 select2-hidden-accessible" style="width: 100%;" data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                           
                            @foreach($currencies as $currency)
                              <option value="{{$currency->id}}"> {{$currency->name}} </option>
                            @endforeach
                        </select>

                        <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
                         <span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="PATRIP Foundation">AFN</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>

        <div class="form-group">
                 <label class="col-md-4 control-label" for="location"> Project Location &nbsp; <span id="reqired_field">*</span></label>
                 <div class="col-md-6">
               
                 <textarea name="location" class="form-control" rows="8">{{old('location')}}</textarea>
             </div> 
         </div> 

       <div class="form-group">
                 <label class="col-md-4 control-label" for="description"> Project Description &nbsp; <span id="reqired_field">*</span></label>
                 <div class="col-md-6">
                 <textarea name="description" class="form-control" rows="8">{{old('description')}}</textarea>
             </div> 
         </div>
      
       <div class="form-group">
                 <label class="col-md-4 control-label" for="goals"> Project Goals/Objectives &nbsp; <span id="reqired_field">*</span></label>
                 <div class="col-md-6">
                 <textarea name="goals" class="form-control" rows="8">{{old('goals')}}</textarea>
             </div> 
         </div>

         <div class="form-group">
                 <label class="col-md-4 control-label" for="focal_point">Select focal point</label>
                  <div class="col-md-6">
                   <select id="focal_point_id" name="focal_point_id" class="select-select2 select2-hidden-accessible" style="width: 100%;" data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
                       <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                      
                       @foreach($users as $user)
                         <option value="{{$user->id}}"> {{$user->name}} </option>
                       @endforeach
                   </select>

                   <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
                    <span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="PATRIP Foundation">Hikmatullah SAQIB</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
               </div>
           </div>



 <div class="form-group">

   <div class="col-md-9 col-md-offset-3">
       <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>

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