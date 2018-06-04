@extends('layouts.app')
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
			  	<form action="{{ route('kelas.update',$kelas->id) }}" method="post" >
			  		{{ csrf_field() }}
			  		

			  		<div class="form-group {{ $errors->has('nama_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kelas</label>	
			  			<input type="text" name="nama_kelas" class="form-control"  value="{{$kelas->nama_kelas}}" required>
			  			@if ($errors->has('nama_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group {{ $errors->has('id_jurusan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jurusan</label>	
			  			<select  name="id_jurusan" class="form-control" >		
			  				@foreach($jurusan as $data)
			  			<option value="{{ $data->id}}">{{ $data->nama_jurusan}}</option>
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