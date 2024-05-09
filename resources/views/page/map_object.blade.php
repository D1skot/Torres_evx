@extends('page.layout')
@section('content')
<div class="container-fluid my-lg-5 my-3">
    <h1 class="text-center main_color fw-bold mb-lg-4 mb-3">Witaj w świecie nowoczesnej mobilności!</h1>
    <p class="main_color text-center fw-bold mb-4 mb-lg-5">Odkryj mapę obiektu i przygotuj się na intensywne doświadczenia szkoleniowe</p>
    <div class="row">
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <h1 class="text-center main_color fw-bold">Mapa Obiektu</h1>
        </div>
        <div class="col-lg-6 pe-lg-0 map">
            <a href="{{asset('img/map.png')}}" data-fancybox="group">
                <img class="img-fluid w-100" src="{{asset('img/map.png')}}" alt="Torres EVX">
            </a>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   $(document).ready(function() {
    $(".map a").fancybox();
});
</script>
@endsection
