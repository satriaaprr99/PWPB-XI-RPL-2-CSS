@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ url('images/slide1.jpg') }}" class="d-block w-60" alt="..." width="100%">
              <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('images/slide2.jpg') }}" class="d-block w-60" alt="..." width="100%">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('images/slide3.jpg') }}" class="d-block w-60" alt="..." width="100%">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
         <div class="carousel-item">
            <img src="{{ url('images/slide2.jpg') }}" class="d-block w-60" alt="..." width="100%">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('images/slide3.jpg') }}" class="d-block w-60" alt="..." width="100%">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
@endsection
