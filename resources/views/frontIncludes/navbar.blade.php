<div class="container-fluid bg-dark">
    <nav class="container navbar navbar-expand-lg">
        <div class="mr-5">
            <h3>{{ $settings->site_name }}</h3>
        </div>
        <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
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