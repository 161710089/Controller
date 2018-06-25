{{-- @extends('layouts.admin')
@section('content')


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  <div class="panel-body">
			  	<form action="{{ route('siswa.store') }}"  method="post" >
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
			  		
			  	<div class="form-group {{ $errors->has('Nis') ? ' has-error' : '' }}">
			  			<label class="control-label">Nis</label>	
			  			<input type="text" name="Nis" class="form-control"  required>
			  			@if ($errors->has('Nis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nis') }}</strong>
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
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('siswa.index') }}">
                        {{ csrf_field() }}


                    
              <div class="form-group{{ $errors->has('Nis') ? ' has-error' : '' }}">
                            <label for="Nis" class="col-md-4 control-label">Nis</label>

                            <div class="col-md-6">
                                <input id="Nis" type="text" class="form-control" name="Nis" value="{{ old('Nis') }}" required>

                                @if ($errors->has('Nis'))
                                  <div class="invalid-feedback">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nis') }}</strong>
                                    </span>
                                   </div> 
                                @endif
                            </div>
                        </div>

          <div class="form-group{{ $errors->has('Nama') ? ' has-error' : '' }}">
                            <label for="Nama" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="Nama" type="text" class="form-control" name="Nama" value="{{ old('Nama') }}" required>

                                @if ($errors->has('Nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                
                    <div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Nama kelas</label> 
                        <select id="kelas" name="id_kelas" class="form-control" >
                        <option id="kelas">Pilih kelas</option>
                        
                        @foreach($kelas as $data)
                        <option id="kelas" value="{{ $data->id}}">{{ $data->nama_kelas}}</option>
                        @endforeach
                    
                        </select>
                        @if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
                    </div>
                
              
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password_confirmation" required>
                              @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    
<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Jenis Kelamin</label><br>  
                        <input id="jk" type="radio" class="radio-control" name="jk" value="Laki-laki">Laki-Laki &nbsp;                  
                        <input id="jk" type="radio" class="radio-control" name="jk" value="Perempuan">Perempuan                 
                    @if ($errors->has('jk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk') }}</strong>
                            </span>
                        @endif
  </div>                                  



              
          <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                            <label for="tempat_lahir" class="col-md-4 control-label">tempat Lahir</label>

                            <div class="col-md-6">
                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>

                                @if ($errors->has('tempat_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   

          <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                            <label for="tanggal_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>

                                @if ($errors->has('tanggal_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                                 
          <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

              
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
