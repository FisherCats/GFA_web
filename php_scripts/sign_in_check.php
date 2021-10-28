<?php
    $uid = $password = $verify_code = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uid = $_POST["uid"];
        $password = $_POST["password"];
        $verify_code = $_POST["verify_code"];
        // 检查uid是否为数字字符串
        if (!is_numeric($uid)) {
          $uidErr = "学号格式错误"; 
          echo $uidErr;
        }
    }

?>