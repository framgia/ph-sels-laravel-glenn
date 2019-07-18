@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center pt-4">
        <div class="col-8">
            <div class="row mb-4">
                <div class="col">
                    <h4>{{ $category->title }}</h4>
                </div>
                <div class="col">
                    <h4 class="text-right">{{ $words->currentPage() }} of {{ $category->words->count() }}</h4>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col align-self-center">
                    @foreach ($words as $word)
                    <h1>{{ $word->question }}</h1>
                    @endforeach
                </div>

                <div class="col">

                    <form method="POST" action="/quizControl">

                        @csrf
                        <input type="hidden" name="nextPage" value="{{ $words->nextPageUrl() }}">
                        <input type="hidden" name="prevPage" value="{{ $words->previousPageUrl() }}">
                        <input type="hidden" name="word_id" value="{{ $word->id }}">
                        <input type="hidden" name="category_id" value="{{ $category->id }}">

                        <div class="row justify-content-center">
                            <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                @foreach ($word->choices as $choice)
                                <label class="btn btn-success mb-4">
                                    <input type="radio" name="choice_id" value="{{ $choice->id }}"
                                        autocomplete="off">{{ $choice->content }}
                                </label>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="btn-group" role="group">
                    @if ($words->currentPage() != 1)
                    <a href="{{ $words->previousPageUrl() }}" class="btn btn-primary btn-lg mr-4">Previous</a>
                    @endif
                    <button type="submit" class="btn btn-primary btn-lg">
                    @if ($words->currentPage() != $category->words->count())
                        Next
                    @else
                        Submit
                    @endif
                    </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
