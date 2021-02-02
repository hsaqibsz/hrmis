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
                <li><a href="">Available Staff &nbsp; ({{$users->count()}})</a></li>
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
@if($users->count()>0)

<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="fa fa-check-circle"></i> Success</h4> <span>{{ $users->count()}} &nbsp; Users vailable</span>
            </div>
            
                                          @foreach($users as $user)


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
                                                                                          <img src="{{$user->profile->avatar}}" alt="avatar" class="widget-image img-circle" >
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
                                         {{ $users->links() }}
                                      <!-- END Contacts Content -->
                                  </div>
                                  <!-- END Contacts Block -->
                              </div>





                           
                          </div>
                          <!-- END Main Row -->
                      </div>
@endsection