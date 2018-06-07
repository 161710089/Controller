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
			  	<form action="{{ route('laporan_absensi_siswa.update',$laporan_absensi_siswa->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama siswa</label>	
			  				@foreach($siswa as $data)
			  				<input type="text" name="id_siswa" value="{{ $data->id }}" readonly>
			  				@endforeach
			  				@if ($errors->has('id_siswa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswa') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama kelas</label>	
			  				@foreach($kelas as $data)
			  		<input type="text" name="id_kelas" value="{{ $data->id }}" readonly>			
			  				@endforeach
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  				  		

			  		<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal</label>	
			  			<input type="text" name="tanggal" class="form-control" value="{{$absensi_siswa->siswa->tanggal}}" required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="tanggal" class="form-control" value="{{$absensi_siswa->siswa->tanggal}}" required>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('id_PetugasPiket') ? ' has-error' : '' }}">
			  			<label class="control-label"> Petugas Piket</label>	
			  				@foreach($PetugasPiket as $data)
			  				<input type="text" name="id_PetugasPiket" value="{{ Auth::user()->name }}" >
			  				             {{ Auth::user()->name }}                        
			  				             @endforeach
			  			@if ($errors->has('id_PetugasPiket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_PetugasPiket') }}</strong>
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