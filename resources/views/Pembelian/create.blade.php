@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="jumbotron">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Pembelian - Create
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('pembelian.store')}}" method="post">
					{{csrf_field()}}

					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<select name="id_barang" class="form-control">
						<option></option>
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
						<option></option>
							@foreach($supplier as $data)
							<option value="{{$data->id}}">
								{{$data->nama}}
							</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label class="control-lable">Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-lable">Jumlah Barang</label>
						<input type="text" name="jumlah" class="form-control" >
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
					@if ($errors->any())
  					<div class="alert alert-danger alert-dismissible" role="alert">
    				 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
  					<ul>
  					  @foreach ($errors->get('harga') as $error)
  					  <li>{{ $error }}</li>
   					 @endforeach
						 </ul>
						</em>
						</div>
					@endif
				</form>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection