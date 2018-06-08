@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Absen Guru 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('absensi_guru.update',$absensi_guru->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}

			  		<div class="form-group {{ $errors->has('id_guru') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Guru</label>	
			  		<select name="id_guru" class="form-control">
			  					@foreach($guru as $data)
			  						<option value="{{ $data->id }}" {{$selectguru == $data->id ? 'selected="selected"':'' 
			  					}}>{{ $data->Nama }}</option>
			  				@endforeach
			  			</select>
			  						@if ($errors->has('id_guru'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_guru') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
							  		
			  		<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal</label>	
			  			<input type="date" name="tanggal" class="form-control" required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
								<label class="control-label">keterangan</label><br>
								<input type="radio" class="radio-control" name="keterangan" value="M"{{ $absensi_guru->keterangan == 'M' ? 'checked' : '' }} >M&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan" value="I" {{ $absensi_guru->keterangan == 'I' ? 'checked' : '' }}>I&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="S" {{ $absensi_guru->keterangan == 'S' ? 'checked' : '' }}>S&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="A" {{ $absensi_guru->keterangan == 'A' ? 'checked' : '' }}>A
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
