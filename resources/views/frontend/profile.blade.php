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
    @foreach ($my_blog as $item)
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">
            <h1> {{$item->blog_title}}</h1>
            <p class="card-text">
            {{$item->blog_desc}}
            {{$item->blog_text_one}}
        <h2>
        {{$item->blog_header_1}}

        </h2>
            {{$item->blog_text_1}}
         <h2>   {{$item->blog_header_2}}</h2>
            {{$item->blog_text_2}}
            </p>
          </div>
<table class="table">
    <tbody>
        <tr>
            <td>
                <a class="btn btn-primary" href="{{url('blogs/update')}}/{{ $item->id}}">Update</a>
            </td>
            <td>
                <a class="btn btn-danger" href="{{url('blogs/delete')}}/{{ $item->id}}">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
      @endforeach
</div>

@endsection



</body>
</html>
