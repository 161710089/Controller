@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Absen Siswa 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('absensi_siswa.update',$absensi_siswa->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		
			  	<div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama siswa</label>	
			  		<select name="id_siswa" class="form-control">
			  					@foreach($siswa as $data)
			  						<option value="{{ $data->id }}" {{$selectsiswa == $data->id ? 'selected="selected"':'' 
			  					}}>{{ $data->Nama }}</option>
			  				@endforeach
			  			</select>
			  						@if ($errors->has('id_siswa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswa') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	
			  	<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama kelas</label>	
			  		<select name="id_kelas" class="form-control">
			  					@foreach($kelas as $data)
			  						<option value="{{ $data->id }}" {{$selectkelas == $data->id ? 'selected="selected"':'' 
			  					}}>{{ $data->nama_kelas }}</option>
			  				@endforeach
			  			</select>
			  						@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  					  		

			  		<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal</label>	
			  			<input type="date" name="tanggal" value="{{ $absensi_siswa->tanggal }}" class="form-control"  required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
								<label class="control-label">keterangan</label><br>
								<input type="radio" class="radio-control" name="keterangan" value="Hadir"{{ $absensi_siswa->keterangan == 'Hadir' ? 'checked' : '' }} >Hadir&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan" value="Izin" {{ $absensi_siswa->keterangan == 'Izin' ? 'checked' : '' }}>Izin&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="Sakit" {{ $absensi_siswa->keterangan == 'Sakit' ? 'checked' : '' }}>Sakit&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="Alfa" {{ $absensi_siswa->keterangan == 'Alfa' ? 'checked' : '' }}>Alfa
								@if ($errors->has('keterangan'))
									<span class="help-blocks">
										<strong>{{$errors->first('keterangan')}}</strong>
									</span>
								@endif
						
			  		                   
			  		<div class="form-group {{ $errors->has('id_PetugasPiket') ? ' has-error' : '' }}">
			  			<label class="control-label"> Petugas Piket</label>	
			  		<select name="id_PetugasPiket" class="form-control">
			  					@foreach($petugas_piket as $data)
			  						<option value="{{ $data->id }}" {{$selectpetugaspiket == $data->id ? 'selected="selected"':'' 
			  					}}>{{ $data->nama_petugas }}</option>
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
