<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>New Crud</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>
  <body>
    <header>
      <nav>
        <a href="/">Database</a>
        <a href="/addData">Add New data</a>
      </nav>
    </header>
    <div class="main">
      @yield('main')
    </div>
  </body>
</html>
