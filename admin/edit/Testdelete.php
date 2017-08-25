
<?php
include "connection.php";
$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);
if(!$result){
    die("Can not select data from database".mysqli_error($conn));
}
while ($row = mysqli_fetch_array($result)) {
    echo "id -> ". $name = $row['name']."<a href='testedit.php?edit=$row[id]'>  Edit</a>";
    echo "<br>";

}

?>


