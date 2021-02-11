@extends('layouts.app')

@section('page-content')
 

<div class="block">
    <!-- Responsive Full Title -->
    <div class="block-title">
        <h2><strong>{{$project->name}}</strong> Detials</h2>
    </div>
    <!-- END Responsive Full Title -->

    <!-- Responsive Full Content -->
 
    <div class="table-responsive">
        <table class="table hover">
            
                <tr><td>Project focal point</td><td> {{$project->user->name}}</td></tr>
                <tr><td>Project code</td><td>{{$project->code}}</td></tr>
                <tr><td>Project direct_benefeciaries</td><td>{{$project->direct_benefeciaries}}</td></tr>
                <tr><td>Project D_staff</td><td>{{$project->D_staff}}</td></tr>
                <tr><td>Project S_staff</td><td>{{$project->S_staff}}</td></tr>
                <tr><td>Project start_date</td><td>{{$project->start_date}}</td></tr>
                <tr><td>Project completion_date</td><td>{{$project->completion_date}}</td></tr>
                <tr><td>Project Donor</td><td>{{$project->donor->name}}</td></tr>
                <tr><td>Project Total_budget</td><td>{{$project->Total_budget}}</td></tr>
                <tr><td>Project Total_salaries</td><td>{{$project->Total_salaries}}</td></tr>
                <tr><td>Project currency </td><td>{{$project->currency->name}}</td></tr>
                <tr><td>Project location</td><td>{{$project->location}}</td></tr>
 
                <tr><td colspan="2">Project description</td></tr>
                <tr><td colspan="2">{{$project->description}}</td></tr>
                
                <tr><td colspan="2">Project goals</td></tr>
                <tr><td colspan="2">{{$project->goals}}</td></tr>
            </thead>
 
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