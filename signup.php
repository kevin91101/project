<?php include 'head.php' ?>
<body class="bg-cover" style="background-image:linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) 80%), url(images/24wepower/20240921_WE\ POWER-969.jpg);">
    <?php include 'header.php' ?>
    <main class="logIn">
        <section class="sec01">
        <div class="container-fluid">
            <div class="row row01">
            <div class="col-6 offset-6">
                <div class="card logIn01 rounded-4" style="width: 400px;">
                <div class="card-body m-2">
                    <h2 class="text-center fw-bold">CREATE ACCOUNT</h2>
                    <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input type="text" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div class="text-center d-grid">
                    <button class="btn btn-dark">CREATE ACCOUNT</button>
                    </div>
                    <div class="d-flex">
                    <p class="small mt-3">Already have an account?</p>
                    <a href="login.php" class="ms-auto my-auto" style="text-decoration: none;">Log In</a>
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
        </section>
    </main>
<?php include 'footer.php' ?>