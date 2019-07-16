@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mb-4">
        <h4> User Relationships - {{ $user->username }}</h4>
    </div>

    <div class="row">
        <div class="col border mr-4">
            <div class="row mb-4">
                <h4 class="m-4"> Following </h4>
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
                        @foreach ($followings as $following)
                        <tr>
                            <td><img src="/uploads/avatars/{{ $following->avatar }}"
                                    class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 80px"
                                    alt="User Avatar" /></td>
                            <td><a
                                    href="/users/{{ $following->id }}">{{ $following->first_name . ' ' . $following->last_name }}</a>
                            </td>
                            <td>{{ $following->username }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col border">
            <div class="row mb-4">
                <h4 class="m-4"> Followers </h4>
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
                        @foreach ($followers as $follower)
                        <tr>
                            <td><img src="/uploads/avatars/{{ $follower->avatar }}"
                                    class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 80px"
                                    alt="User Avatar" /></td>
                            <td><a
                                    href="/users/{{ $follower->id }}">{{ $follower->first_name . ' ' . $follower->last_name }}</a>
                            </td>
                            <td>{{ $follower->username }}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
