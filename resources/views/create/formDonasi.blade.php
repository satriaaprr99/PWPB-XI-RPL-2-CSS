<!DOCTYPE html>
<html>
	<head>
	<style type="text/css">
		body{
			font-family: consolas;
		}
		table{
			margin: auto;
			margin-top: 100px;
			width: 50%;
			height: 400px;
	    border: 4px solid grey;
	  }
	</style>
	</head>
<body>
	@if(session('error'))
	<div class="alert alert-danger">
		{{ session('error') }}
	</div>
	@endif

	@if(count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Perhatian</strong>
		<br>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="{{ url('donasi', @$donasi->id ) }}" method="POST" enctype="multipart/form-data">
			@csrf

      @if(!empty($donasi))
        @method('PATCH')
      @endif

		<table class="bg-secondary">
      <tr>
        <td colspan="5"><h1 align="center">Form donasi</h1></td>
      </tr>
			<tr class="form-group row" class="nis">
				<td class="col-sm-2">Nama</td>
				<td>:</td>
		    	<td class="col-sm-3">
     				<input type="text" name="nama" class="form-control" value="{{ old('nama', @$donasi->nama ) }}">
   		 		</td>
  			</tr>
  			<tr class="form-group row" class="nis">
				<td class="col-sm-2">Nominal</td>
				<td>:</td>
		    	<td class="col-sm-3">
     				<input type="text" name="nominal" class="form-control" value="{{ old('nominal', @$donasi->nominal ) }}">
   		 		</td>
  			</tr>
        <tr class="form-group row">
          <td class="col-sm-2 col-form-label">FOTO</td>
          <td>:</td>
          <td>
            <input type="file" class="form-control" value="{{ old('FOTO', @$donasi->foto) }}" name="foto">
          </td>
        </tr>
  			<tr class="form-group row">
    			<td class="col-sm-10" colspan="3">
      				<input type="submit" class="btn btn-success btn-block" value="simpan">
    			</td>
  			</tr>
  		</table>	
	</form>
</body>
</html>