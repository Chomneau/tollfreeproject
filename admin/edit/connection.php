<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 12/17/16
 * Time: 6:48 AM
 */

$hostname = "localhost";
$username = "root";
$password = "oracle";
$dbname = "db_research";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
    die("fail connection").mysqli_connect_errno();
}
//echo "connected";
//
//    $query = "INSERT INTO user(firstname, lastname)VALUES ('Vanthib', 'Ouch')";
//
//    if(!mysqli_query($conn, $query)){
//        die('can not insert data'.mysqli_error($conn));
//    }
//    echo 'record added';

//$conn->close();


//$query = "SELECT * FROM tbl_user";
//$result = mysqli_query($conn, $query);
//
//if ($result->num_rows > 0) {
//    $num_row = mysqli_num_rows($result);
//// output data of each row
//    while($row = $result->fetch_assoc()) {
//        $num_row;
//    }
//} else {
//    echo "0 results";
//}