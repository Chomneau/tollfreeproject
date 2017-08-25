
<?php
include "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if(isset($_POST['submit'])){
        $en_about = mysqli_real_escape_string($conn, $_POST['en_about']);
        $kh_about = mysqli_real_escape_string($conn, $_POST['kh_about']);
        $facebook_url = mysqli_real_escape_string($conn, $_POST['facebook']);
        $twitter_url = mysqli_real_escape_string($conn, $_POST['twitter']);
        $youtube_url = mysqli_real_escape_string($conn, $_POST['youtube']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);



        $update= "UPDATE tbl_footer SET en_about='$en_about', kh_about='$kh_about', facebook_url ='$facebook_url', twitter_url ='$twitter_url', youtube_url = '$youtube_url', address='$address', phone='$phone', email='$email' WHERE id = '{$id}'";
        $result = mysqli_query($conn, $update);


        if(!$result){
            die("Can not update!".mysqli_error($conn));
        }
        else{
            $meg = "Record update successfully!";
            header("Location:footer_view.php?error=".urlencode($meg));
            exit();

        }
    }

    $query = "SELECT * FROM tbl_footer WHERE id = '{$id}' ";
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
<section id="container" class="" style="overflow: scroll">
    <!--include top content of dashboard page like username at the right of the top-->
    <?php require_once("header_sidebar.php") ?>
    <!--header end-->

    <!--sidebar start-->
    <?php require_once("sidebar.php") ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content" >
        <section class="wrapper">
            <!--Display head of content ex: Dashboard/Home/add about-->
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-pencil" aria-hidden="true"></i> <strong>Edit Footer</strong>  <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                </ol>
            </div>
            <!-- add new content of about form -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">

                    <form id="contact-us" method="post" action=" " enctype="multipart/form-data">
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                                <!-- Message -->
                                <label>About Description</label>
                                <textarea name="en_about" id="message" value=""  class="form textarea"  placeholder="Description"><?php echo $row['en_about']; ?></textarea>
                                <!-- ចំណងជើង -->
                                <label for="address">Facebook</label>
                                <input type="text" name="facebook" id="name" value="<?php echo $row['facebook_url']; ?>" class="form" placeholder="Facebook url" />
                                <label for="address">Twitter</label>
                                <input type="text" name="twitter" id="name" value="<?php echo $row['twitter_url']; ?>"  class="form" placeholder="twitter url" />
                                <label for="address">Youtube</label>
                                <input type="text" name="youtube" id="name" value="<?php echo $row['youtube_url']; ?>" class="form" placeholder="Facebook url" />

                            </div><!-- End Right Inputs -->

                        </div><!-- End Left Inputs -->

                        <!-- Right Inputs -->
                        <!-- Input Khmer Description-->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <label for="khmerdecription" style="font-family: Content">អំពីយើង</label>
                            <!-- ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ -->
                            <textarea name="kh_about" value="" id="message" class="form textarea"  placeholder="ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ "><?php echo $row['kh_about']; ?></textarea>
                            <label for="address">Address</label>
                            <input type="text" name="address" id="name" value="<?php echo $row['address']; ?>" class="form" placeholder="address" />
                            <label for="address">phone</label>
                            <input type="text" name="phone" id="name" value="<?php echo $row['phone']; ?>" class="form" placeholder="phone" />
                            <label for="address">email</label>
                            <input type="text" name="email" id="name" value="<?php echo $row['email']; ?>" class="form" placeholder="email" />
                        </div><!-- End Right Inputs -->



                        <!-- Bottom Submit -->

                        <div class="relative fullwidth col-xs-12" style="margin-top: 20px">
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







