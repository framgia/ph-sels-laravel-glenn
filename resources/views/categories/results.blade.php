@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h4> Results </h4>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <h4>{{ $category->title }}</h4>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Word</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Result</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($answers as $answer)
                <tr>
                    <td>{{ $answer->word->question }}</td>
                    <td>
                        @if ($answer->choice == null)
                            <b>No Answer</b>
                        @else
                            {{ $answer->choice->content }}
                        @endif
                    </td>
                    <td>
                        @if ($answer->is_correct)
                        ◯
                        @else
                        ✗
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row justify-content-center mt-4">
        <a href="/categories" class="btn btn-primary btn-lg">Back to Categories</a>
    </div>
</div>
@endsection
