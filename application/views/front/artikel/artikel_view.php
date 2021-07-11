<?php
$page = "artikel_view";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Temanjamu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/animate.css">

    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('asset/template/front') ?>/css/style.css">

    <link href="<?php echo base_url('asset/template/front') ?>/images/favicons.png" rel="icon">
</head>

<body class="goto-here">
    <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 6287 888 777 787</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">info@temanjamu.id</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">KEKAYAAN ASLI WARISAN LELUHUR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('front/front') ?>"><img class="img-fluid" src="<?php echo base_url('asset/template/front') ?>/images/logo_temanjamu.png" alt="Colorlib Template"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?php echo base_url('front/front') ?>" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
                        <div class="dropdown-menu active" aria-labelledby="dropdown04">
                            <a class="dropdown-item"><a href="<?php echo base_url('front/ProdukJamu_front') ?>">Produk Jamu</a>
                                <a class="dropdown-item"><a href="<?php echo base_url('front/ProdukFranchise_front') ?>">Produk Franchise</a>
                        </div>
                    </li>
                    <li class="nav-item active"><a href="<?php echo base_url('front/Artikel_front') ?>" class="nav-link">Artikel</a></li>
                    <li class="nav-item active"><a href="<?php echo base_url('admin/Login') ?>" class="nav-link">Login Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero-wrap hero-bread" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/bg_6.jpg);">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('front/front') ?>">Home</a></span> <span>></span></p>
                    <h1 class="mb-0 bread">Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <div class="row">
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="detail_blog.php" class="block-20" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/berita1.jpg);">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">April 9, 2021</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Manfaat Jamu Sepanjang Pandemi Covid-19, Begini Buat Jamu Beras Kencur</a></h3>
                                    <p>Jamu merupakan minuman herbal hasil dari beberapa kombinasi rempah-rempah yang kaya gizi dan nutrisi. Ini cara mudah buat jamu beras kencur.</p>
                                    <p><a href="detail_blog.php" class="btn btn-primary py-2 px-3">Selengkapnya</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="detail_blog.php" class="block-20" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/berita2.jpg);">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">April 9, 2021</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Cara Membuat Jamu Kunyit Asem yang Kaya Manfaat Kesehatan</a></h3>
                                    <p>Kunyit terkenal memiliki manfaat yang baik bagi kesehatan tubuh. Jamu kunyit asem merupakan salah satu olahan kunyit yang banyak dikonsumsi masyarakat Indonesia.</p>
                                    <p><a href="detail_blog.php" class="btn btn-primary py-2 px-3">Selengkapnya</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="detail_blog.php" class="block-20" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/berita3.jpg);">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">April 9, 2021</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Selama Pandemi, Omzet Jamu di Pasar Global Tembus US$ 138,5 M</a></h3>
                                    <p>Selama pandemi Covid-19, omzet produk herbal dan jamu di pasar global meroket hingga US$ 138,5 miliar.</p>
                                    <p><a href="detail_blog.php" class="btn btn-primary py-2 px-3">Selengkapnya</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="detail_blog.php" class="block-20" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/berita4.jpg);">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">April 9, 2021</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Jahe dan Kunyit Cegah Infeksi Virus dan Bakteri, Ini Syaratnya</a></h3>
                                    <p>Jahe, kunyit, dan temulawak tambah populer sejak pandemi Covid-19. Tanaman empon-empon itu dianggap dapat mencegah infeksi virus. </p>
                                    <p><a href="detail_blog.php" class="btn btn-primary py-2 px-3">Selengkapnya</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="detail_blog.php" class="block-20" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/berita5.jpg);">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">April 9, 2021</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">New Normal, Pedagang Jamu Terapkan Protokol Kesehatan</a></h3>
                                    <p>Penjual jamu keliling Tidar (kanan) dengan menggunakan masker dan pelindung wajah melayani pembeli di kawasan Pasar Baru, Jakarta, Selasa, 9 Juni 2020. Tidar menerapkan protokol kesehatan jelang pemberlakuan protokol tatanan normal baru di Jakarta untuk tetap mencari nafkah.</p>
                                    <p><a href="detail_blog.php" class="btn btn-primary py-2 px-3">Selengkapnya</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="detail_blog.php" class="block-20" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/berita6.jpg);">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">April 9, 2021</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Hempaskan Radang Tenggorokan dengan Jamu Godokan Sirih</a></h3>
                                    <p>Di masa pandemi COVID-19, rasa gatal atau nyeri di tenggorokan menimbulkan kekhawatiran tersendiri. Pasalnya gejala penyakit yang disebabkan oleh virus Corona baru itu ditandai dengan rasa tidak nyaman di tenggorokan hingga batuk.</p>
                                    <p><a href="detail_blog.php" class="btn btn-primary py-2 px-3">Selengkapnya</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3 CLASS="heading">BLOG TERBARU</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/berita1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading-1"><a href="detail_blog.php">Manfaat Jamu Sepanjang Pandemi Covid-19, Begini Buat Jamu Beras Kencur</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2021</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/berita2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading-1"><a href="detail_blog.php">Cara Membuat Jamu Kunyit Asem yang Kaya Manfaat Kesehatan</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2021</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(<?php echo base_url('asset/template/front') ?>/images/berita3.jpg);"></a>
                            <div class="text">
                                <h3 class="heading-1"><a href="detail_blog.php">Selama Pandemi, Omzet Jamu di Pasar Global Tembus US$ 138,5 M</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2021</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> <!-- .section -->

    <footer class="ftco-footer bg-light ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">TEMANJAMU</h2>
                        <p>Sinergi Antara Jamu & Kopi Menghasilkan Minuman yang Menyehatkan. Laiknya Minuman yang lain, Jamu dan Kopi ini Bisa dinikmati dalam Keadaan Panas Maupun Dingin.</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo base_url('front/Artikel_front') ?>" class="py-2 d-block">Artikel</a></li>
                            <li><a href="<?php echo base_url('front/produkJamu_front') ?>" class="py-2 d-block">Produk Jamu</a></li>
                            <li><a href="<?php echo base_url('front/produkFranchise_front') ?>" class="py-2 d-block">Produk Franchise</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">JL. Jembatan Merah No.84C, Condongcatur, Sleman, Yogyakarta</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 6287 888 777 787</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@temanjamu.id</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script><a href="#" target=""> Temanjamu.id </a> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="<?php echo base_url('asset/template/front') ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/popper.min.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/aos.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/google-map.js"></script>
    <script src="<?php echo base_url('asset/template/front') ?>/js/main.js"></script>
    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>

</html>