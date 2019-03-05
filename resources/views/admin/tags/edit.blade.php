@extends('layouts.master')

@section('content')
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h5>Edit Tag</h5>
                        </div>

                        <div class="card-body">

                            @include('admin.includes.errors')

                            <form action="{{ route('tag.update', ['tag' => $tag]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="tag">Tag Name</label>
                                    <input type="text" name="tag" class="form-control" value="{{ $tag->tag }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Edit tag</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection