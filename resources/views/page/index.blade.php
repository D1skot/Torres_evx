@extends('page.layout')
@section('content')
<img class="img-fluid w-100 d-lg-block d-none" src="{{asset('img/banner.png')}}" alt="Torres EVX">
<img class="img-fluid w-100 d-lg-none" src="{{asset('img/banner_mob.png')}}" alt="Torres EVX">
<div class="container-fluid my-lg-5 my-3">
   <h1 class="text-center main_color fw-bold mb-lg-5 mb-3">Poznaj szczegóły wydarzenia</h1>

   <div class="d-flex justify-content-center">
       <a href="{{route('page.agenda')}}">
           <div class="kafla"><img class="img-fluid" src="{{asset('img/kafla1.png')}}" alt="Torres">
            <h5>Agenda Szkolenia</h5>
           </div>
       </a>
       <a href="{{route('page.map_object')}}">
           <div class="kafla"><img class="img-fluid" src="{{asset('img/kafla2.png')}}" alt="Torres">
            <h5>Mapa Obiektu</h5>
           </div>
       </a>
   </div>
</div>
@endsection
