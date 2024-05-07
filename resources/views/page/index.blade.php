@extends('page.layout')
@section('content')
 <img class="img-fluid w-100" src="{{asset('img/banner.webp')}}" alt="Torres EVX">
<div class="container-fluid">
   <h1 class="text-center main_color fw-bold my-lg-5 my-3">Poznaj szczegóły wydarzenia</h1>

   <div class="d-flex">
       <a href="#">
           <div class="kafla"><img src="{{asset('img/kafla.webp')}}" alt=""></div>
       </a>
       <a href="#">
           <div class="kafla"><img src="{{asset('img/kafla.webp')}}" alt=""></div>
       </a>
   </div>
</div>
@endsection
