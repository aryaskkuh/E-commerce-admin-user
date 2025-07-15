<div class="container-fluid">
    <h3 class="text-dark text-center pb-2"> <b>DATA PESANAN</b></h3>
    <table class="table table-striped table-bordered text-dark">
        <hr class="border border-dark border-3 opacity-100">
        <tr style="text-align: center;">
            <th>NO</th>
            <th>Nama Pemesan</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>SubTotal</th>
            <th>Tgl Pemesanan</th>
            <th style="text-align: center;">Aksi</th>
        </tr>

        <?php $no = 1;
    foreach ($data_pesanan as $pesanan){ ?>
    
    <tr class="text-gray-600">
        <td><?=$no++; ?></td>
        <td><?=$pesanan['nama_pemesan']; ?></td>
        <td><?=$pesanan['nama_barang']; ?></td>
        <td><?=$pesanan['alamat']; ?></td>
        <td>Rp<?= number_format($pesanan['harga'], 0, ',', '.') ?></td>
        <td><?=$pesanan['jumlah']; ?></td>
        <td>Rp<?= number_format($pesanan['total_harga'], 0, ',', '.') ?></td>
        <td><?=$pesanan['tgl_pemesanan']; ?> </td>
        <td style="text-align: center;">
            <a class="btn btn-success btn-sm" href="<?= base_url('data_pesanan/proses/' . $pesanan['id_riwayat']); ?>" onclick="return confirm('Proses pesanan ini?')">
                <img width="15px" src="<?= base_url('assets/img/check.svg'); ?>" alt="Proses">
            </a>
            <a class="btn btn-danger btn-sm" href="<?=base_url();?>data_pesanan/Deletepesanan/<?=$pesanan['id_riwayat'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?');">
                <img width="15px" src="<?=base_url('');?>assets/img/trash.svg" alt="">
            </a>
        </td>
    </tr> <?php
    }?>
    </table>
</div>
