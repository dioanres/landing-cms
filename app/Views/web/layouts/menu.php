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
        <!-- section1_menu_wrapper start here -->
        <div class="section2_menu_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-3">
                        <div class="logo_wrapper">
                            <a href="../index.html"><img style="height:35px;"
                                    src="<?= base_url() ?>/upload/sales/profile/<?= isset($profile) ? $profile['logo'] :'' ?>"
                                    class="img-responsive" alt="logo_image" />
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
                                    <li class="menu active"><a href="#0"><?= $menu['home']['home_title'] ?></a>
                                    </li>
                                    <li class="menu"><a href="#5"><?= $menu['product']['product_title'] ?></a>
                                    </li>
                                    <li class="menu"><a href="#4"><?= $menu['customer']['customer_title'] ?></a>
                                    </li>
                                    <li class="menu"><a href="#6"><?= $menu['testimonial']['testimonial_title'] ?></a>
                                    </li>
                                    <li class="menu"><a href="#contact-us"><?= $menu['contact']['contact_title'] ?></a>
                                    </li>
                                </ul>
                            </div>

                        </nav>
                    </div>

                </div>
                <div class="visible-xs">
                    <div class="collapse navbar-collapse" id="section2_responsive_nav">
                        <ul class="nav navbar-nav">
                            <li class="menu active"><a href="#0"><?= $menu['home']['home_title'] ?></a>
                            </li>
                            <li class="menu"><a href="#5"><?= $menu['product']['product_title'] ?></a>
                            </li>
                            <li class="menu"><a href="#4"><?= $menu['customer']['customer_title'] ?></a>
                            </li>
                            <li class="menu"><a href="#6"><?= $menu['testimonial']['testimonial_title'] ?></a>
                            </li>
                            <li class="menu"><a href="#contact-us"><?= $menu['contact']['contact_title'] ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- section1_menu_wrapper end here -->
    </div>
</div>