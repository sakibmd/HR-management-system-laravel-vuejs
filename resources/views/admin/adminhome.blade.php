@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">
                    <router-link to="/adminhome" class="nav-link">
                        Dashboard
                    </router-link>
                </li>
                <li class="list-group-item">
                    <router-link to="/all-employees" class="nav-link">
                        All Employees List
                    </router-link>
                </li>
                <li class="list-group-item">
                    <router-link to="/pending-employees" class="nav-link">
                        Pending Employees
                    </router-link>
                </li>


                <li class="list-group-item">
                    <router-link to="/rejected-employees" class="nav-link">
                        Rejected Employees
                    </router-link>
                </li>
                <li class="list-group-item">Service</li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-center">
                    <h2>This is Admin Dashboard</h2>
                </div>
                <admin-main></admin-main>
            </div>
        </div>
    </div>
</div>
@endsection