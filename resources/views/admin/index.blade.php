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
  <div class="p-3 mb-2 bg-dark text-white">Data Barang</div>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> Tambah Data
    </button>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Keterangan</th>
          <th scope="col" colspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody>
          <?php $no = 1; ?>
          @foreach ($barangs as $b)
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td>{{ $b->gambar }}</td>
          <td>{{ $b->nama_barang }}</td>
          <td>Rp. {{ number_format($b->harga) }}</td>
          <td>{{ $b->stok }}</td>
          <td>{{ $b->keterangan }}</td>
          <td>
            <a class="btn btn-danger btn-sm" href="{{ url('admin') }}/{{ $b->id }}" onclick="return confirm('Anda yakin akan menghapus data ?');" ><i class="fa fa-trash"></i></a>
          </td>
          <td>
            <a class="btn btn-primary btn-sm" href="/admin/{{$b->id}}/edit"><i class="fa fa-edit"></i></a>
          </td>
        </tr>
          @endforeach
      </tbody>
    </table>

<!-- Modal tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/admin/tambah" method="post">
              @csrf
              <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input name="nama_barang" type="text" class="form-control" id="nama_barang">
              </div>

              <div class="form-group">
                <label for="harga">Harga</label>
                <input name="harga" type="text" class="form-control" id="harga">
              </div>

              <div class="form-group">
                <label for="stok">Stok</label>
                <input name="stok" type="text" class="form-control" id="stok">
              </div>

              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
              </div>

              <div class="form-group">
                <label for="nama_barang">Upload Gambar</label>
                <input name="gambar" type="text" class="form-control" id="gambar">
              </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
           </form>
        </div>
      </div>
    </div>
  </div>
</div>
@else
<div class="panel-body">
  KAMU BUKAN ADMIN!!
</div>
@endif
@endsection