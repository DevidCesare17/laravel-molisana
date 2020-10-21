@extends('layouts.main')

@section('title')
La Molisana - Immettere titolo
@endsection

@section('content_main')

<div class="bgcolor_main">
  <h1 class="title_type">{{$data["titolo"]}}</h1>
  <div class="img_list_desc">
    <a class="prev_link" href="{{route('desc_products', $prev_id)}}"><i class="fas fa-chevron-left"></i></a>
    <img class="big_img" src="{{$data['src-h']}}" alt="Immagine pasta">
    <img class="pack_img" src="{{$data['src-p']}}" alt="Pacco pasta">
    <a class="next_link" href="{{route('desc_products', $next_id)}}"><i class="fas fa-chevron-right"></i></a>
  </div>
  <div class="container">
    <p class="description_type">{!!$data["descrizione"]!!}</p>
  </div>
</div>

@endsection
