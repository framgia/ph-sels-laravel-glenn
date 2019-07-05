@extends('layouts.app')

@section('content')


<div class="container">
<div class="row">
    <h4> Dashboard </h4>
</div>

<div class="row justify-content-center">
    <div class="col-5">
     <div class="row pt-4">
            <div class="col-5">
                <img src="/uploads/avatars/{{ $user->avatar }}" class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 150px" alt="User Avatar" height="200" />
            </div>

            <div class="col pl-4">
                <div class="row">
                    <h5> <strong> {{ $user->first_name . ' ' . $user->last_name }} </strong> </h5>
                </div>

                <div class="row pt-4">
                    <a href="#"> Learned 20 of 20 words </a>
                    <a href="#"> Learned 5 lessons </a>
                </div>
            </div>
        </div>
    </div>


    <div class="col border">
        <div class="row">
            <h4 class="p-4"> My Activities </h4>
        </div>
        
        <div class="col-11 mx-auto border-bottom">
        </div>

        <div class="row pt-4 justify-content-center">
            <div class="col-2">
                <img src="/uploads/avatars/{{ $user->avatar }}" class="img-thumbnail mx-auto d-block" alt="User Avatar" height="250" />
            </div>

            <div class="col-8">
                <div class="row">
                    <p><a href="#"> Jane </a> learned 20 of 20 words in <a href="#"> Basic 500 </a><p>
                </div>
                <div class="row">
                    <small class="text-muted"> 2 days ago </small>
                </div>
            </div>
        </div>

        <div class="row pt-4 justify-content-center">
            <div class="col-2">
                <img src="/uploads/avatars/{{ $user->avatar }}" class="img-thumbnail mx-auto d-block" alt="User Avatar" height="250" />
            </div>

            <div class="col-8">
                <div class="row">
                    <p><a href="#"> Jane </a> learned 20 of 20 words in <a href="#"> Basic 500 </a><p>
                </div>
                <div class="row">
                    <small class="text-muted"> 2 days ago </small>
                </div>
            </div>
        </div>

        <div class="row pt-4 justify-content-center">
            <div class="col-2">
                <img src="/uploads/avatars/{{ $user->avatar }}" class="img-thumbnail mx-auto d-block" alt="User Avatar" height="250" />
            </div>

            <div class="col-8">
                <div class="row">
                    <p><a href="#"> Jane </a> learned 20 of 20 words in <a href="#"> Basic 500 </a><p>
                </div>
                <div class="row">
                    <small class="text-muted"> 2 days ago </small>
                </div>
            </div>
        </div>


</div>
</div>

@endsection