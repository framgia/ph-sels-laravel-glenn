@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-4">
        <h4> All Users </h4>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Avatar</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>

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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
