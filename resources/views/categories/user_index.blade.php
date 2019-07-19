@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <h4>Learned Lessons</h4>
    </div>

    <div class="row"><table class="table">
            <thead>
                <tr>
                    <th scope="col">Lesson</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category_sessions as $category_session)
                    <td>{{ $category_session->category->title }}</td>
                    <td>{{ $category_session->category->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
