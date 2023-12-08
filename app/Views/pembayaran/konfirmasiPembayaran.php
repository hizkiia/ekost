<!-- =========== PAGE TITLE ========== -->
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg)">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1>Pembayaran</h1>
                    <ol class="breadcrumb">
                        <li>Dashboard</li>
                        <li>Pembayaran</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- =========== MAIN ========== -->
<main id="room_page">
    <div class="container">
        <div class="table-responsive">
            <h2>List Pembayaran</h2><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Tanggal Awal</th>
                        <th>Masa Berlaku</th>
                        <th>Nama Pelanggan</th>
                        <th>ID Kamar</th>
                        <th>Total Tagihan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $l) : ?>
                        <tr>
                            <td><?= esc($l['sewa_id']); ?></td>
                            <td><?= esc($l['tanggal_awal']); ?></td>
                            <td><?= esc($l['masa_berlaku']); ?></td>
                            <td><?= esc($l['pelanggan_id']); ?></td>
                            <td><?= esc($l['kamar_id']); ?></td>
                            <td><?= esc($l['biaya']); ?></td>
                            <td>
                                <form action="/transaksi/selesai" method="post">
                                    <input type="hidden" name="sewa_id" value="<?= esc($l['sewa_id']); ?>">
                                    <button type="submit">Selesai</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</main>