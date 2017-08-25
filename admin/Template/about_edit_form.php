
<?php
include "connection.php";

if(isset($_GET['id'])) {
    $about = $_GET['id'];
    if(isset($_POST['submit'])){
        $title_en = mysqli_real_escape_string($conn, $_POST['title_en']);
        $des_en = mysqli_real_escape_string($conn, $_POST['des_en']);
        $title_kh = mysqli_real_escape_string($conn, $_POST['title_kh']);
        $des_kh = mysqli_real_escape_string($conn, $_POST['des_kh']);



        $update_about= "UPDATE tbl_about SET en_title='$title_en', en_body='$des_en', kh_title ='$title_kh', kh_body ='$des_kh' WHERE id = '$about'";
        $result = mysqli_query($conn, $update_about);
        if(!$result){
            die("Can not update!".mysqli_error($conn));
        }
        else{
            $meg = "Record update successfully!";
            header("Location:about_view.php?error=".urlencode($meg));
            exit();

        }
    }

$query = "SELECT * FROM tbl_about WHERE id = '$about' ";
$result = mysqli_query($conn, $query);
if(!$result){
    die("Can not select data from database".mysqli_error($conn));
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
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-pencil" aria-hidden="true"></i> <strong>Edit About</strong>  <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                </ol>
            </div>
            <!-- add new content of about form -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">

                        <form id="contact-us" method="post" action=" ">
                            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                                <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                                    <!-- Name -->
                                    <input type="text" name="title_en" id="name" value="<?php echo $row['en_title']; ?>" required="required" class="form" placeholder="Title" />
                                    <!-- Message -->
                                    <textarea name="des_en" id="message" class="form textarea"  placeholder="Description"><?php echo $row['en_body']; ?></textarea>
                                </div><!-- End Right Inputs -->
                            </div><!-- End Left Inputs -->
                            <!-- Right Inputs -->
                            <!-- Input Khmer Description-->
                            <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                                <!-- ចំណងជើង -->
                                <input type="text" name="title_kh" id="name" value="<?php echo $row['kh_title']; ?>" required="required" class="form" placeholder="ចំណងជើង" />
                                <!-- ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ -->
                                <textarea name="des_kh" id="message" class="form textarea"  placeholder="ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ "><?php echo $row['kh_body']; ?></textarea>
                            </div><!-- End Right Inputs -->

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



