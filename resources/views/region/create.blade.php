@extends('layouts.app')

@section('page-content')

 
                                <!-- User Assist Block -->
                                <div class="block" >
                                    <!-- User Assist Title -->
                                    <div class="block-title">
                                        <h2><strong>Create new</strong> Region</h2>
                                    </div>
           <form id="basic-wizard" action="{{route('region.store')}}" method="post" class="form-horizontal form-bordered ui-formwizard">
               @csrf
                   <div class="form-group">
                     <label class="col-md-4 control-label" for="Name"> Name &nbsp; <span id="reqired_field">*</span></label>
                     <div class="col-md-6">
                     <input type="text" name="name" class="form-control" placeholder="Name of the region" value="{{ old('region') }}">
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