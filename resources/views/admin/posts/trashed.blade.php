@extends('layouts.master')

@section('content')
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h5>Trashed Posts</h5>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Post Id</th>
                                    <th>Featured Image</th>
                                    <th>Title</th>
                                    <th>Restore</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @if($posts->count() > 0)
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>
                                                <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}" width="70px">
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>
                                                <a href="{{ route('posts.restore', ['id' => $post->id])}}" class="btn btn-success text-white btn-sm"><i class="fas fa-trash-restore"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{ route('posts.kill', ['id' => $post->id])}}" class="btn btn-danger text-white btn-sm"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else 
                                         <tr>
                                            <th colspan="5" class="text-center">No trashed posts to show</th>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection