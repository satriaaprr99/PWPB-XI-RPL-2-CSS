@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="300">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-4 ">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ url('uploads') }}/{{ $barang->gambar }}" width="200" height="300" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text">
                        <strong>Harga : </strong>Rp. {{ number_format($barang->harga) }}<br>
                        <strong>Stok : </strong>{{ $barang->stok }} <hr>
                        <strong>Keterangan :</strong> <br>
                        {{ $barang->keterangan }}
                    </p>
                    <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary">Beli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
