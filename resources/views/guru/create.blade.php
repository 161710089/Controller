@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data guru 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('guru.store') }}" method="post" >
			  		{{ csrf_field() }}
			  

			  		<div class="form-group {{ $errors->has('Nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="Nama" class="form-control"  required>
			  			@if ($errors->has('Nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  	<div class="form-group {{ $errors->has('Nik') ? ' has-error' : '' }}">
			  			<label class="control-label">Nik</label>	
			  			<input type="text" name="Nik" class="form-control"  required>
			  			@if ($errors->has('Nik'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nik') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		
<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label><br>	
						<input type="radio" class="radio-control" name="jk" value="Laki-laki">Laki-Laki &nbsp;			  		
						<input type="radio" class="radio-control" name="jk" value="Perempuan">Perempuan			  		
			  		@if ($errors->has('jk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk') }}</strong>
                            </span>
                        @endif
			  				  		






<div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">tempat lahir</label>	
			  			<input type="text" name="tempat_lahir" class="form-control"  required>
			  			@if ($errors->has('tempat_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal lahir</label>	
			  			<input type="date" name="tanggal_lahir" class="form-control"  required>
			  			@if ($errors->has('tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">alamat</label>	
			  			<input type="text" name="alamat" class="form-control"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection