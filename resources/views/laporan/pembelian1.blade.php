@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="jumbotron">
		<div class="panel panel-primary">
			<div class="panel-heading">Laporan Data Pembelian
			<div class="panel-title pull-right"></div></div>
			<div class="panel-body">
			<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Supplier</th>
							<th>Total Harga</th>
						</tr>
						</thead>
					<?php
					$no = 1;
					?>
						@foreach($pembelian as $data)
						<tbody>
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->created_at}}</td>
							<td>{{$data->supplier->nama}}</td>
							<td>Rp.{{$data->total_harga}}</td>
						</tr>
						</tbody>
						@endforeach
				</table>
				Jumlah Uang keluar dari tanggal {{$a}} sampai {{$b}}: Rp.{{$sum}}
			</div>
			</div>
		</div>
	</div>
	</div>
</div>
@endsection