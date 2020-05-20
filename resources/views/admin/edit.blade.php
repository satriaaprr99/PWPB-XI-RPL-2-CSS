@extends('layouts.app')

@section('content')

@if(session('success'))
<div class="container">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Selamat!</strong> {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger" role="alert">
  {{ session('error') }}
</div>
@endif

@if(Auth::user()->status == 'admin')
<div class="container">
  <div class="modal-body">
    <form action="/admin/{id}/edit" method="post">
      @csrf
        <div class="form-group">
          <label for="nama_barang">Nama Barang</label>
          <input name="nama_barang" type="text" class="form-control" id="nama_barang" value="{{ old('barangs', @$barangs->nama_barang) }}">
        </div>

        <div class="form-group">
          <label for="harga">Harga</label>
          <input name="harga" type="text" class="form-control" id="harga" value="{{ old('barangs', @$barangs->harga) }}">
        </div>

        <div class="form-group">
          <label for="stok">Stok</label>
          <input name="stok" type="text" class="form-control" id="stok" value="{{ old('barangs', @$barangs->stok) }}">
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ old('barangs', @$barangs->keterangan) }}</textarea>
        </div>

        <div class="form-group">
          <label for="nama_barang">Upload Gambar</label>
          <input name="gambar" type="text" class="form-control" id="gambar">
        </div>    

</div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
  </div>       
</div>

@else
<div class="panel-body">
  KAMU BUKAN ADMIN!!
</div>
@endif
@endsection