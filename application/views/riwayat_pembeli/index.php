
<div class="container-fluid mt-5 content-wrapper mb-5">
    <h3 class="text-dark text-center mt-5 pb-2"> <b>Riwayat Pembelian</b></h3>
    <table class="table table-striped table-bordered text-dark mb-5">
        <hr class="border border-dark border-3 opacity-100">
        <tr style="text-align: center;">
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga Satuan</th>
            <th>Jumlah</th>
            <th>SubTotal</th>
            <th>Tgl Pemesanan</th>
            <th style="text-align: center;">Status</th>
        </tr>

        <?php $no = 1;
    foreach ($riwayat as $rwyt){ ?>
    
    <tr class="text-gray-600 "style="text-align: center;">
        <td style="text-align: center;"><?=$no++; ?></td>
        <td><?=$rwyt['nama_barang']; ?></td>
        <td><?=$rwyt['alamat']; ?></td>
        <td>Rp<?= number_format($rwyt['harga'], 0, ',', '.') ?></td>
        <td><?=$rwyt['jumlah']; ?></td>
        <td>Rp<?= number_format($rwyt['total_harga'], 0, ',', '.') ?></td>
        <td><?=$rwyt['tgl_pemesanan']; ?> </td>
        <td><?php if ($rwyt['status'] == 'Diproses'): ?>
                <span class="badge bg-success text-white">Diproses</span>
            <?php else: ?>
                <span class="badge bg-warning text-dark">Belum Diproses</span>
            <?php endif; ?>
        </td>
    </tr> <?php
    }?>
    </table>
</div>
