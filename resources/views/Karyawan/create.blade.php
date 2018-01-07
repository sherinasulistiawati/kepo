@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="jumbotron">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Karyawan - Create
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('karyawan.store')}}" method="post">
					{{csrf_field()}}

					<div class="form-group">
						<label class="control-lable">Username</label>
						<input type="text" name="name" class="form-control" required="" >
					</div>
					<div class="form-group">
						<label class="control-lable">Alamat Email</label>
						<input type="text" name="email" class="form-control" >
					</div>
					<div class="form-group">
						<label class="control-lable">Password</label>
						<input type="text" name="password" class="form-control" >
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