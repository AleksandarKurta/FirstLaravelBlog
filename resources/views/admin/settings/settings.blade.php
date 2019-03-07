@extends('layouts.master')

@section('content')
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h5>Settings</h5>
                        </div>

                        <div class="card-body">

                            @include('admin.includes.errors')

                            <form action="{{ route('settings.update', ['setting' => $setting]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="site_name">Site name</label>
                                <input type="text" name="site_name" class="form-control" value="{{ $setting->site_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="text" name="contact_number" class="form-control" value="{{ $setting->contact_number }}">
                                </div>
                                <div class="form-group">
                                    <label for="contact_email">Contact Email</label>
                                    <input type="email" name="contact_email" class="form-control" value="{{ $setting->contact_email }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{ $setting->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="footer_information">Footer Information</label>
                                    <textarea name="footer_information" id="footer_information" class="form-control" cols="30" rows="10">{{ $setting->footer_information }}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Edit settings</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#footer_information').summernote();
        });
      </script>
@endsection