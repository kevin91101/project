    <footer class="bg-black" style="min-height: 5vh;">
        <div class="container">
            <div class="row ftcontent align-items-center justify-content-between text-white">
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
            <div <?php if ($tempFile == 'about.php' || $tempFile == 'index.php' || $tempFile == 'photos.php' || $tempFile == 'add_photos.php') {
                        echo 'class="fix_ri"';
                    } ?>>
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
    <script src="js/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
    <script src="js/ULscript.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", { // 輪播
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

        new WOW().init(); // wow animation

        const counterUp = window.counterUp.default

        const callback = entries => {
            entries.forEach(entry => {
                const el = entry.target
                if (entry.isIntersecting && !el.classList.contains('is-visible')) {
                    counterUp(el, {
                        duration: 2000,
                        delay: 16,
                    })
                    el.classList.add('is-visible')
                }
            });
        };

        const IO = new IntersectionObserver(callback, {
            threshold: 1
        })

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

        $(".jq-goTop").click(function(e) { // 回到頂部
            e.preventDefault();
            $("html,body").animate({
                    scrollTop: 0,
                },
                600
            );
        });
    </script>
    <script>
        $("#imgInp").change(function() {
            readURL(this);
            $(".upFile").hide();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#imgShw").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgRe").click(function() {
            $("#imgShw").attr('src', "");
            $(".upFile").show();
        })
    </script>
    <script>
        const App = {
            data() {
                return {
                    username: '',
                    password: '',
                    re_password: '',
                    email: '',
                    username_login: '',
                    password_login: '',
                    flag_username: false,
                    flag_password: false,
                    flag_re_password: false,
                    flag_email: false,
                    flag_username_login: false,
                    flag_password_login: false,
                }
            },
            watch: {
                username: function(newValue) {
                    const vm = this;
                    if (newValue.length > 4 && newValue.length < 11) {
                        vm.flag_username = true;
                    } else {
                        vm.flag_username = false;
                    }
                },
                password: function(pwValue) {
                    const vm = this;
                    if (pwValue.length > 7 && pwValue.length < 13) {
                        vm.flag_password = true;
                        if (vm.password == vm.re_password) {
                            vm.flag_re_password = true;
                        } else {
                            vm.flag_re_password = false;
                        }
                    } else {
                        vm.flag_password = false;
                        vm.flag_re_password = false;
                    }
                },
                re_password: function(reValue) {
                    const vm = this;
                    if (vm.flag_password) {
                        if (vm.password == vm.re_password) {
                            vm.flag_re_password = true;
                        } else {
                            vm.flag_re_password = false;
                        }
                    } else {
                        vm.flag_re_password = false;
                    }
                },
                email: function(newValue) {
                    const vm = this;
                    if (!vm.email == '') {
                        vm.flag_email = true;
                    } else {
                        vm.flag_email = false;
                    }
                },
                username_login: function(newValue) {
                    const vm = this;
                    if (newValue != '') {
                        vm.flag_username_login = true;
                    } else {
                        vm.flag_username_login = false;
                    }
                },
                password_login: function(newValue) {
                    const vm = this;
                    if (newValue != '') {
                        vm.flag_password_login = true;
                    } else {
                        vm.flag_password_login = false;
                    }
                }
            },
            methods: {
                register() {
                    const vm = this;
                    if (vm.flag_username && vm.flag_password && vm.flag_re_password && vm.flag_email) {
                        if (confirm("確認註冊?")) {
                            // 傳遞至後端
                            var dataJSON = {};
                            dataJSON["username"] = vm.username;
                            dataJSON["password"] = vm.password;
                            dataJSON["email"] = vm.email;
                            console.log(JSON.stringify(dataJSON));

                            $.ajax({
                                type: "POST",
                                url: "http://localhost:8080/project/project/signup_api.php",
                                data: JSON.stringify(dataJSON),
                                contentType: "application/json; charset=utf-8",
                                dataType: "json",
                                success: function(data) {
                                    console.log(data);
                                    alert(data.message);
                                    location.href = "http://localhost:8080/project/project/index.php";
                                },
                                error: function() {
                                    alert("error- http://localhost:8080/project/project/signup_api.php")
                                }
                            });
                        }
                    } else {
                        alert("資料有錯誤!");
                    }
                },
                login() {
                    const vm = this;
                    if (vm.flag_username_login && vm.flag_password_login) {
                        // 傳遞登入資料至後端API
                        // {"username":"xx", "password":"xx"}
                        // Send a POST request
                        var dataJSON = {}; // 物件
                        dataJSON["username"] = vm.username_login;
                        dataJSON["password"] = vm.password_login;
                        console.log(JSON.stringify(dataJSON));
                        axios({
                            method: 'post',
                            url: 'http://localhost:8080/project/project/login_api.php',
                            data: JSON.stringify(dataJSON)
                        }).then(function(response) {
                            console.log(response);
                            if (response.data.state) {
                                alert(response.data.message);
                                location.href = "http://localhost:8080/project/project/index.php";
                            } else {
                                alert(response.data.message);
                            }
                        }).catch(function(error) {
                            console.log(error);
                        });
                    } else {
                        alert("帳密不得為空白")
                    }
                }
            }
        }
        Vue.createApp(App).mount('#app');
    </script>

    </html>