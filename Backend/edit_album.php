<?php include 'header.php';
    include 'db_open.php';
    if (isset($_GET['Pid'])) {
        $id = $_GET['Pid'];
        // $sql = "select * from product where pkey='$id'";
        $sql = "SELECT * from category where Pid='$id'";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($result);
        $pname = $row['Pname'];
    }
    else 
    if (isset($_POST['pid'])){
        $id = $_POST['pid'];
        $pname = $_POST['pname'];
        $sql = "UPDATE category set Pname='$pname' WHERE Pid='$id'";
        if (mysqli_query($link,$sql)){
            echo "<script>alert('修改成功');location.replace('album.php');</script>";
        }
            echo "<script>alert('修改失敗');</script>";      
    }
    else{
        echo "<script>alert('修改失敗');</script>";      
    } 
?>

<div class="col-lg-12">
                        <div class="card alert">
                            <div class="card-header">
                                <h2>修改類別相簿</h2><Br/>
                                 <div class="row">
                                
                                
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="horizontal-form">
                                    <form method="post" enctype="multipart/form-data" action="edit_album.php" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">相簿類別編號：</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pid" class="form-control" value="<?=$id?>" placeholder="相簿類別編號" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">相簿類別名稱：</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pname" value="<?=$pname?>"  class="form-control" placeholder="相簿類別名稱">
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