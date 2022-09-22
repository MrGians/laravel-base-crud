<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="gianluca mura">
  <!-- Stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <title>Laravel Comics</title>
</head>
<body>
  <!-- Header -->
  @include('includes.header')
  <!-- Main -->
  <main>
    <!-- Jumbotron -->
    <section id="jumbotron"></section>
    
    @yield('main-content')
  </main>
  <!-- Footer -->
  @include('includes.footer')

  @yield('add-js')
</body>
</html>