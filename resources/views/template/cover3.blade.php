@extends('layouts.db')

@section('content')
<div class="container-fluid">
  <body style="background: url(gambar/sc2.jpg) no-repeat center center fixed;
  -webkit-background-size:-cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;"><br><br><br><br><br><br>
  <div class="panel panel-primary">
  <div class="panel-heading">
<center><h2>Data Table</h2></center>
</div>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>Id</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tempat Lahir</th>
        <th>Cita-Cita</th>
        <th>Tanggal lahir</th>
        <th>Hobi</th>
        </tr>
	</thead>
	<tbody>
	@foreach($indra as $data)
	<tr>
  	<td>{{$data -> id}}</td>
 	<td>{{$data -> nis}}</td>
 	<td>{{$data -> nama_siswa}}</td>
 	<td>{{$data -> alamat}}</td>
 	<td>{{$data -> tempat_lahir}}</td>
 	<td>{{$data -> cita_cita}}</td>
 	<td>{{$data -> tanggal_lahir}}</td>
 	<td>{{$data -> hobi}}</td>
  </tr>
  @endforeach
  </tbody>
</table>
</body>
</div>
</div>
@endsection
