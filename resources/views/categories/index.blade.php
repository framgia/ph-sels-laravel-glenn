@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-4">
        <h4> Categories </h4>
    </div>

    <div class="row justify-content-center">
        @foreach ($categories as $category)
        <div class="card m-4" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $category->title }}</h5>
                <p class="card-text">{{ $category->description }}</p>
                <a href="#" class="btn btn-primary">Begin</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
