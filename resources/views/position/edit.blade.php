@extends('layouts.app')

@section('page-content')

                                <!-- User Assist Block -->
                 <div class="block" >
                                    <!-- User Assist Title -->
                    <div class="block-title">
                        <h2><strong>Edit</strong> Position</h2>
                    </div>

           <form id="basic-wizard" action="{{route('position.update', $position->id)}}" method="post" class="form-horizontal form-bordered ui-formwizard">
            @csrf
             {{ method_field('patch') }}
              
 
                   <div class="form-group">
                     <label class="col-md-4 control-label" for="Name"> Name &nbsp; <span id="reqired_field">*</span></label>
                     <div class="col-md-6">
                     <input type="text" name="name" class="form-control" placeholder="Name of the position" value="{{ $position->name or old('position') }}">
                 </div> 
             </div> 


 <div class="form-group">

   <div class="col-md-9 col-md-offset-3">
       <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save changes</button>

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