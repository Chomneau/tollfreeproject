<?php

//    $localhost = "localhost";
//    $username = "root";
//    $password = "oracle";
//    $dbname = "db_research";
include "../include/connection.php";
//    $conn = mysqli_connect($localhost, $username, $password);
//    mysqli_select_db($conn, $dbname);

//Delete from about table

$del_about = "DELETE FROM tbl_about WHERE about_id ='$_GET[id]'";// Take id from id of html
$result_about = mysqli_query($conn, $del_about);                       // delete.php?id="$row[user_id]"
if (!$result_about) {
    die('can not delete' . mysqli_error($conn));
}
$megDelete= "Deleted successfully\n";
header("Location:about_view.php?deleteSuccess=".urlencode($megDelete));


mysqli_close($conn);
