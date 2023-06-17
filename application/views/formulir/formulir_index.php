<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url(); ?>assets/img/sipedes.png" rel="icon">

    <title>Formulir Surat Keterangan Domisili Penduduk</title>

    <!-- Bootstrap core CSS -->
    <link href="https://simpel.kelurahankota.bengkaliskab.go.id/template/esurat/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://simpel.kelurahankota.bengkaliskab.go.id/template/esurat/form-validation.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="theme-color" content="#07c">
    <!-- home screen icon defaults - 48x48 -->
    <link href="<?= base_url(); ?>assets/img/sipedes.png" rel="apple-touch-icon">
    <meta name="HandheldFriendly" content="True">
    <link href="<?= base_url(); ?>assets/img/sipedes.png" rel="apple-touch-icon">
    <meta name="application-name" content="Sipedes ">

</head>


<body class="bg-light">

    <div class="container">
        <div class="py-5 text-center">
            <img class="mb-4 img-fluid" src="<?= base_url(); ?>assets/img/sipedes.png" alt="">
            <center>
                <a href="<?= base_url() ?>formulir" class="btn btn-primary btn-sm"><i class="fa fa-home" aria-hidden="true"></i> </a>
                <a href="<?= base_url() ?>autentifikasi" class="btn btn-info btn-sm">Login RT <i class="fa fa-sign-in" aria-hidden="true"></i></a>

            </center>
        </div>


        <div class="row">

            <div class="col-md-12 order-md-1 mb-4">

                <form class="card p-2" action="" method="post">
                    <input type="hidden" name="_token" value="">
                    <div class="input-group">
                        <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode Registrasi Permohonan" required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary" name="lacak" value="true"><i class="fa fa-search" aria-hidden="true"></i> Periksa </button>
                        </div>
                    </div>
                </form>
                <br>
                <h6 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted"><i class="fa fa-check"></i> Pilih pelayanan yang diinginkan</span> <span class="float-end text-muted"><i class="fa fa-bar-chart" aria-hidden="true"></i> Pemohon</span>
                </h6>

                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne7" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
                            <h6 class="mb-0 text-dark">
                                <a href="<?= base_url() ?>formulir/domisili">
                                    SURAT KETERANGAN DOMISILI
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingOne8" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                        <h6 class="mb-0 text-dark">
                            <a href="<?= base_url() ?>formulir/kematian">
                                SURAT KETERANGAN KEMATIAN
                        </h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingOne14" data-toggle="collapse" data-target="#collapseOne14" aria-expanded="true" aria-controls="collapseOne14">
                        <h6 class="mb-0 text-dark">
                            <a href="<?= base_url() ?>formulir/usaha">
                                SURAT KETERANGAN USAHA
                        </h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingOne16" data-toggle="collapse" data-target="#collapseOne16" aria-expanded="true" aria-controls="collapseOne16">
                        <h6 class="mb-0 text-dark">
                            <a href="<?= base_url() ?>formulir/sktm">
                                SURAT KETERANGAN TIDAK MAMPU
                        </h6>
                    </div>
                </div>
            </div>

        </div>