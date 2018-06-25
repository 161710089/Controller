@extends('layouts.petugas')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Absensi Siswa
					<div class="panel-title pull-right">
						<a href="{{route('absensi_siswa.index')}}">Kembali</a>
					</div>
					</div>
					
					<div class="panel-body">
						<form action="{{route('absensi_siswa.store')}}" method="post">
							{{csrf_field()}}

					<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  					<label class="control-label">Nama Kelas </label>	
			  					<select name="id_kelas" class="form-control" >
			  					<option>Pilih Kelas</option>
			  					@foreach($kelas as $data)
			  						<option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>
	
					<div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
			  					<label class="control-label">Nama Siswa </label>	
			  					<select name="id_siswa" class="form-control" >
			  					<option>Pilih Siswa</option>
			  					@foreach($siswa as $data)
			  						<option value="{{ $data->id }}">
			  							{{ $data->Nama }}|{{ $data->Nis }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_siswas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswas') }}</strong>
                            </span>
                        @endif
			  		</div>
					

					

					<div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal</label>
								<input type="date" class="form-control" name="tanggal" required>
								@if ($errors->has('tanggal'))
									<span class="help-blocks">
										<strong>{{$errors->first('tanggal')}}</strong>
									</span>
								@endif
							</div>

					<div class="form-group {{$errors->has('keterangan') ? 'has-error' : ''}}">
								<label class="control-label">keterangan</label><br>
								<input type="radio" class="radio-control" name="keterangan" value="Hadir">Hadir&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan" value="Izin">Izin&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="Sakit">Sakit&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="Alfa">Alfa
								@if ($errors->has('keterangan'))
									<span class="help-blocks">
										<strong>{{$errors->first('keterangan')}}</strong>
									</span>
								@endif

							</div>
<div class="form-group {{ $errors->has('id_user') ? 'has error' : '' }}">
			  			<select name="id_user" class="form-control">
			  				<option>Pilih Nama User</option>
			  				@foreach($user as $data)
			  				<option value="{{ $data->id }}">{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_user'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('id_user') }}</strong>
			  			</span>
			  			@endif
			  		</div>


					<div class="form-group {{ $errors->has('id_PetugasPiket') ? ' has-error' : '' }}">
			  					<label class="control-label">Nama Petugas </label>	
			  					<select name="id_PetugasPiket" class="form-control">
			  					<option>Pilih Petugas</option>
			  					@foreach($petugas_piket as $data)
			  						<option value="{{ $data->id }}">{{ $data->nama_petugas }}</option>
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
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#kelas').change(function() {
			$('#nama').html('');
			$.ajax({
				method : 'GET',
				dataType: 'html',
				url : 'filter/kelas/' + $(this).val(),
				success : function(data){
					$('#nama').append(data);
				},
				error : function() {
					$('#nama').html('Tidak Ada Hasil');
				}

			});			
		});
		$('#class').change(function() {
			$('#name').html('');
			$.ajax({
				method : 'GET',
				dataType: 'html',
				url : 'filter/kelas/' + $(this).val(),
				success : function(data){
					$('#name').append(data);
				},
				error : function() {
					$('#name').html('Tidak Ada Hasil');
				}

			});			
		})
	});
</script>

@endsection

