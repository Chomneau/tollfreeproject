<?php
include "connection.php";
$sql = "insert into image (image, imagename) VALUES ('image1', 'location')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo("data is inserted");
    }else{
        echo "can not insert.";
    }
