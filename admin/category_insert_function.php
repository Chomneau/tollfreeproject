<?php
session_start();
include "../include/connection.php";

//insert data into tbl_about

if(isset($_POST['submit'])){

    $cat_name = mysqli_real_escape_string($conn, $_POST['cat_name']);
    $cat_icon = mysqli_real_escape_string($conn, $_POST['cat_icon']);

    date_default_timezone_set('Asia/Phnom_Penh');
    $create_date = date('Y-m-d H:i:s', time());
    $user_id = $_SESSION['id'];

    $insert = "INSERT INTO tbl_category(user_id, cat_name, cat_icon, create_date) 
                VALUES ('$user_id', '$cat_name', '$cat_icon','$create_date')";

    $result = mysqli_query($conn, $insert);
    if($result){
        ?>
        <script>
            alert("Data added Successfully...");
            window.location.href='new_view.php';
        </script>
        <?php
        $meg = "New record add successfully!";
        header("Location:category_view.php?error=".urlencode($meg));
    }
    else{
        die('Can not insert to database'. mysqli_error($conn));
        $meg = "Can not insert to database!";
        header("Location:category_add_form.php?error=".urlencode($meg));
        exit();
    }


}//end if
