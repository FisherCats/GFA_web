<?php
    include 'db_init.php';
    $sql = "select  * from te_users";
    //查询操作 
    $res = mysqli_query($link,$sql);
    echo mysqli_num_fields($res);
    echo mysqli_field_count(1);
    ?>