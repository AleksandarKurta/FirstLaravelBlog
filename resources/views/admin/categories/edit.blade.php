@extends('layouts.master')

@section('content')
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h5>Edit Category</h5>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('category.update', ['category' => $category]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Edit category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection