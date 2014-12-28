
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html">Member Area</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        
                        <li>
                            <a href="http://localhost:8000/member"><i class="fa fa-edit fa-fw"></i>Aktifitas</a>
                        </li>
                        <li>
                            <a href="http://localhost:8000/withdraw"><i class="fa fa-money fa-fw"></i>Withdraw</a>
                        </li>
                        <li>
                            <a href="http://localhost:8000/info_saldo"><i class="fa fa-info-circle fa-fw"></i>Info Saldo</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Aktifitas</h1>
                         
                            <div class="col-lg-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Input Data</div>    
                                    <div class="panel-body">
                                    {{ Form::open(array('url' => 'member')) }}   
                                    <div class="form-group">
                                        <a>Nomor Imei</a>
                                        <input class="form-control"  name="nomor_imei" >
                                    </div>            
                                    <div class="form-group">
                                        <a>Nomor Smartfren</a>
                                        <input class="form-control"  name="nomor_smartfren" >
                                    </div>
                                        
                                        <p class="text-center">Data Konsumen</p>

                                    <div class="form-group">
                                        <a>Nama</a>
                                        <input class="form-control"  name="nama_konsumen" >
                                    </div>
                                    <div class="form-group">
                                         <a>Alamat</a>
                                        <input class="form-control"  name="alamat_konsumen" >
                                    </div>
                                    <div class="form-group">
                                        <a>Kota</a>
                                        <input class="form-control"  name="kota_konsumen" >
                                    </div>
                                    <div class="form-group">
                                        <a>Nomor Telepon</a>
                                        <input class="form-control"  name="nomor_telepon_konsumen" >
                                    </div>
                                    <div class="form-group">
                                        <a>Nomor KTP</a>
                                        <input class="form-control"  name="nomor_ktp_konsumen" >
                                    </div>
                                    <button type="submit" class="btn btn-primary">Input</button>
                                    {{Form::close()}}
                                    </div>
                                </div>    

                            </div>
                            
                            
                         
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
