<?php include 'head.php' ?>

<body>
    <?php include 'header.php' ?>
    <main class="pht bg-dark">
        <div class="container">
            <div class="row">
                <a href="add_photos.php">新增照片</a>
                <?php
                require 'db_open.php';
                $sql = "SELECT * FROM category ORDER BY Pca DESC";
                if ($result = mysqli_query($link, $sql)) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-sm-6 col-xl-4 gy-3 my-3">
                            <div class="card phtCard">
                                <img src="images/about/<?= $row['Pname'] ?>-2.jpg" class="card-img-top vh-25" alt="">
                                <div class="card-body bg-colorUL02 phtCdbdy">
                                    <h5 class="card-title"><?= $row['Pname'] ?></h5>
                                    <a href="#" class="btn btn-ULOr mt-auto">see more</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </main>
    <?php include 'footer.php' ?>