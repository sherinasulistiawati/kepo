@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="jumbotron">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Supplier
			<div class="panel-title pull-right"><a href="/supplier/create">+Tambah Data</a></div></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Nama Supplier</th>
							<th>Alamat</th>
							<th colspan="3"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
						@foreach($supplier as $data)
						<tr>
							<td>{{$data->nama}}</td>
							<td>{{$data->alamat}}</td>
							<td>
								<a class="btn btn-success" href="/supplier/{{$data->id}}/edit"><i class="fa fa-btn fa-edit"></i></span>Edit</a>
							</td>
							<td>
								<a class="btn btn-primary" href="/supplier/{{$data->id}}"><i class="fa fa-btn fa-info-circle"></i>Show</a>
							</td>
							<td>
								<form action="{{route('supplier.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<input type="submit" class="btn btn-danger" value="Delete">
									{{csrf_field()}}
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