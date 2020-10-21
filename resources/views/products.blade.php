@extends('layouts.main')

@php

  $data = config('pasta');

  $pasta_lunga = [];
  $pasta_corta = [];
  $pasta_cortissima = [];

  foreach ($data as $key =>$products) {
   if ($products["tipo"] == "lunga") {
     $pasta_lunga[$key] = $products;
   } elseif ($products["tipo"] == "corta") {
     $pasta_corta[$key] = $products;
   } elseif ($products["tipo"] == "cortissima") {
     $pasta_cortissima[$key] = $products;
   }
  }

@endphp

@section('title')
  La Molisana - Prodotti
@endsection

@section('content_main')
<div class="main_cont">
  <div class="container">
    <!-- pasta_lunga -->
    @if (!empty($pasta_lunga))
    <h2>LE LUNGHE</h2>
    <div class="pasta_link_desc">
      <ul class="pasta_img_list d_flex">
        @foreach ($pasta_lunga as $key => $products)
          <li>
            <a href="products/show/{{$key}}">
              <img src="{{$products['src']}}" alt="Immagine">
            </a>
            <a class="link_hover" href="products/show/{{$key}}">
              <h5>{{$products['titolo']}}</h5>
              <img src="{{asset('images/icon.svg')}}" alt="Icon">
            </a>
          </li>
          @endforeach
      </ul>
    </div>
    @endif
    <!-- /pasta_lunga -->

    <!-- pasta_corta -->
    @if (!empty($pasta_corta))
    <h2>LE CORTE</h2>
    <div class="pasta_link_desc">
      <ul class="pasta_img_list d_flex">
        @foreach ($pasta_corta as $key => $products)
          <li>
            <a href="products/show/{{$key}}">
              <img src="{{$products['src']}}" alt="Immagine">
            </a>
            <a class="link_hover" href="products/show/{{$key}}">
              <h5>{{$products['titolo']}}</h5>
              <img src="{{asset('images/icon.svg')}}" alt="Icon">
            </a>
          </li>
          @endforeach
      </ul>
    </div>
    @endif
    <!-- /pasta_corta -->

    <!-- pasta_cortissima -->
    @if (!empty($pasta_cortissima))
    <h2>LE CORTISSIME</h2>
    <div class="pasta_link_desc">
      <ul class="pasta_img_list d_flex">
        @foreach ($pasta_cortissima as $key => $products)
          <li>
            <a href="products/show/{{$key}}">
              <img src="{{$products['src']}}" alt="Immagine">
            </a>
            <a class="link_hover" href="products/show/{{$key}}">
              <h5>{{$products['titolo']}}</h5>
              <img src="{{asset('images/icon.svg')}}" alt="Icon">
            </a>
          </li>
          @endforeach
      </ul>
    </div>
    @endif
    <!-- /pasta_cortissima -->
  </div>
</div>
@endsection
