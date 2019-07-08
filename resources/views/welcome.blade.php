@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">

    <div class="col pt-4">
        <h1 class="display-4 text-center"> Framgia E-Learning </h1>
    </div>

    <div class="container pt-4">
        <p class=" text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit lorem quis felis ornare posuere. Integer vestibulum, ante eget pulvinar tempus, augue lectus sagittis turpis, vitae volutpat metus magna venenatis sem. Donec tristique nibh nisi, non laoreet velit mattis ac. Cras et commodo lorem, id aliquet diam. Pellentesque tincidunt tortor eu dui lacinia commodo at et purus. Quisque eu condimentum nisl. Curabitur finibus pulvinar ultrices. Curabitur maximus et quam at sollicitudin. Fusce vestibulum a mauris et rhoncus.

Phasellus fringilla eleifend ornare. Fusce vel imperdiet neque, ut vehicula arcu. Quisque dignissim magna id dictum vestibulum. Etiam lobortis diam ac sagittis porta. Proin pellentesque auctor urna vel condimentum. Maecenas sagittis nec elit eu gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate vehicula sapien eu sagittis. Ut at pretium lacus. Aliquam eros metus, vestibulum at urna vitae, ullamcorper pharetra ex. Quisque nec mi rhoncus, sodales turpis sed, ultricies tellus. Sed nec leo quis dolor mollis tristique ut non tortor. Fusce molestie et nisl et consequat. Sed sed bibendum est. Pellentesque suscipit mi ac justo tempus eleifend. </p>
    </div>
</div>
</div>

<<<<<<< HEAD
<<<<<<< HEAD
@endsection('content')
=======
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Framgia E-Learning
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
>>>>>>> [SELS-TASK] User Dashboard
=======
@endsection('content')
>>>>>>> [SELS-TASK] User Edit Page and Home Page
