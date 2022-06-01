<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
    <meta name="title" content="<?= isset($meta_tag) ? $meta_tag['title'] : '' ?>">
    <meta name="description" content="="<?= isset($meta_tag) ? $meta_tag['description'] : '' ?>">
    <meta name="author" content="="<?= isset($meta_tag) ? $meta_tag['author'] : '' ?>">
    <meta name="keywords" content="="<?= isset($meta_tag) ? $meta_tag['keywords'] : '' ?>">
    <meta name="robots" content="index, follow">

    <title> Toyota </title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/upload/sales/meta_tag/<?= isset($meta_tag) ? $meta_tag['icon'] : '' ?>">

    <!-- Bootstrap core CSS -->

    <link href="<?= base_url() ?>/assets/template/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <!-- Font-Awesome -->
    <link href="<?= base_url() ?>/assets/template/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Web Fonts -->
    <link href="<?= base_url() ?>/assets/template/assets/css/fonts.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="<?= base_url() ?>/assets/template/assets/css/owl.theme.default.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/template/assets/css/owl.carousel.css" rel="stylesheet">
    <!-- Animation Css -->
    <link href="<?= base_url() ?>/assets/template/assets/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/assets/css/magnific-popup.css">
    <!-- Style Css -->
    <link href="<?= base_url() ?>/assets/template/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/template/assets/css/basic_slider_2.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/template/assets/css/portfolio_grid_style_6.css" rel="stylesheet">

    <style>
    
    .wa-show {
        position: fixed;
        bottom: 85px;
        right: 21px;
        cursor:pointer;
        z-index: 99999999;
    }

    .shadow {
        box-shadow: -2px 4px 8px #545252;
        -moz-border-radius: 25px;
        -webkit-border-radius: 25px;
        border-radius: 25px;
    }

    .img-round {
        height: 150px;
        width: 150px;
        border-radius: 50%;
    }

    .label-product {
        white-space: initial;
    }

    .img-sales {
        height: 350px;
        width: 350px;
    }

    /* Modal Price */

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    .modal {
        text-align: center;
        padding: 0 !important;
    }

    .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }

        .modal-price {
        /* position: absolute; */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -75%);
        width:100%;
    }
    .col-xs-3 {
        float:unset !important;
    }
        /* .modal {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: show;
    } */
    }
    </style>
</head>