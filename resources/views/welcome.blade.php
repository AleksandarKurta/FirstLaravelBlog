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
       
        <div class="container-fluid bg-dark">
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
                    <form action="" method="POST" class="form-inline my-2 my-lg-0">
                        <div class="input-group">
                            <input type="search" class="newsletter form-control" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-success newsletter-button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
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
                        <form action="" method="POST">
                            <div class="input-group input-group-lg">
                                <input type="text" class="newsletter form-control" placeholder="Your Email Address" aria-label="Your Email Address" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success newsletter-button">Subscribe</button>
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

        <div class="container-fluid bg-dark p-5">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <div class="underline-light-green mb-3"></div>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget purus sit amet lorem elementum sagittis sed sit amet odio. Vestibulum vel ante sagittis, aliquam mi ut, sagittis est. Nunc placerat vitae nisl nec mollis. In vulputate nibh ut nulla dictum, non pharetra tellus tristique. Nullam consequat laoreet quam, vitae pharetra ante porttitor vitae. Pellentesque id ultrices metus. Donec tempor nisl at felis viverra, in maximus lectus lobortis. Aenean sed eros eleifend, pellentesque risus et, maximus felis. Etiam suscipit, mauris in rutrum tincidunt, ex nunc viverra orci, ut laoreet quam ex accumsan orci. Aenean vestibulum aliquet libero eget rhoncus.</p> 
                </div>
            </div>

            <div class="container h-100 mt-5 border-top border-secondary">
                <div class="row h-100 justify-content-center align-items-center p-3">
                    <div class="col-md-4 d-flex align-items-center">
                        <i class="fas fa-phone-square fa-7x"></i>&nbsp;&nbsp;
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <i class="fas fa-envelope-open-text fa-7x"></i>&nbsp;&nbsp;
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <i class="fas fa-globe-europe fa-7x"></i>&nbsp;&nbsp;
                        Lorem ipsum dolor sit amet
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ asset('js/app.js') }}" defer></script>      
    </body>
</html>
