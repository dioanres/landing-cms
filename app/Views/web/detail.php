<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url('upload/setting').'/'.$data['setting']['meta_icon'] ?>" rel="icon" type="image/png" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
		rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url() ?>/assets/sb_admin2/vendor1/fontawesome-free/css/all.min.css" rel="stylesheet"
		type="text/css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Slick Carousel -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<!-- Main CSS -->
	<link href="<?= base_url() ?>/assets/css/main.css" rel="stylesheet">

	<title>SUN GROUP | COMPANY PROFILE</title>
</head>

<body class="detail-body">
	<!-- Page Content -->
	<div class="container">
		<!-- Back Button -->
		<div class="second-section back">
			<a href="/">
				<img src="<?= base_url('assets/svg/back-thick.svg') ?>" alt="">
				<span>Kembali</span>
			</a>
		</div>

		<!-- Detail Section -->
			<div class="second-section">
				<div class="text-center main-detail">
					<?php foreach ($data['tentang_kami'] as $val) : ?>
						<img src="<?= base_url('upload/logo_ap').'/'.$val['logo'] ?>" alt="">
						<h2 class="mt-4"><?= $val['nama_perusahaan'] ?></h2>
					<?php endforeach ?>
				</div>
			</div>
	</div>


	<div class="second-bg">
		<img class="wave" src="<?= base_url('assets/svg/wave.svg') ?>" alt="">
		<div class="container">

			<!-- Tentang Kami -->
			<?= View('/web/components/tentang_kami') ?>

			<!-- Visi - Misi -->
			<?= View('/web/components/visi_misi') ?>

			<!-- Pimpinan Perusahaan -->
			<?= View('/web/components/pimpinan') ?>

			<!-- Our Team -->
			<?php if ($data['teams']) { ?>
				<?= View('/web/components/our_team') ?>
			<?php } ?>
			
			<!-- Sejarah Perusahaan -->
			<?= View('/web/components/sejarah') ?>

			<!-- Penilaian Pelanggan -->
			<?= View('/web/components/penilaian') ?>

			<!-- Gallery -->
			<?php if ($data['gallery']) { ?>
				<?= View('/web/components/gallery') ?>
			<?php } ?>

			<!-- Hubungi Kami -->
			<?= View('/web/components/hubungi') ?>

			<!-- Footer -->
			<?= View('/web/layouts/footer') ?>

		</div>
			<!-- Scroll Button -->
			<?= View('/web/components/scroll_button') ?>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<!-- Slick JS -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<!-- Slick Review -->
	<script>
		$('.review').slick({
			dots: false,
			prevArrow: false,
			nextArrow: false,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 1000,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
					}
				},
				{
					breakpoint: 960,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
					}
				},
				{
					breakpoint: 760,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	</script>
</body>

</html>