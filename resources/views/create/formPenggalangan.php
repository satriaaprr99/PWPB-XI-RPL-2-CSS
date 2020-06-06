<!-- <head>
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
	<form action="{{ url('penggalangan', @$penggalangan->id ) }}" method="POST" enctype="multipart/form-data">
			@csrf

      @if(!empty($penggalangan))
        @method('PATCH')
      @endif

		<table class="bg-secondary">
      <tr>
        <td colspan="5"><h1 align="center">Form penggalangan</h1></td>
      </tr>
			<tr class="form-group row" class="nis">
				<td class="col-sm-2">judul</td>
				<td>:</td>
		    	<td class="col-sm-3">
     				<input type="text" name="judul" class="form-control" value="{{ old('judul', @$penggalangan->judul ) }}">
   		 		</td>
  			</tr>
  			<tr class="form-group row">
    			<td class="col-sm-2 col-form-label">terkumpul</td>
    			<td>:</td>
    			<td class="col-sm-3">
      				<input type="text" class="form-control" value="{{ old('terkumpul', @$penggalangan->terkumpul) }}" name="terkumpul">
    			</td>
  			</tr>
  			<tr class="form-group row" class="nis">
				<td class="col-sm-2">donatur</td>
				<td>:</td>
		    	<td class="col-sm-3">
     				<input type="text" name="donatur" class="form-control" value="{{ old('donatur', @$penggalangan->donatur ) }}">
   		 		</td>
  			</tr>
        <tr class="form-group row">
          <td class="col-sm-2 col-form-label">FOTO</td>
          <td>:</td>
          <td>
            <input type="file" class="form-control" value="{{ old('FOTO', @$penggalangan->foto) }}" name="foto">
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
</html> -->