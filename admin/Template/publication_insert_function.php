<?php
/**
 * Created by PhpStorm.
 * User: Chomneau
 * Date: 2/27/17
 * Time: 11:52 AM
 */
session_start();
include "connection.php";

//insert data into tbl_about

if(isset($_POST['submit'])){

    $en_title = mysqli_real_escape_string($conn, $_POST['en_title']);
    $en_body = mysqli_real_escape_string($conn, $_POST['en_body']);
    $kh_title = mysqli_real_escape_string($conn, $_POST['kh_title']);
    $kh_body = mysqli_real_escape_string($conn, $_POST['kh_body']);

    $target ="../admin/upload/";
    $target = $target.basename($_FILES['pic']['name']);
    $image = $_FILES['pic']['name'];

    date_default_timezone_set('Asia/Phnom_Penh');
    $create_date = date('Y-m-d H:i:s', time());
    $addBy = $_SESSION['user_role'];

    $insert = "INSERT INTO tbl_publication(add_by,image ,en_title, en_body, kh_title, kh_body, create_date)
              VALUES ('$addBy','$image','$en_title', '$en_body', '$kh_title', '$kh_body', '$create_date')";

    $result = mysqli_query($conn, $insert);
    if(move_uploaded_file($_FILES['pic']['tmp_name'], $target) && $result){
        ?>
        <script>
            alert("Data added Successfully...");
            window.location.href='new_view.php';
        </script>
        <?php
        $meg = "New record add successfully!";
        header("Location:publication_view.php?error=".urlencode($meg));
    }
    else{
        die('Can not insert to database'. mysqli_error($conn));
        $meg = "Can not insert to database!";
        header("Location:publication_add_form.php?error=".urlencode($meg));
        exit();
    }


}//end if