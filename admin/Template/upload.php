<html>
<style>
    .image{
        width:500px;
        height: 40px;
        margin: 5% 25% 0% 25%;
        background-color: #00a0df;
        padding: 5% 5% 5% 5%;

    }
    .display{
        width:300px;
        height: 200px;
        margin-left: 25%;
        display: inline-block;
        border-bottom: dashed;
    }
    .display image{
        width: 200px;
        height:150px;
        padding: 2px 2px 2px 2px;
    }
</style>
    <body>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="image">
                <input type="text" name="text">

                <input type="hidden" name="size" value="1000000">
                <input type="file" name="image"></br></br>
                <input type="submit" name="upload" value="upload image">
           </div>
        </form>
        <?php  echo $msg; ?>

                    <?php
                        include "connection.php";
                        $display = "Select * from image";
                        $result = mysqli_query($conn, $display);
                        while ($row = mysqli_fetch_array($result)){
                            echo '<div class="display">';
                                echo "<img src='images/".$row['image']."'>";
                                echo "<br>";
                                echo $row['imagename'];
                            echo "</div>";
                        }
                    ?>

    </body>

</html>

<?php

//
//$conn = mysqli_connect("locahost", "root", "root", "bookingSystem");
//$sql = "insert into image (image, imagename) VALUES ('image1', 'location')"
//    $result = mysqli_query($conn, $sql);
//    if($result){
//        echo("data is inserted");
//    }else{
//        echo "can not insert.";
//    }

    if(isset($_POST['upload'])){
        $target ="images/";
        $target = $target.basename($_FILES['image']['name']);
        include "connection.php";
        //$conn = mysqli_connect("localhost", "root", "root", "bookingSystem");
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];
        $sql = "INSERT INTO image(image, imagename) VALUES ('$image', '$text')";
        mysqli_query($conn, $sql);
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg = "image uploaded";
        }else{
            $msg = "image upload has problem";
        }
    }
//display image





?>
