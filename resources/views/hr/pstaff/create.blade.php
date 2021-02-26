
@extends('layouts.app')

@section('page-content')
 
 
    <!-- User Assist Block -->
    <div class="block" >
        <!-- User Assist Title -->
        <div class="block-title">
            <h2><strong>Add new</strong> Project Staff </h2>
        </div>
           <form id="basic-wizard" action="{{route('pstaff.store')}}" method="post"   class="form-horizontal form-bordered ui-formwizard" enctype="multipart/form-data">
               @csrf

               <div class="form-group">
                     <label class="col-md-4 control-label" for="example-firstname">Scan copy of contract *</label>
                     <div class="col-md-6">
                         <input type="file" id="scan_contract" name="scan_contract" class="form-control ui-wizard-content"  title="scan_contract field is required!">
                     </div>
                 </div>

           <input type="hidden" name="project_id" value="{{$project->id}}" >

            <div class="form-group">
            <label class="col-md-4 control-label" for="user">Select user</label>
            <div class="col-md-6">
                <select id="user_id" name="user_id" class="select-select2 select2-hidden-accessible" style="width: 100%;" data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                
                    @foreach($Shared_users as $user)
                    <option value="{{$user->id}}"> {{$user->name}} &nbsp; {{$user->lastname}} </option>
                    @endforeach
                </select>

                <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
                <span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="Hikmatullah SAQIB">Hikmatullah SAQIB</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>
           
            <div class="form-group">
            <label class="col-md-4 control-label" for="region">Select region</label>
            <div class="col-md-6">
                <select id="region_id" name="region_id" class="select-select2 select2-hidden-accessible" style="width: 100%;" data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                
                    @foreach($Shared_regions as $region)
                    <option value="{{$region->id}}"> {{$region->name}}   </option>
                    @endforeach
                </select>

                <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
                <span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="Central">Central</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>
      
        <div class="form-group">
        <label class="col-md-4 control-label" for="province">Select province</label>
        <div class="col-md-6">
            <select id="province_id" name="province_id" class="select-select2 select2-hidden-accessible" style="width: 100%;" data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
            
                @foreach($Shared_provinces as $province)
                <option value="{{$province->id}}"> {{$province->name}}   </option>
                @endforeach
            </select>

            <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
            <span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="Kabul">Kabul</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
    </div>
        
    <div class="form-group">
        <label class="col-md-4 control-label" for="province">Select position</label>
        <div class="col-md-6">
            <select id="position_id" name="position_id" class="select-select2 select2-hidden-accessible" style="width: 100%;" data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
            
                @foreach($Shared_positions as $position)
                <option value="{{$position->id}}"> {{$position->name}}   </option>
                @endforeach
            </select>

            <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
            <span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="Kabul">Kabul</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
    </div>

           

<div class="form-group">
    <label class="col-md-4 control-label" for="DorS"> Type &nbsp; <small>Direct or Support</small> <span id="reqired_field">*</span></label>
    <div class="col-md-6">
  <label>Direct  <input type="radio" name="DorS" id="DorS" value="1" checked onchange="percentage();"> </label> &nbsp; &nbsp; <label>Support  <input type="radio" name="DorS" id="DorS" onchange="percentage();" value="0"> </label>
    </div> 
</div>  

<div class="form-group" id="percentage" style="display: hidden !important;">
<label class="col-md-4 control-label" for="percentage">Select percentage</label>
<div class="col-md-6">
    <select   name="percentage" class="select-select2 select2-hidden-accessible" style="width: 100%; " data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
        
        <?php for ($i=1; $i <= 100; $i++) { ?>
<option value="<?PHP echo $i; ?>"> <?PHP echo $i; ?> &nbsp; % </option>
<?php   }  ?>
        
    </select>

    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
    <span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="100 %">100 %</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="title_this_project"> Title in this project &nbsp; <span id="reqired_field">*</span></label>
    <div class="col-md-6">
    <input type="text" name="title_this_project" class="form-control" placeholder="Title in this project" value="{{ old('title_this_project') }}">
</div> 
</div>            

{{-- <div class="form-group">
    <label class="col-md-4 control-label" for="scan_contrat"> Scan copy of employment contract &nbsp; <span id="reqired_field">*</span></label>
    <div class="col-md-6">
    <input type="file" name="scan_contrat" class="form-control" placeholder="scan contrat of the project" value="{{ old('scan_contrat') }}">
</div> 
</div>   --}}          
            

<div class="form-group">
    <label class="col-md-4 control-label" for="salary"> salary in contract &nbsp; <span id="reqired_field">*</span></label>
    <div class="col-md-6">
    <input type="number" name="salary" class="form-control" placeholder="salary of the project" value="{{ old('salary') }}">
</div> 
</div>            

    <div class="form-group">
        <label class="col-md-4 control-label" for="province">Select currency</label>
        <div class="col-md-6">
            <select id="currency_id" name="currency_id" class="select-select2 select2-hidden-accessible" style="width: 100%;" data-placeholder="Choose one.." tabindex="-1" aria-hidden="true">
                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
            
                @foreach($Shared_currencies as $currency)
                <option value="{{$currency->id}}"> {{$currency->name}}   </option>
                @endforeach
            </select>

            <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
            <span class="selection hidden"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" title="AFN">AFN</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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



<script>

              function percentage()
          {
            var status = document.getElementById('DorS');
            // if(status == 'not_finished'){
              if (status.value == 1){
               
              document.getElementById('percentage').style.visibility='hidden';
            }else {
              document.getElementById('percentage').style.visibility='visible';
               
            } 

          }

          percentage();

         </script>