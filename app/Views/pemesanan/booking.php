<!-- =========== PAGE TITLE ========== -->
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1><?= esc($kamar['nama']) ?></h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/rooms">Rooms</a></li>
                        <li><?= esc($kamar['nama']) ?></li>
                    </ol>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="price">
                        <div class="inner">
                            Rp<?= esc($kamar['harga']) ?><span>monthly</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =========== MAIN ========== -->
<main id="room_page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="slider">
                    <div id="slider-larg" class="owl-carousel image-gallery">
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/<?= esc($kamar['gambar']) ?>" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/<?= esc($kamar['gambar']) ?>" alt="Image">
                            </a>
                        </div>

                    </div>

                </div>
                <div class="main_title mt50">
                    <h2>ABOUT <?= esc($kamar['nama']) ?></h2>
                </div>
                <p>
                    <?= esc($kamar['deskripsi']) ?>
                </p>
                <div class="main_title t_style a_left s_title mt50">
                    <div class="c_inner">
                        <h2 class="c_title">ROOM SERVICES</h2>
                    </div>
                </div>
                <div class="room_facilitys_list">
                    <div class="all_facility_list">
                        <div class="col-sm-4 nopadding">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i>Double Bed</li>
                                <li><i class="fa fa-check"></i>80 Sq mt</li>
                                <li><i class="fa fa-check"></i>6 Persons</li>
                                <li><i class="fa fa-check"></i>Free Internet</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i>Free Wi-Fi</li>
                                <li><i class="fa fa-check"></i>Breakfast Include</li>
                                <li><i class="fa fa-check"></i>Private Balcony</li>
                                <li class="no"><i class="fa fa-times"></i>Free Newspaper</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 nopadding_left">
                            <ul class="list-unstyled">
                                <li class="no"><i class="fa fa-times"></i>Flat Screen Tv</li>
                                <li><i class="fa fa-check"></i>Full Ac</li>
                                <li class="no"><i class="fa fa-times"></i>Beach View</li>
                                <li><i class="fa fa-check"></i>Room Service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <aside class="widget">
                        <div class="vbf">
                            <h2 class="form_title"><i class="fa fa-calendar"></i> BOOK ONLINE </h2>
                            <form method="post" action="/inputSewa">
                                <?= csrf_field() ?>

                                <input name="sewa_id" value=<?= esc($kamar['kamar_id']) ?> hidden>

                                <div>
                                    <input name="kamar_id" value=<?= esc($kamar['kamar_id']) ?> hidden>
                                    </p>Kamar No <?= esc($kamar['kamar_id']) ?></p>
                                </div>
                                <div>
                                    <input type="date" name="booking-date" class="form-control">
                                </div>
                                <div class="form_select">
                                    <select name="booking-time" class="form-control" title="Pilih Lama Kost" data-header="Room Date" enabled>
                                        <option value="1">1 Month</option>
                                        <option value="6">6 Month</option>
                                        <option value="12">12 Month</option>
                                        <option value="24">24 Month</option>
                                    </select>
                                </div>
                                <div>
                                    <input name="harga" value=<?= esc($kamar['harga']) ?> hidden>
                                </div>
                                <button class="button btn_lg btn_blue btn_full" type="button" data-toggle="modal" data-target="#myModal">BOOK A ROOM NOW</button>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">PERINGATAN!</h4>
                                            </div>
                                            <div class="modal-body">
                                                Apa Anda Yakin Ingin Booking kamar ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-primary">Ya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <aside class="widget">
                        <h4>NEED HELP?</h4>
                        <div class="help">
                            If you have any question please don't hesitate to contact us
                            <div class="phone"><i class="fa  fa-phone"></i><a href="tel:18475555555"> 1-888-123-4567 </a></div>
                            <div class="email"><i class="fa  fa-envelope-o "></i><a href="mailto:contact@site.com">contact@site.com</a> or use <a href="contact.html"> contact form</a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

</main>