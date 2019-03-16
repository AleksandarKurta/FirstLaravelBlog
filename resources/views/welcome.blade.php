@include('frontIncludes.header')

@include('frontIncludes.navbar')

        <div class="height-50"></div>

        <div class="container-fluid mt-4">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
                        <div>
                            <img src="{{ asset($firstPost->featured) }}" class="mx-auto d-block img-fluid" alt="" >
                        </div>
                        <div class="mt-1">
                            <h3>
                                <a href="{{ route('post.single', ['slug' => $firstPost->slug ])}}">{{ $firstPost->title }}</a>
                            </h3>
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
                                <h4><a href="{{ route('post.single', ['slug' => $laravel->slug ])}}">{{ $laravel->title }}</a></h4>
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
                                <h4><a href="{{ route('post.single', ['slug' => $vue->slug ])}}">{{ $vue->title }}</a></h4>
                                {{ $vue->user->name }} <strong>{{ $vue->created_at->toFormattedDateString() }}</strong> <span class="float-right">{{ $vue->category->name }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

@include('frontIncludes.newsletter')

@include('frontIncludes.footer')
