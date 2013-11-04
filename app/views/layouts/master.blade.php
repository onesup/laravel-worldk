<!-- Stored in app/views/layouts/master.blade.php -->
<html>
<head>
  <title>
    @section('title')
      World Kitchen
    @show
  </title>
</head>
<body>
  <h1>hi</h1>
    @section('sidebar')
        This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>