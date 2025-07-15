<body>
    <section class="hero" id="hero">
		<main class="content">
			<p><a href="<?=base_url('produk');?>" class="btn button-biru" >PESAN SEKARANG</a></p>
		</main>
    </section>

    
		<section class="product-section">
			<div class="container">
				<div class="row">

					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Temukan Produk Jaringan Terbaik untuk Kebutuhan Anda</h2>
						<p class="mb-4">Modifikasi khusus memungkinkan satu adaptor untuk menyalakan beberapa switch hub sekaligus. Cocok untuk jaringan di sekolah, kantor, lab, hingga rumah! </p>
						<p><a href="<?=base_url('produk');?>" class="btn button-biru">Jelajahi</a></p>
					</div>

					<?php
						foreach ($barang as $brg){ ?>
					
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<div class="product-item">
							<img src="<?php echo base_url().'assets/img/'?><?=$brg['gambar']; ?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"> <?=$brg['nama_barang']; ?> </h3>
							<strong class="product-price">Rp. <?=$brg['harga']; ?> || </strong>
							<strong class="product-price text-secondary">Stok <?=$brg['stok']; ?> </strong>
							<a href="<?=base_url();?>produk/Addpesanan" class="btn btn-primary mt-2">Pesan Produk</a>
						</div>
					</div> 

					
					<?php 
					}?>

				</div>
			</div>
		</section>

		<section class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Kenapa Pilih Produk Kami?</h2>
						<p>Kami menghadirkan solusi jaringan yang efisien, hemat daya, dan siap pakai. Cocok untuk kebutuhan sekolah, kantor, dan rumah.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="assets/img/truck.png" width="40px" height="40px" alt="Image" class="img-fluid">
									</div>
									<h3>Pengiriman Cepat </h3>
									<p>Pengiriman ceapt, langsung dikirim dalam 1x24 jam setelah pembayaran. Bebas ongkir untuk area tertentu.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="assets/img/bag.svg" alt="Image" class="img-fluid">
									</div>
									<h3>Mudah Dipesan</h3>
									<p>Cukup pesan via WhatsApp atau marketplace.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="assets/img/touch.png" width="40px" height="40px"  alt="Image" class="img-fluid">
									</div>
									<h3>Mudah Dipakai</h3>
									<p>Modifikasi sudah disesuaikan untuk kebutuhan pengguna.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="assets/img/return.svg" alt="Image" class="img-fluid">
									</div>
									<h3>Garansi</h3>
									<p>Garansi 1 Minggu untuk unit modifikasi.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="assets/img/why.png" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Why Choose Us Section -->
</body>
