@extends('layouts.default')

@section('title')
  blog show
@endsection

@section('content')
  <h1>{{$post->title}}</h1>
  <p>{!! nl2br(e($post->body)) !!}</p>
  <p><a href="{{ action('PostsController@edit', $post) }}">edit</a></p>
  <hr>
  <h2>comments</h2>
    @forelse($post->comments as $comment)
      <li>
        {{ $comment->body }}
        <a href="#" class="del" data-id="{{ $comment->id }}">del</a>
        <form method="post" action="{{ action('CommentsController@destroy',[$post,$comment]) }}" id="form_{{ $comment->id }}">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        </form>
      </li>
    @empty
      <li>no comments</li>
    @endforelse

    <form method="post" action="{{ action('CommentsController@store',$post) }}">
    {{ csrf_field() }}
    <p>
      <input type="text" name="body" placeholder="enter comment" value="{{old('body')}}">
      @if ($errors->has('body'))
        <span class="error">{{ $errors->first('body') }}</span>
      @endif
    </p>
    <p><input type="submit" value="add comment"></p>
    </form>

    <script src="/js/main.js"></script>
@endsection
