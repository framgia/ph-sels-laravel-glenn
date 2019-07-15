@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pb-4">
        <h4> Edit Category </h4>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <form class="pt-4" method="POST" action="/categories/{{ $category->id }}">

                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ $category->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ $category->description }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                    <a href="/categories/edit" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
