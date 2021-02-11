@extends('layouts.app')

@section('page-content')

 <div class="block">
                                     <!-- Basic Wizard Title -->
    <div class="block-title">
        <h2><strong>User Profile</strong> Completion</h2>
    </div>
    <!-- END Basic Wizard Title -->

    <!-- Basic Wizard Content -->
    <form id="basic-wizard" action="{{route('documents.store', $profile->user_id)}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered ui-formwizard">
    @csrf
    
    <!-- First Step -->
        <div id="first" class="step ui-formwizard-content"  style="display:  block;"  >
        <!-- Step Info -->
            <div class="wizard-steps" >
         
                  <div class="row">

                    <div class="col-xs-2  done">
                        <span><i class="fa fa-check"></i></span>                                     
                    </div>

                    <div class="col-xs-2  done ">
                        <span><i class="fa fa-check"></i></span>             
                    </div>

                    <div class="col-xs-2 done">
                        <span><i class="fa fa-check"></i> </span>
                    </div>
                
                    <div class="col-xs-2  active">
                        <span>4. Documents  </span>
                    </div>
                </div>

            </div>
            <!-- END Step Info -->

            <div class="form-group">
                  <label class="col-md-4 control-label" for="Username">User Name</label>
                  <div class="col-md-6">
                        <input type="text" id="father_name"  value="{{$profile->user->name}}" name="user_id" class="form-control ui-wizard-content"  disabled='true'>
                  </div>
            </div>
            
            
       <div class="form-group">
            <label class="col-md-4 control-label" for="Category"> Category</label>
            <div class="col-md-6">
                <select id="category_id" name="category_id" class="form-control" data-placeholder="Choose a Category.." >
                  
                      <option value="1}" disabled="true">Select Category</option>
                  @foreach($Shared_categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select> 
            </div>
        </div>
         
        <div class="form-group">
            <label class="col-md-4 control-label" for="example-label">Label</label>
            <div class="col-md-6">
                <input type="text" id="label" name="label" class="form-control ui-wizard-content" placeholder="files label.." value="{{ old('label') }}" >
            </div>
        </div>     
            
      <div class="form-group">
            <label class="col-md-4 control-label" for="example-firstname">File </label>
            <div class="col-md-6">
            <input type="file" id="file" name="file" class="form-control ui-wizard-content"   title="file field is required!">
            </div>
      </div>  
            
      <div class="form-group">
      <label class="col-md-4 control-label" for="example-hard_file_address">hard_file_address in cabinet </label>
      <div class="col-md-6">
            <input type="text" id="hard_file_address" name="hard_file_address" class="form-control ui-wizard-content" placeholder="files hard_file_address.." value="{{ old('hard_file_address') }}" >
      </div>
      </div>     
            
    


        <div class="form-group form-actions">
            <div class="col-md-8 col-md-offset-4">
                <input type="reset" class="btn btn-sm btn-warning ui-wizard-content ui-formwizard-button" id="back" value="Back" disabled="disabled">
                <input type="submit" class="btn btn-sm btn-primary ui-wizard-content ui-formwizard-button" id="next" value="Save & Next">
                @if($user_documents->count()>1)
            <a href="{{route('user.profile', $profile->user_id)}}" class="btn btn-sm btn-success"> Go to Profile</a>
                @endif
            </div>
        </div>

                                             
            </div>
        </form>

            <!-- END First Step -->

        <!-- END Basic Wizard Content -->
    </div>




        <!--    show educations -->

<div class="block">

      <!-- Basic Wizard Title -->
      <div class="block-title">
      <h2><strong>{{$profile->user->name}}'s</strong> Documents</h2>
      </div>
      <!-- END Basic Wizard Title -->

      <table class="table table-hover">

      <tr>
            <th>SN</th>
            <th>Label</th>
            <th>Hard file location</th>
            <th>View</th>     
            <th>Actions</th>  
      </tr>

      @foreach($user_documents as $document)
      <tr>
      <td>{{$loop->index + 1}}</td>
      <td>{{$document->label}}</td>
            <td>{{$document->hard_file_address}}</td>
            <td><a href="{{$document->file}}"> View </a></td>
           
            </td>
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
           
</div>



<script type="text/javascript">
function back()
{

window.history.go(-1)
}
</script>

@endsection