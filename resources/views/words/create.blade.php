@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-4">
        <h4>Add Word - {{ $category->title }}</h4>
    </div>

    <div class="row justify-content-center">
        <div class="col">
            <form method="POST" action="/words">

                <input type="hidden" name="category_id" value="{{ $category->id }}">

                <div class="row">
                    @csrf
                    <div class="col">
                        <div class="form-group mr-4">
                            <label for="question">Question</label>
                            <input type="text" class="form-control" name="question" id="question" />
                        </div>
                    </div>
                    <div class="col">
                        <label for="choice_1">Choices</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    {{ Form::radio('is_correct', '1', 'checked') }}
                                </div>
                            </div>
                            <input type="text" class="form-control" name="choice_1" id="choice_1">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    {{ Form::radio('is_correct', '2') }}
                                </div>
                            </div>
                            <input type="text" class="form-control" name="choice_2">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    {{ Form::radio('is_correct', '3') }}
                                </div>
                            </div>
                            <input type="text" class="form-control" name="choice_3">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    {{ Form::radio('is_correct', '4') }}
                                </div>
                            </div>
                            <input type="text" class="form-control" name="choice_4">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/categories/edit" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
