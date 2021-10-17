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
<div class="card">
  @if(session('mssg'))
  <div class="mssg alert alert-success" role="alert">
  <h2 >
      {{session('mssg')}}
  </h2>
  </div>
  @endif
  <div class="card-body">
    <h1 class="card-title">
    <h1> {{$blog->blog_title}}</h1>
    <h5> by {{$user->name}}  ||  5 mins </h5>
    <p class="card-text">
    {{$blog->blog_desc}}
    {{$blog->blog_text_one}}
<h2>
{{$blog->blog_header_1}}

</h2>
    {{$blog->blog_text_1}}
 <h2>   {{$blog->blog_header_2}}</h2>
    {{$blog->blog_text_2}}
    </p>
  </div>
</div>

<hr>
<h3>All Comments</h3>
@foreach ($comment as $item)
    <div class="card" >
  <div class="card-body">
    <h5 class="card-title"><h4>{{$user->name}}</h4></h5>
    <div class="card" >
  <div class="card-header">
  {{$item->comment_text}}
  </div>
</div>
  </div>
</div>

@endforeach

<hr>

<h3>
  Comment
</h3>
@if (Auth::check())
<form action="{{ route('create-comment')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="co">Please Provide Your Comment</label>
    <textarea name="comment_text" class="form-control"  id="co" cols="30" rows="5"></textarea>
  </div>

<input type="text" hidden name="comment_blog_id" value="{{$blog->id}}">

<input type="text" hidden name="comment_user_id" value="{{ auth()->user()->id }}">

  <div class="form-group">
    <button class="btn btn-primary"  type="submit">Comment</button>
  </div>

</form>

@else

    <div class="alert alert-info" role="alert">
    <h4 class="alert-heading">Login!</h4>
  Please <a href="/login" class="h4 btn btn-success rounded" >Log in</a>  to Comment
  <br> Or <a href="/register" class="h4 btn   btn-success rounded" >Register</a> if you don't have an account .
</div>

@endif
@endsection
</body>
</html>
