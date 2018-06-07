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
			  	<form action="{{ route('absensi_siswa.store') }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		
			  			<label class="control-label">Nama siswa</label>	
			  				<input  class="form-control" value="{{$absensi_siswa->siswa->Nama}}" readonly>
			  		
					<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama kelas</label>	
			  				<input type="text" name="id_kelas" class="form-control" value="{{$absensi_siswa->kelas->nama_kelas}}" readonly>
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
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
			  		<label class="control-label">Keterangan</label><br>
											<label class="radio-inline">
                                                <input type="radio" name="keterangan" value="A" >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="keterangan" value="I">I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="keterangan" value="S">S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="keterangan" value="M">M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="keterangan" value="N" >N
                                            </label>
			  		
			  		                   
			  		<div class="form-group {{ $errors->has('id_PetugasPiket') ? ' has-error' : '' }}">
			  			<label class="control-label"> Petugas Piket</label>	
			  				@foreach($PetugasPiket as $data)
			  				<input type="text" name="id_PetugasPiket" class="form-control" value="{{ Auth::user()->name }}"  readonly> 
			  				             @endforeach
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
