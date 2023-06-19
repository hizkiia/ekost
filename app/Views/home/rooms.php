<div id="smoothpage" class="wrapper">



    <!-- ========== HEADER ========== -->
    <header class="fixed">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index2.html">
                    <img src="images/logo.svg" height="32" alt="Logo">
                </a>
            </div>
            <nav id="main_menu" class="mobile_menu navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="mobile_menu_title" style="display:none;">MENU</li>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="room.html">ROOMS</a></li>
                    <li><a href="blog.html">ABOUT</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                    <li class="menu_button">
                        <a href="booking-form.html" class="button  btn_yellow"><i class="fa fa-calendar"></i>REGISTER</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- =========== PAGE TITLE ========== -->
    <div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
        <div class="container">
            <div class="inner">
                <h1>Rooms List View</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>uihjhkjhkjhjkhkhk </li>
                </ol>
            </div>
        </div>
    </div>

    <!-- =========== MAIN ========== -->
    <main id="rooms_list">
        <div class="container">
            <!-- ITEM -->
            <?php foreach ($list as $l) : ?>
                <article class="room_list">
                    <div class="row row-flex">
                        <div class="col-lg-4 col-md-5 col-sm-12">
                            <figure>
                                <a href="room.html" class="hover_effect h_link h_blue">
                                    <img src="images/rooms/<?= esc($l['gambar']) ?>" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <div class="room_details row-flex">
                                <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                                    <h3><a href="room.html"> <?= esc($l['nama']) ?> </a></h3>
                                    <p>
                                        <?= esc($l['deskripsi']) ?>
                                    </p>
                                    <div class="room_services">
                                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                        <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Zante Restaurant"></i>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                                    <div class="room_price_inner">
                                        <span class="room_price_number"> Rp<?= esc($l['harga']) ?> </span>
                                        <small class="upper"> per Month </small>
                                        <a href="room.html" class="button  btn_blue btn_full upper">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach ?>



        </div>
    </main>


</div>