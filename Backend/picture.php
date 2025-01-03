<?php include 'header.php';
//search
$varSearch="";
$varWhere="";
//delete
if (isset($_GET['mode'])){
    $mode=$_GET['mode'];

    if ($mode=="delete"){
        $id=$_GET['id'];
        require 'db_open.php';
        $sql="delete from 0920classwork where pic='$id'";
        if ($result= mysqli_query($link, $sql)) {
            if (file_exists("image/$id.jpg")) {
                echo "檔案刪除成功<br/>";
                unlink("image/$id.jpg");}
            echo "<script>alert('id為".$id."的資料已刪除');</script>";}
        else
            echo "<script>alert('刪除失敗');</script>";
    }
}
?>

				<div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h2>景點管理</h2><Br/>
									 <div class="row">
									<a href="Attractionsdetail.php" ><button type="button" class="col-lg-2 btn btn-primary btn-flat btn-addon m-b-10 m-l-20"><i class="ti-plus"></i>新增景點 </button></a>
									<div class="basic-form col-lg-8">
                                        <form>
                                            
                                            <div class="form-group">
                                                
                                                <div class="input-group input-group-default">
                                                    <input type="text" placeholder="Search Round" name="Search" value="" class="form-control">
                                                    <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit"><i class="ti-search"></i> 查詢</button></span>
                                                </div>
                                            </div>
                                            
                                            
                                        </form>
                                    </div>
									</div>
                                </div>
                                
								<div class="card-body">
                                    <table class="table table-responsive table-striped m-t-30">
                                        <thead>
                                            <tr style="border-top:1px solid #e7e7e7;">
                                                <th>景點編號</th>
                                                <th>景點簡稱</th>
                                                <th>景點敘述</th>
                                                <th>景點圖片</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $records_per_page = 4;  // 每一頁顯示的記錄筆數
                                            $rc=0;
                                            include 'db_open.php';
                                            //echo "SELECT * FROM product".$varWhere;
                                            // $sql="SELECT * FROM 0920classwork order by pic";
                                            // $result=mysqli_query($link, $sql); 
                                            // while ($row=mysqli_fetch_assoc($result) )
                                            $result=mysqli_query($link, "SELECT * FROM 0920classwork".$varWhere);
                                            if (isset($_GET['page'])) //目前頁數
                                            {
                                                $page=$_GET['page'];
                                            }
                                            else{
                                                $page=1; 
                                            }
                                            $total_records = mysqli_num_rows($result); //總筆數
                                            $total_pages = ceil($total_records/$records_per_page); //總頁數
                                            $offset = ($page - 1) * $records_per_page; //指標偏移數
                                            mysqli_data_seek($result, $offset); //將結果指標移至讀取筆數的前一筆
                                            while ($rc < $records_per_page and $row=mysqli_fetch_assoc($result) ){
                                        ?>
                                            <tr>
                                            <th scope="row"><?=$row['pic']?></th>
                                            <td><?=$row['ptitle']?></td>
                                            <td><?=$row['pcontent']?></td>
                                            <td><img src="image/<?=$row['pic']?>.jpg" width=200 height=200></td>   
                                            <td><a href="Attractionsdetailu.php?pic=<?=$row['pic']?>"><button type="button" class="btn btn btn-info btn btn-flat btn-addon btn-sm m-b-5 m-l-5"> 
                                            <i class="ti-pencil-alt"></i>修改</button></a><button type="button" onclick="javascript:deleteConfirm('Attractions.php', '<?=$row['pic']?>')" class="btn btn btn-default btn btn-flat btn-addon btn-sm m-b-5 m-l-5">
                                            <i class="ti-trash"></i>刪除</button></td>
                                            </tr>
                                        <?php
                                        $rc=$rc+1; }?>
                                        <?php
                                            echo "<tr>\n";
                                            echo "<td colspan=5>\n";
                                            if ( $page > 1 )  // 顯示上一頁
                                            {
                                            echo "<a href='Attractions.php?page=".($page-1)."&Search=".$varSearch.
                                                    "' style=\"color: #000\">上一頁</a>| ";}
                                            for ( $i = 1; $i <= $total_pages; $i++ )
                                            if ($i != $page)
                                                echo "<a href=\"Attractions.php?page=".$i."&Search=".$varSearch."\" style=\"color: #000\";>".
                                                    $i."</a>\n ";
                                            else
                                                echo $i." ";
                                            if ( $page < $total_pages )  {   // 顯示下一頁
                                            echo "|<a href='Attractions.php?page=".($page+1)."&Search=".$varSearch.
                                                    "' style=\"color: #000\">下一頁</a> ";    
                                                     }       
                                            echo "</td>\n";
                                            echo "</tr>"    ?>                              
                                        </tbody>
                                    </table>
                                </div>
								
						
								
                            </div>
                        </div><!-- /# column -->
						
 <?php include 'footer.php';?>