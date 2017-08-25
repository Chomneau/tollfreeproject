<?php

include "../include/connection.php";

$query = "DELETE FROM tbl_company WHERE com_id ='$_GET[id]'";// Take id from id of html
$result = mysqli_query($conn, $query);                       // delete.php?id="$row[user_id]"
if (!$result) {
    die('can not delete' . mysqli_error($conn));
}
$megDelete= "Deleted successfully\n";
header("Location:company_view.php?deleteSuccess=".urlencode($megDelete));


mysqli_close($conn);
