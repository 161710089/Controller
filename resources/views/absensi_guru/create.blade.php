@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Absensi Guru
					<div class="panel-title pull-right">
						<a class="btn btn-primary" href="{{route('absensi_guru.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('absensi_guru.store')}}" method="post">
							{{csrf_field()}}

					<div class="form-group {{ $errors->has('id_guru') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama </label>	
			  			<select name="id_guru" class="form-control">
			  				<option>Pilih Guru</option>
			  				@foreach($guru as $data)
			  				<option value="{{ $data->id }}">{{ $data->Nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_guru'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_guru') }}</strong>
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
								<input type="radio" class="radio-control" name="keterangan" value="M">A&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan" value="I">I&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="S">S&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="A">A
								@if ($errors->has('keterangan'))
									<span class="help-blocks">
										<strong>{{$errors->first('keterangan')}}</strong>
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
@endsection