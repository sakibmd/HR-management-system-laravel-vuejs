@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">
                    <router-link to="/user-details" class="nav-link">
                        Your Profile
                    </router-link>
                </li>

            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="my-1">This is User Dashboard. Your Employee Request is: <span
                            class="bg-info text-white px-3 py-1"> {{ Auth::user()->isapproved }}</span></h4>
                </div>
                <user-main></user-main>
            </div>
        </div>
    </div>
</div>
@endsection