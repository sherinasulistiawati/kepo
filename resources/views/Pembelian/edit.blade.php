@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="jumbotron">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Pembelian - Edit
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('pembelian.update', $pembelian->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<select name="id_barang" class="form-control">
							@foreach($barang as $data)
							<option value="{{$data->id}}">
								{{$data->nama_barang}}
							</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-lable">Nama Supplier</label>
						<select name="id_supplier" class="form-control">
							@foreach($supplier as $data)
							<option value="{{$data->id}}">
								{{$data->nama}}
							</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label class="control-lable">Harga</label>
						<input type="text" name="harga" class="form-control" value="{{$pembelian->harga}}">
					</div>
					<div class="form-group">
						<label class="control-lable">Jumlah Barang</label>
						<input type="text" name="jumlah" class="form-control" value="{{$pembelian->jumlah}}">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection