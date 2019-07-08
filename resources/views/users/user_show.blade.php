@extends('layouts.app')

@section('content')


<div class="container">
<div class="row justify-content-center">

    <div class="col-5">
        <div class="container">
            <img src="{{ $img }}" class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 250px" alt="User Avatar" height="200" />
        </div>

        <div class="container pt-4"> 
            <h2 class="text-center"> {{ $user->username }} </h2>
        </div>

        <div class="container border-bottom">
            <p class="text-muted text-center"> {{ $user->first_name . ' ' . $user->last_name }} </p>
        </div>

        <div class="row pt-4">
            <div class="col">
                <div class="container">
                    <p class="text-center"> <strong> 50 </strong> </p>
                </div>

                <div class="container">
                    <p class="text-muted text-center"> followers </p>
                </div>
            </div>

            <div class="col">
                <div class="container">
                    <p class="text-center"> <strong> 50 </strong> </p>
                </div>

                <div class="container">
                    <p class="text-muted text-center"> following </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <button type="" class="btn btn-primary">Follow</button>
        </div>

        <div class="row justify-content-center pt-4">
            <a href="#">Learned 20 words.</a>
        </div>
    </div>


    <div class="col border">
        <div class="row">
            <h4 class="p-4"> Activities </h4>
        </div>
        
        <div class="col-11 mx-auto border-bottom">
        </div>

        <div class="row pt-4 justify-content-center">
            <div class="col-2">
                <img src="{{ $img }}" class="img-thumbnail mx-auto d-block" alt="User Avatar" height="250" />
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
                <img src="{{ $img }}" class="img-thumbnail mx-auto d-block" alt="User Avatar" height="250" />
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
                <img src="{{ $img }}" class="img-thumbnail mx-auto d-block" alt="User Avatar" height="250" />
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