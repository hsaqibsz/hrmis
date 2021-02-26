<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ORD - HRMIS</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('assets/admin/img/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{asset('assets/admin/img/icon57.png') }}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{asset('assets/admin/img/icon72.png') }}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{asset('assets/admin/img/icon76.png') }}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{asset('assets/admin/img/icon114.png') }}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{asset('assets/admin/img/icon120.png') }}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{asset('assets/admin/img/icon144.png') }}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{asset('assets/admin/img/icon152.png') }}" sizes="152x152">
        <link rel="apple-touch-icon" href="{{asset('assets/admin/img/icon180.png') }}" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/plugins.css') }}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/main.css') }}">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/themes.css') }}">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="{{ asset('assets/admin/js/vendor/modernizr.min.js') }}"></script>



    </head>
    <body >
 
 
        <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background-spring">
                <h1 class="push-top-bottom text-light text-center"><strong>ORD</strong>Human Resource Management Information System</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>


      
            <!-- END Preloader -->

 
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations ">
                <!-- Alternative Sidebar -->
  

                <!-- Main Sidebar -->
                <div id="sidebar" class="themed-background">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="/" class="sidebar-brand">
                                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>ORD</strong> HRMIS</span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="{{route('user.profile', Auth::user()->id)}}">
                                        <img src="{{Auth::user()->profile->avatar}}" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name">{{Auth::user()->name}} <span style="text-transform: uppercase;">{{Auth::user()->lastname}}</span></div>
                                <div class="sidebar-user-links">
                                    <a href="{{route('user.profile', Auth::user()->id)}}" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->

                            <!-- Theme Colors -->
                           
                            <!-- END Theme Colors -->

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                               
                               <li>
                                           <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Auth</span></a>
                                           <ul style="display: none;">
                                               <li>
                                                   <a href="#">Suspend user account</a>
                                               </li>
                                               <li>
                                                   <a href="#">Change/Reset Password</a>
                                               </li>
                                               <li>
                                                   <a href="#">User Roles</a>
                                               </li>
                                               
                                           </ul>
                                        </li>


                               <li>
                                       <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">HR Management</span></a>
                                       <ul style="display: none;">
                                           <li>
                                               <a href="{{route('hr.dashboard')}}">Dashboard</a>
                                           </li>

                                           <li>
                                               <a href="{{route('hr.employees')}}">Employees List</a>
                                           </li>
                                           <li>
                                               <a href="{{route('user.register.new')}}">Register New Employee</a>
                                           </li>
                                           <li>
                                               <a href="#">Payrols</a>
                                           </li>
                                           
                                           <li>
                                               <a href="#">Timesheets</a>
                                           </li>
                                           <li>
                                               <a href="#">Terminated Employees</a>
                                           </li>
                                           <li>
                                               <a href="#">HR Reports</a>
                                           </li> 

                                           <li>
                                               <a href="#">Bank Accounts</a>
                                           </li> 

                                           
                                       </ul>
                                    </li>

                  <li> 
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Departments</span></a>
                              <ul style="display: none;">
                                  <li>
                                      <a href="{{route('department.index')}}">List & controls</a>
                                  </li>
                                  <li>
                                      <a href="{{route('department.create')}}">Add new</a>
                                  </li>
                                  
                                  
                              </ul>
                           </li> 


                         <li>
                              <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Positions</span></a>
                              <ul style="display: none;">
                                  <li>
                                      <a href="{{route('position.index')}}">List & controls</a>
                                  </li>
                                  <li>
                                      <a href="{{route('position.create')}}">Add new Position</a>
                                  </li>
                                
                                  
                              </ul>
                           </li>
                          

                          <li>
                              <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Category</span></a>
                              <ul style="display: none;">
                                  <li>
                                      <a href="{{route('category.index')}}">List & controls</a>
                                  </li>
                                  <li>
                                      <a href="{{route('category.create')}}">Add new Category</a>
                                  </li>
                                
                                  
                              </ul>
                           </li>
                        

                          <li>
                              <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Regions</span></a>
                              <ul style="display: none;">
                                   <li>
                                      <a href="{{route('region.index')}}">List & controls</a>
                                  </li>
                                  <li>
                                      <a href="{{route('region.create')}}">Add new Region</a>
                                  </li>
                                
                                  
                              </ul>
                           </li>

                            
                            <li>
                              <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Provinces</span></a>
                              <ul style="display: none;">
                                   <li>
                                      <a href="{{route('province.index')}}">List & controls</a>
                                  </li>
                                  <li>
                                      <a href="{{route('province.create')}}">Add new Province</a>
                                  </li>
                                
                                  
                              </ul>
                           </li> 


                           <li>
                              <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Donors</span></a>
                              <ul style="display: none;">
                                 <li>
                                      <a href="{{route('donor.index')}}">List & controls</a>
                                  </li>
                                  <li>
                                      <a href="{{route('donor.create')}}">Add new Donor</a>
                                  </li>
                                
                                  
                              </ul>
                           </li> 

                         <li>
                              <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Currencies</span></a>
                              <ul style="display: none;">
                                 <li>
                                      <a href="{{route('currency.index')}}">List & controls</a>
                                  </li>
                                  <li>
                                      <a href="{{route('currency.create')}}">Add new Currency</a>
                                  </li>
                                
                                  
                              </ul>
                           </li> 



                           <li>
                              <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Projects</span></a>
                              <ul style="display: none;">
                                  <li>
                                      <a href="{{route('project.index')}}">List & controls</a>
                                  </li>
                                  <li>
                                      <a href="{{route('project.create')}}">Add new Project</a>
                                  </li>
                                
                                  
                              </ul>
                           </li>

                           <li>
                              <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-th-large sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Tasks</span></a>
                              <ul style="display: none;">
                                  <li>
                                      <a href="#">List & controls</a>
                                  </li>
                                  <li>
                                      <a href="{{route('newtask.create')}}">Add new Task</a>
                                  </li>
                                
                                  
                              </ul>
                           </li>


     


 
                        <li>
                            <a href="#"><i class="gi gi-home sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">link for contengen</span></a>
                        </li>

                         
                            
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                                    <span class="sidebar-header-title">Widget Kit</span>
                                </li>

                                <li>
                                    <a href="#"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Statistics</span></a>
                                </li>
                              
                                <li>
                                    <a href="page_widgets_media.html"><i class="gi gi-film sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Media</span></a>
                                </li>

  

                           <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"></a><a href="javascript:void(0)" data-toggle="tooltip" title="Manage Inventory!"><i class="gi gi-lightbulb"></i></a></span>
                                    <span class="sidebar-header-title">CFM </span>
                                </li>

                               <li>
                                   <a href="#"><i class="hi hi-warning-sign sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">New Complaints  <span class="label label-danger label-indicator animation-floating">4</span></span></a>
                               </li>
                               <li>
                                    
                               </li>
                               <li>
                                 <a href="#"><i class="gi gi-ok sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Closed Cases <span class="label label-info label-indicator animation-floating">12</span></span></a>
                               </li>
 
                            </ul>
                            <!-- END Sidebar Navigation -->

                            <!-- Sidebar Notifications -->
                            <div class="sidebar-header sidebar-nav-mini-hide">
                                <span class="sidebar-header-options clearfix">
                                    <a href="#" onclick="location.reload();" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                                </span>
                                <span class="sidebar-header-title">Activity</span>
                            </div>
                            <div class="sidebar-section sidebar-nav-mini-hide">
                                
                                   @foreach(Auth::User()->tasks as $task)
                                     
                                               @if($task->status>0) <div class="alert alert-success alert-alt">
                                                    <small>{{$task->updated_at->diffForHumans()}}</small><br>
                                                    <i class="fa fa-thumbs-up fa-fw"></i> You had complete {{$task->title}}
                                                </div>
                                                @endif

                                                    @if($task->status == 0) <div class="alert alert-info alert-alt">
                                                    <small>{{$task->updated_at->diffForHumans()}} due date: {{ date("M d, Y",strtotime($task->deadline)) }} </small><br>
                                                    <i class="fa fa-thumbs-up fa-fw"></i> You have schedualed {{$task->title}}
                                                </div>
                                                @endif

                                        
                                        @endforeach
                                        
                            </div>
                            <!-- END Sidebar Notifications -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="gi gi-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-options">
                                    <li class="dropdown-header text-center">Header Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                        </div>
                                    </li>
                                    <li class="dropdown-header text-center">Page Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <div class="form-group">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..."  onclick ="$('#modal-search').modal('show');">
                            </div>
                          
                        </form>
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                     <i class="hi hi-globe" style="font-size: 24px;"></i> <span class="label label-primary label-indicator animation-floating"> 3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center">Project</li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-briefcase fa-fw pull-right"></i>
                                            <span class="badge pull-right">0</span>
                                            Recieved Projects  
                                        </a>

                                         

                                         <a href="#">
                                            <i class="fa fa-briefcase fa-fw pull-right"></i>
                                            <span class="badge pull-right"></span>
                                           Approved Changes, <br> Request
                                        </a>
                                         
                                         
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{route('user.profile', Auth::user()->id)}}">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                        <a href="#modal-user-settings" data-toggle="modal">
                                            <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-ban fa-fw pull-right"></i> {{ __('Logout') }}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form></a>
                                    </li>
                                    <li class="dropdown-header text-center">Activity</li>
                                    <li>
                                         @foreach(Auth::User()->tasks as $task)
                                     
                                               @if($task->status>0) <div class="alert alert-success alert-alt">
                                                    <small>{{$task->updated_at->diffForHumans()}}</small><br>
                                                    <i class="fa fa-thumbs-up fa-fw"></i> You had complete {{$task->title}}
                                                </div>
                                                @endif

                                                    @if($task->status == 0) <div class="alert alert-info alert-alt">
                                                    <small>{{$task->updated_at->diffForHumans()}} due date: {{ date("M d, Y",strtotime($task->deadline)) }} </small><br>
                                                    <i class="fa fa-thumbs-up fa-fw"></i> You have schedualed {{$task->title}}
                                                </div>
                                                @endif

                                        
                                        @endforeach
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                   <div id="page-content">     
     

         <!-- display error message -->
                    @if($errors->any())
                    
                     @foreach($errors->all() as $error)
                           <div class="alert alert-danger"><span class="close" data-dismiss="alert">&times;</span> {{$error}}</div>
                     @endforeach

                     @endif



<!-- display session messages -->

                     @if(Session::has('success'))
  
                     <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         <h4><i class="fa fa-check-circle"></i> Success</h4> <span>{{ Session::get('success') }}</span>
                                 </div>
                     @endif

                     @if(Session::has('info'))
                     
                     <div class="alert alert-info alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         <h4><i class="fa fa-info-circle"></i> Info</h4> <span>{{ Session::get('info') }}</span>
                                 </div>
                     @endif

                     @if(Session::has('danger'))

                                 <div class="alert alert-danger alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <h4><i class="fa fa-times-circle"></i> Error</h4> Oh no! <span>{{Session::get('danger')}}</span>
                             </div>
                     @endif

              @yield('page-content')
                   </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://ord.org.af" target="_blank">ORD</a>  
                        </div>
                        
                       

                         <div class="pull-left">
                            <span style=" margin-left:10px;">2010 - <?PHP echo date('Y'); ?> &copy;</span> <a href="http://ord.org.af" target="_blank">Organization for Relief Development (ORD)</a>
                           &nbsp; &nbsp; <span style=""> Powered by</span> <a href="https://www.linkedin.com/in/hikmatullah-saqib-a53230122" target="_blank">SAQIB</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

  @include('hr.includes.setting')
        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->


        <script src="{{ asset('assets/admin/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/admin/js/app.js') }}"></script>

        <!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
        <!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
        <script src="https://maps.googleapis.com/maps/api/js?key="></script>
        <script src="{{ asset('assets/admin/js/helpers/gmaps.min.js') }}"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="{{ asset('assets/admin/js/pages/index.js') }}"></script>
        <script>$(function(){ Index.init(); });</script>


        <!-- display session message -->
        <!-- toaster messaging -->
        <script src="{{ asset('assets/toaster/toastr.min.css') }}"></script>
        <script src="{{ asset('assets/toaster/toastr.min.js') }}"></script>

        <script type="text/javascript">
             @if(Session::has('success'))
                        toastr.success("{{Session::get('success')}}")
             @endif

             @if(Session::has('error'))
                        toastr.error("{{Session::get('error')}}")
             @endif
            @if(Session::has('info'))
                        toastr.info("{{Session::get('info')}}")
             @endif
           @if(Session::has('warning'))
                        toastr.warning("{{Session::get('warning')}}")
             @endif
        </script>
        
    </body>
</html>


@include('include.search')