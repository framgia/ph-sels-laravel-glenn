@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-5">
            <div class="container">
                <img src="/uploads/avatars/{{ $user->avatar }}" class="border img-fluid rounded-circle mx-auto d-block"
                    style="max-width: 250px" alt="User Avatar" height="200" />
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

            @if ($following == 0 || $following == 1)
            <div class="row justify-content-center">
                <form method="GET" action="/follow">
                    @csrf
                    <input type="hidden" name="onpage_userid" value="{{ $user->id }}">
                    <input type="hidden" name="following_status" value="{{ $following }}">
 
                    @if ($following == 0)
                    <button type="submit" class="btn btn-primary">Follow</button>
                    @else 
                    <button type="submit" class="btn btn-danger">Unfollow</button>
                    @endif
                </form>
            </div>
            @endif

            <div class="row justify-content-center pt-4">
                <a href="#">Learned 20 words.</a>
            </div>
        </div>


        <div class="col border">
            <div class="row">
                <h4 class="p-4"> Activities </h4>
            </div>

            @include('layouts.test_activity')

        </div>
    </div>
</div>

@endsection
