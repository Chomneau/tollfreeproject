<?php
include "connection.php";

//insert data into tbl_about
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {

        $en_about = mysqli_real_escape_string($conn, $_POST['en_about']);
        $kh_about = mysqli_real_escape_string($conn, $_POST['kh_about']);
        $facebook_url = mysqli_real_escape_string($conn, $_POST['facebook']);
        $twitter_url = mysqli_real_escape_string($conn, $_POST['twitter']);
        $youtube_url = mysqli_real_escape_string($conn, $_POST['youtube']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

//        $target = "../admin/upload/";
//        $target = $target . basename($_FILES['pic']['name']);
//        $image = $_FILES['pic']['name'];

        date_default_timezone_set('Asia/Phnom_Penh');
        $create_date = date('Y-m-d H:i:s', time());
        //$addBy = $_SESSION['user_role'];

        $insert = "INSERT INTO tbl_footer(en_about, kh_about, facebook_url, twitter_url, youtube_url, address, phone, email, create_date)
              VALUES ('$en_about','$kh_about','$facebook_url', '$twitter_url', '$youtube_url', '$address','$phone', '$email', '$create_date')";

        $result = mysqli_query($conn, $insert);
        if ($result) {
            $meg = "New record add successfully!";
            header("Location:footer_view.php?error=" . urlencode($meg));

        } else {
            die('Can not insert to database' . mysqli_error($conn));
            $meg = "Can not insert to database!";
            header("Location:footer_add_form.php?error=" . urlencode($meg));
            exit();
        }
    }
}
?>
