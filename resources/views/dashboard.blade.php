@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="row pb-4">
                <h4> Dashboard </h4>
            </div>

            <div class="row">
                <div class="col">
                    <img src="/uploads/avatars/{{ $user->avatar }}" class="border img-fluid rounded-circle mx-auto d-block"
                        style="max-width: 100px" alt="User Avatar"/>
                </div>
                <div class="col">
                    <div class="row">
                        <p> <strong> {{ $user->first_name . ' ' . $user->last_name }} </strong></p>
                    </div>
                    <div class="row">
                        <a href="#">Learned 20 words</a>
                        <a href="#">Learned 5 lessons</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col border">
            <div class="row p-4 border-bottom">
                <h4> Activities </h4>
            </div>

            @include('layouts.test_activity')
        </div>
    </div>
<div>
@endsection
