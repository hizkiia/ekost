<body>
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
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.svg" height="32" alt="Logo" />
                    </a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display: none">MENU</li>
                        <li>
                            <a href="/">HOME</a>
                        </li>
                        <li>
                            <a href="#">ROOMS</a>
                        </li>
                        <li class="dropdown simple_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">Dashboard <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Data Tagihan</a></li>
                                <li><a href="#">Pemesanan Kamar</a></li>
                                <li><a href="#">Pembayaran</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">ABOUT US</a></li>
                        <li class="menu_button">
                            <a href="booking-form.html" class="button btn_yellow">Sign Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

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
                            <td>1223</td>

                        </tr>
                        <tr>
                            <td>No Kamar</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>Hizkia Pratama</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Masa Berlaku</td>
                            <td></td>
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
                <div class="text-right">
                    <button class="button btn_lg btn_grey" type="button">Batal</button>
                    <button class="button btn_lg btn_yellow" type="button">Bayar Sekarang</button>
                </div>
            </div>
    </div>
    </div>

    </main>