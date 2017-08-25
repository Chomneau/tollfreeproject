




<?php

include "connection.php";
$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);
if(!$result){
    die("Can not select data from database".mysqli_error($conn));
}
while ($row = mysqli_fetch_array($result)) {
   $name = $row['name'];
}
?>
<from action="testedit.php" method="Post">
    <input type="text" name="name" value="<?php echo $name?>">
    <input type="submit" name="save" value="save">
</from>

<?php
    if(isset($_POST['save'])) {
        $getId = $_GET['id'];

        $name =$_POST['name'];
        // update data in mysql database
        $sql="UPDATE tbl_category SET name='$name' WHERE id='$getId'";
        $result=mysqli_query($sql);

// if successfully updated.
        if($result){
            echo "Successful";
            echo "<BR>";
        }
        else {
            echo "ERROR";
        }
    }
?>

<hr>


<hr>