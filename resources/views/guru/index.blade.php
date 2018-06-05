@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">guru
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                   
<td colspan="5"  class="success text-center" >No</td>
<td  colspan="5" class="text-center success">Nama </td>
<td colspan="5"  class="success text-center" >Nik</td>
<td  colspan="5" class="text-center success">jenis kelamin</td>
<td  colspan="5" class="text-center success">tempat_lahir</td>
<td  colspan="5" class="text-center success">tanggal lahir</td>
<td  colspan="5" class="text-center success">Alamat</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($guru as $data)


                      <tr>
                        <td colspan="5" class="text-center success">{{ $no++ }}</td>
                        <td colspan="5" class="text-center success">{{ $data->Nama }}</td>
                        <td colspan="5" class="text-center success">{{ $data->Nik }}</td>
                        <td colspan="5" class="text-center success">{{ $data->jk }}</td>
                        <td colspan="5" class="text-center success">{{ $data->tempat_lahir }}</td>
                        <td colspan="5" class="text-center success">{{ $data->tanggal_lahir }}</td>
                        <td colspan="5" class="text-center success">{{ $data->alamat}}</td>
                    
                        <td>
                            <a class="btn btn-warning" href="{{ route('guru.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('guru.destroy',$data->id) }}">
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

                    
                    