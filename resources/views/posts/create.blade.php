@extends('layouts.default')

@section('title')
  create
@endsection

@section('content')
  <h1>create.php</h1>
  <form method="post" action="{{ url('/posts') }}">
    {{ csrf_field() }}
    <p>
      <input type="text" name="title" placeholder="title" value="{{old('title')}}">
      @if ($errors->has('title'))
        <span class="error">{{ $errors->first('title') }}</span>
      @endif
    </p>
    
    <p>
      <textarea name="body" id="" placeholder="body" value="{{old('body')}}"></textarea>
      @if ($errors->has('body'))
        <span class="error">{{ $errors->first('body') }}</span>
      @endif
    </p>
    <p><input type="submit" value="add"></p>
  </form>
@endsection