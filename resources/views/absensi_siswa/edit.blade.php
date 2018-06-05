ed@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('absensi_siswa.update',$absensi_siswa->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		

			  		<div class="form-group {{ $errors->has('Nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="Nama" class="form-control" value="{{$absensi_siswa->siswa->Nama}}" required>
			  			@if ($errors->has('Nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('id_jurusan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jurusan</label>	
			  			<select name="id_jurusan" class="form-control">
			  				@foreach($jurusan as $data)
			  				<option value="{{ $data->id }}" >{{ $data->nama_jurusan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_jurusan') }}</strong>
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