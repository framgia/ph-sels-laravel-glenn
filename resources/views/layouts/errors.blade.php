@if ($errors->any())
    <div class="row justify-content-center p-4">            
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)                                       
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif