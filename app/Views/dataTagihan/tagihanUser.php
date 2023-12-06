<!-- =========== PAGE TITLE ========== -->
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg)">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1>Data Tagihan</h1>
                    <ol class="breadcrumb">
                        <li>Dashboard</li>
                        <li>Data Tagihan</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- =========== MAIN ========== -->
<main id="room_page">
    <div class="container">
        <!-- <div class="table-responsive"> -->
        <table class="table table-wrapper ">
            <h2>Daftar Tagihan:</h2><br>
            <thead>
                <tr>
                    <th>ID Sewa</th>
                    <th>No Kamar</th>
                    <th>Username</th>
                    <th>Masa Berlaku</th>
                    <th>Tanggal Awal</th>
                    <th>Total Tagihan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= esc($list['sewa_id']); ?></td>
                    <td><?= esc($list['kamar_id']); ?></td>
                    <td><?= esc($list['pelanggan_id']); ?></td>
                    <td><?= esc($list['masa_berlaku']); ?></td>
                    <td><?= esc($list['tanggal_awal']); ?></td>
                    <td><?= esc($list['biaya']); ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="text-right">
            <a href="/payment" class="button  btn_blue btn_full upper">Bayar Sekarang</a>
        </div>
    </div>
    </div>
    </div>

</main>