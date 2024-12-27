    <footer class="bg-black" style="height: 100px;">
        <div class="container">
        <div class="row ftcontent justify-content-between text-white">
            <div class="col-2 text-center align-content-center">
            <a class="navbar-brand" href="index.html">
                <img src="images/png-反白.png" width="100%" alt="">
            </a>
            </div>
            <div class="col-2 text-center d-flex flex-column justify-content-center">
            <div class="text-secondary">電話:</div>
            <div>04-22613980</div>
            </div>
            <div class="col-2 text-center d-flex flex-column justify-content-center">
            <div><span class="text-secondary">信箱:</span><br>
                cfultilife@gmail.com</div>
            </div>
            <div class="col-2 text-center d-flex flex-column justify-content-center">
            <div class="text-secondary">地址:</div>
            <div class="">台中市北屯區敦富五街41號</div>
            </div>
        </div>
        <?php
        $a = explode("/", $_SERVER["SCRIPT_NAME"]);
        $tempFile = $a[count($a) - 1];
        ?>
        <div <?php if($tempFile == 'about.php' || $tempFile == 'index.php') {
            echo 'class="fix_ri"';
        }?>>
            <a href="https://www.facebook.com/CFUltiLife/?locale=zh_TW" target="_blank">
            <img src="https://pic03.eapple.com.tw/samuraicf/icon_fb.png">
            </a>
            <a href="https://www.instagram.com/crossfit_ultilife/" target="_blank">
            <img src="https://pic03.eapple.com.tw/samuraicf/icon_ig.png">
            </a>
            <a href="https://line.me/R/ti/p/@xxy3755s" target="_blank">
            <img src="https://pic03.eapple.com.tw/samuraicf/icon_line.png">
            </a>
        </div>
        </div>
    </footer>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/jquery-3.7.1.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/ULscript.js"></script>
<script>
    // $(function() {
    //     $("#show-img-details li img").click(function() {
    //         console.log($(this).attr("src"));
    //         thisimg = $(this).attr("src");
    //         $("#show-img").attr("src", thisimg);
    //         $("#show-img").attr("style", " background-image: url(" + thisimg + ");");
    //         console.log("style", " background-image: url(" + thisimg + ");")
    //     });
    // });

    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });

    new WOW().init();// wow animation

    const counterUp = window.counterUp.default

    const callback = entries => {
        entries.forEach(entry => {
            const el = entry.target
            if (entry.isIntersecting && !el.classList.contains('is-visible')) {
              // el.classList.add('si-visible');
              // setTimeout(() => {
              //     counterUp(el, {
              //         duration: 2000,
              //         delay: 16,
              //     });
              // }, 2000);
                counterUp(el, {
                    duration: 2000,
                    delay: 16,
                })
                el.classList.add('is-visible')
            }
        });
    };

    const IO = new IntersectionObserver(callback, { threshold: 1 })

    const el01 = document.querySelector('.counter01')
    IO.observe(el01)

    const el02 = document.querySelector('.counter02')
    IO.observe(el02)

    const el03 = document.querySelector('.counter03')
    IO.observe(el03)

    const el04 = document.querySelector('.counter04')
    IO.observe(el04)

    const el05 = document.querySelector('.counter05')
    IO.observe(el05)

    const el06 = document.querySelector('.counter06')
    IO.observe(el06)

    $(".jq-goTop").click(function (e) {// 回到頂部
    e.preventDefault();
    $("html,body").animate(
        {
        scrollTop: 0,
        },
        600
    );
    });
</script>
</html>