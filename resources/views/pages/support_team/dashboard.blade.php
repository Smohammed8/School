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
    <h5 class="mb-2"> <i class="icon-users"> </i>Class Information </h5>
<div class="row">
    <div class="col-2">
        <div class="card border-primary mb-4">
            <div class="card-body text-primary">
          

          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 1 </strong>
            <span class="badge rounded-pill bg-primary float-right">50</span>
        </a>

        
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card border-secondary mb-4">
            <div class="card-body text-primary">
             


          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 2 </strong>
            <span class="badge rounded-pill bg-secondary float-right">50</span>
        </a>

             
            </div>
        </div>
    </div>




    <div class="col-2">
        <div class="card border-danger mb-4">
            <div class="card-body text-danger">
               
             
          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 3 </strong>
            <span class="badge rounded-pill bg-danger float-right">50</span>
        </a>

            </div>
        </div>
    </div>


    <div class="col-2">
        <div class="card border-success mb-4">
            <div class="card-body text-success">
           


          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 4 </strong>
            <span class="badge rounded-pill bg-success float-right">50</span>
        </a>

             
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card border-warning mb-4">
            <div class="card-body text-warning">
             


          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 5 </strong>
            <span class="badge rounded-pill bg-warning float-right">50</span>
        </a>

             
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card border-info mb-4">
            <div class="card-body text-info">
              

          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 6 </strong>
            <span class="badge rounded-pill bg-info float-right">50</span>
        </a>

             
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card border-primary mb-4">
            <div class="card-body text-primary">
               
          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 7 </strong>
            <span class="badge rounded-pill bg-primary float-right">50</span>
        </a>

             
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card border-dark mb-4">
            <div class="card-body text-dark">
             
             
          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 8 </strong>
            <span class="badge rounded-pill bg-secondary float-right">50</span>
        </a>

            </div>
        </div>
    </div>


    <div class="col-2">
        <div class="card border-danger mb-4">
            <div class="card-body text-danger">
              

          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 9 </strong>
            <span class="badge rounded-pill bg-danger float-right">50</span>
        </a>

             
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card border-success mb-4">
            <div class="card-body text-success">
               

          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 10 </strong>
            <span class="badge rounded-pill bg-success float-right">50</span>
        </a>

             
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card border-warning mb-4">
            <div class="card-body text-warning">
        

          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 11 </strong>
            <span class="badge rounded-pill bg-warning float-right">50</span>
        </a>

             
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card border-info mb-4">
            <div class="card-body text-info">
              

          <a href="#" class="">
            <i class="icon-ist"></i>  <strong> Grade 12 </strong>
            <span class="badge rounded-pill bg-info float-right">50</span>
        </a>

             
            </div>
        </div>
    </div>

</div> </div>
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
