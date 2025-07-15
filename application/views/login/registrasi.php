<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CiboyNet</title>
    <link rel="shortcut icon" type="x-icon" href="assets/img/logo.svg" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.min.css'); ?>">

    <!-- font poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Form Pendaftaran</h1>
                                </div>
                                <form class="user" action="<?=base_url();?>registrasi/index" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control form-control-user" required placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" required placeholder="Masukkan Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" required placeholder="Masukkan Password">
                                    </div>
                                    
                                    <button type="submit" name="register" class="btn btn-primary w-100">Daftar Sekarang</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?=base_url();?>login" class="small">Sudah punya akun? Masuk!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>
