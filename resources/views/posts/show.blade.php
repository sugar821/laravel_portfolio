@extends('layouts.default')

@section('title')
  blog show
@endsection

@section('content')
  <h1>{{$post->title}}</h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
    <p><a href="{{ action('PostsController@edit', $post) }}">edit</a></p>
@endsection
