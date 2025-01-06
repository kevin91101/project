<?php
    $data = file_get_contents("php://input", "r");
    $mydata = array();
    $mydata = json_decode($data, true);

    if(isset($mydata["username"]) && isset($mydata["password"])) {
        if($mydata["username"] != "" && $mydata["password"] != "") {
            $p_username = $mydata["username"];
            $p_password = $mydata["password"];
            // echo password_hash("abcdef", PASSWORD_DEFAULT);

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ultilife";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if(!$conn) {
                die("錯誤連線:" . mysqli_connect_error());
            }

            $sql = "SELECT Ulname, Ulpasswd FROM ulmember WHERE Ulname = '$p_username'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);

                // echo $row["Username"]."<br>";
                // echo $row["Password"]."<br>";
                // if(password_verify($p_password, $row["Ulpasswd"])) {
                //     // 比對正確
                //     echo '{"state": true, "message": "登入成功"}';
                // }else {
                //     // 比對失敗
                //     echo '{"state": false, "message": "登入失敗"}';
                // }
                if($p_password == $row["Ulpasswd"]) {
                    echo '{"state": true, "message": "登入成功"}';
                }else {
                    echo '{"state": false, "message": "登入失敗"}';
                }
            }else {
                echo '{"state": false, "message": "登入失敗"}';
            }

            mysqli_close($conn);
        }else {
            echo '{"state": false, "message": "欄位不得為空白!"}';
        }
    }else {
        echo '{"state": false, "message": "欄位不存在!"}';
    }
?>