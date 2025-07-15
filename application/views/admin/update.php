<div class="container-fluid">
    <h3 class="text-dark text-center pb-2"><b>FORM UPDATE BARANG </b></h3>
    <hr class="border border-dark border-3 opacity-100">
    <form action="<?=base_url();?>data_produk/prosesupdate" method="POST">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama_barang" value="<?=$barang['nama_barang'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Harga Produk</label>
            <input type="text" name="harga" value="<?=$barang['harga'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Stok Produk</label>
            <input type="text" name="stok" value="<?=$barang['stok'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Gambar produk</label>
            <input type="file" name="gambar" value="<?=$barang['gambar'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" name="id_barang" value="<?=$barang['id_barang']; ?>"></input>
            <button class="btn btn-success" type="submit">proses update</button>
        </div>
    </form>
</div>