@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-4">
        <div class="col">
            <h4> All Users </h4>
        </div>
        <div class="col">
            <div class="row justify-content-end">
                <a href="/users/create" class="btn btn-primary">Add User</a>
            </div>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Avatar</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td><img src="/uploads/avatars/{{ $user->avatar }}"
                            class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 80px"
                            alt="User Avatar" /></td>
                    <td><a href="/users/{{ $user->id }}">{{ $user->first_name . ' ' . $user->last_name }}</a></td>
                    <td>{{ $user->username }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="/users/{{ $user->id }}/edit" class="btn btn-primary mr-4">Edit</a>
                            <form method="POST" action="/users/{{ $user->id }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
