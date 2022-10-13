<?php
    $db_host = 'database-1.cgmics3qdill.ap-southeast-2.rds.amazonaws.com';
    $db_user = 'admin';
    $db_pass = '1qaz2wsx';
    $db_name = 'database-1';

    $con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    // if (!$con) {
    //     echo "<script>alert(\"DB 접속 오류\");</script>";
    // }
    // else {
    //     echo "<script>alert(\"DB 접속 성공\");</script>";
    // }
?>
