@extends('layouts.master')

@section('content')
<section class="content mt-5">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
        
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-warning">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{ asset($user->profile->avatar) }}" alt="User Avatar">
                        </div>
                         <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">{{ $user->name }}</h3>
                        <h5 class="widget-user-desc">Lead Developer</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5>
                                    <a href="#" class="nav-link">
                                        Posts <span class="float-right badge bg-success">31</span>
                                    </a>
                                <h5>
                            </li>
                            <li class="nav-item">
                                <h5>
                                    <a href="#" class="nav-link">
                                        Email<span class="float-right badge bg-secondary">{{ $user->email }}</span>
                                    </a>
                                <h5>
                            </li>
                            <li class="nav-item">
                                <h5>
                                    <a href="{{ asset($user->profile->facebook) }}" class="nav-link">
                                        Facebook <span class="float-right badge bg-primary">{{ $user->profile->facebook }}</span>
                                    </a>
                                <h5>
                            </li>
                            <li class="nav-item">
                                <h5>
                                    <a href="{{ asset($user->profile->youtube) }}" class="nav-link">
                                        Youtube <span class="float-right badge bg-danger">{{ $user->profile->youtube }}</span>
                                    </a>
                                <h5>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <h5>About You: </h5><p>{{ $user->profile->about }}</p>
                                </a>
                            </li>
                        </ul>
                       
                    </div>
                </div>
                <a href="{{ route('profile.edit') }}" class="btn btn-primary col-md-4">Edit profile</a>
            </div>
        </div>
    </div>
</section>
@endsection