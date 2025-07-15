		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		    	<div class="row">

				<?php
					foreach ($barang as $brg){ ?>
						
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<div class="product-item">
							<img src="<?php echo base_url().'assets/img/'?><?=$brg['gambar']; ?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"> <?=$brg['nama_barang']; ?> </h3>
							<strong class="product-price">Rp<?= number_format($brg['harga'], 0, ',', '.') ?> || </strong>
							<strong class="product-price text-secondary">Stok <?=$brg['stok']; ?> </strong>
							<?php if ($this->session->userdata('iduser')): ?>
								<a href="<?= base_url('produk/Addpesanan/'.$brg['id_barang']); ?>" class="btn btn-success mt-2">Pesan Produk</a>
							<?php else: ?>
								<a href="<?= base_url('login'); ?>" class="btn btn-success mt-2">Pesan Produk</a>
							<?php endif; ?>
						</div>
					</div> 
				<?php 
					}?>

		        </div>
		    </div>
		</div>

