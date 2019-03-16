@include('frontIncludes.header')

@include('frontIncludes.navbar')

<div class="container-fluid bg-primary img-repeat">
    <div class="row h-100 justify-content-center align-items-center p-3">
        <h1>{{ $post->title }}</h1>
    </div>
</div>

<div class="height-100"></div>

<div class="container-fluid">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-10">
                <img src="{{ asset($post->featured) }}" class="img-fluid" alt="Responsive image">
                <div class="mt-2">
                    <h5 class="text-muted">Posted by <strong class="text-dark">{{ $post->user->name }}</strong>&nbsp;&nbsp; <i><i class="far fa-clock"></i>{{ $post->created_at->toFormattedDateString() }}</i>&nbsp;&nbsp; <a href="{{ route('category', ['id' => $post->category->id ]) }}">{{ $post->category->name}}</a></h5>
                </div>

                <div class="mt-5 single-content">
                    <p>{!! $post->content !!}</p>
                </div>

                <div class="tags mt-4">
                    #Tags&nbsp;&nbsp;
                    @foreach($post->tags as $tag)
                        <a href="{{ route('tag', ['id' => $tag->id]) }}" class="btn btn-outline-secondary btn-lg tag-button">{{ $tag->tag }}</a>
                    @endforeach
                    <hr>
                </div>

                <div class="user mt-5 mb-5 p-5 bg-light-gray">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset($post->user->profile->avatar) }}" class="img-fluid" alt="Responsive image" width="120px">
                        </div>
                        <div class="col-md-10 pt-3">
                            <h3 class="text-muted"><strong class="text-dark">{{ $post->user->name }}</strong>&nbsp;&nbsp;-&nbsp;&nbsp;SEO specialist</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                     </div>
                </div>

                <div class="indicators mt-3">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-md-6">
                            @if($prevPost)
                        <a class="text-secondary" href="{{ route('post.single', ['slug' => $prevPost->slug])}}"><span class="fa-layers fa-fw fa-7x">
                                <i class="far fa-hand-point-left"></i>
                                <span style="font-size: 70px">Prev</span>
                            </span></a>
                            @endif
                        </div>
                        <div class="col-md-6">
                            @if($nextPost)
                            <div class="float-right">
                                <a class="text-secondary" href="{{ route('post.single', ['slug' => $nextPost->slug])}}"><span class="fa-layers fa-fw fa-7x">
                                    <span style="font-size: 70px">Next</span>
                                    <i class="far fa-hand-point-right"></i>
                                </span></a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>

                <div class="share-to-socials text-center mt-3 mb-3">
                    <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox_uy1z"></div>
                </div>
                <hr>

                <div class="comments text-center">
                    <h1>Comments</h1>

                    @include('frontIncludes.disqus')
                    
                </div>

                <div class="height-100"></div>

                <div class="all-tags text-center">
                    <h1>All Blog Tags</h1>
                    <hr>
                    @foreach($tags as $t)
                        <a href="{{ route('tag', ['id' => $t->id]) }}" class="btn btn-outline-secondary btn-lg tag-button m-1">{{ $t->tag }}</a>
                    @endforeach
                </div>

                <div class="height-50"></div>
            </div>
        </div>
    </div>
</div>

@include('frontIncludes.newsletter')

@include('frontIncludes.footer')