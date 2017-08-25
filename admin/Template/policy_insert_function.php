<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 2/27/17
 * Time: 11:52 AM
 */
session_start();
include "connection.php";

//insert data into tbl_about

if(isset($_POST['submit'])){

    $en_title = mysqli_real_escape_string($conn, $_POST['en_title']);
    $en_body = mysqli_real_escape_string($conn, $_POST['en_body']);
    $kh_title = mysqli_real_escape_string($conn, $_POST['kh_title']);
    $kh_body = mysqli_real_escape_string($conn, $_POST['kh_body']);

    date_default_timezone_set('Asia/Phnom_Penh');
    $create_date = date('Y-m-d H:i:s', time());
    $addBy = $_SESSION['user_role'];

    $insert = "INSERT INTO tbl_policy(add_by,en_title, en_body, kh_title, kh_body, create_date)
              VALUES ('$addBy','$en_title', '$en_body', '$kh_title', '$kh_body', '$create_date')";

    $result = mysqli_query($conn, $insert);
    if(!$result){
        die("Can not insert into database".mysqli_error($conn));
    }
    else{
        $meg = "New record add successfully!";
        header("Location:policy_view.php?error=".urlencode($meg));
        exit();
    }


}//end if