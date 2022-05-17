<!-- Header -->
<nav id="nav-head" class="navbar navbar-expand-lg head-nav fixed-top bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img class="nav-image" src="<?= base_url() ?>/assets/images/logo/tms.png" alt="">
            <h5 class="pt-2">
                <span class="sun-head">TMS</span>
                <span class="group-head">GROUP</span>
            </h5>
        </a>
        <button class="navbar-toggler" onclick="changeNav()" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="toggler">
                <i class="fas fa-bars"></i>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link mx-2" href="#beranda">Beranda</a>
                <a class="nav-item nav-link mx-2 active-nav" href="#tentang-kami">Tentang</a>
                <a class="nav-item nav-link mx-2" href="#anak-perusahaan">Anak Perusahaan</a>
                <a class="nav-item nav-link mx-2" href="#hubungi-kami">Kontak</a>
            </div>
        </div>
    </div>
</nav>