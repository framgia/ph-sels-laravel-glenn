@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-4">
        <h4> Create Category </h4>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <form method="POST" action="/categories">

                            @csrf

                            <div class="form-group">
                                <label for="title">Category Title</label>
                                <input type="title" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Category Description</label>
                                <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="location.href='/dashboard';">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
