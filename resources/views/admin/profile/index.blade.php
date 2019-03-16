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
                            <img class="img-circle elevation-2" src="@if(isset($user->profile->avatar)){{ asset($user->profile->avatar) }}@endif" alt="User Avatar">
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
                                    <a href="@if(isset($user->profile->facebook)){{ asset($user->profile->facebook) }}@endif" class="nav-link">
                                        Facebook <span class="float-right badge bg-primary">@if(isset($user->profile->facebook)){{ $user->profile->facebook }}@endif</span>
                                    </a>
                                <h5>
                            </li>
                            <li class="nav-item">
                                <h5>
                                    <a href="@if(isset($user->profile->youtube)){{ asset($user->profile->youtube) }}@endif" class="nav-link">
                                        Youtube <span class="float-right badge bg-danger">@if(isset($user->profile->youtube)){{ $user->profile->youtube }}@endif</span>
                                    </a>
                                <h5>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <h5>About You: </h5><p>@if(isset($user->profile->about)){{ $user->profile->about }}@endif</p>
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