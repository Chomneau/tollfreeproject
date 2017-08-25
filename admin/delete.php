<?php

//    $localhost = "localhost";
//    $username = "root";
//    $password = "oracle";
//    $dbname = "db_research";
include "../include/connection.php";
//    $conn = mysqli_connect($localhost, $username, $password);
//    mysqli_select_db($conn, $dbname);

    $del = "DELETE FROM tbl_user WHERE id ='$_GET[id]'";// Take id from id of html
    $result = mysqli_query($conn, $del);                       // delete.php?id="$row[user_id]"
    if (!$result) {
        die('can not delete' . mysqli_error($conn));
    }
    $delete_record= "Deleted record successfully\n";
    header("Location:user_view.php?error=".urlencode($delete_record));
    exit();

//Delete from about table

$del_about = "DELETE FROM tbl_about WHERE about_id ='$_GET[id]'";// Take id from id of html
$result_about = mysqli_query($conn, $del_about);                       // delete.php?id="$row[user_id]"
if (!$result) {
    die('can not delete' . mysqli_error($conn));
}
$meg= "Deleted data successfully\n";
header("Location:about_view.php?error=".urlencode($meg));


    mysqli_close($conn);
