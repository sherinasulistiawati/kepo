@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="jumbotron">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Barang
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('barang.store')}}" method="post">
					{{csrf_field()}}

					<div class="form-group">
						<label class="control-lable">Kode Barang</label>
						<input type="text" name="kode_barang" class="form-control" required="" >
					</div>
					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<input type="text" name="nama_barang" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga Barang</label>
						<input type="text" name="harga_barang" class="form-control" >
					</div>
					<div class="form-group">
						<label class="control-lable">Jumlah Barang</label>
						<input type="text" name="jumlah_barang" class="form-control" >
					</div>
					<div class="form-group">
						<label class="control-lable">Satuan</label>
						<input type="text" name="satuan" class="form-control" >
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
					@if ($errors->any())
  					<div class="alert alert-danger alert-dismissible" role="alert">
    				 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
  					<ul>
  					  @foreach ($errors->get('nama_barang','harga_barang','jumlah_barang') as $error)
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