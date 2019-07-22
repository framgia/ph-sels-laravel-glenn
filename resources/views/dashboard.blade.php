@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="row pb-4">
                <h4> Dashboard </h4>
            </div>

            <div class="row">
                <div class="col">
                    <img src="/uploads/avatars/{{ $user->avatar }}"
                        class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 100px"
                        alt="User Avatar" />
                </div>
                <div class="col">
                    <div class="row">
                        <p> <strong> {{ $user->first_name . ' ' . $user->last_name }} </strong></p>
                    </div>
                    <div class="row">
                        <a href="/users/{{ Auth::id() }}/words">Learned
                            {{ $wordCount }} words</a>
                        <a href="/users/{{ Auth::id() }}/lessons">Learned
                            {{ $lessonCount }} lessons</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col border">
            <div class="row p-4 border-bottom">
                <h4> Activities </h4>
            </div>
            @if ($activities->isEmpty())
            <div class="row justify-content-center mt-4">
                <h4>No activities yet.</h4>
            </div>
            @else
            @foreach ($activities as $activity)
            <div class="row mt-4">
                <div class="col-3">
                    <img src="/uploads/avatars/{{ $activity->user->avatar }}"
                        class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 100px"
                        alt="User Avatar" />
                </div>
                <div class="col">
                    <div class="container">

                        @if ($activity->activity_type == 'App\Category_Session')
                        {{ $activity->user->first_name }} learned
                        {{ $activity->user->answers->where('user_id', $activity->user->id)->where('category_id', $activity->activity->category_id)->where('is_correct', 1)->count() }}
                        of
                        {{ $activity->activity->category->words->count() }}
                        words
                        in <a
                            href="/categories/{{ $activity->activity->category->id }}">{{ $activity->activity->category->title }}</a>
                        @elseif ($activity->activity_type == 'App\Relationship')
                        {{ $activity->user->first_name }} followed
                        {{ $activity->activity->following->first_name }}
                        @endif
                    </div>
                    <div class="container">
                        <small class="text-muted">{{ $activity->created_at }}</small>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
