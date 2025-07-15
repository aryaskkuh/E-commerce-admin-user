<div class="container-fluid">
    <h3 class="text-dark text-center pb-2"> <b>RIWAYAT PESANAN</b></h3>
    <table class="table table-striped table-bordered text-dark">
        <hr class="border border-dark border-3 opacity-100">
        <tr style="text-align: center;">
            <th>NO</th>
            <th>Nama Pemesan</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>SubTotal</th>
            <th>Tgl Pemesanan</th>
        </tr>

        <?php $no = 1;
    foreach ($riwayat as $rwyt){ ?>
    
    <tr class="text-gray-600">
        <td><?=$no++; ?></td>
        <td><?=$rwyt['nama_pemesan']; ?></td>
        <td><?=$rwyt['nama_barang']; ?></td>
        <td><?=$rwyt['jumlah']; ?></td>
        <td>Rp<?= number_format($rwyt['total_harga'], 0, ',', '.') ?></td>
        <td><?=$rwyt['tgl_pemesanan']; ?> </td>
    </tr> <?php
    }?>
    </table>
</div>
