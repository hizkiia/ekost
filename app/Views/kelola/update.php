<header class="fixed">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.svg" height="32" alt="Logo">
            </a>
        </div>
        <nav id="main_menu" class="mobile_menu navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="mobile_menu_title" style="display:none;">MENU</li>
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="#">ROOMS</a>
                </li>
                <li class="dropdown simple_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">Dashboard <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="typography.html">Data Tagihan</a></li>
                        <li><a href="buttons.html">Pemesanan Kamar</a></li>
                        <li><a href="icons.html">Pembayaran</a></li>
                    </ul>
                </li>
                <li class="dropdown simple_menu active"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">Kelola <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/input">Tambah Kamar</a></li>
                        <li><a href="/update">Update Kamar</a></li>
                        <li><a href="/delete">Hapus Kamar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- =========== PAGE TITLE ========== -->
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1>Update Kamar</h1>
                    <ol class="breadcrumb">
                        <li>Kelola</li>
                        <li>Update Kamar</li>
                    </ol>
                </div>
                <div class="col-md-6 col-sm-6">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =========== MAIN ========== -->
<main id="room_page">
    <div class="container">
        <div class="col-6">
            <div class="sidebar">
                <aside class="widget">
                    <div class="vbf">
                        <h2 class="form_title"><i class="fa"></i>Update Kamar</h2>
                        <div class="form-group">
                                <input class="form-control" name="idKamar" placeholder="Masukkan ID Kamar" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="namaKamar" placeholder="Masukkan Nama Kamar" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Kamar" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="fasilitas" placeholder="Masukkan Fasilitas Kamar" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="gambar" type="file">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="harga" placeholder="Masukkan Harga Kamar" type="number">
                            </div>
                            <button class="button btn_lg btn_blue btn_full" type="button" data-toggle="modal" data-target="#myModal">Update Data
                                Kamar</button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">PERINGATAN!</h4>
                                        </div>
                                        <div class="modal-body">
                                            Apa Anda Yakin Ingin Mengubah Data Kamar Ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                            <button type="button" class="btn btn-primary">Ya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="a_center mt10">
                                <a href="booking-form.html" class="a_b_f"></a>
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    </div>
</main>