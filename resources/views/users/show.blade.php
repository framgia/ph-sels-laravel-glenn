@extends('layouts.app')

@section('content')

<!-- class injections -->
@inject('category_session', 'App\Category_Session')
@inject('answer', 'App\Answer')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-5">
            <div class="container">
                <img src="/uploads/avatars/{{ $userOnPage->avatar }}"
                    class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 250px" alt="User Avatar"
                    height="200" />
            </div>

            <div class="container pt-4">
                <h2 class="text-center"> {{ $userOnPage->username }} </h2>
            </div>

            <div class="container border-bottom">
                <p class="text-muted text-center"> {{ $userOnPage->first_name . ' ' . $userOnPage->last_name }} </p>
            </div>

            <div class="row pt-4">
                <div class="col">
                    <div class="container">
                        <p class="text-center">
                            <strong>
                                @if ($relationship['status'] == 2)
                                {{ $relationship['follower_user'] }}
                                @else
                                {{ $relationship['follower_onpage'] }}
                                @endif
                            </strong>
                        </p>
                    </div>
                    <div class="container">
                        <a href="/user/{{ $userOnPage->id }}/relationships">
                            <p class="text-center">followers</p>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="container">
                        <p class="text-center">
                            <strong>
                                @if ($relationship['status'] == 2)
                                {{ $relationship['following_user'] }}
                                @else
                                {{ $relationship['following_onpage'] }}
                                @endif
                            </strong>
                        </p>
                    </div>

                    <div class="container">
                        <a href="/user/{{ $userOnPage->id }}/relationships">
                            <p class="text-center">following</p>
                        </a>
                    </div>
                </div>
            </div>

            @if ($relationship['status'] != 2)
            <div class="row justify-content-center">
                <form method="GET" action="/follow">
                    @csrf
                    <input type="hidden" name="onpage_userid" value="{{ $userOnPage->id }}">
                    <input type="hidden" name="relationship_status" value="{{ $relationship['status'] }}">

                    @if ($relationship['status'] == 0)
                    <button type="submit" class="btn btn-primary">Follow</button>
                    @else
                    <button type="submit" class="btn btn-danger">Unfollow</button>
                    @endif
                </form>
            </div>
            @endif

            <div class="row justify-content-center mt-4">
                <a href="/users/{{ $userOnPage->id }}/words">Learned
                    {{ $answer->where('user_id', $userOnPage->id)->where('is_correct', 1)->count() }} words</a>
            </div>
            <div class="row justify-content-center">
                <a href="/users/{{ $userOnPage->id }}/lessons">Learned
                    {{ $category_session->where('user_id', $userOnPage->id)->where('is_finished', 1)->count() }} lessons</a>
            </div>
        </div>


        <div class="col border">
            <div class="row">
                <h4 class="p-4"> Activities </h4>
            </div>

            <!-- inject here to avoid collision with data above -->
            @inject('user', 'App\User')
            @inject('relationship', 'App\Relationship')
            @inject('category', 'App\Category')
            <!--  -->

            @foreach ($activities as $activity)
            <div class="row mt-4">
                <div class="col-3">
                    <img src="/uploads/avatars/{{ $activity->user->avatar }}"
                        class="border img-fluid rounded-circle mx-auto d-block" style="max-width: 100px"
                        alt="User Avatar" />
                </div>
                <div class="col">
                    <div class="container">

                        @if ($activity->activity_type == 'App\Session')
                        {{ $activity->user->first_name }} learned
                        {{ $answer->where('user_id', $userOnPage->id)->where('category_id', $category_session->find($activity->activity_id)->category_id)->where('is_correct', 1)->count() }}
                        of
                        {{ $category->find($category_session->find($activity->activity_id)->category_id)->words->count() }} words
                        in <a
                            href="/categories/{{ $category_session->find($activity->activity_id)->category_id }}">{{ $category->find($category_session->find($activity->activity_id)->category_id)->title }}</a>
                        @elseif ($activity->activity_type == 'App\Relationship')
                        {{ $activity->user->first_name }} followed
                        {{ $user->find($relationship->find($activity->activity_id)->followed_id)->first_name }}
                        @endif
                    </div>
                    <div class="container">
                        <small class="text-muted">{{ $activity->created_at }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
