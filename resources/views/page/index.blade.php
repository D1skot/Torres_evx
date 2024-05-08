@extends('page.layout')
@section('content')
<img class="img-fluid w-100" src="{{asset('img/banner.webp')}}" alt="Torres EVX">
<div class="container-fluid my-lg-5 my-3">
   <h1 class="text-center main_color fw-bold mb-lg-5 mb-3">Poznaj szczegóły wydarzenia</h1>

   <div class="d-flex justify-content-center">
       <a href="{{route('page.agenda')}}">
           <div class="kafla"><img class="img-fluid" src="{{asset('img/kafla.webp')}}" alt="Torres">
            <h5>Agenda Szkolenia</h5>
           </div>
       </a>
       <a href="{{route('page.map_object')}}">
           <div class="kafla"><img class="img-fluid" src="{{asset('img/kafla.webp')}}" alt="Torres">
            <h5>Mapa Obiektu</h5>
           </div>
       </a>
   </div>
</div>
@endsection
