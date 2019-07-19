@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <h4>Learned Words</h4>
    </div>

    <div class="row"><table class="table">
            <thead>
                <tr>
                    <th scope="col">Word</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($answers as $answer)
                <tr>
                    <td>{{ $answer->choice->content }}</td>
                    <td>{{ $answer->category->title }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
