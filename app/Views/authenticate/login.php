<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V16</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/images/login/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>/assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <!-- 	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
 -->
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/login/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <?php //dd(session()->getFlashdata('validation_errors')); ?>
    <div class="limiter">
        <div class="container-login100" style="background-color:cornflowerblue;">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Login
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="post"
                    action="<?= base_url() ?>/proses_login">

                    <div class="wrap-input100 validate-input" data-validate="Enter email">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <?php if(session()->getFlashdata('validation_errors')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <li><?= session()->getFlashdata('validation_errors') ?></li>
                        </ul>
                    </div>
                    <?php } ?>
					<?php if(session()->getFlashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <li><?= session()->getFlashdata('error') ?></li>
                        </ul>
                    </div>
                    <?php } ?>
                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
    <!--===============================================================================================-->
    <!-- <script src="<?php //base_url() ?>assets/vendor/twbs/bootstrap/js/popper.js"></script> -->
    <script src="<?= base_url() ?>assets/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/select2/select2.min.js"></script> -->
    <!--===============================================================================================-->
    <!-- <script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script> -->
    <!--===============================================================================================-->
    <!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/assets/login/js/main.js"></script>

</body>

</html>