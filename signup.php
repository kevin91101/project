<?php include 'head.php' ?>
<body class="bg-cover" style="background-image:linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) 80%), url(images/24wepower/20240921_WE\ POWER-969.jpg);">
    <?php include 'header.php' ?>
    <main class="logIn" id="app">
        <section class="s01">
        <div class="container-fluid">
            <div class="row row01">
            <div class="col-6 offset-6">
                <div class="card logIn01 rounded-4 translate-middle-y" style="width: 400px;">
                    <div class="card-body m-2">
                        <h2 class="text-center fw-bold">CREATE ACCOUNT</h2>
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" :class="{ 'is-valid' : flag_username, 'is-invalid' : !flag_username }" placeholder="5-8words" v-model="username" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" :class="{ 'is-valid' : flag_password, 'is-invalid' : !flag_password }" placeholder="8-12words" v-model="password" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Confirm Password</label>
                            <input type="text" class="form-control" :class="{ 'is-valid' : flag_re_password, 'is-invalid' : !flag_re_password }" placeholder="8-12words" v-model="re_password" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" :class="{ 'is-valid' : flag_email, 'is-invalid' : !flag_email }" placeholder="Email" v-model="email" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="text-center d-grid">
                        <button class="btn btn-dark" @click="register">CREATE ACCOUNT</button>
                        </div>
                        <div class="d-flex">
                        <p class="small mt-3">Already have an account?</p>
                        <a href="login.php" class="ms-auto my-auto" style="text-decoration: none;">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </main>
<?php include 'footer.php' ?>