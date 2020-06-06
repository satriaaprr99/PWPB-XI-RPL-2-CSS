@extends('layouts.app')

@section('content')

<style type="text/css">
	.foto{
		border: 1px solid;
		text-align: center;
		width: 400px;
		margin-top: 100px;
	}
	.judul{
		text-align: center;
		width: 400px;
	}
	.deskripsi{
		text-align: center;
		width: 400px;
	}
	.button{
		border: 1px solid;
		text-align: center;
		width: 400px;
	}
	body{
		margin-top: -25px;
	}
</style>

<body>
	<header class="masthead2">
    <div class="container">
      <div class="masthead-subheading">Selamat datang di web para senjakiawan</div>
      <div class="masthead-heading text-uppercase">Menampilkan jumlah virus senja dan beberapa peralatan senja</div>
    </div>
  </header>
  <br><br><br><br>
<a style="margin-left: 45%;" href="{{ url('/berita/create') }}" class="btn btn-light">Tambah Data</a>
	@foreach ($berita as $row)
	<br>
	<div class="container">
		<div class="foto">
			<div><img src="{{ $row->getFoto()}}"width="100"></div>
		</div>
		<div class="judul">
			<div>{{ $row->judul }}</div>
		</div>
		<div class="deskripsi">
			<div>{{ $row->deskripsi }}</div>
		</div>
		<div class="button">
			<div><a class="btn btn-dark btn-block" href="{{ url('/berita/' . $row->id . '/edit') }}">Edit</a></div>
		</div>
		<div class="button">
			<div><a href="" class="btn btn-dark btn-block">Delete</a></div>
		</div>
	</div>
	@endforeach
</body>	
@endsection