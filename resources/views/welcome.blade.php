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

        <div class="height-50"></div>

        <div class="container-fluid mt-4">
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
            </div>
        </div>

        <div class="height-50"></div>

        <div class="container-flud bg-light-gray p-5">
            <div class="container pt-5">
                <div class="row">
                    <h3>{{ $laravel->name }}</h3>
                </div>
                <div class="row">
                    <div class="underline"></div>
                </div>
            </div>

            <div class="container mt-4">
                <div class="row">
                    @foreach($laravel->posts()->orderBy('created_at', 'desc')->take(3)->get() as $laravel)
                    <div class="col-md-4">
                        <div class="three-post-row shadow p-3 mb-5 bg-white rounded">
                            <div>
                                <img src="{{ asset($laravel->featured) }}" class="mx-auto d-block img-fluid" alt="" >
                            </div>
                            <div class="mt-1">
                                <h4>{{ $laravel->title }}</h4>
                                {{ $laravel->user->name }} <strong>{{ $laravel->created_at->toFormattedDateString() }}</strong> <span class="float-right">{{ $laravel->category->name }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="container pt-5">
                <div class="row">
                    <h3>{{ $vue->name }}</h3>
                </div>
                <div class="row">
                    <div class="underline"></div>
                </div>
            </div>

            <div class="container mt-4">
                <div class="row">
                    @foreach($vue->posts()->orderBy('created_at', 'desc')->take(3)->get() as $vue)
                    <div class="col-md-4">
                        <div class="three-post-row shadow p-3 mb-5 bg-white rounded">
                            <div>
                                <img src="{{ asset($vue->featured) }}" class="mx-auto d-block img-fluid" alt="" >
                            </div>
                            <div class="mt-1">
                                <h4>{{ $vue->title }}</h4>
                                {{ $vue->user->name }} <strong>{{ $vue->created_at->toFormattedDateString() }}</strong> <span class="float-right">{{ $vue->category->name }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="contaner-fluid bg-light-green p-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('img/newsletter.png') }}" class="img-fluid float-right" alt="Responsive image">
                    </div>
                    <div class="col-md-6 text-center pt-5">
                        <h3 class="text-white">Email Newsletters!</h3>
                        <form action="">
                            <div class="input-group input-group-lg">
                                <input type="text" class="newsletter form-control" placeholder="Your Email Address" aria-label="Your Email Address" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary newsletter-button">Subscribe</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-light mt-3">Sign up for new Seosignt content, updates, surveys & offers.</div>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('img/envelope.png') }}" class="img-fluid float-right" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ asset('js/app.js') }}" defer></script>      
    </body>
</html>
