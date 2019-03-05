@extends('layouts.master')

@section('content')
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h5>Create Tag</h5>
                        </div>

                        <div class="card-body">

                            @include('admin.includes.errors')

                            <form action="{{ route('tag.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="tag">Tag Name</label>
                                    <input type="text" name="tag" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create tag</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection