@extends('layouts.app', $user)

@section('content')

<div class="container">
    <div class="row pb-4">
        <h4> Edit Profile </h4>
    </div>

    @include('layouts.alert')

    <form method="POST" action="/users/{{ $user->id }}" enctype="multipart/form-data">
        <div class="row">

            @csrf
            @method('patch')

            <div class="col-5">
                <div class="form-group">
                    <img src="/uploads/avatars/{{ $user->avatar }}"
                        class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 200px"
                        alt="User Avatar" height="200" />

                    <div class="row justify-content-center pt-4">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="avatar">User Image</label>
                                <input type="file" id="avatar" name="avatar" class="form-control"
                                    value="{{ $user->avatar }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" value="{{ $user->first_name }}"
                            name="first_name">
                    </div>
                    <div class="form-group col">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" value="{{ $user->last_name }}"
                            name="last_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="last_name" value="{{ $user->email }}" name="email">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" value="{{ $user->username }}" name="username">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-danger" onclick="location.href='/users/{{ $user->id }}'"
                        type="button">Back</button>
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-5">
        </div>

        <div class="col-7 float-right">
            <form method="POST" action="/users/{{ $user->id }}">

                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-danger">Delete Account</button>
            </form>
        </div>
    </div>
</div>

@endsection
