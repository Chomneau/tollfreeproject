<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 1/9/17
 * Time: 9:11 AM
 */




ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
?>

<html>
    <body>
        <form enctype="multipart/form-data" method="post" action="upload_image.php">
            <input type="file" name ="image" /></br>
            <input type="submit" name="submit" value="upload"/>
        </form>
    <?php
        if(isset($_POST['submit'])){
            $target ="upload/".basename($_FILES['image']['name']);

            $image = $_POST['image'];
            //connect to db
            $conn = mysqli_connect("localhost", "root", "root", "bookingSystem");

            $query = "INSERT INTO company_image(name, image) VALUES ('$name', '$image')";
            $result= mysqli_query($query, $conn);
            if(!$result){
                die('can not upload image').mysqli_error($conn);
            }else{
                echo "image is uploaded";
            }





//            if(getimagesize($_FILES['image']['tmp_name'])==false){
//                echo "please select image";
//            }
//            else{
//                $image = addcslashes($_FILES['image']['tmp_name']);
//                $name = addcslashes($_FILES['image']['name']);
//                $image = file_get_contents($image);
//                $image = base64_encode($image);
//                saveImage($name, $image);
//            }
        }

        function saveImage($name, $image){
//            $hostname = "localhost";
//            $username = "root";
//            $password = "root";
            //$dbname = "bookingSystem";
           // $conn = mysqli_connect($hostname, $username, $password);
            $conn = mysqli_connect("localhost", "root", "root");
            mysqli_select_db("bookingSystem", $conn);
            $query = "INSERT INTO Company_image(name, image)
                      VALUES ('$name', '$image')";
            $result = mysqli_query($query, $conn);
            if($result){
                echo"image uploaded";
            }
            else{
                echo "Can not upload image";
            }

        }//end function
    ?>


    </body>

</html>
