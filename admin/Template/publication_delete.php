<?php

//    $localhost = "localhost";
//    $username = "root";
//    $password = "oracle";
//    $dbname = "db_research";
include "../include/connection.php";
//    $conn = mysqli_connect($localhost, $username, $password);
//    mysqli_select_db($conn, $dbname);

//Delete from about table

$del_publication = "DELETE FROM tbl_publication WHERE id ='$_GET[id]'";// Take id from id of html
$result_publication = mysqli_query($conn, $del_publication);                       // delete.php?id="$row[user_id]"
if (!$result_publication) {
    die('can not delete' . mysqli_error($conn));
}
$megDelete= "Deleted successfully\n";
header("Location:publication_view.php?deleteSuccess=".urlencode($megDelete));


mysqli_close($conn);
