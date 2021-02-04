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
                <li class="list-group-item">
                    <router-link to="/our-team" class="nav-link">
                        Our Team
                    </router-link>
                </li>

                <li class="list-group-item">
                    <router-link to="/top-five-employees" class="nav-link">
                        Top 5 Employees
                    </router-link>
                </li>
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