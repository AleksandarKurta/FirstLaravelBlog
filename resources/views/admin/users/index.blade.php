@extends('layouts.master')

@section('content')
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h5>Users List</h5>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <th>User Id</th>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @if($users->count() > 0)
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>
                                                <img src="{{ asset($user->profile->avatar) }}" alt="" width="25px">
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                @if($user->admin)
                                                    <a href="{{ route('user.notadmin', ['id'=> $user->id]) }}" class="btn btn-danger btn-sm">Remove permissions</a>
                                                @else 
                                                    <a href="{{ route('user.admin', ['id'=> $user->id]) }}" class="btn btn-success btn-sm">Make Admin</a>
                                                @endif
                                            </td>
                                            <form action="{{ route('user.destroy', ['user' => $user])}}" method="POST">
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