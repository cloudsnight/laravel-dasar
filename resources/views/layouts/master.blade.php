<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  @yield('style')
</head>
<body>
  <header>
    <nav>
      <a href="/">Home</a>
      <a id="blog" href="/blog">Blog</a>
      <a id="content" href="/blog/1">Content</a>
      <a id="create" href="/blog/create">Create</a>
    </nav>
  </header>
  <br>

  @yield('content')

  <br>
  <footer>
    <h4>&copy; Laravel dan Sekolahkoding 2016 - 2019</h4>
  </footer>
</body>
</html>