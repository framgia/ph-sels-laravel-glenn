@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-4">
        <h4> All Users </h4>
    </div>



    <div class="row">
        <table class="table">
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td><img src="/uploads/avatars/{{ $user->avatar }}"
                            class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 100px"
                            alt="User Avatar" /></td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->first_name . ' ' . $user->last_name}}</td>
                    <td><button type="button" class="btn btn-primary" onclick="location.href='/users/{{ $user->id }}';">View Profile
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
