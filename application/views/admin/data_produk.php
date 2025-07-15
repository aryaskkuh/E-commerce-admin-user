<div class="container-fluid">
    <h3 class="text-dark text-center pb-2"> <b>DATA PRODUK</b></h3>
    <table class="table table-striped table-bordered text-dark">
        <hr class="border border-dark border-3 opacity-100">
        <button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambah_produk">
            <img width="15px" src="<?=base_url('');?>assets/img/plus.svg" alt="">
            Tambah Produk
        </button>
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Stok Produk</th>
            <th>Gambar</th>
            <th style="text-align: center;">Aksi</th>
        </tr>

        <?php $no = 1;
    foreach ($barang as $brg){ ?>
    
    <tr class="text-gray-600">
        <td><?=$no++; ?></td>
        <td><?=$brg['nama_barang']; ?></td>
        <td>Rp<?= number_format($brg['harga'], 0, ',', '.') ?> </td>
        <td><?=$brg['stok']; ?> </td>
        <td><?=$brg['gambar']; ?></td>
        <td style="text-align: center;">
            <a class="btn btn-success btn-sm" href="<?=base_url();?>data_produk/Updatebarang/<?=$brg['id_barang'];?>">
                <img width="18px" src="<?=base_url('');?>assets/img/edit.svg" alt="">
            </a>
            <a class="btn btn-danger btn-sm" href="<?=base_url();?>data_produk/Deletebarang/<?=$brg['id_barang'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                <img width="15px" src="<?=base_url('');?>assets/img/trash.svg" alt="">
            </a>
        </td>
    </tr> <?php
    }?>
    </table>
</div>
