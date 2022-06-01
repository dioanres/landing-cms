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
                                    <div class="footer_icon_title">Address</div>
                                    <hr class="footer_yellow_hr">
                                    <p><?= isset($profile) ? $profile['address'] : '' ?></p>
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
                                    <div class="footer_icon_title">Contact | Social Media</div>
                                    <hr class="footer_green_hr">
                                    <p><b>Phone</b> :<?= isset($profile['phone']) ? $profile['phone'] : '-' ?><br>
                                        <b>Whatsapp</b> : <a href="<?= isset($socmed->url_wa) ? $socmed->url_wa : '#'  ?>"><?= isset($socmed->whatsapp) ? $socmed->whatsapp : '-'  ?></a><br>
                                        <b>Instagram</b> : <a href="http://instagram.com/_u/<?= isset($socmed->instagram) ? $socmed->instagram : '#' ?>/"><?= isset($socmed->instagram) ? $socmed->instagram : '-'  ?></a><br>
                                        <b>Youtube</b> : <a href="<?= isset($socmed->youtube) ? $socmed->youtube : '-'  ?>">Click</a><br>
                                        <b>E-Mail</b> : <a href="#"><?= isset($socmed->email) ? $socmed->email : '-'  ?></a>
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
                                    <p><b> Senin - Jumat </b> :- 9am - 6pm<br>
                                        <b>Sabtu</b> :- 9am - 4pm<br>
                                        <b>Minggu</b> :- <a href="#" class="closed">Closed</a>
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
                            <p>© Copyright 2022 By MQL Digital - all right reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="footer_menu">
                            <ul>
                                <li><a href="<?= isset($socmed->url_wa) ? $socmed->url_wa : '#'  ?>"><i class="fa fa-whatsapp"></i></a>
                                </li>
                                <li> <a href="http://instagram.com/_u/<?= isset($socmed->instagram) ? $socmed->instagram.'/' : '#'  ?>"><i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                                <li><a href="<?= isset($socmed->linkedin) ? $socmed->linkedin : '#'  ?>"><i class="fa fa-linkedin-square"></i></a>
                                </li>
                                <li>
                                    <a href="<?= isset($socmed->youtube) ? $socmed->youtube : '#'  ?>"> <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li><a href="mailto:<?= isset($socmed->email) ? $socmed->email : '#'  ?>"><i class="fa fa-google-plus-square"></i></a>
                                </li>
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