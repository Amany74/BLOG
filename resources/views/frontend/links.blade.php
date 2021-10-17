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
<h1>links</h1>
@if(Auth::check())
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Blog Title</th>
            <th>View Blog</th>
            <th>Delete Blog</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $item)
        <tr>
            <td scope="row">{{ $item->id}}</td>
            <td>{{ $item->blog_title}}</td>
            <td>
                <a class="btn btn-success" href="{{url('blogs')}}/{{ $item->id}}">View</a>
            </td>
            <td>

            <a class="btn btn-danger" href="{{url('blogs/delete')}}/{{ $item->id}}">Delete</a>
</td>
<td> <pre>Warning !! you can't delete
      others blog , Only yours </pre></td>

        </tr>
        @endforeach


        @else

<div class="alert alert-info" role="alert">
<h4 class="alert-heading">Login!</h4>
Please <a href="/login" class="h4 btn btn-success rounded" >Log in</a>  to create New Blog
<br> Or <a href="/register" class="h4 btn   btn-success rounded" >Register</a> if you don't have an account .
</div>

@endif

    </tbody>
</table>


@endsection
</body>
</html>
