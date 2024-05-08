@extends('page.layout')
@section('content')
<div class="container-fluid my-lg-5 my-3">
   <h1 class="text-center main_color fw-bold mb-lg-4 mb-3">Witaj w świecie nowoczesnej mobilności!</h1>
   <p class="main_color text-center fw-bold mb-4 mb-lg-5">Odkryj mapę obiektu i przygotuj się na intensywne doświadczenia szkoleniowe</p>
   <div class="row">
   	<div class="col-lg-6 d-flex align-items-center justify-content-center">
   		<h1 class="text-center main_color fw-bold">Mapa Obiektu</h1>
   	</div>
   	<div class="col-lg-6 pe-lg-0">
   		<img class="img-fluid w-100" src="{{asset('img/map.webp')}}" alt="Torres EVX">
   	</div>
   </div>
</div>
@endsection
