<body id="page-top" >
    <!-- Page Wrapper -->
    <div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header btn btn-primary">
                    <h5 class="modal-title fs-5">Input Produk</h5>
                </div>
                <div class="modal-body">
                    <form  action="<?=base_url();?>data_produk/prosesadd" method="POST">
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_barang" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Harga Produk</label>
                            <input type="number" name="harga" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Stok Produk</label>
                            <input type="number" name="stok" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Gambar</label><br>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-md btn-success">Proses input</button>
                    <button type="button" class="btn btn-md btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center pr-5" href="<?=base_url('admin');?>">
                <div class="sidebar-brand-icon">
                    <img src="<?=base_url('');?>assets/img/logo.svg" width="30px"></img>
                </div>
                <div class="sidebar-brand-text mx-1">Admin</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('admin');?>">
                    <img width="16px" class="mr-1" src="<?=base_url('');?>assets/img/house.svg" alt="">
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('data_produk');?>">
                    <img width="15px" class="mr-1" src="<?=base_url('');?>assets/img/database.svg" alt="">
                    <span>Data Produk</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('data_pesanan');?>">
                    <img width="15px" class="mr-1" src="<?=base_url('');?>assets/img/clock.svg" alt="">
                    <span>Data Pesanan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('riwayat_pesanan');?>">
                    <img width="15px" class="mr-1" src="<?=base_url('');?>assets/img/clock.svg" alt="">
                    <span>Riwayat Pesanan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url();?>login/logout">
                    <img width="15px" class="mr-1" src="<?=base_url('');?>assets/img/door-open.svg" alt="">
                    <span>Logout</span></a>
            </li>
        </ul>
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class="mt-4">
