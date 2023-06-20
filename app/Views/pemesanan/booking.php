<!-- =========== PAGE TITLE ========== -->
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1><?= esc($kamar['nama']) ?></h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Rooms</li>
                        <li>Single Room</li>
                    </ol>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="price">
                        <div class="inner">
                            Rp<?= esc($kamar['harga']) ?><span>per months</span>
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
                            <a href="images/rooms/single-room/single-room1.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room1.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room2.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room2.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room3.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room3.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room4.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room4.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room5.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room5.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room6.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room6.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room7.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room7.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item  lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room8.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room8.jpg" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div id="thumbs" class="owl-carousel">
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb1.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb2.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb3.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb4.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb5.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb6.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb7.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb8.jpg" alt="Image"></div>
                    </div>
                </div>
                <div class="main_title mt50">
                    <h2>ABOUT Single Rooms</h2>
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
                            <form id="booking-form" class="inner">
                                <div class="form-group">
                                    <input class="form-control" name="booking-name" placeholder="Enter Your Name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="booking-email" placeholder="Enter Your Email Address" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="booking-phone" placeholder="Enter Your Phone Number" type="text">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                    <div class="input-group">

                                        <div class='input-group date' id='datetimepicker3'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                    <div class="form_select">
                                        <select name="booking-roomdate" class="form-control" title="Select Room Date" data-header="Room Date" enabled>
                                            <option value="1 Month">1 Month</option>
                                            <option value="6 Month">6 Month</option>
                                            <option value="1 Year">1 Year</option>
                                            <option value="2 Year">2 Year</option>
                                        </select>
                                    </div>

                                </div>
                                <button class="button btn_lg btn_blue btn_full" type="submit">BOOK A ROOM NOW</button>

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