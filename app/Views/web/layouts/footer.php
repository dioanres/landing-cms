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
 <script src="<?= base_url() ?>/assets/template/assets/js/jquery.shuffle.min.js"></script>
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