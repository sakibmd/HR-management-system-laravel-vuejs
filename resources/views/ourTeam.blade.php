@extends('publicLayout')

@section('css')
<style>
    h5 {
        font-weight: 700;
        text-align: center;
    }

    h6 {
        font-weight: 600;
        color: grey;
    }
</style>
@endsection






@section('content')
<div class="container">

    <h1 class="text-center font-weight-bold my-5">Meet Our Team</h1>
    <div class="row">
        @foreach ($ourTeam as $person)
        <div class="col-md-4">
            <div class="card m-2">
                <img src="{{ asset('uploadimage/'. $person->image) }}" class="img-fluid" width="100%"
                    style="height: 250px">

                <div class="card-body text-center">
                    <h5>{{ $person->name }}</h5>
                    <h6>{{ $person->position }}</h6>
                </div>
            </div>


        </div>
        @endforeach
    </div>

</div>
@endsection