<div class="container-fluid bg-purple text-white">
    <nav class="container navbar navbar-expand-lg text-white">
        <div class="mr-5 text-white site-name">
            {{ $settings->site_name }}
        </div>
        <div class="collapse navbar-collapse ml-5 " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
                </ul>
            <form action="/results" method="GET" class="form-inline my-2 my-lg-0">
                <div class="input-group">
                    <input type="search" name="query" class="newsletter form-control" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success newsletter-button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</div>