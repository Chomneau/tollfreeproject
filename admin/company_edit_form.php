<?php
session_start();
include "../include/connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
        $com_name = mysqli_real_escape_string($conn, $_POST['com_name']);
        $com_category = mysqli_real_escape_string($conn, $_POST['com_category']);
        $com_phone = mysqli_real_escape_string($conn, $_POST['com_phone']);
        $com_did = mysqli_real_escape_string($conn, $_POST['com_did']);

        $target ="../logo_upload";
        $target = $target.basename($_FILES['pic']['name']);
        $image = $_FILES['pic']['name'];
        $image_temp = $_FILES['pic']['tmp_name'];

        date_default_timezone_set('Asia/Phnom_Penh');
        $create_date = date('Y-m-d H:i:s', time());
        $user_id = $_SESSION['id'];
//to check if have have image
        if(empty($image)){
            $query = "SELECT * FROM tbl_company WHERE com_id = '{$id}'";
            $select_image = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($select_image)) {
                $image = $row['logo'];
            }
        }


        $update = "UPDATE tbl_company SET user_id='$user_id',logo='$image', company_name='$com_name', com_category='$com_category', com_phone ='$com_phone', com_did ='$com_did', create_date='$create_date' WHERE com_id = '{$id}'";
        $result = mysqli_query($conn, $update);

        if($result){
            move_uploaded_file($image_temp, $target);
            $meg = "New record add successfully!";
            header("Location:company_view.php?error=".urlencode($meg));
        }
        else{
            die('Can not insert to database'. mysqli_error($conn));
            $meg = "Can not insert to database!";
            header("Location:company_add_form.php?error=".urlencode($meg));
            exit();
        }



    }


    $query = "SELECT * FROM tbl_company WHERE com_id = '$id' ";
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
                        <li><i class="fa fa-pencil" aria-hidden="true"></i>Edit Education <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                    </ol>
                </div>
            </div>
            <!-- add new content of about form -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">

                    <form id="contact-us" action=" " method="POST" enctype="multipart/form-data">

                        <div class="col-xs-3 wow animated slideInLeft" data-wow-delay=".5s" >
                            <div class="image" style="background-color: #F4F4F4; padding: 10px 10px 10px 10px; margin-left: 120px; border-radius: 5px; box-shadow: -0.2px 1px 2px #bfbebe;">
                                <img src="<?php echo "../logo_upload/".$row['logo'];?>" width="100px" height="100px" style=" border-radius: 5px; box-shadow: -0.2px 1.5px 1px #bfbebe; ">
                                </br>
                            </div>



                        </div>
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">

                            <!-- logo -->

                            <div class="form">
                                <label for="../Upload photo"><?php echo $row['logo'];?> </label>
                                <div style="float: left; margin: auto">
                                    <input type="hidden" name="size" value="20000">
                                    <input type="file" name="pic" accept="image/*">
                                </div>
                            </div>

                            <input type="text" name="com_name" id="name" value="<?php echo $row['company_name']?>" required="required" class="form" placeholder="Company Name" />
                            <!-- phone -->
                            <input type="text" name="com_phone" id="name" value="<?php echo $row['com_phone']?>" required="required" class="form" placeholder="company phone number" />
                            <!-- did number -->
                            <input type="text" name="com_did" id="name" value="<?php echo $row['com_did']?>" required="required" class="form" placeholder="company did(023) number" />
                            <!-- Industry category -->
                            <select name="com_category" class="form"  style=" color:#000000; width:100%; height: 50px" placeholder="Select industry category">
                                //php code

                                <?php
                                include "../include/connection.php";

                                $query = "SELECT * FROM tbl_category order by cat_name ASC ";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $cat_id = $row['cat_id'];
                                        $cat_name = $row['cat_name'];
                                        echo "<option value='$cat_name'> {$cat_name} </option>";
                                    }
                                }

                                ?>
                            </select>



                        </div><!-- End Left Inputs -->
                        <div class="col-xs-3 wow animated slideInLeft" data-wow-delay=".5s"></div>
                        <!-- Right Inputs -->
                        <!-- Input Khmer Description-->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">

                        </div><!-- End Right Inputs -->



                        <!-- Bottom Submit -->

                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">update Now</button>

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



