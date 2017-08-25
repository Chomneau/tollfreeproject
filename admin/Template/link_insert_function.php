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

    $en_label = mysqli_real_escape_string($conn, $_POST['en_label']);
    $kh_label = mysqli_real_escape_string($conn, $_POST['kh_label']);
    $url = mysqli_real_escape_string($conn, $_POST['url']);

    date_default_timezone_set('Asia/Phnom_Penh');
    $create_date = date('Y-m-d H:i:s', time());
    $addBy = $_SESSION['user_role'];

    $insert = "INSERT INTO tbl_link(add_by,en_label,kh_label, url, create_date)
              VALUES ('$addBy','$en_label', '$kh_label', '$url', '$create_date')";

    $result = mysqli_query($conn, $insert);
    if(!$result){
        die("Can not insert into database".mysqli_error($conn));
    }
    else{
        $meg = "New record add successfully!";
        header("Location:link_view.php?error=".urlencode($meg));
        exit();
    }


}//end if