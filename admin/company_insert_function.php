<?php
session_start();
include "../include/connection.php";

//insert data into tbl_about

        if(isset($_POST['submit'])){

            $com_name = mysqli_real_escape_string($conn, $_POST['com_name']);
            $com_category = mysqli_real_escape_string($conn, $_POST['com_category']);
            $com_telephone = mysqli_real_escape_string($conn, $_POST['com_phone']);
            $com_did = mysqli_real_escape_string($conn, $_POST['com_did']);

            $target ="../logo_upload/";
            $target = $target.basename($_FILES['pic']['name']);
            $image = $_FILES['pic']['name'];

            date_default_timezone_set('Asia/Phnom_Penh');
            $create_date = date('Y-m-d H:i:s', time());
           // $user_id = $_SESSION['user_role'];

            $insert = "INSERT INTO tbl_company(logo, company_name, com_category, com_phone, com_did, create_date) 
                VALUES ('$image', '$com_name', '$com_category', '$com_telephone', ' $com_did ', '$create_date')";

            $result = mysqli_query($conn, $insert);
            if(move_uploaded_file($_FILES['pic']['tmp_name'], $target) && $result){
            ?>
            <script>
                alert("Data added Successfully...");
                window.location.href='new_view.php';
            </script>
            <?php
            $meg = "New record add successfully!";
            header("Location:company_view.php?error=".urlencode($meg));
            }
            else{
                die('Can not insert to database'. mysqli_error($conn));
                $meg = "Can not insert to database!";
                header("Location:company_add_form.php?error=".urlencode($meg));
                exit();
            }


         }//end if
