<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 4/5/17
 * Time: 3:57 PM
 */

//    $host = "7marketplace.com";
//    $username = "cam_tollfree_dbu";
//    $password = "TFTC@db2017";
//    $db_name = "cam_tollfree_db";

$host = "localhost";
$username = "root";
$password = "";
$db_name = "cam_tollfree_db";

    $conn = mysqli_connect($host, $username, $password, $db_name);


    if(!$conn){
        die("Can not connect to database".mysqli_errno($conn));

    }
