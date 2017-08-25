
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>EasyBook admin</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- add style to add newuser form css-->

    <link href="css/addnewuserstyle.css" rel="stylesheet" />
    <script src="js/addnewuser.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">



    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: EasyBook
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<!-- container section start -->
<section id="container" class="" style="position: fixed">
    <!--include top content of dashboard page like username at the right of the top-->
    <?php require_once ("admin_header.php")?>
    <!--header end-->

    <!--sidebar start-->
    <?php require_once ("sidebar.php")?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--Display head of content ex: Dashboard/Home/add about-->
            <?php require_once ("dashboard_bar_display.php")?>
            <!-- add new content of Company form -->

            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->


                    <form id="contact-us" action=" " method="POST" enctype="multipart/form-data">

                        <!--                   <div class="image">-->
<!--                            <input type="text" name="text">-->
<!---->
<!--                            <input type="hidden" name="size" value="1000000">-->
<!--                            <input type="file" name="pic"></br></br>-->
<!---->
<!--                        </div>-->


                        <div class="col-xs-3 wow animated slideInLeft" data-wow-delay=".5s"></div>
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <div class="form">
                                <label for="Upload photo">Upload company Logo</label>
                                <div style="float: left; margin: auto">
                                    <input type="hidden" name="size" value="1000000">
                                    <input type="file" name="pic"></br>
                                </div>
                            </div>

                            <input type="text" name="com_name" id="name" required="required" class="form" placeholder="Company Name" />
                            <!-- Message -->
                            <!-- Industry category -->
                            <select name="com_category" class="form" style=" color:#000000; width:100%; height: 50px" placeholder="Select industry category">
                                //php code
                                <option>Please select industry category</option>
                                <?php
                                include 'connection.php';
                                $query = "SELECT * FROM tbl_category";
                                $result = mysqli_query($conn, $query);
                                if($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option>". $row['cat_icon'].$row['cat_name'] . "</option>";

                                    }
                                }
                                ?>
                            </select>

                            <input type="text" name="com_phone" id="name" required="required" class="form" placeholder="company phone number" />

                        </div><!-- End Left Inputs -->
                        <div class="col-xs-3 wow animated slideInLeft" data-wow-delay=".5s"></div>
                        <!-- Right Inputs -->
                        <!-- Input Khmer Description-->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">

                        </div><!-- End Right Inputs -->



                        <!-- Bottom Submit -->

                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Save Now</button>

                        </div><!-- End Bottom Submit -->

                        <!-- Clear -->
                        <div class="clear"></div>


                    </form>

                    <!-- Your Mail Message -->
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
            <div class="success">
                <?php if(isset($_GET['error'])) :?>
                    <h4><i class="fa fa-check-square" aria-hidden="true"></i>
                        <?php echo $_GET['error']; ?></h4>
                <?php endif; ?>
            </div>




        </section> <!-- End of section -->

        <!-- include javascript code from file -->
        <?php require_once ("javascript_footer.php")?>


        <!---->
        <!--                    --><?php
        //                        include "connection.php";
        //                        $display = "Select * from company";
        //                        $result = mysqli_query($conn, $display);
        //                        while ($row = mysqli_fetch_array($result)){
        //                            echo '<div class="display" style="width: 250px; height: 250px">';
        //                                echo "<img  width=\"150px\" height=\"150px\" src='images/".$row['image']."' />";
        //                                echo "<br>";
        //                                echo $row['imagename'];
        //                            echo "</div>";
        //                        }
        //                    ?>

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

if(isset($_POST['submit'])){
    include "connection.php";

    $com_name = mysqli_real_escape_string($conn, $_POST['com_name']);
    $com_category = mysqli_real_escape_string($conn, $_POST['com_category']);
    $com_telephone = mysqli_real_escape_string($conn, $_POST['com_phone']);

    date_default_timezone_set('Asia/Phnom_Penh');
    $date = date('Y-m-d H:i:s', time());

    $target ="logo_upload/";
    $target = $target.basename($_FILES['pic']['name']);

    //$conn = mysqli_connect("localhost", "root", "oracle", "cam_tollfree_db");
    $image = $_FILES['pic']['name'];
    $sql = "INSERT INTO tbl_company(logo, company_name, com_category, com_phone, date) 
                VALUES ('$image', '$com_name', '$com_category', '$com_telephone', '$date')";
    mysqli_query($conn, $sql);
    if(move_uploaded_file($_FILES['pic']['tmp_name'], $target)){

        ?>
        <script>
            alert('Data added Successfully...');
            window.location.href='view_company.php';
        </script>
        <?php
        header("Location:view_company.php?error=".urlencode($msg));

    }else{
        $msg = "Data can not be inserted";
        header("Location:add_new_company_form.php?error=".urlencode($msg));

    }
}
//display image


?>
