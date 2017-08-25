<html>
<body>
<?php
include('connection.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $query3=("update category set name='$name' where id='$id'");
        $rel = mysqli_query($conn, $query3);
        if($query3)
        {
            header('location:view.php');
        }
    }
    $query1="select * from category where id='$id'";
    $result = mysqli_query($conn, $query1);
    $query2=mysqli_fetch_array($result);
    ?>
    <form method="post" action="">
        Name:<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br />
        <br />
        <input type="submit" name="submit" value="update" />
    </form>
    <?php
}
?>
</body>
</html>