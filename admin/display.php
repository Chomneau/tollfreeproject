<?php
include "../include/connection.php";
$query = "Select * from username_table";
if(!mysqli_query($conn, $query)){
    die('connection error'.mysqli_error($conn));
}else{
    echo"username: ".$row['username'];
    }
