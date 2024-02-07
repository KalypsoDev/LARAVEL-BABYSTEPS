<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/blog.css'])
    <title>Blog</title>
</head>
<body>
@extends('template/navbarTemplate')
@section('navbar')
    <h1>Vista del blog</h1>
    @foreach($posts as $post)
    <p>
        <strong>{{$post['id']}}</strong>
        <a href="{{route('post', $post['id'])}}">
        <strong>{{$post['titulo']}}</strong>
        </a>


    </p>
    <p> {{$post['contenido']}}</p>
    @endforeach
    @endsection
</body>
</html>