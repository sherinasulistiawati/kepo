@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="jumbotron">
		<div class="panel panel-primary">
			<div class="panel-heading">Laporan Penjualan
			<div class="panel-title pull-right"></div></div>
			<div class="panel-body">
			<label>Dari Tanggal</label>
			<input type="date" name="">
			<label>Sampai Tanggal</label>
			<input type="date" name="">
			<a href="laporan/pembelian/1" class="btn btn-info">Submit</a>
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Nama Pelanggan</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					?>
						@foreach($penjualan as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->created_at}}</td>
							<td>{{$data->pelanggan->nama}}</td>
							<td>Rp.{{$data->total_harga}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				Jumlah Uang keluar dari tanggal {{$a}} sampai {{$b}}: Rp.{{$sum}}
			</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection