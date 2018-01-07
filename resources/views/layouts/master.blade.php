<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assalaam Motorsport</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/home')}}">Assalaam MotorSport</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        @if (Auth::check())
                        <li>
                            <a href="{{ url('/home')}}" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('barang.index') }}"><i class="fa fa-btn fa-cubes"  ></i> Barang</a>
                        </li>
                        <li>
                            <a href="{{ route('jasa.index') }}"><i class="fa fa-btn fa-wrench"></i> Jasa</a>
                        </li>
                        <li>
                            <a href="{{ route('pelanggan.index') }}"><i class="fa fa-btn fa-child"></i> Pelanggan</a>
                        </li>
                        <li>
                            <a href="{{ route('supplier.index') }}"><i class="fa fa-btn fa-cart-plus"></i> Supplier</a>
                        </li>
                        <li>
                            <a href="{{ route('pembelian.index') }}"><i class="fa fa-btn fa-arrow-circle-down"></i> Pembelian</a>
                        </li>
                        <li>
                            <a href="{{ route('penjualan.index') }}"><i class="fa fa-btn fa-arrow-circle-up"></i> Penjualan</a>
                        </li>
                        <li>
                            <a href="{{ route('karyawan.index') }}"><i class="fa fa-btn fa-male"></i> Karyawan</a>
                        </li>

                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Assalaam Motorsport</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                    @yield('content')
                <!-- /.col-lg-4 -->
            
            <!-- /.row -->
        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
