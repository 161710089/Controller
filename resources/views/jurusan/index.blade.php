@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">jurusan
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                   
<td colspan="5"  class="text-center " >No</td>
<td  colspan="5" class="text-center ">Nama Jurusan</td>
<td  colspan="5" class="text-center ">Action</td>
                    
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($jurusan as $data)


                      <tr>
                        <td colspan="5" class="text-center ">{{ $no++ }}</td>
                        <td colspan="5" class="text-center ">{{ $data->nama_jurusan }}</td>
                        
                        <td colspan="5" class="text-center">
                            <a class="btn btn-warning" href="{{ route('jurusan.edit',$data->id) }}">Edit</a>
                        </td>
                        <td colspan="5" class="text-center">
                            <form method="post" action="{{ route('jurusan.destroy',$data->id) }}">
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

                    
                    