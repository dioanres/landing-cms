<!DOCTYPE html>
<!-- 
Template Name: A-Future HTML
Version: 1.0.0
Author: Pemuda Solusi Teknologi
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<html lang="en">

<!-- Header -->
<?= View('/web/layouts/header') ?>

<body>
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

    <!-- section_1 start-->
    <div data-scroll='0' class="">
        <div>
            <!--Slider area start here-->
            <section class="slider-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                            <div id="carouselExampleIndicators" class="slide carousel" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <?php if ($banners): 
                                        foreach ($banners as $key => $banner) :    
                                    ?>
                                    <div class="item <?= $key == 0 ? 'active' : '' ?>">
                                        <img src="<?= base_url() ?>/upload/sales/banner/<?= $banner['image'] ?>"
                                            alt="" />
                                        <div class="carousel-caption one">
                                            <div class="slider_content">

                                                <ul>
                                                    <li class="animated bounceInLeft"><a href="#5">Shop Now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; ?>
                                </div>
                                <a class="carousel-control-prev carousel-control" href="#carouselExampleIndicators"
                                    role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                <a class="carousel-control-next carousel-control" href="#carouselExampleIndicators"
                                    role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Slider area end here-->

            <!-- section1_menu_wrapper start here -->

            <div class="section2_menu_wrapper">
                <div class="container">
                    <div class="row section2_header">
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-3">
                            <div class="logo_wrapper">
                                <a href="../index.html"><img style="height:35px;"
                                        src="<?= base_url() ?>/assets/template/assets/images/section3_logo.png"
                                        class="img-responsive" alt="section2_logo_img" />
                                </a>
                            </div>
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#section2_responsive_nav">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-9 hidden-xs">
                            <nav class="navbar navbar-inverse">

                                <div class="collapse navbar-collapse" id="mySidenav">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="0">Home</a>
                                        </li>
                                        <li><a href="#5">Top Products</a>
                                        </li>
                                        <li><a href="#4">Customers</a>
                                        </li>
                                        <li><a href="#6">Testimonials</a>
                                        </li>
                                        <li><a href="#contact-us">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>

                            </nav>
                        </div>

                    </div>
                    <div class="visible-xs">
                        <div class="collapse navbar-collapse" id="section2_responsive_nav">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a>
                                </li>
                                <li><a href="#5">Top Products</a>
                                </li>
                                <li><a href="#4">Customers</a>
                                </li>
                                <li><a href="#6">Testimonials</a>
                                </li>
                                </li>
                                <li><a href="#contact-us">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- section1_menu_wrapper end here -->
        </div>
    </div>

    <div data-scroll='5' id="5" class="full_width">
        <!-- portfolio_section start -->
        <div class="portfolio_section">
            <div class="section_head">
                <div class="container">
                    <div class="row">
                        <!-- section_heading start -->
                        <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                            <div class="text-center">
                                <div class="section_heading">
                                    <h2><i class="fa fa-square"></i> Top Products</h2>
                                </div>
                                <!-- <div class="section_content">
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum aucto</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="portfolio_nav_tabs">
                            <div class="tab-content">
                                <div id="all_items" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                                            <div class="tab_image_wrapper">
                                                <div class="tab_image">
                                                    <figure>
                                                        <img src="<?= base_url() ?>/assets/template/assets/images/portfolio-images/portfolio-1.png"
                                                            class="img-responsive" alt="team1_img" />
                                                    </figure>
                                                </div>
                                                <div class="tab_image_text">
                                                    <div class="project_title">
                                                        <h4><a href="#">Yaris GR</a></h4>
                                                        <span>Rp 250.000.000,-</span>
                                                    </div>
                                                    <div class="project_category">
                                                        <span><a href="#">Cek Angsuran</a></span>
                                                    </div>
                                                    <div class="project_likes">
                                                        <a href="#"><img height="30px"
                                                                src="<?= base_url() ?>/assets/template/assets/images/icon/whatsapp.png"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                                            <div class="tab_image_wrapper">
                                                <div class="tab_image">
                                                    <figure>
                                                        <img src="<?= base_url() ?>/assets/template/assets/images/portfolio-images/rush.png"
                                                            class="img-responsive" alt="team1_img" />
                                                    </figure>
                                                </div>
                                                <div class="tab_image_text">
                                                    <div class="project_title">
                                                        <h4><a href="#">Toyota Rush</a></h4>
                                                        <span>Rp 350.000.000,-</span>
                                                    </div>
                                                    <div class="project_category">
                                                        <span><a href="#">Cek Angsuran</a></span>
                                                    </div>
                                                    <div class="project_likes">
                                                        <a href="#"><img height="30px"
                                                                src="<?= base_url() ?>/assets/template/assets/images/icon/whatsapp.png"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                                            <div class="tab_image_wrapper">
                                                <div class="tab_image">
                                                    <figure>
                                                        <img src="<?= base_url() ?>/assets/template/assets/images/portfolio-images/raize.png"
                                                            class="img-responsive" alt="team1_img" />
                                                    </figure>
                                                </div>
                                                <div class="tab_image_text">
                                                    <div class="project_title">
                                                        <h4><a href="#">Toyota Raize</a></h4>
                                                        <span>Rp 350.000.000,-</span>
                                                    </div>
                                                    <div class="project_category">
                                                        <span><a href="#">Cek Angsuran</a></span>
                                                    </div>
                                                    <div class="project_likes">
                                                        <a href="#"><img height="30px"
                                                                src="<?= base_url() ?>/assets/template/assets/images/icon/whatsapp.png"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <button id="other-price" class="btn btn-primary">Lihat Harga Produk Lain</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Harga Lain -->
        <div id="modal-price" class="modal fade modal-price" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <img class="modal-content"
                    src="<?= base_url() ?>/assets/template/assets/images/portfolio-images/harga.jpeg">
                <div class="row text-center" style="margin-top:10px;">
                    <button id="other-price" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                </div>
            </div>

        </div>
    </div>
    <!-- <div id="modal-price" class="modal">
            <div class="container">
                <div class="row">
                    <span class="close">&times;</span>
                </div>
                <div class="row">
                    <img class="modal-content modal-dialog"
                        src="<?= base_url() ?>/assets/template/assets/images/portfolio-images/harga.jpeg">
                </div>
                <div class="row text-center" style="margin-top:10px;">
                <button id="other-price" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                </div>


                <div id="caption"></div>
            </div>
        </div> -->

    <!-- End Moodal -->
    <!-- portfolio_section end-->
    </div>
    <div data-scroll='4' id="4" class="full_width">
        <!-- team_section start -->
        <div class="team_section">
            <div class="section_head">
                <div class="container">
                    <div class="row">
                        <!-- section_heading start -->
                        <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                            <div class="text-center">
                                <div class="section_heading">
                                    <h2><i class="fa fa-square"></i> Delivery Customers</h2>
                                </div>
                                <!-- <div class="section_content">
                                    <p>Para <i>Customers</i> yang telah mempercayakan pembelian mobil kepada Arif</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="team_slider" data-ride="carousel">
                            <div class="owl-carousel owl-theme">
                                <?php if($customers): 
                                    foreach($customers as $cust):
                                ?>
                                <div class="item">
                                    <div class="main_wrapper">
                                        <div class="image_wrapper">
                                            <img src="<?= base_url() ?>/upload/sales/customer/<?= $cust['image'] ?>"
                                                class="img-responsive img-sales" alt="team1_img" />
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team_section end -->


    </div>
    <div data-scroll='7' id="7" class="full_width">
        <div class="section_5" style="text-align: -webkit-center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                        <!-- <div class="section5_text_wrapper">
                        <div class="section5_text_heading">
                            <h2>Hubungi :</h2>
                        </div>
                        <div class="section5_text_content">
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibendum aucto</p>
                        </div>
                    </div> -->
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="section5_slider_wrapper">
                            <div class="owl-item">

                                <div class="item">
                                    <div class="section5_item_imag main_wrapper">
                                        <img src="<?= base_url() ?>/upload/sales/profile/<?= $profile['photo'] ?>"
                                            class="img-responsive img-round image_wrapper" alt="section1_t1__img" />
                                        <div class="image_wrapper_overlay">
                                            <div class="content_wrapper">
                                                <h4><?= $profile['name'] ?></h4>
                                                <h5><?= $profile['job'] ?></h5>
                                                <ul class="social_icons">
                                                    <li><a href="<?= isset($socmed->url_wa) ? $socmed->url_wa : '#' ?>"><i class="fa fa-whatsapp"></i></a>
                                                    </li>
                                                    <li><a href="<?= isset($socmed->instagram) ? $socmed->instagram : '#' ?>"><i class="fa fa-instagram"></i></a>
                                                    </li>
                                                    <li><a href="<?= isset($socmed->youtube) ? $socmed->youtube : '#' ?>"><i class="fa fa-youtube"></i></a>
                                                    </li>
                                                    <li><a href="<?= isset($socmed->gmail) ? $socmed->url_wa : '#' ?>"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section5_item_author" style="margin-bottom:10px;margin-top:10px;">
                                        <h5><?= $profile['name'] ?></h5>
                                        <span><b>(<?= $profile['job'] ?>)</b></span>
                                    </div>
                                    <div class="section5_item_content">
                                        <p><i>"<?= $profile['motto'] ?>"</i></p>
                                        <!-- <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-scroll="6" id="6" class="full_width">
        <!-- testimonial_section start-->
        <div class="testimonial_section">
            <div class="section_head">
                <div class="container">
                    <div class="row">
                        <!-- section_heading start -->
                        <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                            <div class="text-center">
                                <div class="section_heading">
                                    <h2><i class="fa fa-square"></i> What Client Say :</h2>
                                </div>
                                <div class="section_content">
                                    <p>Testimonial dari para customer yang sudah mempercayakan kepada saya dalam
                                        pembelian Mobil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="testimonial_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <?php if ($customers) : 
                                    foreach($testimonials as $testi) : 
                                    ?>
                                <div class="item">
                                    <div class="testimonial_slider_content">
                                        <p>“<?= $testi['notes'] ?>”</p>
                                    </div>
                                    <div class="testimonial_slider_image">
                                        <?php if($testi['notes']) {

                                         ?>
                                        <img src="<?= base_url() ?>/upload/sales/testimonial/<?= $testi['image'] ?>"
                                            class="img-responsive" alt="section3_t1__img" />
                                        <?php } else { ?>
                                            <img src="<?= base_url() ?>/assets/template/assets/images/testimonialsimages/testi_img1.png"
                                            class="img-responsive" alt="section3_t1__img" />
                                        <?php } ?>
                                    </div>
                                    <div class="testimonial_slider_author">
                                        <span>- by <b> <?= $testi['name'] ?> </b> </span>
                                    </div>
                                </div>
                                <?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial_section end -->
    </div>

    <div data-scroll='8' class="full_width">
        <!-- contact_section start -->
        <div class="contact_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-bg">
                            <form>
                                <div class="form-group">
                                    <label class="sr-only">Name</label>
                                    <input type="text" class="form-control" required="" id="nameNine"
                                        placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="email" class="form-control" required="" id="emailNine"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Name</label>
                                    <textarea class="form-control" required="" rows="7" id="messageNine"
                                        placeholder="Write message"></textarea>
                                </div>
                                <button type="submit" class="btn text-center btn-blue">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact_section end -->

    </div>
    <!-- footer start -->
    <div class="footer" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="footer_copyright_image">
                    <div class="col-xs-12 col-md-4 col-lg-4 col-sm-6">
                        <div class="media">
                            <div class="media-body">
                                <div class="footer_icon">
                                    <img src="<?= base_url() ?>/assets/template/assets/images/footer-images/location.png"
                                        alt="ic-loc">
                                </div>
                                <div class="footer_icon_text">
                                    <div class="footer_icon_title">Location</div>
                                    <hr class="footer_yellow_hr">
                                    <p><?= $profile['address'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4 col-sm-6">
                        <div class="media">
                            <div class="media-body">
                                <div class="footer_icon">
                                    <img src="<?= base_url() ?>/assets/template/assets/images/footer-images/phone.png"
                                        alt="ic-loc">
                                </div>
                                <div class="footer_icon_text">
                                    <div class="footer_icon_title">Phone | Email</div>
                                    <hr class="footer_green_hr">
                                    <p><b>Phone</b> :- 7272 245 015<br>
                                        <b>Mobile</b> :- + 91 245 0154<br>
                                        <b>E-Mail</b> :- <a href="#">ariftoyota@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4 col-sm-6">
                        <div class="media timing">
                            <div class="media-body">
                                <div class="footer_icon">
                                    <img src="<?= base_url() ?>/assets/template/assets/images/footer-images/time.png"
                                        alt="ic-loc">
                                </div>
                                <div class="footer_icon_text">
                                    <div class="footer_icon_title">Working Hours</div>
                                    <hr class="footer_blue_hr">
                                    <p><b> Mon - Fri </b> :- 9am - 6pm<br>
                                        <b>Saturday</b> :- 9am - 4pm<br>
                                        <b>Sunday</b> :- <a href="#" class="closed">Closed</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copyright_text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-6">
                        <div class="footer_copyright">
                            <p>© Copyright 2022 By Arif Toyota - all right reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                                </li>
                                <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
                                </li>
                                <li> <a href="#"><i class="fa fa-vimeo-square" aria-hidden="true"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wa-show" id="btn-wa">
            <a href="<?= isset($socmed->url_wa) ? $socmed->url_wa : '#' ?>">
                <img height="50px" class="shadow"
                    src="<?= base_url() ?>/assets/template/assets/images/icon/whatsapp.png"></a>
        </div>
    </div>
    <!-- footer end -->

    <!-- Modal Notif -->
    <?php if($notifications): ?>
    <div class="modal fade" id="modal-notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <img class="modal-content"
                src="<?= base_url() ?>/upload/sales/notification/<?= $notifications['image'] ?>">
            <div class="row text-center" style="margin-top:10px;">
                <button id="other-price" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Bootstrap js -->
    <script src="<?= base_url() ?>/assets/template/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/assets/js/bootstrap.min.js"></script>
    <!-- Owl Carousel js -->
    <script src="<?= base_url() ?>/assets/template/assets/js/owl.carousel.js"></script>
    <!-- Progress Bar js -->
    <script src="<?= base_url() ?>/assets/template/assets/js/jquery.inview.min.js"></script>
    <!-- Counters js -->
    <script src="<?= base_url() ?>/assets/template/assets/js/jquery.easypiechart.min.js"></script>
    <!-- Magnific Popup js -->
    <script src="<?= base_url() ?>/assets/template/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Custom js -->
    <script src="<?= base_url() ?>/assets/template/assets/js/custom.js"></script>

    <script>
    //notif modal

    $(document).ready(function() {
        $('#modal-notif').modal('show');
    });

    //Side Menu js

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function initMap() {
        var uluru = {
            lat: -36.742775,
            lng: 174.731559
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            scrollwheel: false,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }

    $(window).scroll(function() {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 50) {
            $('.section2_menu_wrapper').addClass('menu_fixed animated fadeInDown');
        } else {
            $('.section2_menu_wrapper').removeClass('menu_fixed animated fadeInDown');
        }
    });

    $('#other-price').click(function() {
        $('#modal-price').modal('show');

        function alignModal() {

            $(".modal-dialog").css("margin-top", Math.max(0,
                ($(window).height() - $(".modal-dialog").height()) / 2));
        }
        //css('margin-top', (Math.floor((window.innerHeight - $('.modal')[0].offsetHeight) / 2) + 'px'));
    });
    </script>

</body>

</html>