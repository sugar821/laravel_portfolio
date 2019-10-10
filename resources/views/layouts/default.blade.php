<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/styles.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="row navbar-dark bg-dark sticky-top">
  <a href="{{ url('/')}}" class="nav-link ml-5" >home</a>
  <a href="{{ url('/posts/create')}}" class="nav-link">new</a>  
</nav>

  <div class="container">
    @yield('content')
  </div>
  
</body>
</html>