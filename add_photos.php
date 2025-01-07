<?php include 'head.php';
if(isset($_POST['pid'])) {
    $id = $_POST['pid'];
    $title = $_POST['ptitle'];
    $category = $_POST['pca'];
    include 'db_open.php';
    $sql = "INSERT INTO photos(Pid, Ptitle, Pca) VALUES ('$id', '$title', '$category')";
    if(mysqli_query($link, $sql)) {
        if(isset($_FILES['file'])) {
            $extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
            echo $extension;
            if($extension == "jpg") {
                $name = $title.".".$extension;
                copy($_FILES['file']['tmp_name'],"images/photostest/$name");
            }
        }
        echo "<script>alert('新增成功!');location.replace('photos.php');</script>";
    }else {
        echo "<script>alert('新增失敗!');</script>";
    }
}
?>
<body class="bg-colorUL02">
    <?php include 'header.php' ?>
    <main class="addp h-auto">
        <div class="horizontal-form">
            <form method="post" enctype="multipart/form-data" action="add_photos.php" class="form-horizontal d-flex flex-column justify-content-center align-items-center">
                <div class="mb-3 text-white" style="display: none;">
                    <label for="" class="form-label">照片編號:</label>
                    <input type="text" name="pid" class="form-control">
                </div>
                <div class="mb-3 text-white">
                    <label for="" class="form-label">照片名稱:</label>
                    <input type="text" name="ptitle" class="form-control">
                </div>
                <div class="mb-3 text-white">
                    <label for="" class="form-label">類別</label>
                    <?php
                    include 'db_open.php';
                    $sql = "SELECT * FROM category ORDER BY Pca";
                    $result = mysqli_query($link, $sql);
                    ?>
                    <select name="pca" size="1" id="" class="form-select">
                        <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=\"".$row['Pca']."\">".$row['Pname']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="upFile mb-3">
                    <div class="rBackImg"></div>
                    <div class="upFileLogo">
                        <p>+</p>
                        <input type="file" name="file" onchange="upFile(this)" multiple>
                    </div>
                </div>
                <div class="addBtn">
                    <button class="btn btn-primary text-white" type="submit">新增</button>
                    <button class="btn btn-danger text-white">取消</button>
                </div>
            </form>
        </div>
    </main>

    <div class="goTop hide">
        <a href="#" class="goTopBtn jq-goTop">
        <i class="fa-solid fa-circle-chevron-up fa-3x"></i>
        </a>
    </div>

<?php include 'footer.php' ?>