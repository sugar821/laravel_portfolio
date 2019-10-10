@extends('layouts.default')

@section('title')
  Blog posts
@endsection

@section('content')
  <h1>index.php</h1>
    @forelse($posts as $post)
      <li>
        <a href="{{action('PostsController@show', $post)}} ">{{ $post->title}}</a>
        <a href="{{ action('PostsController@edit', $post) }}">edit</a>
        <a href="#" class="del" data-id="{{ $post->id }}">del</a>
        <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        </form>
      </li>
    @empty
      <li>no posts</li>
    @endforelse
    <script src="/js/main.js"></script>
@endsection