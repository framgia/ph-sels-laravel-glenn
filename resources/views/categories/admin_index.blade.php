@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-4">
        <h4> Categories </h4>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form method="POST" action="/words/create">
                                @csrf
                                <input type="hidden" name="category_id" value="{{ $category->id }}">
                                <button type="submit" class="btn btn-primary" name="add_word">Add Word</button>
                            </form>

                            <a href="/categories/{{ $category->id }}/edit" class="btn btn-primary ml-4">Edit</a>
                            <form method="POST" action="/categories/{{ $category->id }}" class="ml-4">
                                @csrf

                                <input type="hidden" name="category_id" value="{{ $category->id }}">

                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" name="add_word">Delete</button>
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
