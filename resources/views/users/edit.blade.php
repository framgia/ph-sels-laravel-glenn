@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pb-4">
        <h4> Edit Profile </h4>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <div class="container">
                <img src="/uploads/avatars/{{ $user->avatar }}" class="border img-fluid rounded-circle mx-auto d-block"
                    style="max-width: 200px" alt="User Avatar" />
            </div>
            <div class="row justify-content-center">
                <small class="text-muted pt-2">{{ $user->username }}</small>
            </div>

            <form class="pt-4" method="POST" action="/users/{{ $user->id }}" enctype="multipart/form-data">

                @method('PATCH')
                @csrf

                <div class="form-group">
                    <input type="file" id="avatar" name="avatar">
                </div>

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        value="{{ $user->first_name }}">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="{{ $user->last_name }}">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                    <button type="button" class="btn btn-danger"
                        onclick="location.href='/users/{{ $user->id }}';">Back</button>
                </div>
            </form>

            <form method="POST" action="/users/{{ $user->id }}">

                @method('DELETE')
                @csrf
                
                <button type="submit" class="btn btn-danger">Delete Profile</button>
            </form>
        </div>
    </div>
    <div>
        @endsection
