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
	table{
		margin-top: 100px; 
	}
</style>
<body>
	<header class="masthead4">
    	<div class="container">
      		<div class="masthead-subheading">Selamat datang di web para senjakiawan</div>
      		<div class="masthead-heading text-uppercase">Menampilkan jumlah virus senja dan beberapa peralatan senja</div>
    	</div>
    </header>
	<a style="margin-left: 45%;" href="{{ url('/donasi/create') }}" class="btn btn-light">Tambah Data</a>
	@foreach ($donasi as $row)
	<table border="1" width="100%">
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Nominal</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td><img src="{{ $row->getFoto() }}" width="100"></td>
			<td>{{ $row->nama }}</td>
			<td>{{ $row->tanggal }}</td>
			<td>{{ $row->nominal }}</td>
			<td><a href="{{ url('donasi') }}/{{ $row->id }}" class="btn btn-dark btn-block">Delete</a></td>
		</tr>
	</table>
	@endforeach
</body>
@endsection