@extends('layouts.app')

@section('page-content')
<a href="{{route('pstaff.create')}}" data-animation="animation-stretchLeft">Add new user</a>
 <div id="page-content" style="min-height: 1631px;">

<div class="content-header">
<ul class="nav-horizontal text-center">
    <li class="active">
        <a href="javascript:void(0)"><i class="fa fa-home"></i> Home</a>
    </li>
    <li>
        <a href="javascript:void(0)"><i class="gi gi-charts"></i> Kabul Office Staff</a>
    </li>
    <li>
        <a href="javascript:void(0)"><i class="gi gi-briefcase"></i> Regions</a>
    </li>
    <li>
        <a href="javascript:void(0)"><i class="gi gi-briefcase"></i> Project Based</a>
    </li>
    <li>
        <a href="javascript:void(0)"><i class="fa fa-male"></i> Male Staff</a>
    </li>
    <li>
        <a href="javascript:void(0)"><i class="fa fa-female"></i> Femal Staff</a>
    </li>

    <li>
        <a href="javascript:void(0)"><i class="fa fa-cogs"></i> Settings</a>
    </li>
</ul>
</div>

  
@if($employees->count()>0)

<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="fa fa-check-circle"></i> Success</h4> <span>{{ $employees->count()}} &nbsp; employees vailable</span>
            </div>

    @endif

 
   <div class="block full">
                               <div class="block-title">
                                   <h2><strong>Datatables of</strong> Employees</h2>
                             
                               </div>

                               <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nihil eos, enim sequi ut maiores tenetur possimus libero facilis ducimus atque deleniti eaque ex culpa mollitia quia, quasi reprehenderit aut </p>
                               <div class="table-responsive">
                                   <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer"><div class="row"><div class="col-sm-6 col-xs-5"><div class="dataTables_length" id="example-datatable_length"><label><select name="example-datatable_length" aria-controls="example-datatable" class="form-control"><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="-1">All</option></select></label></div></div><div class="col-sm-6 col-xs-7"><div id="example-datatable_filter" class="dataTables_filter"><label><div class="input-group"><input type="search" class="form-control" placeholder="Search" aria-controls="example-datatable"><span class="input-group-addon"><i class="fa fa-search"></i></span></div></label></div></div></div><table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                                       <thead>
                                           <tr role="row">

                                            <th class="text-center sorting_asc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 58px;">ID</th>

                                            <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 89px;"><i class="gi gi-user"></i></th>

                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 112px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 112px;">Father Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Valid Thru: activate to sort column ascending" style="width: 211px;"> Valid Thru</th> {{-- management colleagues love to see the important dates prior other information --}}

                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 224px;">Title</th>

                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 211px;">Location</th>
                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 211px;">D or S</th>
                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 136px;">Actions</th></tr>

                                             


                                       </thead>
                                       <tbody>
                                            
                                  
           @foreach($pstaff as $emp)   
                     <tr role="row" class="odd">
                    <td class="text-center sorting_1">{{$loop->index + 1}}</td>

                             <td class="text-center"><img src="{{asset($emp->profile->avatar)}}" alt="avatar" class="img-circle" width="40" height="40"></td>

                             <td> {{$emp->name}}</td>
                             <td>{{$emp->profile->position->name}}</td>
                             <td><span class="label label-info">Central/Kabul</span></td>
                             <td><span class="label label-warning">2020-03-30</span></td>
                             <td class="text-center">
                                 <div class="btn-group">
                                     <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                     <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                     <a href="{{route('user.profile', $emp->id)}}" data-toggle="tooltip" title="" class="btn btn-xs btn-info" data-original-title="Show"><i class="fa fa-th-large"></i></a>
                                 </div>
                             </td>
                         </tr> 
           @endforeach
           
            </tbody>
                 </table><div class="row"><div class="col-sm-5 hidden-xs"><div class="dataTables_info" id="example-datatable_info" role="status" aria-live="polite"><strong>1</strong>-<strong>10</strong> of <strong>{{$employees->count()}}</strong></div></div><div class="col-sm-7 col-xs-12 clearfix"><div class="dataTables_paginate paging_bootstrap" id="example-datatable_paginate">
                    
                  {{ $employees->links() }}
                  </div></div></div></div>
             </div>
         </div>
 </div>
@endsection