@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center pt-4">
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <h4> {{ $category->title }} </h4>
                </div>
                <div class="col">
                    <h4 class="text-right">1 of 20</h4>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col">
                    <img src="/uploads/avatars/default.png" class="border img-fluid rounded-circle mx-auto d-block"
                        style="max-width: 250px" alt="Character" />
                </div>
                <div class="col">
                    <form>
                        <div class="row justify-content-center p-2">
                            <button type="submit" class="btn btn-primary btn-lg">Answer</button>
                        </div>
                        <div class="row justify-content-center p-2">
                            <button type="submit" class="btn btn-primary btn-lg">Answer</button>
                        </div>
                        <div class="row justify-content-center p-2">
                            <button type="submit" class="btn btn-primary btn-lg">Answer</button>
                        </div>
                        <div class="row justify-content-center p-2">
                            <button type="submit" class="btn btn-primary btn-lg">Answer</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
