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
        <h1>
             Blogs :

        </h1>

        <a href="{{route('create')}}" class="btn btn-lg btn-success">Create Blog + </a>
    <a href="{{route('blogs')}}" class="btn btn-lg btn-success">Visit All Blogs >> </a>
    <hr>
    @foreach($blogs as $blog)
      <div class="card">
  <div class="card-body ">
    <h1 class="card-title primary">{{$blog->blog_title}}</h1>
    {{$blog->blog_desc}}

  </div>
  <a class="h4 border border-success border-4 rounded nav-link" href="{{route('blog',$blog->blog_user_id)}}" >more >> </a>
</div>
<hr>

        @endforeach
@endsection
@if(session('mssg'))
<div class="mssg alert alert-success" role="alert">
<h2 >
    {{session('mssg')}}
</h2>
</div>
@endif

@endsection


</body>
</html>
