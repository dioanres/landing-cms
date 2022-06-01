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
    <?= View('/web/layouts/menu') ?>
    <?= View('/web/modal_products') ?>
    <!--Slider area start here-->
    <section data-scroll='0' class="slider-area" id="0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    <div id="carouselExampleIndicators" class="slide carousel" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php if ($banners): 
                                        foreach ($banners as $key => $banner) :    
                                    ?>
                            <div class="item <?= $key == 0 ? 'active' : '' ?>">
                                <img src="<?= base_url() ?>/upload/sales/banner/<?= $banner['image'] ?>" alt="" />
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
                <div class="portfolio-filter clearfix text-center">
                    <ul class="list-inline" id="filter">
                        <li><a class="active" data-group="all">All</a></li>
                        <?php if($groups): foreach($groups as $key => $val): ?>
                        <li><a data-group="<?= $val['name'] ?>"><?= $val['name'] ?></a></li>
                        <?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="portfolio_nav_tabs">
                            <div class="tab-content">
                                <div id="all_items" class="tab-pane fade in active">
                                    <div class="row">
                                        <div id="gridWrapper">
                                        <?php if(!empty($products)): foreach($products as $product): ?>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 portfolio-wrapper"
                                            data-groups='["all", "<?= $product['group_name'] ?>"]'>
                                            <a class="btn show-product" data-product_id="<?= $product['id'] ?>">
                                                <div class="tab_image_wrapper">
                                                    <div class="tab_image">
                                                        <figure>
                                                            <img src="<?= base_url() ?>/upload/sales/product/<?= $product['image'] ?>"
                                                                class="img-responsive" alt="team1_img" />
                                                        </figure>
                                                    </div>
                                                    <div class="tab_image_text">
                                                        <div class="project_title label-product">
                                                            <h4><?= $product['name'] ?></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php endforeach; endif; ?>

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
                                                    <li><a href="<?= isset($socmed->url_wa) ? $socmed->url_wa : '#' ?>"><i
                                                                class="fa fa-whatsapp"></i></a>
                                                    </li>
                                                    <li><a
                                                            href="http://instagram.com/_u/<?= isset($socmed->instagram) ? $socmed->instagram : '#' ?>/"><i
                                                                class="fa fa-instagram"></i></a>
                                                    </li>
                                                    <li><a
                                                            href="<?= isset($socmed->youtube) ? $socmed->youtube : '#' ?>"><i
                                                                class="fa fa-youtube"></i></a>
                                                    </li>
                                                    <li><a href="<?= isset($socmed->gmail) ? $socmed->url_wa : '#' ?>"><i
                                                                class="fa fa-google-plus"></i></a>
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
                            <form method="post" action="/send_question">
                                <div class="form-group">
                                    <label class="sr-only">Name</label>
                                    <input type="text" name="name" class="form-control" required="" id="nameNine"
                                        placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="question" required="" rows="7" id="messageNine"
                                        placeholder="Write message"></textarea>
                                </div>
                                <button type="submit" class="btn text-center btn-blue">Send Question</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact_section end -->

    </div>
    <?= View('/web/layouts/section_footer') ?>

    <!-- Modal Notif -->
    <?php if($notifications): ?>
    <div class="modal fade" id="modal-notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <img class="modal-content" src="<?= base_url() ?>/upload/sales/notification/<?= $notifications['image'] ?>">
            <div class="row text-center" style="margin-top:10px;">
                <button id="other-price" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?= View('/web/layouts/footer') ?>

</body>

</html>