@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">siswa
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                   
<td colspan="5"  class=" text-center" >No</td>
<td  colspan="5" class="text-center ">Nama </td>
<td colspan="5"  class=" text-center" >Nis</td>
<td  colspan="5" class="text-center ">Kelas</td>
<td  colspan="5" class="text-center ">jenis kelamin</td>
<td  colspan="5" class="text-center ">tempat_lahir</td>
<td  colspan="5" class="text-center ">tanggal lahir</td>
<td  colspan="5" class="text-center ">Alamat</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($siswa as $data)


                      <tr>
                        <td colspan="5" class="text-center ">{{ $no++ }}</td>
                        <td colspan="5" class="text-center ">{{ $data->Nama }}</td>
                        <td colspan="5" class="text-center ">{{ $data->Nis }}</td>
                        <td colspan="5" class="text-center ">{{ $data->kelas->nama_kelas }}</td>
                        <td colspan="5" class="text-center ">{{ $data->jk }}</td>
                        <td colspan="5" class="text-center ">{{ $data->tempat_lahir }}</td>
                        <td colspan="5" class="text-center ">{{ $data->tanggal_lahir }}</td>
                        <td colspan="5" class="text-center ">{{ $data->alamat}}</td>
                    
                        <td>
                            <a class="btn btn-warning" href="{{ route('siswa.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('siswa.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                      </tr>
                      @endforeach   
                    </tbody>
                  </table>
                  <ul id="pagination" class="pagination-sm"></ul>

        <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
          </div>
        </div>
                </div>
              </div>
            </div>  
        </div>
    </div>
</div>
@endsection

                    
                    