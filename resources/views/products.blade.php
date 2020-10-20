@php

  $data = config('pasta');

  $pasta_lunga = [];
  $pasta_corta = [];
  $pasta_cortissima = [];

  foreach ($data as $key => $products) {
   if ($products["tipo"] == "lunga") {
     $pasta_lunga[$key] = $products;
   } elseif ($products["tipo"] == "corta") {
     $pasta_corta[$key] = $products;
   } elseif ($products["tipo"] == "cortissima") {
     $pasta_cortissima[$key] = $products;
   }
  }

@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Molisana</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <!-- HEADER -->
    <header class="header_cont d_flex">
      <a href="#">
        <img src="{{asset('images/logo_molisana.png')}}" alt="Logo Molisana">
      </a>

      <nav class="nav_list_head">
        <ul class="pagelist_head">
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="{{route('products')}}">Prodotti</a>
          </li>
          <li>
            <a href="#">News</a>
          </li>
        </ul>
      <nav>
    </header>
    <!-- /HEADER -->

    <!-- MAIN -->
    <main class="main_cont">

      <div class="container">
        <!-- pasta_lunga -->
        @if ($pasta_lunga)
        <h2>LE LUNGHE</h2>
        <div class="pasta_link_desc">
          <ul class="pasta_img_list d_flex">
            @foreach ($pasta_lunga as $products)
              <li>
                <a href="products/show/{{$key}}">
                  <img src="{{$products['src']}}" alt="">
                </a>
              </li>
              @endforeach
          </ul>
        </div>
        @endif
        <!-- /pasta_lunga -->

        <!-- pasta_corta -->
        @if ($pasta_corta)
        <h2>LE CORTE</h2>
        <div class="pasta_link_desc">
          <ul class="pasta_img_list d_flex">
            @foreach ($pasta_corta as $products)
              <li>
                <a href="products/show/{{$key}}">
                  <img src="{{$products['src']}}" alt="">
                </a>
              </li>
              @endforeach
          </ul>
        </div>
        @endif
        <!-- /pasta_corta -->

        <!-- pasta_cortissima -->
        @if ($pasta_cortissima)
        <h2>LE CORTISSIME</h2>
        <div class="pasta_link_desc">
          <ul class="pasta_img_list d_flex">
            @foreach ($pasta_cortissima as $products)
              <li>
                <a href="products/show/{{$key}}">
                  <img src="{{$products['src']}}" alt="">
                </a>
              </li>
              @endforeach
          </ul>
        </div>
        @endif
        <!-- /pasta_cortissima -->
      </div>
    </main>
    <!-- /MAIN -->

    <!-- FOOTER -->
    <footer class="footer_cont">
      <div class="container d_flex">
        <div class="frs_col_footer">
          <img src="{{asset('images/logo_molisana.png')}}" alt="Logo Molisana">
          <ul>
            <li>Ragione sociale: La Molisana S.P.A.</li>
            <li>Sede legale: Contrada Colle delle Alpi, 100/A 86100 - Campobasso (CB)</li>
            <li>Pec: lamolisana@pec.it</li>
            <li>Tel: +39 0874 4981</li>
            <li>Fax: +39 0874 629584</li>
            <li>info@lamolisana.it (per segnalazioni degli utenti)</li>
            <li>commerciale@lamolisana.it</li>
            <li>export@lamolisana.it</li>
            <li>Numero verde: 800818081</li>
            <li>Telefono: 3801292455</li>
          </ul>
        </div>

        <div class="scnd_col_footer">
          <h3>PASTIFICIO</h3>
          <ul>
            <li>
              <a href="#">Il Pastificio</a>
            </li>
            <li>
              <a href="#">Grano decorticato a pietra</a>
            </li>
            <li>
              <a href="#">Il Molise c'&egrave;</a>
            </li>
            <li>
              <a href="#">Filiera Integrata</a>
            </li>
            <li>
              <a href="#">100 anni di pasta</a>
            </li>
            <li>
              <a href="#">Sartoria della pasta</a>
            </li>
            <li>
              <a href="#">Spaghetto Quadrato</a>
            </li>
            <li>
              <a href="#">Le Persone</a>
            </li>
          </ul>
          <h3>PRODOTTI</h3>
          <ul>
            <li>
              <a href="#">Le Classiche</a>
            </li>
            <li>
              <a href="#">Le Integrali</a>
            </li>
            <li>
              <a href="#">Le Speciali</a>
            </li>
            <li>
              <a href="#">Le Biologiche</a>
            </li>
            <li>
              <a href="#">Le Gluten-Free</a>
            </li>
            <li>
              <a href="#">Le Semole</a>
            </li>
            <li>
              <a href="#">Le Extra di Lusso</a>
            </li>
          </ul>
        </div>

        <div class="trd_col_footer">
          <h3>COLLEZIONE DA CHEF</h3>
          <ul>
            <li>
              <a href="#">Collezione da Chef</a>
            </li>
            <li>
              <a href="#">Grandi Cucine</a>
            </li>
            <li>
              <a href="#">Biologiche</a>
            </li>
            <li>
              <a href="#">Quadrate</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- /FOOTER -->
  </body>
</html>
