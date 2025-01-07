<?php include 'header.php';
if (isset($_POST['pname'])) {
    //接受使用者畫面欄位
    $pname = $_POST['pname'];
    //將資料寫入product資料表
    include 'db_open.php';
    $sql = "INSERT INTO category(Pca,Pname) values ('','$pname')";
    if($result = mysqli_query($link, $sql)){
        if($result){
        echo "<script>alert('新增成功');location.replace('album.php');</script>";
    }
    else {
        echo "<script>alert('新增失敗');</script>";}
    }
}
?>

                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="card-header">
                                <h2>新增相簿類別</h2><Br/>
                                 <div class="row">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="horizontal-form">
                                    <form method="post" enctype="multipart/form-data" action="add_album.php" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">相簿類別名稱：</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pname"  class="form-control" placeholder="相簿類別名稱">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5"><i class="ti-check"></i>確認</button>
                                                <a href="album.php"><button type="button" class="btn btn-default btn-flat btn-addon m-b-10 m-l-5"><i class="ti-close"></i>離開</button></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                     </div><!-- /# column -->					

						
<?php include 'footer.php';