@extends('layouts.master')
@section('page_title', 'My Dashboard')
@section('content')


@if(Qs::userIsTeamSA())
<div class="row">
    <div class="col-sm-6 col-xl-3">
        <div class="card card-body bg-blue-400 has-bg-image">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">{{ $users->where('user_type', 'student')->count() }}</h3>
                    <span class="text-uppercase font-size-xs font-weight-bold">Total Students</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-users4 icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card card-body bg-danger-400 has-bg-image">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">{{ $users->where('user_type', 'teacher')->count() }}</h3>
                    <span class="text-uppercase font-size-xs">Total Teachers</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-users2 icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card card-body bg-success-400 has-bg-image">
            <div class="media">
                <div class="mr-3 align-self-center">
                    <i class="icon-pointer icon-3x opacity-75"></i>
                </div>

                <div class="media-body text-right">
                    <h3 class="mb-0">{{ $users->where('user_type', 'admin')->count() }}</h3>
                    <span class="text-uppercase font-size-xs">Total Administrators</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card card-body bg-indigo-400 has-bg-image">
            <div class="media">
                <div class="mr-3 align-self-center">
                    <i class="icon-user icon-3x opacity-75"></i>
                </div>

                <div class="media-body text-right">
                    <h3 class="mb-0">{{ $users->where('user_type', 'parent')->count() }}</h3>
                    <span class="text-uppercase font-size-xs">Total Parents</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<hr>

<div class="container-fluid">
    <h5 class="mb-2"> <i class="icon-users"> </i> Student Information in each  classes  </h5>
<div class="row">
    @if(Qs::userIsTeamSAT())

    @foreach ($classes as $class) 

    <div class="col-2">

                <div class="card border-info mb-4">
                    <div class="card-body text-info">
              
          <a href="{{ route('students.list', ['class_id'=>$class->id]) }}" class="">
            <i class="icon-ist"></i>  <strong> {{ $class->name }} </strong>
            <span class="badge rounded-pill bg-info float-right">{{ $student_records->where('my_class_id',  $class->id)->count() }}</span>
          </a>
        
        
            </div>
        </div>
    </div>
    @endforeach
    @if (count($classes) == 0)
    <div class="col-12">
    <div class="alert alert-warning" role="alert">
       <h6><i class="icon-warning"></i> No class has been created yet ! </h6>
    </div>
      </div>
   @endif

    @endif







</div> 
</div>
<hr>
 

    {{--Events Calendar Begins--}}
    <div class="card card-collapsed">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">School Events Calendar</h5>
         {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="fullcalendar-basic"></div>
        </div>
    </div>
    {{--Events Calendar Ends--}}
    @endsection
