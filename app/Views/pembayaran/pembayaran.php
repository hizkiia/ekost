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
        <!-- <div class="table-responsive"> -->
        <table class="table table-hover ">
            <h2>Mohon Konfirmasi Pembayaran</h2><br>
            <tbody>
                <tr>
                    <td>ID Transaksi</td>
                    <td><?= esc($list['sewa_id']) ?></td>

                </tr>
                <tr>
                    <td>No Kamar</td>
                    <td><?= esc($list['kamar_id']) ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><?= esc($list['pelanggan_id']) ?></td>
                </tr>
                <tr>
                    <td>Masa Berlaku</td>
                    <td><?= esc($list['masa_berlaku']) ?> Bulan</td>
                </tr>
                <tr>
                    <td>Metode Pembayaran</td>
                    <td>
                        <select id="payment_method" class="form-control">
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="dana">Dana</option>
                            <option value="ovo">Ovo</option>
                            <option value="gopay">Gopay</option>
                            <option value="transfer_bank">Transfer Bank</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h3>Total Pembayaran</h3>
                    </td>
                    <td>
                        <h3>Rp<?= esc($list['biaya']) ?></h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Add Bootstrap and jQuery JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <div class="text-right">
            <button class="button btn_lg btn_grey" type="button">Batal</button>
            <button class="button btn_lg btn_yellow" type="button">Bayar Sekarang</button>
        </div>
        <!-- JavaScript for the QRIS pop-up -->
        <script>
            const qrisImages = {
                dana: "images/dana.jpg",
                ovo: "images/ovo.jpg",
                gopay: "images/gopay.jpg",
                transfer_bank: "images/transfer.jpg",
            };

            function updateQrCodeImage() {
                const selectedPaymentMethod = $("#payment_method").val();
                const qrisImageElement = document.getElementById("qris_image");

                if (qrisImages.hasOwnProperty(selectedPaymentMethod)) {
                    qrisImageElement.src = qrisImages[selectedPaymentMethod];
                } else {
                    qrisImageElement.src = "";
                }
            }

            $(document).ready(function() {
                // Add the `onchange` event listener to the `#payment_method` element
                $("#payment_method").on("change", function() {
                    // Close the option menu
                    $(this).blur();
                });



                // Show QRIS modal on "Bayar Sekarang" button click
                $(".btn_yellow").click(function() {
                    updateQrCodeImage();
                    $("#qrisModal").modal("show");
                });

                // Close QRIS modal on "Tutup" button click
                $("#qrisModal .btn-secondary").click(function() {
                    $("#qrisModal").modal("hide");
                });
            });
        </script>

        <!-- QRIS Pop-up Modal -->
        <div class="modal fade" id="qrisModal" tabindex="-1" role="dialog" aria-labelledby="qrisModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="qrisModalLabel">QRIS Pembayaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="qris_image" src="images/dana.jpg" alt="Image" width="400" height="400">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</main>