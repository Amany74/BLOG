@extends('layouts.app')
@push('css')
<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
@endpush
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
@section('second-col')
@if(Auth::check())

                <h1>Create New Blog</h1>
            <form method="post" action="/welcome">
            @csrf

            <div class="mb-3">
                <label for="blog_title" class="form-label">Blog Title</label>
                <input type="text" name="blog_title" id="blog_title" class="form-control">
            </div>

            <hr>



            <div class="mb-3">
                <label for="blog_desc" class="form-label">Blog description</label>
                <input type="text" name="blog_desc" id="blog_desc" class="form-control">
            </div>

            <hr>



            <div class="mb-3">
                <label for="blog_text_one" class="form-label">Blog main text</label>
                <textarea type="text" name="blog_text_one" id="blog_text_one" class="form-control"></textarea>
            </div>

            <hr>



            <div class="mb-3">
                <label for="blog_header_1" class="form-label">Blog Header one</label>
                <input type="text" name="blog_header_1" id="blog_header_1" class="form-control">
            </div>

            <hr>



            <div class="mb-3">
                <label for="blog_text_1" class="form-label">Blog Text for Header one</label>
                <textarea type="text" name="blog_text_1" id="blog_text_1" class="form-control"></textarea>
            </div>

            <hr>

            <div class="mb-3">
                <label for="blog_header_2" class="form-label">Blog Header Two</label>
                <input type="text" name="blog_header_2" id="blog_header_2" class="form-control">
            </div>

            <hr>



            <div class="mb-3">
                <label for="blog_text_2" class="form-label">Blog Text for Header Two</label>
                <textarea type="text" name="blog_text_2" id="blog_text_2" class="form-control"></textarea>
            </div>

            <hr>

            <button type="submit" class="btn btn-lg btn-success">Submit</button>
            </form>

@else

    <div class="alert alert-info" role="alert">
    <h4 class="alert-heading">Login!</h4>
  Please <a href="/login" class="h4 btn btn-success rounded" >Log in</a>  to create New Blog
  <br> Or <a href="/register" class="h4 btn   btn-success rounded" >Register</a> if you don't have an account .
</div>

@endif

@endsection
</body>
</html>


