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
                    <td>1</td>

                </tr>
                <tr>
                    <td>No Kamar</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>Hizkia Pratama</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>cahyohizkia@gmail.com</td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>087645677564</td>
                </tr>
                <tr>
                    <td>Masa Berlaku</td>
                    <td>6 bulan</td>
                </tr>
                <tr>
                    <td>Metode Pembayaran</td>
                    <td><select class="form-control" id="sel1">
                            <option>Dana</option>
                            <option>Ovo</option>
                            <option>Gopay</option>
                            <option>Transfer Bank</option>
                        </select></td>
                </tr>
                <tr>
                    <td>
                        <h3>Total Pembayaran</h3>
                    </td>
                    <td>
                        <h3>Rp300.000</h3>
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
            $(document).ready(function() {
                function showQrPopUp() {
                    $('#qrisModal').modal('show');
                }

                function hideQrPopUp() {
                    $('#qrisModal').modal('hide');
                }

                $('.btn_yellow').click(function() {
                    showQrPopUp();
                });

                $('.btn_grey').click(function() {
                    hideQrPopUp();
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
                        <!-- Your QR code or QRIS-related content goes here -->

                        <img src="DANA.jpg">
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