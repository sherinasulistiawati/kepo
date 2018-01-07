@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="jumbotron">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Penjualan - Create
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('penjualan.store')}}" method="post">
					{{csrf_field()}}

					<div class="form-group">
						<label class="control-lable">Nama Pelanggan</label>
						<select name="id_pelanggan" class="form-control">
							@foreach($pelanggan as $data)
							<option value="{{$data->id}}">
								{{$data->nama}}
							</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<select name="id_barang" class="form-control">
						<option value=" "></option>
							@foreach($barang as $data)
							<option value="{{$data->id}}">
								{{$data->nama_barang}}
							</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-lable">Jumlah Barang</label>
						<input type="text" name="jumlah" class="form-control" >
					</div>

					<div class="form-group">
						<label class="control-lable">Jenis Jasa</label>
						<select name="id_jasa" class="form-control">
						<option value=" "></option>
							@foreach($jasa as $data)
							<option value="{{$data->id}}">
								{{$data->nama}}
							</option>
							@endforeach
						</select>
					</div>

					<input type="hidden" name="id_karyawan" value="{{ Auth::user()->id }}">

					
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
					@if ($errors->any())
  					<div class="alert alert-danger alert-dismissible" role="alert">
    				 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
  					<ul>
  					  @foreach ($errors->get('jumlah') as $error)
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