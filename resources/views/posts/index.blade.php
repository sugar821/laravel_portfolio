<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>posts/index.php</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>index.php</h1>
    <!-- @foreach($posts as $post)
    <li>{{$post->title}}</li>
    @endforeach -->
    @forelse($posts as $post)
    <li>
      <a href="{{action('PostsController@show', $post)}} ">{{ $post->title}}</a>
    </li>
    @empty
    <li>no posts</li>
    @endforelse
  </div>
  
</body>
</html>