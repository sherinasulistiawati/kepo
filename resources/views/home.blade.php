@extends('layouts.master')

@section('content')
<body background="mmm.jpg">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Assalaam Motorsport</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Anda Berhasil Login!</p>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
