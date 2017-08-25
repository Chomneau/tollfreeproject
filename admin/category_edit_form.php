<?php
session_start();
include "../include/connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if(isset($_POST['submit'])){
        $cat_name = mysqli_real_escape_string($conn, $_POST['cat_name']);
        $cat_icon = mysqli_real_escape_string($conn, $_POST['cat_icon']);


        date_default_timezone_set('Asia/Phnom_Penh');
        $create_date = date('Y-m-d H:i:s', time());
        $user_id = $_SESSION['id'];

        $update_category= "UPDATE tbl_category SET user_id = '$user_id', cat_name='$cat_name', cat_icon='$cat_icon', create_date='$create_date' WHERE cat_id = '$id'";
        $result = mysqli_query($conn, $update_category);
        if(!$result){
            die("Can not update!".mysqli_error($conn));
        }
        else{
            $meg = "Record update successfully!";
            header("Location:category_view.php?error=".urlencode($meg));
            exit();
        }
    }

    $query = "SELECT * FROM tbl_category WHERE cat_id = '$id' ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Can not select data from database" . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($result);
}

?>

<!--about-->
<?php include_once "header_admin.php"?>
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
                        <li><i class="fa fa-pencil" aria-hidden="true"></i>Edit Category <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                    </ol>
                </div>
            </div>
            <!-- add new content of about form -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">

                    <form id="contact-us" method="post" action=" ">

                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">

                            <!-- logo -->

                            <input type="text" name="cat_name" value="<?php echo $row['cat_name']  ?>" required="required" class="form" placeholder="category" />
                            <!-- name -->
                            <!-- Bottom Submit -->

                            <!-- Clear -->
                            <div class="clear"></div>

                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <?php $icon = $row['cat_icon']  ?>
                            <input type="text" name="cat_icon" value="<?php echo htmlspecialchars($row['cat_icon']) ;  ?>" required="required" class="form" placeholder="category" />
                            <p> please visit:<a href="http://fontawesome.io/icons/" target="_blank">fontawesome</a> to get the icon. copy the icon that match with your category and paste here. it look like this</br> &lt;i&gt; class="fa fa-credit-card-alt" aria-hidden="true">&lt;/i&gt;</p>
                        </div>

                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Save Now</button>
                        </div><!-- End Bottom Submit -->
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



