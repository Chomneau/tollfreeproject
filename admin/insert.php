<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 1/4/17
 * Time: 2:33 PM
 */

include "../include/connection.php";
$sql = "SELECT * FROM category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $num_row = mysqli_num_rows($result);
// output data of each row
    while($row = $result->fetch_assoc()) {
      echo $num_row;
    }
} else {
    echo "0 results";
}
$conn->close();
