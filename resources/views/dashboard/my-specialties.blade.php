@extends('layouts.dashboard')

@section('content')
    <div class="be-content">
        <div class="page-head">
            <h2 class="page-head-title">My Specialties</h2>
            <a href="{{ url('add-specialty') }}" class="btn btn-primary ">
                <i class="mdi mdi-plus"></i> Add Specialty
            </a>
        </div>
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-border">
                        <div class="panel-heading panel-heading-divider">Specialty Title
                            <div class="tools dropdown"><span class="icon mdi mdi-edit"></span><span class="icon mdi mdi-refresh-sync"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                                <ul role="menu" class="dropdown-menu pull-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <span class="panel-subtitle">{{ Auth::User()->full_name }} has been doing this for 2 years</span>
                        </div>
                        <div class="panel-body">
                            <p>
                                Brief description
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
