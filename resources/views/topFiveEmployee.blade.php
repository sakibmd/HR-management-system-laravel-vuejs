@extends('publicLayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">






        <div class="col-md-8 card">

            <h2 class="my-5 text-center">Our Top Five Employees</h2>


            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Joining Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getTopFive as $employee)
                    <tr>
                        <td>{{ $employee->user_name }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->joining_date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




    </div>
</div>
@endsection