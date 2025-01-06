<?php
    //input: {"username" : "xxx", "password" : "xxx", "email" : "xxx", "interest" : "xxx"}
    $data = file_get_contents("php://input", "r");
    // echo $data;
    $mydata = array();
    $mydata = json_decode($data, true);

    if(isset($mydata['username']) && isset($mydata['password']) && isset($mydata['email'])) {
        if($mydata['username'] != "" && $mydata['password'] != "" && $mydata['email'] != "") {
            $p_username = $mydata['username'];
            $p_password = $mydata['password'];
            $p_email = $mydata['email'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ultilife";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if(!$conn) {
                die("連線錯誤!" . mysqli_connect_error());
            }

            $sql = "INSERT INTO ulmember(Ulname, Ulpasswd, Ulemail) VALUES ('$p_username', '$p_password', '$p_email')";
            if(mysqli_query($conn, $sql)) {
                echo '{"state" : true, "message" : "新增成功"}';
            }else {
                echo '{"state" : false, "message" : "新增失敗"}';
            }
            mysqli_close($conn);
        }else {
            echo '{"state" : false, "message" : "輸入格式錯誤1"}';
        }
    }else {
        echo '{"state" : false, "message" : "輸入格式錯誤2"}';
    }
?>