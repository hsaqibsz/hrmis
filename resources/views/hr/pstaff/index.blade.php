@extends('layouts.app')

@section('page-content')
 

<div class="block">
    <!-- Responsive Full Title -->
    <div class="block-title">
    <h2><strong>{{$project->name}}</strong> Staff List  <small><span class="badge badge-info">{{$pstaff->count()}} out of {!! $project->D_staff + $project->S_staff !!} Registered</span></small> </h2> 
     @if($pstaff->count() <   $project->D_staff + $project->S_staff)
        <a href="{{route('pstaff.create', $project->id)}}" class="btn btn-alt btn-default pull-right" style="margin-right:10px;"><i class="fa fa-user-plus " style="font-size:18px;"></i></a> &nbsp; &nbsp; 
     @else
    <button class="btn btn-alt btn-default pull-right" style="margin-right:10px;" title="No more staff members can be charged in this project" disabled><i class="fa fa-user-plus " style="font-size:18px;"></i></button> &nbsp; &nbsp; 
     @endif
        <a href="#" class="btn btn-alt btn-default pull-right" data-toggle="tooltip" title="Download PDF" data-original-title="fa fa-cloud-download " style="display: inline-block;"><i class="fa fa-cloud-download fa-fw"></i></a>
    </div>
    <!-- END Responsive Full Title -->
 
    <!-- Responsive Full Content -->
       <div class="table-responsive">
        <table class="table table-vcenter table-striped">
            <thead>
                <tr>
                     <th>No</th>
                    <th>Full Name</th>
                    <th>F/Name</th>
                    <th>Title </th>
                    <th>Location <br> <small>(Region/Province)</small></th>
                    <th>Donor/Project</th>
                    <th>Type <br><small>(D = Direct, S= Support)</small></th>
                    <th>Gross Salary </th>
                    <th>Duration <br><small>(Start - Completion)</small></th>
                    <th>Status <br><small>(Active/Expired)</small></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

              @foreach($pstaff as $pstaff)
                <tr>
                  
                    <td> {{$loop->index+1 }}</td>
                    <td>{{$pstaff->user->name}} &nbsp; {{$pstaff->user->lastname}}</td>
                    <td>{{$pstaff->user->profile->fater_name}}</td>
                    <td>{{$pstaff->title_this_project}}</td>
                    <td>{{$pstaff->region->name}}/ {{$pstaff->province->name}}</td>
                    <td>{{$pstaff->donor->name}}/ {{$pstaff->project->name}}</td>
                    <td>@if($pstaff->DorS == 1) D @else  S @endif </td>
                    <td>{{$pstaff->salary}} &nbsp; {{$pstaff->currency->name}}</td>
                    <td>{{$pstaff->start_date}} &nbsp; {{$pstaff->completion_date}}</td>
                    <td>Active</td>
                   
                    <td class="text-center" colspan="2" >
                        <div class="btn-group btn-group-xs">
                            <a href="{{route('pstaff.edit', $pstaff->user_id)}}" data-toggle="tooltip" title="Edit" class="btn btn-default "><i class="fa fa-pencil"></i></a>
                            <a href="/"  data-toggle="tooltip" title="Download Employment Contract" class="btn btn-success" target="popup" onclick="window.open('{{asset("$pstaff->scan_contract")}}', 'Download Contract', 'with=400, min-heigh:400')"><i class="fa fa-cloud-download fa-fw"></i></a>
 
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

 