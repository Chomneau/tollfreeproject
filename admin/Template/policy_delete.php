<?php

//    $localhost = "localhost";
//    $username = "root";
//    $password = "oracle";
//    $dbname = "db_research";
include "../include/connection.php";
//    $conn = mysqli_connect($localhost, $username, $password);
//    mysqli_select_db($conn, $dbname);

//Delete from about table

$del_policy = "DELETE FROM tbl_policy WHERE id ='$_GET[id]'";// Take id from id of html
$result_policy = mysqli_query($conn, $del_policy);                       // delete.php?id="$row[user_id]"
if (!$result_policy) {
    die('can not delete' . mysqli_error($conn));
}
$megDelete= "Deleted successfully\n";
header("Location:policy_view.php?deleteSuccess=".urlencode($megDelete));


mysqli_close($conn);
