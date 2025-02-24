<?php include 'head.php' ?>
<body class="bg-cover" style="background-image:linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) 80%), url(images/24wepower/20240921_WE\ POWER-969.jpg);">
    <?php include 'header.php'?>
    <main class="logIn" id="app">
        <div class="container-fluid">
            <div class="row row01">
                <div class="col-6 offset-6">
                    <div class="card logIn01 rounded-4 translate-middle-y" style="width: 300px;">
                        <div class="card-body m-2">
                            <h1 class="text-center fw-bold">LOG IN</h1>
                            <div class="mb-3">
                                <label for="" class="form-label">Account</label>
                                <input type="text" class="form-control" :class="{ 'is-invalid' : !flag_username_login }" placeholder="Name/Email" v-model="username_login" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" :class="{ 'is-invalid' : !flag_password_login }" placeholder="Password" v-model="password_login" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="text-center d-grid">
                                <button class="btn btn-dark" @click="login">LOG IN</button>
                            </div>
                            <div class="d-flex">
                                <p class="small mt-3">New to Ultilife?</p>
                                <a href="signup.php" class="ms-auto my-auto" style="text-decoration: none;">Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row row02">
            <div class="col-6 offset-6">
                <div class="card login text-white">
                <h2 class="fw-bold text-center">LOG IN</h2>
                <div class="card-body">
                    <div class="mb-3">
                    <label for="prd" class="form-label">Email</label>
                    <input type="text" class="form-control" id="prd" name="prd">
                    <div class="valid-feedback">符合規定</div>
                    <div class="invalid-feedback">不符合規定</div>
                    </div>
                    <div class="mb-3">
                    <label for="prd" class="form-label">Password</label>
                    <input type="text" class="form-control" id="prd" name="prd">
                    <div class="valid-feedback">符合規定</div>
                    <div class="invalid-feedback">不符合規定</div>
                    </div>
                    <div class="logB d-flex flex-column justify-content-center">
                    <button class="btn btn-secondary">LOG IN</button>
                    <p class="small mt-3">New to Ultilife?
                        <a href="" class="ms-2">Create</a>
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div> -->
        </div>
    </main>
<?php include 'footer.php' ?>