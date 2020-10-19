<?php
  asset('db/data.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Molisana</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <a href="#">
        <img src="{{asset('images/logo_molisana.png')}}" alt="Logo Molisana">
      </a>
    </header>
    <!-- /HEADER -->

    <!-- MAIN -->
    <main>
      @if ($lunga)
      <h2>Lunga</h2>
      <ul>
        @foreach ($lunga as products)
          <li>
            <img src="{{prodotto['src']}}" alt="">
            <h4>{{$prodotto['titolo']}}</h4>
          </li>
          @endforeach
      </ul>
      @endif
    </main>
    <!-- /MAIN -->

    <!-- FOOTER -->
    <footer>

    </footer>
    <!-- /FOOTER -->
  </body>
</html>
