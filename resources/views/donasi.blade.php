@extends('layouts.app')

@section('content')
<style type="text/css">
	body{
		margin-top: -25px;
	}
	table{
		margin-top: 100px;
		width: 100%; 
		text-align: center;
	}
</style>
<body>
	<header class="masthead4">
    	<div class="container">
      		<div class="masthead-subheading">Selamat datang di web para senjakiawan</div>
      		<div class="masthead-heading text-uppercase">Menampilkan jumlah virus senja dan beberapa peralatan senja</div>
    	</div>
    </header>

	<a style="margin-left: 45%; margin-top: 100px; font-size: 30px;" href="{{ url('/donasi/create') }}" class="btn btn-success">Donasi</a>

	
	<table border="1" class="table table-striped table-hover table-sm table-active">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Nominal</th>
			<th>Aksi</th>
		</tr>
		</thead>
		@foreach ($donasi as $row)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td><img src="{{ $row->getFoto() }}" width="100" height="80"></td>
			<td>{{ $row->nama }}</td>
			<td>{{ $row->tanggal }}</td>
			<td>{{ $row->nominal }}</td>
			<td><a href="{{ url('donasi') }}/{{ $row->id }}" class="btn btn-dark btn-block">Delete</a></td>
		</tr>
	@endforeach
	</table>
</body>
@endsection