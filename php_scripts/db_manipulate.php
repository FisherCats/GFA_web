<?php
    //新增数据  
    //引入初始文件  
    include_once 'db_init.php';
    //SQL instructions
    //SQL insert
    $sql = "insert into te_users values('5','John','22')";
    if(mysqli_query($link,$sql)){
        echo "insert successfully\n";
    }
    else{
        echo "insert failed\n";
    }
    //SQL delete
    $sql = "delete from te_users where name = 'John'";
    if(mysqli_query($link,$sql)){
        echo "delete successfully\n";
    }
    else{
        echo "delete failed\n";
    }
    //SQL update
    $sql = "update te_users set Age = 20 where name = 'maolin liu'";
    if(mysqli_query($link,$sql)){
        echo "update successfully\n";
    }
    else{
        echo "update failed\n";
    }
    mysqli_close($link);
?>