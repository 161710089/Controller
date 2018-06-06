@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Kelas 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('laporan_absensi_siswa.store') }}" method="post" >
			  		{{ csrf_field() }}
			  	
			  		<div class="form-group {{ $errors->has('Nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kelas</label>	
			  			<select  name="id_siswa" class="form-control" >
			  			<option>Pilih siswa</option>
			  			
			  			@foreach($siswa as $data)
			  			<option value="{{ $data->id}}">{{ $data->Nama}}</option>
			  			@endforeach
			  		
			  			</select>
			  			@if ($errors->has('Nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama kelas</label>	
			  			<select  name="id_kelas" class="form-control" >
			  			<option>Pilih kelas</option>
			  			
			  			@foreach($kelas as $data)
			  			<option value="{{ $data->id}}">{{ $data->nama_kelas}}</option>
			  			@endforeach
			  		
			  			</select>
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
  	
					<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal</label>	
			  			<input type="date" name="tanggal" class="form-control"  required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
			  		</div>
			

					<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="keterangan" class="form-control"  required>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		

	<div class="form-group {{ $errors->has('id_PetugasPiket') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama PetugasPiket</label>	
			  			<select  name="id_PetugasPiket" class="form-control" >
			  			<option>Pilih PetugasPiket</option>
			  			
			  			@foreach($Petugas as $data)
			  			<option value="{{ $data->id}}">{{ $data->nama_Petugas}}</option>
			  			@endforeach
			  		
			  			</select>
			  			@if ($errors->has('id_PetugasPiket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_PetugasPiket') }}</strong>
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