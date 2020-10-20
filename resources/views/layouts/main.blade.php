<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    @include('partials_blade.header')
    <!-- MAIN -->
    <main class="main_cont">
      @yield('content_main')
    </main>
    <!-- /MAIN -->
    @include('partials_blade.footer')

    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
