@extends('layouts.app')
@section('content')
@include('components.navbar')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($products as $item)
        <div class="carousel-item {{$item['id'] == 1? 'active':''}}">
        <img src="dist/img/products/{{ $item['gallery']}}" class="slider-img">
        <div class="carousel-caption slider-text">
            <h3>{{ $item['name']}}</h3>
            <p>{{ $item['description']}}</p>
        </div>
        </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection