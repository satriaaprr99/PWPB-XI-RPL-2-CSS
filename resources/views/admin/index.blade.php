@extends('layouts.app')

@section('content')

@if(Auth::user()->status == 'admin')
<style type="text/css">
  div[class=panel-body]{
    margin-left: 50px;
  }
</style>
<div class="container">
  <div class="p-3 mb-2 bg-dark text-white">Data Barang</div>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          <?php $no = 1; ?>
          
        <tr>
          <th scope="row">{{ $no++ }}</th>
         
        </tr>
           
      </tbody>
    </table>
  </div>
</div>
@else
<div class="panel-body">
  KAMU BUKAN ADMIN!!<br>
  ASLINA LURD IEU MAH ENTE SANES ADMIN!!!<br>
  BALIK DEUI WEH
</div>
@endif
@endsection