@extends('layouts.app')

@section('page-content')
 

    <!-- Page content -->
    <div id="page-content">
        <!-- Dashboard 2 Header -->
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
                    <a href="javascript:void(0)"><i class="gi gi-video_hd"></i> Project Based</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="gi gi-music"></i> Male Staff</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-cubes"></i> Femal Staff</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-pencil"></i> Profile</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-cogs"></i> Settings</a>
                </li>
            </ul>
        </div>
        <!-- END Dashboard 2 Header -->






















 
        </div>
        <!-- END Dashboard 2 Content -->
     
    <!-- END Page Content -->
 
    <script src="{{ asset('assets/admin/js/pages/index2.js')}}"></script>
    <script>$(function(){ Index2.init(); });</script> 
@endsection