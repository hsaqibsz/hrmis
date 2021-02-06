@extends('layouts.app')

@section('page-content')

  <div id="page-content" style="min-height: 1631px;">
    <a href="{{route('user.register.new')}}" data-animation="animation-stretchLeft">Add new user</a>


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
                    <a href="javascript:void(0)"><i class="fa fa-pencil"></i> Profile</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-cogs"></i> Settings</a>
                </li>
            </ul>
        </div>
            <ul class="breadcrumb breadcrumb-top">
                <li>Human Resource</li>
                <li><a href="">Available Staff &nbsp; ({{$employees->count()}})</a></li>
            </ul>



                          <!-- Contacts Header -->
              <!--             <div class="content-header">
                              <div class="header-section">
                                  <h1>
                                      <i class="gi gi-parents"></i>ORD all employees<br><small>Get contact with any team member!</small>
                                  </h1>
                              </div>
                          </div>
                        -->
                          <!-- END Contacts Header -->

                          <!-- Main Row -->
                          <div class="row">
                              <div class="col-lg-12">
                                  <!-- Contacts Block -->
                                  <div class="block">
                                      <!-- Contacts Title -->
                                      <div class="block-title">
                                          <div class="block-options text-center">
                                              <a href="{{route('user.sort', 'a')}}" class="btn btn-sm btn-alt btn-default">A</a>
                                              <a href="{{route('user.sort', 'b')}}" class="btn btn-sm btn-alt btn-default">B</a>
                                              <a href="{{route('user.sort', 'c')}}" class="btn btn-sm btn-alt btn-default">C</a>
                                              <a href="{{route('user.sort', 'd')}}" class="btn btn-sm btn-alt btn-default">D</a>
                                              <a href="{{route('user.sort', 'e')}}" class="btn btn-sm btn-alt btn-default">E</a>
                                              <a href="{{route('user.sort', 'f')}}" class="btn btn-sm btn-alt btn-default">F</a>
                                              <a href="{{route('user.sort', 'g')}}" class="btn btn-sm btn-alt btn-default">G</a>
                                              <a href="{{route('user.sort', 'h')}}" class="btn btn-sm btn-alt btn-default">H</a>
                                              <a href="{{route('user.sort', 'i')}}" class="btn btn-sm btn-alt btn-default">I</a>
                                              <a href="{{route('user.sort', 'j')}}" class="btn btn-sm btn-alt btn-default">J</a>
                                              <a href="{{route('user.sort', 'k')}}" class="btn btn-sm btn-alt btn-default">K</a>
                                              <a href="{{route('user.sort', 'l')}}" class="btn btn-sm btn-alt btn-default">L</a>
                                              <a href="{{route('user.sort', 'm')}}" class="btn btn-sm btn-alt btn-default">M</a>
                                              <a href="{{route('user.sort', 'n')}}" class="btn btn-sm btn-alt btn-default">N</a>
                                              <a href="{{route('user.sort', 'o')}}" class="btn btn-sm btn-alt btn-default">O</a>
                                              <a href="{{route('user.sort', 'p')}}" class="btn btn-sm btn-alt btn-default">P</a>
                                              <a href="{{route('user.sort', 'q')}}" class="btn btn-sm btn-alt btn-default">Q</a>
                                              <a href="{{route('user.sort', 'r')}}" class="btn btn-sm btn-alt btn-default">R</a>
                                              <a href="{{route('user.sort', 's')}}" class="btn btn-sm btn-alt btn-default">S</a>
                                              <a href="{{route('user.sort', 't')}}" class="btn btn-sm btn-alt btn-default">T</a>
                                              <a href="{{route('user.sort', 'u')}}" class="btn btn-sm btn-alt btn-default">U</a>
                                              <a href="{{route('user.sort', 'v')}}" class="btn btn-sm btn-alt btn-default">V</a>
                                              <a href="{{route('user.sort', 'w')}}" class="btn btn-sm btn-alt btn-default">W</a>
                                              <a href="{{route('user.sort', 'x')}}" class="btn btn-sm btn-alt btn-default">X</a>
                                              <a href="{{route('user.sort', 'y')}}" class="btn btn-sm btn-alt btn-default">Y</a>
                                              <a href="{{route('user.sort', 'z')}}" class="btn btn-sm btn-alt btn-default">Z</a>
                                          </div>
                                      </div>
                                      <!-- END Contacts Title -->

                                      <!-- Contacts Content -->
                                      <div class="row style-alt">
                                          <!-- Contact Widget -->
@if($employees->count()>0)

<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="fa fa-check-circle"></i> Success</h4> <span>{{ $employees->count()}} &nbsp; employees vailable</span>
            </div>
            
@foreach($employees as $user)
                                          
     <div class="col-sm-6 col-md-4">
                              <!-- Advanced Active Theme Color Widget -->
            <div class="widget">
                <div class="widget-advanced">
                    <!-- Widget Header -->
                    <div class="widget-header text-center themed-background-dark">
                        <h3 class="widget-content-light">
                            <a href="{{route('user.profile', $user->id)}}" class="themed-color"><span style="transition: capitalized;">{{$user->name}}</span> <span style="text-transform: uppercase;">{{$user->lastname}}</span></a><br>
                            <small>{{$user->profile->province}}</small>
                            <small>{{$user->profile->postion}}</small>
                        </h3>
                    </div>
                    <!-- END Widget Header -->

                    <!-- Widget Main -->
                    <div class="widget-main">
                        <a href="{{route('user.profile', $user->id)}}" class="widget-image-container animation-hatch">
                            <img src="{{asset('$user->profile->avatar')}}" alt="avatar" class="widget-image img-circle" >
                        </a>
                             
                        <div class="row text-center animation-fadeIn">
                            <div class="col-xs-4">
                                <h3><small>Based in</small><br><strong>{{$user->profile->zone}}</strong> <br> <small>Region</small></h3>
                            </div>
                            <div class="col-xs-4">
                                <h3><small>Charged in</small> <br><strong>3</strong><br><small>Projects</small></h3>
                            </div>
                            <div class="col-xs-4">
                                <h3><strong>4</strong><br><small>Educational Documents</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- END Widget Main -->
                </div>
            </div>
            <!-- END Advanced Active Theme Color Widget -->
        </div>
                                        @endforeach
                                         

@else
    <div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="fa fa-times-circle"></i> Error</h4> Oh no! <span>Record Found!</span>
</div>

@endif
                                      </div>
                                         {{ $employees->links() }}
                                      <!-- END Contacts Content -->
                                  </div>
                                  <!-- END Contacts Block -->
                              </div>





                           
                          </div>
                          <!-- END Main Row -->
                      </div>



 <div class="page-content">
   <div class="block full">
                               <div class="block-title">
                                   <h2><strong>Datatables</strong> integration</h2>
                                   <div class="block-options text-center">
                                       <a href="{{route('user.sort', 'a')}}" class="btn btn-sm btn-alt btn-default">A</a>
                                       <a href="{{route('user.sort', 'b')}}" class="btn btn-sm btn-alt btn-default">B</a>
                                       <a href="{{route('user.sort', 'c')}}" class="btn btn-sm btn-alt btn-default">C</a>
                                       <a href="{{route('user.sort', 'd')}}" class="btn btn-sm btn-alt btn-default">D</a>
                                       <a href="{{route('user.sort', 'e')}}" class="btn btn-sm btn-alt btn-default">E</a>
                                       <a href="{{route('user.sort', 'f')}}" class="btn btn-sm btn-alt btn-default">F</a>
                                       <a href="{{route('user.sort', 'g')}}" class="btn btn-sm btn-alt btn-default">G</a>
                                       <a href="{{route('user.sort', 'h')}}" class="btn btn-sm btn-alt btn-default">H</a>
                                       <a href="{{route('user.sort', 'i')}}" class="btn btn-sm btn-alt btn-default">I</a>
                                       <a href="{{route('user.sort', 'j')}}" class="btn btn-sm btn-alt btn-default">J</a>
                                       <a href="{{route('user.sort', 'k')}}" class="btn btn-sm btn-alt btn-default">K</a>
                                       <a href="{{route('user.sort', 'l')}}" class="btn btn-sm btn-alt btn-default">L</a>
                                       <a href="{{route('user.sort', 'm')}}" class="btn btn-sm btn-alt btn-default">M</a>
                                       <a href="{{route('user.sort', 'n')}}" class="btn btn-sm btn-alt btn-default">N</a>
                                       <a href="{{route('user.sort', 'o')}}" class="btn btn-sm btn-alt btn-default">O</a>
                                       <a href="{{route('user.sort', 'p')}}" class="btn btn-sm btn-alt btn-default">P</a>
                                       <a href="{{route('user.sort', 'q')}}" class="btn btn-sm btn-alt btn-default">Q</a>
                                       <a href="{{route('user.sort', 'r')}}" class="btn btn-sm btn-alt btn-default">R</a>
                                       <a href="{{route('user.sort', 's')}}" class="btn btn-sm btn-alt btn-default">S</a>
                                       <a href="{{route('user.sort', 't')}}" class="btn btn-sm btn-alt btn-default">T</a>
                                       <a href="{{route('user.sort', 'u')}}" class="btn btn-sm btn-alt btn-default">U</a>
                                       <a href="{{route('user.sort', 'v')}}" class="btn btn-sm btn-alt btn-default">V</a>
                                       <a href="{{route('user.sort', 'w')}}" class="btn btn-sm btn-alt btn-default">W</a>
                                       <a href="{{route('user.sort', 'x')}}" class="btn btn-sm btn-alt btn-default">X</a>
                                       <a href="{{route('user.sort', 'y')}}" class="btn btn-sm btn-alt btn-default">Y</a>
                                       <a href="{{route('user.sort', 'z')}}" class="btn btn-sm btn-alt btn-default">Z</a>
                                   </div>
                               </div>
                               <p><a href="ord.org.af" target="_blank">ORD's Employees List</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

                               <div class="table-responsive">
                                   <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer"><div class="row"><div class="col-sm-6 col-xs-5"><div class="dataTables_length" id="example-datatable_length"><label><select name="example-datatable_length" aria-controls="example-datatable" class="form-control"><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="-1">All</option></select></label></div></div><div class="col-sm-6 col-xs-7"><div id="example-datatable_filter" class="dataTables_filter"><label><div class="input-group"><input type="search" class="form-control" placeholder="Search" aria-controls="example-datatable"><span class="input-group-addon"><i class="fa fa-search"></i></span></div></label></div></div></div><table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                                       <thead>
                                           <tr role="row">

                                            <th class="text-center sorting_asc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 58px;">ID</th>

                                            <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 89px;"><i class="gi gi-user"></i></th>

                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 112px;">Name</th>

                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 224px;">Position</th>

                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 211px;">Location</th>

                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Valid Thru: activate to sort column ascending" style="width: 211px;"> Valid Thru</th>

                                            <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 136px;">Actions</th></tr>


                                       </thead>
                                       <tbody>
                                            
                                  
           @foreach($employees as $emp)   
                     <tr role="row" class="odd">
                    <td class="text-center sorting_1">{{$loop->index + 1}}</td>

                             <td class="text-center"><img src="{{asset($emp->profile->avatar)}}" alt="avatar" class="img-circle" width="40" height="40"></td>

                             <td> {{$emp->name}}</td>
                             <td>{{$emp->profile->position}}</td>
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
                 </table><div class="row"><div class="col-sm-5 hidden-xs"><div class="dataTables_info" id="example-datatable_info" role="status" aria-live="polite"><strong>1</strong>-<strong>10</strong> of <strong>60</strong></div></div><div class="col-sm-7 col-xs-12 clearfix"><div class="dataTables_paginate paging_bootstrap" id="example-datatable_paginate">
                    
                  {{ $employees->links() }}
                  </div></div></div></div>
             </div>
         </div>
 </div>
@endsection