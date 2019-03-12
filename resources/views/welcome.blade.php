<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <body>
       
        <div class="container-fluid bg-primary">
            <nav class="container navbar navbar-expand-lg">
                <div class="mr-5">
                    <h3>{{ $settings->site_name }}</h3>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @foreach($categories as $category)
                            <h5>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ $category->name }}</a>
                            </li>
                        </h5>
                        @endforeach
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </nav>
        </div>

        <div class="height-100"></div>

        <div class="container-fluid mt-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
                        <div>
                            <img src="{{ asset($firstPost->featured) }}" class="mx-auto d-block img-fluid" alt="" >
                        </div>
                        <div class="mt-1">
                            <h4>{{ $firstPost->title }}</h4>
                            {{ $firstPost->user->name }} <strong>{{ $firstPost->created_at->toFormattedDateString() }}</strong> <span class="float-right">{{ $firstPost->category->name }}</span>
                        </div>
                    </div>
                </div>

                <div class="height-50"></div>

                <div class="row justify-content-center align-items-center mt-5 mb-5">
                    <div class="col-md-5 shadow p-3 mb-5 bg-white rounded">
                        <div>
                            <img src="{{ asset($secondPost->featured) }}" class="mx-auto d-block img-fluid" alt="" >
                        </div>
                        <div class="mt-1">
                            <h4>{{ $secondPost->title }}</h4>
                            {{ $secondPost->user->name }} <strong>{{ $secondPost->created_at->toFormattedDateString() }}</strong> <span class="float-right">{{ $secondPost->category->name }}</span>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-5 shadow p-3 mb-5 bg-white rounded">
                        <div>
                            <img src="{{ asset($thirdPost->featured) }}" class="mx-auto d-block img-fluid" alt="" >
                        </div>
                        <div class="mt-1">
                            <h4>{{ $thirdPost->title }}</h4>
                            Admin <strong>{{ $thirdPost->created_at->toFormattedDateString() }}</strong> <span class="float-right">{{ $thirdPost->category->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="height-100"></div>

        <div class="container-flud">
            <div class="container">
                <h3>{{ $laravel->name }}</h3>
                <div class="row">
                    @foreach($laravel->posts()->orderBy('created_at', 'desc')->take(3)->get() as $post)
                    <div class="col-md-3 shadow p-3 mb-5 mr-5 bg-white rounded">
                        <div>
                            <img src="{{ asset($post->featured) }}" class="mx-auto d-block img-fluid" alt="" >
                        </div>
                        <div class="mt-1">
                            <h4>{{ $post->title }}</h4>
                            {{ $post->user->name }} <strong>{{ $post->created_at->toFormattedDateString() }}</strong> <span class="float-right">{{ $post->category->name }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    <script src="{{ asset('js/app.js') }}" defer></script>      
    </body>
</html>
