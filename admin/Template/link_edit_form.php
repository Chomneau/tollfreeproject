
<?php
session_start();
include "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];


    if (isset($_POST['submit'])) {
        $en_label = mysqli_real_escape_string($conn, $_POST['en_label']);
        $kh_label = mysqli_real_escape_string($conn, $_POST['kh_label']);
        $url = mysqli_real_escape_string($conn, $_POST['url']);


        date_default_timezone_set('Asia/Phnom_Penh');
        $create_date = date('Y-m-d H:i:s', time());
        $addBy = $_SESSION['user_role'];

        $update_link = "UPDATE tbl_link SET add_by='$addBy' ,en_label='$en_label', kh_label ='$kh_label', create_date='$create_date' WHERE id = '$id'";
        $result = mysqli_query($conn, $update_link);
        if (!$result) {
            die("Can not update!" . mysqli_error($conn));
        } else {
            $meg = "Record update successfully!";
            header("Location:link_view.php?error=" . urlencode($meg));
            exit();
        }
    }


    $query = "SELECT * FROM tbl_link WHERE id = '$id' ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Can not select data from database" . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($result);
}
?>

<!--about-->
<?php include_once "header_admin.php" ?>
<!-- container section start -->
<section id="container" class="" style="position: fixed">
    <!--include top content of dashboard page like username at the right of the top-->
    <?php require_once("header_sidebar.php") ?>
    <!--header end-->

    <!--sidebar start-->
    <?php require_once("sidebar.php") ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--Display head of content ex: Dashboard/Home/add about-->
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-pencil" aria-hidden="true"></i>Edit Link <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                    </ol>
                </div>
            </div>
            <!-- add new content of about form -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">

                    <form id="contact-us" method="post" action=" ">
                        <div class="col-xs-12 wow animated slideInLeft" data-wow-delay=".5s">
                            <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                                <!-- Name -->
                                <input type="text" name="en_label" id="name" value="<?php echo $row['en_label']; ?>" required="required" class="form" placeholder="English Label" />
                                <input type="text" name="kh_label" id="name" value="<?php echo $row['kh_label']; ?>" required="required" class="form" placeholder="khmer label" />
                                <input type="text" name="url" id="name" value="<?php echo $row['url']; ?>" required="required" class="form" placeholder="url" />
                                <!-- Message -->
                            </div><!-- End Right Inputs -->
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <!-- Input Khmer Description-->


                        <!-- Bottom Submit -->

                        <div class="relative fullwidth col-xs-12" style="margin-top: 20px">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Update Now</button>

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
        <?php require_once("javascript_footer.php") ?>


        <!--end about-->



