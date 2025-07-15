<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CiboyNet</title>
    <link rel="shortcut icon" type="x-icon" href="<?= base_url('assets/img/logo.svg'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <!-- font poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    
</head>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg bg-transparent position-fixed w-100">
        <div class="container">
            <a href="<?=base_url('dashboard');?>"><img src="<?= base_url('assets/img/logo.svg'); ?>" alt="Logo" width="37" class="d-inline-block align-text-top me-1"></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="<?=base_url('dashboard');?>">BERANDA</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="<?=base_url('produk');?>">PRODUK</a>
                    </li>
                    <?php if ($this->session->userdata('iduser')): ?>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="<?=base_url('riwayat_pembeli');?>">RIWAYAT</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <?php if ($this->session->userdata('iduser')): ?>
                    <div>
                        <a href="<?= base_url('login/logout'); ?>" class="btn btn-primary">Logout</a>
                    </div>
                <?php else: ?>
                    <div>
                        <a href="<?= base_url('registrasi'); ?>" class="btn btn-primary">Daftar</a>
                        <a href="<?= base_url('login'); ?>" class="btn btn-primary">Login</a>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </nav>

