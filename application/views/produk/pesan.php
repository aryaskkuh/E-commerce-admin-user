<div class="container mt-5">
    <div class="row">

        <div class="col-md-6 mt-5">
            <img id="mainImage" src="<?= base_url('assets/img/' . $barang['gambar']) ?>" alt="Produk" class="img-fluid mb-3 border" style="max-height: 400px;">
        </div>

        <div class="col-md-6 mt-5">
            <h3><?= $barang['nama_barang'] ?></h3>
            <h4 class="text-success mb-3">Rp<?= number_format($barang['harga'], 0, ',', '.') ?></h4>

            <p><strong>Stok Tersisa:</strong> <?= $barang['stok']?></p>

            <form action="<?= base_url('produk/prosesadd') ?>" method="POST" class="mb-5">
                <input type="hidden" name="id_barang" value="<?= $barang['id_barang'] ?>">

                <div class="mb-3">
                    <label class="form-label">Alamat Pengiriman</label>
                    <input type="text" name="alamat" placeholder="Masukkan alamat pengiriman dengan jelas" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Jumlah</label>
                    <div class="input-group" style="max-width: 200px;">
                        <input type="number" id="jumlah" name="jumlah" class="form-control text-center" value="1" min="1" max="<?= $barang['stok'] ?>" required>
                    </div>
                </div>
                <p><strong>Total Harga:</strong> Rp<span id="totalHarga"><?= number_format($barang['harga'], 0, ',', '.') ?></span></p>

                <?php if ($barang['stok'] > 0): ?>
                    <button type="submit" class="btn btn-success mb-5">Pesan Sekarang</button>
                <?php else: ?>
                    <div class="alert alert-danger mb-3">Stok habis, tidak bisa dipesan.</div>
                    <button class="btn btn-secondary mb-5" disabled>Stok Kosong</button>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>




































<script>
    const hargaSatuan = <?= $barang['harga'] ?>;
    const inputJumlah = document.getElementById('jumlah');
    const totalHargaEl = document.getElementById('totalHarga');

    function updateTotalHarga() {
        let jumlah = parseInt(inputJumlah.value) || 0;
        let total = hargaSatuan * jumlah;
        totalHargaEl.innerText = total.toLocaleString('id-ID');
    }

    inputJumlah.addEventListener('input', updateTotalHarga);
    document.querySelectorAll('.btn-minus, .btn-plus').forEach(btn => {
        btn.addEventListener('click', () => {
            setTimeout(updateTotalHarga, 50); 
        });
    });

    updateTotalHarga(); 
</script>
