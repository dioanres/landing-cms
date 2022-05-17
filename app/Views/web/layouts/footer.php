<!-- Footer -->
<div class="pt-5 text-center footer">
    <hr />
    <?php foreach ($data['tentang_kami'] as $val) : ?>
    <div class="py-3">
        <img src="<?php echo base_url('upload/logo_ap').'/'.$val['logo'] ?>" alt="">
        <h5>- FROM US, FOR US -</h5>
        <h5>© 2022 PT Tunas Multi Sinergi Group</h5>
    </div>
    <?php endforeach ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
AOS.init();

var textWrapper = document.querySelector('.company-title');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({
        loop: true
    })
    .add({
        targets: '.company-title .letter',
        opacity: [0, 1],
        easing: "easeInOutQuad",
        duration: 2250,
        delay: (el, i) => 150 * (i + 1)
    }).add({
        targets: '.company-title',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
</script>