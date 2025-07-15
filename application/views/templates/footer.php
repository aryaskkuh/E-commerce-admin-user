    <footer class="d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-flex align-items-center">
                        <img src="<?= base_url('assets/img/logo.svg'); ?>"alt="Logo" width="37">
                        <a href="#" class="ms-2">CiboyNet</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-evenly">
                        <a href="<?=base_url('dashboard');?>">BERANDA</a>
                        <a href="<?=base_url('produk');?>">PRODUK</a>
                    <?php if ($this->session->userdata('iduser')): ?>               
                        <a class="nav-link" href="<?=base_url('riwayat_pembeli');?>">RIWAYAT</a>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="row position-absolute copyright start-50 translate-middle">
                    <div class="col-12">
                        <p>Copyright by CiboyNet All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>
