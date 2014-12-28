
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

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Masukkan data anda</h3>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(array('url' => 'register')) }}
                            <fieldset>
                            <p class="text-center">Data Diri</p>
                                <div class="form-group">
                                    <a>Nama</a>
                                    <input class="form-control" name="nama_frontliner">
                                </div>
                                <div class="form-group">
                                    <a>Alamat</a>
                                    <input class="form-control" name="alamat_frontliner">
                                </div>
                                <div class="form-group">
                                    <a>Kota</a>
                                    <input class="form-control" name="kota_frontliner">
                                </div>
                                <div class="form-group">
                                    <a>Nomor Telepon</a>
                                    <input class="form-control" name="nomor_telepon_frontliner">
                                </div>
                                <div class="form-group">
                                    <a>Nomor Rekening</a>
                                    <input class="form-control" name="nomor_rekening">
                                </div>
                                <div class="form-group">
                                    <a>Nama Bank</a>
                                    <input class="form-control" name="nama_bank">
                                </div>
                                <div class="form-group">
                                    <a>Email</a>
                                    <input class="form-control" name="email">
                                </div>
                                
                                <p class="text-center">Data Toko</p>
                                <div class="form-group">
                                    <a>Nama</a>
                                    <input class="form-control" name="nama_toko">
                                </div>
                                <div class="form-group">
                                    <a>Alamat</a>
                                    <input class="form-control" name="alamat_toko">
                                </div>
                                <div class="form-group">
                                    <a>Kota</a>
                                    <input class="form-control" name="kota_toko">
                                </div>
                                <div class="form-group">
                                    <a>Nomor Telepon</a>
                                    <input class="form-control" name="nomor_telepon_toko">
                                </div>
                                <div class="form-group">
                                    <a>Nama Pemilik</a>
                                    <input class="form-control" name="nama_pemilik">
                                </div>
                                <div class="form-group">
                                    <a>Nomor Telepon Pemilik</a>
                                    <input class="form-control" name="nomor_telepon_pemilik">
                                </div>
                                <button type="submit" class="btn btn-primary">Register </button>
                            </fieldset>
                        {{ Form::close() }}
                            
                    </div>
                </div>
            </div>
        </div>
    </div>

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
