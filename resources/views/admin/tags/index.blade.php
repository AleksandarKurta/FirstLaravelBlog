@extends('layouts.master')

@section('content')
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h5>Tags List</h5>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Tag Id</th>
                                    <th>Tag Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @if($tags->count() > 0)
                                        @foreach($tags as $tag)
                                            <tr>
                                                <td>{{ $tag->id }}</td>
                                                <td>{{ $tag->tag }}</td>
                                                <td>
                                                <a href="{{ route('tag.edit', ['tag' => $tag ]) }}" class="btn btn-info text-white btn-sm"><i class="fas fa-edit"></i></a>
                                                </td>
                                                <form action="{{ route('tag.destroy', ['tag' => $tag])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <td>
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                    @else 
                                        <tr>
                                            <th colspan="5" class="text-center">No posts to show</th>
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