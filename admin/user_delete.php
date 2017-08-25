<?php

include "../include/connection.php";

$query = "DELETE FROM tbl_users WHERE id ='$_GET[id]'";// Take id from id of html
$result = mysqli_query($conn, $query);                       // delete.php?id="$row[user_id]"
if (!$result) {
    die('can not delete' . mysqli_error($conn));
}
$megDelete= "Deleted successfully\n";
header("Location:user_view.php?error=".urlencode($megDelete));


mysqli_close($conn);
