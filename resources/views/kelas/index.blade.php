@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Kelas
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		    
<td colspan="5"  class=" text-center" >No</td>
<td  colspan="5" class="text-center ">@sortablelink('nama_kelas')</td>
<td  colspan="5" class="text-center ">Nama Jurusan</td>
					</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($kelas as $data)


				  	  <tr>
				    	<td colspan="5" class="text-center ">{{ $no++ }}</td>
				    	<td colspan="5" class="text-center ">{{ $data->nama_kelas }}</td>
				    	<td colspan="5" class="text-center ">{{ $data->jurusan->nama_jurusan }}</td>
				    
						<td>
							<a class="btn btn-warning" href="{{ route('kelas.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('kelas.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection

				    
				    