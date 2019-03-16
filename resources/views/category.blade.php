@include('frontIncludes.header')

@include('frontIncludes.navbar')

    <div class="container-fluid bg-primary img-repeat">
        <div class="row h-100 justify-content-center align-items-center p-3">
            <h1>Category - {{ $category->name }}</h1>
        </div>
    </div>

    <div class="height-50"></div>

    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                @if($category->posts->count())
                    @foreach($category->posts as $post)
                    <div class="col-md-4">
                        <div class="three-post-row shadow p-3 mb-5 bg-white rounded">
                            <div>
                                <img src="{{ asset($post->featured) }}" class="mx-auto d-block img-fluid" alt="" >
                            </div>
                            <div class="mt-1">
                                <h4><a href="{{ route('post.single', ['slug' => $post->slug ])}}">{{ $post->title }}</a></h4>
                                {{ $post->user->name }} <strong>{{ $post->created_at->toFormattedDateString() }}</strong> <span class="float-right">{{ $post->category->name }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else 
                    <div class="alert alert-warning mb-5" role="alert">
                        <h3 class="alert-heading text-center">No posts found for this category!</h3>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                      </div>
                @endif
            </div>
        </div>
    </div>

    <div class="height-50"></div>


@include('frontIncludes.newsletter')

@include('frontIncludes.footer')