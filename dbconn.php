<?php
    $db_host = 'terraform-20221018141006336000000003.cgmics3qdill.ap-southeast-2.rds.amazonaws.com';
    $db_user = 'admin';
    $db_pass = 'adminpassword';
    $db_name = 'web01';

    $con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    // if (!$con) {
    //     echo "<script>alert(\"DB 접속 오류\");</script>";
    // }
    // else {
    //     echo "<script>alert(\"DB 접속 성공\");</script>";
    // }
?>
