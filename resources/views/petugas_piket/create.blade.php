@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Aneka kaisar 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('absensi_siswa.store') }}" method="post" >
			  		{{ csrf_field() }}
			  	                            <tr class="odd gradeX">
                                            <td>{{ $siswa->nis }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td class="text-center">Laki - Laki</td>

                                            <td>-</td>
                                            <td>85733743907</td>
                                            <td class="text-center">
                                                                                    <div class="form-group">


                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="1" value="A" checked >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="1" value="I">I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="1" value="S">S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="1" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="1" value="N" >N
                                            </label>




                                        </div>

                                            </td>

                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>siswa2</td>
                                            <td>Alfaiz Faroko</td>
                                            <td class="text-center">Laki - Laki</td>

                                            <td>-</td>
                                            <td>81332036346</td>
                                            <td class="text-center">
                                                                                    <div class="form-group">


                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="2" value="A" checked >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="2" value="I">I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="2" value="S">S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="2" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="2" value="N" >N
                                            </label>




                                        </div>

                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                                        <button type="submit" class="btn btn-success">SImpan Data</button>
	<div class="form-group {{ $errors->has('berkuasa') ? ' has-error' : '' }}">
			  			<label class="control-label">Berkuasa</label>	
			  			<input type="text" name="berkuasa" class="form-control"  required>
			  			@if ($errors->has('berkuasa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('berkuasa') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('periode') ? ' has-error' : '' }}">
			  			<label class="control-label">Periode</label>	
			  			<input type="text" name="periode" class="form-control"  required>
			  			@if ($errors->has('periode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('periode') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="text" name="tgl_lahir" class="form-control"  required>
			  			@if ($errors->has('tgl_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_lahir') }}</strong>
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