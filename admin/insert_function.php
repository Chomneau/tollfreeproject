<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 2/27/17
 * Time: 11:52 AM
 */
    session_start();
include "../include/connection.php";

    //insert data into tbl_about

    if(isset($_POST['submit'])){

    $title_en = mysqli_real_escape_string($conn, $_POST['title_en']);
    $des_en = mysqli_real_escape_string($conn, $_POST['des_en']);
    $title_kh = mysqli_real_escape_string($conn, $_POST['title_kh']);
    $des_kh = mysqli_real_escape_string($conn, $_POST['des_kh']);

    date_default_timezone_set('Asia/Phnom_Penh');
    $created_date = date('Y-m-d H:i:s', time());
    $user_id = $_SESSION['id'];

    $insert = "INSERT INTO tbl_about(en_title, en_body, kh_title, kh_body, created_date)
              VALUES ('$title_en', '$des_en', '$title_kh', '$des_kh', '$created_date')";

    $result = mysqli_query($conn, $insert);
    if(!$result){
        die("Can not insert into database".mysqli_errno($conn));
    }
    else{
        $meg = "New record add successfully!";
        header("Location:about_view.php?error=".urlencode($meg));
        exit();
    }


    }//end if