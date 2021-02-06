@extends('layouts.app')

@section('page-content')
 

<div class="block">
    <!-- Responsive Full Title -->
    <div class="block-title">
        <h2><strong>projects</strong> List</h2>
    </div>
    <!-- END Responsive Full Title -->

    <!-- Responsive Full Content -->
     
    <div class="table-responsive">
        <table class="table table-vcenter table-striped">
            <thead>
                <tr>
                     <th>No</th>
                    <th>Project Name</th>
                    <th>Project Budget</th>
                    <th>Project location</th>
                    <th>Completion date</th>
                    <th style="width: 150px;" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>

              @foreach($projects as $project)
                <tr>
                  
                    <td> {{$loop->index+1 }}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->Total_budget}}</td>
                    <td>{{$project->location}}</td>
                    <td>{{$project->completion_date}}</td>
                   
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="{{route('project.edit', $project->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-default "><i class="fa fa-pencil"></i></a>

                             <form method="post" action="{{route('project.destroy', $project->id)}}">
                               @csrf
                               {{method_field('DELETE')}}
                              <button type="submit"data-toggle="tooltip" title="Delete" class="btn btn-danger btn-sm text-center" style="max-width: 10px; min-height: 8px;"> <i class="fa fa-times pull-left"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
              @endforeach

              
            </tbody>
        </table>
    </div>
    <!-- END Responsive Full Content -->
</div>

@endsection



<style type="text/css">
    
#reqired_field {
    color: red;
    font-weight: bold;
}
</style>